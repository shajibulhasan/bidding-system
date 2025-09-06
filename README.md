# Bidding System

A full‑stack web application for running time‑boxed auctions where users can list items and place real‑time bids. Built with **Laravel (PHP)** on the backend and **Blade + Bootstrap + Vite** on the frontend.

> This repository originally contained the default Laravel README. This file documents the actual project so collaborators can set up, run, and contribute quickly.

---

## ✨ Features

* User authentication & roles (Admin, Seller, Bidder)
* Create and manage auction listings (title, description, starting price, images, start/end time)
* Place bids with validation against current highest bid and auction window
* Auto‑incrementing **current price** and **highest bidder** tracking
* Auction states: Draft → Live → Ended (with automatic closing by schedule)
* Seller dashboard: listings, active bids, outcomes
* Admin panel: user management, category/setting management
* Basic notifications (e.g., outbid / auction ended)
* Responsive UI with Bootstrap

---

## 🧰 Tech Stack

* **Backend:** Laravel (PHP), Eloquent ORM, Migrations, Seeders
* **Frontend:** Blade templates, Bootstrap, Vite (asset bundling)
* **Database:** MySQL
* **Auth:** Laravel UI
* **Other:** Laravel Scheduler/Queues (for closing auctions & notifications)

---

---

## 🚀 Getting Started

### Prerequisites

* PHP ≥ 8.1
* Composer
* Node.js ≥ 18 & NPM
* MySQL

### 1) Clone & install

```bash
git clone https://github.com/shajibulhasan/bidding-system.git
cd bidding-system

# PHP deps
composer install

# Node deps
npm install
```

### 2) Environment

```bash
cp .env.example .env
php artisan key:generate
```

Update your `.env` with DB credentials and mail settings (optional but recommended for notifications):

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bidding_system
DB_USERNAME=root
DB_PASSWORD=secret
```

### 3) Database

```bash
php artisan migrate --seed
```

> Seeding will insert basic roles, an admin user, and sample categories/listings.

### 4) Build assets & run

```bash
# Development
npm run dev
php artisan serve

# Or build for production
npm run build
```

Open the app at: `http://127.0.0.1:8000`

---


---

## 🧭 Usage Guide

1. **Register/Login** to access bidding features.
2. **Create an Auction** (seller): set title, description, start price, start & end time, upload one or more images.
3. **Go Live**: auction automatically becomes live at the start time.
4. **Place Bids** (bidders): highest valid bid wins when time ends.
5. **Closing**: auctions move to *Ended* when the end time passes (via scheduler/cron).
6. **Results**: seller sees winner & final price; winner gets a notification.

> To run schedulers locally, add a cron entry:

```
* * * * * php /path/to/project/artisan schedule:run >> /dev/null 2>&1
```

## 📞 Contact

Created by **Shajibul Hasan** — feel free to open an issue or reach out via the contact info on the profile.
