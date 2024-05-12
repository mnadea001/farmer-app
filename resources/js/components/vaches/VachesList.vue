<template>
    <select v-model="filter" @change="setFilter($event.target.value)">
        <option value="">Tous</option>
        <option value="price">Prix croissant</option>
        <option value="name">Nom croissant</option>
        <option value="is_sold">Statut</option>
    </select>
    <template v-for="vache in vaches">
        <div
            class="bg-gradient-to-r from-yellow-50 to-gray-200 my-2 p-5 rounded-md hover:shadow-md"
        >
            <p class="text-xl font-semibold font-mono">{{ vache.name }}</p>
            <span class="bg-gradient-to-r from-purple-50 to-gray-300 py-2 px-4 w-100 mb-3 rounded-full text-sm text-3xl font-semibold float-end">
                    {{ vache.is_sold ? "Vendu" : "En vente" }}
            </span>
            <p>Type: {{ vache.category.name }}</p>
            <p class="mb-5">Race: {{ vache.race.name }}</p>
            <a :href="'/vaches/' + vache.id" class="bg-indigo-900 hover:bg-white hover:text-black p-2 rounded-md text-sm text-white my-5 text-3xl font-semibold">Voir détails</a>

        </div>
    </template>
</template>
<script setup>
import { ref } from "vue";

const vaches = ref([]);
const filter = ref("");

const loadFromServer = async () => {
    await axios
        .get("/api/vaches", {
            params: { filter: filter.value },
        })
        .then((res) => (vaches.value = res.data.data))
        .catch((err) => console.log(err));
};
loadFromServer();

const setFilter = (value) => {
    filter.value = value;
    loadFromServer();
};
</script>
