# Laravel RESTful API - Posts & Comments

## Deskripsi
Proyek ini adalah RESTful API menggunakan Laravel 12 untuk mengelola Posts dan Comments.
- Satu Post dapat memiliki banyak Comment (One-to-Many).
- Semua response API menggunakan JSON Resource.
- Validasi input menggunakan FormRequest.

---

## Setup Instructions

1. **Clone repository**

- git clone <repository-url>
- cd <project-folder>

2. **Install dependencies**
- composer install

3. **Buat file environment**
- cp .env.example .env
- edit .env dan sesuaikan nama database yang digunakan (DB_DATABASE=nama_database)

4. **Generate application key**
- php artisan key:generate

5. **Jalankan migrasi dan seeder**
- php artisan migrate --seed

6. **Jalankan Server**
- php artisan serve

# API Documentation

🔹 Posts
GET /api/posts → Ambil semua post.
GET /api/posts/{id} → Ambil detail post berdasarkan ID.
POST /api/posts → Tambah post baru.
PUT /api/posts/{id} → Update post berdasarkan ID.
DELETE /api/posts/{id} → Hapus post berdasarkan ID.

🔹 Comments

POST /api/posts/{id}/comments → Tambah komentar baru.
DELETE /api/comments/{id} → Hapus komentar berdasarkan ID.
