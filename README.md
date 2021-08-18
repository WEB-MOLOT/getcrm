## GETCRM

- https://getcrm.4test.xyz/ - стенд разработки, обновляется ежедневно. 
- https://getcrm.pw/ - демонстрационный стенд. Давно не обновлялся.
- https://getcrm.ru/ - продакшен

### Документация

- ТЗ - https://docs.google.com/document/d/1wLKiWGbnFU_aId6V4hWpAgGGKSf_PrRTIruH7LlpkTY/edit
- Верстка - http://test.web-molot.ru/getcrm/index.php

### Тестовые данные

- admin@getcrm.ru password - Админ сайта, есть доступ в панель управления https://getcrm.4test.xyz/admin
- user@getcrm.ru password - Пользователь сайта, есть доступ в ЛК

### Локальный запуск проекта

Создать SQLite базу

```
touch database/database.sqlite
```

Указать путь до базы в файле .env

```
DB_CONNECTION=sqlite
DB_DATABASE=/home/user/projects/getcrm/database/database.sqlite
DB_FOREIGN_KEYS=true
```

Создать ключ приложения, структуру базы данных и заполнить ее тестовыми данными

```
php artisan key:generate
php artisan migrate:fresh --seed
```

Запустить PHP built-in сервер

```
php artisan serve
```

После этого проект будет доступен в браузере по адресу http://127.0.0.1:8000/

