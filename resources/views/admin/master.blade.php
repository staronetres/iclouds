<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.css')}}">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('dist/css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/category.css')}}">
  </head>

  <body>
    @include('admin.admin_header')

    <div class="container-fluid">
      <div class="row">
        @include('admin.sidebar');

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

          
          @yield('content')
          

        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
   


    <script src="{{asset('dist/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap.js')}}"></script>

    

    <!-- Icons -->
   
  </body>
</html>
