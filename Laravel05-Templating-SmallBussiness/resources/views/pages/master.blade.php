<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> @yield('title') </title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('user/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('user/css/small-business.css')}}" rel="stylesheet">

</head>

<body>

  @include('partial.header')


  {{-- main content section --}}
  @yield('content')



  @yield('footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('user/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>