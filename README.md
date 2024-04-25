### CREATION 

```
composer create-project --prefer-dist laravel/laravel farmer-app "10.*"
```

Modification fichier .env --> BDD sqlite

```
php artisan migrate
````

--------------------------

### CONFIGURATION VITE - VUE

```
npm install
npm install vue@3.2.36
npm install @vitejs/plugin-vue

```

Modification du fichier vite.config.js:
- import vue 
- ajout du plugin vue
- ajout resolve

--------------------------

### LANCER LE PROJET

````
npm run dev
php artisan serve

````
Consulter http://localhost:8000
-------------------------

### ETAPES DE DEVELOPPEMENT 

Modification du fichier resources/views/welcome.blade.php en app.blade.php : import instance de vue
Modification du fichier resources/js/app.js pour importer vue et composants UsersList
Creation du fichier resources/js/components/users/UsersList.vue
Import du composant UsersList dans app.blade.php
Modification du fichier routes/web.php 