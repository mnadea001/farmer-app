<template>
<template
v-for="vache in vaches"
>
    <div class="border">
        <p v-text="vache.name"
        />       
        <p v-text="vache.description"
        />   
        <p v-text="vache.price"
        />   
        <p v-text="vache.is_sold"
        /> 
        <p v-text="vache.category.name"
        /> 
        <p v-text="vache.race.name"
        /> 
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