<!doctype html>
<!doctype html>
<html lang="en" theme="LIGHT">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.png" />
    <title>Decode</title>

    <!-- Slick.css -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font_Awsome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- My_Css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    @include('layouts.style')
    @yield('style')
</head>

<body class="home-page">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKHHVH3" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- Header -->
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    @include('layouts.script')
    @yield('script')
</body>
</html>
