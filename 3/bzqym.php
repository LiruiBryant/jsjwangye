
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
require_once "b.php";

$strarray=array();
$lianjiearray=array();

//取得指定位址的內容，並储存至text
$text=file_get_contents('$lianjie');

//去除換行及空白字元（序列化內容才需使用）
//$text=str_replace(array("\r","\n","\t","\s"), '', $text); 

preg_match_all('/<div class="articleTitle"[^>]*>(.*?)<\/div>/si',$text,$aaa);
preg_match_all('/<DIV style="LINE-HEIGHT: 22pt; TEXT-INDENT: 28pt">(.*?)*<\/div>/si',$text,$bbb);
preg_match_all('/<DIV style="TEXT-ALIGN: center; LINE-HEIGHT: 22pt; TEXT-INDENT: 28pt">(.*?)*<\/div>/si',$text,$ccc);
$arr1=$aaa[0];
$arr2=$bbb[0];



//print_r($arr[1]);

/*foreach($strarray as $a){
echo $a;}
foreach($lianjiearray as $l){
echo $l;}
*/
?>
</body>
</html>
