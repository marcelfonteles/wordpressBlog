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
#### Pre-requesite
    https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-on-ubuntu-14-04
#### Official
    https://www.digitalocean.com/community/tutorials/how-to-install-wordpress-with-nginx-on-ubuntu-14-04
    
### How to create new user and give permissions on mysql
    https://www.digitalocean.com/community/tutorials/como-criar-um-novo-usuario-e-conceder-permissoes-no-mysql-pt
### Creating database for wordpress
    https://wordpress.org/support/article/creating-database-for-wordpress/#using-the-mysql-client
### Introduction to Nginx
    https://medium.com/free-code-camp/an-introduction-to-nginx-for-developers-62179b6a458f
### Let's Encrypt and Nginx. Configuring SSL
    https://medium.com/hackernoon/configuring-your-server-to-provide-https-using-lets-encrypt-and-nginx-e46a5ae93e41
### How to create your first safe server that's ready for production
    https://www.freecodecamp.org/news/how-to-create-your-first-safe-server-ready-for-production-f1cc60eec69a/ 




