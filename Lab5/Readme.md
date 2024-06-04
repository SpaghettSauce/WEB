1) Docker
Добавить в docker-compose.yml новый контейнер с mysql

Создать файл Dockerfile (без расширения, так и называется) рядом с docker-compose.yml 
Содержимое файла:

В файле docker-compose.yml изменить контейнер php. Вместо образа прописываем сборочный файл Dockerfile и добавляем link на db

docker-compose stop
docker-compose build && docker-compose up -d

2) SQL
В PHPStorm в разделе Database добавляете New - Data Source - Mysql. (раз я использую vs, то через SQL Database Projects)
Заполняете host - localhost, user - root, password - helloworld, port - 6603
test connection - apply
По созданному подключению правая кнопка мыши - Jump to query console
В открывшемся окне консоли можно вводить и запускать чистый sql
Создание базы

Создание таблицы объявлений


3) PHP
Сделать хранение объявлений в базе данных. Добавлять в базу и читать с базы.
