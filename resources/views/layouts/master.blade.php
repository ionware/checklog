<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="X-CSRF" content="{{ csrf_token() }}">
    <link rel="icon" href="/images/icon.png">
    <!-- Bootstrap minified version -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Font Awesome and Icons CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Edulus custom | Page Stylesheets -->
    <link rel="stylesheet" href="/css/app.css">
    <!-- Bootstrap and jQuery Javascript Library support -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @yield('header')
</head>
<body>
@if (session()->has('patient.updated'))
    <div class="alert alert-dismissible edl-alert edl-alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        <p>{{ session()->get('patient.updated') }}</p>
    </div>
@endif
@yield('body')
</body>
</html>