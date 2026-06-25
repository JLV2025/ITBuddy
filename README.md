# ITBuddy — IT 资产管理系统

基于 [Laravel 12](http://laravel.com) 构建的开源 IT 资产管理系统。

---

## 中文

### 功能

- 资产全生命周期跟踪与管理
- 软件许可证管理
- 配件及消耗品库存管控
- 资产领用/归还工作流
- 条码及二维码标签打印
- 基于角色的权限控制
- REST API 集成接口

### 技术栈

| 层级 | 技术 |
|------|------|
| 后端 | PHP 8.2+, Laravel 12 |
| 前端 | AdminLTE 2, Bootstrap 3, Chart.js v2 |
| 数据库 | MySQL / PostgreSQL / SQLite |
| 构建工具 | Laravel Mix (Webpack) |

### 快速开始

```bash
# 安装 PHP 依赖
composer install

# 安装前端依赖
npm install

# 配置环境
cp .env.example .env
php artisan key:generate

# 运行数据库迁移
php artisan migrate

# 构建前端资源
npm run dev

# 启动开发服务器
php artisan serve
```

### Docker

```bash
docker compose up -d
```

### 安装

系统要求：PHP 8.2+, MySQL/PostgreSQL/SQLite, Node.js

```bash
composer install
cp .env.example .env
# 编辑 .env 配置数据库连接信息
php artisan key:generate
php artisan migrate
php artisan db:seed
npm install && npm run dev
```

### 使用

通过浏览器访问 `http://localhost` 并登录系统。详细操作指南请参阅系统内帮助文档。

### API

REST API 端点位于 `/api/v1/`。通过 Laravel Passport (个人访问令牌) 进行身份验证。

### 测试

```bash
# 运行全部测试
php artisan test

# 运行单个测试
php artisan test --filter testMethodName

# 代码覆盖率报告 (需 Laravel Herd)
herd coverage
```

---

## English

### Features

- Full asset lifecycle tracking and management
- Software license management
- Accessory and consumable inventory control
- Checkout/checkin workflows
- Barcode and QR code label printing
- Role-based access control
- REST API integration

### Tech Stack

| Layer | Technology |
|-------|------------|
| Backend | PHP 8.2+, Laravel 12 |
| Frontend | AdminLTE 2, Bootstrap 3, Chart.js v2 |
| Database | MySQL / PostgreSQL / SQLite |
| Build | Laravel Mix (Webpack) |

### Quick Start

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run dev
php artisan serve
```

### Docker

```bash
docker compose up -d
```

### Installation

Requirements: PHP 8.2+, MySQL/PostgreSQL/SQLite, Node.js

```bash
composer install
cp .env.example .env
# Edit .env with your database credentials
php artisan key:generate
php artisan migrate
php artisan db:seed
npm install && npm run dev
```

### Usage

Access the web interface at `http://localhost` and log in. See the in-app help for detailed usage instructions.

### API

REST API endpoints at `/api/v1/`. Authenticate via Laravel Passport (Personal Access Tokens).

### Testing

```bash
# Run all tests
php artisan test

# Run a single test
php artisan test --filter testMethodName

# Coverage report (requires Laravel Herd)
herd coverage
```

### License

Licensed under the AGPL-3.0 license. See [LICENSE](LICENSE) for details.
