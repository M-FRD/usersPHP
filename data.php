<?php
$colors = ['#f2c5d2',"#e5bb57","#9c96cd","#76b995", "#70a7c5","#f8e6d1","#dfbcab","#f1e7e1", "#efedf6", "#e1dce9","#cdcad5","#f2f2f2"];
$color = $colors[round(rand(0,11))];
$curl = curl_init('https://randomuser.me/api/?nat=fr');
curl_setopt($curl,CURLOPT_CAINFO,'cert.cer');
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
$data = curl_exec($curl);
$data = json_decode($data,true);
curl_close($curl);
$picture = $data['results'][0]['picture']['large'];
$name = $data['results'][0]['name']['last'];
$firstname = $data['results'][0]['name']['first'];
$gender = strtoupper(substr($data['results'][0]['gender'],0,1));
$birth = substr($data['results'][0]['dob']['date'],0,10);
$email = str_replace('example','email',$data['results'][0]['email']);
$location = $data['results'][0]['location']['city'] .' / '.$data['results'][0]['location']['country'];
$cell = $data['results'][0]['cell'];
$age = $data['results'][0]['dob']['age'] . ' ans';
$nat = $data['results'][0]['nat'];


?>