tweet
=====

A Symfony project created on October 26, 2017, 8:59 am.

Manage two resources :

Tweets :

Post a new tweet, with a select list for the author of it
Update a posted tweet
Delete a posted tweet
* I made the CRUD with the EasyAdmin bundle. You can access the admin part from the frontend homepage 
menu or typing /admin in the url. Here you can crate/edit/delete Authors and Tweets
For the first load you can run the simple fixtures I build with the following command: 
php bin/console doctrine:fixtures:load
Please, notice you should create the database first and execute: php bin/console doctrine:schema:update --force
in order to create the database tables regarding the Model


Display a single tweet
* You have this option available when listing all the tweets, clicking on the full text of tweet.
A "single tweet" page will be opened

Display every tweets posted by anyone
* The list can be find on the frontend home page, Every tweet have a link to a single tweet
page and clicking over the Author a new page, where one can see all tweets crated by this author, will be opened.


Author :
Create a new author (with a pseudo and a name it's enough)
* This feature is available within the Admin backend

Display the author profile, with every tweets posted by this author
* This page can be find clicking over the author name in the frontend home page

If you don't have enough time for this, just hardcode some author. The tweet resource is more important than this one.
* I had enough time to build this 

If you have enough time :

A simple and responsive design. CSS framework (Foundation, Bootstrap) are allowed.
* I've used a simple bootstrap template in order to build the frontend

If you know the Model - Views - Controllers (MVC) system, please use it. Even better : use a framework if you can.
* I've used symfony 3.3 to build this project. 
 