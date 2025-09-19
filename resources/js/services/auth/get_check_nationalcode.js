import axios from 'axios';
import { BASE_URL } from '@/services/configuration';
/* eslint-disable */
export async function getStatusCodmelli (codmelli) {
 return await axios.post(BASE_URL+'check_national_code/'+codmelli)
    .then(response => {
      return response.data
    })
    .catch(response => {
      return response.response.data
    })
}
