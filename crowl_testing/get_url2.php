
<?
	$request_url ='http://www.qualitycodes.com/';
 
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $request_url);	// The url to get links from
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);	// We want to get the respone
	$result = curl_exec($ch);
 
	$regex='|<a.*?href="(.*?)"|';
	preg_match_all($regex,$result,$parts);
	$links=$parts[1];
	foreach($links as $link){
		echo $link."<br>";
	}
	curl_close($ch);
 ?>

