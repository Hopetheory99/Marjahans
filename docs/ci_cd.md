# CI/CD Pipeline

This project uses **GitHub Actions** to lint, test and deploy the site.

The workflow defined in `.github/workflows/ci.yml` performs the following steps:

1. Checkout the code and set up Node.js and PHP environments.
2. Install Composer and npm dependencies.
3. Build theme assets with Vite.
4. Run PHP_CodeSniffer and Prettier checks.
5. Execute PHPUnit and Playwright tests. Playwright is configured via
   `playwright.config.ts` at the repository root and run with `npm run test:e2e`
   from the theme directory.
6. Deploy to Fly.io when changes are pushed to the `main` branch.

To deploy manually, ensure you have the `flyctl` CLI installed and run:

```bash
flyctl deploy
```

Set the `FLY_API_TOKEN` secret in the GitHub repository settings so the action can deploy.
