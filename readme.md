# Documentation for Wordpress

## Mysql
### Install
 After installation login with:
    sudo mysql; 
 And create user.
### Create User
    CREATE USER 'username'@'localhost' IDENTIFIED BY 'password';
    GRANT ALL PRIVILEGES ON *.* TO 'username'@'localhost';
    FLUSH PRIVILEGES;
### Create Database
    CREATE DATABASE database_name;
### Show all Databases
    SHOW DATABASES;


## More Information
### How to install wordpress with nginx on Ubuntu (Important)
    https://www.digitalocean.com/community/tutorials/how-to-install-wordpress-with-nginx-on-ubuntu-14-04
### How to create new user and give permissions on mysql
    https://www.digitalocean.com/community/tutorials/como-criar-um-novo-usuario-e-conceder-permissoes-no-mysql-pt
### Creating database for wordpress
    https://wordpress.org/support/article/creating-database-for-wordpress/#using-the-mysql-client

 




