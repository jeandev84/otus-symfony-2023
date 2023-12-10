### Doctrine ORM 

1. Заходим в контейнер php и установливаем пакеты 
```
$ docker compose exec -it php-fpm bash
$ ac2c696a0fbb:/app# composer req doctrine/orm
$ ac2c696a0fbb:/app# composer req doctrine/doctrine-bundle
$ ac2c696a0fbb:/app# composer req doctrine/doctrine-migrations-bundle
```