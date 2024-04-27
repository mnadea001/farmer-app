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

----
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
Modification du fichier app/Htpp/Resources/UserResource (transfert data de users, ce que l'on veut afficher)

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

----

Création d'une view resources/views/users/create.blade.php
Création d'une nouvelle route dans web.php (ajouter name)
Création d'un nouveau composant vue CreateUser.vue
Import/ Déclaration de CreateUser.vue dans app.js
Ajouter d'un bouton dans users/index pour rediriger vers create 
Ajout d'un formulaire dans CreateUser.vue 
Création d'un nouveau controller 
````
php artisan make:controller Api\\User\\StoreController --invokable
````

Création d'une nouvelle route en post dans api.php pour store
Modification de StoreController pour récupérer les données du formulaire
Modification du modele User pour le traitement du password
Modification de la view create pour envoyer les données






### TESTS

Installation de la librairie Pest

```
composer remove phpunit/phpunit
composer require pestphp/pest --dev --with-all-dependencies
./vendor/bin/pest --init
composer require pestphp/pest-plugin-faker --dev
composer require pestphp/pest-plugin-laravel --dev
```

Pour lancer tests:

````
./vendor/bin/pest
````

### INSTALLATION TAILWIND 

```
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p
```
Modification du fichier tailwinf.config.js et import tailwind @ resources/css/app.css

 
### COMMANDES 

```
php artisan route:list --path="users"
npm install @heroicons/vue
npm install @headlessui/vue

```