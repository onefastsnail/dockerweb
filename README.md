# Dockerize the web

A simple base infrastructure that provides a nginx, php, and mysql stack for web applications.

## Spin up the stack

1. Copy and configure **/env/.env.example** to **/env/.env** (ensure all passwords are strong and filled in) 
2. run `docker stop $(docker ps -a -q) && docker rm $(docker ps -a -q)` to stop all currently running containers
2. docker-compose up -d --build
2. Visit http://localhost or http://NAME.em87.io
3. And Enjoy :)

### phpMyAdmin

There is a phpMyAdmin container running to give you a database management. This can be accessed from http://localhost:8080

The database is stored in /data/mariadb

Credentials are stored /env/.env

## Usage

* The app code should be placed in /app
* The nginx public serving code should be in /app

## Notes

* If you need to change the name of app/ amend the /docker-compose.yml and /nginx/default.conf

## Credits

Paul Stewart

## License

What license? :)