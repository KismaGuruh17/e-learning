import _ from 'lodash';
import 'bootstrap'; // Bootstrap sudah menyertakan Popper di dalamnya
import axios from 'axios';

window._ = _;
window.axios = axios;

// Optional: Jika Anda perlu menggunakan jQuery secara langsung, Anda dapat mengimpornya seperti ini
// import $ from 'jquery';
// window.jQuery = window.$ = $;

/**
 * Jika Anda membutuhkan Popper secara langsung (tanpa mengimpor dari @popperjs/core), Anda dapat menggunakan ini:
 * import Popper from 'popper.js';
 * window.Popper = Popper;
 */

/**
 * Jika Anda membutuhkan Echo dan Pusher untuk real-time web applications, Anda dapat mengimpor dan mengkonfigurasinya seperti ini:
 */
// import Echo from 'laravel-echo';
// import Pusher from 'pusher-js';

// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
