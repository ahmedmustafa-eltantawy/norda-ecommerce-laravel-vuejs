/**
 * We'll load Vue js and Global Components Here
 */
import Vue from "vue";
import store from "vuex";

// Components

const app = new Vue({
    store,
    el: "#app"
});

window.vm = app;
