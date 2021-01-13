@include('includes.page-js')

<!-- ================== BEGIN BASE JS ================== -->
<script src="{{ asset('/color/assets/js/app.min.js') }}"></script>
<script src="{{ asset('/color/assets/js/theme/default.min.js') }}"></script>
<!-- ================== END BASE JS ================== -->

@stack('scripts')
