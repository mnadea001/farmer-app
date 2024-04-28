<template>
    <select v-model="filter" @change="setFilter($event.target.value)">
        <option value="">Tous</option>
        <option value="price">Prix croissant</option>
        <option value="name">Nom croissant</option>
    </select>
    <template v-for="vache in vaches">
        <div
            class="bg-gradient-to-r from-yellow-50 to-yellow-300 my-2 p-5 rounded-md shadow-md"
        >
            <p class="font-sans text-xl hover:italic">{{ vache.name }}</p>
            <p>{{ vache.description }}</p>
            <p>Prix: {{ vache.price }} €</p>
            <p>{{ vache.is_sold ? "Vendu" : "En vente" }}</p>
            <p>Type: {{ vache.category.name }}</p>
            <p>Race: {{ vache.race.name }}</p>
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
