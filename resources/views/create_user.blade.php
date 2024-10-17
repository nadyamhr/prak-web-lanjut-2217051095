@extends('layouts.app')

@section('content')
<a href="{{ route('user.list') }}" class="btn btn-success"></a>
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Create User</h1>
        <div>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div>
            <label for="npm">NPM:</label>
            <input type="text" name="npm" id="npm" required>
        </div>
        <div>
            <label for="kelas_id">Kelas:</label><br>
            <select name="kelas_id" id="kelas_id" required>
                @foreach($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="foto">Foto:</label><br>
            <input type="file" id="foto" name="foto"><br><br>
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection
