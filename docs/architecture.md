# Architecture Overview

The application runs WordPress with WooCommerce using a PHP-FPM container behind nginx. MySQL stores data and Mailhog captures outbound mail for testing. Assets for the custom theme are built with Vite and served from the theme directory.

Deployment to Fly.io uses a single Docker image built from `docker/php/Dockerfile` running behind Fly.io's router. GitHub Actions orchestrates builds, tests and deployment.
