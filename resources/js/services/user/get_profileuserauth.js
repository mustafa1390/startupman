import api from '@/services/axios';
/* eslint-disable */
export async function getProfileUserAuth () {
 return await api.get('/profile/user')
    .then(response => {
      return response.data.data
    })
    .catch(response => {
      return response.response.data
    })
}
