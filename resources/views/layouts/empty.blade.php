<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.color.head')
</head>

<body>
    <div id="app">
        <router-view></router-view>
    </div>

    @include('includes.color.page-js')
</body>

</html>
