<script>
function submitForm(){
	with(document.frmPay){
		action="http://164.100.129.32/bharatkosh/bkepay";
		submit();
		return true;
	}
}
</script>
<?php 
$salt=rand('0000','9999');
 //Write code to fetch the all value to pass in the variable   	 
$email='';
$departmentcode='010';						//Fixed
$merchantBatchCode=$salt;		//SaltID
$OrderCode=$salt;				//SaltID
//$merchantBatchCode='9007641209609303';		//SaltID
//$OrderCode='9007641209609303';				//SaltID
$orderbactachAmount='1';
$InstallationId='10070';					//Fixed
$description='APTEL RECEIPT(COURT FEE)';		//Fixed
$cartdetailAmount='1';
$OrderContent='326';						//Fixed
$PaymentTypeId='51';						//Fixed
$PAOCode='013455';							//Fixed
$DDOCode='213459';							//Fixed
$ShopperEmailAddress='raj kuamr dubey';
$shipaddfirst='Ravi Kumar';
$shipaddlast='dubey';
$shipaddress1='Police line sidhi';
$shippincode='486661';
$shipcity='Sidhi';
$shipstateregion='New Delhi';
$shipstate='Delhi';
$shipcountry='INDIA';
$shipmobileno='9958663113';
$billaddfirst='ravi ';
$billaddlast='Police line sidhi';
$billaddress1='Police line sidhi';
$billpincode='110092';
$billcity='Delhi';
$billstateregion='Delhi';
$billstate='New Delhi';
$billcountry='INDIA';
$billmobileno='9958663113';
$strbharatxml="<BharatKoshPayment DepartmentCode='$departmentcode' Version='1.0'><Submit><OrderBatch TotalAmount='$orderbactachAmount' Transactions='1' merchantBatchCode='$merchantBatchCode'><Order InstallationId='$InstallationId' OrderCode='$OrderCode'><CartDetails><Description/><Amount CurrencyCode='INR' exponent='0' value='$cartdetailAmount' /><OrderContent>$OrderContent</OrderContent><PaymentTypeId>$PaymentTypeId</PaymentTypeId><PAOCode>$PAOCode</PAOCode><DDOCode>$DDOCode</DDOCode></CartDetails><PaymentMethodMask><Include Code='Online'/></PaymentMethodMask><Shopper><ShopperEmailAddress>$ShopperEmailAddress</ShopperEmailAddress></Shopper><ShippingAddress><Address><FirstName>$shipaddfirst</FirstName><LastName>$shipaddlast</LastName><Address1>$shipaddress1</Address1><Address2/><PostalCode>$shippincode</PostalCode><City>$shipcity</City><StateRegion>$shipstateregion</StateRegion><State>$shipstate</State><CountryCode>$shipcountry</CountryCode><MobileNumber>$shipmobileno</MobileNumber></Address></ShippingAddress><BillingAddress><Address><FirstName>$billaddfirst</FirstName><LastName>$billaddlast</LastName><Address1>$billaddress1</Address1><Address2/><PostalCode>$billpincode</PostalCode><City>$billcity</City><StateRegion>$billstateregion</StateRegion><State>$billstate</State><CountryCode>$billcountry</CountryCode><MobileNumber>$billmobileno</MobileNumber></Address></BillingAddress><StatementNarrative/></Order></OrderBatch></Submit></BharatKoshPayment>";
 //$strbharatxml;
?>
<?php
$url = 'localhost:8086/signXml';
//open connection
$ch = curl_init();
$fields_string = http_build_query($strbharatxml);
$fields_string =http_build_query($post_array);
//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
//curl_setopt($ch,CURLOPT_POST, count($fields_string));
curl_setopt($ch,CURLOPT_POST, 1);
curl_setopt($ch,CURLOPT_POSTFIELDS, $strbharatxml);
curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: text/plain'));
//execute post
//$result = curl_exec($ch);
//$result = curl_exec($ch);
//echo $result;


?>


<html>
<body>
<form name="frmPay" method="post" >
<div>
 <input type="text" value="<?php $result = curl_exec($ch); ?>"  name="bharrkkosh" id="bharrkkosh"/>
 <input type="submit"  size=15 name="go" id="gobtn" value="Pay Online" onClick="javascript:submitForm();">
 <!--  <input type="submit"  size=15 name="go" id="gobtn" value=" Submit" onClick="javascript:submitofflineForm();"> -->
 <!--  <input type="submit"  size=15 name="go" id="gobtn" value=" Submit" onClick="javascript:finalsubmit();"> -->
 
 	</br></br></br></br></br></br></br></br></br></br>
 </div>
</form>
</body>
</html>
</div>
<?php 
//close connection
curl_close($ch); 


?>
