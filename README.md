# Gazella-sso

Single Signon for Gazella Wifi Partners & Resellers

## Getting Started

If you have a Partner or Reseller account with GazellaWifi.com - These instructions will get you up an running to be able to programmatically login as one of your users. 

### Server Requirements
Php 5.6 or newer

### Prerequisites

Gazella Reseller Account
Your Gazella API Key
A Users "user_id"

### Installing

Upload gazella-sso.php into your project folder. 
Then configure / replace the variables in bold text within
the "CONFIGURATION" for example as seen below:

```
//======================================================================//
// CONFIGURATION
//======================================================================//  

/* This is the token that you can find under your account Settings */
$apikey = '__XXXXXXXXXXXXXXXXXXXXXXXXXXX__'; 

/* Insert your reseller sys login url here */
$sysURL = "__sys.yoursite.com__";   // Example: sys.yoursite.com

/* Insert the user ID that you'd like to authenticate as */ 
$userID = "__XXX__";  // Example: 1234
```
 
## Versioning

We use Gazella API v1.0 for this example. See Documentation here: https://sys.gazellawifi.com/docs/api/

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details