<template>
<template
v-for="vache in vaches"
>
    <div class="bg-gradient-to-r from-yellow-50 to-yellow-300 my-2 p-5 rounded-md shadow-md">
        <p class="font-sans text-xl hover:italic">{{ vache.name }}</p>
        <p>{{ vache.description }}</p>
        <p>{{ vache.price }}</p>
        <p>{{ vache.is_sold }}</p>
        <p>{{ vache.category.name }}</p>
        <p>{{ vache.race.name }}</p>
    </div>
</template>
</template>
<script setup>
  import {ref} from "vue";

  const vaches = ref([]);

  const loadFromServer = async () => {
        await axios.get('/api/vaches')
            .then((res) => vaches.value = res.data.data)
            .catch((err) => console.log(err));
    }
    loadFromServer();
</script>