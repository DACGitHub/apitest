
<?php
include("XMLSoccer.php");
try{
	$soccer=new XMLSoccer("TJEFVNWKREQUBRWTNODLEWZZOWWGWKVCVQMVISPOYNLBZSDDAN");
	$soccer->setRequestIp("ip_for_request");
	$result=$soccer->GetLeagueStandingsBySeason(array("league"=>3,"seasonDateString"=>"1314"));
	var_dump($result);
}
catch(XMLSoccerException $e){
	echo "XMLSoccerException: ".$e->getMessage();
}
?>