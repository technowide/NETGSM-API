 <?php 
 
 // NETGSM Üzerinden Göndermiş Olduğunuz SMS'leri Listeler. 
 
 
 function SMSHttpGET(){

 $username = "****"; // API Kullanıcı Adı
 $password = urlencode("****"); // API Şifre
 $version = "2";
 $status = "1";
 $type = "2";
 $bulk_id = "1,2,3,4,5,6,7";

 $url= "https://api.netgsm.com.tr/sms/report/?usercode=$username&password=$password&$bulk_id&$type&$status&$version&";

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
  echo "<br><br>$balanceInfo";
  return $balanceInfo;
}

SMSHttpGET();

?> 
