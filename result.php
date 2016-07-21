<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>戦闘力診断結果</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<p>
<?php
$key = in_array('0', $_POST);
if($key){
	echo '<p class="center">未入力の質問がありました。正しく診断できません。</p>';}
else{
$sum = array_sum($_POST);
if($sum == 0){
}
elseif($sum <=  1){
	echo '<p class="center">あなたの戦闘力は2です。あなたは一般人です。</p>';
	echo '<div class="center"><img src="picture/figure_goal_race_business.png"/></div>';
}
elseif($sum <=  4){
	echo '<p class="center">あなたの戦闘力は5です。あなたは農家のおじさんです。</p>';
	echo '<div class="center"><img src="picture/nouka_ase_fuku.png"/></div>';
}
elseif($sum <=  6){
	echo '<p class="center">あなたの戦闘力は10です。あなたは一般社会ではかなりの強者です。人生で成功できるでしょう。</p>';
	echo '<div class="center"><img src="picture/kigyou_business_man.png"/></div>';
}
elseif($sum <=  7){
	echo '<p class="center">あなたの戦闘力は18000です。あなたはベジータになれるでしょう。</p>';
	echo '<div class="center"><img src="picture/g8exxn2g.jpg"/></div>';
}
elseif($sum <=  8){
	echo '<p class="center">あなたの戦闘力は53万です。あなたはフリーザですか？</p>';
	echo '<div class="center"><img src="picture/thO56TYFID.jpg"/></div>';
	
}
else{
	echo '<p class="center">あなたは戦闘力は∞です。戦闘力などというどうでもよい概念に惑わされず自分の人生を生きてください。</p>';
	echo '<div class="center"><img src="picture/figure_ta-da.png"/></div>';

}
}
?>
</p>

</body>
</html>