<template>
<template
v-for="vache in vaches"
>
    <div>
        <p v-text="vache.name"
        />        
        <!-- <p v-text="user.password"
        /> -->
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