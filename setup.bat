composer install && npm install && php artisan vendor:publish --provider="Cviebrock\EloquentSluggable\ServiceProvider" && php artisan migrate:fresh && php artisan db:seed && php artisan serve
