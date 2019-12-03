<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relationship</title>
</head>
<body>

    <div>
        <a href="{{ route('index') }}"> Home </a> ||
        <a href="{{ route('form.show') }}"> Add Data </a> ||

        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"> Logout </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    </div>
    <hr>

    @yield('content')

</body>
</html>