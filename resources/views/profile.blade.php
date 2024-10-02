<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile User</title>
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
</head>
<body>
    <div class="profile-container">
        <h1>Profil User</h1>
        <div class="profile-info">
            <label>Nama:</label>
            <div>{{ $nama }}</div>
        </div>
        <div class="profile-info">
            <label>NPM:</label>
            <div>{{ $npm }}</div>
        </div>
        <div class="profile-info">
            <label>Kelas:</label>
            <div>{{ $nama_kelas ?? 'Kelas tidak ditemukan' }}</div>
        </div>
        <a href="{{ route('user.create') }}" class="button">Kembali ke Form</a>
    </div>
</body>
</html>
