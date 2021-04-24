/**
 * We'll load Vue js and Global Components Here
 */
import Vue from "vue";
import store from "vuex";

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
    require("./components/front/home/CurrentDiscount.vue").default
);

Vue.component(
    "latest-news",
    require("./components/front/home/LatestNews.vue").default
);

// Shop Components
Vue.component(
    "shop-sidebar",
    require("./components/front/shop/ShopSidebar.vue").default
);

Vue.component(
    "shop-single-product",
    require("./components/front/shop/ShopSingleProduct").default
);

Vue.component(
    "shop-pagination",
    require("./components/front/shop/ShopPagination").default
);

const app = new Vue({
    store,
    el: "#front"
});

window.vm = app;
