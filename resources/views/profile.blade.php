<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e2e2e2;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .profile-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 400px;
            text-align: center;
        }
        .profile-header {
            font-size: 28px;
            font-weight: bold;
            color: #4A90E2;
            margin-bottom: 20px;
        }
        .profile-info {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .profile-info label {
            font-weight: bold;
            color: #555;
        }
        .profile-info div {
            font-size: 16px;
            color: #333;
        }
        .profile-footer {
            margin-top: 20px;
            font-size: 14px;
            color: #888;
        }
        .profile-footer a {
            color: #4A90E2;
            text-decoration: none;
            font-weight: bold;
        }
        .profile-footer a:hover {
            text-decoration: underline;
        }
        .profile-picture {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <img src="{{ asset('images/profile.jpg') }}" alt="Profile Picture" class="profile-picture">
        <div class="profile-header">Profile Information</div>
        <div class="profile-info">
            <label for="nama">Nama:</label>
            <div id="nama">{{ $nama }}</div>
        </div>
        <div class="profile-info">
            <label for="kelas">Kelas:</label>
            <div id="kelas">{{ $kelas }}</div>
        </div>
        <div class="profile-info">
            <label for="npm">NPM:</label>
            <div id="npm">{{ $npm }}</div>
        </div>
        <div class="profile-footer">
            <a href="/">Back to Home</a>
        </div>
    </div>
</body>
</html>