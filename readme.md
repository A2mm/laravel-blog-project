
## This is a Blog system 
________________________________


- Articles or posts are displayed to users ,,, user can view hole post content 
   user can view posts according to their categories through the top navbar


- Admin can add / edit (update) / delete posts and categories and also restore temporarily deleted posts and categories.. 


## How to get started
_______________________

## Installation

    git clone https://github.com/A2mm/blog-project.git
    take copy of .env.example and name it as .env
    run composer install 
    php artisan key:generate


*/*  create database with name blogposts >>>> in .env file


*/*  run php artisan migrate command through your terminal to publish all tables on database 
     ( posts/ categories/ users/ migrations / password_resets) 


*/* seed database tables (posts and categories) with some content   >>>> just run php artisan db:seed 


*/* for now you have anumber of posts and categories on your database tables ,,, however you can read posts and its full content directly.
    but as admin you have to log in to be able to add / edit (update) / delete posts and categories , just register with any name and email and type any test password ... 

*/* then you can add / edit (update) / delete / restore deleted  posts and categories ... 


*/* we can also add live search form using Ajax to search for posts amd categories ...


*/* we can also make ACl (Access Control Level) >>> controling who can  add / edit (update) / delete posts and categories.


## Tools that project used :
____________________________

*/*   Composer 
*/*   HTML 
*/*   CSS 
*/*   Bootstrap Library 
*/*   Jquery Library 
*/*   Ajax technique
*/*   Glyphicons 
*/*   Fontawesome Library
*/*   sweetalert
*/*   PHP 
*/*   OOP 
*/*   Larevel Framework 
*/*   Git bash 


404 page : 
___________
*/*  404 page included as well.