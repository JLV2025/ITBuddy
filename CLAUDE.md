# OpenWolf

@.wolf/OPENWOLF.md

This project uses OpenWolf for context management. Read and follow .wolf/OPENWOLF.md every session. Check .wolf/cerebrum.md before generating code. Check .wolf/anatomy.md before reading files.


# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Stack

- **PHP 8.2+** / **Laravel 12** (framework), **Laravel Mix** (webpack) for frontend assets
- **AdminLTE 2** / **Bootstrap 3** UI — Blade views, no Livewire/Inertia
- **Chart.js v2.9.4** — bundled at `public/js/dist/Chart.min.js`; use `horizontalBar` type (v2 API, not v3)

## Common Commands

```bash
# Run all tests
php artisan test
# or
vendor/bin/phpunit

# Run a single test file
php artisan test tests/Feature/Assets/AssetsTest.php

# Run a specific test method
php artisan test --filter testSomeMethod

# Build frontend assets (dev)
npm run dev

# Build for production
npm run prod

# Laravel Mix watch
npm run watch

# Tinker / REPL
php artisan tinker

# Clear caches after config/route changes
php artisan optimize:clear
```

Dev server is served via **Laravel Herd** (`herd coverage` for coverage reports).

## Architecture

### Controllers

Two parallel controller trees:
- `app/Http/Controllers/` — web/UI controllers (Blade views)
- `app/Http/Controllers/Api/` — REST API controllers (JSON, used by datatables + select2)

Subdirectory groupings: `Assets/`, `Licenses/`, `Users/`, `Accessories/`, `Consumables/`, `Components/`, `Kits/`, `Account/`, `Auth/`

### API Pattern

Every API controller returns data via a **Transformer** (`app/Http/Transformers/`). Never return raw model attributes from API controllers — always pass through the transformer. `DatatablesTransformer` wraps paginated results.

```php
return (new AssetsTransformer)->transformAssets($assets, $assets->count());
```

### Authorization

All authorization goes through **Policies** (`app/Policies/`). `CheckoutablePermissionsPolicy` is the base for assets/licenses/accessories/consumables — its `checkout()` / `checkin()` methods accept `$item = null` so you can use `@can('checkout', \App\Models\Asset::class)` without an instance.

### FMCS (Full Multiple Company Support)

`Setting::getSettings()->full_multiple_companies_support == '1'` gates company-scoped filtering. The select2 API endpoints (`selectlist()` methods) accept a `companyId` query param — apply it like this:

```php
if ((Setting::getSettings()->full_multiple_companies_support == '1') && ($request->filled('companyId'))) {
    $query->where('table.company_id', $request->input('companyId'));
}
```

Pass `data-company-id="{{ $user->company_id }}"` in Blade to wire it to select2.

### Select2 AJAX Dropdowns

Use `class="js-data-ajax"` with `data-endpoint="hardware|licenses|consumables|..."`. `snipeit.js` auto-initializes these, forwarding `data-company-id` as `companyId` and `data-asset-status-type` as `statusType` to the API.

### Routes

All routes are in `routes/web.php` (UI) and `routes/api.php` (API). Breadcrumbs are defined inline using `->breadcrumbs(fn (Trail $trail) => ...)` from `tabuna/breadcrumbs`. Every UI route should have a breadcrumb.

Note: the `reports/unaccepted_assets` route is named with slashes, not dots — use `route('reports/unaccepted_assets')`.

### Translations

String keys live in `resources/lang/en-US/general.php` (and other files in that directory). Always add new UI strings as translation keys rather than hard-coding English.

### Checkout Redirect Flow

After checkout, `Helper::getRedirectOption()` reads `$request->redirect_option`. For redirecting back to the assigned user after checkout:
- Set `redirect_option=target` in the form
- Set `checkout_to_type=user` in the form
- Set `assigned_user={{ $user->id }}` in the form

### Key Helper Methods (`app/Helpers/Helper.php`)

