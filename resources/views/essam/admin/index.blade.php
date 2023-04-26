@extends('essam.parent')

@section('title' , 'Admin')
@section('main-title' , 'Index Admin')
@section('sub-title' , 'Index Admin')

@section('style')

@endsection

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <a href="{{route('admins.create') }}" type="button" class="btn btn-info">Create new Admin</a>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>profile photo</th>
                    <th>Full Name</th>
                    <th>email</th>
                    <th>Mobile</th>
                    <th>gender</th>
                    <th>Status</th>
                    <th>Settings</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $admin)
                    <tr>
                        <td>{{$admin->id}}</td>
                        <td class="image">
                            <img class="img-circle img-bordered-sm elevation-2" src="{{asset('storage/images/admin/' . $admin->user->image )}}" width="60" height="60" alt="Admin Image">
                        </td>
                        <td>{{$admin->user->firstName . " " . $admin->user->lastName ?? ""}}</td>
                        <td>{{$admin->email ?? ""}}</td>
                        <td>{{$admin->user->mobile ?? ""}}</td>
                        <td>{{$admin->user->gender ?? ""}}</td>
                        <td>{{$admin->user->status ?? ""}}</td>
                        {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                        <td><div class="btn-group">
                            <a href="{{route('admins.edit' , $admin->id) }}" type="button" class="btn btn-info">Edit</a>
                            <button type="button" onclick="performDestroy({{$admin->id}} , this)" class="btn btn-danger">Delete</button>
                          </div></td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
              {{ $admins->links() }}
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection

@section('script')
  <script>
        function performDestroy(id , reference){
            confirmDestroy('/essam/admin/admins/' + id , reference);
        }
    </script>
@endsection
