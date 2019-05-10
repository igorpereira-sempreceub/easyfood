require("./bootstrap");
window.Vue = require("vue");

import Vue from "vue";
import Multiselect from "vue-multiselect";

Vue.use(Multiselect);

Vue.component("ingrediente", require("./components/Ingrediente.vue").default);
Vue.component("receita", require("./components/Receita.vue").default);

import store from "./store";

const app = new Vue({
    el: "#app",
    store
});
