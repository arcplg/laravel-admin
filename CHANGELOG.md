# Changelog

## 2.1.0 (fork)

- Package renamed to `arcplg/laravel-admin`, namespace renamed `Encore\Admin` -> `Arcplg\Admin` (see FORK.md and scripts/migrate-project.sh).
- Laravel 10 / 11 / 12 / 13 support, PHP >= 8.3.
- toastr partial: handles a session value that was flashed as an array.
- `doctrine/dbal` is optional; `admin:make` uses `Schema::getColumns()`.
- PHP 8.4+: explicit nullable parameter types.
- `Request::get()` replaced by `Request::input()`.
