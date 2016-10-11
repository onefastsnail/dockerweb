# Dockerize the web

A simple base Docker stack that provides a nginx, php, and mysql containers for web applications.

## Spin up the stack

From project root level: 

1. Copy and configure **/env/.env.example** to **/env/.env** (ensure all passwords are strong and filled in) 
2. run `docker stop $(docker ps -a -q) && docker rm $(docker ps -a -q)` to stop all currently running containers
2. docker-compose up -d --build
2. Visit http://domain.com
3. And Enjoy :)

## To stop the stack

Run this command at the project root.

* `docker-compose down`

## phpMyAdmin

There is a phpMyAdmin container running to give you a database management. This can be accessed from http://domain.com:8080

The database is stored in /data/mariadb

Credentials are stored /env/.env

## Usage

* The app code should be placed in /public
* The nginx public serving code should be in /public

## Notes

* If you need to change the name of public/ amend the /docker-compose.yml

## Credits

Paul Stewart

## License

What license? :)