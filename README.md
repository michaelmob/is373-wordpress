
# IS 373 - WordPress

## Team Members

* [RichardFebres](https://github.com/RichardFebres)
* [thetarkus](https://github.com/thetarkus)

## Development Installation

The following instructions are written to run on [Ubuntu 18.04](http://releases.ubuntu.com/18.04/). Instructions should be similar to other Linux Distributions. The built-in PHP webserver should not be used as a production webserver.


### 1. Setup

Clone this repository and set the current directory to the newly created path.
```sh
git clone https://github.com/thetarkus/is373-wordpress && cd is373-wordpress
```

Update your package indexes.
```sh
sudo apt update
```

### 2. PHP

Install [PHP >= 7.2](http://php.net/).
```sh
sudo apt install php
```

#### 2.5. Configure `php.ini`

Open `/etc/php/7.2/cli/php.ini` in your favorite text editor.
```sh
sudoedit /etc/php/7.2/cli/php.ini
```

Remove the semi-colons (;) for the following lines to enable the MySQL extension:
```ini
;extension=mysqli
;extension=pdo_mysql
```

### 3. MySQL

Install MySQL server.
```sh
sudo apt install mysql-server
```

#### 3.5. Create a user and database

Login to the MySQL Monitor.
```sh
sudo mysql
```

Run these SQL commands after changing `'password'` to a strong password.
```sql
CREATE DATABASE wordpress;
CREATE USER wordpress@localhost IDENTIFIED WITH mysql_native_password BY 'password';
GRANT ALL PRIVILEGES ON wordpress.* TO wordpress@localhost;
FLUSH PRIVILEGES;
```

### 4. Wordpress

Duplicate `wp-config-sample.php` to `wp-config.php` and edit to satisfaction.  
Be sure to set database credentials, keys, and salts.

### 5. Run Development Server

Run PHP's built-in webserver.
```s
php -S localhost:8080
```
