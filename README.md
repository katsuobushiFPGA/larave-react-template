# Set up
```
$ cd laradock
laradock $ docker-compose up -d nginx mysql
```

```
laradock $ docker-compose exec workspace bash
laradock $ composer install
laradock $ npm install
laradock $ npm run watch
```
access http://localhost