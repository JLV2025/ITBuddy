---
name: itbuddy-conventions
description: ITBuddy project conventions — API transformers, FMCS, select2, policies, breadcrumbs, checkout flow. Applied automatically to every session.
user-invocable: false
disable-model-invocation: false
---

# ITBuddy Project Conventions

This skill encodes architectural conventions for the ITBuddy repository. Claude follows these rules for all code changes.

## Architecture

### Two Controller Trees
- `app/Http/Controllers/` — web/UI controllers returning Blade views
- `app/Http/Controllers/Api/` — REST API controllers returning JSON (used by datatables + select2)
- Subdirectories per entity: `Assets/`, `Licenses/`, `Users/`, `Accessories/`, `Consumables/`, `Components/`, `Kits/`, `Account/`, `Auth/`

### API Pattern (CRITICAL)
Every API controller MUST return data via a Transformer (`app/Http/Transformers/`). Never return raw model attributes from API controllers. Always pass through the appropriate transformer.

```php
return (new AssetsTransformer)->transformAssets($assets, $assets->count());
```

`DatatablesTransformer` wraps paginated results. `SelectlistTransformer` for select2 dropdown data.

### Authorization
All authorization goes through Policies (`app/Policies/`). `CheckoutablePermissionsPolicy` is base for assets/licenses/accessories/consumables. Its `checkout()` / `checkin()` methods accept `$item = null` for class-level checks:
```blade
@can('checkout', \App\Models\Asset::class)
```

### FMCS (Full Multiple Company Support)
Gated by `Setting::getSettings()->full_multiple_companies_support == '1'`. Select2 API endpoints (`selectlist()` methods) accept `companyId` query param:
```php
if ((Setting::getSettings()->full_multiple_companies_support == '1') && ($request->filled('companyId'))) {
    $query->where('table.company_id', $request->input('companyId'));
}
```
Blade wires it: `data-company-id="{{ $user->company_id }}"`

### Select2 AJAX Dropdowns
Use `class="js-data-ajax"` with `data-endpoint="hardware|licenses|consumables|..."`. `snipeit.js` auto-initializes, forwarding `data-company-id` as `companyId` and `data-asset-status-type` as `statusType`.

### Routes
- UI routes: `routes/web.php`
- API routes: `routes/api.php`
- Breadcrumbs via `tabuna/breadcrumbs`: `->breadcrumbs(fn (Trail $trail) => ...)` on every UI route
- Note: `reports/unaccepted_assets` route uses slashes, not dots: `route('reports/unaccepted_assets')`

### Translations
Keys in `resources/lang/en-US/general.php` (and sibling files). Always add new UI strings as translation keys. Never hard-code English strings.

### Checkout Redirect Flow
`Helper::getRedirectOption()` reads `$request->redirect_option`. To redirect to assigned user after checkout:
- `redirect_option=target` in form
- `checkout_to_type=user` in form
- `assigned_user={{ $user->id }}` in form

### Global View Variables
`$snipeSettings` injected into all views via service provider. Use directly in Blade — no need to call `Setting::getSettings()` from controllers.

### Key Helper Methods
- `Helper::deployableStatusLabelList()` — status labels for checkout forms
- `Helper::defaultChartColors()` — 10-color palette for charts
- `Helper::getRedirectOption($request, $id, $table)` — post-checkout redirect

### Chart.js
v2.9.4 bundled at `public/js/dist/Chart.min.js`. Use `horizontalBar` type (v2 API, not v3 `bar` with `indexAxis: 'y'`).

## UI
- **AdminLTE 2** / **Bootstrap 3** — Blade views
- **No Livewire/Inertia** in most views (Livewire exists but only for specific components: importer, personal access tokens, OAuth clients, Slack settings, category edit)

## Testing
- Factory-based data setup
- `array` cache/session/mail drivers in test environment
- PHPUnit 11, `*Test.php` suffix
- Run: `php artisan test --filter testMethodName`
- Coverage via Laravel Herd: `herd coverage`
