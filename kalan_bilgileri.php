<?php
     
     // Hesap Bakiyeni Görüntüler Ve Kalan Kullanımları Bildirir.
     
  function KrediSorgulama(){
            
  $username = "****"; // API Kullanıcı Adı
  $password = urlencode("****"); // API Şifre

  $url= "https://api.netgsm.com.tr/balance/list/get/?usercode=$username&password=$password";

  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);  
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $http_response = curl_exec($ch);
  $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

  if($http_code != 200){
    echo "$http_code $http_response\n";
    return false;
  }
  $balanceInfo = $http_response;
  echo "Hesap Krediniz : $balanceInfo";
}

KrediSorgulama();
