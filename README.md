
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

# Development Installation (Windows)

The following instructions are written for Windows 10 and should be followed in 
order to install and configure php and wordpress on your PC

### 1. Setup

Download and install PhpStorm for Windows from this repository:

https://www.jetbrains.com/phpstorm/?fromMenu

Acquire a license, either by registering as a student or paying for a license.

Navigate to https://php.net/downloads.php from your web browser and click 
on the link for "Windows downloads."

Create a new empty project within PhpStorm and give it a name.

### 2. PHP

Install PHP>=7.2

Navigate to https://windows.php.net/download and download the version of PHP
corresponding to your system architecture.

Un-archive the file folder within your C:/ root directory using File Explorer

### 2.5 Configure PHP

Open a Systems Properties window by typing "env" in the start menu search bar

Click on the "Environment Variables" button to open up a new window containing
your user and system environment variables.

Find the PATH environment variable in the table and select it by double clicking it.
Add a new line which matches the absolute path location where you unzipped the files

For example: ```C:\PHP```

Click "Ok" to exit out of the pane and then again to exit the environment variables
window.

Navigate to your PHP directory using File Explorer and rename the file named

```php.ini-in-development``` to ```php.ini```

Open the newly renamed file in a text editor of your choice.

Find the lines corresponding to:

```
;extension=mysqli
;extension=pdo_mysql
```

and uncomment them by removing the preceding semicolons.

### 3. MySQL

Navigate to https://dev.mysql.com/downloads/mysql/ in your web browser and 
download the MySQL server files corresponding to your system architecture.

Unzip the files to your ```C:/``` root directory as ```C:/MySQL```

Add your MySQL bin directory to your path, for example: ```C:/MySQL/bin```

Change your root password from the command line

```C:\mysql\bin> mysql -u root -p```

```mysql> SET PASSWORD FOR root@localhost=PASSWORD('newpass');```

Using a strong password of your choice in place of 'newpass'.

### 4. Wordpress

Navigate to https://wordpress.org/download/ from your web browser

Download the wordpress files corresponding to your system architecture.

Unzip and place the wordpress files within the directory in which you
created your empty PhpStorm project.

Create a new wordpress database by opening the Database Editor from 
PhpStorm's View tab. Configure a new MySQL data source and grant user 
privileges from within the database editor by pasting the following lines:
```
CREATE DATABASE wordpress;
CREATE USER wordpress@localhost IDENTIFIED WITH mysql_native_password BY 'password';
GRANT ALL PRIVILEGES ON wordpress.* TO wordpress@localhost;
FLUSH PRIVILEGES; 
```

Run those commands from within the editor.

Rename ```wp-config-sample.php``` to ```wp-config.php``` and edit the config
file to your specifications.

### 5. Running a Development Server

Add a run configuration for PHP's built in web server and click run. The server should
start at ```localhost:8000``` within your web browser after clicking on the
corresponding icon. within the editor window.

 
 









