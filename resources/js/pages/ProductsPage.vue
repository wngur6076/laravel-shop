<template>
    <div class="col-lg-9 g-mb-80 asdas">
        <div class="g-pr-20--lg">
            <div class="masonry-grid row g-mb-70">
                <div class="masonry-grid-sizer col-sm-1"></div>

                <div class="masonry-grid-item col-sm-6 g-mb-30"
                v-for="prodcut in prodcuts" :key="prodcut.id">
                    <!-- Blog Classic Blocks -->
                    <article class="u-shadow-v11">
                        <img class="img-fluid w-100" :src="prodcut.image" alt="Image Description">
                        <div class="g-bg-white g-pa-30">
                            <span
                                class="d-block g-color-gray-dark-v4 g-font-weight-600 g-font-size-12 text-uppercase mb-2">
                                {{ prodcut.created_date }}</span>
                            <h2 class="h5 g-color-black g-font-weight-600 mb-3">
                                <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer"
                                    href="#">{{ prodcut.title }}</a>
                            </h2>
                            <p class="g-color-gray-dark-v4 g-line-height-1_8">{{ prodcut.excerpt }}</p>
                            <a class="g-font-size-13" href="#">구매하기</a>

                            <hr class="g-my-20">

                            <ul class="list-inline d-flex justify-content-between mb-0">
                                <li class="list-inline-item g-color-gray-dark-v4">
                                    <a class="d-inline-block g-color-gray-dark-v4 g-font-size-13 g-cursor-pointer g-text-underline--none--hover"
                                        href="#">
                                        <i
                                            class="align-middle g-font-size-default mr-1 icon-finance-206 u-line-icon-pro"></i>
                                        {{ prodcut.comments_count }}
                                    </a>
                                </li>
                                <li class="list-inline-item g-color-gray-dark-v4">
                                    <i
                                        class="align-middle g-color-primary g-font-size-default mr-1 icon-medical-022 u-line-icon-pro"></i>
                                    <a class="d-inline-block g-color-gray-dark-v4 g-font-size-13 g-cursor-pointer g-text-underline--none--hover"
                                        href="#">57</a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <!-- End Blog Classic Blocks -->
                </div>
            </div>

            <!-- Pagination -->
            <nav id="stickyblock-end" class="text-center" aria-label="Page Navigation">
                <ul class="list-inline">
                    <li class="list-inline-item float-left g-hidden-xs-down">
                        <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16"
                            href="#" aria-label="Previous">
                            <span aria-hidden="true">
                                <i class="fa fa-angle-left g-mr-5"></i> Previous
                            </span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="u-pagination-v1__item u-pagination-v1-4 u-pagination-v1-4--active g-rounded-50 g-pa-7-14"
                            href="#">1</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-14" href="#">2</a>
                    </li>
                    <li class="list-inline-item float-right g-hidden-xs-down">
                        <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16"
                            href="#" aria-label="Next">
                            <span aria-hidden="true">
                                Next <i class="fa fa-angle-right g-ml-5"></i>
                            </span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- End Pagination -->
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            prodcuts: [],
            meta: {},
            links: {},
        }
    },

    mounted () {
        this.fetchQuestions();
    },

    methods: {
        fetchQuestions () {
            axios.get('/products', { params: this.$route.query })
                .then(({ data }) => {
                    console.log(data);
                    this.prodcuts = data.data;
                    this.meta = data.meta;
                    this.links = data.links;
                })
        },
    },
}
</script>
