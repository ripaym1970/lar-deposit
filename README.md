5. Устаналиваем laravel-зависимости 
 Из корня проекта выполняем команды:

```
composer install --ignore-platform-reqs
```
или
```
composer update --ignore-platform-reqs
чтобы не удалять 
    "ext-json": "*",
    "ext-posix": "*",
    "ext-zlib": "*",
    "ext-curl": "*",
    "ext-pdo": "*"
```

