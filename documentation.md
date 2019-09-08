# Documentation for Wordpress

## Mysql

### Install
 After installation login with: sudo mysql; and create user.
### Create User
 CREATE USER 'username'@'localhost' IDENTIFIED BY 'password';
 GRANT ALL PRIVILEGES ON *.* TO 'username'@'localhost';
 FLUSH PRIVILEGES;

### Create Database
 CREATE DATABASE database_name;
### Show all Databases
 SHOW DATABASES;




## More Information
 https://www.digitalocean.com/community/tutorials/como-criar-um-novo-usuario-e-conceder-permissoes-no-mysql-pt
 https://wordpress.org/support/article/creating-database-for-wordpress/#using-the-mysql-client
 




