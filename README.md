# CRUDPHP 
##### A simple PHP CRUD application using MySQL to create, read, update and delete records in a database.

## Install

- Clone repository ```git clone https://github.com/Haru-ri/CRUDPHP.git```
- Use sql script to create database and table **./sql/create.sql**
- Edit connection **./config/connect.php**
<pre>
$servername = "localhost";
$username = "user";
$password = "password";
$database = "crudphp";
</pre>

## Usage

- Run the application on the server
- Open index.php page
- DB data will be displayed in the table
- Under the table there is a form for adding data
- The table has update button to change the data
- The table has delete button to delete data