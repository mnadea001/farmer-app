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

```
npm run dev
php artisan serve

```
Consulter http://localhost:8000
-------------------------

### ETAPES DE DEVELOPPEMENT 

Modification du fichier resources/views/welcome.blade.php en app.blade.php : import instance de vue
Modification du fichier resources/js/app.js pour importer vue et composants UsersList
Creation du fichier resources/js/components/users/UsersList.vue
Import du composant UsersList dans app.blade.php
Modification du fichier routes/web.php pour indiquer la route de app.blade.php 

Création du controller IndexController

```
php artisan make:controller Api\\User\\IndexController --invokable

```
Modification du fichier routes/api.php pour indiquer la route de users
Modification du fichier RouteServiceProviders pour modifier le prefix
Vérifier la création de la route avec la commande
```
php artisan route:list --path="users"
````
Création d'une ressource User avec 

```
php artisan make:resource UserResource
php artisan make:resource UserCollection --collection
```
Modification du fichier app/Htpp/Resources/UserCollection (récupération users)
Modification du fichier app/Htpp/Resources/UserResource (transfert data de users)

Modifier le controller IndexController : fonction invoke afin de retourner tous les utilisateurs
Création d'utilisateurs dans database/seeders/DatabaseSeeder.php

```
php artisan migrate:fresh --seed

```

Création d'un controller 
````
php artisan make:controller User\\UsersListController --invokable
````

Modification de la route dans routes/web.php
Modificiation du controller UsersListController
Création de la view resources/views/users/index.blade.app
Modification de resource/js/components/users/UsersList.vue afin d'afficher la liste des utilisateurs

### COMMANDES 

```
php artisan route:list --path="users"

```