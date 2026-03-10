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

db-restore:
	gunzip -c dumps/redmouse.sql.gz | docker exec -i redmouse_pgsql psql -U$(DB_USERNAME) -d$(DB_DATABASE);
db-export:
	docker exec redmouse_pgsql pg_dump -U$(DB_USERNAME) $(DB_DATABASE) | gzip > dumps/redmouse_$(shell date +%F).sql.gz

install-composer:
	docker exec -w /var/www/redmouse redmouse_php composer install --no-interaction --prefer-dist --optimize-autoloader
update-composer:
	docker exec -w /var/www/redmouse redmouse_php composer update --no-interaction