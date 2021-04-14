<?php



  header("Content-Type: application/vnd.apple.mpegurl");
  header("Access-Control-Expose-Headers: Content-Length,Content-Range");
  header("Access-Control-Allow-Headers: Range");
  header("Accept-Ranges: bytes");
  date_default_timezone_set('Asia/Kolkata');
	


    
$url= "https://live12p.hotstar.com/hls/live/2024725/ipl2021/hin/1540006130/15mindvrm01fe4e8047be00430f8107415ceb3efdf514april2021/master.m3u8";



	$curl = curl_init();
	
	curl_setopt_array($curl, array(
	 CURLOPT_URL => $url,
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_HTTPHEADER => array(
	 "Accept: */*",
"Accept-Encoding: gzip, deflate, br",
"Accept-Language: en-US,en;q=0.9",
"Connection: keep-alive",
"Cookie: Cookie: hs_uid=2cf74673-df67-43cb-8fe2-0f99382a6e91; ajs_user_id=%224c23cb5a3221427aa6f6a684b8559f8e%22; ajs_anonymous_id=%22e2a1d407-c320-4877-9d46-2e3724c8a65c%22; _gid=GA1.2.516223794.1618401098; hdntl=exp=1618463060~acl=*ipl2021*~id=bb4d59bf4b3e33eb49738af813cf9013~data=hdntl~hmac=3402f88b177829c35ec3e6f0753a0c1d2944d4ed202545e8e7ceeedbe31990a5",
"Host: live12p.hotstar.com",
"Origin: https://www.hotstar.com",
"Referer: https://www.hotstar.com/in/",
"Sec-Fetch-Dest: empty'",
"Sec-Fetch-Mode: cors'",
"Sec-Fetch-Site: same-site",
"User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 11_0_1 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A402 Safari/604.1",
	  ),
	));
	
	$response = curl_exec($curl);
	$err = curl_error($curl);
	
	curl_close($curl);
	
	if ($err) {
	  //echo "cURL Error #:" . $err;
	  return "nok";
	} else {
	 $hs = $response;
	}


   
  	$hs= str_replace("master",'hstarstream.php?ts=master', $hs);
	
 


//if($verify1 == $verify2){

 echo $hs;

//}
//else
//{

//echo 'Sorry! Download & Watch with Sports live Tv| Download link: http://sportslivetvapp.tk/';

//}

	
	?>