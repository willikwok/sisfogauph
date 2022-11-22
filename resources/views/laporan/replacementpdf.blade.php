<html>
    <head>
        <title>Replacement</title>
    </head>
    <body>
        
        <style>
            container {
                width: 100%;
                text-align: left;
            }
            row {
                width: 100%;
            }
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
                    <b>Nama Lengkap</b>: {{$rpe->nama_lengkap}}<br>            
                    <b>Nama Mata Kuliah </b> : {{$rpe->mata_kuliah}}<br>
                    <b>Kelas </b> : {{$rpe->kelas}}<br>
                    <b>Program Studi </b> : {{$rpe->prodi}}<br>
                    <b>Semester </b> : {{$rpe->semester}}<br>
                    <b>Tahun Akademik </b> : {{$rpe->tahun_akademik}}<br>
                    <b>Jadwal Tanggal Replacement </b> : {{$rpe->tanggal}}<br>
                    <b>Jadwal Jam Kuliah </b> : {{$rpe->jadwal_kuliah}}<br>
                    <b>Tanggal Replacement </b> : {{$rpe->tanggal_replacement}}<br>
                    <b>Jam Replacement </b> : {{$rpe->jam_replacement}}<br>
                    <b>Alasan melakukan <i>replacement class</i> </b> : {{$rpe->alasan_replacement}}<br>
                </div>
            @endforeach
        </table>
    </body>
</html>