- `Helper::deployableStatusLabelList()` — status labels for checkout forms
- `Helper::defaultChartColors()` — 10-color palette used in charts
- `Helper::getRedirectOption($request, $id, $table)` — post-checkout redirect logic

### Global View Variables

`$snipeSettings` is injected into all views via a service provider — no need to pass `Setting::getSettings()` from every controller. Use it directly in Blade.

## Testing

Tests live in `tests/Feature/` (organized by entity) and `tests/Unit/`. Feature tests hit the database; the test environment uses `array` cache/session/mail drivers. Tests use factories for data setup.

### Testing Methodology (BDD + TDD)

Follow **BDD first, then TDD**:
1. Write Gherkin scenarios describing the feature behavior before coding.
2. Convert scenarios to feature tests (Red phase).
3. Implement minimal code to pass (Green phase).
4. Refactor with confidence (Refactor phase).
5. Run `php artisan test --filter testMethodName` to verify each test passes.

```bash
# Coverage report (requires Laravel Herd)
herd coverage
```

## Additional Guidance

- **Copilot instructions**: `.github/copilot-instructions.md` contains coding standards, PHP 8.2/8.4 best practices, security rules, and SOLID principles. Follow those conventions when writing PHP.
- **Developer**: JLV2025 <Jing.Lv@qorvo.com>

<!-- gitnexus:start -->
# GitNexus — Code Intelligence

This project is indexed by GitNexus as **ITBuddy** (23124 symbols, 52682 relationships, 300 execution flows). Use the GitNexus MCP tools to understand code, assess impact, and navigate safely.

> If any GitNexus tool warns the index is stale, run `npx gitnexus analyze` in terminal first.

## Always Do

- **MUST run impact analysis before editing any symbol.** Before modifying a function, class, or method, run `gitnexus_impact({target: "symbolName", direction: "upstream"})` and report the blast radius (direct callers, affected processes, risk level) to the user.
- **MUST run `gitnexus_detect_changes()` before committing** to verify your changes only affect expected symbols and execution flows.
- **MUST warn the user** if impact analysis returns HIGH or CRITICAL risk before proceeding with edits.
- When exploring unfamiliar code, use `gitnexus_query({query: "concept"})` to find execution flows instead of grepping. It returns process-grouped results ranked by relevance.
- When you need full context on a specific symbol — callers, callees, which execution flows it participates in — use `gitnexus_context({name: "symbolName"})`.

## Never Do

- NEVER edit a function, class, or method without first running `gitnexus_impact` on it.
- NEVER ignore HIGH or CRITICAL risk warnings from impact analysis.
- NEVER rename symbols with find-and-replace — use `gitnexus_rename` which understands the call graph.
- NEVER commit changes without running `gitnexus_detect_changes()` to check affected scope.

## Resources

| Resource | Use for |
|----------|---------|
| `gitnexus://repo/ITBuddy/context` | Codebase overview, check index freshness |
| `gitnexus://repo/ITBuddy/clusters` | All functional areas |
| `gitnexus://repo/ITBuddy/processes` | All execution flows |
| `gitnexus://repo/ITBuddy/process/{name}` | Step-by-step execution trace |

## CLI

| Task | Read this skill file |
|------|---------------------|
| Understand architecture / "How does X work?" | `.claude/skills/gitnexus/gitnexus-exploring/SKILL.md` |
| Blast radius / "What breaks if I change X?" | `.claude/skills/gitnexus/gitnexus-impact-analysis/SKILL.md` |
| Trace bugs / "Why is X failing?" | `.claude/skills/gitnexus/gitnexus-debugging/SKILL.md` |
| Rename / extract / split / refactor | `.claude/skills/gitnexus/gitnexus-refactoring/SKILL.md` |
| Tools, resources, schema reference | `.claude/skills/gitnexus/gitnexus-guide/SKILL.md` |
| Index, status, clean, wiki CLI commands | `.claude/skills/gitnexus/gitnexus-cli/SKILL.md` |

<!-- gitnexus:end -->
