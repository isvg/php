<?$url = 'http://hs-fuzi.net/login?dst=http%3A%2F%2F30.30.30.29%3A8080%2F';         

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'MyPHPApp/1.0');
curl_setopt($ch, CURLOPT_TIMEOUT, 10);                    

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo $response;
}

curl_close($ch);

?>