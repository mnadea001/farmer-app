<template>
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div v-if="successMessage" class="text-green-500">
            {{ successMessage }}
        </div>
        <div v-if="errors.name" class="text-red-500">{{ errors.name[0] }}</div>
        <div v-if="errors.description" class="text-red-500">
            {{ errors.description[0] }}
        </div>
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name"
            >Nom de la vache</label
        >
        <input
            class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            v-model="formVacheData.name"
            type="text"
            id="name"
        />

        <label
            class="block text-gray-700 text-sm font-bold mb-2"
            for="description"
            >Description</label
        >
        <input
            class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            v-model="formVacheData.description"
            type="text"
            id="description"
        />

        <br />
        <div class="flex items-center justify-between">
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-3"
                type="button"
                v-on:click="createVacheAction"
            >
                Ajouter
            </button>
        </div>
    </form>
</template>
<script setup>
import { ref } from "vue";
import useVache from "../../composables/vaches/useVache";

const { errors, createVache } = useVache();

const formVacheData = ref({
    name: "",
    description: "",
});

const createVacheAction = async () => {
    await createVache(formVacheData.value);
};
</script>
