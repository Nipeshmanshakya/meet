# Meet

Leapfrog Project in Laravel  

## What we are trying to to

* A user can login / register
* A user can post status
  * A status can have text and a image
* A user can send friend request to another user
  * A friend request can be accepted, ignored, blocked
  * If a friend request is accepted, the users become friend and see their friend's post in feed
* A user can unfriend andd block another user



## Phase 1:
* Completed basic registration and login

## Currently Working:
* Basic Structure
* Database and migration



### Steps to setup

* `cd /path/to/htdocs`
* `git clone https://github.com/Nipeshmanshakya/meet.git [foldername]` options folder name if the folde already exists or whatever
* `cd [foldername]`
* `composer install`
* `php artisan key:generate`
* `php artisan migrate`
