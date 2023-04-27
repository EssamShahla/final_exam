@extends('essam.parent')

@section('title' , 'Show')
@section('main-title' , 'Show company data')
@section('sub-title' , 'Show')

@section('style')
    <style>
        #name{
            cursor: no-drop;
        }
        #code{
            cursor: no-drop;
        }
    </style>
@endsection

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <!-- left column -->
        <div class="col-md-7 ">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">company data</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="name">company Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{$companies->name}}" disabled>
                </div>
                <div class="form-group">
                  <label for="email">company email</label>
                  <input type="text" class="form-control" id="email" name="email" value="{{$companies->email}}" disabled>
                </div>
                <div class="col-md-6 form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option @if ($companies->status == 'active') selected @endif value="active" disabled>Active</option>
                        <option @if ($companies->status == 'inactive') selected @endif value="inactive" disabled>Inactive</option>
                    </select>
                </div>
                  <div class="form-group">
                    <label for="description">company description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{$companies->description}}" disabled>
                  </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="{{route('companies.index')}}" type="submit" class="btn btn-success">Go Back</a>
              </div>
            </form>
          </div>
          <!-- /.card -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection

@section('title')

@endsection
