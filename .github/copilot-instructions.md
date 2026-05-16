## Purpose
Provide concise, repository-specific guidance so AI coding agents can be productive immediately.

## Big picture
- This is a static (HTML/CSS/JS) website for a travel agency with a small PHP backend for form handling. Core UI lives under `web/` and static assets under `web/assets/`.
- Frontend uses local copies of Bootstrap (in `web/bootstrap/` and `web/bs/`) and jQuery plugins (in `web/assets/js/plugins/`).

## Key files & folders
- Web root: [web](web)
- Main styles: [web/fypstyle.css](web/fypstyle.css)
- Main JS: [web/assets/js/main.js](web/assets/js/main.js)
- PHP server endpoint(s): [web/server.php](web/server.php)
- Bootstrap copies: [web/bootstrap](web/bootstrap) and [web/bs](web/bs)
- Images: [web/assets/img](web/assets/img)

## How to run locally (developer workflows)
- Static preview: serve `web/` with a simple HTTP server: `python3 -m http.server --directory web 8000`.
- To exercise PHP endpoints (contact/booking), run PHP built-in server from repo root: `php -S localhost:8000 -t web` and visit `http://localhost:8000`.

## Project-specific conventions and patterns
- Multiple local Bootstrap copies exist; prefer editing `web/fypstyle.css` for project styles and avoid changing global bootstrap files unless necessary.
- File names are inconsistent (e.g., `vehicle.HTML`). Be careful with case on macOS vs Linux — preserve existing filename casing.
- JavaScript plugin ordering matters: jQuery is loaded before plugin files in `web/assets/js/` — preserve order when adding scripts.
- Assets are referenced by relative paths from files under `web/`. When adding new assets mirror the existing structure: `assets/css`, `assets/js`, `assets/img`.

## Data flows & integration points
- Forms in HTML pages POST to `server.php` for server-side handling. Inspect [web/server.php](web/server.php) to understand expected POST fields and response behaviour.
- No external package manager or build pipeline is present; dependencies are vendored in `web/assets/` and `web/bs/`.

## Editing guidance for AI agents
- Make minimal, focused edits. This is a small static site — large refactors (introducing build tools or package managers) require human approval.
- When changing styles, update `web/fypstyle.css` and check pages: `final year project.html`, `with_bootstrap.html`, `services.html`.
- When adding JS, append new script tags near the end of the page templates, after existing plugin includes, and test interactions in the browser.

## Examples (explicit pointers)
- To modify contact form handling, check [web/contact.html](web/contact.html) and [web/server.php](web/server.php).
- To adjust the homepage slider, edit assets under [web/assets/img/slider-img](web/assets/img/slider-img) and [web/assets/js/mb.YTPlayer.js](web/assets/js/mb.YTPlayer.js) if required.

## When to ask the human maintainer
- If a change requires installing new tooling (npm, composer) or modifying server-side behaviour beyond simple form fields, ask before proceeding.
- If you need to rename files for consistency (case changes, moving folders), confirm since hosting may be case-sensitive.

## Quick checklist for PRs
- Keep changes small and focused.
- Preserve filename casing and script/style load order.
- Manual test: open `php -S localhost:8000 -t web` and smoke-test modified pages and forms.

Please review — I can iterate on anything unclear or missing.
