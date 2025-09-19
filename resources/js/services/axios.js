// services/axios.js
import axios from 'axios';
import { useAuthStore } from '@/stores/auth.js';
import { BASE_URL } from '@/services/configuration';

// Create an Axios instance
const api = axios.create({
  baseURL: BASE_URL,
//   baseURL: 'http://127.0.0.1:8000/api',
//   baseURL: 'https://arzico.com/api',
//   baseURL: window.location.origin+'/api',
});

// Axios request interceptor to attach the Bearer token
api.interceptors.request.use((config) => {
  const authStore = useAuthStore();
  if (authStore.token) {
    config.headers['Authorization'] = `Bearer ${authStore.token}`;
  }
  return config;
}, (error) => {
  return Promise.reject(error);
});

export default api;
