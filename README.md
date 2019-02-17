
# IS 373 - WordPress

## Team Members

* [RichardFebres](https://github.com/RichardFebres)
* [thetarkus](https://github.com/thetarkus)

## Development Installation

The following instructions are written to run on [Ubuntu 18.04](http://releases.ubuntu.com/18.04/). Instructions should be similar to other Linux Distributions. The built-in PHP webserver should not be used as a production webserver.


### 1. Setup

Update your package indexes.
```sh
sudo apt update
```

### 2. PHP

Install PHP.
```sh
sudo apt install php
```

#### 2.5. Configure `php.ini`

Open `/etc/php/7.2/cli/php.ini` in your favorite text editor.
```sh
sudoedit /etc/php/7.2/cli/php.ini
```

Remove the semi-colons (;) for the following lines:
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
