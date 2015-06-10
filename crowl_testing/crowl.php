// <?php
// $url = 'http://www.fiverr.com';
//$output = file_get_contents($url);
//
//
// echo $output;
// ?>
// 
 
 
 
 
 
 
 
 
 <?php
 
 $content = get_content("http://www.tamilmp3free.com/"); 
 echo $content;
 
 
 
 
 
 function get_content($url)  
{  
   $ch = curl_init();  
  
   curl_setopt ($ch, CURLOPT_URL, $url);  
   curl_setopt ($ch, CURLOPT_HEADER, 0);  
  
   ob_start();  
  
   curl_exec ($ch);  
   curl_close ($ch);  
   $string = ob_get_contents();  
  
   ob_end_clean();  
     
   return $string;      
  
} 

?>