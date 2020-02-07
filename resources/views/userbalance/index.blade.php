@extends('layouts.admin.admin')
@section('maincontent')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User Balance</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active">User Balance</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">User Balances</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Balance</th>
                  <th>Winning</th>
                  <th>Bonus</th>
                
                </tr>
                </thead>
                <tbody>
                  @foreach($userbalances as $userbalance)
                <tr>
                  <td>{{$userbalance->id}}</td>
                  <td> {{$userbalance->balance}} </td>
                  <td>{{$userbalance->winning}} </td>
                  <td>{{$userbalance->bonus}}</td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
                
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
            <div class="col-md-12">
              
                <p>{{$userbalance->id}} {{$userbalance->balance}} {{$userbalance->winning}} {{$userbalance->bonus}}</p>
               
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@stop