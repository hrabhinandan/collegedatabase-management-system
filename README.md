# collegedatabase-management-system

# Installation Process

Clone from github : `$ git clone git@github.com:BDMADE/college.git`

Move in college local repository : `$ cd college`

Install bundler : `$ gem install bundler`

Install college : `$ bundle install`

Database creation : `$ rake db:create`

Database migrate : `$ rake db:migrate`

Database seed : `$ rake db:seed`

Run server : `$ rails server` or `$ rails s`


by using php and mysqli with html

# College Database System

This is a Java app which uses MySQL to manage core tasks in a college like viewing students' data, calculating GPA per semester, grading, checking scores per subject for faculties etc.

SQL concepts that are used:
1. Basic operations: INSERT, UPDATE, DELETE, SELECT, JOIN
2. Clauses: WHERE, AND, GROUP BY, HAVING etc
3. Operations on tables: CREATE, ALTER, Foreign Key Constraints
4. Triggers, Stored Procedures
5. Indexes


# Running the application

## Set up the database

> **Note:** You must have MySQL server and client installed on your PC.

Open the MySQL console, and create an empty database `college_database`. You can use the command
`create database college_database;`
`use college_database;`

Then run the command `source <path-to-directory>/college_database.sql`

This file contains the SQL commands to set up all the required tables with some sample data.

## Compilation

`cd`  into the `src` directory, and execute
`javac -d ../bin/ -cp .:../mysql-connector-java-5.1.38.jar Main.java`

This will create a new `bin` directory where the class files will be generated. mysql-connector is the SQL JDBC client which is used to connect to the SQL server.

> If you're on Windows, you might need to use
> `javac -d ..\bin\ -cp .;..\mysql-connector-java-5.1.38.jar Main.java`

## Execution

`cd`  into the `bin` directory, and execute
`java -cp .:../mysql-connector-java-5.1.38.jar Main`

> If you're on Windows, you might need to use
> `java -cp .;..\mysql-connector-java-5.1.38.jar Main`


# Troubleshooting

- If your get an access denied error, make sure the username and password for your MySQL server are correct. The default username is `root` and there is no password. You might need to change these values in `Main.java`. Or you can follow this [tutorial](https://medium.com/@chiragpatel_52497/solved-error-access-denied-for-user-root-localhost-of-mysql-programming-school-6e3611838d06).



### Snapshots:-

![1](https://user-images.githubusercontent.com/96574240/215112538-ff6e4115-2774-43a9-9194-456e80128183.png)
![2](https://user-images.githubusercontent.com/96574240/215112572-b5d0460b-0953-4c14-993c-0b1e51f91013.png)
![3](https://user-images.githubusercontent.com/96574240/215112599-34358faa-5b3b-45fb-948f-0e2854f6cc88.png)
![4](https://user-images.githubusercontent.com/96574240/215112612-17eb3409-218d-487c-b036-427dc39a2be5.png)
