@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>PA</h1>
@stop

@section('content')
    <div class="row">
<<<<<<< HEAD

    @foreach ($temperatura as $obj)
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
           <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
         
            <div class="info-box-content">
              <span class="info-box-text">{{ $obj->name }}</span>
              <span class="info-box-number"><small>{{ $obj->email }}</small></span>
=======
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">CPU Traffic</span>
              <span class="info-box-number">90<small>%</small></span>
>>>>>>> 2fc741a72cdf9c8c21e1fb138a231ec601117a34
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
<<<<<<< HEAD
        
        <!-- /.col -->

        <!-- fix for small devices only -->
        
        <!-- /.col -->
        
        <!-- /.col -->
      @endforeach
      </div>

=======
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number">41,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sales</span>
              <span class="info-box-number">760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">New Members</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
>>>>>>> 2fc741a72cdf9c8c21e1fb138a231ec601117a34
@stop