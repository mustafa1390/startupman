import api from '@/services/axios';
/* eslint-disable */
export async function sectionByLandingPage (credentials) {
 return await api.post('/section/by_landing_page',credentials)
    .then(response => {
      return response.data.data
    })
    .catch(response => {
      return response.response.data
    })
}
