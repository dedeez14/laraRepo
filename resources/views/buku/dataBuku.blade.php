@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($siswa as $key => $value) { ?>
                        <tr>
                            <td><?= $value['nama'] ?></td>
                            <td><?= $value['kelas'] ?></td>
                            <td><?= $value['jurusan'] ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>
@endsection
