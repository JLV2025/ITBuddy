# ITBuddy Docker 部署指南

## 环境要求

- Docker Engine 24+
- Docker Compose v2（已内置在 Docker Desktop / Docker Engine 中）
- 至少 2GB 可用内存

## 快速部署

### 1. 克隆代码（如未拉取）

```bash
git clone https://github.com/JLV2025/ITBuddy.git
cd ITBuddy
```

### 2. 配置环境变量

`.env` 文件已预填 Docker 生产默认值。**必须修改以下项：**

| 变量 | 说明 | 操作 |
|------|------|------|
| `APP_KEY` | Laravel 加密密钥 | 运行 `php artisan key:generate --show` 生成并填入 |
| `APP_URL` | 访问地址 | 改为实际域名或 IP，如 `http://192.168.1.100:8000` |
| `DB_PASSWORD` | 数据库密码 | 改为强密码 |
| `MYSQL_ROOT_PASSWORD` | MySQL root 密码 | 改为强密码 |
| `MAIL_*` | 邮件配置 | 按实际邮件服务器填写 |

### 3. 构建并启动

```bash
# 构建镜像（首次约 10-15 分钟）
docker compose build

# 后台启动
docker compose up -d

# 查看日志
docker compose logs -f
```

### 4. 完成安装

访问 `http://<服务器IP>:8000/setup` 进入 Web 安装向导：

1. 创建管理员账号
2. 配置系统基本设置
3. 完成安装

### 5. 生成 APP_KEY（如安装向导未自动生成）

```bash
docker compose exec app php artisan key:generate
```

## 管理命令

```bash
# 查看状态
docker compose ps

# 停止服务
docker compose down

# 停止并删除数据卷（⚠️ 会丢失数据库数据）
docker compose down -v

# 查看应用日志
docker compose logs -f app

# 查看数据库日志
docker compose logs -f db

# 进入容器
docker compose exec app bash

# 运行 Artisan 命令
docker compose exec app php artisan cache:clear
docker compose exec app php artisan config:clear
docker compose exec app php artisan migrate
```

## 数据持久化

| 数据卷 | 挂载点 | 说明 |
|--------|--------|------|
| `db_data` | MariaDB 数据目录 | 数据库持久化 |
| `storage` | `/var/lib/itbuddy` | 上传文件、备份、密钥 |

数据卷默认由 Docker 管理，位于 `/var/lib/docker/volumes/`。

## 备份与恢复

### 备份数据库

```bash
docker compose exec db mariadb-dump -u itbuddy -p itbuddy > backup.sql
```

### 恢复数据库

```bash
docker compose exec -T db mariadb -u itbuddy -p itbuddy < backup.sql
```

## 端口修改

默认端口 8000，可修改 `.env` 中的 `APP_PORT`：

```
APP_PORT=8080
```

或直接：

```bash
APP_PORT=8080 docker compose up -d
```

## 常见问题

### 1. 容器启动后访问 503

首次运行会自动执行 `php artisan migrate`。如果数据库尚未初始化完成，会暂时 503。等待 30 秒后刷新。

### 2. APP_KEY 错误

```bash
docker compose exec app php artisan key:generate
```

### 3. 上传文件大小限制

容器内默认限制 100M。可在 `.env` 中添加：

```
PHP_UPLOAD_LIMIT=200
```

### 4. 使用 Redis 缓存

如需 Redis，将 `.env` 中以下值修改：

```
CACHE_DRIVER=redis
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis
REDIS_HOST=redis
REDIS_PORT=6379
```

然后在 `docker-compose.yml` 的 `services:` 下添加：

```yaml
  redis:
    image: redis:7.4.3
    restart: unless-stopped
```

并在 `app.depends_on` 中添加 `redis: { condition: service_started }`。

## 远期：Windows Server + SQL Server 迁移

如需后续迁移到 **Windows Server** + **SQL Server**（MSSQL），需调整：

1. **数据库驱动**：添加 `sqlsrv` PHP 扩展（`php8.3-sqlsrv`）
2. **Docker 镜像**：改用 `mcr.microsoft.com/mssql/server` 或 Windows 原生安装 SQL Server
3. **环境变量**：`DB_CONNECTION=sqlsrv`，修改 `DB_HOST/PORT/DATABASE/USERNAME/PASSWORD`
4. **Laravel 配置**：`config/database.php` 添加 `sqlsrv` 连接配置
5. **文件路径**：Windows 使用反斜杠路径，需检查 `storage/` 目录配置

迁移时建议逐步验证：先切数据库到 SQL Server，应用层保持 Linux Docker，稳定后再迁应用层到 Windows。
