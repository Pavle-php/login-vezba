<?php
/*function n($num)
{
	$e = str_split($num);
	$num = count($e);
	return $num;
}
 echo n(234);*/
 /*$n = 3; 
 $arr = [53, 100, 4, 2345, 150];
 $f = 0;*/
 /*function f1($n, $arr=[], $f=0){
 	foreach($arr as $num){
 		$e = str_split($num);
 		
 		if(count($e)==$n){	
 			$f = $f + $num;
 		}
	}
	return $f;
}
echo f1(3,[53, 100, 4, 2345, 150]);*/
/*$a = 'krag';
$b = 'ujevac';


$aArr = str_split($a);
$bArr = str_split($b); 
$plus = count($aArr) + count($bArr);
if(count($aArr)>=count($bArr)){
	$c = $aArr;
} else $c = $bArr;
$newArr = [];
for($i=0;$i<=count($c);$i++){
	if(isset($aArr[$i])and$aArr[$i]!==null){
	array_push($newArr,$aArr[$i]);


	}
	if(isset($bArr[$i])and$bArr[$i]!==null){
	array_push($newArr,$bArr[$i]);
	}
}
$e = implode($newArr, '');
echo $e;*/


/*$n=7;
for($i=1; $i<=$n; $i++){
	for($j=$i; $j<$n+$i; $j++){
		
		if($j>$n){
			echo $j-$n;
		}
		else echo $j;
	}
	echo '<br>';
}*/











/*$n=1;
$arr=str_split($n);
$arr2 = [];
if(sizeof($arr)==1){ $check = 'jesu';}
for($i=1;$i<=sizeof($arr)-1;$i++){
	if($arr[$i-1]>=$arr[$i]){
		$check = 'nisu';
		break;
	} 
	else $check = 'jesu';
}
echo $check;*/




/*$a = 'anavolimilovana';
$b = str_split($a);
$arr=[];
for($i=1;$i<=sizeof($b);$i++){
	$arr[$i]=$b[count($b)-$i];
}
$b = implode($arr);
if($a == $b){
	echo 'jeste';
} 
else 
	echo 'nije';*/

$n = 7;

for($i=1;$i<=$n;$i++){
	for($j=1;$j<=$n;$j++){
		if($i==1 || $i==$n || $j==1 || $j==$n || $j==$n-$i+1){
			echo '*';
		} else {
			echo "1";
		}
	}
	echo "<br>";
}