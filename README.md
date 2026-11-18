# Exhibitora — Laravel Exhibition Services Website

A multi-page Laravel 12 + Blade + Tailwind CSS 4 starter inspired by the service taxonomy and content structure of Nihar Exhibition. The branding, color system, layouts and copy are original.

## Requirements
- PHP 8.2+
- Composer
- Node.js 20+ and npm
- MySQL (optional; SQLite is sufficient for the starter)

## 1. Create the Laravel application
```bash
composer create-project laravel/laravel:^12.0 exhibitora
cd exhibitora
```
Copy the contents of this starter package into the Laravel project, merging folders and replacing the matching files.

## 2. Install frontend dependencies
```bash
npm install
npm install tailwindcss @tailwindcss/vite
```
The supplied `vite.config.js`, `package.json`, `resources/css/app.css` and `resources/js/app.js` are configured for Tailwind 4.

## 3. Environment and application key
```bash
cp .env.example .env
php artisan key:generate
```
For MySQL, update `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=exhibitora
DB_USERNAME=root
DB_PASSWORD=
```
Create the database named `exhibitora`. SQLite can be used instead by setting `DB_CONNECTION=sqlite` and creating `database/database.sqlite`.

## 4. Run the project
```bash
php artisan serve
```
In another terminal:
```bash
npm run dev
```
Open http://127.0.0.1:8000.

## Pages
- `/` — Home
- `/about` — About
- `/services` — All services
- `/services/{slug}` — Individual service pages
- `/contact` — Contact form

## Contact form
The contact form validates input and stores enquiries in the database. The starter includes the `enquiries` migration. Run:
```bash
php artisan migrate
```
Configure `MAIL_*` values in `.env` and add a mail notification if you want email delivery. The starter stores submissions; it does not pretend to send mail.

## Replace demo content
- Edit service content in `app/Http/Controllers/ServiceController.php`.
- Replace image URLs in `resources/views` with locally licensed images in `public/images`.
- Update business details and social links in `resources/views/components/footer.blade.php`.
- Update `EXHIBITORA_*` contact details in the footer and contact page.

## Production
```bash
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```
Point the web server document root to Laravel's `public/` directory. Never expose the project root.
