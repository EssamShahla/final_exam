@extends('essam.parent')

@section('title' , 'Create')
@section('main-title' , 'Create admin')
@section('sub-title' , 'Create')

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
            <div class="card-header">
              <h3 class="card-title">Add admin</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form_data">
        <div class="card-body row-col-12">

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="firstName">First name</label>
                    <input class="form-control" id="firstName" name="firstName" placeholder="Enter your first name">
                </div>
                <div class="col-md-6 form-group">
                    <label for="lastName">Last name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter your last name">
                  </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label for="date">Date Of Birth</label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="Enter your Date of birth">
                  </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="col-md-6 form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                  </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="mobile">your mobile</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile">
                  </div>
                  <div class="col-md-6 form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="image">choose profile photo</label>
                    <input type="file" class="form-control" id="image" name="image">
                  </div>
            </div>
        </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Store</button>
                <a href="{{route('admins.index')}}" class="btn btn-primary">Back</a>
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
        var url = '/essam/admin/admins';
    </script>
@endsection
