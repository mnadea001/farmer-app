<template>
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nom de l'utilsateur</label>
        <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" v-model="formData.name" type="text" id="name">
        <template
            v-if="errors.name"
        >
            <span style="color: red;" v-text="errors.name[0]" />
        </template>
        <br>
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Mail</label>
        <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" v-model="formData.email" type="email" id="email">     
        <template
            v-if="errors.email"
        >
            <span style="color: red;" v-text="errors.email[0]" />
        </template>  
         <br>
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">password</label>
        <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" v-model="formData.password" type="password" id="password">
        <template
            v-if="errors.password"
        >
            <span style="color: red;" v-text="errors.password[0]" />
        </template>  
        <br>
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">confirmation password</label>
        <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" v-model="formData.password_confirmation" type="password" id="password_confirmation">
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-3" type="button" v-on:click="createUserAction">Créer un nouvel utilisateur</button>
        </div>
    </form>
</template>
<script setup>
import {ref} from "vue";
import useUser from "../../composables/users/useUser";

const {
    errors,
    createUser,
} = useUser();

const formData = ref({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});


const createUserAction = async () => {
    await createUser(formData.value);
}

</script>