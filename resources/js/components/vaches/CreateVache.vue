<template>
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
  
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

        <label class="block text-gray-700 text-sm font-bold mb-2" for="price"
            >Price</label
        >
        <input
            class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            v-model="formVacheData.price"
            type="float"
            id="price"
        />
        <!-- Champ de sélection pour la catégorie -->
        <label
            class="block text-gray-700 text-sm font-bold mb-2"
            for="category"
        >
            Catégorie
        </label>
        <select
            v-model="formVacheData.category_id"
            id="category"
            class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        >
            <option value="">Sélectionnez une catégorie</option>
            <option
                v-for="category in categories"
                :key="category.id"
                :value="category.id"
            >
                {{ category.name }}
            </option>
        </select>

        <!-- Champ de sélection pour la race -->
        <label class="block text-gray-700 text-sm font-bold mb-2" for="race">
            Race
        </label>
        <select
            v-model="formVacheData.race_id"
            id="race"
            class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        >
            <option value="">Sélectionnez une race</option>
            <option v-for="race in races" :key="race.id" :value="race.id">
                {{ race.name }}
            </option>
        </select>


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

const { errors, createVache, categories, races } = useVache();

const formVacheData = ref({
    name: "",
    description: "",
    price: 0,
    category_id: null,
    race_id: null,
    is_sold: false,
});

const createVacheAction = async () => {
    await createVache(formVacheData.value);
};
</script>
