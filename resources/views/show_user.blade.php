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
            font-family: 'Poppins', sans-serif; /* Perbaikan dari 'f' yang tidak perlu */
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

        h1, h5 {
            margin: 0;
            font-size: 30px;
            font-weight: bold;
            color: #0afff3;
        }

        h5 {
            margin: 20px 0; /* Merubah margin untuk h5 */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="containerr">
        @if($user->foto)
            <img src="{{ Storage::url($user->foto) }}" alt="Foto User" class="profile-img">
        @else
            <p>Foto tidak tersedia</p>
        @endif

        <div class="card">
            <h5 class="card-title">{{ $user->nama }}</h5>
            {{-- <h5 class="card-title">{{ $user->npm ?? 'NPM tidak tersedia' }}</h5> <!-- Jika npm sementara tidak digunakan, bisa dikomentari -->
            <h5 class="card-title">{{ $nama_kelas ?? 'Kelas tidak ditemukan' }}</h5> --}}
            <h5 class="card-title">{{ $user->ipk ?? 'IPK tidak tersedia' }}</h5>
            
            <hr>
            <a href="{{ route('user.list') }}" class="btn-kembali">Kembali ke List</a>
        </div>
    </div>
</div>

</body>
</html>
