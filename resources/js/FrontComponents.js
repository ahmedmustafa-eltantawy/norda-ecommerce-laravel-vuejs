/**
 * We'll load Vue js and Global Components Here
 */
import Vue from "vue";

// Components
Vue.component(
    "the-header",
    require("./components/front/TheHeader.vue").default
);

Vue.component(
    "the-sidebar",
    require("./components/front/TheSidebar.vue").default
);

Vue.component(
    "the-header-mobile",
    require("./components/front/HeaderMobile.vue").default
);

// Home Components
Vue.component(
    "the-slider",
    require("./components/front/home/TheSlider.vue").default
);

Vue.component(
    "new-arrivals",
    require("./components/front/home/NewArrivals.vue").default
);

Vue.component(
    "best-seller",
    require("./components/front/home/BestSeller.vue").default
);

Vue.component(
    "current-discount",
    require("./components/front/home/MostDiscounted.vue").default
);

Vue.component(
    "latest-news",
    require("./components/front/home/LatestNews.vue").default
);

// Shop Components
Vue.component(
    "shop-page",
    require("./components/front/shop/ShopPage.vue").default
);

// Signle Product Components
Vue.component(
    "single-product",
    require("./components/front/SingleProduct/SingleProduct.vue").default
);

Vue.component(
    "single-product-reviews-list",
    require("./components/front/SingleProduct/SingleProductReviewsList.vue")
        .default
);

Vue.component(
    "single-product-reviews-form",
    require("./components/front/SingleProduct/SingleProductReviewsForm.vue")
        .default
);

Vue.component(
    "single-product-related-by-category",
    require("./components/front/SingleProduct/SingleProductRelatedByCategory.vue")
        .default
);

const app = new Vue({
    el: "#front"
});

window.vm = app;
