# Install Jetstream
```
composer require laravel/jetstream
php artisan jetstream:install livewire --teams
composer require laravel/sanctum
```
(altrimenti mi darà un errore al login/register)

## Install Jetstrap
```
composer require nascent-africa/jetstrap --dev
php artisan jetstrap:swap livewire --teams
```

## Finalizing

```
npm install && npm run dev
php artisan migrate
```

Da adesso in poi posso provare a creare i miei componenti Livewire per i manuali


# Altri pacchetti
Mi sono ispirato a questo tutorial (ho creato il lara-lw-blog) ma qui ho voluto usare AdminLTE
- https://www.youtube.com/watch?v=8IrSF8klwQk&list=PLcRnXYmrCwkRiIBDs12yV1Z0CIvUHlCzM&index=4


https://fontawesome.com/docs/web/setup/packages#the-free-package
`npm install --save @fortawesome/fontawesome-free`

https://adminlte.io/docs/3.2/
`npm install admin-lte@^3.2 --save`

Ho creato per prova resources/views/adminlte.blade.php

Ho giocato un pochino nei seguenti file per far sì che gli asset venissero correttamente compilati
- resources/js/bootstrap.js
- resources/css/app.css (questo l'ho proprio creato io)
- webpack.mix.js

Si è sporcata un pochino la pagina dashboard, così come quelle di Jetstrap, ma niente di che

# TODO
modal LW create/edit per Post
