import axios from 'axios';
import { BASE_URL } from '@/services/configuration';
/* eslint-disable */
export async function getRegister (credentials) {
 return await axios.post(BASE_URL+'register', credentials)
    .then(response => {
      return response.data
    })
    .catch(response => {
      return response.response.data
    })
}
