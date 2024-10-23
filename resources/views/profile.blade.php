@extends('layouts.app')

@section ('container')
<div class="card">
    <div class="img-bx">
        <img src="/assets/img/kucing.png" alt="img" />
    </div>
    <div class="content">
        <div class="detail">
            <h2><?= $nama ?><br /><span><?= $npm ?></span><br /><span><?= $nama_kelas ?? 'Kelas tidak ditemukan' ?></span>
            </h2>
        </div>
    </div>
</div>

@endsection
