@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>PA</h1>
@stop

@section('content')
    <div class="row">

    @foreach ($temperatura as $obj)
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
           <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
         
            <div class="info-box-content">
              <span class="info-box-text">{{ $obj->name }}</span>
              <span class="info-box-number"><small>{{ $obj->email }}</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        
        <!-- /.col -->

        <!-- fix for small devices only -->
        
        <!-- /.col -->
        
        <!-- /.col -->
      @endforeach
      </div>

@stop