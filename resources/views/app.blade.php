<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Fonts [ OPTIONAL ] -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;family=Ubuntu:wght@400;500;700&amp;display=swap" rel="stylesheet">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- <link rel="stylesheet" href="{{ mix('css/main.css') }}"> -->

    <!-- Bootstrap CSS [ REQUIRED ] -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Nifty CSS [ REQUIRED ] -->
    <link rel="stylesheet" href="assets/css/nifty.min.css">

    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia

    @env ('local')
    <script src="http://localhost:8080/js/bundle.js"></script>
    @endenv
    <!-- <script src="{{ mix('js/main.js') }}"></script> -->


    <script src="assets/js/bootstrap.min.js" defer></script>

    <!-- Nifty JS [ OPTIONAL ] -->
    <script src="assets/js/nifty.min.js" defer></script>

    <!-- Plugin scripts [ OPTIONAL ] -->
    <script src="assets/pages/dashboard-1.min.js" defer></script>

</body>

</html>