
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


$text=file_get_contents('http://3.lirui1994.sinaapp.com/zhuyezhuaqu.php');
$text=str_replace(array("\r","\n","\t","\s"), '', $text);
preg_match_all('/(http\:\/\/jwchu\.cumt\.edu\.cn\/[^\<]*)|（http\:\/\/cs\.cumt\.edu\.cn\/studentworknew\/read\.php\?id=\d{0,3}[^\"]*）|(http\:\/\/[^\<]*\.cumt\.edu\.cn\/[^\<]*)|(http\:\/\/dsi\.cumt\.edu\.cn\/[^\<]*)|(http\:\/\/pd\.cumt\.edu\.cn\/[^\<]*)|(http\:\/\/jwb\.cumt\.edu\.cn\/[^\<]*)|(read\.php\?id=\d{0,4}[^\<]*)|(http\:\/\/www\.cumt\.edu\.cn\/[^\<]*[^x00-xff\"]*)/si',$text,$aaa);
preg_match_all('/[^x00-xff\.\/\%\&]+\s<[^>]*\/>/si',$text,$bbb);
$arr2=$bbb[0];


$arr1=$aaa[0];

for ($i= 0;$i< count($arr1); $i++){
$str= $arr1[$i];
$lianjiearray[$i]=$str;
    // echo '<a href="1.php?name='.$str.'">111</a>';
$str2= $arr2[$i];
    //echo' <tr>
    //                                        <td >
    //                                      <div class="texthidden">
    //                                            <img src="http://cs.cumt.edu.cn/images/icon3.jpg" />
    //                                        
    //
    //											<a  href="b.php?id='.$str.' target="_self" title='.$str2.'>'.$str2.'</a> 
    //                                           </div>
    //                                       </td>
    //                                       
    //                                    </tr>';
// echo '<a href="1.php?name='.$str.'">'.$str2.'</a>';
    $strarray[$i]=$str2;


    }


//echo $lianjiearray[5];
 
//$j=count($arr2);
//for ($i= 0;$i< $j; $i++){
  
    // echo $i;
//  echo $strarray[$i];
 
//   echo $lianjiearray[$i];
    
    
//}






?>
</body>
</html>
