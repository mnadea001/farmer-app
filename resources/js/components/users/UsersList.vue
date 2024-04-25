<template>
<template
v-for="user in users"
>
    <div>
        <p v-text="user.name"
        />
    </div>
</template>
</template>
<script setup>
  import {ref} from "vue";

  const users = ref([]);

  const loadFromServer = async () => {
        await axios.get('/api/users')
            .then((res) => users.value = res.data.data)
            .catch((err) => console.log(err));
    }
    loadFromServer();
</script>