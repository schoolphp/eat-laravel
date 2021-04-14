1. Установили OpenServer (через него доступ к php 8)
2. Установили composer
3. Установили Docker
4. Настроили wsl version 2 в windows 10
5. PHPStorm: php.ini: extension=fileinfo
6. Настроили в PHPStorm PHP + composer
7. Установили Windows Terminal
8. Открыли через него Ubuntu (20+)
9. Согласно инструкции laravel установили его из Terminal->Ubuntu
10. В composer.json в require-dev добавляем: "squizlabs/php_codesniffer": "3.*"
11. vendor пакеты подтянули через composer install в PHPStorm
12. docker-compose.yml: прописали имя контейнеру основному container_name: laravel-php , а mysql: container_name: laravel-mysql
13. Создали блок с PMA:
phpmyadmin:
    image: phpmyadmin
    restart: always
    ports:
        - 8080:80
    environment:
        PMA_PORT: "3306"
        UPLOAD_LIMIT: "50M"
        PMA_HOST: "laravel-mysql"
        PMA_USER: '${DB_USERNAME}'
        PMA_PASSWORD: '${DB_PASSWORD}'
    networks:
        - sail

14. Запустили из папки: ./vendor/bin/sail up -d
15. Проверили работу: localhost (php) и localhost:8080 (phpmyadmin)
16. Выполнили первую команду для миграции: docker exec -i laravel-php php artisan migrate . Проверили в PMA, что таблицы создались
17. Установили плагин SonarLink
18. Установили в Settings->PHP->Quality Tools->Code_Sniffer->Configuration(local ...)->Inspection->CodeStandard->"PSR12"

19. Настроить:
- https://badcode.ru/kak-nastroit-php-storm-laravel/
- https://www.jetbrains.com/help/phpstorm/laravel.html
оба дополняют друг друга

20. gitignore:
.idea
.git

21. github: регистрируем аккаунт, добавляем репозиторий.
22. git bash: из папки выполняем:
git init
git remote add origin https://{login}:{password}@github.com/{login}/eat-laravel.git
git add README.md
git commit -m "first commit"
git branch -M main
git push -u origin main


Создаём первую страницу:
1. Создаём VIEW: resourses -> views -> main.blade.php
2. Создаём CONTROLLER: Выполняем php artisan make:controller MainController
3. Открываем его: /app/Http/Controllers/MainController.php
4. Создаём модель с миграцией: php artisan make:model -m EatItems
