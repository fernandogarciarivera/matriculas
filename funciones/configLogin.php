<?php
    // Cargar el autoloader de Composer desde el directorio superior
    require_once __DIR__ . '/../vendor/autoload.php';

    // Cargar las credenciales del archivo JSON
    $client = new Google_Client();
    
    $credentialsPath = __DIR__ . '/../client_secret_554298806649-k6b3n83n3hqpuioddc8t0liplvbf8si6.apps.googleusercontent.com.json';
    if (!file_exists($credentialsPath)) {
        die('Error: El archivo de credenciales no existe en la ruta especificada: ' . $credentialsPath);
    }
    $client->setAuthConfig($credentialsPath);

    $client->setRedirectUri('http://www.pruebautp.com:8080');
    $client->addScope(Google_Service_Oauth2::USERINFO_EMAIL);
    $client->addScope(Google_Service_Oauth2::USERINFO_PROFILE);

    if (isset($_GET['code'])) {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        $client->setAccessToken($token);

        $oauth2Service = new Google_Service_Oauth2($client);
        $userInfo = $oauth2Service->userinfo->get();

        $_SESSION['user_id'] = $userInfo->id;
        $_SESSION['user_name'] = $userInfo->name;
        $_SESSION['user_email'] = $userInfo->email;
        $_SESSION['usuario'] = $userInfo->email;

        header('Location: /login.php');
        exit();
    } 

    $authUrl = $client->createAuthUrl();
?>
