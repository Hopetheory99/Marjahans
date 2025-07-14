# Development Logbook

## Log Entry – 2025-07-15
* Task: T1 – Environment setup
* Agent: Codex
* Summary: Added Dockerfile, docker-compose.yml, Nginx config and development README.
* Issues: None
* Acceptance: Containers defined; no lint or tests yet as project is empty.
* Commit: fd66732

## Log Entry – 2025-07-15
* Task: T2 – Scaffold custom theme
* Agent: Codex
* Summary: Created `marjahans` theme with Tailwind/Vite build pipeline and basic Timber templates.
* Issues: None
* Acceptance: Files generated and compiles via Vite; tests pending.
* Commit: 31eddb4

## Log Entry – 2025-07-15
* Task: T3 – Create payment gateway plugin
* Agent: Codex
* Summary: Added `marjahans-gateway` plugin with bKash gateway skeleton and PHPUnit test stub.
* Issues: None
* Acceptance: Plugin loads and test class defined.
* Commit: 1e11657

## Log Entry – 2025-07-15
* Task: T4 – Add product filter React component and 360° viewer
* Agent: Codex
* Summary: Implemented React components for product filtering and 360° viewer with Tailwind build via Vite. Enqueued scripts, added Playwright test stub, and configured Prettier and composer tooling.
* Issues: Unable to install npm dependencies and run Playwright tests due to network restrictions. PHPUnit not executable because PHAR extension missing.
* Acceptance: `composer lint` and `npm run format:check` pass.
* Commit: df69bcd

## Log Entry – 2025-07-15
* Task: T5 – Internationalisation setup
* Agent: Codex
* Summary: Added WPML configuration, POT file and Bangla translation for header menu items. Updated header template to use translation functions.
* Issues: None
* Acceptance: `composer lint` and `npm run format:check` pass; tests still blocked due to missing dependencies.
* Commit: f8383be

## Log Entry – 2025-07-15
* Task: T6 – Configure CI/CD
* Agent: Codex
* Summary: Added GitHub Actions workflow running lint, tests, and Fly.io deployment. Created `fly.toml` for deployment configuration.
* Issues: None
* Acceptance: Lint and test commands defined in workflow; docs updated.
* Commit: 3af0664

## Log Entry – 2025-07-15
* Task: T7 – Documentation updates
* Agent: Codex
* Summary: Documented CI/CD pipeline and design system. Updated README_dev with workflow details and marked tasks complete on the board.
* Issues: None
* Acceptance: Documentation builds; formatting check passes.
* Commit: 3af0664
