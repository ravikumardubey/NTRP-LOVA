<?php

  $aaaa=htmlspecialchars($_POST['BharatkoshResponse']);
?>
<html>
<body>
<form name="frmPay" method="post" >
<!-- <input type="hidden" value="<?php echo $aaaa; ?>" name="BharatkoshResponse" id="BharatkoshResponse"/> -->
<!-- <input type="submit"  size=15 name="go" id="gobtn" value="Go" onClick="javascript:submitForm();"> -->
 	
</form>
</body>
</html>


<?php
 
//7167221355049408, Incomplete, true

$url = 'localhost:8086/verifyXml';

//url-ify the data for the POST
//echo $strbharatxml=$response;
 $strbharatxml=$aaaa;
 //$strbharatxml= "PD94bWwgdmVyc2lvbj0iMS4wIj8+PHBheW1lbnRTZXJ2aWNlIHZlcnNpb249IjEuMCIgbWVyY2hhbnRDb2RlPSJNRVJDSEFOVCI+PHJlcGx5PjxvcmRlclN0YXR1cyBvcmRlckNvZGU9IjgzOTQ4NjI4NTMiIHN0YXR1cz0iSW5jb21wbGV0ZSI+PHJlZmVyZW5jZSBpZD0iIiBCYW5rVHJhbnNhY3N0aW9uRGF0ZT0iTkEiIFRvdGFsQW1vdW50PSIwIj48L3JlZmVyZW5jZT48L29yZGVyU3RhdHVzPjwvcmVwbHk+PFNpZ25hdHVyZSB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC8wOS94bWxkc2lnIyI+PFNpZ25lZEluZm8+PENhbm9uaWNhbGl6YXRpb25NZXRob2QgQWxnb3JpdGhtPSJodHRwOi8vd3d3LnczLm9yZy9UUi8yMDAxL1JFQy14bWwtYzE0bi0yMDAxMDMxNSIgLz48U2lnbmF0dXJlTWV0aG9kIEFsZ29yaXRobT0iaHR0cDovL3d3dy53My5vcmcvMjAwMC8wOS94bWxkc2lnI3JzYS1zaGExIiAvPjxSZWZlcmVuY2UgVVJJPSIiPjxUcmFuc2Zvcm1zPjxUcmFuc2Zvcm0gQWxnb3JpdGhtPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwLzA5L3htbGRzaWcjZW52ZWxvcGVkLXNpZ25hdHVyZSIgLz48L1RyYW5zZm9ybXM+PERpZ2VzdE1ldGhvZCBBbGdvcml0aG09Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvMDkveG1sZHNpZyNzaGExIiAvPjxEaWdlc3RWYWx1ZT5Uc2t3RFZSL0FXMityUE5YUGhNYUNuckthcG89PC9EaWdlc3RWYWx1ZT48L1JlZmVyZW5jZT48L1NpZ25lZEluZm8+PFNpZ25hdHVyZVZhbHVlPm9KM2tHRG9yUDhad0dxTElwNGVqb3QyUUJZU1gyWmhyTjhnWXhDNllGL0dZeHVkRlo2Rm01ZXM4Y1F0d0NPeUswQk1xVFJqZG5jb1doU0lFeE14MUpZYS9OL1NOYWYwSXdIUC9CSWpVd3dzWHJEUlRGaFVOWFV0amR5YUU0VjBMYmIrU0ZraHoxUWVVRTNYbVZUcFZGUzJnV2dMVmpYZ3Y0Y3cvUXRXVUxRejhiT2ZEdGNHbEpwMmJCcmxidVJZMEM5dFVXWmd4bUZicW1BUkhxK05sNEY2RVlEL0ZRZmFQQXJKTkJkWTFySUQ1aEFmS1V5aXdYdXNMMHhSOExibGt5UTAxamlKS1hMVFRSVUEwK2liaU9RL1p5aVFYc3lvM3lmL1lCRUErRWhOZnJYMjlXTUtIR3NnSjFpcGYyalNBU2VWdkVUWmZsak55S0tiMXJJeDdqdz09PC9TaWduYXR1cmVWYWx1ZT48S2V5SW5mbz48WDUwOURhdGE+PFg1MDlJc3N1ZXJTZXJpYWw+PFg1MDlJc3N1ZXJOYW1lPkNOPWUtTXVkaHJhIENBIFNQTCAyMDE1LTIsIE9JRC4yLjUuNC41MT0iM3JkIEZsb29yLFNhaSBBcmNhZGUiLCBTVFJFRVQ9Ik91dGVyIFJpbmcgUm9hZCwgQmFuZ2Fsb3JlIiwgUz1LYXJuYXRha2EsIFBvc3RhbENvZGU9NTYwMTAzLCBPVT1DZXJ0aWZ5aW5nIEF1dGhvcml0eSwgTz1lTXVkaHJhIExpbWl0ZWQsIEM9SU48L1g1MDlJc3N1ZXJOYW1lPjxYNTA5U2VyaWFsTnVtYmVyPjE4MDAwMjI1PC9YNTA5U2VyaWFsTnVtYmVyPjwvWDUwOUlzc3VlclNlcmlhbD48WDUwOUNlcnRpZmljYXRlPk1JSUZlVENDQkdHZ0F3SUJBZ0lFQVJLcFlUQU5CZ2txaGtpRzl3MEJBUXNGQURDQjBERUxNQWtHQTFVRUJoTUNTVTR4R0RBV0JnTlZCQW9URDJWTmRXUm9jbUVnVEdsdGFYUmxaREVkTUJzR0ExVUVDeE1VUTJWeWRHbG1lV2x1WnlCQmRYUm9iM0pwZEhreER6QU5CZ05WQkJFVEJqVTJNREV3TXpFU01CQUdBMVVFQ0JNSlMyRnlibUYwWVd0aE1TTXdJUVlEVlFRSkV4cFBkWFJsY2lCU2FXNW5JRkp2WVdRc0lFSmhibWRoYkc5eVpURWRNQnNHQTFVRU14TVVNM0prSUVac2IyOXlMRk5oYVNCQmNtTmhaR1V4SHpBZEJnTlZCQU1URm1VdFRYVmthSEpoSUVOQklGTlFUQ0F5TURFMUxUSXdIaGNOTVRnd056QTVNRGt3TVRNM1doY05NakF3TnpBNE1Ea3dNVE0zV2pBNU1TRXdId1lEVlFRTEV4aEViMjFoYVc0Z1EyOXVkSEp2YkNCV1lXeHBaR0YwWldReEZEQVNCZ05WQkFNVEMzQm1iWE11Ym1sakxtbHVNSUlCSWpBTkJna3Foa2lHOXcwQkFRRUZBQU9DQVE4QU1JSUJDZ0tDQVFFQXBqek1JdElNWGlMUDZ4VnFRanQ2c3dhdHozQ045dURjRXlXSlM0SGlWbzlyYld4N3luUnRFSkd4Q3RZb2g1akE2dXdmSDYyQ2l4MjNqNkdMTnZaQ2RSSnppWTljUWtBNmFNTldxUXdlMTQrUm5WeWcxNWwrMWxscHo5TkVXU2NkRFZMR01mTnRtZ3VOdmhiZWZDZEZGbm9sZ1RTOHZxbU5ia3BrWGJpdS9tRFZiYTRPWktNbS9BOHpBRXQrMno0clFVREpVMEdpTnZwTFJnZHVzT09MRXhqc0V4TkhqS21Xek1TTFVOVDB2T2xMczBHU21nMlFCemRKU1g1c3NvWjBOWXBCc0REOWIyRnZOVXhCNTNLVGxMeFk4WUZGbyt1RWpXbkU2S2tpK0xESnY2d0ZxUTNVOHR3UFJOcTdaRk1VQnF6VFpyUmxwczBvc0RtYzIzNDhMd0lEQVFBQm80SUI3ekNDQWVzd0p3WURWUjBSQkNBd0hvSUxjR1p0Y3k1dWFXTXVhVzZDRDNkM2R5NXdabTF6TG01cFl5NXBiakFUQmdOVkhTTUVEREFLZ0FoRW04UzNQVmZwRGpBZEJnTlZIUTRFRmdRVXlGQkVmcTYzazJTZExhMFZZc1MrNitJaXFpa3dEZ1lEVlIwUEFRSC9CQVFEQWdXZ01CMEdBMVVkSlFRV01CUUdDQ3NHQVFVRkJ3TUJCZ2dyQmdFRkJRY0RBakNCZ2dZRFZSMGdCSHN3ZVRBbEJnWmdnbVJrQWdJd0d6QVpCZ2dyQmdFRkJRY0NBakFOR2d0RGJHRnpjeUF5SUZOVFREQlFCZ2RnZ21Sa0FRZ0NNRVV3UXdZSUt3WUJCUVVIQWdFV04yaDBkSEE2THk5M2QzY3VaUzF0ZFdSb2NtRXVZMjl0TDNKbGNHOXphWFJ2Y25rdlkzQnpMMlV0VFhWa2FISmhYME5RVXk1d1pHWXdnWVlHQ0NzR0FRVUZCd0VCQkhvd2VEQW5CZ2dyQmdFRkJRY3dBWVliYUhSMGNEb3ZMMjlqYzNCemNHd3VaUzF0ZFdSb2NtRXVZMjl0TUUwR0NDc0dBUVVGQnpBQ2hrRm9kSFJ3T2k4dmQzZDNMbVV0YlhWa2FISmhMbU52YlM5eVpYQnZjMmwwYjNKNUwyTmhZMlZ5ZEhNdlpXMTFaR2h5WVdOaGMzQnNNakF4TlMweUxtTnlkREJQQmdOVkhSOEVTREJHTUVTZ1FxQkFoajVvZEhSd09pOHZkM2QzTG1VdGJYVmthSEpoTG1OdmJTOXlaWEJ2YzJsMGIzSjVMMk55YkhNdlpXMTFaR2h5WVdOaGMzQnNNakF4TlMweUxtTnliREFOQmdrcWhraUc5dzBCQVFzRkFBT0NBUUVBaEYzb2xoek1LeCtySGxIUnBpM3c0dFNKd0F6Tis5R1BUK1Jwb0lYQmxaRExhcXpSY3JiSGU3NVh5SVF4MzZDVlQyTkV6cHJvQS9kdHg1YXY2bnVNaE82N0dwbHlrNi9xOWFOV0JxdTFPRWJWdkhlZ1BHN0ErS2xvWHE3Y0dwTzQrR1hSS2F2aU1KNThHNG9MdGYxN01yb1g2ZVFBSjBCTDYxTDZ4RDZCS0kydjVVTjJ6bjJadHU0UGI5am0ydEpCYy9McXJRMU5SeTNmb2ZMYjBkK3dDL25ReFZqMmVpbnlrUDlSNUErbm5uanliVWdzZS9ySVQ2cG16bHNwWTdCTUJLVE1hU25rYVBrQzFCM3hBaDE5cHhEOG02N0Z0MWpONVpKK1FBZXNxenY3NWVUcXZ0TEZkUzhxUHJUL1FIbkNuUEZWckw4ZHBLVmRyNGtnb2pjY0JnPT08L1g1MDlDZXJ0aWZpY2F0ZT48L1g1MDlEYXRhPjwvS2V5SW5mbz48L1NpZ25hdHVyZT48L3BheW1lbnRTZXJ2aWNlPg==";
