# WebSec Lab

A php web application that contains a lot of common critical security flaws (like xss, sql injection, local file disclosure, etc.). This application was developed only for study purposes.

You are welcome to add new features in this application provided the feature has some web vulnerability!


# Requirements
You will need a webserver running php + mysql. Don't install this application in your production environment, because it can be easily exploited. 

# Installation
First of all, create a schema in your mysql and import the database (located in "schema/webseclab.sql" ). After this, open the class "classes/db.class.php" and edit the line five setting your database parameters correctly (server, login, password, database name). If you did it correctly, the webseclab will be working correctly and all you have to do at this point is exploit the vulnerabilities. 


Enjoy it :)
