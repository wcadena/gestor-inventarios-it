import axios from 'axios';

let instance = axios.create({
    baseURL: ''
});

instance.defaults.headers.common['Access-Control-Allow-Headers'] = 'X-CSRF-Token';

export default instance;