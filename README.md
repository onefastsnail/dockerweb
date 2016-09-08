# Dockerize the web

A simple base infrastructure that provides a nginx, php, and mysql stack for web applications.

## Spin up the stack

1. docker-compose up -d --build
2. Visit http://localhost or http://domain.com
3. And Enjoy :)

### phpMyAdmin

There is a phpMyAdmin container running to give you a database management. This can be accessed from http://localhost:8080

The database is stored in /data/mariadb

Credentials are stored /env/.env

## Usage

* The app code should be placed in /app
* The nginx public serving code should be in /app/dist

## Credits

Paul Stewart

## License

What license? :)