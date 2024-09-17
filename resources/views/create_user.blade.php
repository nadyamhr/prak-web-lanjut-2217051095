<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
    </div>
    <div>
        <label for="npm">NPM:</label>
        <input type="text" name="npm" id="npm">
    </div>
    <div>
        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" id="kelas">
    </div>
    <button type="submit">Submit</button>
</form>
</body>
</html>