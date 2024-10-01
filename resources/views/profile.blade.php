<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .profile-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .profile-info {
            margin-bottom: 15px;
        }
        .profile-info label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        .profile-info div {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
        }
        .button {
            width: 100%;
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
            margin-top: 20px; /* Space between info and button */
        }
        .button:hover {
            background-color: #4A90E2;
        }
    </style>
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