<?php
/* 
 * Remote authentication snippet Gazella Wifi for Gazella API 1.0
 */

//======================================================================//
// CONFIGURATION
//======================================================================//  

/* This is the token that you can find under your account Settings */
$apikey = 'XXXXXXXXXXXXXXXXXXXXXXXXXXX'; 

/* Insert your reseller sys login url here */
$sysURL = "sys.yoursite.com";   // Example: sys.yoursite.com

/* Insert the user ID that you'd like to authenticate as */ 
$userID = "XXX";  // Example: 1234

//======================================================================//
// SECURE
//======================================================================//

/* Time Stamp */
$ts = time(); 

/* Hash please */ 
$blob   = "$userID|$apikey|$ts";
$hash   =   hash('sha256', $blob);

/* Token Scramble */
$ownerID = strtok($apikey, '_');
$loader = [
    'o'     => $ownerID, 
    'p'     => $userID,
    'e'     => $hash,
    'n' => $ts,   
]; 

$param['esig'] =  GZTOKEN::make($loader); 

/* Gazella Token */
class GZTOKEN { 
protected static $m0='gz';public static function secret($j1=null){return $j1?static::$m0=$j1:static::$m0;}protected static function decompose($r2){$r2=base64_decode($r2);$m3=strrpos($r2,'|');return['load' =>json_decode(substr($r2,0,$m3)),'sig' =>substr($r2,$m3+1),];}public static function sign($x4){$w5=json_encode($x4);return sha1($w5.static::$m0);}public static function make($x4){return base64_encode(json_encode($x4).'|'.static::sign($x4));}
}

 
//======================================================================//
// LOG THEM IN
//======================================================================//

//This can be used as direct link to login a user into the site
$ssoURL = "https://".$sysURL."/api-login/?".http_build_query($param);

//Use this line in the login redirect URL
header("Location: ".$ssoURL);
?>