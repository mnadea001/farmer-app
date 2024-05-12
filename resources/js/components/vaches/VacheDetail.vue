<template>
    <div
        v-if="vache"
        class="bg-gradient-to-r from-yellow-50 to-gray-200 my-2 p-5 rounded-md hover:shadow-md"
    >
        <p class="text-xl font-semibold font-mono">{{ vache.name }}</p>
        <span
            class="bg-gradient-to-r from-purple-50 to-gray-300 py-2 px-4 w-100 mb-3 rounded-full text-sm text-3xl font-semibold float-end"
        >
            {{ vache.is_sold ? "Vendu" : "En vente" }}
        </span>
        <p>{{ vache.description }}</p>
        <p class="">Prix: {{ vache.price }} €</p>
        <p class="">Type: {{ vache.category.name }}</p>
        <p class="mb-3">Race: {{ vache.race.name }}</p>
        <a :href="'/vaches/' + vache.id + '/edit'" class="bg-indigo-900 hover:bg-white hover:text-black p-2 rounded-md text-sm text-white my-5 text-3xl font-semibold">Modifier</a>

    </div>
    <div v-else>
        <p>Chargement en cours...</p>
    </div>
</template>
<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";

const vache = ref(null);
const vacheId = window.location.pathname.split("/").pop(); 

const loadVacheDetail = async () => {
  try {
    const response = await axios.get(`/api/vaches/${vacheId}`);
    vache.value = response.data.data;
  } catch (error) {
    console.error("Error fetching vache details:", error);
  }
};

onMounted(() => {
  loadVacheDetail();
});
</script>
