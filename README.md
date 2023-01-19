#Belajar_laravel_dasar

1. Clone github
2. Install dan update composer

```bash
composer install && composer update
```

3. Copy file .env.example

```bash
cp .env.example .env
```

4. Migrate database

```bash
php artisan migrate
```

5. Migrate seeder

```bash
php artisan db:seed
```

6. Generate key

```bash
php artisan key:generate
# atau
php artisan key:generate --show
```

7. install node module

```bash
npm install && npm run dev
```

8. Jalankan laravel

```bash
php artisan serve
```
