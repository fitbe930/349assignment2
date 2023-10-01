# COSC349 Assignment2
This repo contains the files for a Student signup webapp. If you want to create this yourself first you need an aws account and make your own ec2 instances (one for the webapp and another for admin access) and follow the same steps I took to deploy my application.



Once the EC2 instances are running, either ssh into your EC2 instances or connect through the AWS console, then run the command: 
```sudo yum install httpd php php-mysql mysql-server```

Then in the web-server ec2 and add the following files into the /var/www/http/ directory: index.html, process_form.php, backup.sh
and for the admin access ec2 and add the following files into the /var/www/http/ directory: admin_login.html, admin_panel.php, delete_student.php

You will need to create your own Amazon RDS instance running MySQL. Test you can connect to the RDS from your EC2 by running this command:
```mysql –h "your_SQL_endpoint" -u "your_DB_username" -p```
and then entering you database password. When you can connect to the database, change this block of code in all files:

```php
$dbhost = 'db.cgmjlbiqninb.us-east-1.rds.amazonaws.com';
$dbuser = "user";
$dbpass = "password";
$dbname = "studs";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
```
to your own database credentials.
use db_setup.sql to create the structure of the database.

If you want to add scheduling to the backup.sh file, you will need to install cronie: ```sudo yum install -y cronie```

If you want to access my Web-server go to the address: 
```
52.5.104.145
```
and for my Admin-server go to address:
```
18.232.249.162
```


