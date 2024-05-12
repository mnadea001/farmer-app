import './bootstrap';
import { createApp } from "vue";
import UsersList from "./components/users/UsersList.vue";
import VachesList from "./components/vaches/VachesList.vue";
import CreateUser from "./components/users/CreateUser.vue";
import CreateVache from "./components/vaches/CreateVache.vue";
import EditVache from "./components/vaches/EditVache.vue";
import VacheDetail from "./components/vaches/VacheDetail.vue";

const app = createApp({});

app.component('vacheDetail', VacheDetail);
app.component('createVache', CreateVache);
app.component('editVache', EditVache);
app.component('createUser', CreateUser);
app.component('usersList', UsersList);
app.component('vachesList', VachesList);
app.mount('#app');