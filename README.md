<p align="center"><a href="https://thetalent4u.com" target="_blank"><img src="public/website/assets/images/logo-1-2.png" width="200" height="200" alt="Laravel Logo"></a></p>

## About
Talent4u is a job portal that connects employers and job seekers. We are a platform that helps employers find the right talent and job seekers find the right job. We are a platform that connects employers and job seekers. We are a platform that helps employers find the right talent and job seekers find the right job.

## Packages used:
- [Laravel 10.x](https://laravel.com/docs/10.x)
- [Filamentphp](https://filamentphp.com/docs/3.x/panels/installation)
- [Livewire](https://livewire.laravel.com/)

## Run Project
- `composer install`
- `cp .env.example .env`
- `php artisan key:generate`
- `php artisan shield:generate`
- `php artisan migrate:fresh --seed`
- **Edit `.env` file** and change the QUEUE_CONNECTION
    ```
    QUEUE_CONNECTION=database
    ```
## Supervisor for queue and CronJob configuration
#### _Supervisor_:
1. Install supervisor:
    ```
    sudo apt-get install supervisor
    ```
2. Configure supervisor
    ```
    cd /etc/supervisor/conf.d
    nano laravel-worker.conf
    ```
3. Paste the following code _**(Modify as per required)**_
    ```
    [program:laravel-worker]
    process_name=%(program_name)s_%(process_num)02d
    command=php <path to project>/artisan queue:work database --sleep=3 --tries=3 --max-time=3600
    autostart=true
    autorestart=true
    stopasgroup=true
    killasgroup=true
    user=<username>
    numprocs=8
    redirect_stderr=true
    stdout_logfile=/home/reuben/supervisorLog/worker.log
    stopwaitsecs=3600
    ```
4. Start supervisor
    ```
    sudo supervisorctl reload
    sudo supervisorctl update
    sudo supervisorctl start "laravel-worker:*"
    ```
#### _Crontab_:
1. Edit crontab
    ```
    sudo crontab -e
    ```
    If you are prompted with:
    ```
    no crontab for root - using an empty one

    Select an editor.  To change later, run 'select-editor'.
    1. /bin/nano        <---- easiest
    2. /usr/bin/vim.tiny
    3. /bin/ed

    Choose 1-3 [1]:
    ```
    Choose which ever editor is convenient for you by typing the corresponding number.

2. Paste the following at the end of the file
    ```
    * * * * * cd <path_to_project> && php artisan schedule:run >> /dev/null 2>&1
    ```
    #   f u n d r a i s e r - p r o j e c t  
 