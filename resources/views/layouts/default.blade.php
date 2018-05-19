<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<style>

    /* universal */

    body {
        padding-top: 60px;
    }

    section {
        overflow: auto;
    }

    textarea {
        resize: vertical;
    }

    .jumbotron {
        text-align: center;
    }

    /* typography */

    h1, h2, h3, h4, h5, h6 {
        line-height: 1;
    }

    h1 {
        font-size: 3em;
        letter-spacing: -2px;
        margin-bottom: 30px;
        text-align: center;
    }

    h2 {
        font-size: 1.2em;
        letter-spacing: -1px;
        margin-bottom: 30px;
        text-align: center;
        font-weight: normal;
        color: #777;
    }

    p {
        font-size: 1.1em;
        line-height: 1.7em;
    }

    /* header */

    .navbar-inverse {
        background-color: #3c3e42;
    }

    #logo {
        float: left;
        margin-right: 10px;
        font-size: 1.7em;
        color: #fff;
        text-decoration: none;
        letter-spacing: -1px;
        padding-top: 9px;
        font-weight: bold;

    }
    #logo :hover {
        color: #fff;
    }
</style>
<body>
@include('layouts._header')

<div class="container">
    <div class="col-md-offset-1 col-md-10">
        @yield('content')
        @include('layouts._footer')
    </div>
</div>
</body>
</html>