<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link href="//cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href="/css/all.css" type='text/css' media='all'/>
    <script type='text/javascript' src="/js/all.js"></script>
</head>
<body>
<body>
<div class="container">
    <section class="content">
        <div class="pad group">
            @yield('content')
        </div>
    </section>
    <nav class="nav-container group" id="nav-footer">
        <div class="nav-wrap">
            <ul class="nav container group">
                <li class="menu-item">
                    <a href="/" rel="nofollow" target="_blank">Laravel 5 Blog</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<script src="/js/app.js"></script>
</body>
</html>
