<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.head')
</head>

<body>
    <div id="app">
        <router-view></router-view>
    </div>

    @include('includes.page-js')
</body>

</html>
