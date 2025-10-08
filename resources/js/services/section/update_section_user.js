import api from '@/services/axios';
/* eslint-disable */
export async function updateSectionUser (credentials) {
 return await api.post('/section/by_landing_page/update_section_user',credentials)
    .then(response => {
      return response.data.data
    })
    .catch(response => {
      return response.response.data
    })
}
