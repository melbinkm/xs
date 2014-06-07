<?php
echo "<b> <u> WORDPRESS VERSION FINDER BY MELBIN </u> </b> <br/> <br/>";
$count = 0;
$fail=0;
$site = 'http://­www.telecomclue.com';
$url= $site.'/wp-admin/';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, true);   
curl_setopt($ch, CURLOPT_NOBODY, true);    
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.4");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_TIMEOUT,10);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$output = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

echo "Analysing /wp-admin/ ---  ";
if ($httpcode == '200')
{
echo "Success <br/>";
$count++;}
else 
{
echo "Failed <br/>";
$fail++;
}


$url2= $site.'/wp-content/';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, true);    
curl_setopt($ch, CURLOPT_NOBODY, true);   
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.4");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_TIMEOUT,10);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$output = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);


echo "Analysing /wp-content/ ---  ";
if ($httpcode == '200')
{
echo "Success <br/>";
$count++;
}
else
{ 
echo "Failed <br/>";
$fail++;
}

$url3= $site.'/wp-includes/';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, true);    
curl_setopt($ch, CURLOPT_NOBODY, true);    
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.4");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_TIMEOUT,10);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$output = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

//echo $httpcode;
echo "Analysing /wp-includes/ ---  ";
if ($httpcode == '200')
{echo "Success <br/>";
$count++;}
else {
echo "Failed <br/>";
$fail++;}

$url4= $site.'/wp-includes/js/';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, true);    // we want headers
curl_setopt($ch, CURLOPT_NOBODY, true);    // we don't need body
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.4");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_TIMEOUT,10);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$output = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);


echo "Analysing /wp-includes/js/ ---  ";
if ($httpcode == '200')
{echo "Success <br/>";
$count++; }
else {
echo "Failed <br/>";
$fail++; }

$url5= $site.'/wp-includes/css';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, true);    
curl_setopt($ch, CURLOPT_NOBODY, true);   
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.4");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_TIMEOUT,10);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$output = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);


echo "Analysing /wp-includes/css ---  ";
if ($httpcode == '200')
{echo "Success <br/>";
$count++;}
else {
echo "Failed <br/>";
$fail++;}

$url6= $site.'/wp-includes/images';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, true);    
curl_setopt($ch, CURLOPT_NOBODY, true);    
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.4");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_TIMEOUT,10);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$output = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);


echo "Analysing /wp-includes/images ---  ";
if ($httpcode == '200'){
echo "Success <br/>";
$count++;}
else {
echo "Failed <br/>";
$fail++;}

$url7= $site.'/wp-includes/text';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, true);    
curl_setopt($ch, CURLOPT_NOBODY, true);   
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.4");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_TIMEOUT,10);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$output = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);


echo "Analysing /wp-includes/text ---  ";
if ($httpcode == '200')
{echo "Success <br/>";
$count++;}
else {
echo "Failed <br/>";
$fail++;}

echo "<br/> <br/> Test Succeeded ". $count ." Times and Failed ". $fail ." times.";

if ($count >5)
{
$url8 = $site.'/readme.html';
$w = file_get_contents($url8);

$pos = strpos($w,"Version", 0);
$end  = strpos($w, "</h1>", $pos);
    
$name = substr($w,$pos,$end-$pos);

echo "<br/> <br/> <b> Wordpress ". $name;
}
else

echo "This is not a Wordpress site";

?>