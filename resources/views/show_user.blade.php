<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');

        body {
            f  font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #7c0d86 0%, #f371ae 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {

            border-radius: 20px;
            padding: 30px;
            width: 300px;
            text-align: center;
            box-shadow: 1px 1px 25px 1px rgb(153, 65, 224),
                        1px 2px 25px 2px rgba(240, 66, 147, 0.4);
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid rgba(123, 235, 255, 0.6);
            box-shadow: 1px 1px 20px 1px rgb(123, 235, 255);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .profile-img:hover {
            transform: scale(1.05);
        }

        .info {
            width: 100%;
        }

        .btn-kembali {
            color: #940ea3;
            box-shadow: 1px 1px 20px 1px rgb(123, 235, 255);
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            background-color: #9aedf3;
            transition: background-color 0.3s ease;
        }

        .label {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 10px;
            color: #00ff91;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .label:hover {
            background-color: rgba(152, 240, 248, 0.4);
            transform: translateY(-2px);
        }

        h1 {
            margin: 0;
            font-size: 30px;
            font-weight: bold;
            color: #0afff3;
        }

        h5{
            margin:40px;
            font-size: 30px;
            font-weight: bold;
            color: #0afff3;
        }
    </style>
</head>
<body>


<div class="container">
    <div class="containerr">
        @if($user->foto)
        @else
        <p>Foto tidak tersedia</p>
        @endif
        <div class="card">
            <h5 class="card-title">{{ $user->nama }}</h5>
            <h5 class="card-title">{{ $user->npm }}</h5>
            <h5 class="card-title">{{ $nama_kelas ?? 'Kelas tidak ditemukan' }}</h5>
            <img src="{{ Storage::url($user->foto) }}" alt="Foto User" width="100">

            <hr>
            <a href="{{ route('user.list') }}" class="btn-kembali">Kembali ke List</a>
        </div>
    </div>
</div>


</body>
</html>
