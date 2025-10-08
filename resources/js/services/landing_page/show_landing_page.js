import api from '@/services/axios';
/* eslint-disable */
export async function showLandingPage(id) {
 return await api.post(`landing_page/show/${id}`)
    .then(response => {
      return response.data.data
    })
    .catch(response => {
      return response.response.data
    })
}
