# Cerebrum

> OpenWolf's learning memory. Updated automatically as the AI learns from interactions.
> Do not edit manually unless correcting an error.
> Last updated: 2026-06-25

## User Preferences

- **Language**: 简体中文对话，代码注释用中文，README 中英双语（前半中文，后半英文）
- **Branding**: 项目名为 ITBuddy，彻底去除原 Snipe-IT 品牌/历史/贡献者信息
- **Git Identity**: JLV2025 <Jing.Lv@qorvo.com>
- **Communication**: 结论优先，过程简述，简洁不啰嗦
- **Documentation**: 中英双语 README.md + README.html 同步维护

## Key Learnings

- **Project**: ITBuddy — 基于 Snipe-IT (Grokability) 重构的 IT 资产管理系统
- **Stack**: PHP 8.2+, Laravel 12, AdminLTE 2, Bootstrap 3, Chart.js v2.9.4
- **Database**: 不捆绑数据库引擎。三种方式：Docker Compose (MariaDB 11.4)、SQLite (单文件)、MySQL/PostgreSQL
- **Dev Server**: Laravel Herd (`herd coverage` for coverage)
- **GitHub**: https://github.com/JLV2025/ITBuddy
- **GitNexus**: 已索引 (23,084 nodes, 52,659 edges, 300 flows)
- **OpenWolf**: 自动管理 anatomy.md / memory.md / cerebrum.md / buglog.json
- **自动化配置**: itbuddy-conventions skill, gen-test skill, laravel-security-reviewer/n1-detector subagents, Pint auto-format hook

## Do-Not-Repeat

<!-- Mistakes made and corrected. Each entry prevents the same mistake recurring. -->

## Decision Log

- **2026-06-25**: 删除原 Snipe-IT 历史文件 (CONTRIBUTORS, SECURITY, CI/CD workflows, Issue templates, ansible, Vagrant) — 作为独立项目重新出发
- **2026-06-25**: 保留 `snipeit.js`、`$snipeSettings` 等代码内标识符不变 — 改名会影响运行时行为
- **2026-06-25**: BDD + TDD 测试方法论 — 先写 Gherkin 场景，再 Red-Green-Refactor
