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

Vue.component(
    "the-slider",
    require("./components/front/TheSlider.vue").default
);

Vue.component(
    "new-arrivals",
    require("./components/front/NewArrivals.vue").default
);

Vue.component(
    "best-seller",
    require("./components/front/BestSeller.vue").default
);

Vue.component(
    "current-discount",
    require("./components/front/CurrentDiscount.vue").default
);

Vue.component(
    "latest-news",
    require("./components/front/LatestNews.vue").default
);

const app = new Vue({
    store,
    el: "#front"
});

window.vm = app;
