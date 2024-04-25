<template>
    <form>
        <label for="name">Nom de l'utilsateur</label>
        <input v-model="formData.name" type="text" id="name">
        <template
            v-if="errors.name"
        >
            <span style="color: red;" v-text="errors.name[0]" />
        </template>
        <br>
        <label for="email">Mail</label>
        <input v-model="formData.email" type="email" id="email">     
        <template
            v-if="errors.email"
        >
            <span style="color: red;" v-text="errors.email[0]" />
        </template>  
         <br>
        <label for="password">password</label>
        <input v-model="formData.password" type="password" id="password">
        <template
            v-if="errors.password"
        >
            <span style="color: red;" v-text="errors.password[0]" />
        </template>  
        <br>
        <label for="password_confirmation">confirmation password</label>
        <input v-model="formData.password_confirmation" type="password" id="password_confirmation">
        <button type="button" v-on:click="createUser">Créer un nouvel utilisateur</button>
    </form>
</template>
<script setup>
import {ref} from "vue";
import axios from "axios";

const errors = ref({});

const formData = ref({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const createUser = () => {
    axios.post('/api/users', formData.value )
    .then((res)=> {
        errors.value = {}; 
        window.location.href = '/';
        // console.log(res)
    })
    .catch((err)=> errors.value = err.response.data.errors);
 
}

</script>