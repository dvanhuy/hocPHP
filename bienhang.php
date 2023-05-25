<?php
$cusName = "Huy";
$cusDetail = "asdasd";
echo $cusName;
echo "xuongdong<br/>";
echo "adasd";

print_r($cusName);
var_dump($cusName);
echo "<br/>".$cusName.$cusDetail;
echo "<br/>";
?>
<img src="https://picsum.photos/200/300" alt="">

<?php
$urlImg = "https://picsum.photos/200/300";
$htmlimg = '<img src="'.$urlImg.'" alt="">';
echo $htmlimg;
?>
<?php
define("_WEB_HOST_ROOT","https://picsum.photos/id/237/200/300");
echo _WEB_HOST_ROOT;
?>
