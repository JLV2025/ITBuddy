# anatomy.md

> Auto-maintained by OpenWolf. Last scanned: 2026-06-25T13:35:41.117Z
> Files: 535 tracked | Anatomy hits: 0 | Misses: 0

## ./

- `_config.yml` (~0 tok)
- `.all-contributorsrc` (~30720 tok)
- `.dockerignore` — Docker ignore rules (~42 tok)
- `.git-blame-ignore-revs` — Pint: Models (~377 tok)
- `.gitattributes` — Git attributes (~15 tok)
- `.gitignore` — Git ignore rules (~361 tok)
- `.htaccess` — Apache configuration (~119 tok)
- `.nvmrc` (~3 tok)
- `.pa11yci.json` (~2156 tok)
- `.upgrade_requirements.json` (~153 tok)
- `app.json` (~1655 tok)
- `artisan` — Laravel CLI entry point (~439 tok)
- `CLAUDE.md` — OpenWolf, project config, BDD+TDD, copilot ref, dev identity (~1400 tok)
- `CODE_OF_CONDUCT.md` — Contributor Covenant Code of Conduct (~807 tok)
- `composer.json` — PHP package manifest (~1154 tok)
- `CONTRIBUTING.md` — ## Contributing (~80 tok)
- `CONTRIBUTORS.md` (~25884 tok)
- `crowdin.yml` — /*.php", (~83 tok)
- `dev.docker-compose.yml` — Compose file to spin up a local Snipe-IT for development. (~272 tok)
- `docker-compose.yml` — Docker Compose services (~246 tok)
- `Dockerfile` — Docker container definition (~1152 tok)
- `Dockerfile.alpine` (~710 tok)
- `Dockerfile.fpm-alpine` (~954 tok)
- `install.sh` — ensure running as root (~108 tok)
- `LICENSE` — Project license (~9206 tok)
- `pa11y.js` — Declares pa11y (~170 tok)
- `package-lock.json` — npm lock file (~107337 tok)
- `package.json` — Node.js package manifest (~627 tok)
- `phpstan.neon.dist` (~56 tok)
- `phpstan.neon.example` — Copy this file to "phpstan.neon" and update the parameters section as needed (~71 tok)
- `phpunit.xml` (~337 tok)
- `Procfile` (~16 tok)
- `psalm.xml` (~164 tok)
- `README.md` — Project documentation (~2682 tok)
- `SECURITY.md` — Security Policy (~479 tok)
- `server.php` — Laravel - A PHP Framework For Web Artisans (~152 tok)
- `snipeit.sh` — / Usage: snipeit.sh [-vh] (~10806 tok)
- `TESTING.md` — Running the Test Suite (~481 tok)
- `upgrade.php` — We set this $app_environment here to determine which version of composer to use, --no-dev or with dev dependencies. (~6595 tok)
- `Vagrantfile` — -*- mode: ruby -*- (~1225 tok)
- `webpack.mix.js` — Copy, minify and version signature-pad.css (~1386 tok)

## .claude/

- `settings.json` (~522 tok)

## .claude/agents/

- `laravel-security-reviewer.md` — Laravel Security Reviewer for ITBuddy (~525 tok)
- `n1-detector.md` — N+1 Query Detector for ITBuddy (~666 tok)

## .claude/rules/

- `openwolf.md` (~313 tok)

## .claude/skills/gen-test/

- `SKILL.md` — Laravel Test Generator for ITBuddy (~466 tok)

## .claude/skills/snipeit-conventions/

- `SKILL.md` — ITBuddy Project Conventions (~955 tok)

## .github/

- `autolabeler.yml` (~360 tok)
- `CODEOWNERS` — Code ownership for pull request reviews, per (~187 tok)
- `config.yml` — Configuration for new-issue-welcome - https://github.com/behaviorbot/new-issue-welcome (~524 tok)
- `copilot-instructions.md` — GitHub Copilot Custom Instructions for ITBuddy (~1334 tok)
- `dependabot.yml` (~42 tok)
- `FUNDING.yml` — You can add one username per supported platform and one custom link (~76 tok)

## .github/ISSUE_TEMPLATE/

- `Bug-Report.yml` (~1849 tok)
- `Feature-Request.yml` (~534 tok)

## .github/workflows/

- `crowdin-upload.yml` — CI: Crowdin Action (~140 tok)
- `docker-alpine.yml` — Snipe-IT (Alpine) Docker image build for hub.docker.com (~983 tok)
- `docker-ubuntu.yml` — Snipe-IT Docker image build for hub.docker.com (~964 tok)
- `dockerhub-description.yml` — CI: Update Docker Hub Description (~172 tok)
- `ethicalcheck.yml` — This workflow uses actions that are not certified by GitHub. (~917 tok)
- `SA-codeql.yml` — This workflow checks out code, performs a CodeQL analysis (for JavaScript) and integrates the results (~288 tok)
- `stale.yml` — CI: 'Close stale issues' (~492 tok)
- `tests-mysql.yml` — CI: Tests in MySQL (~717 tok)
- `tests-postgres.yml` — CI: Tests in Postgres (~733 tok)
- `tests-sqlite.yml` — CI: Tests in SQLite (~564 tok)

## ansible/freebsd/

- `vagrant_playbook.yml` (~2051 tok)

## ansible/ubuntu/

- `apachevirtualhost.conf.j2` (~62 tok)
- `vagrant_playbook.yml` (~1708 tok)

## app/Actions/Breadcrumbs/

- `BuildAcceptanceBreadcrumbs.php` — BuildAcceptanceBreadcrumbs: forAcceptance (~993 tok)

## app/Actions/Categories/

- `DestroyCategoryAction.php` — DestroyCategoryAction: run (~483 tok)

## app/Actions/CheckoutRequests/

- `CancelCheckoutRequestAction.php` — CancelCheckoutRequestAction: run (~364 tok)
- `CreateCheckoutRequestAction.php` — CreateCheckoutRequestAction: run (~442 tok)

## app/Actions/Manufacturers/

- `DeleteManufacturerAction.php` — DeleteManufacturerAction: run (~499 tok)

## app/Actions/Permissions/

- `NormalizePermissionsPayloadAction.php` — Normalize permissions payloads from request/model to a consistent associative array. (~181 tok)
- `PreserveUnauthorizedPrivilegedPermissionsAction.php` — Preserve privileged permission keys unless the authenticated user may manage them. (~422 tok)

## app/Actions/Suppliers/

- `DestroySupplierAction.php` — DestroySupplierAction: run (~542 tok)

## app/Console/

- `Kernel.php` — Define the application's command schedule. (~326 tok)

## app/Console/Commands/

- `BulkDelete.php` — Artisan command: BulkDelete (~11205 tok)
- `CheckinAndDeleteItems.php` — Artisan command: CheckinAndDeleteItems (~3012 tok)
- `CheckinLicensesFromAllUsers.php` — The name and signature of the console command. (~558 tok)
- `CheckoutLicenseToAllUsers.php` — The name and signature of the console command. (~823 tok)
- `CleanIncorrectCheckoutAcceptances.php` — The name and signature of the console command. (~944 tok)
- `CleanOldCheckoutRequests.php` — The name and signature of the console command. (~509 tok)
- `CreateAdmin.php` — Artisan command: CreateAdmin (~723 tok)
- `DisableLDAP.php` — The name and signature of the console command. (~401 tok)
- `DisableSAML.php` — The name and signature of the console command. (~401 tok)
- `FixBulkAccessoryCheckinActionLogEntries.php` — The name and signature of the console command. (~1338 tok)
- `FixDoubleEscape.php` — The name and signature of the console command. (~670 tok)
- `FixMismatchedAssetsAndLogs.php` — The name and signature of the console command. (~882 tok)
- `FixupAssignedToWithoutAssignedType.php` — The name and signature of the console command. (~758 tok)
- `FixUpAssignedTypeWithoutAssignedTo.php` — The name and signature of the console command. (~213 tok)
- `GeneratePersonalAccessToken.php` — The name and signature of the console command. (~696 tok)
- `ImportLocations.php` — The name and signature of the console command. (~1551 tok)
- `KillAllSessions.php` — The name and signature of the console command. (~388 tok)
- `LdapSync.php` — The name and signature of the console command. (~7165 tok)
- `LdapTroubleshooter.php` — Check if a given ip is in a network (~7347 tok)
- `MergeUsersByUsername.php` — The name and signature of the console command. (~1366 tok)
- `MigrateLicenseSeatQuantitiesInActionLogs.php` — The name and signature of the console command. (~590 tok)
- `MoveUploadsToNewDisk.php` — The name and signature of the console command. (~1907 tok)
- `NormalizeUserNames.php` — The name and signature of the console command. (~291 tok)
- `ObjectImportCommand.php` — Class ObjectImportCommand (~1288 tok)
- `PaveIt.php` — The name and signature of the console command. (~844 tok)
- `Purge.php` — The name and signature of the console command. (~2050 tok)
- `PurgeEulaPDFs.php` — The name and signature of the console command. (~1681 tok)
- `PurgeLoginAttempts.php` — The name and signature of the console command. (~275 tok)
- `ReEncodeCustomFieldNames.php` — The name and signature of the console command. (~1584 tok)
- `RegenerateAssetTags.php` — The name and signature of the console command. (~912 tok)
- `RemoveExplicitEols.php` — The name and signature of the console command. (~455 tok)
- `RemoveInvalidUploadDeleteActionLogItems.php` — The name and signature of the console command. (~418 tok)
- `ResetDemoSettings.php` — The name and signature of the console command. (~1131 tok)
- `RestoreDeletedUsers.php` — The name and signature of the console command. (~966 tok)
- `RestoreFromBackup.php` — The name and signature of the console command. (~7548 tok)
- `RotateAppKey.php` — The name and signature of the console command. (~1797 tok)
- `SamlClearExpiredNonces.php` — The name and signature of the console command. (~225 tok)
- `SendAcceptanceReminder.php` — The name and signature of the console command. (~1059 tok)
- `SendCurrentInventoryToUsers.php` — The name and signature of the console command. (~350 tok)
- `SendExpectedCheckinAlerts.php` — The console command name. (~1011 tok)
- `SendExpirationAlerts.php` — The name and signature of the console command. (~1456 tok)
- `SendInventoryAlerts.php` — The name and signature of the console command. (~531 tok)
- `SendUpcomingAuditReport.php` — The name and signature of the console command. (~1032 tok)
- `SyncAssetCounters.php` — The name and signature of the console command. (~592 tok)
- `SyncAssetLocations.php` — The name and signature of the console command. (~1717 tok)
- `SystemBackup.php` — The console command name. (~329 tok)
- `TestLocationsFMCS.php` — The name and signature of the console command. (~428 tok)
- `ToggleCustomfieldEncryption.php` — The name and signature of the console command. (~591 tok)
- `ValidateAssets.php` — The name and signature of the console command. (~762 tok)
- `Version.php` — The name and signature of the console command. (~1104 tok)

## app/Enums/

- `ActionType.php` — Declares ActionType (~262 tok)

## app/Events/

- `CheckoutableCheckedIn.php` — Create a new event instance. (~254 tok)
- `CheckoutableCheckedOut.php` — Create a new event instance. (~250 tok)
- `CheckoutablesCheckedOutInBulk.php` — Declares CheckoutablesCheckedOutInBulk (~143 tok)
- `CheckoutAccepted.php` — Create a new event instance. (~111 tok)
- `CheckoutDeclined.php` — Create a new event instance. (~111 tok)
- `Event.php` — Event: Event (~17 tok)
- `UserMerged.php` — Create a new event instance. (~128 tok)

## app/Exceptions/

- `AssetNotRequestable.php` — Declares AssetNotRequestable (~26 tok)
- `CheckoutNotAllowed.php` — CheckoutNotAllowed: __toString (~120 tok)
- `Handler.php` — A list of the exception types that are not reported. (~2591 tok)
- `ItemStillHasAccessories.php` — Declares ItemStillHasAccessories (~28 tok)
- `ItemStillHasAssetModels.php` — Declares ItemStillHasAssetModels (~28 tok)
- `ItemStillHasAssets.php` — Declares ItemStillHasAssets (~25 tok)
- `ItemStillHasChildren.php` — Declares ItemStillHasChildren (~66 tok)
- `ItemStillHasComponents.php` — Declares ItemStillHasComponents (~28 tok)
- `ItemStillHasConsumables.php` — Declares ItemStillHasConsumables (~28 tok)
- `ItemStillHasLicenses.php` — Declares ItemStillHasLicenses (~27 tok)
- `ItemStillHasMaintenances.php` — Declares ItemStillHasMaintenances (~28 tok)
- `UserDoestExistException.php` — Declares UserDoestExistException (~27 tok)

## app/Helpers/

- `Helper.php` — This is only used for reversing the migration that updates the locale to the 5-6 letter codes from two (~16659 tok)
- `IconHelper.php` — IconHelper: icon (~2740 tok)
- `StorageHelper.php` — This determines the file types that should be allowed inline and checks their fileinfo extension (~968 tok)

## app/Http/

- `Kernel.php` — The application's global HTTP middleware stack. (~975 tok)

## app/Http/Controllers/

- `ActionlogController.php` — displaySig, getStoredEula (~761 tok)
- `AssetModelsController.php` — This class controls all actions related to asset models for (~4767 tok)
- `BulkAssetModelsController.php` — Returns a view that allows the user to bulk edit model attrbutes (~1424 tok)
- `BulkCategoriesController.php` — destroy (~797 tok)
- `BulkManufacturersController.php` — destroy (~757 tok)
- `BulkSuppliersController.php` — destroy (~869 tok)
- `CategoriesController.php` — This class controls all actions related to Categories for (~1940 tok)
- `CompaniesController.php` — This controller handles all actions related to Companies for (~1267 tok)
- `Controller.php` — Controller: Controller (~1007 tok)
- `CustomFieldsController.php` — This controller handles all actions related to Custom Asset Fields for (~2728 tok)
- `CustomFieldsetsController.php` — This controller handles all actions related to Custom Asset Fields for (~2232 tok)
- `DashboardController.php` — This controller handles all actions related to the Admin Dashboard (~533 tok)
- `DepartmentsController.php` — Returns a view that invokes the ajax tables which actually contains (~1594 tok)
- `DepreciationsController.php` — This controller handles all actions related to Depreciations for (~1852 tok)
- `GoogleAuthController.php` — We need this constructor so that we override the socialite expected config variables, (~726 tok)
- `GroupsController.php` — This controller handles all actions related to User Groups for (~2134 tok)
- `HealthController.php` — This controller provide the health route  for (~387 tok)
- `LabelsController.php` — Returns the Label view with test data (~1036 tok)
- `LocationsController.php` — This controller handles all actions related to Locations for (~5142 tok)
- `MaintenancesController.php` — This controller handles all actions related to Asset Maintenance for (~2799 tok)
- `MaintenanceTypesController.php` — index, create, store, edit, update + 1 more (~583 tok)
- `ManufacturersController.php` — This controller handles all actions related to Manufacturers for (~2494 tok)
- `ModalController.php` — Load the modal views after confirming they are in the allowed_types array. (~420 tok)
- `NotesController.php` — store (~401 tok)
- `ProfileController.php` — This controller handles all actions related to User Profiles for (~2655 tok)
- `QrCodeController.php` — show (~543 tok)
- `ReportsController.php` — This controller handles all actions related to Reports for (~16655 tok)
- `ReportTemplatesController.php` — store, show, edit, update, destroy (~959 tok)
- `SettingsController.php` — This controller handles all actions related to Settings for (~14223 tok)
- `SetupController.php` — This controller handles all actions related to Settings for (~2709 tok)
- `StatuslabelsController.php` — This controller handles all actions related to Status Labels for (~1504 tok)
- `StorageProxyController.php` — Proxy files from the "public" storage disk through the application. (~813 tok)
- `SuppliersController.php` — This controller handles all actions related to Suppliers for (~1820 tok)
- `UploadedFilesController.php` — This controller provide the health route  for (~2006 tok)
- `ViewAssetsController.php` — This controller handles all actions related to the ability for users (~2790 tok)

## app/Http/Controllers/Accessories/

- `AccessoriesController.php` — This controller handles all actions related to Accessories for (~2397 tok)
- `AccessoryCheckinController.php` — Check the accessory back into inventory (~997 tok)
- `AccessoryCheckoutController.php` — Return the form to checkout an Accessory to a user. (~1580 tok)

## app/Http/Controllers/Account/

- `AcceptanceController.php` — Show a listing of pending checkout acceptances for the current user (~4722 tok)

## app/Http/Controllers/Api/

- `AccessoriesController.php` — Display a listing of the resource. (~4223 tok)
- `AssetModelsController.php` — This class controls all actions related to asset models for (~3432 tok)
- `AssetsController.php` — This class controls all actions related to assets for (~17722 tok)
- `CategoriesController.php` — Display a listing of the resource. (~2750 tok)
- `CheckoutRequest.php` — store, destroy (~511 tok)
- `CompaniesController.php` — Display a listing of the resource. (~2150 tok)
- `ComponentsController.php` — Display a listing of the resource. (~4426 tok)
- `ConsumablesController.php` — Display a listing of the resource. (~4011 tok)
- `CustomFieldsController.php` — Reorder the custom fields within a fieldset (~1746 tok)
- `CustomFieldsetsController.php` — This controller handles all actions related to Custom Asset Fieldsets for (~1491 tok)
- `DepartmentsController.php` — Display a listing of the resource. (~2173 tok)
- `DepreciationsController.php` — Display a listing of the resource. (~1388 tok)
- `GroupsController.php` — Display a listing of the resource. (~1577 tok)
- `ImportController.php` — Display a listing of the resource. (~3484 tok)
- `LabelsController.php` — Returns JSON listing of all labels. (~550 tok)
- `LicensesController.php` — Display a listing of the resource. (~4994 tok)
- `LicenseSeatsController.php` — Display a listing of the resource. (~2814 tok)
- `LocationsController.php` — Display a listing of the resource. (~5456 tok)
- `MaintenancesController.php` — This controller handles all actions related to Asset Maintenance for (~4662 tok)
- `MaintenanceTypesController.php` — index, show, store, update, destroy (~874 tok)
- `ManufacturersController.php` — Display a listing of the resource. (~2897 tok)
- `NotesController.php` — This class controls all API actions related to notes for (~984 tok)
- `PredefinedKitsController.php` — class PredefinedKitsController extends Controller, Store a newly created resource in storage., Display the specified resource., Update the specifie... (~3964 tok)
- `ProfileController.php` — The token repository implementation. (~1730 tok)
- `ReportsController.php` — Returns Activity Report JSON. (~3384 tok)
- `SettingsController.php` — Test the email configuration (~3571 tok)
- `StatuslabelsController.php` — Display a listing of the resource. (~3366 tok)
- `SuppliersController.php` — Display a listing of the resource. (~2769 tok)
- `UploadedFilesController.php` — List files for an object (~2399 tok)
- `UsersController.php` — Display a listing of the resource. (~9717 tok)

## app/Http/Controllers/Assets/

- `AssetCheckinController.php` — Returns a view that presents a form to check an asset back into inventory. (~2484 tok)
- `AssetCheckoutController.php` — Returns a view that presents a form to check an asset out to a (~2021 tok)
- `AssetsController.php` — This class controls all actions related to assets for (~13231 tok)
- `BulkAssetsController.php` — Display the bulk edit page. (~10811 tok)

## app/Http/Controllers/Auth/

- `ForgotPasswordController.php` — Create a new controller instance. (~1103 tok)
- `LoginController.php` — This controller handles authentication for the user, including local (~4961 tok)
- `RegisterController.php` — showRegistrationForm, register (~104 tok)
- `ResetPasswordController.php` — Where to redirect users after resetting their password. (~1167 tok)
- `SamlController.php` — This controller provides the endpoint for SAML communication and metadata. (~1132 tok)

## app/Http/Controllers/Components/

- `ComponentCheckinController.php` — Returns a view that allows the checkin of a component from an asset. (~1197 tok)
- `ComponentCheckoutController.php` — Returns a view that allows the checkout of a component to an asset. (~1403 tok)
- `ComponentsController.php` — This class controls all actions related to Components for (~2258 tok)

## app/Http/Controllers/Consumables/

- `ConsumableCheckoutController.php` — Return a view to checkout a consumable to a user. (~1812 tok)
- `ConsumablesController.php` — This controller handles all actions related to Consumables for (~2378 tok)

## app/Http/Controllers/Kits/

- `CheckoutKitController.php` — This controller handles all access kits management: (~620 tok)
- `PredefinedKitsController.php` — This controller handles all access kits management: (~4170 tok)

## app/Http/Controllers/Licenses/

- `BulkLicensesController.php` — destroy (~654 tok)
- `LicenseCheckinController.php` — Makes the form view to check a license seat back into inventory. (~2038 tok)
- `LicenseCheckoutController.php` — Provides the form view for checking out a license to a user. (~3581 tok)
- `LicensesController.php` — This controller handles all actions related to Licenses for (~4555 tok)

## app/Http/Controllers/Users/

- `BulkUsersController.php` — Returns a view that confirms the user's a bulk action will be applied to. (~6456 tok)
- `LDAPImportController.php` — Return view for LDAP import. (~619 tok)
- `UsersController.php` — This controller handles all actions related to Users for (~8492 tok)

## app/Http/Middleware/

- `CheckColorSettings.php` — The Guard implementation. (~465 tok)
- `CheckForDebug.php` — Handle an incoming request. (~175 tok)
- `CheckForSetup.php` — Skip this middleware for the debugbar and health check (~229 tok)
- `CheckForTwoFactor.php` — Routes to ignore for Two Factor Auth (~710 tok)
- `CheckLocale.php` — Handle the locale for the user, default to settings otherwise. (~416 tok)
- `CheckPermissions.php` — Handle the ACLs for permissions. (~187 tok)
- `CheckUserIsActivated.php` — The Guard implementation. (~282 tok)
- `EncryptCookies.php` — The names of the cookies that should not be encrypted. (~116 tok)
- `EnforceApiUserAgent.php` — The route-level parameter that lets a route opt out of blank-User-Agent (~974 tok)
- `LogAuthedUserHeader.php` — Handle an incoming request. (~190 tok)
- `NoSessionStore.php` — Handle an incoming request. (~143 tok)
- `PreventBackHistory.php` — Handle an incoming request. (~178 tok)
- `PreventRequestsDuringMaintenance.php` — The URIs that should be reachable while maintenance mode is enabled. (~95 tok)
- `RedirectIfAuthenticated.php` — Handle an incoming request. (~137 tok)
- `SecurityHeaders.php` — Handle an incoming request. (~1184 tok)
- `SetAPIResponseHeaders.php` — Add the rate limit headers to the response. (~704 tok)
- `SetPaginationDefaults.php` — SetPaginationDefaults: handle (~250 tok)
- `TrimStrings.php` — The names of the attributes that should not be trimmed. (~99 tok)
- `TrustHosts.php` — Get the host patterns that should be trusted. (~95 tok)
- `TrustProxies.php` — The trusted proxies for this application. (~174 tok)
- `VerifyCsrfToken.php` — The URIs that should be excluded from CSRF verification. (~85 tok)

## app/Http/Requests/

- `AccessoryCheckoutRequest.php` — Determine if the user is authorized to make this request. (~619 tok)
- `AssetCheckinRequest.php` — Determine if the user is authorized to make this request. (~224 tok)
- `AssetCheckoutRequest.php` — Determine if the user is authorized to make this request. (~372 tok)
- `CreateMultipleAssetRequest.php` — Determine if the user is authorized to make this request. (~775 tok)
- `CustomAssetReportRequest.php` — Determine if the user is authorized to make this request. (~511 tok)
- `CustomFieldRequest.php` — Determine if the user is authorized to make this request. (~355 tok)
- `DeleteUserRequest.php` — Determine if the user is authorized to make this request. (~995 tok)
- `FilterRequest.php` — Determine if the user is authorized to make this request. (~463 tok)
- `ImageUploadRequest.php` — Determine if the user is authorized to make this request. (~1556 tok)
- `ItemImportRequest.php` — Determine if the user is authorized to make this request. (~707 tok)
- `LicenseCheckoutRequest.php` — Determine if the user is authorized to make this request. (~155 tok)
- `Request.php` — Form validation: Request (~241 tok)
- `SaveUserRequest.php` — Determine if the user is authorized to make this request. (~643 tok)
- `SettingsLdapRequest.php` — Determine if the user is authorized to make this request. (~436 tok)
- `SettingsSamlRequest.php` — This handles validating and cleaning SAML settings provided by the user. (~1734 tok)
- `SetupUserRequest.php` — Determine if the user is authorized to make this request. (~247 tok)
- `StoreAccessoryRequest.php` — Determine if the user is authorized to make this request. (~458 tok)
- `StoreAssetModelRequest.php` — Determine if the user is authorized to make this request. (~377 tok)
- `StoreAssetRequest.php` — Determine if the user is authorized to make this request. (~782 tok)
- `StoreComponentRequest.php` — StoreComponentRequest: authorize, prepareForValidation, response (~207 tok)
- `StoreConsumableRequest.php` — Determine if the user is authorized to make this request. (~459 tok)
- `StoreDepartmentRequest.php` — Determine if the user is authorized to make this request. (~191 tok)
- `StoreLabelSettings.php` — Determine if the user is authorized to make this request. (~488 tok)
- `StoreLdapSettings.php` — Determine if the user is authorized to make this request. (~314 tok)
- `StoreLocalizationSettings.php` — Determine if the user is authorized to make this request. (~188 tok)
- `StoreNotificationSettings.php` — Determine if the user is authorized to make this request. (~304 tok)
- `StoreSecuritySettings.php` — Determine if the user is authorized to make this request. (~279 tok)
- `UpdateAssetRequest.php` — Determine if the user is authorized to make this request. (~700 tok)
- `UpdateComponentRequest.php` — UpdateComponentRequest: authorize, prepareForValidation, rules, response (~256 tok)
- `UploadFileRequest.php` — Determine if the user is authorized to make this request. (~716 tok)

## app/Http/Requests/Traits/

- `MayContainCustomFields.php` — Trait: MayContainCustomFields (~564 tok)

## app/Http/Traits/

- `CheckInOutTrait.php` — Find target for checkout (~474 tok)
- `ConvertsBase64ToFiles.php` — Pulls the Base64 contents for each file key and creates (~711 tok)
- `MigratesLegacyAssetLocations.php` — This is just meant to correct legacy issues where some user data would have 0 (~308 tok)
- `TwoColumnUniqueUndeletedTrait.php` — Prepare a unique_ids rule, adding a model identifier if required. (~216 tok)
- `UniqueUndeletedTrait.php` — Prepare a unique_ids rule, adding a model identifier if required. (~152 tok)

## app/Http/Transformers/

- `AccessoriesTransformer.php` — AccessoriesTransformer: transformAccessories, transformAccessory, transformCheckedoutAccessory, transformAssignedTo (~1704 tok)
- `ActionlogsTransformer.php` — This takes the ids of the changed attributes and returns the names instead for the history view of an Asset (~5151 tok)
- `AssetModelsTransformer.php` — AssetModelsTransformer: transformAssetModels, transformAssetModel, transformAssetModelFiles, transformAssetModelFile + 1 more (~1697 tok)
- `AssetsTransformer.php` — AssetsTransformer: transformAssets, transformAsset, transformAssetsDatatable, transformAssignedTo (~5568 tok)
- `CategoriesTransformer.php` — CategoriesTransformer: transformCategories, transformCategory (~961 tok)
- `CompaniesTransformer.php` — CompaniesTransformer: transformCompanies, transformCompany (~666 tok)
- `ComponentsAssetsTransformer.php` — ComponentsAssetsTransformer: transformAssets, transformAsset, transformAssetsDatatable (~433 tok)
- `ComponentsTransformer.php` — ComponentsTransformer: transformComponents, transformComponent, transformCheckedoutComponents, transformAssignedTo (~1398 tok)
- `ConsumablesTransformer.php` — ConsumablesTransformer: transformConsumables, transformConsumable, transformCheckedoutConsumables (~1244 tok)
- `CustomFieldsetsTransformer.php` — CustomFieldsetsTransformer: transformCustomFieldsets, transformCustomFieldset (~374 tok)
- `CustomFieldsTransformer.php` — Builds up an array of formatted custom fields (~798 tok)
- `DatatablesTransformer.php` — Transform data for bootstrap tables and API responses for lists of things (~372 tok)
- `DepartmentsTransformer.php` — DepartmentsTransformer: transformDepartments, transformDepartment (~767 tok)
- `DepreciationReportTransformer.php` — This tranformer looks like it's extraneous, since we return as much or more (~1419 tok)
- `DepreciationsTransformer.php` — DepreciationsTransformer: transformDepreciations, transformDepreciation (~526 tok)
- `GroupsTransformer.php` — GroupsTransformer: transformGroups, transformGroup (~393 tok)
- `ImportsTransformer.php` — ImportsTransformer: transformImports, transformImport, transformImportsDatatable (~281 tok)
- `LabelsTransformer.php` — LabelsTransformer: transformLabels, transformLabel (~634 tok)
- `LicenseSeatsTransformer.php` — LicenseSeatsTransformer: transformLicenseSeats, transformLicenseSeat (~917 tok)
- `LicensesTransformer.php` — LicensesTransformer: transformLicenses, transformLicense, transformAssetsDatatable (~1307 tok)
- `LocationsTransformer.php` — This gives a compact view of the location data without any additional relational queries, (~2110 tok)
- `LoginAttemptsTransformer.php` — LoginAttemptsTransformer: transformLoginAttempts, transformLoginAttempt (~276 tok)
- `MaintenancesTransformer.php` — MaintenancesTransformer: transformMaintenances, transformMaintenance, transformMaintenancesFlat, transformMaintenanceForReport (~2874 tok)
- `MaintenanceTypesTransformer.php` — MaintenanceTypesTransformer: transformMaintenanceTypes, transformMaintenanceType (~323 tok)
- `ManufacturersTransformer.php` — ManufacturersTransformer: transformManufacturers, transformManufacturer (~785 tok)
- `PieChartTransformer.php` — Class PieChartTransformer (~350 tok)
- `PredefinedKitsTransformer.php` — transforms collection of models to array with simple typres (~780 tok)
- `ProfileTransformer.php` — ProfileTransformer: transformFiles, transformFile (~363 tok)
- `SelectlistTransformer.php` — Class SelectlistTransformer (~402 tok)
- `StatuslabelsTransformer.php` — StatuslabelsTransformer: transformStatuslabels, transformStatuslabel (~498 tok)
- `SuppliersTransformer.php` — SuppliersTransformer: transformSuppliers, transformSupplier (~769 tok)
- `UploadedFilesTransformer.php` — UploadedFilesTransformer: transformFiles, transformFile (~675 tok)
- `UsersTransformer.php` — This gives a compact view of the user data without any additional relational queries, (~2162 tok)

## app/Importer/

- `AccessoryImporter.php` — Create an accessory if a duplicate does not exist (~511 tok)
- `AssetImporter.php` — Create the asset if it does not exist. (~2705 tok)
- `AssetModelImporter.php` — When we are importing users via an Asset/etc import, we use createOrFetchUser() in (~1927 tok)
- `CategoryImporter.php` — When we are importing users via an Asset/etc import, we use createOrFetchUser() in (~889 tok)
- `ComponentImporter.php` — Create a component if a duplicate does not exist (~791 tok)
- `ConsumableImporter.php` — Create a consumable if a duplicate does not exist (~458 tok)
- `Importer.php` — Id of User performing import (~5088 tok)
- `ItemImporter.php` — This section adds the most common fields into the $item array so we don't have to manually add them to (~4894 tok)
- `LicenseImporter.php` — Create the license if it does not exist. (~1581 tok)
- `LocationImporter.php` — When we are importing users via an Asset/etc import, we use createOrFetchUser() in (~1093 tok)
- `ManufacturerImporter.php` — When we are importing users via an Asset/etc import, we use createOrFetchUser() in (~927 tok)
- `SupplierImporter.php` — When we are importing users via an Asset/etc import, we use createOrFetchUser() in (~947 tok)
- `UserImporter.php` — This is ONLY used for the User Import. When we are importing users (~3494 tok)

## app/Jobs/

- `Job.php` — Trait: included (~143 tok)

## app/Listeners/

- `.gitkeep` (~0 tok)
- `CheckoutableListener.php` — Register the listeners for the subscriber. (~5927 tok)
- `CheckoutablesCheckedOutInBulkListener.php` — Event listener: CheckoutablesCheckedOutInBulkListener (~1164 tok)
- `LogFailedLogin.php` — Create the event listener. (~247 tok)
- `LogListener.php` — These onBlah methods are used by the subscribe() method further down in this file. (~1453 tok)
- `LogSuccessfulLogin.php` — Create the event listener. (~245 tok)

## app/Livewire/

- `AdminPersonalAccessTokens.php` — Livewire component for the admin-facing User API Tokens (Personal Access Tokens) table. (~387 tok)
- `CategoryEditForm.php` — CategoryEditForm: render, emailWillBeSendDueToEula, emailMessage, eulaTextDisabled + 1 more (~312 tok)
- `CustomFieldSetDefaultValuesForModel.php` — Livewire property binding plays nicer with arrays when it knows (~976 tok)
- `Importer.php` — This is used in resources/views/livewire.importer.blade.php, and we kinda shouldn't need to check for (~7685 tok)
- `LocationScopeCheck.php` — LocationScopeCheck: check_locations, mount, render (~152 tok)
- `OauthClients.php` — OauthClients: mount, showOauthClients, showAuthorizedApplications, render + 5 more (~1591 tok)
- `PersonalAccessTokens.php` — PersonalAccessTokens: autoFocusModalEvent, render, rules, createToken + 1 more (~331 tok)
- `SlackSettingsForm.php` — SlackSettingsForm: mount, updated, updatedWebhookSelected, updatedwebhookEndpoint + 6 more (~3286 tok)

## app/Mail/

- `BaseMailable.php` — Mail: BaseMailable (~104 tok)
- `BulkAssetCheckoutMail.php` — Mail: BulkAssetCheckoutMail (~1247 tok)
- `BulkDeleteReportMail.php` — BulkDeleteReportMail: envelope, content, attachments (~436 tok)
- `CheckinAccessoryMail.php` — Create a new message instance. (~446 tok)
- `CheckinAssetMail.php` — Create a new message instance. (~792 tok)
- `CheckinComponentMail.php` — Create a new message instance. (~444 tok)
- `CheckinLicenseMail.php` — Create a new message instance. (~462 tok)
- `CheckoutAcceptanceResponseMail.php` — Create a new message instance. (~526 tok)
- `CheckoutAccessoryMail.php` — Create a new message instance. (~1084 tok)
- `CheckoutAssetMail.php` — Create a new message instance. (~1482 tok)
- `CheckoutComponentMail.php` — Create a new message instance. (~571 tok)
- `CheckoutConsumableMail.php` — Create a new message instance. (~889 tok)
- `CheckoutLicenseMail.php` — Create a new message instance. (~969 tok)
- `ExpiringAssetsMail.php` — Create a new message instance. (~367 tok)
- `ExpiringLicenseMail.php` — Create a new message instance. (~370 tok)
- `SendUpcomingAuditMail.php` — Create a new message instance. (~408 tok)
- `UnacceptedAssetReminderMail.php` — Create a new message instance. (~427 tok)

## app/Models/

- `Accessory.php` — Model for Accessories. (~3762 tok)
- `AccessoryCheckout.php` — Model for Accessories. (~1415 tok)
- `Actionlog.php` — Model for the Actionlog (the table that keeps a historical log of (~5021 tok)
- `Asset.php` — Model for Assets. (~18984 tok)
- `AssetModel.php` — Model for Asset Models. Asset Models contain higher level (~2743 tok)
- `Category.php` — Model for Categories. Categories are a higher-level group (~2438 tok)
- `Checkoutable.php` — Model: Checkoutable (~917 tok)
- `CheckoutAcceptance.php` — Get the mail recipient from the config (~2795 tok)
- `CheckoutRequest.php` — Model — table: checkout_requests, 1 fields, 2 rels (~323 tok)
- `Company.php` — Model for Companies. (~4990 tok)
- `CompanyableChildScope.php` — Handle query scoping for full company support. (~220 tok)
- `CompanyableScope.php` — Handle query scoping for full company support. (~198 tok)
- `Component.php` — Model for Components. (~3832 tok)
- `ComponentAssignment.php` — Model for Accessories. (~547 tok)
- `Consumable.php` — Category validation rules (~3553 tok)
- `ConsumableAssignment.php` — Model — table: consumables_users, 3 rels (~185 tok)
- `CustomField.php` — Custom field predfined formats (~3689 tok)
- `CustomFieldset.php` — Validation rules (~2050 tok)
- `Department.php` — Whether the model should inject it's identifier to the unique (~1460 tok)
- `Depreciable.php` — Depreciation Relation, and associated helper methods (~1948 tok)
- `Depreciation.php` — Whether the model should inject it's identifier to the unique (~965 tok)
- `Group.php` — Whether the model should inject it's identifier to the unique (~947 tok)
- `ICompanyableChild.php` — Model: (~29 tok)
- `Import.php` — Establishes the license -> admin user relationship (~178 tok)
- `Ldap.php` — ******************************************** (~6001 tok)
- `License.php` — The attributes that are mass assignable. (~7319 tok)
- `LicenseSeat.php` — The attributes that are mass assignable. (~1584 tok)
- `Location.php` — Whether the model should inject its identifier to the unique (~3430 tok)
- `Maintenance.php` — Model for Asset Maintenances. (~1828 tok)
- `MaintenanceType.php` — Model — table: maintenance_types, 1 fields, 1 rels (~263 tok)
- `Manufacturer.php` — Whether the model should inject it's identifier to the unique (~1011 tok)
- `PredefinedKit.php` — Model for predefined kits. (~1586 tok)
- `ReportTemplate.php` — Establishes the report template -> creator relationship. (~1636 tok)
- `SamlNonce.php` — Model — 2 fields (~72 tok)
- `SCIMUser.php` — Model — table: users, 2 rels (~231 tok)
- `Setting.php` — Settings model. (~3371 tok)
- `SnipeModel.php` — Applies offset (from request) and limit to query. (~2158 tok)
- `SnipeSCIMConfig.php` — Model: SnipeRootComplex (~7996 tok)
- `Statuslabel.php` — The attributes that should be included when searching the model. (~1387 tok)
- `Supplier.php` — Whether the model should inject it's identifier to the unique (~1867 tok)
- `User.php` — Transient (non-persisted) ID of the Actionlog entry written by UserObserver::updating() (~14271 tok)

## app/Models/Builders/

- `MaintenanceQueryBuilder.php` — MaintenanceQueryBuilder: active, completed, dueForCompletion, overdueForCompletion + 12 more (~1207 tok)

## app/Models/Labels/

- `DefaultLabel.php` — DefaultLabel: getUnit, getPageWidth, getPageHeight, getPageMarginTop + 22 more (~1931 tok)
- `Field.php` — Field: getOptions, setOptions, toArray, makeArray + 2 more (~364 tok)
- `FieldOption.php` — FieldOption: getLabel, getDataSource, getValue, toArray + 4 more (~716 tok)
- `Label.php` — Model for Labels. (~6292 tok)
- `RectangleSheet.php` — Returns the number of columns per sheet (~322 tok)
- `Sheet.php` — Returns the page width in getUnit() units (~1558 tok)

## app/Models/Labels/Sheets/Avery/

- `_3490_A.php` — _3490_A: getUnit, getLabelMarginTop, getLabelMarginBottom, getLabelMarginLeft + 9 more (~799 tok)
- `_3490.php` — _3490: getPageWidth, getPageHeight, getPageMarginTop, getPageMarginBottom + 9 more (~742 tok)
- `_5267_A.php` — _5267_A: getUnit, getLabelMarginTop, getLabelMarginBottom, getLabelMarginLeft + 9 more (~631 tok)
- `_5267.php` — _5267: getPageWidth, getPageHeight, getPageMarginTop, getPageMarginBottom + 9 more (~744 tok)
- `_5520_A.php` — _5520_A: getUnit, getLabelMarginTop, getLabelMarginBottom, getLabelMarginLeft + 9 more (~799 tok)
- `_5520_B.php` — _5520_B: getUnit, getLabelMarginTop, getLabelMarginBottom, getLabelMarginLeft + 9 more (~790 tok)
- `_5520.php` — _5520: getPageWidth, getPageHeight, getPageMarginTop, getPageMarginBottom + 9 more (~744 tok)
- `L4736_A.php` — L4736_A: getUnit, getLabelMarginTop, getLabelMarginBottom, getLabelMarginLeft + 9 more (~943 tok)
- `L4736.php` — L4736: getPageWidth, getPageHeight, getPageMarginTop, getPageMarginBottom + 9 more (~742 tok)
- `L6009_A.php` — L6009_A: getUnit, getLabelMarginTop, getLabelMarginBottom, getLabelMarginLeft + 9 more (~943 tok)
- `L6009.php` — L6009: getPageWidth, getPageHeight, getPageMarginTop, getPageMarginBottom + 9 more (~709 tok)
- `L7162_A.php` — L7162_A: getUnit, getLabelMarginTop, getLabelMarginBottom, getLabelMarginLeft + 9 more (~936 tok)
- `L7162_B.php` — L7162_B: getUnit, getLabelMarginTop, getLabelMarginBottom, getLabelMarginLeft + 9 more (~974 tok)
- `L7162.php` — L7162: getPageWidth, getPageHeight, getPageMarginTop, getPageMarginBottom + 9 more (~743 tok)
- `L7163_A.php` — L7163_A: getUnit, getLabelMarginTop, getLabelMarginBottom, getLabelMarginLeft + 9 more (~1294 tok)
- `L7163.php` — L7163: getPageWidth, getPageHeight, getPageMarginTop, getPageMarginBottom + 9 more (~743 tok)

## app/Models/Labels/Tapes/Brother/

- `TZe_12mm_A.php` — TZe_12mm_A: getUnit, getWidth, getSupportAssetTag, getSupport1DBarcode + 6 more (~532 tok)
- `TZe_12mm.php` — TZe_12mm: getHeight, getMarginTop, getMarginBottom, getMarginLeft + 1 more (~239 tok)
- `TZe_18mm_A.php` — TZe_18mm_A: getUnit, getWidth, getSupportAssetTag, getSupport1DBarcode + 6 more (~532 tok)
- `TZe_18mm.php` — TZe_18mm: getHeight, getMarginTop, getMarginBottom, getMarginLeft + 1 more (~239 tok)
- `TZe_241.php` — TZe_241: getUnit, getWidth, getSupportAssetTag, getSupport1DBarcode + 6 more (~615 tok)
- `TZe_24mm_A.php` — TZe_24mm_A: getUnit, getWidth, getSupportAssetTag, getSupport1DBarcode + 6 more (~850 tok)
- `TZe_24mm_B.php` — TZe_24mm_B: getUnit, getWidth, getSupportAssetTag, getSupport1DBarcode + 6 more (~1022 tok)
- `TZe_24mm_C.php` — TZe_24mm_C: getUnit, getWidth, getSupportAssetTag, getSupport1DBarcode + 6 more (~750 tok)
- `TZe_24mm_D.php` — TZe_24mm_D: getUnit, getWidth, getSupportAssetTag, getSupport1DBarcode + 6 more (~1262 tok)
- `TZe_24mm_E.php` — TZe_24mm_E: getUnit, getWidth, getHeight, getSupportAssetTag + 7 more (~1206 tok)
- `TZe_24mm.php` — TZe_24mm: getHeight, getMarginTop, getMarginBottom, getMarginLeft + 1 more (~239 tok)
- `TZe_62mm_Landscape_A.php` — TZe_62mm_Landscape_A: getUnit, getHeight, getSupportAssetTag, getSupport1DBarcode + 6 more (~1043 tok)
- `TZe_62mm_Landscape.php` — TZe_62mm_Landscape: getWidth, getMarginTop, getMarginBottom, getMarginLeft + 2 more (~279 tok)

## app/Models/Labels/Tapes/Dymo/

- `LabelWriter_11354.php` — LabelWriter_11354: getUnit, getWidth, getHeight, getSupportAssetTag + 7 more (~1444 tok)
- `LabelWriter_1933081.php` — LabelWriter_1933081: getUnit, getWidth, getHeight, getSupportAssetTag + 7 more (~1366 tok)
- `LabelWriter_2112283.php` — LabelWriter_2112283: getUnit, getWidth, getHeight, getSupportAssetTag + 7 more (~1366 tok)
- `LabelWriter_30252.php` — LabelWriter_30252: getUnit, getWidth, getSupportAssetTag, getSupport1DBarcode + 6 more (~862 tok)
- `LabelWriter.php` — LabelWriter: getHeight, getMarginTop, getMarginBottom, getMarginLeft + 1 more (~238 tok)

## app/Models/Labels/Tapes/Generic/

- `Continuous_53mm_A.php` — Continuous_53mm_A: getUnit, getSupportAssetTag, getSupport1DBarcode, getSupport2DBarcode + 5 more (~717 tok)
- `Continuous_53mm.php` — Constructor for 53mm tape (~1011 tok)
- `Continuous_Landscape_0_59in_A.php` — Continuous_Landscape_0_59in_A: getUnit, getSupportAssetTag, getSupport1DBarcode, getSupport2DBarcode + 5 more (~1866 tok)
- `Continuous_Landscape_0_59in.php` — Continuous_Landscape_0_59in: getBarcodeRatio, Calculate the required length for the content (~1921 tok)
- `GenericTape.php` — Constructor for generic tape (~950 tok)
- `Tape_53mm_A.php` — Tape_53mm_A: getUnit, getSupportAssetTag, getSupport1DBarcode, getSupport2DBarcode + 5 more (~739 tok)
- `Tape_53mm.php` — Constructor for 53mm tape (~251 tok)

## app/Models/Recipients/

- `AdminRecipient.php` — AdminRecipient: getEmail (~94 tok)
- `AlertRecipient.php` — Declares AlertRecipient (~48 tok)
- `Recipient.php` — Declares Recipient (~42 tok)

## app/Models/Traits/

- `Acceptable.php` — This trait allows models to have a callback after their checkout gets accepted or declined. (~216 tok)
- `CompanyableChildTrait.php` — Boot the companyable trait for a model. (~87 tok)
- `CompanyableTrait.php` — This trait is used to scope models to the current company. To use this scope on companyable models, (~654 tok)
- `HasUploads.php` — Trait: HasUploads (~269 tok)
- `Loggable.php` — Trait: Loggable (~4938 tok)
- `Requestable.php` — $asset->requests (~334 tok)
- `Searchable.php` — This trait allows for cleaner searching of models, (~13321 tok)

## app/Notifications/

- `AcceptanceItemAcceptedNotification.php` — Create a new notification instance. (~771 tok)
- `AcceptanceItemAcceptedToUserNotification.php` — Create a new notification instance. (~798 tok)
- `AcceptanceItemDeclinedNotification.php` — Create a new notification instance. (~751 tok)
- `AuditNotification.php` — Create a new notification instance. (~1522 tok)
- `CheckinAccessoryNotification.php` — Create a new notification instance. (~1553 tok)
- `CheckinAssetNotification.php` — Create a new notification instance. (~1598 tok)
- `CheckinComponentNotification.php` — Create a new notification instance. (~1593 tok)
- `CheckinLicenseSeatNotification.php` — Create a new notification instance. (~1624 tok)
- `CheckoutAccessoryNotification.php` — Create a new notification instance. (~2190 tok)
- `CheckoutAssetNotification.php` — Create a new notification instance. (~1644 tok)
- `CheckoutComponentNotification.php` — Create a new notification instance. (~1568 tok)
- `CheckoutConsumableNotification.php` — Create a new notification instance. (~1564 tok)
- `CheckoutLicenseSeatNotification.php` — Create a new notification instance. (~1535 tok)
- `CurrentInventory.php` — Create a new notification instance. (~377 tok)
- `ExpectedCheckinAdminNotification.php` — Create a new notification instance. (~346 tok)
- `ExpectedCheckinNotification.php` — Create a new notification instance. (~540 tok)
- `ExpiringAssetsNotification.php` — Create a new notification instance. (~378 tok)
- `ExpiringLicenseNotification.php` — Create a new notification instance. (~390 tok)
- `FirstAdminNotification.php` — Create a new notification instance. (~408 tok)
- `InventoryAlert.php` — Create a new notification instance. (~382 tok)
- `MailTest.php` — Create a new notification instance. (~284 tok)
- `RequestAssetCancelation.php` — Create a new notification instance. (~1111 tok)
- `RequestAssetNotification.php` — Create a new notification instance. (~1054 tok)
- `SendUpcomingAuditNotification.php` — Create a new notification instance. (~384 tok)
- `WelcomeNotification.php` — Create a new notification instance. (~392 tok)

## app/Observers/

- `AccessoryObserver.php` — Listen to the User created event. (~558 tok)
- `AssetModelObserver.php` — Listen to the User created event. (~628 tok)
- `AssetObserver.php` — Listen to the Asset updating event. This fires automatically every time an existing asset is saved. (~2096 tok)
- `ComponentObserver.php` — Listen to the User created event. (~625 tok)
- `ConsumableObserver.php` — Listen to the User created event. (~731 tok)
- `LicenseObserver.php` — Listen to the User created event. (~546 tok)
- `LocationObserver.php` — Listen to the User created event. (~634 tok)
- `MaintenanceObserver.php` — Capture the asset's current checkout state before the maintenance record is saved. (~986 tok)
- `SettingObserver.php` — Listen to the Setting saved event. (~86 tok)
- `UserObserver.php` — Listen to the User updating event. This fires automatically every time an existing asset is saved. (~1651 tok)

## app/Policies/

- `.gitkeep` (~0 tok)
- `AccessoryPolicy.php` — Authorization policy: AccessoryPolicy (~87 tok)
- `AssetModelPolicy.php` — Authorization policy: AssetModelPolicy (~134 tok)
- `AssetPolicy.php` — Authorization policy: AssetPolicy (~161 tok)
- `CategoryPolicy.php` — Authorization policy: CategoryPolicy (~44 tok)
- `CheckoutablePermissionsPolicy.php` — Determine whether the user can checkout the accessory. (~286 tok)
- `CompanyPolicy.php` — Authorization policy: CompanyPolicy (~84 tok)
- `ComponentPolicy.php` — Authorization policy: ComponentPolicy (~87 tok)
- `ConsumablePolicy.php` — Authorization policy: ConsumablePolicy (~87 tok)
- `CustomFieldPolicy.php` — Authorization policy: CustomFieldPolicy (~46 tok)
- `CustomFieldsetPolicy.php` — Proxy the authorization for custom fieldsets down to custom fields. (~136 tok)
- `DepartmentPolicy.php` — Authorization policy: DepartmentPolicy (~85 tok)
- `DepreciationPolicy.php` — Authorization policy: DepreciationPolicy (~46 tok)
- `LicensePolicy.php` — Determine whether the user can view license keys. (~342 tok)
- `LocationPolicy.php` — Authorization policy: LocationPolicy (~84 tok)
- `MaintenancePolicy.php` — Policy for Asset Maintenances. (~908 tok)
- `MaintenanceTypePolicy.php` — Authorization policy: MaintenanceTypePolicy (~47 tok)
- `ManufacturerPolicy.php` — Authorization policy: ManufacturerPolicy (~46 tok)
- `PredefinedKitPolicy.php` — Authorization policy: PredefinedKitPolicy (~44 tok)
- `SnipePermissionsPolicy.php` — SnipePermissionsPolicy provides methods for handling the granular permissions used throughout Snipe-IT. (~1309 tok)
- `StatuslabelPolicy.php` — Authorization policy: StatuslabelPolicy (~46 tok)
- `SupplierPolicy.php` — Authorization policy: SupplierPolicy (~84 tok)
- `UserPolicy.php` — Authorization policy: UserPolicy (~82 tok)
