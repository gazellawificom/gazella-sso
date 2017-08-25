# Gazella-sso

Single Signon for Gazella Wifi Partners & Resellers

## Getting Started

If you have a Partner or Reseller account with GazellaWifi.com - These instructions will get you up an running to be able to programmatically login as one of your users. 

### Server Requirements
Php 5.6 or newer

### Prerequisites

Gazella Partner or Reseller Account:
Purchase here: https://gazellawifi.com/ with custom sys.yoursystemurl.com

Your Gazella API Key:
Get this here: https://sys.yoursystemurl.com/account-settings/

A Users "user_id":
If you have users get the "ID" from one here: http://sys.yoursystemurl.com/manage-user-accounts/

### Installing

Upload "gazella-sso.php" into your project folder I.e. yourcustomsite.com/project/gazella-sso.php
Then Edit "gazella-sso.php" by replacing the variables with the 'XXXX' values in the "CONFIGURATION" 
with your own variables seen below within your gazella-sso.php:

```
//======================================================================//
// CONFIGURATION
//======================================================================//  

/* This is the token that you can find under your account Settings */
$apikey = 'XXXXXXXXXXXXXXXXXXXXXXXXXXX';

/* Insert your reseller sys login url here */
$sysURL = "XXXXXXXXXXXXXX";

/* Insert the user ID that you'd like to authenticate as */ 
$userID = "XXX";
```

### Testing / Example

Now that your file will look something like the code below - you may test it by
simply visiting the file i.e. in your browser navigating to: yourcustomsite.com/project/gazella-sso.php
If successful will redirect you (now logged in) as the user that you specified as variable $userID.

```
//======================================================================//
// CONFIGURATION
//======================================================================//  

/* This is the token that you can find under your account Settings */
$apikey = '3948_93V4bbbbba747023450bd'; 

/* Insert your reseller sys login url here */
$sysURL = "sys.gazellawifi.com";

/* Insert the user ID that you'd like to authenticate as */ 
$userID = "293";
```


## Versioning

We use Gazella API v1.0 for this example. See Documentation here: https://sys.gazellawifi.com/docs/api/

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details