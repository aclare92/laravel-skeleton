/** Lodash */
import _ from 'lodash';
window._ = _;

/** Twitter Bootstrap */
import 'bootstrap';

/** Axios */
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/** jQuery */
import jQuery from 'jquery';
window.$ = jQuery;
window.jQuery = jQuery;
