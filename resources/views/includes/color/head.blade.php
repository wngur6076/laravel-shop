<meta charset="utf-8" />
<title>Color Admin | @yield('title')</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

@include('includes.head')

<!-- ================== BEGIN BASE CSS STYLE ================== -->
<link href="{{ asset('/color/assets/css/default/app.min.css') }}" rel="stylesheet" />
<!-- ================== END BASE CSS STYLE ================== -->


@stack('css')
