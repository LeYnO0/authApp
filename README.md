
Краткая логика приложения: точкой входа является файл resources/index.php. Через .htacces-настройки все запросы направлены в него. В нём же описана простейшая маршрутизация и перенаправления запросов на представления или контроллеры. 

Приложение должно лежать в директории, которую просматривает сервер. Я использовал Apache2.

Также нужно установить зависимости при помощи composer install.

Вместо Yandex SmartCapcha был использован бесплатный аналог Google reCapcha v2.

В корне проекта должен лежать .env с параметрами подключения к БД и Google reCapcha API:

DB_HOST=***  
DB_USERNAME=***   
DB_PASSWORD=***  
DB_DATABASE=***  

CAPCHA_SITE_KEY =***  
CAPCHA_SEKRET_KEY=***  

Таблицу юзеров можно создать через любой удобный интерфейс, но для минимализации ошибок типов рекомендую создать запросом: 

CREATE TABLE users  
(  
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,  
    login VARCHAR(100) NOT NULL UNIQUE,  
    mail VARCHAR(100) NOT NULL UNIQUE,  
    phone VARCHAR(12) NOT NULL UNIQUE,  
    password VARCHAR(100) NOT NULL  
);  