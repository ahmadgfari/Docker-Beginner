# Create Network
docker network create kuasai_net
# Run MYSQL
cd finalproject-kuasai-beginner
docker container run -dit -v $PWD/mysql_data:/var/lib/mysql --name mysql --network kuasai_net -e MYSQL_ROOT_PASSWORD=root@123 -e MYSQL_DATABASE=dbwpkuasai -e MYSQL_USER=cilsykuasaiuser -e MYSQL_PASSWORD=cilsykuasaipassword mysql:5.7
# PHPmyadmin
docker build -t ahmadgfari/phpmyadmin:custom-1 .
docker push ahmadgfari/phpmyadmin:custom-1
docker container run --name myadmin -d --link mysql:db -p 8080:80 --network kuasai_net ahmadgfari/phpmyadmin:custom-1 
# Run Website
docker pull wordpress:4.9.8-php7.2-apache
# Rubah config db_host di wp-config.php
# ganti localhost menjadi nama container mysql
docker container run -ditp 80:80 --name my-web -v $PWD/file-web/wordpresskuasai:/var/www/html --network kuasai_net wordpress:4.9.8-php7.2-apache
