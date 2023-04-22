import Vue from 'vue'
import Sortable from 'sortablejs';


Vue.directive('sortable', {
  inserted: function (el, binding) {
    new Sortable(el, binding.value || {})
  }
})
