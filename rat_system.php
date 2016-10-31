<html>
<head>
<meta charset="UTF-8">
<style type="text/css">
p{
	text-align: center;
	font-size: 15px;
	font-weight: 700;
}
</style>
</head>	
<body>
<p>
<?php

$player = $_POST['player'];
$rat = $_POST['rat'];

for($i = 1; $i <= 50 ; $i++){
	$player = array_filter($player);
	$rat = array_filter($rat);

	if(isset($rat [$i]) == true){		
		if(isset($player [$i]) == false){
		echo '名前の入力漏れがあります。ご確認ください。';
		exit();
		}
	}

	if(isset ($player [$i]) == true){
		if(isset ($rat [$i] ) == false){
			echo 'レーティングポイントの入力漏れがあります。ご確認ください。';
		exit();
		}
		elseif(preg_match("/^[0-9]+$/",$rat [$i])==false){
		echo 'レーティングポイントは半角英数字で記入してください。';
		exit();
		}
		else{}
	}
}


$rating = array_combine ($player,$rat);
arsort($rating);
$rating = array_filter($rating);


$keylast = key(array_slice($rating, -1, 1, true));
$conponent = count($rating)/2;
$remainder = count($rating)%2;

if ($remainder==0) {
}
else {
echo $keylast;
echo "さんは手空きです。";
echo '<br>';
echo '<br>';
}

for($i = 1; $i <= $conponent ; $i++){
$keyzero = key(array_slice($rating, 0, 1, true));
$keyone = key(array_slice($rating, 1, 1, true));
echo $keyzero."さんと".$keyone."さんが対戦します。";
echo '<br>';
echo '<br>';
unset ($rating[$keyzero],$rating[$keyone]);
}
?>
</p>
</body>
</html>