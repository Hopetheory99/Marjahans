# Project Plan for Marjahans WooCommerce Store

This document outlines the high level tasks required to build the Marjahans jewellery storefront. It summarises the goals described in `marjahans_bootstrap.yaml` and the rules in `AGENTS`.

## Milestones

1. **Environment Setup**
   - Docker configuration with Nginx, PHP-FPM 8.3, MySQL 8 and Mailhog.
   - Persist WordPress files via volumes.

2. **Custom Theme**
   - Theme located in `wp-content/themes/marjahans/` using Tailwind and Timber/Twig.
   - Enqueue Tailwind assets, implement basic templates (header, footer, index) and build pipeline (Vite or Mix).

3. **Payment Gateway Plugin**
   - `wp-content/plugins/marjahans-gateway/` with `Marjahans_Gateway_Bkash` class extending `WC_Payment_Gateway`.
   - Integrate bKash REST API with sandbox credentials placeholders.
   - Add settings page under WooCommerce payments and provide PHPUnit test stubs.

4. **Product Filters & 360° Viewer**
   - React component for advanced product filters.
   - Integrate PhotoSphereJS for product image rotation.
   - Playwright E2E tests for the above.

5. **Internationalisation**
   - Enable WPML for Bangla and English.
   - Maintain translation `.pot` files and add Bangla translations for menus.

6. **CI/CD & Deployment**
   - GitHub Actions workflow running `phpcs`, `phpunit`, `npm build`, and deploying to Fly.io.
   - Staging on every push to `main`, production on tags `v*`.

7. **Documentation**
   - Update `/docs/` with architecture decisions and design system links.
   - Document the CI/CD workflow in `docs/ci_cd.md`.
   - Provide Figma design system links in `docs/design-system.md`.

## Next Steps

Run `codex marjahans_bootstrap.yaml` to automatically scaffold the initial directories and files. Follow the coding standards defined in `AGENTS` and keep documentation up to date.

## Local Development

The Docker environment defined in `docker-compose.yml` provides the following services:

- `php` – WordPress running on PHP‑FPM 8.3
- `nginx` – serves the site on <http://localhost:8080>
- `db` – MySQL 8 with persistent volume `db_data`
- `mailhog` – catch‑all SMTP server on <http://localhost:8025>

Start everything with:

```bash
docker compose up -d
```

This mounts the repository into the containers so code changes are reflected immediately.
