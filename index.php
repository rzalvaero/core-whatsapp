<?php
$curl = curl_init();
$data = [
"number" => "NUMBER",// number sender
"message" => "tes",
"type" => "chat", // type delivery            
"to" => ["NUMBER"], // number receiver
];

curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_URL, 'http://localhost:9000/send');
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($curl, CURLOPT_HTTPHEADER, ['Accept: application/json','Content-Type: application/json']);
$result = curl_exec($curl);
curl_close($curl);

echo "<pre>";
print_r($result);

?>
