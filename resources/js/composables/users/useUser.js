import {ref} from "vue";


export default function () {
    const errors = ref({});

    const createUser = async (formData) => {
       await axios.post('/api/users', formData)
        .then((res)=> {
            errors.value = {}; 
            window.location.href = '/users';
            // console.log(res)
        })
        .catch((err)=> errors.value = err.response.data.errors);
     
    }

    return {
        errors, createUser
    }
}