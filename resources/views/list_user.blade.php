<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
    background: linear-gradient(to right, #ff7eb3, #ff3d8e);
    font-family: Arial, sans-serif;
}

.container {
    margin-top: 50px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

h1 {
    color: #4a2c65;
}

.table {
    width: 100%;
    border-collapse: collapse;
}

.table th, .table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #eaeaea;
}

.table th {
    background-color: #ffb3d9;
    color: #4a2c65;
}

.table tr:hover {
    background-color: #fce4e1;
}

.btn {
    transition: background-color 0.3s, transform 0.3s;
}

.btn-primary {
    background-color: #6a5acd;
    color: white;
}

.btn-primary:hover {
    background-color: #5b4cbd;
    transform: scale(1.05);
}

.btn-warning {
    background-color: #ffcc00;
    color: black;
}

.btn-warning:hover {
    background-color: #e6b800;
    transform: scale(1.05);
}

.btn-danger {
    background-color: #ff4d4d;
    color: white;
}

.btn-danger:hover {
    background-color: #e60000;
    transform: scale(1.05);
}

.table img {
    border-radius: 50%;
}

.btn-tambah {git
    padding: 10px;
    background-color: #6AB2FF;
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin-top: 20px;
}
.btn-tambah:hover {
    background-color: #4A90E2;
}

</style>
</head>
<body>
    <div class="mb-3 mt-2 m-3">
        <a href="{{ route('user.create') }}" class="btn-tambah">Tambah User</a>
    </div>

    <div class="container mt-5">
        <h1 class="text-center">List Data</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
          foreach ($users as $user) {
          ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['nama'] ?></td>
                    <td><?= $user['npm'] ?></td>
                    <td><?= $user['nama_kelas'] ?></td>
                    <td>
                        <img src="{{ asset('storage/uploads/' . $user->foto) }}" alt="Foto User" width="100">
                    </td>
                    <td>
                        <!-- View -->
                        <a href="" class="btn btn-primary btn-sm">View</a>

                        <!-- Edit -->
                        <a href="" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Delete -->
                        <form action="" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php
          }
          ?>
            </tbody>
        </table>
    </div>

</body>
</html>




