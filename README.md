 ## link
 https://photocollecter.herokuapp.com/
 
 bash
 ```
 composer install
 copy .env.example .env 
 ```
 create a database  withname photo
 ( then change database name there i.e. "photo" in my case)
 ```
  php aritsan migrate 
 php artisan key:generate
 ```
```
npm install 
npm run watch 
```
for photo content public/storage  to storage/app/public/
``` 
first delete the storage  folder from public
php aritsan storage:link
```
```
php artisan serve
```

deployment stuff 
https://stackoverflow.com/questions/45552264/images-in-app-public-laravel-not-show-in-heroku-app
```
"post-install-cmd": [ "ln -sr storage/app/public public/storage" ]"
   ```