//$json_xml = json_encode($strbharatxml)
//open connection
 $ch = curl_init();


$fields_string = http_build_query($strbharatxml);
$fields_string =http_build_query($post_array);
//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_HEADER, false);

//curl_setopt($ch,CURLOPT_POST, count($fields_string));
curl_setopt($ch,CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch,CURLOPT_POSTFIELDS, $strbharatxml);

//curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Accept: application/json'
));
 //$result=curl_exec($ch);


//curl_exec($ch);
?>
 <p id="demo">
  <?php
 
//print_r($result);
// Will dump a beauty json :3
//echo $ar = json_decode($result, true);
//$json = json_decode(file_get_contents(curl_exec($ch)), true);
// $data = json_decode($json);
//echo $data->orderCode;


//echo $result;  
//$data = '{
//	"name": "Aragorn",
//	"race": "Human"
//}';
//echo curl_exec($ch);
$character = json_decode(curl_exec($ch));
//$data='{"signatureValidation":true,"orderCode":"5812263744513806","status":"Incomplete"}

//;;';

//$character = json_decode($data);
//echo $character[1];
	$ordercodefinalvalue= $character->orderCode;
	$signaturefinalvalue= $character->signatureValidation;
	$statusfinalvalue= $character->status;
	$transactionfinalvalue= $character->refId;
	$trandatefinalvalue= $character->bankTransacstionDate;
    $totalamountinalvalue= $character->totalAmount;


curl_close($ch);

  ?>
  

</div>
</div>
</form>

<html>
<body>
<form name="bharatkosh" method="post" >

<!--
 <input type="submit"  size=15 name="go" id="gobtn" value="Go" onClick="javascript:submitForm();">
-->
</form>
</body>
</html>


</div>
</body>
</html>

