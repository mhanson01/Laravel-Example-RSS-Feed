## Laravel Example RSS Feed

### Post Cloning

* Update app/config/database.php to the correct database credentials
* Run composer install
* Update app/storage folder permissions
* Run php artisan migrate --seed

### Files to review for this project

* composer.json
* app/routes.php
* app/helpers.php
* app/config/database.php
* app/controller/RssController.php
* app/database/migrations/*_create_posts_table.php
* app/database/seeds/DatabaseSeeder.php
* app/database/seeds/PostTableSeeder.php
* app/models/Post.php
* app/views/rss.blade.php

## Mark Hanson's website

Additional examples for the Laravel framework can be found on [Mark Hanson's personal site](http://mhanson01.com).
