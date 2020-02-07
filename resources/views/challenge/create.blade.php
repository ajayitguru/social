@extends('layouts.admin.admin')
@section('maincontent')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Challenges</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Challenge</a></li>
              <li class="breadcrumb-item active">Create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
            <div class="col-md-12">
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Add New Challenge</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                    <form  method="POST" enctype="multipart/form-data" action="{{route('challenge.store')}}">
                      @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="entryfee">Challenge Category</label>
                              <select name="challengecategory_id" class="form-control">
                                @foreach ($challengecategories as $challengecategory)
                              <option value="{{$challengecategory->id}}">{{$challengecategory->name}}</option>
                                @endforeach
                              </select>
                              </div>
                          <div class="form-group">
                            <label for="entryfee">Entry Fee</label>
                            <input type="number" class="form-control" name='entryfee' >
                          </div>
                          <div class="form-group">
                            <label for="winamount">Win Amount</label>
                            <input type="number" class="form-control" name='winamount' >
                          </div>
                          <div class="form-group">
                            <label for="maxuser">Max User</label>
                            <input type="number" class="form-control" name='maxuser' >
                          </div>
                          <div class="form-group">
                            <label for="minuser">Min User</label>
                            <input type="number" class="form-control" name='minuser' >
                          </div>

                          <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" name='type' >
                          </div>
                          
                        </div>
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                          <input type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>
                    <!-- /.card -->

        
                  </div>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@stop