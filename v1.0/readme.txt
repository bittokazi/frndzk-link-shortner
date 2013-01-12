*** Frndzk link shortner ***
*** Developer: Bitto kazi ***
*** Developer website: www.bitto.us ***
*** Developer email: bitto.kazi@gmail.com ***
*** Copyright: all rights reserved by bitto kazi ***
*** License: GPLv2 or later ***
*** License URI: http://www.gnu.org/licenses/gpl-2.0.html ***


=== If you find any security hole or any error in coding please let us know. Report at the following email address: bitto.kazi@gmail.com ===

***
Installetion process:
1. Extract the frndzk_link_shortner.zip file where you want to install.
2. Now point your browser at www.example.com/install.php to begin the installetion.
3. Now give database information and you desired administrator username, email(need to reset password), password and click install.
4. To goto admin panel point your browser to www.example.com/frndzk-ap
5. Once the installetion is successful install.php cannot be accessed anymore unless you change the database information.
***

***
Important:
1. If you move the files from root directory to another directory after installetion. Example: you have intalled in www.example.com and then moved all the files to www.example.com/xyz directory. Then you have to change the installetion directory from settings www.example.com to www.example.com/xyz . I thing you got it. If you dont change it nothing will work.
2. Strongly recommended that you dont change the installetion location value if you didnt moved the files to another location after installetion.
***

***
Features:
1. You can on and off advertisement
2. You can put your desired advertise
3. Installetion process is safe because after installetion install.php cannot be accessed anymore
4. You can design your own homepage or theme
***


***
Configure homepage and usage of functions:
1. frndzk-home-page.php is the page which will be shown as home page. Warning: dont edit index.php unless you know the system struckture.
2. You have to put this to your homepage or nothing will work
<?php
frndzk_link_shortner();
?>
You can get the form by using the code below:
<?php
echo fzk_url_form();
?>
3. If you wish you can place the link shortner to any page. To do that you just have to put the below code to your php file.
<?php
include('frndzk_core_functions.php')
frndzk_link_shortner();
echo fzk_url_form();
?>
important: be sure to give the correct location of the include file frndzk_core_functions.php .
***