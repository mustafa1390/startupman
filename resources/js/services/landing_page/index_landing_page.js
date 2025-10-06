import api from '@/services/axios';
/* eslint-disable */
export async function indexLandingPage () {
 return await api.get('/landing_page/index')
    .then(response => {
      return response.data.data
    })
    .catch(response => {
      return response.response.data
    })
}
