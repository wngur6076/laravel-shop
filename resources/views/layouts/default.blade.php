<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.unify.head')
</head>

<body>
    <div id="app">

        @include('includes.header')

        @include('includes.Breadcrumbs')

        <!-- Blog Classic Blocks -->
        <div class="container g-pt-100 g-pb-20">
            <div class="row justify-content-between">
                <router-view></router-view>

                @include('includes.sidebar')
            </div>
        </div>
        <!-- End Blog Classic Blocks -->

        @include('includes.footer')

        @include('includes.component.scroll-top-btn')


        <div class="u-outer-spaces-helper"></div>
    </div>

    @include('includes.unify.page-js')

</body>

</html>
