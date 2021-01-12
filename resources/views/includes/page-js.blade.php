<!-- ================== BEGIN BASE JS ================== -->
<!-- JS Plugins Init. -->
<script>

    $(document).ready(function () {
            // initialization of tabs
            $.HSCore.components.HSTabs.init('[role="tablist"]');
            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

        });

    $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            pageContainer: $('.container'),
            breakpoint: 991
        });

        // initialization of masonry
        $('.masonry-grid').imagesLoaded().then(function () {
            $('.masonry-grid').masonry({
                columnWidth: '.masonry-grid-sizer',
                itemSelector: '.masonry-grid-item',
                percentPosition: true
            });
        });

        // initialization of sticky blocks
        setTimeout(function () {
            $.HSCore.components.HSStickyBlock.init('.js-sticky-block');
        }, 300);
    });

    $(window).on('resize', function () {
        setTimeout(function () {
            $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
    });
</script>
<!-- ================== END BASE JS ================== -->

@stack('scripts')
