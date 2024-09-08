<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yummy | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('yummy2-master/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('yummy2-master/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('yummy2-master/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('yummy2-master/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('yummy2-master/css/style.css') }}" type="text/css">
</head>

<body>
    @include('templates.component.header')
    @include('templates.component.page-top-recipe')
    @include('templates.component.top-recipe')
    @include('templates.component.categories-filter')
    @include('templates.component.feature-recipe')
    @include('templates.component.footer')
    @include('templates.component.search-model')

    <!-- Js Plugins -->
    <script src="{{ asset('yummy2-master/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('yummy2-master/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('yummy2-master/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('yummy2-master/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('yummy2-master/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('yummy2-master/js/main.js') }}"></script>
</body>

</html>
