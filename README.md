# TUGAS-PWEB-MINI-CHATTING

I Komang Gede Agung Krisna Yuda Kurniawan [2401010030] SIstem Informasi

# Mini Chat Laravel

Mini Chat adalah aplikasi realtime chat sederhana menggunakan Laravel + Reverb + Echo.

## Features

- Login & Register
- Realtime Chat
- Laravel Reverb WebSocket
- Modern UI
- Multi User Chat
- Responsive Design

---

# Preview

## Login
Modern glassmorphism login UI.

## Chat
Realtime multi-user chat menggunakan Laravel Reverb.

---

# Tech Stack

- Laravel
- Laravel Reverb
- Laravel Echo
- Vite
- Tailwind CSS
- MySQL

---

# Installation

## 1. Clone Repository

```bash
git clone https://github.com/USERNAME/mini-chat.git
```

---

## 2. Masuk Folder Project

```bash
cd mini-chat
```

---

## 3. Install Dependency

```bash
composer install
npm install
```

---

## 4. Copy Environment

```bash
cp .env.example .env
```

---

## 5. Generate Key

```bash
php artisan key:generate
```

---

## 6. Setup Database

Edit file `.env`

```env
DB_DATABASE=mini_chat
DB_USERNAME=root
DB_PASSWORD=
```

---

## 7. Migration

```bash
php artisan migrate
```

---

# Run Project

## Laravel Server

```bash
php artisan serve
```

---

## Vite

```bash
npm run dev
```

---

## Laravel Reverb

```bash
php artisan reverb:start
```

---

# Realtime Chat

Project ini menggunakan:

- Laravel Reverb
- Laravel Echo
- Broadcasting Event

Realtime berjalan tanpa refresh halaman.

---

# Project Structure

```bash
app/
resources/views/
routes/
public/
```

---

# Author

Developed by YOUR_NAME

---

# 📜 License

Free to use for learning purposes.
