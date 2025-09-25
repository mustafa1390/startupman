import axios from 'axios';
import { BASE_URL } from '@/services/configuration';
/* eslint-disable */

export async function PostPrevUrl () {
    return await axios.post(BASE_URL+'log_user')
       .then(response => {
         return response.data.data
       })
       .catch(response => {
         return response.response.data
       })
   }
