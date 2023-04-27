@extends('essam.parent')

@section('title' , 'company')
@section('main-title' , 'Index company')
@section('sub-title' , 'Index company')

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
                    <th>Full Name</th>
                    <th>email</th>
                    <th>Status</th>
                    <th>branches</th>
                    <th>Settings</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                    <tr>
                        <td>{{$company->id}}</td>
                        <td>{{$company->name}}</td>
                        <td>{{$company->email}}</td>
                        <td>{{$company->status}}</td>
                        <td>{{$company->companyBranch_count}}</td>
                        {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                        <td><div class="btn-group">
                            <a href="{{route('companies.edit' , $company->id) }}" type="button" class="btn btn-info">Edit</a>
                            <a href="{{route('companies.show' , $company->id) }}" type="button" class="btn btn-secondary">show</a>
                            <button type="button" onclick="performDestroy({{$company->id}} , this)" class="btn btn-danger">Delete</button>
                          </div></td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
              {{ $companies->links() }}
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
            confirmDestroy('/essam/admin/companies/' + id , reference);
        }
    </script>
@endsection
