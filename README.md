# Portal Berita

Aplikasi portal berita berbasis Laravel dengan fitur admin panel untuk manajemen konten.

## Preview Aplikasi

<img width="219" height="450" alt="image" src="https://github.com/user-attachments/assets/857d0a00-7ddf-4d2d-a9b6-1cbd4b5fff45" /> <br>
![Preview 2](public/images/preview/pv2.png)
![Preview 3](public/images/preview/pv3.png)

## Fitur

- 🏠 Halaman Beranda dengan artikel terbaru
- 📰 Manajemen Artikel (CRUD)
- 🏷️ Manajemen Kategori
- 🔍 Pencarian Artikel
- 👥 Halaman About Us
- 📱 Responsive Design
- 🔐 Admin Panel

## Cara Instalasi

1. Clone repository ini
```bash
git clone <repository-url>
cd portalberita
```

2. Install dependencies PHP dengan Composer
```bash
composer install
```

3. Install dependencies JavaScript dengan NPM
```bash
npm install
```

4. Build assets
```bash
npm run build
```

5. Copy file .env.example menjadi .env dan sesuaikan konfigurasi database
```bash
cp .env.example .env
```

6. Generate application key
```bash
portal
```

7. Jalankan migrasi database dan seeder
```bash
php artisan migrate:fresh --seed
```

8. Jalankan development server
```bash
php artisan serve
```

9. Di terminal terpisah, jalankan Vite untuk development
```bash
npm run dev
```

## Akses Admin Panel

URL: `/admin/login`

Kredensial default:
- Email: admin@admin.com
- Password: password

## Tech Stack

- Laravel 10
- MySQL
- Tailwind CSS
- Alpine.js
- Laravel Vite

## Lisensi

[MIT License](LICENSE)
