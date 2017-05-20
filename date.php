<html>
<head>
</head>
<body>
<?php 
 /*$a =date('d/m/y');
 $b ='20/10/17';
 echo $a;
 echo $b;
 $z= b-a;
 echo $z;*/
/*$date1 = 08/16/2013;
$date2 = 08/23/2013
$datetime1 = new DateTime($date1); 
$datetime2 = new DateTime($date2);
$days = round(($datetime1->format("U") - $datetime2->format("U")) / 86400);
echo $days;*/
/* $date1 = '08/16/2013';-->*/
$date1=date('m/d/y');
echo $date1;
$date2 = '06/30/2017';
echo $date2;
$days = (strtotime($date2) - strtotime($date1)) / (60 * 60 * 24);
print $days;
?>
</body>
</html>