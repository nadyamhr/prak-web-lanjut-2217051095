<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html, body {
    height: 100%;
    font-family: 'Poppins', sans-serif;
    background-color: #f0f2f5;
}


body {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}


.container-1 {
    text-align: right;
    margin-bottom: 15px;
}

.container-2 {
    width: 100%;
    max-width: 500px;
    background-color: #ffffff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    animation: fadeIn 0.5s ease;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.container-2 h1 {
    font-size: 28px;
    text-align: center;
    margin-bottom: 20px;
    color: #34495e;
}

.label-1 {
    margin-bottom: 20px;
}

.label-1 label {
    display: block;
    font-size: 16px;
    font-weight: bold;
    color: #2c3e50;
    margin-bottom: 5px;
}

.form-control {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 5px;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    border-color: #3498db;
    outline: none;
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
}

.form-select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 15px;
}

img {
    margin-top: 10px;
    border-radius: 5px;
}

.btn-submit {
    font-size: 16px;
    width: 100%;
    padding: 12px;
    background-color: #27ae60;
    color: white;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 10px;
}

.btn-submit:hover {
    background-color: #2ecc71;
}

/* Tombol Kembali */
.btn-kembali {
    display: block;
    width: 100%;
    padding: 12px;
    margin-top: 10px;
    background-color: #3498db;
    color: white;
    text-align: center;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.btn-kembali:hover {
    background-color: #2980b9;
}

/* Tombol List User */
.btn-success {
    background-color: #27ae60;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.btn-success:hover {
    background-color: #2ecc71;
}

/* Responsif */
@media (max-width: 576px) {
    .container-2 {
        padding: 20px;
    }

    .btn-submit, .btn-kembali {
        padding: 10px;
    }
}

    </style>
</head>
<body>

</body>
</html>
<div>

    <form action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container-2">
            <a href="{{ route('user.list') }}" class="btn btn-success">List User</a>
            <h1 class="text-center">Input Data</h1>
            <div class="label-1">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama', $user->nama) }}"
                    placeholder="Nama anda">
            </div>

            <div class="label-1">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" class="form-control" name="npm" id="npm" value="{{ old('npm', $user->npm) }}"
                    placeholder="NPM anda">
            </div>

            <label for="kelas">Kelas</label>
            <select class="form-select" name="kelas_id" id="kelas_id">
                @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                    {{ $kelasItem->nama_kelas }}
                </option>
                @endforeach
            </select><br>

            <div class="label-1">
                <label for="foto" class="form-label">Foto</label>
                <input class="form-control" type="file" id="foto" name="foto">
                @if ($user->foto)
                <img src="{{ asset('storage/uploads/' . $user->foto) }}" alt="Foto User" width="100">
                @endif
            </div>

            <button type="submit" class="btn-submit">Submit</button>
            <a href="{{ route('user.list') }}" class="btn-kembali">Kembali</a>
        </div>
    </form>

</div>
</body>
</html>
