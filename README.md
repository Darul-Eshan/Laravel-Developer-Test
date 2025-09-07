Laravel CRUD  with SQL Relationships

This project is a Laravel-based assignment where I aimed to demonstrate CRUD operations with proper SQL relationships and maintain clean, structured code. The goal was to practice and showcase practical Laravel skills including database design, Blade templating, middleware usage, and custom authentication.

What I Did

1.Created CRUD operations for Country, State, and City, showing SQL relationships with foreign keys:
    Country → State → City

2.Developed 6 Blade files for add and manage functionalities in the web-admin folder.

3.Created a master layout (master.blade.php) and an include folder for reusable header and sidebar components.

4.Implemented edit, delete, and status toggle for data records.

5.Built a custom login and register template with admin user management from the dashboard.

6.Designed a dashboard with 3 main menus and 6 submenus on the left sidebar for easy navigation.

7.Applied middleware for security and user access control.

How I Did It
1.Used Laravel Blade templates for the frontend layout.
2.Defined foreign key relationships in the database to ensure proper hierarchy:
    State belongs to Country.
    City belongs to State.
3.Handled errors and fixed issues with guidance from ChatGPT and Laravel documentation.
4.Emphasized clean code practices for maintainability.

Note: I wrote most of the code independently, ensuring that I can fully explain every part of it. Some minor error fixes were assisted with ChatGPT. This assignment helped me strengthen both my coding skills and understanding of Laravel project structure.
