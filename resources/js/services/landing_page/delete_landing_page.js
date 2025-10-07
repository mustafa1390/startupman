import api from '@/services/axios';
/* eslint-disable */
export async function deleteLandingPage (credentials) {
 return await api.post('/landing_page/delete',credentials)
    .then(response => {
      return response.data
    })
    .catch(response => {
      return response.response.data
    })
}
