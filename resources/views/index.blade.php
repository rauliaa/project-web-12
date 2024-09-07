<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Template Studio Yoga">
    <meta name="keywords" content="Yoga, unica, kreatif, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yummy | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
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
    <!-- Preloader -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('partials.navbar')
    <!-- Header End -->

    <!-- Konten Utama -->
    @yield('content')

    <!-- Footer Section Begin -->
    @include('partials.footer')
    <!-- Footer Section End -->

    <!-- Model Pencarian -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Cari di sini.....">
            </form>
        </div>
    </div>
    <!-- Model Pencarian Akhir -->

    <!-- Js Plugins -->
    <!-- Js Plugins -->
<script src="{{ asset('yummy2-master/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('yummy2-master/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('yummy2-master/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('yummy2-master/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('yummy2-master/js/mixitup.min.js') }}"></script>
<script src="{{ asset('yummy2-master/js/main.js') }}"></script>

</body>

</html>
