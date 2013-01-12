<?php
function frndzk_reset_password() {
ob_start();
if(isset($_POST['email'])) {
require('../frndzk.php');


function genRandomString() {
    $length = 10;
    $characters = "0123456789abcdefghijklmnopqrstuvwxyz";
    $string = '';    
    for ($p = 0; $p < $length; $p++) {
        $string .= $characters[mt_rand(0, strlen($characters)-1)];
    }
    return $string;
}

$lolr=$_REQUEST['email'];
$lol=defence_sql_injection($lolr);
$frndzk= genRandomString();
$lsdss=hash('sha512',sha1(md5($frndzk)));
$result = @mysql_query("SELECT * FROM frndzk_admin
WHERE email ='$lol'");
if ( @mysql_num_rows($result) > 0 ) {
while($user = @mysql_fetch_array($result)) {
if ( $lol == "" . $user['email'] . "") {
$query="UPDATE frndzk_admin SET password = '$lsdss'
WHERE email = '$lol'";
@mysql_query($query);
$addrs=$_SERVER['SERVER_NAME'];
$to = "$lol"; $subject = "Frndzk link Shortner Password Reset" ; $email = "Frndzk Link Shortner administrator Password Reset Email" ; $message = "Your username: " . $user['username'] . "  
New password: $frndzk  
login with this password. You can change it later. </br>
Powered by www.bitto.us"; $headers = "From: frndzk-ls@$addrs"; $sent = mail($to, $subject, $message, $headers) ; if($sent) { echo"NEW PASSWORD WAS SENT TO YOUR EMAIL ADDRESS :)";
 } else {print "cant send email , may be smtp server not enabled in your host"; }
}
else
{
echo "user not exits";
}
}
}
else {
echo "user not exits :(";
}
}
else {

}



}











function frndzk_login_check() {
ob_start();
if (isset($_POST['un'])) {
if (isset($_POST['pw'])) {
require('../frndzk.php');
$usernamess=$_REQUEST['un'];
$usernamess = stripslashes($usernamess);
$lsdr=$_REQUEST['pw'];
$lsdr = stripslashes($lsdr);
$usernames=@mysql_real_escape_string($usernamess);
$lsd=@mysql_real_escape_string($usernamess);
$passwords=hash('sha512',sha1(md5($lsdr)));
$result = @mysql_query("SELECT * FROM frndzk_admin
WHERE id = '1'");

if($result) {

while($admin = @mysql_fetch_array($result))
{
if ( $usernames == "" . $admin['username'] . "" ) {        
if ( $passwords == "" . $admin['password'] . "")  {        
    
$_SESSION['bitto']=$usernames;        
echo"login successful";
header("Location: bitto.php");
} 
else {   echo"Username or Password Dosen't Match";
}
} else {   echo"Username or Password Dosen't Match";
}
}
}

else{
echo"<h1>DATABASE ERROR-frndzk link shortner</h1>";
}
}
else { 
}
}
else { 
}
}











function frndzk_link_shortner() {
if (isset($_POST['url'])) {









function fzk_fzk_ls() {

function getBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }
   
    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent)) 
    {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Apple Safari';
        $ub = "Safari";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
        $ub = "Opera";
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
        $ub = "Netscape";
    }
   
    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }
   
    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }
   
    // check if we have a number
    if ($version==null || $version=="") {$version="?";}
   
    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
}

$ua=getBrowser();

$ips = $_SERVER['REMOTE_ADDR'];

$detail= "user browser: " . $ua['name'] . " " . $ua['version'] . " on " .$ua['platform'] . " details: <br>" . $ua['userAgent'] . "
<br> user IP address : " .$ips;
require('frndzk.php');
$lol = stripslashes($_REQUEST['url']);
$lolz = @mysql_real_escape_string($lol);
function genRandomString() {
    $length = 5;
    $characters = "0123456789abcdefghijklmnopqrstuvwxyz";
    $string = '';    
    for ($p = 0; $p < $length; $p++) {
        $string .= $characters[mt_rand(0, strlen($characters)-1)];
    }
    return $string;
}

