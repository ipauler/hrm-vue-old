import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export const store = new Vuex.Store({
   state: {
       menuOpened: false,
       getDataTriggered: false,
       departmentView: {},
       depCompare: false,
       isDepInView: false
   }


});