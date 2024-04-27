import './bootstrap';
import { createApp } from "vue";
import UsersList from "./components/users/UsersList.vue";
import VachesList from "./components/vaches/VachesList.vue";
import CreateUser from "./components/users/CreateUser.vue";

const app = createApp({});

app.component('createUser', CreateUser);
app.component('usersList', UsersList);
app.component('vachesList', VachesList);
app.mount('#app');