$frndzk=genRandomString();
$result = @mysql_query("SELECT * FROM frndzk_link
WHERE visit ='$frndzk'");
$num=1;

if($result) {
while ( @mysql_num_rows($result) > 0 )
{
$frndzk=genRandomString();
$result = @mysql_query("SELECT * FROM frndzk_link
WHERE visit ='$frndzk'");
$num=$num+1;

}



if ( @mysql_num_rows($result) < 1 ) {
$addrs=$_SERVER['SERVER_NAME'];

$query="INSERT INTO frndzk_link VALUES ('','$lolz','$detail',CURDATE(),'$frndzk')";
@mysql_query($query);


echo"
<center><font color=\"green\"><h4>Main link: ";
echo"<a href=\"$lolz\" target=\"_blank\">$lolz</a></h4></font>";
echo"<font color=\"red\"><h4>Shortened link: <a href=\"".frndzk_homeurl()."/b$frndzk\" target=\"_blank\">".frndzk_homeurl()."/b$frndzk</a></h4></font>";
echo"</center>
<center><p>Frndzk link shortner is Designed and Developed by <a href=\"http://www.bitto.us\" target=\"_blank\">Bitto kazi</a></p></center>
";







}

}
else
{
echo"<h1>DATABASE ERROR-frndzk link shortner</h1>";
}



}

















if ( "" == $_REQUEST['url'] )
{ echo"error . field is empty<br><br>"; }
elseif ( "http://" == $_REQUEST['url'] )
{ echo"error . field is empty<br><br>"; }
elseif ( "https://" == $_REQUEST['url'] )
{ echo"error . field is empty<br><br>"; }
elseif ( strstr($_REQUEST['url'], 'https://') == true ) 
{
fzk_fzk_ls();
}
elseif ( strstr($_REQUEST['url'], 'http://') == false ) 
{ 
echo"error . \"http://\" required<br><br>";
}


else {

fzk_fzk_ls();

}
}


else
{ echo"Enter The Link Below you want to make short<br><br>"; }


}




function defence_sql_injection($strings) {
$string = stripslashes($strings);
$string = @mysql_real_escape_string($string);
return $string;
}


//add vertise
function add_set_update_fzk()
{


if(isset($_GET['id'])) { 
require('../frndzk.php');

if ( $_GET['id'] == "on" )
{
$query="UPDATE frndzk_adds SET content = 'on' 
WHERE id = '2'"; 
@mysql_query($query);
}
elseif ( $_GET['id'] == "off" )
{ 
$query="UPDATE frndzk_adds SET content = 'off' 
WHERE id = '2'"; 
@mysql_query($query);
}
}
header("Location: addvertises.php");

}





// delete link function :D

function delete_bulk_link() {


if(isset($_GET['id'])) {
$string=defence_sql_injection("$_GET[id]");
@mysql_query("DELETE FROM frndzk_link WHERE id = '$string'");
header("Location: bitto.php?deleted=true");
}
else
{
header("Location: bitto.php");
}

//bang cheater OAL in bulk - start :D



if (isset($_GET['bulk'])) {
if ( $_GET['bulk'] == "delete" ) {
require('../frndzk.php');
foreach($_POST['foo'] as $key=>$value)
{
@mysql_query("DELETE FROM frndzk_link WHERE id = '$value'");
}
header("Location: bitto.php?deleted=trueinbulk");
}
else {
header("Location: bitto.php");
}
}

//bang cheater in bulk - finish :D
}












//addvertise updete api

