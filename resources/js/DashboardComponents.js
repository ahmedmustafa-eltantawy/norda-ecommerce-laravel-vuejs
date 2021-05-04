/**
 * We'll load Vue js and Global Components Here
 */
import Vue from "vue";

// Components
Vue.component(
    "customer-invoices",
    require("./components/dashboard/CustomerInvoices.vue").default
);

const app = new Vue({
    el: "#dashboard"
});

window.vm = app;
