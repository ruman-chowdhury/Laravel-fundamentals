<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>

    <!-- boortstrap css -->
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }} " />

    <!--font awesome-->
    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.7.1/css/all.css')}} " integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <!--Google font-->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Charm|Merriweather|Montserrat|Sacramento|Ubuntu')}} " rel="stylesheet" />

</head>
<body>

    @yield('content')

</body>
</html>