---
name: gen-test
description: Generate a PHPUnit test file matching ITBuddy conventions — factories, array drivers, Feature/Unit directories, proper test method naming.
disable-model-invocation: true
---

# Laravel Test Generator for ITBuddy

Generate PHPUnit test files following ITBuddy conventions.

## Conventions

- **Namespace**: `Tests\Feature\` for feature tests, `Tests\Unit\` for unit tests
- **Test class suffix**: `Test.php` (e.g., `AssetCheckoutTest.php`)
- **Data setup**: Use Laravel factories from `Database\Factories\`
- **Test methods**: `test_*` naming, lowercase with underscores
- **Environment**: `APP_ENV=testing`, cache/session/mail all use `array` driver
- **File location**: `tests/Feature/<Entity>/` for feature tests, `tests/Unit/<Entity>/` for unit tests
- **Extends**: `Tests\TestCase` for feature tests, `Tests\TestCase` or PHPUnit's `TestCase` for unit tests

## Template

```php
<?php

namespace Tests\Feature\Assets;

use App\Models\Asset;
use App\Models\AssetModel;
use App\Models\User;
use Tests\TestCase;

class AssetExampleTest extends TestCase
{
    public function test_example_behavior()
    {
        // Arrange
        $user = User::factory()->create();
        $asset = Asset::factory()->create();

        // Act
        $response = $this->actingAs($user)->get(route('assets.show', $asset));

        // Assert
        $response->assertOk();
    }
}
```

## Commands

```bash
# Run the new test
php artisan test --filter test_example_behavior

# Run entire new test file
php artisan test tests/Feature/Assets/AssetExampleTest.php
```

## Key Policies to Test
- `CheckoutablePermissionsPolicy` — checkout/checkin for assets, licenses, accessories, consumables
- Always test with `actingAs()` for authenticated user context
- Test FMCS scoping when `Setting::getSettings()->full_multiple_companies_support` is enabled
