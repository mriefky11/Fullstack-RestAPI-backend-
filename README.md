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

1. **Posts**
| Method | Endpoint          | Body / Params                                      | Description                                                |
| ------ | ----------------- | -------------------------------------------------- | ---------------------------------------------------------- |
| GET    | `/api/posts`      | -                                                  | List semua posts dengan jumlah komentar (`comments_count`) |
| GET    | `/api/posts/{id}` | `id` (URL param)                                   | Detail post beserta daftar komentar                        |
| POST   | `/api/posts`      | JSON: `{ "title": "string", "content": "string" }` | Buat post baru                                             |
| PUT    | `/api/posts/{id}` | JSON: `{ "title": "string", "content": "string" }` | Update post                                                |
| DELETE | `/api/posts/{id}` | `id` (URL param)                                   | Hapus post                                                 |

2. **Comments**
| Method | Endpoint                   | Body / Params                                       | Description            |
| ------ | -------------------------- | --------------------------------------------------- | ---------------------- |
| POST   | `/api/posts/{id}/comments` | JSON: `{ "author": "string", "message": "string" }` | Tambah comment ke post |
| DELETE | `/api/comments/{id}`       | `id` (URL param)                                    | Hapus comment          |
