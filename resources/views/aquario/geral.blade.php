@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>PA</h1>
@stop

@section('content')
    <div class="row">

    @foreach ($api->posts as $obj)
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
           <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
         
            <div class="info-box-content">
              <span class="info-box-text">Temperatura</span>
              <span class="info-box-number"><small>{{ $obj->title }}</small></span>
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
      @foreach ($api->comments as $obj)
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
           <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
         
            <div class="info-box-content">
              <span class="info-box-text">Temperatura</span>
              <span class="info-box-number"><small>{{ $obj->body }}</small></span>
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