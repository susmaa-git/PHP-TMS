
Run the project:
localhost/php-tms

create folders and files
admin
    layouts/includes
        header.php
        navbar.php
        footer.php
    
    connection/config
        config.php
    
    users
        create.php
        index.php
        view.php
        edit.php
        delete.php
    
    index.php (login form)
    register.php
    dashboard.php





Database Name: tms
table Name     : users
table Name     : teachers
table Name     : faculties
table Name     : programs
table Name     : students
table Name     : tasks


users:
id | name | phone | email | password | status | created_at | updated_at
INT | VARCHAR (50) | VARCHAR(15) | VARCHAR(50) | TEXT | INT DEFAULT (AS DEFINE: 1) | TIMESTAMP DEFAULT(CURRENT_TIMESTAMP) | TIMESTAMP DEFAULT(CURRENT_TIMESTAMP)