function frndzk_add_update() {

if(isset($_POST['content'])) {
$content=defence_sql_injection('$_POST[content]');
$query="UPDATE frndzk_adds SET content = '$_REQUEST[content]' 
WHERE id = '1'"; 
@mysql_query($query); 
header("Location: addvertises.php?add=updated");
}

else {
header("Location: addvertises.php");
}
}












//updete password api


function update_fzk_pass() {



if(isset($_REQUEST['password'])) {
if( $_REQUEST['password'] == "" ) {
header("Location: settings.php?action=null");
}

else {
require('../frndzk.php'); 
$sex=$_REQUEST['password'];
$sex = stripslashes($sex);
$sex=@mysql_real_escape_string($sex);
$dick=hash('sha512',sha1(md5($sex))); 
$query="UPDATE frndzk_admin SET password = '$dick' 
WHERE id = '1'"; 
@mysql_query($query); 
header("Location: settings.php?action=success");
}
}
else {
header("Location: bitto.php");
}

}


























// frndzk link shortner home api


function frndzk_home() {

global $start_from;






echo'<center>';
require('../frndzk.php');
$result = @mysql_query("SELECT * FROM frndzk_header
WHERE id = '1'");
while($header = @mysql_fetch_array($result))
{
echo "<h2>" . $header['header'] . "</h2>";
}

echo"
";





if(isset($_GET['deleted'])) {
if( $_GET['deleted'] == "true" ) {
echo'<div class="message thank-message">
         <p><strong>DELETED THE LINK :)</strong></p>
      </div>';
}
elseif( $_GET['deleted'] == "trueinbulk" ) {
echo'<div class="message thank-message">
         <p><strong>DELETED THE SELECTED LINKS :)</strong></p>
      </div>';
}
}


echo"
<script language=\"JavaScript\">
function toggle(source) 
{
checkboxes=
document.getElementsByName('foo[]');
for(var i in checkboxes)
checkboxes[i].checked =
source.checked;
}
</script>
";


echo"<form action=\"delete_link.php?bulk=delete\" method=\"post\"><table id=\"bittos\"><tr><th><input type=\"checkbox\" onClick=\"toggle (this)\">id</th><th>URL</th><th>link</th><th>Date</th><th>URL Generator User details</th><th>Delete</th></tr>
";

$result = @mysql_query("SELECT * FROM frndzk_link ORDER by id desc LIMIT 
$start_from, 50");
while($data = @mysql_fetch_array($result))
{
echo "
<tr><td><input type=\"checkbox\" name=\"foo[]\" value=\"" . $data['id'] . "\">" . $data['id'] . "</td><td><a href=\"" . $data['url'] . "\" target=\"_blank\">" . $data['url'] . "</a></td><td><a href=\"".frndzk_homeurl()."/b" . $data['visit'] . "\" target=\"_blank\">GO</a></td><td>" . $data['time'] . "</td><td>" . $data['detail'] . "</td><td><a href=\"delete_link.php?id=" . $data['id'] . "\">Delete</a></td></tr>";
}
echo "
</table> <br><input type=\"submit\" value=\"Delete Selected Items\"></form><br>
";

$result = @mysql_query("SELECT COUNT(id) FROM frndzk_link");
if (!$result) {
    echo 'Could not run query: ' . @mysql_error();
    exit;
}
$row = @mysql_fetch_row($result);
$total_records = $row[0]; 
$total_pages = ceil($total_records / 50); 

for ($i=1; $i<=$total_pages; $i++) { 
            echo "Page : <a href='bitto.php?page=".$i."'>".$i."</a><br><br> "; 
};






}


















// frndzk settings


