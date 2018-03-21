Last login: Wed Mar 21 10:12:20 on ttys001
bash -c "clear && docker exec -it lamp sh"
6272s-Mac-mini-9:~ 6272user$ bash -c "clear && docker exec -it lamp sh"





















# ls
app			    dev   lib64  proc	 sbin		   sys
bin			    etc   media  root	 srv		   tmp
boot			    home  mnt	 run	 start-apache2.sh  usr
create_mysql_admin_user.sh  lib   opt	 run.sh  start-mysqld.sh   var
# cd app
# ls
LICENSE  README.md  index.php  logo.png  phpinfo.php
# sudo apt get install nano
E: Invalid operation get
# sudo apt-get install nano
Reading package lists... Done
Building dependency tree       
Reading state information... Done
Suggested packages:
  spell
The following NEW packages will be installed:
  nano
0 upgraded, 1 newly installed, 0 to remove and 13 not upgraded.
Need to get 194 kB of archives.
After this operation, 614 kB of additional disk space will be used.
Get:1 http://archive.ubuntu.com/ubuntu/ trusty/main nano amd64 2.2.6-1ubuntu1 [194 kB]
Fetched 194 kB in 1s (161 kB/s)
Selecting previously unselected package nano.
(Reading database ... 15672 files and directories currently installed.)
Preparing to unpack .../nano_2.2.6-1ubuntu1_amd64.deb ...
Unpacking nano (2.2.6-1ubuntu1) ...
Setting up nano (2.2.6-1ubuntu1) ...
update-alternatives: using /bin/nano to provide /usr/bin/editor (editor) in auto mode
update-alternatives: using /bin/nano to provide /usr/bin/pico (pico) in auto mode
# sudo nano index.php
# mysql -uroot -p
Enter password: 
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 4
Server version: 5.5.47-0ubuntu0.14.04.1 (Ubuntu)

Copyright (c) 2000, 2015, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> show database
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'database' at line 1
mysql> show databases;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| mysql              |
| performance_schema |
+--------------------+
3 rows in set (0.00 sec)

mysql> create database egci313
    -> ;
Query OK, 1 row affected (0.00 sec)

mysql> show databases;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| egci313            |
| mysql              |
| performance_schema |
+--------------------+
4 rows in set (0.00 sec)

mysql> use egci313;
Database changed
mysql> create table students(id int(11), name varchar(50), weight int(11), height int(11));
Query OK, 0 rows affected (0.02 sec)

mysql> show tables;
+-------------------+
| Tables_in_egci313 |
+-------------------+
| students          |
+-------------------+
1 row in set (0.00 sec)

mysql> insert into students value(1,'Bob',60,175);
Query OK, 1 row affected (0.01 sec)

mysql> insert into students value(2,'Tom',65,175);
Query OK, 1 row affected (0.02 sec)

mysql> select*from students;
+------+------+--------+--------+
| id   | name | weight | height |
+------+------+--------+--------+
|    1 | Bob  |     60 |    175 |
|    2 | Tom  |     65 |    175 |
+------+------+--------+--------+
2 rows in set (0.00 sec)

mysql> quit
Bye
# nano testdb.php
# nano testdb.php
# nano testdb.php
# nano testdb.php
# nano testdb.php

  GNU nano 2.2.6                                 File: testdb.php                                                                          

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "egci313";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, weight, height FROM students";
$result = $conn->query($sql);

echo '<img src="https://damp-gorge-98039.herokuapp.com/images/download.jpeg">';
echo "<br>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["weight"].  " " . $row["height"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>







^G Get Help            ^O WriteOut            ^R Read File           ^Y Prev Page           ^K Cut Text            ^C Cur Pos
^X Exit                ^J Justify             ^W Where Is            ^V Next Page           ^U UnCut Text          ^T To Spell
