@extends('admin.layouts.master')
@section('title', __('Branch List'))
@section('admin-content')



<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{__('Branch List')}}</h1>
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{__('Branch')}}</li>
            </ol>         
        </div>
        <div class="col-sm-2">
            <a href="{{ route('branch.create')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Create a Branch</a>
       </div>
      </div>
      </div><!-- /.container-fluid -->
    </section>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> {{__('Branch List')}}</h3>
             
              </div>
             

              <!-- /.card-header -->
              <div class="card-body">
                <table id="branchtable" class="table table-bordered table-hover branch_datatable">
                  <thead>
                  <tr>           
                    <th>{{__('#')}}</th>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Email')}}</th>
                    <th>{{__('Contact')}}</th>
                    <th>{{__('Address')}}</th>
                    <th>{{__('Opend_on')}}</th> 
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
<script src="{{url('admin/js/branch.js')}}"></script>
<script>
    var branchList = @json(route('branch.index'));   
</script>
 
@endsection