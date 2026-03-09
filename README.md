# OneCall Technical Services

A professional Laravel-based website for OneCall Technical Services, providing home and technical services in Dubai.

## About This Project

OneCall Technical Services is a comprehensive service provider offering:
- Tesla Charger Installation
- Plumbing Services
- Electrical Work
- AC Repair & Ventilation
- Painting Services
- CCTV Installation
- Tiling Services
- Aluminum & Glass Work
- Gypsum Partition & Ceiling Work

## Project Structure

This project follows Laravel best practices with an optimized, modular structure:

- **Controllers**: Organized by feature (PageController, ServiceController, SeoController)
- **Services Layer**: Business logic separated from controllers
- **View Composers**: Shared data automatically injected into views
- **Modular JavaScript**: Components and utilities separated
- **Configuration Management**: Environment-based configuration

For detailed structure documentation, see [PROJECT_STRUCTURE.md](PROJECT_STRUCTURE.md).

## Technology Stack

- **Framework**: Laravel 10.x
- **PHP**: 8.1+
- **Frontend**: Bootstrap 5, Vite, Vanilla JavaScript
- **Database**: MySQL/MariaDB

## Installation

1. Clone the repository
2. Install dependencies:
   ```bash
   composer install
   npm install
   ```
3. Copy `.env.example` to `.env` and configure:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Configure your database in `.env`
5. Run migrations:
   ```bash
   php artisan migrate
   ```
6. Build assets:
   ```bash
   npm run dev
   # or for production
   npm run build
   ```

## Development

### Running the Development Server

```bash
php artisan serve
npm run dev
```

### Project Structure Highlights

- **Controllers**: `app/Http/Controllers/`
- **Services**: `app/Services/`
- **Views**: `resources/views/`
- **JavaScript**: `resources/js/`
- **Routes**: `routes/web.php`

## Key Features

- ✅ SEO Optimized (Meta tags, structured data, sitemap, robots.txt)
- ✅ Responsive Design
- ✅ Modular JavaScript Components
- ✅ Service-based Architecture
- ✅ View Composers for Shared Data
- ✅ Organized Asset Structure
- ✅ Configuration Management

## Contributing

Please follow Laravel coding standards and best practices. See [PROJECT_STRUCTURE.md](PROJECT_STRUCTURE.md) for detailed architecture documentation.

## License

This project is proprietary software for OneCall Technical Services.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
