### Doctrine ORM 

1. Заходим в контейнер php и установливаем пакеты 
```
$ docker compose exec -it php-fpm bash
$ ac2c696a0fbb:/app# composer req doctrine/orm
$ ac2c696a0fbb:/app# composer req doctrine/doctrine-bundle
$ ac2c696a0fbb:/app# composer req doctrine/doctrine-migrations-bundle
```

2. Already used ports 
```
Example: used port 15432
$ docker ps | grep 15432
$ docker stop target-postgres-1
$ docker compose up -d
```