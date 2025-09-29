import api from '@/services/axios';
/* eslint-disable */
export async function getConfigRun () {
 return await api.get('/config_run')
    .then(response => {
      return response.data.data
    })
    .catch(response => {
      return response.response.data
    })
}
