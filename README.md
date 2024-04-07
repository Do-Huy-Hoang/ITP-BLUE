<a href="https://github.com/Do-Huy-Hoang/ITP-BLUE.git"> <h1 align="center">ITP BLUE</h1></a>
<p align="center"><a href="https://github.com/josuapsianturi/velflix/blob/main/LICENSE"><img src="https://poser.pugx.org/cpriego/valet-linux/license.svg" alt="License"></a>
</p>

## About

IPT BLUE is a Laravel clone project using TALL stack  [Laravel](https://laravel.com/).

> **Note**
> Work in Progress

## Table of Contents

* [Screenshots](#screenshots)
* [Requirements](#requirements)
* [Installation](#installation)
* [Testing](#testing)
* [Contributing](#contributing)
* [License](#license)

<a name="screenshots"></a>
## Screenshots
**<-----------------------------------------------------------------Customer--------------------------------------------------------------------------->**
![home page](https://github.com/Do-Huy-Hoang/ITP-BLUE/blob/main/public/img/git/home.png)
see full page [here](https://github.com/Do-Huy-Hoang/ITP-BLUE/issues/1#issue-2229793631)

![shop page](https://github.com/Do-Huy-Hoang/ITP-BLUE/blob/main/public/img/git/shop.png)
see full page [here](https://github.com/Do-Huy-Hoang/ITP-BLUE/issues/2#issue-2229793768)

![cart page](https://github.com/Do-Huy-Hoang/ITP-BLUE/blob/main/public/img/git/cart.png)
see full page [here](https://github.com/Do-Huy-Hoang/ITP-BLUE/issues/3#issue-2229794000)

![order page](https://github.com/Do-Huy-Hoang/ITP-BLUE/blob/main/public/img/git/order.png)
see full page [here](https://github.com/Do-Huy-Hoang/ITP-BLUE/issues/4#issue-2229794094)

![login page](https://github.com/Do-Huy-Hoang/ITP-BLUE/blob/main/public/img/git/login.png)
see full page [here](https://github.com/Do-Huy-Hoang/ITP-BLUE/issues/6#issue-2229794300)

![resgister page](https://github.com/Do-Huy-Hoang/ITP-BLUE/blob/main/public/img/git/register.png)
see full page [here](https://github.com/Do-Huy-Hoang/ITP-BLUE/issues/7#issue-2229794400)

![fotgot password page](https://github.com/Do-Huy-Hoang/ITP-BLUE/blob/main/public/img/git/forgetpassword.png)
see full page [here](https://github.com/Do-Huy-Hoang/ITP-BLUE/issues/8#issue-2229794629)

![profile page](https://github.com/Do-Huy-Hoang/ITP-BLUE/blob/main/public/img/git/profile.png)
see full page [here](https://github.com/Do-Huy-Hoang/ITP-BLUE/issues/5#issue-2229794216)
**<-----------------------------------------------------------------Customer--------------------------------------------------------------------------->**
![admin page](https://github.com/Do-Huy-Hoang/ITP-BLUE/blob/main/public/img/git/adminhome.png)
see full page [here](https://github.com/Do-Huy-Hoang/ITP-BLUE/issues/9#issue-2229834740)
<a name="requirements"></a>
## Requirements

Package | Version
--- | ---
[Node](https://nodejs.org/en/) | V14.19.1+
[Npm](https://nodejs.org/en/)  | V6.14.16+ 
[Composer](https://getcomposer.org/)  | V2.2.6+
[Php](https://www.php.net/)  | V8.0.17+
[Mysql](https://www.mysql.com/)  |V 8.0.27+

<a name="installation"></a>
## Installation

> **Warning**
> Make sure to follow the requirements first.

Here is how you can run the project locally:
1. Clone this repo
    ```sh
    git clone https://github.com/Do-Huy-Hoang/ITP-BLUE.git
    ```

2. Go into the project root directory
    ```sh
    cd ITP-BLUE
    ```

3. Copy .env.example file to .env file
    ```sh
    cp .env.example .env
    ```
4. Go to `.env` file 
   set database
   ```sh
   DB_DATABASE=itpblue
   DB_USERNAME=root
   DB_PASSWORD=
   ```
   set mail credentials
   ```sh
   MAIL_DRIVER=smtp
   MAIL_HOST=smtp.gmail.com
   MAIL_PORT=587
   MAIL_USERNAME=your email
   MAIL_PASSWORD=password
   MAIL_ENCRYPTION=tls
   ```
   set google api  credentials 
   ```sh
   GOOGLE_MAP_KEY=google api key
   ```
        
    > Make sure to follow your database username and password

5. Install PHP dependencies 
    ```sh
    composer install
    ```

6. Generate key 
    ```sh
    php artisan key:generate
    ```
    
7. Create database and import databse
   - Open XAMPP with administrator privileges
   - Set up Apache: config->php.ini
     ```sh
     upload_max_filesize=250M
     post_max_size=260M
     max_execution_time=10000
     memory_limit=1000M
     ```
   - Set up MySql: config->my.ini
     ```sh
     max_allowed_packet=250M
     innodb_buffer_pool_size=16M
     ```
   - Quit xampp
   - Open XAMPP with administrator privileges
   - Start Apache and MySql
   - Click on the MySQL admin to open the database management web page
   - Create database itpblue
   - Access the project, extract the 'itpblue.rar' file, then return to the MySQL interface. Click on the 'itpblue' database, select 'Import,' choose the 'itpblue.sql' file that has been extracted, and finally click button 'Import'
8. Run server 
    > for valet users visit `velflix.test` in your favorite browser
   
    ```sh
    php artisan serve
    ```  

9. Visit `localhost:8000` in your favorite browser.     

    > Make sure to follow your Laravel local Development Environment.
    
## Testing

### <a href="https://pestphp.com/">Pest</a>
1. To run PHP testing for Laravel
    > **Warning**
    > Every time you run testing, you should run `php artisan db:seed` first

```sh
vendor/bin/pest
```

### <a href="https://www.cypress.io/">Cypress</a>


2. To run E2E testing
```sh
npx cypress run
```

### <a href="https://laravel.com/docs/9.x/pint">Laravel Pint</a>

3. To run coding style checks
```sh
vendor/bin/pint
```
### <a href="https://psalm.dev/">Laravel Psalm</a>

4. To run static analysis with Psalm
```sh
vendor/bin/psalm
```
### <a href="https://github.com/nunomaduro/larastan">Larastan </a>

5. To run static analysis with PHPStan
```sh
vendor/bin/phpstan analyse
```

<a name="contributing"></a>
## Contributing
Pull requests are welcome.

<a name="license"></a>
## License
Velflix is an open-sourced software licensed under [the MIT license](https://github.com/josuapsianturi/velflix/blob/main/LICENSE)
