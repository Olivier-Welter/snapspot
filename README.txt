RaSpot
User Documentation
June, 2017

Notice
This Application has been developed around some different languages :
•	For http requests users and administrators, mobile devices can connect through browsers thanks to HTML, CSS and Javascript.
•	For http responses, PHP and Apache has been chosen, however this application may not have to connect to the World Wide Web.
•	For Data, SQLite has been designed, with a view not to overload system memory. 
•	For hardware choice, Raspberry Pi 3 model has been chosen with 16GB SDCard for operating system.

Configuration
Apache and PHP 5.6 have to be downloaded via following instructions :
1.	sudo aptitude install apache2
2.	sudo chown –R pi :www-data  /var/www/html
3.	sudo chmod –R 770 /var/www/html
4.	sudo aptitude install php5
Raspberry needs to be turned into a wifi hotspot.

Installation
Snap Snap Spot Application has to be placed at \var\www\html on Raspbian.
A Database has been developed via SQLite in adequacy with application needs ;
Of course, if database tables needs to be modified, changes in php components will have to be modified too.

Administration
Once Raspberry Pi 3 is operating and Application running on Apache,
Administrator can browse « snapspot/adm » and enter first password as « admin ».
Next step is to change event name, application explanation, password and background picture as (‘evenement’, ‘slogan’, ‘mdp’, ‘image_fond ‘).
At last and not the least, Administrator can plug a Backup USB Key, so SDCard will be sending users pictures to, and at Event’s end, Administrator can delete all datas.

copyright 2017 - MROBOT