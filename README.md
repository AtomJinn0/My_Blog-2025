GitHub Repository: https://github.com/AtomJinn0/My_Blog-2025

##Project Title: Laravel Blog Post CRUD Application

This is a simple Laravel application demonstrating CRUD (Create, Read, Update, Delete) functionality for blog posts. It uses a MySQL database and is styled using Bootstrap.

Installation and Setup

1. Install Visual Studio Code (VS Code)
2. Install Git and create a GitHub account
3. Install Composer (PHP dependency manager)
4. Install XAMPP (includes Apache, MySQL, PhpMyAdmin)

5. Start XAMPP:
   - Launch the XAMPP Control Panel
   - Start both Apache and MySQL
   - Open http://localhost/phpmyadmin and create a database (e.g., Myblog_db)

6. Run migrations and seed the database:
   php artisan migrate --seed

7. Start the local development server:
   php artisan serve

#Blade Views 

The application uses a master layout from app.blade.php and follows consistent styling like home.blade.php. Three main views were created for:

- post listing (index.blade.php)
- creating new posts (create.blade.php)
- editing existing posts (edit.blade.php)

Each view was designed to resemble the reference layout provided in the starter template while maintaining uniqueness. Elements such as button labels, section headers, and layout spacing were adjusted to ensure it doesn’t exactly replicate the template or any other submission.

#Approach

The project was developed using Laravel's built-in artisan tools. Routes were defined using web.php. The PostController handles CRUD logic. Migrations created the posts table. A factory and seeder were used to insert 10 dummy posts. Views were implemented using Blade templates with Bootstrap 5 for styling.

#Challenges Faced

- Ensuring the blade views followed the template styling.
- Configuring and launching XAMPP correctly before working with the database.

#Final Notes

All features were tested for correctness:
- Creating new posts
- Editing existing posts
- Deleting posts

The project was version-controlled using Git and pushed to GitHub.
