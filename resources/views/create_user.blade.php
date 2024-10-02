@extends('layouts.app')

@section('content')
    <form action="{{ route('user.store') }}" method="POST">
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
            <label for="kelas_id">Kelas:</label>
            <select name="kelas_id" id="kelas_id" required>
                @foreach($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection