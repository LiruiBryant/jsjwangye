
<!doctype html>
<html>
<head>

<meta charset="utf-8" name="viewport" content="width=device-width">
<title>计算机学院-学生工作</title>
<style type="text/css">

.time{
	color:#999 !important;
	margin:0px !important;
	font-size:14px !important;
	padding:0px !important;}
div{
	
	padding-bottom:5px;
	padding-top:5px;}
a{ 
	text-decoration:none;
	font-weight:normal !important;
	
	color:#333 !important;
	}
	.header1{
		color:#FFF !important;
		background-color:#06C !important;}
.hengxian{
	
	border-bottom:solid 1px rgba(124,76,164, 0.4);
	}
.yejiao{
	
	font-weight:normal !important;
	font-size:10px; !important}
.yemei{
	
	 margin-top:5px !important;}


</style>
    

<link href="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css" rel="stylesheet" type="text/css"/>
<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.js" type="text/javascript"></script>
</head>

<body><div data-role="page">
<div data-role="header" class="header1" data-position="inline" >
<a class="yemei" href="http://3.lirui1994.sinaapp.com/index.php" data-icon="home">首页</a>
<h1>计算机学院</h1>
<a class="yemei" href="" data-icon="check" class="ui-btn-right">下一页</a>
</div>
<div data-role="content">
   

 <?php 

$id = $_GET["id"];

$len=strlen($id)-8;
$str2 = substr($id,0,$len);
 if((preg_match_all('/(cs\.cumt\.edu\.cn\/studentworknew\/read\.php\?id\=665[^\<]*)/',$str2,$aaa)))
    {
    $lianjie1 = $str2;
$text1=file_get_contents($lianjie1);
    echo '正在跳转...';

echo' <form name="form1" action='.$lianjie1.' method="get"> </form> <script language="javascript"> document.form1.submit() </script> ';
    
    }else if((preg_match_all('/(read\.php\?id=\d{0,4}[^\<]*)/',$str2,$aaa))){
   
    $lianjie = 'http://cs.cumt.edu.cn/'.$str2;
   
	}
//else 
//{
//	$lianjie1 = $str2;
//$text1=file_get_contents($lianjie1);
//  echo '正在跳转...';

//echo' <form name="form1" action='.$lianjie1.' method="get"> </form> <script language="javascript"> document.form1.submit() </script> ';
//	}

//echo $lianjie;
//echo $lianjie;
//取得指定位址的內容，並储存至text
$text=file_get_contents($lianjie);
//去除換行及空白字元（序列化內容才需使用）
//$text=str_replace(array("\r","\n","\t","\s"), '', $text); 
preg_match_all('/<div class="articleTitle"[^>]*>(.*?)<\/div>/si',$text,$aaa);
preg_match_all('/<div [^>]*>(.*?)<\/div>/si',$text,$bbb);
//preg_match_all('/(<DIV style="LINE-HEIGHT: 22pt; TEXT-INDENT: 28pt")|(<div class="articleContent")|(<div class="read")|(<div style="TEXT-INDENT: [0-9]+.[0-9]*pt")>(.*?)+<\/div>/si',$text,$bbb);
preg_match_all('/<DIV style="TEXT-ALIGN: center; LINE-HEIGHT: 22pt; TEXT-INDENT: 28pt">(.*?)*<\/div>/si',$text,$ccc);
echo '<h1 align = center>';
print_r($aaa[0][0]);
echo '</h1>';
//$arr1=$aaa[0];
$arr2=$bbb[0];
for ($i= 0;$i< count($arr2); $i++){
    if($i<11){continue;}
    else{
$str2=$arr2[$i];
    
    //print_r($str);
print_r($str2);

    echo " <br />";
    }}
$arr3=$ccc[0];
$len2 =count($arr3);
for($j = 0; $j<$len2;$j++){
$str3 = $arr3[$j];
print_r($str3);
}

?>
    </div>


   

</div>
</body>
</html>
