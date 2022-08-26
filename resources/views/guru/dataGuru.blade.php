@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Mapel</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guru as $item => $value)
                        <tr>
                            <td>{{$value['nama']}}</td>
                            <td>{{$value['mapel']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
