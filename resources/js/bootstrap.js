import axios from 'axios';

if (!Element.prototype.checkVisibility) {
    Element.prototype.checkVisibility = function () {
        return !!(this.offsetWidth || this.offsetHeight || this.getClientRects().length)
    }
}

import Alpine from 'alpinejs'
import focus from '@alpinejs/focus'

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Alpine.plugin(focus)
window.Alpine = Alpine

Alpine.start();