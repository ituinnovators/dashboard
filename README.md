# ITU Innovators Dashboard project

Simple single-page entrance to all the online services at ITU (widgetized with /links to the websites). 

Built on CakePHP for the backend with jQuery, CSS3, HTML5 and plenty of utils on the front-end. Hosted at a dedicated unix server on Linode. GitHub used for code rep and deployment/CI.

Requirements:
- PHP5x
- MySQL or equivalent
- Apache/webserver w/ htaccess and mod_rewrite support
- a kick-ass webbrowser! (you know which)
- phpMyAdmin or equivalent can be useful

http://itu-innovators.dk

itu-dashboard
v0.1 BETA

## Quick start

1. git clone git@github.com:ituinnovators/dashboard.git
2. mysqladmin -u root -p create itu-dashboard
3. cp app/config/database.php.default app/config/database.php
4. EDIT AND UPDATE database.php
5. cake/console/cake schema generate (OR create???)

## Get started from scratch (detailed)

1. make a local dir 'itu-project' for the project (apache/webserver needs access to here)
1. git clone the project to your local project dir ('git clone git@github.com:ituinnovators/dashboard.git')
2. create an empty MySQL DB called 'itu-dashboard' (no tables, just the DB)
3. copy app/config/database.php.default to app/config/database.php
5. edit database.php with your own local DB info
7. from your project dir, run 'cake/console/cake schema create', select y & y when asked
9. now you have a DB with all the tables needed including a little data
10. kick up your browser and you're baking baby!

mysqladmin path in MAMP (OSX):
/Applications/MAMP/Library/bin/mysqladmin

add this to database for MAMP (OSX) to work:
'port' => '/Applications/MAMP/tmp/mysql/mysql.sock',

default login:
user: admin
pass: admin