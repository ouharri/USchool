import Vue from 'vue';
import {library} from '@fortawesome/fontawesome-svg-core';

import {faHatWizard} from '@fortawesome/free-solid-svg-icons';

import {FontAwesomeIcon} from '@fortawesome/vue-fontawesome';

;

library.add(faHatWizard);

Vue.component('font-awesome-icon', FontAwesomeIcon);
