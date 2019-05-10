import Vue from "vue";
import Vuex from "vuex";
import VuexPersist from "vuex-persist";
import { mutations, STORAGE_KEY } from "./mutations";
import actions from "./actions";

const vuexPersist = new VuexPersist({
    key: "easyfood",
    storage: localStorage
});

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        filtros: []
    },
    actions,
    mutations,
    plugins: [vuexPersist.plugin]
});
