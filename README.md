# Front-end for a movie database
A web front-end for a movies database of two related tables, 'Movie' and 'Actor'; I used php, html, css, javascript and sql to develop and design the interface.

This is a skeleton front-end with the usernames/passwords/hosts replaced with a placeholder, but demonstrations can be seen below.

## The Purpose:
Having previously set up a database to hold information about film – including a Movie
and an Actor table – a suitable website is necessary to navigate and update the data:
<br><br>
  Movie(mvID, actId, mvTitle, mvPrice, mvYear, mvGenre)
  <br>
  Actor(actID, actName)
<br>

![image](https://github.com/Tanaya-27/movie-data-front-end/assets/75646651/7cccf2f5-09f1-420c-baaa-8f7d1de0bc97)

In the tables ‘Movie’ and ‘Actor’, the primary keys are mvID and actID respectively.
actID is also a foreign key in the movies table, representing a one-to-many relationship
between them (since one actor can appear in many movies, while in this case each movie
can have at most one actor).
The database, as declared above, might hold a large number of records (many of which
will be linked) and so suitable functionality to search, add, and delete records without the
need to type SQL statements each time will make the database overall more manageable.

## Features
- **HTML** to create the webpage itself

- **CSS** to handle the style and layout (including font, background, colour cheme, images) of the webpages

- **JavaScript** for form validation as well as a "hide bar" function

- **PHP** to collect inputs from the html form and connect to the database with them, performing various database operations with **SQL**
