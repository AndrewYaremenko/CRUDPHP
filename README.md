# CRUDPHP 
##### A simple PHP CRUD application using MySQL to create, read, update and delete records in a database.
##### The application is built on data management over two tables, related keys and a cascade.

###### The project was created to consolidate knowledge in PHP, connection with the database through the MySQLi module

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
- The table has update button to change the product
- The table has comments button to add or delete comments for products
- The table has delete button to delete products

### Video presentation 
[Link to Youtube](https://youtu.be/x2WNPHeKRQY)