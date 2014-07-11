<?php
function get_tiny_url($url) 
{  
	$ch = curl_init();  
	$timeout = 5;  
	curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url);  
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);  
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);  
	$data = curl_exec($ch);  
	curl_close($ch);  
	return $data;  
}

if(isset($_REQUEST['url']))
{
	$new_url = get_tiny_url($_REQUEST['url']);
	if($new_url != '')
	{
		echo $new_url;
	}
}
?>