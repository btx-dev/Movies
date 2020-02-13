Runs on XAMPP (Apache, MariaDB, php 7.3) @ localhost:8080

v07

sitemap
-----------------------------------------------
front-end: 
-index.php
-login.php
-movies.php
-signup.php
-search.php

back-end:
-db setup > developer/movies_updated_v06.sql
-db connection > functions/dbconn.php
-login > functions/do_login.php
-signup > functions/do_signup.php
-api call > functions/do_search.php
-insert into db > functions/insert.php
-common header all pages > header.php
-css > style/movieStyle.css


changes on previous versions
-----------------------------------------------
-The database table changed form (attributes).
-insert.php now inserts into the main database table.
-All function elements moved to "functions" folder.
-Common header for all pages (header.php).
-Visual elements on header.php.
-Meta tags for responsive design.
-Added movies table attribute 'Actors'.
-'Actors' attribute display under plot.
-Added movies table attribute 'User'.
-Fixed movies.php if no movies inserted.
-Complete login and user registration system.
-Form validation and password hash.
-Custom navigation menu for user status (logged in, logged out).
-New CSS elements and a few fixes.
-CSS moved to 'style' directory.
-Moved README.txt and .sql files to 'developer' directory.


added this version
-----------------------------------------------
-Comments updated.
-UPDATE and DELETE controls added.
-Added images directory.

