<?php

// Request Url: http://services.orange.eg/SignIn.svc/EasyLogin

// Request Method: POST
// Status Code: 200 OK
// Remote Address: 41.190.248.36
// Version: HTTP/1.1
// Content Type : application/json; charset=utf-8

// _ctv: 5c802232-aaa0-41c2-b414-5d4b31bac90f
// _htv: C08EE349AE58625D8BA38B079E4A8525775C1F0146ED8C26DA602E221B1D9829
// Content-Type: application/json; charset=UTF-8
// Content-Length: 143
// Host: services.orange.eg
// Connection: Keep-Alive
// Accept-Encoding: gzip
// User-Agent: okhttp/3.12.1

   $url="https://mobile.vodafone.com.eg/mobile-app/promo/unifiedRedeemPromo";
    $url2="https://mobile.vodafone.com.eg/mobile-app/auth";
    $data='{"channelId":3,"contextualOperationId":0,"contextualPromoId":0,"operationId":0,"param1":"football","promoId":3336,"triggerId":332,"triggerType":"6","wlistId":3256}';
    $user_pwd=$num.":".$pas;
    
    function post($url , $user_pwd) {
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_USERPWD, $user_pwd);
      curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json; charset=UTF-8") );
      $response =curl_exec($ch);
      return $response;
    }

    function promo($url ,$post,$user_pwd) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERPWD, $user_pwd);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json; charset=UTF-8") );
        $response =curl_exec($ch);
          return $response;
        }

    $bot = json_decode(post($url2, $user_pwd), true);

    @$user=$bot["user"]["firstName"];
    @$eDesc=$bot["eDesc"];
