@extends('essam.parent')

@section('title' , 'branches')
@section('main-title' , 'Index branches')
@section('sub-title' , 'Index branches')

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
                    <th>Name</th>
                    <th>email</th>
                    <th>Status</th>
                    {{-- <th>company</th> --}}
                    <th>Settings</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($branches as $branch)
                    <tr>
                        <td>{{$branch->id}}</td>
                        <td>{{$branch->name}}</td>
                        <td>{{$branch->email}}</td>
                        <td>{{$branch->status}}</td>
                        {{-- <td>{{$branch->company->name}}</td> --}}
                        {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                        <td><div class="btn-group">
                            <a href="{{route('branches.edit' , $branch->id) }}" type="button" class="btn btn-info">Edit</a>
                            <button type="button" onclick="performDestroy({{$branch->id}} , this)" class="btn btn-danger">Delete</button>
                          </div></td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
              {{ $branches->links() }}
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
            confirmDestroy('/essam/admin/branches/' + id , reference);
        }
    </script>
@endsection
