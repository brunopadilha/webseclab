# WebSec Lab

A php web application which contains a lot of common critical security flaws (like xss, sql injection, local file disclosure, etc.). This application was developed only for study purposes.

You are welcome to add new features in this application provided the feature has some web vulnerability!


# Requirements
You will need a server running apache + php + mysql.
Basically, if you use windows, install wamp. If you use linux, install lamp and if you use mac, install mamp.

I do not recommend install this application in your production server because as you know, there's a lot of known vulnerabilities that can be exploited by script kiddies. In another words, if you do it, consideer the risk of being hacked by a 12 years old guy.

# Installation
First of all, create a schema in your mysql and import the database (located in "schema/webseclab.sql" ). After this, open the class "classes/db.class.php" and edit the line five setting your database parameters correctly (server, login, password, database name). If you did it correctly, the webseclab will be working correctly and all you have to do at this point is exploit the vulnerabilities. 


Enjoy it :)
