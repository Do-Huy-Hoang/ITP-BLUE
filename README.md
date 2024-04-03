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

![home page](https://raw.githubusercontent.com/josuapsianturi/velflix/main/public/img/home.png)

see full page [here](https://raw.githubusercontent.com/josuapsianturi/velflix/main/public/img/home-full-page.png)

![movies header](https://raw.githubusercontent.com/josuapsianturi/velflix/main/public/img/movies-header.png)

![movies](https://raw.githubusercontent.com/josuapsianturi/velflix/main/public/img/movies.png)

see full page [here](https://raw.githubusercontent.com/josuapsianturi/velflix/main/public/img/movies-full-page.png)

![Detail movies](https://raw.githubusercontent.com/josuapsianturi/velflix/main/public/img/details-movie.png)

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

1. Go into the project root directory
    ```sh
    cd ITP-BLUE
    ```

1. Copy .env.example file to .env file
    ```sh
    cp .env.example .env
    ```
1. Go to `.env` file 
    - set database credentials (`DB_DATABASE=itpblue`, `DB_USERNAME=root`, `DB_PASSWORD=`)
    > Make sure to follow your database username and password

1. Install PHP dependencies 
    ```sh
    composer install
    ```

1. Generate key 
    ```sh
    php artisan key:generate
    ```

1. Run migration
    ```
    php artisan migrate
    ```
    
1. Run seeder
    ```
    php artisan db:seed
    ```
    this command will create 2 users (admin and normal user):
     > email: admin@gmail.com , password: password

     > email: user@gmail.com , password: password 

1. Run server 
    > for valet users visit `velflix.test` in your favorite browser
   
    ```sh
    php artisan serve
    ```  

1. Visit `localhost:8000` in your favorite browser.     

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
