import axios from 'axios';
import { BASE_URL } from '@/services/configuration';
/* eslint-disable */
export async function getInquiry (credentials) {
 return await axios.post(BASE_URL+'inquiry', credentials)
    .then(response => {
      return response.data
    })
    .catch(response => {
      return response.response.data
    })
}
