@extends('admin.layouts.master')
@section('title', __('Roles List'))
@section('admin-content')



<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{__('Roles List')}}</h1>
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{__('Roles')}}</li>
            </ol>         
        </div>
        <div class="col-sm-2">
                <a href="{{ route('roles.create')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Create a role</a>
       </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> {{__('Roles List')}}</h3>
             
              </div>
             

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover role_datatable">
                  <thead>
                  <tr>
                    <th>{{__('#')}}</th>
                    <th>{{__('Role Name')}}</th>                                       
                    <th>{{__('Action')}}</th>                  
                  </tr>             
                  </tr>
                  </thead>
                  <tbody>
                  
               </table>
            </div>
        </div>

@endsection
@section('custom-script')
<script src="{{url('admin/js/roles.js')}}"></script>
<script>
    var roleList = @json(route('roles.index'));
   
</script>
 
@endsection