function frndzk_settings() {



echo'<center> 
<h2>Frndzk User Settings Page</h2>  ';

require('../frndzk.php'); 
$result = @mysql_query("SELECT * FROM frndzk_admin"); 
while($data = @mysql_fetch_array($result)) 
{ 
  echo "<p>admin username: " . $data['username'] . "</p>"; 
  echo "<p>admin username: " . $data['email'] . "</p>";
  echo "<p>admin password: ************</p></br>
update Administrator Password"; 
} 

if(isset($_GET['action'])) {
if( $_GET['action'] == "success" ) {
echo'<div class="message thank-message">
         <p><strong>Successfully Updated Password</strong></p>
      </div>';
}
if( $_GET['action'] == "null" ) {
echo'<div class="message thank-message">
         <p><strong>Password field empty. cant update password</strong></p>
      </div>';
}
if( $_GET['action'] == "esuccess" ) {
echo'<div class="message thank-message">
         <p><strong>Successfully Updated Email</strong></p>
      </div>';
}
if( $_GET['action'] == "enull" ) {
echo'<div class="message thank-message">
         <p><strong>Email field empty. cant update password</strong></p>
      </div>';
}

if( $_GET['action'] == "hsuccess" ) {
echo'<div class="message thank-message">
         <p><strong>Successfully Updated Home URL</strong></p>
      </div>';
}
if( $_GET['action'] == "hnull" ) {
echo'<div class="message thank-message">
         <p><strong>Home URL field empty. cant update Home URL</strong></p>
      </div>';
}

}
 
$result = @mysql_query("SELECT * FROM frndzk_admin"); 
while($data = @mysql_fetch_array($result)) 
{ 
echo "<form action=update_password.php method=post></br> 
Update admin password: <input type=password name=password></br> 
<input type=submit></br> 
</form></p></br>
<form action=update_email.php method=post></br> 
Update admin email: <input type=text name=email></br> 
<input type=submit></br> 
</form></p></br>
<form action=update_home.php method=post></br> 
Update Home URL: <input type=text name=home value=".frndzk_homeurl()."><br> <b>(Warning: Dont put slash \"/\" at the end. you can only set ".frndzk_homeurl()." or ".frndzk_homeurl()."/xxxxxx )</b></br> 
<input type=submit></br> 
</form></p></br>"; 
} 

 




}





function frndzk_footer_core() {
$result = @mysql_query("SELECT * FROM frndzk_header
WHERE id = '1'");
while($header = @mysql_fetch_array($result))
{
echo "<h6>" . $header['footer'] . "</h6></center>";
}

}


function frndzk_header_title() {
require('../frndzk.php');
$result = @mysql_query("SELECT * FROM frndzk_header
WHERE id = '1'");
while($header = @mysql_fetch_array($result))
{
echo "" . $header['header'] . "";
}

}


function frndzk_user() {
require('../frndzk.php');
$result = @mysql_query("SELECT * FROM frndzk_admin
WHERE id = '1'");
while($header = @mysql_fetch_array($result))
{
echo "" . $header['username'] . "";
}

}





function frndzk_addsettings() {

echo'<h2>Addvertisement Settings</h2>';


$result = @mysql_query("SELECT * FROM frndzk_adds 
WHERE id ='2'"); 
while($data = @mysql_fetch_array($result)) 
{ 
if( "" . $data['content'] . "" == "on") { 
echo "<div class=\"message thank-message\">
         <p><strong>Addvertise : On"; 
} else { 
echo "<div class=\"message error-message\">
         <p><strong>Addvertise : Off"; 
} 
}
 
 
$result = @mysql_query("SELECT * FROM frndzk_adds 
WHERE id ='1'"); 
while($data = @mysql_fetch_array($result)) 
{ 
echo "</p> 
<li><a href=\"add_.php?id=on\">on</a></li> 
<li><a href=\"add_.php?id=off\">off</a></li></strong></p>
      </div><br><br>";

if(isset($_GET['add'])) {
if( $_GET['add'] == "updated" ) {
echo'<div class="message thank-message">
         <p><strong>Successfully Updated Addvertisement Text</strong></p>
      </div>';
}

if( $_GET['add'] == "tnull" ) {
echo'<div class="message thank-message">
         <p><strong>Empty Field!</strong></p>
      </div>';
}
if( $_GET['add'] == "tsuccess" ) {
echo'<div class="message thank-message">
         <p><strong>Successfully Addvertise Duration time!</strong></p>
      </div>';
}
}

echo"
<p> 
<form action=add_time.php method=post></br> 
Addvertisement Duration before Redirection: <input type=text name=time value=".fzk_re_time().">
</br><input type=submit></br> 
</form></p></br>
<p> 
<form action=update_add.php method=post></br> 
addvertise body(you can use html tag): </br><textarea name=content cols=80 rows=10>" . $data['content'] . "</textarea></br><input type=submit></br> 
</form></p></br> 
";



}







}



// links count

function link_fzk_count() {
require('../frndzk.php');
$result = @mysql_query("SELECT COUNT(id) FROM frndzk_link");
if (!$result) {
return "0";
}
else {
$row = @mysql_fetch_row($result);
$total_records = $row[0];
return $total_records;
}
}




//updete email api


function update_fzk_email() {



if(isset($_REQUEST['email'])) {
if( $_REQUEST['email'] == "" ) {
header("Location: settings.php?action=enull");
}

else {
require('../frndzk.php'); 
$so=$_REQUEST['email'];
$so = stripslashes($so);
$so=@mysql_real_escape_string($so); 
$query="UPDATE frndzk_admin SET email = '$so' 
WHERE id = '1'"; 
@mysql_query($query); 
header("Location: settings.php?action=esuccess");
}
}
else {
header("Location: settings.php");
}

}


function frndzk_breadc() {
$s=$_SERVER['PHP_SELF'];
$e=explode('/',$s);
return $e[count($e) -1];
}


//boom boom :D


function frndzk_inc_boom() {
ob_start();
include('frndzk-home-page.php');
ob_flush();

}





//get redirect time


function fzk_re_time() {
$result = @mysql_query("SELECT * FROM frndzk_adds
WHERE id = '3'");
while($addss = @mysql_fetch_array($result))
{
$r="" . $addss['content'] . "";
return $r;
}
}



//update redirect time


function frndzk_re_time_up() {

if(isset($_REQUEST['time'])) {
if( $_REQUEST['time'] == "" ) {
header("Location: addvertises.php?add=tnull");
}

else {
require('../frndzk.php'); 
$so=$_REQUEST['time'];
$so = stripslashes($so);
$so=@mysql_real_escape_string($so); 
$query="UPDATE frndzk_adds SET content = '$so' 
WHERE id = '3'"; 
@mysql_query($query); 
header("Location: addvertises.php?add=tsuccess");
}
}
else {
header("Location: addvertises.php");
}


}



//URL FORM


function fzk_url_form() {

$bit='<form name="frndzk" action="" onsubmit="return validateForm()"  method="post">
input url: <input type="text" name="url" value="http://" /></br>
<input type="hidden" name="info" value="" /></br>
</br></br>
<input type="submit" value="Short URL!" /></form>';
return $bit;

}

function frndzk_homeurl() {
$result = @mysql_query("SELECT * FROM frndzk_adds
WHERE id = '4'");
while($addss = @mysql_fetch_array($result))
{
$r="" . $addss['content'] . "";
return $r;
}
}








//update home url


function frndzk_update_home_url() {

if(isset($_REQUEST['home'])) {
if( $_REQUEST['home'] == "" ) {
header("Location: settings.php?action=hnull");
}

else {
require('../frndzk.php'); 
$so=$_REQUEST['home'];
$so = stripslashes($so);
$so=@mysql_real_escape_string($so);
$so=str_replace("www.","",$so);
$query="UPDATE frndzk_adds SET content = '$so' 
WHERE id = '4'"; 
@mysql_query($query); 
header("Location: settings.php?action=hsuccess");
}
}
else {
header("Location: settings.php");
}


}








function frndzk_frndzk_fzk_bk_da_boss_fzk()
{
ob_start();
require('frndzk.php');
$result = @mysql_query("SELECT * FROM frndzk_admin
WHERE id = '1'");
ob_clean();
if(!$result) {

if (isset($_GET['install']) && $_GET['install'] == "frndzk" )
{


if (isset($_REQUEST['server']) && isset($_REQUEST['dbname']) && isset($_REQUEST['dbuname']) && isset($_REQUEST['pass']) && isset($_REQUEST['un']) && isset($_REQUEST['pw']) && isset($_REQUEST['email']))

{

$server=$_REQUEST['server'];
$dbname=$_REQUEST['dbname'];
$dbuname=$_REQUEST['dbuname'];
$dbpass=$_REQUEST['pass'];


$l="fzk";
$lol="<?php
$$l = @mysql_connect(\"$server\",\"$dbuname\",\"$dbpass\");
if (!$$l)
  {
  echo'frndzk cms Could not connect';
  }
if (!@mysql_select_db(\"$dbname\",$$l)) {
echo'frndzk cms Could not connect to database error type';
}
?>";
$bitto = "frndzk.php";
$fh = fopen($bitto, 'w') or die("can't open file");
$stringData = "$lol";
fwrite($fh, $stringData);
fclose($fh);



require('frndzk.php');

$un=defence_sql_injection("$_REQUEST[un]");
$pw=defence_sql_injection("$_REQUEST[pw]");
$email=defence_sql_injection("$_REQUEST[email]");



ob_start();
$result = @mysql_query("SELECT * FROM frndzk_admin
WHERE id = '1'");
ob_clean();
if(!$result) {


// creat table

$query="CREATE TABLE frndzk_admin (id int(6) NOT NULL auto_increment,username varchar(32) NOT NULL,password varchar(200) NOT NULL,email varchar(100) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";
@mysql_query($query);
$query="CREATE TABLE frndzk_link (id int(10) NOT NULL auto_increment,url varchar(1000) NOT NULL,detail varchar(1000) NOT NULL,time varchar(100) NOT NULL,visit varchar(100000) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";
@mysql_query($query);
$query="CREATE TABLE frndzk_header (id int(6) NOT NULL auto_increment,header varchar(1000) NOT NULL,footer text(10000) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";
@mysql_query($query);
$query="CREATE TABLE frndzk_adds (id int(6) NOT NULL auto_increment,content varchar(100000) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";
@mysql_query($query);

$bitto=hash('sha512',sha1(md5($pw)));

$query="INSERT INTO frndzk_admin VALUES ('','$un','$bitto','$email')";
@mysql_query($query);
$query="INSERT INTO frndzk_header VALUES ('','Frndzk link shortner','Copyright &copy; 2012 <a href=\"http://bitto.us\" target=\"_blank\">Bitto Kazi</a>')";
@mysql_query($query);
$query="INSERT INTO frndzk_adds VALUES ('1','Frndzk link shortner</br>
Copyright &copy; 2013 <a href=\"http://bitto.us\" target=\"_blank\">Bitto Kazi</a>')";
@mysql_query($query);
$query="INSERT INTO frndzk_adds VALUES ('2','on')";
@mysql_query($query);
$query="INSERT INTO frndzk_adds VALUES ('3','10')";
@mysql_query($query);


$d=dirname($_SERVER['PHP_SELF']);
$addrs=str_replace("www.","",$_SERVER['SERVER_NAME']);
if($d == "/"){
$e="http://$addrs";
}
else
{
$e="http://$addrs$d";
}
$query="INSERT INTO frndzk_adds VALUES ('4','$e')";
@mysql_query($query);

$result = @mysql_query("SELECT * FROM frndzk_admin
WHERE id = '1'");
if($result) {
echo "<html><head><title>Frndzk Link Shortner</title></head><body><center><h3>website created</h3><h3>administrator username: ".$un."</h3></br><h3>administrator password: ".$pw."</h3></br></body></html>";
}
else
{
exit;
}
}
else
{
echo "<html><head><title>Frndzk Link Shortner</title></head><body><center><h3>Frndzk link Shortner is Already installed on the database.</h3></body></html>";
}

}

else {
echo"<html><head><title>Frndzk Link Shortner</title></head><body><center><h2>Please Give All Information To Run The Installetion Proccess of Frndzk Link Shortner</h2></body></html>";
}

}
else
{








echo'
<html> 
<head> 
<title>Frndzk Link shortner Installetion</title> 
</head><body> 
<center> 
<script type="text/javascript"> 
function validateForm() 
{ 
var y=document.forms["frndzk"]["server"].value; 
var r = y.length; 
if (r<1) 
  { 
  alert("Database Server field empty"); 
  return false; 
  } 
var x=document.forms["frndzk"]["email"].value; 
var atpos=x.indexOf("@"); 
var dotpos=x.lastIndexOf("."); 
if (atpos<3 || dotpos<atpos+3 || dotpos+2>=x.length) 
  { 
  alert("Not a valid e-mail address"); 
  return false; 
  } 
var d=document.forms["frndzk"]["pw"].value; 
var g = d.length; 
if (g<6) 
  { 
  alert("password must be more than 5 charecters"); 
  return false; 
  }
var e=document.forms["frndzk"]["un"].value; 
var f = e.length; 
if (f<5) 
  { 
  alert("username must be more than 4 charecters"); 
  return false; 
  } 
} 
</script> 
<img src="frndzk-ap/images/logo-4.png" height="200px" wideth="200px"></left><br>
<h3>Frndzk Link Shortner Installetion</h3> 
<h3>Database Information</h3> 
<form name="frndzk" action="install.php?install=frndzk" onsubmit="return validateForm()"  method="post"> 
Database Server: <input type="text" name="server" /></br> 
Database Username: <input type="text" name="dbuname" /></br> 
&nbsp Database name: <input type="text" name="dbname" /></br> 
&nbsp Database password: <input type="password" name="pass" /></br> 
<h3>Administrator Details</h3> 
Email: <input type="text" name="email" /><br>
Username: <input type="text" name="un" /><br>
Password: <input type="text" name="pw" /> <br><br>';


$d=dirname($_SERVER['PHP_SELF']);
$addrs=str_replace("www.","",$_SERVER['SERVER_NAME']);
if($d == "/"){
echo"<b>Installetion Directory Detected: http://$addrs (you can change it after installetion)</b>";
}
else
{
echo"<b>Installetion Directory Detected: http://$addrs$d (you can change it after installetion)</b>";
}

echo'</br></br> 
<input type="submit" value="Install"/></form> 
</center></body></html>';
}

}
else
{
echo"<html><head><title>Frndzk Link Shortner</title></head><body><center><h2>No hunky punky baby. The installetion process is locked.</h2></body></html>";
}
}





function frndzk_redirector()
{
ob_start();
if(isset($_GET['url'])) {
$urls=$_GET['url'];
require('frndzk.php');
$lol = stripslashes($_GET['url']);
$lolz = @mysql_real_escape_string($lol);

if(isset($_GET['dir'])) {
$dir=$_GET['dir'];
$dir=defence_sql_injection("$dir");
$k=dirname($_SERVER['PHP_SELF']);
$k=str_replace("/","",$k);
$dir=str_replace("/","",$dir);
$addrs=str_replace("www.","",$_SERVER['SERVER_NAME']);
$d="http://".$addrs."/".$k."/".$dir."";
}
else
{
$k=stripslashes(dirname($_SERVER['PHP_SELF']));
$addrs=str_replace("www.","",$_SERVER['SERVER_NAME']);
$k=str_replace("/","",$k);
$d="http://".$addrs."/".$k."";
}


if( $d == "http://".$addrs."//".$dir."" )
{
$d="http://".$addrs."/".$dir."";
}
elseif( $d == frndzk_homeurl()."/" )
{
$d=frndzk_homeurl();
}




if ( frndzk_homeurl() == $d ) {
$result = @mysql_query("SELECT * FROM frndzk_adds
WHERE id = '2'");
if($result) {


while($addss = @mysql_fetch_array($result))
{
if( "" . $addss['content'] . "" == "off" ) {
if( $urls == "" ){
header("Location: index.php");
}
else {
$result = @mysql_query("SELECT * FROM frndzk_link
WHERE visit = '$lolz'");
if ( @mysql_num_rows($result) > 0 ) {
while($bitto = @mysql_fetch_array($result))
{
header("Location: " . $bitto['url'] . "");
}
}
else { echo"Frndzk link shortner generated 404 NOT FOUND";
} 
}
}
else
{
$result = @mysql_query("SELECT * FROM frndzk_link
WHERE visit = '$lolz'");
if ( @mysql_num_rows($result) > 0 ) {
while($bitto = @mysql_fetch_array($result))
{
$page = "" . $bitto['url'] . "";

$sec = fzk_re_time();

header("Refresh: $sec; url=$page");

}
$result = @mysql_query("SELECT * FROM frndzk_adds
WHERE id = '1'");
while($addss = @mysql_fetch_array($result))
{
echo"
<html>
<head>
<title>Frndzk link Shortner</title>





<script type=\"text/javascript\">
window.onload = function() {
/* set your parameters(
number to countdown from,
pause between counts in milliseconds,
function to execute when finished
)
*/
startCountDown(".fzk_re_time().", 1000, myFunction);
}

function startCountDown(i, p, f) {
// store parameters
var pause = p;
var fn = f;
// make reference to div
var countDownObj = document.getElementById(\"countDown\");
if (countDownObj == null) {
// error
alert(\"div not found, check your id\");
// bail
return;
}
countDownObj.count = function(i) {
// write out count
countDownObj.innerHTML = i;
if (i == 0) {
// execute function
fn();
// stop
return;
}
setTimeout(function() {
// repeat
countDownObj.count(i - 1);
},
pause
);
}
// set it going
countDownObj.count(i);
}

function myFunction() {

}
</script>




</head><body>
<center>" . $addss['content'] . "<br><h1>You will be redirected automatically after ". fzk_re_time()."&nbsp; seconds...</h1></br>Time Left <span id=\"countDown\"></span> Seconds<br><br>
if you are not redirected then <a href=\"javascript:showIt()\">Refresh</a></br>
<div id=\"hid\" style=\"display:none;\">
your link <a href=\"$page\">Click Here</a></div></br>
</center>
<script type=\"text/javascript\">
function showIt() {
document.getElementById(\"hid\").style.display = \"none\";
setTimeout(\"hide()\", ".fzk_re_time()."000);
}
function hide() {
    document.getElementById(\"hid\").style.display=\"block\";
}
</script>



</body></html>
";

}
}
else { echo"<html>
<head>
<title>Frndzk link Shortner</title>
</head><body>Frndzk link shortner generated 404 NOT FOUND</body></html>";
} 

}

}


}
else
{
echo"<html>
<head>
<title>Frndzk link Shortner</title>
</head><body><h1>DATABASE ERROR-frndzk link shortner</h1></body></html>";
}








}
else { echo"<html>
<head>
<title>Frndzk link Shortner</title>
</head><body>Frndzk link shortner generated 404 NOT FOUND<br></body></html>";
} 
 





}
else { echo"<html>
<head>
<title>Frndzk link Shortner</title>
</head><body>Frndzk link shortner generated 503</body></html>";
} 
ob_flush();
}




function frndzk_cms_core_header()
{
include('header.php');
}

function frndzk_cms_core_footer()
{
include('footer.php');
}

?>