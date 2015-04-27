<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php 

class reneww
{

public function  merge($a,$b)
{
	$c=array();
	$counta=count($a);$countb=count($b);
	for($i=0;$i < $countb;$i++)
{ $set=0;$k=0;
	for($k=0;$k < $counta;$k++)
	{
		
		if ($a[$k]==$b[$i]){$set=0;break; }
		else {$set=1;}
	}
	if($set==1)array_push($a,$b[$i]);
}
foreach($a as $merge){echo $merge;echo "\n";}
return $a;
}
}
 $a = array('ali','faisal','punjab','candidate');
$b = array('lahore','punjab','street','candidate', 'pakistan');
$result=new reneww();
 $result->merge($a,$b);

?>
</body>
</html>