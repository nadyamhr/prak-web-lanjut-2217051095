@extends('layouts.app')
@section ('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column; /* Mengatur agar konten ditampilkan secara vertikal */
        height: 100vh;
        margin: 0;
    }

    table {
        width: 80%; /* Mengatur lebar tabel */
        margin-top: 20px; /* Jarak atas tabel */
        border-collapse: collapse; /* Menghilangkan jarak antar border */
        background-color: #fff; /* Warna latar belakang tabel */
        border-radius: 8px; /* Radius untuk sudut tabel */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
    }

    th, td {
        padding: 10px; /* Padding untuk sel tabel */
        text-align: left; /* Teks rata kiri */
        border-bottom: 1px solid #ddd; /* Garis pemisah bawah */
    }

    th {
        background-color: #6AB2FF; /* Warna latar belakang header */
        color: white; /* Warna teks header */
    }

    tr:hover {
        background-color: #f1f1f1; /* Warna latar belakang saat hover */
    }

    .action-buttons {
        display: flex;
        justify-content: space-between; /* Memisahkan tombol aksi */
    }

    .btn {
        padding: 5px 10px; /* Padding untuk tombol */
        background-color: #6AB2FF; /* Warna latar belakang tombol */
        border: none; /* Tanpa border */
        color: white; /* Warna teks tombol */
        border-radius: 4px; /* Radius untuk sudut tombol */
        cursor: pointer; /* Menunjukkan bahwa tombol dapat diklik */
        text-decoration: none; /* Menghilangkan garis bawah pada link */
        text-align: center; /* Menyelaraskan teks di tengah */
    }

    .btn:hover {
        background-color: #4A90E2; /* Warna latar belakang saat hover */
    }
</style>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user) {
            ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['nama'] ?></td>
                <td><?= $user['npm'] ?></td>
                <td><?= $user['nama_kelas'] ?></td>
                <td>
                    <div class="action-buttons">
                        <a href="#" class="btn">Detail</a>
                        <a href="#" class="btn">Hapus</a>
                    </div>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
@endsection