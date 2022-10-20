<p align="center">
<a href="#about-application">About Application</a>
&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
<a href="#technologies">Technologies</a>
&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
<a href="#how-to-run">How to run</a>
&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
<a href="#project-status">Project Status</a>
</p>

## About Application

Project to help beer lovers find the best solution when drinking with side dishes. The project was created at the Open Laravel Week event by Beer and Code.

## Technologies

  - [PHP](https://www.php.net/)
  - [Laravel](https://laravel.com/)
  - [Laravel Sail (Docker)](https://laravel.com/docs/9.x/sail#installation)
  - [MySQL](https://www.mysql.com/)
  - [Redis](https://redis.io/)
  - [Minio](https://min.io/)
  - [MailHog](https://github.com/mailhog/MailHog)
  - [VueJS](https://vuejs.org/)
  - [Tailwindcss](https://tailwindcss.com/)
  - [AWS](https://aws.amazon.com/s3/?nc1=h_ls)
  
## How to run

First, start by cloning the repository:
```shell
git clone https://github.com/shunny2/olw
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

## Project Status

> Status: Completed.

<hr></hr>

<p align="center">Created by <a href="https://github.com/shunny2"><b>Alexander Davis</b></a>.</p>
