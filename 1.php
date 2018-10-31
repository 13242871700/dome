<?php
/*
$url=$_GET['url'];
if(empty($url)){
   exit;
}
//echo http_curl($url);

$x= 1;
do {
  $demo = http_curl(urldecode($url));
  if($x >= 3){break;}
  $x++; 
  $xunhuan = '0';
  if(strstr( $demo,".m3u8") || strstr( $demo,".mp4")){
  		$xunhuan = '1';
  }  
  		#这里判断0 则继续循环
} while ( $xunhuan == 0);	
 echo   $demo;


function rarray_rand( $arr ){
    return mt_rand( 0, count( $arr ) - 1 );
}
function varray_rand( $arr ) {
    return $arr[rarray_rand($arr)];
}

function http_curl($url){
  #读取随机一行代理ip
  $keyx  = file("ip.txt");
  $dl_ip =trim(varray_rand($keyx));
  
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
  
  curl_setopt($curl, CURLOPT_PROXYAUTH, CURLAUTH_BASIC);                  //代理认证模式
  curl_setopt($curl, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);                  //使用http代理模式
 // curl_setopt($curl, CURLOPT_PROXY, '121.8.98.197:80');                    //代理服务器地址 host:post的格式
  curl_setopt($curl, CURLOPT_PROXY,$dl_ip);                    //代理服务器地址 host:post的格式
    
  curl_setopt($curl, CURLOPT_TIMEOUT,4); // 设置等待时间
  curl_setopt($curl, CURLOPT_HEADER,0);
  curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.1 Safari/537.11'); //设置来路
  curl_setopt($curl, CURLOPT_ENCODING,'gzip');
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_FOLLOWLOCATION,1); //是否抓取跳转后的页面 
  $urls = curl_exec($curl);
  if (curl_errno($curl)) {return '';}
  curl_close($curl);
  return $urls ;
}

*/
?>
<?php

$url=$_GET['url'];
if(empty($url)){
   exit;
}
echo http_curl($url);



function rarray_rand( $arr ){
    return mt_rand( 0, count( $arr ) - 1 );
}
function varray_rand( $arr ) {
    return $arr[rarray_rand($arr)];
}

function http_curl($url){
  #读取随机一行代理ip
  $keyx  = file("ip.txt");
  $dl_ip =trim(varray_rand($keyx));
  
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
  
  curl_setopt($curl, CURLOPT_PROXYAUTH, CURLAUTH_BASIC);                  //代理认证模式
  curl_setopt($curl, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);                  //使用http代理模式
 // curl_setopt($curl, CURLOPT_PROXY, '121.8.98.197:80');                    //代理服务器地址 host:post的格式
  curl_setopt($curl, CURLOPT_PROXY,$dl_ip);                    //代理服务器地址 host:post的格式
    
  curl_setopt($curl, CURLOPT_TIMEOUT,6); // 设置等待时间
  curl_setopt($curl, CURLOPT_HEADER,0);
  curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.1 Safari/537.11'); //设置来路
  curl_setopt($curl, CURLOPT_ENCODING,'gzip');
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_FOLLOWLOCATION,1); //是否抓取跳转后的页面 
  $urls = curl_exec($curl);
  if (curl_errno($curl)) {return 'ERROR '.curl_error($curl);}
  curl_close($curl);
  return $urls ;
}


?>