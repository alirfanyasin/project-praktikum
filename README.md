### Caranya
```bash
git clone ....
```

dan copy file .env.example menjadi .env
```bash
cp .env.example .env
```


Generate Key
```bash
php artisan key:generate
```


lalu buka project di vscode, dan jalankan composer install
```bash
composer install
```

lalu jalankan perintah di bawah
```bash
npm install
```


Buka file `.env` dan ubah isinya menjadi seperti ini untuk contoh
```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=praktikum_week_12
DB_USERNAME=root
DB_PASSWORD=
```

jalankan `Laragon` atau `XAMPP` dan jalankan 
```bash
php artisan migrate
```


running project
```bash
php artisan serve
```
dan 

```bash
npm run dev
```




