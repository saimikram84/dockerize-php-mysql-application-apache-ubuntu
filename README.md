
# Dockerize php mysql application

Dockerized PHP Gym Web application, authentication, php, mysql, database, connectivity, apahce, ubuntu, docker

## How it Works
Docker builds an image containing the docker-compose.yml and all of its dependencies by using the Dockerfile contained in this repository.

The Dockerfile tells docker to use the [official PHP Docker image](https://hub.docker.com/_/php/) as the parent image.

The Mysql image then uses the [MySql](https://hub.docker.com/_/mysql) Docker image as its parent image.

At this point, an image has been built which contains Apache, PHP, Mysql, PDO Extensions and all of the OS dependencies and libraries required to serve a web application written in PHP.

Finally, docker copies everything in src/ inside this repository to the /var/www/html folder inside the image. This is the Apache web root directory.
## Setup
* Docker must be installed
* Clone/Download this repository 
* Run Command
* ```bash
  docker-compose up --build -d
```
## Environment Variables

To run this project, add 
MYSQL_ROOT_PASSWORD
MYSQL_DATABASE
MYSQL_USER
MYSQL_PASSWORD

`API_KEY`

`ANOTHER_API_KEY`


## How it Works
Docker builds an image containing the docker-compose.yml and all of its dependencies by using the Dockerfile contained in this repository.

The Dockerfile tells docker to use the [official PHP Docker image](https://hub.docker.com/_/php/) as the parent image.

The Mysql image then uses the [MySql](https://hub.docker.com/_/mysql) Docker image as its parent image.

At this point, an image has been built which contains Apache, PHP, Mysql, PDO Extensions and all of the OS dependencies and libraries required to serve a web application written in PHP.

Finally, docker copies everything in src/ inside this repository to the /var/www/html folder inside the image. This is the Apache web root directory.
## Web Application Usage
* Run Php application
 ```bash
  http://localhost:8080
```
## Tech Stack

**Client:** HTML, CSS, JQuery, PHP, Mysql, Web Design, Responsive Design

**Server:** Apache


## Features

- User registration
- Login
- MySql connectivity
- standalone package


## Contributing

Contributions are always welcome!

See `contributing.md` for ways to get started.

Please adhere to this project's `code of conduct`.


## 🚀 About Me
I'm a Professional Full stack web & mobile developer. Experienced in Web Development using PHP Cddeigniter, Laravel, Javascript, NodeJS, ExpressJS, MySQL, PostgreSQL, MongoDB, Web Sockets, React js, Next js, Angular js, Vue js, Api's Developent, Rest api's, Payment method integrations, CI/CD. Have experience in Linux Based Server Management(Cloud + Dedicated) with through hands-on experience in all levels of testing, including performance, functional, integration ,system , regression, and user acceptance testing.Supportive and enthusiastic team player dedicated to streamlining processes and efficiently resolving project issues.Willing to take ownership of core components.

