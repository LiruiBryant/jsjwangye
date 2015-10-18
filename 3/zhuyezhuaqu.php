
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php

$strarray=array();
$lianjiearray=array();

//取得指定位址的內容，並储存至text
$text=file_get_contents('http://cs.cumt.edu.cn/');

//去除換行及空白字元（序列化內容才需使用）
$text=str_replace(array("\r","\n","\t","\s"), '', $text); 

//取出div标签且id為PostContent的內容，並储存至阵列match
//preg_match('/<div[^>]*class="texthidden"[^>]*>(.*?) <\/div>/si',$text,$match);
//preg_match_all('/title="[^x00-xff]*"/si',$text,$a);
//
//preg_match_all('/alt="[^x00-xff]*"/si',$text,$aa);

//preg_match_all('/<div[^>]*class="texthiddendiv"[^>]*>(.*?)<img [^>]*\/>(.*?)<a[^.]*[^x00-xff]*[^.]*>[^x00-xff]*<\/a><\/div>/si',$text,$aaa);

preg_match_all('/<a[^>]*[^x00-xff]*[^>]*[^x00-xff]*[^>]*>(.*?)<\/a>/si',$text,$aaa);

//印出match[0
//print($match[0]);
//preg_match_all('/target="_self"[^>]*title="[^x00-xff]*"/si',$text,$aaa);

//$arr=$a[0];
//for ($i= 0;$i< count($arr); $i++){
//$str= $arr[$i];
//echo "the number is $str.<br />";
//}




$arr1=$aaa[0];
for ($i= 0;$i< count($arr1); $i++){
$str= $arr1[$i];

    preg_match_all('/(http\:\/\/[^\"]*\.cumt\.edu\.cn\/[^\"]*)|(http\:\/\/jwb\.cumt\.edu\.cn\/[^\"]*)|（http\:\/\/cs\.cumt\.edu\.cn\/studentworknew\/read\.php\?id=\d{0,3}[^\"]*）|(read\.php\?id=\d{0,4})|(http\:\/\/www\.cumt\.edu\.cn\/[^\"]*[^x00-xff\"]*)/si',$str,$lianjie);

$lianjie1=$lianjie[0];

for ($j= 0;$j< count($lianjie1); $j++){

$strlianjie=$lianjie1[$j];

if($i<46||$i>50&&$i<65||$i>69&&$i<71||$i>=76&&$i<77||$i==82||$i==88){
	continue;}
	else{

$lianjiearray[$i]=$strlianjie;

print_r($strlianjie);

	}

echo " <br />";
}



    $str=preg_replace('/[a-zA-Z0-9\_\"\-\.\=\<\>\:\/\?\;\&&\%%]+/', "", $str);
    
     $len=strlen($str)/2;
   $str = substr($str,$len+2);
//$str=preg_replace('/^(<div)[\n.]*[^x00-xff]*[\n.]*(\")$>/',"", $str);
//preg_match_all("/[\x{4e00}-\x{9fa5}]+/u",$str,$match);
//preg_match_all("/[\x{4e00}-\x{9fa5}]+/u",$str,$str3);
//preg_match_all('/^(title)="[^.]*[^x00-xff]*[^.]*[^x00-xff]*[^.]*"(>)$/si',$str,$str3);
if($i<46||$i>50&&$i<65||$i>69&&$i<71||$i>=76&&$i<77||$i==82||$i==88){
	continue;}
	else{

$strarray[$i]=$str;

print_r($str);

	}


echo " <br />";
}

//print_r($arr[1]);

/*foreach($strarray as $a){
echo $a;}
foreach($lianjiearray as $l){
echo $l;}
*/
?>
</body>
</html>
