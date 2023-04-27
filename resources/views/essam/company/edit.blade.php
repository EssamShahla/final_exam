@extends('essam.parent')

@section('title' , 'Edit')
@section('main-title' , 'Edit company')
@section('sub-title' , 'Edit')

@section('style')

@endsection

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <!-- left column -->
        <div class="col-md-12 ">
          <!-- general form elements -->
          <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form>
                <div class="card-body row-col-12">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="name">name</label>
                            <input class="form-control" id="name" name="name" value="{{$companies->name}}" placeholder="Enter your first name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="email">email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{$companies->email}}" placeholder="Enter your last name">
                          </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" name="email" value="{{$companys->email}}" placeholder="Enter email">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                          </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="description">description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{$companies->description}}" placeholder="Enter your last name">
                          </div>
                          <div class="col-md-6 form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option @if ($companies->status == 'active') selected @endif value="active">Active</option>
                                <option @if ($companies->status == 'inactive') selected @endif value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performUpdate({{$companies->id}})" class="btn btn-primary">Update</button>
                <a href="{{route('companies.index')}}" class="btn btn-success">Go Back</a>
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

@section('script')
<script>
    function performUpdate(id){
        let formData = new FormData();
        formData.append('name' , document.getElementById('firstName').value);
        formData.append('email' , document.getElementById('lastName').value);
        formData.append('status' , document.getElementById('gender').value);
        formData.append('description' , document.getElementById('date').value);
        storeRoute('/essam/admin/companies_update/' + id , formData);
    }

</script>
@endsection
