<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.
$resource = curl_init($url);
// curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
// $result = curl_exec($resource);
// $info = curl_getinfo($resource, CURLINFO_HTTP_CODE); // to get data status - add CURLINFO_HTTP_CODE to get the status code
// echo '<pre>';
// var_dump($info);
// echo '</pre>';

// echo $result;
// curl_close($resource);
// Get response status code

// set_opt_array

// Post request
// $resource2 = curl_init($url);

$user = [
  'name' => 'Monkey D. Luffy',
  'username' => 'Luffy',
  'email' => 'luffy@strawhat.com'
];

curl_setopt_array($resource, [
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POST => true,
  CURLOPT_HTTPHEADER => ['content-type: application/json'],
  CURLOPT_POSTFIELDS => json_encode($user)
]);

$result = curl_exec($resource);
$info = curl_getinfo($resource, CURLINFO_HTTP_CODE);
curl_close($resource);
echo $result;
