# laravel

- Migration

- PHPのMigration

```sh
php artisan make:migration create_<テーブル名(複数系)>_table
```

- PHPのMigrate

```sh
php artisan migrate
```

- Modelの説明

```sh
php artisan make:model <テーブル名(先頭は大文字)>
```

- シーダーファイルの作成

```
php artisan make:seeder <テーブル名(先頭は大文字)>TableSeeder
```

```sh
php artisan db:seed --class=<テーブル名(先頭は大文字)>TableSeeder
```