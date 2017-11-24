## Setting Up a Local Development Environment - Windows ##

 - Install XAMPP
 - Confirm PHP has been added to PATH
 - Install composer
 - Remove default xampp files from `htdocs/`
 - branch and Clone git:hbyses/iris into `_xamppinstalldir_/htdocs/iris`
 - Copy `.env.example` to `.env`
 - Set URL your staging db credentials
 - Edit your hosts file to reflect the url set in `.env`
 - Open a shell in the iris folder and run composer update
 - Open `_xamppinstalldir_/apache/conf/xtra/apache-vhosts.conf`
 - Add this to the bottom
 `<VirtualHost *:80>`
    `DocumentRoot "C:/xampp/htdocs/iris/public"`
    `ServerName iris.dev`
    `<Directory "C:/xampp/htdocs/iris/">`
        `Options +Indexes +followsymlinks`
        `RewriteEngine On`
        `Require all granted`
    `</Directory>`
    `ErrorLog "logs/iris.dev-error.log"`
    `CustomLog "logs/iris.dev-access.log" common`
`</VirtualHost>`