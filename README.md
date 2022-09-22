# Docker PHP MySQL Simple App
 
## Table of contents
* [General Information](#general-information)
* [Technologies](#technologies)
* [Project Structure](#project-structure)
* [Installation and Usage](#installation-and-usage)

## General Information
Simple App development setup prepared using PHP & MySQL Docker images.

If we choose to test the PHP Apache container we will uncomment only part 1.
![Part 1 PHP Code](https://github.com/ivantecles/docker-php-mysql-simple-app/blob/master/php/src/img/Part1PHPCode.png?raw=true)

This will be the result for part 1:
![Part 1 PHP Result](https://github.com/ivantecles/docker-php-mysql-simple-app/blob/master/php/src/img/Part1PHPResult.png?raw=true)

If we choose to test the MySQL server container we will uncomment only part 2. 
![Part 2 MySQL Code](https://github.com/ivantecles/docker-php-mysql-simple-app/blob/master/php/src/img/Part2MySQLCode.png?raw=true)

This will be the result for part 2:
![Part 2 MySQL Result](https://github.com/ivantecles/docker-php-mysql-simple-app/blob/master/php/src/img/Part2MySQLResult.png?raw=true)

## Technologies
The project uses the following technologies:
* Docker
* PHP
* MySQL

## Project Structure
It is really simple! :wink:

The project has a **src** folder that includes...

> /docker-compose.yml\
> /php/Dockerfile\
> /php/src/index.php\
> /php/img/Part1PHPCode.png\
> /php/img/Part1PHPResult.png\
> /php/img/Part2MySQLCode.png\
> /php/img/Part2MySQLResult.png\
> /README.md

## Installation and Usage
1) Download the repository.

2) Comment/Uncomment the part you want to test (Part 1: PHP and Part 2: MySQL).

3) Run 'docker-compose up' in the root directory.

4) Open in your browser http://localhost:8000/ web address.

5) Congratulations! Now you have a simple app using Docker, PHP and MySQL.