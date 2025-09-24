# Copilot Instructions for AI Coding Agents

## Project Overview
This is a Laravel-based web application. The codebase follows standard Laravel conventions for structure, routing, controllers, models, and views. Key directories include:
- `app/Http/Controllers/`: Route handlers and business logic
- `app/Models/`: Eloquent ORM models
- `resources/views/`: Blade templates for frontend rendering
- `routes/`: Route definitions (`web.php`, `console.php`)
- `config/`: Application configuration files
- `database/`: Migrations, seeders, and factories
- `public/`: Entry point (`index.php`) and static assets

## Architecture & Patterns
- MVC architecture: Controllers handle requests, Models interact with the database, Views render HTML.
- Uses Eloquent ORM for database access. Models are in `app/Models/`.
- Blade templating is used for frontend views. Layouts and components may be reused across views.
- Route definitions are in `routes/web.php` (web) and `routes/console.php` (CLI).
- Service providers in `app/Providers/` register services and bindings.

## Developer Workflows
- **Start local server:** `php artisan serve` (from project root)
- **Run tests:** `vendor\bin\phpunit` or `vendor\bin\pest` (for Pest tests)
- **Run migrations:** `php artisan migrate`
- **Seed database:** `php artisan db:seed`
- **Install dependencies:** `composer install` (PHP), `npm install` (JS/CSS)
- **Build frontend assets:** `npm run build` (uses Vite)

## Conventions & Custom Patterns
- Blade files use Tailwind CSS and may include Flowbite components (see `resources/views/home.blade.php`).
- Commented code in Blade files often indicates optional UI elements or alternate layouts.
- Environment config is managed via `.env` (not in repo).
- Tests are organized in `tests/Feature/` and `tests/Unit/`.
- Factories and seeders are in `database/factories/` and `database/seeders/`.

## Integration Points
- Uses Vite for asset bundling (`vite.config.js`).
- External JS/CSS libraries (Tailwind, Flowbite) are loaded via CDN in Blade templates.
- Composer manages PHP dependencies; NPM manages JS/CSS dependencies.

## Examples
- To add a new page: create a Blade view in `resources/views/`, add a route in `routes/web.php`, and implement a controller in `app/Http/Controllers/`.
- To add a model: create in `app/Models/`, run migration in `database/migrations/`, and update controller logic as needed.

## References
- See `README.md` for general Laravel info and links to documentation.
- Key files: `artisan`, `composer.json`, `vite.config.js`, `phpunit.xml`, `routes/web.php`, `resources/views/`, `app/Http/Controllers/`, `app/Models/`

---
If any conventions or workflows are unclear, ask the user for clarification before proceeding with major changes.
