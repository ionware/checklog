/**
 * The Async Request Utility for wrapping the whole Application
 * Request with Axios Library
 * */

import axios from 'axios';

/**
 * Laravel Auto-generated CSRF token
 * @string
 * */
const _token = document.querySelector("meta[name='X-CSRF']").getAttribute('content');

if (!_token)
    console.error("Cannot obtain requests CSRF Token");

//Interpolate the CSRF Token into Axios requests
axios.defaults.headers.common['X-CSRF-TOKEN'] = _token;

//We only wants JSON data types for all Post requests.
axios.defaults.headers.post['Content-Type'] = "application/json";
axios.defaults.headers.put['Content-Type'] = "application/json";
axios.defaults.headers.patch['Content-Type'] = "application/json";

/**
 * Intercepts the Response Object and pass down only the JSON
 * */
axios.interceptors.response.use((response) => response.data );

/**
 * Makes the login request needed to Authenticate the Admins
 * @url string
 * @data object
 * */
export const loginRequest = data => axios.post("/login", data);

export const getUserDetailsRequest = () => axios.get('/me');

export const uploadQuestionRequest = (data) => axios.post('/question/create', data);

export const createAccountRequest = (data) => axios.post('/account', data);

export const submitFileRequest = (data) => axios.post('/question', data, {
    headers: { "content-type": "multipart/form-data" }
});

export const updateSettingsRequest = (data) => axios.put('/settings', data);

export default _token;