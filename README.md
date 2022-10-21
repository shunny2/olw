<p align="center">
<a href="#about-application">About Application</a>
&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
<a href="#technologies">Technologies</a>
&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#routes">Routes</a>
  &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
<a href="#how-to-run">How to run</a>
&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
<a href="#project-status">Project Status</a>
</p>

</br>

![olw-gif](https://user-images.githubusercontent.com/72872854/197296367-ce5f61fb-48d1-4145-977a-b928f7a45cf2.gif)

<p align="center">
<a href="https://img.shields.io/github/followers/shunny2?style=social"><img src="https://img.shields.io/github/followers/shunny2?style=social" alt="Followers"/></a>
<a href="https://img.shields.io/github/stars/shunny2/olw?style=social"><img src="https://img.shields.io/github/stars/shunny2/olw?style=social" alt="Repo Stars"/></a>
<a href="https://img.shields.io/github/license/shunny2/olw"><img src="https://img.shields.io/github/license/shunny2/olw" alt="License"/></a>
</p>

## About Application

Project to help beer lovers find the best solution when drinking with side dishes. The [PUNK API](https://punkapi.com/) was used to capture information about the beer catalog. The project was created at the Open Laravel Week event by Beer and Code.

## Technologies

  - [PHP](https://www.php.net/)
  - [Laravel](https://laravel.com/)
  - [Laravel Sail (Docker)](https://laravel.com/docs/9.x/sail#installation)
  - [MySQL](https://www.mysql.com/)
  - [Redis](https://redis.io/)
  - [Minio](https://min.io/)
  - [MailHog](https://github.com/mailhog/MailHog)
  - [InertiaJS](https://inertiajs.com/)
  - [VueJS](https://vuejs.org/)
  - [Tailwindcss](https://tailwindcss.com/)
  - [AWS](https://aws.amazon.com/s3/?nc1=h_ls)
  - [Terraform](https://www.terraform.io/)
  
## How to run

First, start by cloning the repository:
```shell
git clone https://github.com/shunny2/olw
```

After cloning the repository, you will need to install a container containing PHP and Compose to install the dependencies. Then go to the project root directory and run:
```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

Enter the project root directory and create the project images and run the containers:
```bash
sail up -d
```

Install project dependencies:
```bash
sail composer install
```

Now, run the creation of migrations and seeders:
```bash
sail art migrate --seed
```

## Routes

  Below are the accessible routes of the application:
  
  - [Welcome](http://localhost)
  - [Login](http://localhost/login)
  - [Register](http://localhost/register)
  - [Beers](http://localhost/beers)
  - [Reports](http://localhost/beers/reports)


## Project Status

> Status: Completed.

<hr></hr>

<p align="center">Created by <a href="https://github.com/shunny2"><b>Alexander Davis</b></a>.</p>
