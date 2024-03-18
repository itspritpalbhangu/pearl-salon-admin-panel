<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config("APP_NAME");}}</title>    
    @include('admin.layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">    
    @include('admin.layouts.topnavbar')
    @include('admin.layouts.sidebar')
  </div>
  <div class="content-wrapper">
					<section class="content-header">
              <div class="container-fluid">
                      @yield('admin-content')							
              </div><!-- /.container-fluid -->
						</section>
						   <!-- Main content -->
        <section class="content">
          <!-- Default box -->	
          @yield('admin-main-content')						    
        </section>			
	</div>

@include('admin.layouts.footer')
@include('admin.layouts.scripts')
@yield('custom-script')	
</body>
</html>