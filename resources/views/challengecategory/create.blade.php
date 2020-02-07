@extends('layouts.admin.admin')
@section('maincontent')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Challenge Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Challenge Category</a></li>
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
                        <h3 class="card-title">Add New Challenge Category</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                    <form  method="POST" enctype="multipart/form-data" action="{{route('challengecategory.store')}}">
                      @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name='name' placeholder="Category name">
                          </div>
                          <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" name='description' placeholder="Description">
                          </div>
                          
                          <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file"  name='image' class="form-control">
                            </div>
                             
                            </div>
                          </div>
                         
                          <div class="form-group">
                            <label for="exampleInputPassword1">Status</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" value="1">Active
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" value="0">Inactive
                              </label>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="sortorder">Sort Order</label>
                            <input type="number" class="form-control" name='sortorder' placeholder="Sort Order">
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