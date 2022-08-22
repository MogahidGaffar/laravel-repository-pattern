
<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/othneildrew/Best-README-Template">
    <img src="https://github.com/MogahidGaffar/laravel-repository-pattern/blob/main/public/images/repository_pattern.png" alt="Logo" >
  </a>

  <h3 align="center">CRUD App using repository pattern in Laravel </h3>


</div>





<!-- ABOUT THE PROJECT -->
## About The Project

<h5> Repository pattern is a kind of container where data access logic is stored. It hides the details of data access logic from business logic. 
The Repository Pattern is one of the most discussed patterns due to many conflicts with ORMs. This pattern is often used as an abstraction layer to interact with the database. Yet, since the ORMs serve the same purpose, many developers get confused. </h5>
<br/>

<img src="https://github.com/MogahidGaffar/laravel-repository-pattern/blob/main/public/images/app_screenshot.png" />

###  CRUD Example with Repository Design Pattern in Laravel

How and why we implemented the “Repository Pattern” in our PHP backend :
* to drastically reduce code duplication.
* change the database – but ORMs are already designed for this
* Change the ORM – Changing the ORM is such a drastic step that in 99% of the cases where it happens, it’s because you have to change the whole framework you work with. Or you even need to completely change technology. If you have a plan for this approach, the Repository Pattern is the least of your problems. In this case, you are over-engineering your code.

* You may have some complex query that you need to call from different place in your code
* You may need to implement custom actions on an entity model. Ones that perform some data manipulation statements moving data from/to the database
* Embrace new technologies like cache systems on top of your standard connection with the SQL database.
* We have several custom actions on various models that we want to group in a central place instead of repeating them in different parts of the code
* We want to add a cache layer on top of the database to increase performance.

##  Built With

* Laravel
* Bootstrap
* Baldes
* Mysql DB



## Contact

Mogahid Gaffar -  mogahidgaffar@gmail.com



<!-- GETTING STARTED -->
## Getting Started

This is an example of how you may give instructions on setting up your project locally.
To get a local copy up and running follow these simple example steps.


### Installation

_Below is an example of how you can instruct your audience on installing and setting up your app

 1. Clone the repo
   ```sh
  gh repo clone MogahidGaffar/laravel-repository-pattern
   ```
2. Install NPM packages
   ```sh
   npm install
   ```
3. composer update
   ```sh
   composer update
   ```

4. Database Migrattion
   ```sh
php artisan migrate
```




