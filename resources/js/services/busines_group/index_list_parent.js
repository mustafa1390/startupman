import api from '@/services/axios';
/* eslint-disable */
export async function getBusinesGroupList () {
 return await api.post('/busines_group/index_list_parent')
    .then(response => {
      return response.data.data
    })
    .catch(response => {
      return response.response.data
    })
}
