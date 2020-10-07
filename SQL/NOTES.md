# Notes

## What is Database?

A database is an organized collection of structured information, or data, typically stored electronically in a computer system. A database is usually controlled by a database management system (DBMS). Together, the data and the DBMS, along with the applications that are associated with them, are referred to as a database system, often shortened to just database.

Data within the most common types of databases in operation today is typically modeled in rows and columns in a series of tables to make processing and data querying efficient. The data can then be easily accessed, managed, modified, updated, controlled, and organized. Most databases use structured query language (SQL) for writing and querying data.

## What is SQL?

SQL is Structured Query Language, which is a computer language for storing, manipulating and retrieving data stored in a relational database.

SQL is the standard language for Relational Database System. All the Relational Database Management Systems (RDMS) like MySQL, MS Access, Oracle, Sybase, Informix, Postgres and SQL Server use SQL as their standard database language.

Every table is broken up into smaller entities called fields. The fields in the Customers table consist of CustomerID, CustomerName, Address, City, PostalCode and Country. A field is a column in a table that is designed to maintain specific information about every record in the table.

A record, also called a row, is each individual entry that exists in a table. For example, there are 91 records in the above Customers table. A record is a horizontal entity in a table.

A column is a vertical entity in a table that contains all information associated with a specific field in a table.

## Why SQL?

SQL is widely popular because it offers the following advantages −

- Allows users to access data in the relational database management systems.
- Allows users to describe the data.
- Allows users to define the data in a database and manipulate that data.
- Allows to embed within other languages using SQL modules, libraries & pre-compilers.
- Allows users to create and drop databases and tables.
- Allows users to create view, stored procedure, functions in a database.
- Allows users to set permissions on tables, procedures and views.

## A Brief History of SQL

- **1970** − Dr. Edgar F. "Ted" Codd of IBM is known as the father of relational databases. He described a relational model for databases.
- **1974** − Structured Query Language appeared.
- **1978** − IBM worked to develop Codd's ideas and released a product named System/R.
- **1986** − IBM developed the first prototype of relational database and standardized by ANSI. The first relational database was released by Relational Software which later came to be known as Oracle.

## Some of The Most Important SQL Commands

- **SELECT** - extracts data from a database
- **UPDATE** - updates data in a database
- **DELETE** - deletes data from a database
- **INSERT INTO** - inserts new data into a database
- **CREATE DATABASE** - creates a new database
- **ALTER DATABASE** - modifies a database
- **CREATE TABLE** - creates a new table
- **ALTER TABLE** - modifies a table
- **DROP TABLE** - deletes a table
- **CREATE INDEX** - creates an index (search key)
- **DROP INDEX** - deletes an index

## Tables

