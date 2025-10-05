import api from '@/services/axios';
/* eslint-disable */
export async function storeLandingPage (credentials) {
 return await api.post('/landing_page/store',credentials)
    .then(response => {
      return response.data.data
    })
    .catch(response => {
      return response.response.data
    })
}
