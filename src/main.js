import Vue from "vue";
import App from "./App.vue";
import mixin from "./data/mixin";
import router from "./router";
import translate from "./translation/index";
import "./translation/translate";
import VueMeta from "vue-meta";
import store from "./data";
import vuetify from "./plugins/vuetify";

Vue.config.productionTip = false;

Vue.mixin(mixin);
Vue.use(VueMeta);
Vue.directive("translate", {
  inserted: function(el) {
    translate(el.innerHTML).then((data) => (el.innerHTML = data));
  },
});
new Vue({
  router,
  store,
  vuetify,
  render: (h) => h(App),
}).$mount("#app");
