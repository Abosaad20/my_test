<?php


// $num='01229848640';
// $pas='34pndqa';
  
//  $url2="http://services.orange.eg/cmeh.aspx";
//  $user_pwd=$num.":".$pas;

//     function post($url , $user_pwd) {
//       $ch = curl_init($url);
//       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//       curl_setopt($ch, CURLOPT_USERPWD, $user_pwd);
//       curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
//       curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json; charset=UTF-8") );
//       $response =curl_exec($ch);
//       return $response;}
// echo "<pre>";
// print_r(post($url2, $user_pwd));





// $s = 'sa';
// echo $s;

$data[]= '{"eCode":0,"eDesc":"Success","correlationId":null,"errorMessage":null,"user":{"lineType":"Voice","customerType":"PREPAID","interests":[],"roles":["PRE_PAID"],"username":"01033070228","items":[],"email":null,"registrationDate":"2020-11-24","city":8,"emailNotification":"N","eligiblePromo":"N/A","isPaymentResponsibleFlag":1,"lastRenewalDate":null,"grantedUnits":0.0,"profileImage":null,"notification":null,"notificationAr":null,"encryptedMsisdn":"Jo40MYjdL91065B2r6Eh+g==","playWinMsisdn":"t2uvFeo3rJ5nIC7XCfsOVQ==","acnMsisdn":"TA6oKLXRMT8VabeHdha6meU6Xy1pxjYMYuonEU1W8sQ=","amrDiabMsisdn":"lR/OthBQO6GxrzP9c2uzPElN64zUFEj6Ksb/zckokG4=","liveTriviaMsisdn":"1uTKciFx9Rwa0cKpgEyvwEKGKFi82ojueiComfMvSUQ=","encryptedKeyMap":{"mama":"FN7bqMGfBJozMuSdO2LmY3YORFveOPhXJUMy7yJYAPE=","modarag":"ms4CSkBA2zwapKPfR7Gc/m5G5UzMocdebFgdaMJZn+U=","amrDiab":"lR/OthBQO6GxrzP9c2uzPElN64zUFEj6Ksb/zckokG4=","acn":"TA6oKLXRMT8VabeHdha6meU6Xy1pxjYMYuonEU1W8sQ=","vfChallenge":"i77U+gQejX/U+K1MspEDlj5SxBIeXQLODN2+TWg/C10=","henedy":"wbPjMQHofwGyqdHr6d6cCkRs47VSRJC3pv0FyZJxr4s=","salah":"sxdXcrwSiObcEXx/mlVTlF2so5lvo5FtIq2VNFONE5Y=","90mins":"Zsd3Wv5msHX5IVzJgh6Uh9rMjZxFj/AAaWper9hukb8=","liveTrivia":"1uTKciFx9Rwa0cKpgEyvwEKGKFi82ojueiComfMvSUQ=","playWin":"t2uvFeo3rJ5nIC7XCfsOVQ==","movieLine":"P10WU3qBPW78Uw/Q5DrTAjoMbrT0/1MlowaJyL3pGHo=","hadaba":"AHzXUjjo2cUn8xe8UA2cQNh1Wshep4U7nfrc+clu8Vk=","encryptedMsisdn":"Jo40MYjdL91065B2r6Eh+g==","amrdiab20":"YkY73Z5HS6hOlvyIjr7dmgmypUF+mxfejjac/XirAhw=","shohra":"sEtrEbush7wf8qrt5bTbJxa22d+26v3iJD68Llqbyu0="},"firstGameLogin":true,"flexSubType":null,"eligibleServices":null,"name":null,"serviceClassName":"14pt_New","title":"","age":0.0,"mobileNumber":"1033070228","firstName":"mahmoud","lastName":"-","contractID":204569353,"priceGroupType":"Consumer","customerStatus":"Active","customerTarrifModel":"2","billCycleCode":"03","contractActivatedDate":1514498400000,"billLimitThreshold":null,"installmentRemainingAmount":0.0,"perInstallmentAmount":"0.0","customerID":192277965,"accountNumber":"1.201120925","serviceClassCode":719,"contractSubType":"DEFAULT","gender":"2","firstTimeLogin":false,"promoActive":false,"contractRole":null,"ratePlanCode":3,"loyaltyPoints":null,"contractType":"Prepaid","birthDate":null,"sim":"8920022021944495796","segmentValue":"Core","contractStatus":"ACTIVE","paymentResponsibleCustomerCode":null,"billCycleDate":909180000000,"extraRemainningBalance":0.0,"grantedSMSOnNetAmount":0.0,"grantedSMSXNetAmount":0.0,"grantedVoiceXNetAmount":0.0,"grantedVoiceOnNetAmount":0.0,"quotaRemainingBalance":0.0,"idnumber":"","tariffModelName":"100_100_Mokalamat","nationality":"Egypt","priceGroupCode":"15","dailyCreditLimit":0.0,"faxNumber":null,"periodicCreditLimit":0.0,"imsi":"","parentCustomerID":null,"contractActivatedReason":"1","customerLevel":"0","customerActivatedDate":1514498400000,"customerActivatedReason":"New Customer","customerModifedDate":"2017-12-29T00:00:00+02:00","idtype":"National Identity Card","zipCode":null,"itimizedBillFlag":0,"billingMainBalance":0.0,"installmentType":null,"installmentDevice":null,"installmentTotalPeriod":null,"installmentOrderPrice":null,"installmentRemainingPeriod":0.0,"isLoyalFlag":0,"loyaltyAmount":null,"grantedDataAmount":0.0,"extraQuotaService":null,"extraQuotaPackage":null},"transactionId":null,"spocRegistration":false}';
// print_r ($data);

// $t=str_replace(array('{',"}",'"'), "", $data);
// $t = str_replace(",", " ", $data);
// $t = str_replace("{", "", $data);

print_r( $t);
// $ts = explode(" ",$t);

// echo "<pre>";
// print_r($ts);






// $num='01033070228';
// $pas='DarkRock@64358866';
  
//  $url2="https://mobile.vodafone.com.eg/mobile-app/auth";
//  $user_pwd=$num.":".$pas;

//     function post($url , $user_pwd) {
//       $ch = curl_init($url);
//       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//       curl_setopt($ch, CURLOPT_USERPWD, $user_pwd);
//       curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
//       curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json; charset=UTF-8") );
//       $response =curl_exec($ch);
//       return $response;}

// $sa[]= post($url2, $user_pwd);
