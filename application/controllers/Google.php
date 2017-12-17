<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/17/2017
 * Time: 1:40 PM
 */

/*use Google\Auth\ApplicationDefaultCredentials;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;*/
//use Google_Client;
//require_once(BASEPATH.'..\vendor\google\apiclient\src\Google\Client.php');
//require_once(BASEPATH.'..\vendor\google\apiclient-services\src\Google\Service\Plus.php');
//use \Google_Client as Google_Client;
//use echo base_url("vendor/google/apiclient/src/Google/Client.php");
use \Google_Client as Google_Client;
class Google extends CI_Controller
{
    public  function handle(){
        echo BASEPATH;
        echo APPPATH;
        echo  "Handle";
        // specify the path to your application credentials
//        putenv('GOOGLE_APPLICATION_CREDENTIALS=../files/client_secret.json');
        $client = new  Google_Client;
        $client->setAuthConfig(APPPATH.'..\files\client_secret.json');
        $client->setAccessType("offline");        // offline access
        $client->setIncludeGrantedScopes(true);   // incremental auth
        $client->addScope(array(Google_Service_Plus::PLUS_ME, Google_Service_Plus::USERINFO_EMAIL, Google_Service_Plus::USERINFO_PROFILE));
        $client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/Google/callback');
        $auth_url = $client->createAuthUrl();
        header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
    }
    public function callback(){
        echo  "Callback";
        print_r($_GET);

    }
}