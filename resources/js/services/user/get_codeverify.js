import api from '@/services/axios';
/* eslint-disable */
export async function getCodeverify () {
 return await api.get('/user/codeverify')
    .then(response => {
      return response.data.data 
    })
    .catch(response => {
      return response.response.data
    })
}

export async function getCheckCodeverify (code_verify_tell) {
    return await api.post('user/checked_codeverify', {
        code_verify_tell: code_verify_tell,
      })
       .then(response => {
         return response.data
       })
       .catch(response => {
         return response.response.data
       })
   }

export async function getCheckCodeverifyEmail (code_verify_email) {
    return await api.post('user/checked_codeverify_email', {
        code_verify_email: code_verify_email,
      })
       .then(response => {
         return response.data
       })
       .catch(response => {
         return response.response.data
       })
   }

