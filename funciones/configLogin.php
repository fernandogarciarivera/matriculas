<?php
    require_once __DIR__ . '/../vendor/autoload.php';

    use Google\Auth\OAuth2;

    session_start();

    $clientId = '554298806649-k6b3n83n3hqpuioddc8t0liplvbf8si6.apps.googleusercontent.com';
    $clientSecret = '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';
    $redirectUri = 'https://www.pruebautp.com:8081/login.php';

    $oauth2 = new OAuth2([
        'clientId' => $clientId,
        'clientSecret' => $clientSecret,
        'authorizationUri' => 'https://accounts.google.com/o/oauth2/auth',
        'redirectUri' => $redirectUri,
        'tokenCredentialUri' => 'https://oauth2.googleapis.com/token',
        'scope' => ['openid', 'profile', 'email'],
    ]);

    if (isset($_GET['code'])) {
        $oauth2->setCode($_GET['code']);
        $token = $oauth2->fetchAuthToken();
    
        if (isset($token['access_token'])) {
            $accessToken = $token['access_token'];
    
            // Obtener información del usuario
            $client = new GuzzleHttp\Client();
            $response = $client->get('https://www.googleapis.com/oauth2/v3/userinfo', [
                'headers' => ['Authorization' => 'Bearer ' . $accessToken]
            ]);
    
            $userInfo = json_decode($response->getBody(), true);
    
            $_SESSION['user_id'] = $userInfo['sub'];
            $_SESSION['user_name'] = $userInfo['name'];
            $_SESSION['user_email'] = $userInfo['email'];

            $_SESSION['idAlumno'] = $userInfo['sub'];
            $_SESSION['Nombres'] = $userInfo($fila['name']); 
            $_SESSION['Apellidos'] = $userInfo($fila['name']);
            $_SESSION['Email'] = $userInfo($fila['email']);
            $_SESSION['usuario'] = $fila['email'];
    
            header('Location: /matriculas.php');
            exit();
        } else {
            echo 'Error fetching access token';
        }
    }

    $authUrl = $oauth2->buildFullAuthorizationUri();

    // Para depuración: imprimir la URL de autorización
    echo '<!-- Auth URL: ' . htmlspecialchars($authUrl) . ' -->';
?>
