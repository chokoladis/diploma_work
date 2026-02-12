include .env

build:
	docker-compose up --build -d
up:
	docker-compose up -d
down:
	docker-compose down

reload:
	make down
	make up

#db-start:
	#docker exec -w /var/www/redmouse redmouse_php php 

#db-restore:
#	gunzip -c dumps/redmouse.sql.gz | docker exec -i redmouse_mysql mysql -u$(DB_USERNAME) -p$(DB_PASSWORD) $(DB_DATABASE);
#db-export:
#	docker exec redmouse_mysql mysqldump -u$(DB_USERNAME) -p$(DB_PASSWORD) $(DB_DATABASE) | gzip > dumps/redmouse_$(shell date +%F).sql.gz

install-composer:
	docker exec -w /var/www/redmouse redmouse_php composer install --no-interaction --prefer-dist --optimize-autoloader
update-composer:
	docker exec -w /var/www/redmouse redmouse_php composer update --no-interaction

#fix-right:
#	sudo chmod -R 777 storage