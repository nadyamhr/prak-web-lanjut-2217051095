<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use App\Models\UserModel;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public $userModel;
    public $kelasModel;


    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_user', $data);
    }

    public function create(){
        $kelasModel = new Kelas();

        // Mengambil data kelas menggunakan method getKelas
        $kelas = $kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store(Request $request)
    {
    // Validasi input
        $request->validate([
            'nama' => 'required',
            'kelas_id' => 'required',
            'ipk' => 'nullable|numeric|between:0,4',
            'foto' =>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $filename, 'public');

            // Simpan data user ke database
            $this->userModel->create([
                'nama' => $request->input('nama'),
                'kelas_id' => $request->input('kelas_id'),
                'ipk' => $request->input('ipk'),
                'foto' => $filePath,
            ]);
        }


        return redirect()->to('/');
    }

    public function edit($id){
        $user = UserModel::findOrFail($id);
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        $title = 'Edit User';
        return view('edit_user', compact('user', 'kelas', 'title'));
    }

    public function update(Request $request, $id)
    {
        $user = UserModel::findOrFail($id);

        $user->nama = $request->nama;
        $user->kelas_id = $request->kelas_id;
        $user->ipk = $request->ipk; // Menyimpan IPK yang diupdate

        // Cek apakah ada file foto yang di-upload
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($user->foto) {
                $oldFilePath = public_path('storage/uploads/' . $user->foto);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            // Simpan file baru
            $file = $request->file('foto');
            $newFilename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $newFilename, 'public');
            $user->foto = $newFilename;
        }

        // Simpan perubahan pada user
        $user->save();

        return redirect()->route('user.list')->with('success', 'User Berhasil di Update');
    }

    public function show($id)
    {
        $user = UserModel::where('id', $id)->firstOrFail();
        $kelas = Kelas::find($user->kelas_id);

        $data = [
            'user' => $user,
            'nama_kelas' => $kelas ? $kelas->nama : null,
        ];

    return view('show_user', $data);
    }

    public function destroy($id)
    {
        $user = UserModel::findOrFail($id);
        $user->delete();

    return redirect()->route('user.list')->with('success', 'User deleted successfully.');
    }
}
