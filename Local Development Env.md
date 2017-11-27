## Setting Up a Local Development Environment - Windows ##

 - Install [XAMPP](https://www.apachefriends.org/)
 - Confirm PHP has been added to PATH
 - Install [Composer](https://getcomposer.org/)
 - Install [Node.js](https://nodejs.org/)
 - Remove default xampp files from `_xamppinstalldir_/htdocs/`
 - Branch and Clone git:hbyses/iris into `_xamppinstalldir_/htdocs/iris`
 - Copy `.env.example` to `.env`
 - In CMD in the Iris root directory run `php artisan key:generate`
 - In `.env` set `APP_URL` your local preferred development URL
 - In `.env` set the `APP_NAME` to Iris
 - Edit your hosts file to reflect the url set in `.env`
 - Open a shell in the iris folder and run `composer update`
 - In the same shell run `npm install`
 - Open `_xamppinstalldir_/apache/conf/xtra/apache-vhosts.conf`
 - Add this to the bottom
 `<VirtualHost *:80>`
    `DocumentRoot "_xamppinstalldir_/htdocs/iris/public"`
    `ServerName YOUR CHOSEN DEV URL HERE`
    `<Directory "_xamppinstalldir_/htdocs/iris/">`
        `Options +Indexes +followsymlinks`
        `Require all granted`
    `</Directory>`
    `ErrorLog "logs/iris-error.log"`
    `CustomLog "logs/iris-access.log" common`
`</VirtualHost>`