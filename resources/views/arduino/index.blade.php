@extends('adminlte::page')

@section('title', 'Arduino')

@section('content_header')
    <h1>Arduino</h1>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>


@stop

@section('content')
    <div class="box">
        <div class="box-header">
          

            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createArduino">Adicionar arduino</button>
        </div>
        <div class="box-body">


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>IP</th>
                        <th>MAC Address</th>

                    </tr>
                </thead>
            <tbody>
            @foreach ($arduino as $objArduino)
                <tr>
                    <td>{{ $objArduino->ip }}</td>
                    <td>{{ $objArduino->mac_address }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>    
        </div>
    </div>
    @include('arduino.create')
@stop