[Customers](https://www.notion.so/748816ca758e4ae6abbb987b31b0fd92)

## **Select Statement eg. 1**

**Syntax**

```sql
select column1, column2, ...
from table_name;
```

Here, column1, column2, ... are the field names of the table you want to select data from. If you want to select all the fields available in the table, use the following syntax:

```sql
select * from table_name;
```

Example 1.1

```sql
select * from customers;
```

Output

```sql
+-----+-------------------+------------------------------+-------------+-------------+-----------+
| id  | CustomerName      | address                      | city        | PostalCode  | country   |
+-----+-------------------+------------------------------+-------------+-------------+-----------+
|   1 | Aniket Hake       | Saptashrungi society, N7     | Aurangabad  | 431003      | India     |
|   2 | Parag Chirde      | A10/2 Vekanand society, N4   | Aurangabad  | 431003      | India     |
|   3 | Shubham Padamwar  | 99 Kasliwal Bhagyoday        | Pune        | 411002      | India     |
|   4 | Garrick Mohan     | 0 Arkansas Junction          | Suez        | NULL        | Egypt     |
|   5 | Rois Snelgrove    | 35 Eggendart Parkway         | P?ock       | 09-410      | Poland    |
+-----+-------------------+------------------------------+-------------+-------------+-----------+
```

 Example 1.2

```sql
select CustomerName, city, country from customers;
```

Output

```sql
+------------------------+---------------------------+------------------+
| CustomerName           | city                      | country          |
+------------------------+---------------------------+------------------+
| Aniket Hake            | Aurangabad                | India            |
| Parag Chirde           | Aurangabad                | India            |
| Shubham Padamwar       | Pune                      | India            |
| Garrick Mohan          | Suez                      | Egypt            |
| Rois Snelgrove         | P?ock                     | Poland           |
+------------------------+---------------------------+------------------+
```

## Select Distinct Statement eg. 2

The SELECT DISTINCT statement is used to return only distinct (different) values.

Inside a table, a column often contains many duplicate values; and sometimes you only want to list the different (distinct) values.

**Syntax**

```sql
select distinct column1, column2, ...
from table_name;
```

Example 2.1

```sql
SELECT DISTINCT Country FROM Customers;
```

Output

```sql
+------------------+
| Country          |
+------------------+
| India            |
| Egypt            |
| Poland           |
+------------------+
```

## Where Clause eg. 3

The WHERE clause is used to filter records.

The WHERE clause is used to extract only those records that fulfill a specified condition.

**Syntax**

```sql
SELECT column1, column2, ...
FROM table_name
WHERE condition;
```

Example 3.1

```sql
select * from customers where Country = 'India';
```

Output

```sql
+----+------------------+----------------------------+------------+------------+---------+
| id | CustomerName     | address                    | city       | PostalCode | country |
+----+------------------+----------------------------+------------+------------+---------+
|  1 | Aniket Hake      | Saptashrungi society, N7   | Aurangabad | 431003     | India   |
|  2 | Parag Chirde     | A10/2 Vekanand society, N4 | Aurangabad | 431003     | India   |
|  3 | Shubham Padamwar | 99 Kasliwal Bhagyoday      | Pune       | 411002     | India   |
+----+------------------+----------------------------+------------+------------+---------+
```

## SQL AND, OR and NOT OperatorE eg. 4

The WHERE clause can be combined with AND, OR, and NOT operators.

The AND and OR operators are used to filter records based on more than one condition:

- The AND operator displays a record if all the conditions separated by AND are TRUE.
- The OR operator displays a record if any of the conditions separated by OR is TRUE.

The NOT operator displays a record if the condition(s) is NOT TRUE.

**And Syntax**

```sql
SELECT column1, column2, ...
FROM table_name
WHERE condition1 AND condition2 AND condition3 ...;
```

**OR Syntax**

```sql
SELECT column1, column2, ...
FROM table_name
WHERE condition1 OR condition2 OR condition3 ...;
```

**NOT Syntax**

```sql
SELECT column1, column2, ...
FROM table_name
WHERE NOT condition;
```

Example 4.1

```sql
select * from customers where country = 'India' and city = 'Aurangabad';
```

Output

```sql
+----+--------------+----------------------------+------------+------------+---------+
| id | CustomerName | address                    | city       | PostalCode | country |
+----+--------------+----------------------------+------------+------------+---------+
|  1 | Aniket Hake  | Saptashrungi society, N7   | Aurangabad | 431003     | India   |
|  2 | Parag Chirde | A10/2 Vekanand society, N4 | Aurangabad | 431003     | India   |
+----+--------------+----------------------------+------------+------------+---------+
```

Example 4.2

```sql
select * from customers where city = 'Pune' or city = 'Suez';
```

Output

```sql
+----+------------------+-----------------------+------+------------+---------+
| id | CustomerName     | address               | city | PostalCode | country |
+----+------------------+-----------------------+------+------------+---------+
|  3 | Shubham Padamwar | 99 Kasliwal Bhagyoday | Pune | 411002     | India   |
|  4 | Garrick Mohan    | 0 Arkansas Junction   | Suez | NULL       | Egypt   |
+----+------------------+-----------------------+------+------------+---------+
```

Example 4.3

```sql
select * from customers where not Country = 'India';
```

Output

```sql
+-----+-----------------+-----------------------+---------+-------------+----------+
| id  | CustomerName    | address               | city    | PostalCode  | country  |
+-----+-----------------+-----------------------+---------+-------------+----------+
|   4 | Garrick Mohan   | 0 Arkansas Junction   | Suez    | NULL        | Egypt    |
|   5 | Rois Snelgrove  | 35 Eggendart Parkway  | P?ock   | 09-410      | Poland   |
+-----+-----------------+-----------------------+---------+-------------+----------+
```

Example 4.4

You can also combine the AND, OR and NOT operators.

```sql
	select * from customers where Country = 'India' and 
	( city = 'Aurangabad' or city = 'Pune' );
```

Output

```sql
+----+------------------+----------------------------+------------+------------+---------+
| id | CustomerName     | address                    | city       | PostalCode | country |
+----+------------------+----------------------------+------------+------------+---------+
|  1 | Aniket Hake      | Saptashrungi society, N7   | Aurangabad | 431003     | India   |
|  2 | Parag Chirde     | A10/2 Vekanand society, N4 | Aurangabad | 431003     | India   |
|  3 | Shubham Padamwar | 99 Kasliwal Bhagyoday      | Pune       | 411002     | India   |
+----+------------------+----------------------------+------------+------------+---------+
```

### The SQL ORDER BY Keyword eg 5

The ORDER BY keyword is used to sort the result-set in ascending or descending order.

The ORDER BY keyword sorts the records in ascending order by default. To sort the records in descending order, use the DESC keyword.

**Syntax**

```sql
SELECT column1, column2, ...
FROM table_name
ORDER BY column1, column2, ... ASC|DESC;
```

Example 5.1

```sql
SELECT * FROM Customers ORDER BY Country;
```

Output

```sql
+----+-------------------+----------------------------+------------+------------+---------+
| id | CustomerName      | address                    | city       | PostalCode | country |
+----+-------------------+----------------------------+------------+------------+---------+
|  4 | Garrick Mohan     | 0 Arkansas Junction        | Suez       | NULL       | Egypt   |
|  1 | Aniket Hake       | Saptashrungi society, N7   | Aurangabad | 431003     | India   |
|  2 | Parag Chirde      | A10/2 Vekanand society, N4 | Aurangabad | 431003     | India   |
|  3 | Shubham Padamwar  | 99 Kasliwal Bhagyoday      | Pune       | 411002     | India   |
|  5 | Rois Snelgrove    | 35 Eggendart Parkway       | P?ock      | 09-410     | Poland  |
+----+-------------------+----------------------------+------------+------------+---------+
```

Example 5.2

```sql
SELECT * FROM Customers ORDER BY Country DESC;
```

Output

```sql
+----+--------------------+----------------------------+------------+------------+---------+
| id | CustomerName       | address                    | city       | PostalCode | country |
+----+--------------------+----------------------------+------------+------------+---------+
|  5 | Rois Snelgrove     | 35 Eggendart Parkway       | P?ock      | 09-410     | Poland  |
|  1 | Aniket Hake        | Saptashrungi society, N7   | Aurangabad | 431003     | India   |
|  2 | Parag Chirde       | A10/2 Vekanand society, N4 | Aurangabad | 431003     | India   |
|  3 | Shubham Padamwar   | 99 Kasliwal Bhagyoday      | Pune       | 411002     | India   |
|  4 | Garrick Mohan      | 0 Arkansas Junction        | Suez       | NULL       | Egypt   |
+----+--------------------+----------------------------+------------+------------+---------+
```

Example. 5.3

```sql
SELECT * FROM Customers ORDER BY Country ASC, CustomerName DESC;
```

Output

```sql
+----+--------------------+----------------------------+------------+------------+---------+
| id | CustomerName       | address                    | city       | PostalCode | country |
+----+--------------------+----------------------------+------------+------------+---------+
|  4 | Garrick Mohan      | 0 Arkansas Junction        | Suez       | NULL       | Egypt   |
|  3 | Shubham Padamwar   | 99 Kasliwal Bhagyoday      | Pune       | 411002     | India   |
|  2 | Parag Chirde       | A10/2 Vekanand society, N4 | Aurangabad | 431003     | India   |
|  1 | Aniket Hake        | Saptashrungi society, N7   | Aurangabad | 431003     | India   |
|  5 | Rois Snelgrove     | 35 Eggendart Parkway       | P?ock      | 09-410     | Poland  |
+----+--------------------+----------------------------+------------+------------+---------+
```

## SQL INSERT INTO Statement eg.6

The INSERT INTO statement is used to insert new records in a table.

**Syntax**

```sql
INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...);
```

> If you are adding values for all the columns of the table, you do not need to specify the column names in the SQL query. However, make sure the order of the values is in the same order as the columns in the table.

**The INSERT INTO syntax would be as follows:**

```sql
INSERT INTO table_name
VALUES (value1, value2, value3, ...);
```

Example 6.1

```sql
INSERT INTO customers (CustomerName, address, city, state, PostalCode, country) 
VALUES ( 'Jaideep Khedekar', 'bypass', 'Mumbai'  '56789', 'India');
```

Output 

```sql
+----+-------------------+------------------------------+-------------+-------------+-----------+
| id | CustomerName      | address                      | city        | PostalCode  | country   |
+----+-------------------+------------------------------+-------------+-------------+-----------+
|  1 | Aniket Hake       | Saptashrungi society, N7     | Aurangabad  | 431003      | India     |
|  2 | Parag Chirde      | A10/2 Vekanand society, N4   | Aurangabad  | 431003      | India     |
|  3 | Shubham Padamwar  | 99 Kasliwal Bhagyoday        | Pune        | 411002      | India     |
|  4 | Garrick Mohan     | 0 Arkansas Junction          | Suez        | NULL        | Egypt     |
|  5 | Rois Snelgrove    | 35 Eggendart Parkway         | P?ock       | 09-410      | Poland    |
|  6 | Jaideep Khedekar  | bypass                       | Mumbai      | 56789       | India     |
+----+-------------------+------------------------------+-------------+-------------+-----------+
```

## SQL CREATE TABLE Statement eg.7

The CREATE TABLE statement is used to create a new table in a database.

**Syntax**

```sql
CREATE TABLE table_name (
    column1 datatype,
    column2 datatype,
    column3 datatype,
   ....
);
```

Each column in a database table is required to have a name and a data type.

Example 7.1

Table in database

```sql
show tables;

+--------------------+
| Tables_in_learning |
+--------------------+
| customers          |
+--------------------+
```

```sql
create table persons(
  personID int,
  last_name varchar(255),
  first_name varchar(255),
  address varchar(255),
  city varchar(255),
  state varchar(255),
  zip_code int,
);
```

Output

```sql
show tables;

+--------------------+
| Tables_in_learning |
+--------------------+
| customers          |
| persons            |
+--------------------+
```

## SQL ALTER TABLE Statement eg.8

The ALTER TABLE statement is used to add, delete, or modify columns in an existing table.

The ALTER TABLE statement is also used to add and drop various constraints on an existing table.

### ALTER TABLE - ADD Column

To add a column in a table, use the following syntax:

```sql
ALTER TABLE table_name
ADD column_name datatype;
```

Example 8.1

The following SQL adds an "Email" column to the "Persons" table:

```sql
EXPLAIN persons
//show details about the table
+------------+--------------+------+-----+--------------+-------+
| Field      | Type         | Null | Key | Default      | Extra |
+------------+--------------+------+-----+--------------+-------+
| personID   | int          | YES  |     | NULL         |       |
| first_name | varchar(255) | YES  |     | NULL         |       |
| last_name  | varchar(255) | YES  |     | NULL         |       |
| address    | varchar(255) | YES  |     | NULL         |       |
| contact    | int          | YES  |     | NULL         |       |
| city       | varchar(255) | YES  |     | NULL         |       |
| state      | varchar(255) | YES  |     | NULL         |       |
| zip_code   | int          | YES  |     | NULL         |       |
+------------+--------------+------+-----+--------------+-------+
```

```sql
ALTER TABLE persons ADD COLUMN email varchar(255);
```

Output

```sql
EXPLAIN persons 
//show details about the table
+------------+--------------+------+-----+--------------+-------+
| Field      | Type         | Null | Key | Default      | Extra |
+------------+--------------+------+-----+--------------+-------+
| personID   | int          | YES  |     | NULL         |       |
| first_name | varchar(255) | YES  |     | NULL         |       |
| last_name  | varchar(255) | YES  |     | NULL         |       |
| address    | varchar(255) | YES  |     | NULL         |       |
| contact    | int          | YES  |     | NULL         |       |
| city       | varchar(255) | YES  |     | NULL         |       |
| state      | varchar(255) | YES  |     | NULL         |       |
| zip_code   | int          | YES  |     | NULL         |       |
| email      | varchar(255) | YES  |     | NULL         |       |
+------------+--------------+------+-----+--------------+-------+
```

### ALTER TABLE - ALTER/MODIFY COLUMN

```sql
ALTER TABLE table_name
MODIFY COLUMN column_name datatype;
```

The following SQL modify email column change data-type varchar(255) to varchar(200)

```sql
EXPLAIN persons
//show details about the table
+------------+--------------+------+-----+--------------+-------+
| Field      | Type         | Null | Key | Default      | Extra |
+------------+--------------+------+-----+--------------+-------+
| personID   | int          | YES  |     | NULL         |       |
| first_name | varchar(255) | YES  |     | NULL         |       |
| last_name  | varchar(255) | YES  |     | NULL         |       |
| address    | varchar(255) | YES  |     | NULL         |       |
| contact    | int          | YES  |     | NULL         |       |
| city       | varchar(255) | YES  |     | NULL         |       |
| state      | varchar(255) | YES  |     | NULL         |       |
| zip_code   | int          | YES  |     | NULL         |       |
| email      | varchar(255) | YES  |     | NULL         |       |
+------------+--------------+------+-----+--------------+-------+
```

```sql
ALTER TABLE persons MODIFY COLUMN email varchar(200);
```

Output

```sql
EXPLAIN persons
//show details about the table
+------------+--------------+------+-----+--------------+-------+
| Field      | Type         | Null | Key | Default      | Extra |
+------------+--------------+------+-----+--------------+-------+
| personID   | int          | YES  |     | NULL         |       |
| first_name | varchar(255) | YES  |     | NULL         |       |
| last_name  | varchar(255) | YES  |     | NULL         |       |
| address    | varchar(255) | YES  |     | NULL         |       |
| contact    | int          | YES  |     | NULL         |       |
| city       | varchar(255) | YES  |     | NULL         |       |
| state      | varchar(255) | YES  |     | NULL         |       |
| zip_code   | int          | YES  |     | NULL         |       |
| email      | varchar(200) | YES  |     | NULL         |       |
+------------+--------------+------+-----+--------------+-------+
```

### ALTER TABLE - DROP COLUMN

To delete a column in a table, use the following syntax (notice that some database systems don't allow deleting a column):

Use the following Syntax :

```sql
ALTER TABLE table_name
DROP COLUMN column_name;
```

Example 8.3

SQL deletes the "Email" column from the "persons" table

```sql
EXPLAIN persons
//show details about the table
+------------+--------------+------+-----+--------------+-------+
| Field      | Type         | Null | Key | Default      | Extra |
+------------+--------------+------+-----+--------------+-------+
| personID   | int          | YES  |     | NULL         |       |
| first_name | varchar(255) | YES  |     | NULL         |       |
| last_name  | varchar(255) | YES  |     | NULL         |       |
| address    | varchar(255) | YES  |     | NULL         |       |
| contact    | int          | YES  |     | NULL         |       |
| city       | varchar(255) | YES  |     | NULL         |       |
| state      | varchar(255) | YES  |     | NULL         |       |
| zip_code   | int          | YES  |     | NULL         |       |
| email      | varchar(200) | YES  |     | NULL         |       |
+------------+--------------+------+-----+--------------+-------+
```

```sql
ALTER TABLE persons
DROP COLUMN email;
```

Output

```sql
EXPLAIN persons
//show details about the table
+------------+--------------+------+-----+--------------+-------+
| Field      | Type         | Null | Key | Default      | Extra |
+------------+--------------+------+-----+--------------+-------+
| personID   | int          | YES  |     | NULL         |       |
| first_name | varchar(255) | YES  |     | NULL         |       |
| last_name  | varchar(255) | YES  |     | NULL         |       |
| address    | varchar(255) | YES  |     | NULL         |       |
| contact    | int          | YES  |     | NULL         |       |
| city       | varchar(255) | YES  |     | NULL         |       |
| state      | varchar(255) | YES  |     | NULL         |       |
| zip_code   | int          | YES  |     | NULL         |       |
+------------+--------------+------+-----+--------------+-------+
```

## Create Constraints eg.9

Constraints can be specified when the table is created with the CREATE TABLE statement, or after the table is created with the ALTER TABLE statement.

```sql
CREATE TABLE table_name (
    column1 datatype constraint,
    column2 datatype constraint,
    column3 datatype constraint,
    ....
);
```

### The following constraints are commonly used in SQL:

- **NOT NULL** - Ensures that a column cannot have a NULL value
- **UNIQUE** - Ensures that all values in a column are different
- **PRIMARY KEY** - A combination of a NOT NULL and UNIQUE. Uniquely identifies each row in a table
- **FOREIGN KEY** - Uniquely identifies a row/record in another table
- **CHECK** - Ensures that all values in a column satisfies a specific condition
- **DEFAULT** - Sets a default value for a column when no value is specified
- **INDEX** - Used to create and retrieve data from the database very quickly

Example 9.1

```sql
EXPLAIN persons
+------------+--------------+------+-----+--------------+-------+
| Field      | Type         | Null | Key | Default      | Extra |
+------------+--------------+------+-----+--------------+-------+
| personID   | int          | YES  |     | NULL         |       |
| first_name | varchar(255) | YES  |     | NULL         |       |
| last_name  | varchar(255) | YES  |     | NULL         |       |
| address    | varchar(255) | YES  |     | NULL         |       |
| contact    | int          | YES  |     | NULL         |       |
| city       | varchar(255) | YES  |     | NULL         |       |
| state      | varchar(255) | YES  |     | NULL         |       |
| zip_code   | int          | YES  |     | NULL         |       |
+------------+--------------+------+-----+--------------+-------+
```

```sql
ALTER TABLE persons ADD COLUMN email varchar(255) NOT NULL UNIQUE;
```

Output

```sql
EXPLAIN persons
+------------+--------------+------+-----+--------------+-------+
| Field      | Type         | Null | Key | Default      | Extra |
+------------+--------------+------+-----+--------------+-------+
| personID   | int          | YES  |     | NULL         |       |
| first_name | varchar(255) | YES  |     | NULL         |       |
| last_name  | varchar(255) | YES  |     | NULL         |       |
| address    | varchar(255) | YES  |     | NULL         |       |
| contact    | int          | YES  |     | NULL         |       |
| city       | varchar(255) | YES  |     | NULL         |       |
| state      | varchar(255) | YES  |     | NULL         |       |
| zip_code   | int          | YES  |     | NULL         |       |
| email      | varchar(255) | NO   |     | NULL         |       |
+------------+--------------+------+-----+--------------+-------+
```

## The SQL SELECT TOP Clause eg.10

The SELECT TOP clause is used to specify the number of records to return.

The SELECT TOP clause is useful on large tables with thousands of records. Returning a large number of records can impact performance.

> **Note**: Not all database systems support the SELECT TOP clause. MySQL supports the LIMIT clause to select a limited number of records, while Oracle uses ROWNUM.

### SELECT LIMIT Clause

We use LIMIT clause to select a limited number of records.

Syntax

```sql
SELECT column_name(s)
FROM table_name
WHERE condition
LIMIT number;
```

Example 10.1

```sql
SELECT * FROM customer LIMIT 2;
```

Output 

```sql
+----+-------------------+------------------------------+-------------+-------------+-----------+
| id | CustomerName      | address                      | city        | PostalCode  | country   |
+----+-------------------+------------------------------+-------------+-------------+-----------+
|  1 | Aniket Hake       | Saptashrungi society, N7     | Aurangabad  | 431003      | India     |
|  2 | Parag Chirde      | A10/2 Vekanand society, N4   | Aurangabad  | 431003      | India     |
+----+-------------------+------------------------------+-------------+-------------+-----------+
```

### SELECT OFFSET Clause

The OFFSET is the number of rows to skip before including them in the result.

The SQL query below says "return only 2 records, start on record 5 (OFFSET 4)":

Example 10.2

```sql
SELECT * FROM customers LIMIT 2 OFFSET 4;
```

Output

```sql
+----+-------------------+------------------------------+-------------+-------------+-----------+
| id | CustomerName      | address                      | city        | PostalCode  | country   |
+----+-------------------+------------------------------+-------------+-------------+-----------+
|  5 | Rois Snelgrove    | 35 Eggendart Parkway         | P?ock       | 09-410      | Poland    |
|  6 | Jaideep Khedekar  | bypass                       | Mumbai      | 56789       | India     |
+----+-------------------+------------------------------+-------------+-------------+-----------+
```

## The SQL DROP TABLE Statement eg.11

The DROP TABLE statement is used to drop an existing table in a database.

**Syntax**

```sql
DROP TABLE table_name;
```

 Example 11.1

```sql
show tables;

+--------------------+
| Tables_in_learning |
+--------------------+
| customers          |
| persons            |
+--------------------+
```

```sql
DROP table persons;
```

Output

```sql
show tables;

+--------------------+
| Tables_in_learning |
+--------------------+
| customers          |
+--------------------+
```