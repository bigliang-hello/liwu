import axios from 'axios'
import { apiUrl } from '../config/base'
import { showLoading, hideLoading } from './loading';

/**
 * Create Axios
 */
export const http = axios.create({
  baseURL: apiUrl,
})

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */
http.defaults.headers.common = {
  'X-CSRF-TOKEN': window.Laravel.csrfToken,
  'X-Requested-With': 'XMLHttpRequest'
};

/**
 * Handle all error messages.
 */
http.interceptors.response.use(function(response) {
  hideLoading();
  return response;
}, function(error) {
  const { response } = error

  if ([401].indexOf(response.status) >= 0) {
    if (response.status == 401 && response.data.error.message != 'Unauthorized') {
      return Promise.reject(response);
    }
    window.location = '/login';
  }

  if ([403].indexOf(response.status) >= 0) {
    this.$message.error(response.data.message)
  }
  
  return Promise.reject(error);
});

http.interceptors.request.use((req) => {
  showLoading();
  return req;
}, err => Promise.reject(err));

export default function install(Vue) {
  Object.defineProperty(Vue.prototype, '$http', {
    get() {
      return http
    },
  })
}
