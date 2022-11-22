@extends('layouts.app')

@section('title','Replacement')

@section('content')

        <style>
            /* container {
                width: 100%;
                text-align: left;
            }
            row {
                width: 100%;
            } */
            /* body{
                padding: 15px;
            } */
            /* h5{
                margin-top: -15px;
            } */
            /* table, th, td{
                border: 1px solid;
            } */
        </style>
        <a target="_blank" href="/laporan/replacement/pdf" 
        class="btn btn-primary">Cetak PDF</a>
        <br>
        <br>
        <h1>
            Laporan Replacement Class
        </h1>
        <hr>
        <table>
            <tr>
                {{-- <th>Nama Lengkap</th>
                <th>Nama Mata Kuliah</th> --}}
                {{-- <th>Kelas</th>
                <th>Program Studi</th>
                <th>Semester</th>
                <th>Tahun Akademik</th>
                <th>Jadwal Tanggal Replacement</th>
                <th>Jadwal Jam Kuliah</th>
                <th>Tanggal Replacement</th>
                <th>Jam Replacement</th>
                <th>Alasan melakukan <i>replacement class</i></th> --}}
            </tr>
            @foreach ($replacement as $rpe)
                <div class="container text-left">
                    <br>
                    <div class="row">
                        <div class="col">
                            <b>Nama Lengkap</b>
                        </div>
                        <div class="col">
                            : {{$rpe->nama_lengkap}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Nama Mata Kuliah</b>
                        </div>
                        <div class="col">
                            : {{$rpe->mata_kuliah}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Kelas</b>
                        </div>
                        <div class="col">
                            : {{$rpe->kelas}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Program Studi</b>
                        </div>
                        <div class="col">
                            : {{$rpe->prodi}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Semester</b>
                        </div>
                        <div class="col">
                            : {{$rpe->semester}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Tahun Akademik</b>
                        </div>
                        <div class="col">
                            : {{$rpe->tahun_akademik}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Jadwal & Tanggal Replacement</b>
                        </div>
                        <div class="col">
                            : {{$rpe->tanggal}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Jam Kuliah</b>
                        </div>
                        <div class="col">
                            : {{$rpe->jadwal_kuliah}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Tanggal Replacement</b>
                        </div>
                        <div class="col">
                            : {{$rpe->tanggal_replacement}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Jam Replacement</b>
                        </div>
                        <div class="col">
                            : {{$rpe->jam_replacement}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Alasan</b>
                        </div>
                        <div class="col">
                            : {{$rpe->alasan_replacement}}<br>
                        </div>
                    </div>
                    
                </div>
            @endforeach
        </table>

@endsection