# Development Environment

This project uses Docker Compose for local development.

## Prerequisites
- Docker Engine 20+
- Docker Compose 1.29+

## Usage

```bash
docker compose up -d
```

Services:
- **nginx**: <http://localhost:8080>
- **mailhog**: <http://localhost:8025>

WordPress files are mounted from the repository so changes are reflected immediately.

## Theme assets

Inside `wp-content/themes/marjahans/` run:

```bash
npm install  # first time only
npm run dev  # rebuild Tailwind on changes
```

Build production CSS with `npm run build`.

## CI/CD

Code pushed to GitHub runs through the automated workflow defined in `.github/workflows/ci.yml`. It installs dependencies, builds theme assets, runs tests and deploys to Fly.io when merging to `main`.

Ensure the `FLY_API_TOKEN` secret is configured in the repository settings for deployments.
