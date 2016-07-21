<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>私のプログラミング練習</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>私のプログラミング練習</h1>
<p>
今日の日付は
<?php
date_default_timezone_set('Asia/Tokyo');

echo date('Y年m月d日');
?>
です。
</p>

<p>
サイコロを振ると
<?php
function roll(){
	return mt_rand(1,6);
}
echo roll();
?>
の目がでました。
</p>

<p>
あなたが好きな果物は
<?php
$hash = array("リンゴ","ミカン","バナナ");
$key = array_rand($hash);
echo $hash[$key];
?>
です。<br>
<?php
print_r($hash);
?>
</p>

<p>
これから出てくる3つの数字を足してみましょう。
<?php
print "<br>";
function dog($sides){
	return mt_rand(1,$sides);
}
echo dog(6);
print "<br>";
echo dog(10);
print "<br>";
print dog(30);
?>
</p>
</body>
</html>

<p>あなたの就職力を診断します。以下の質問に答えてください</p>
<form method="post" action="saikoro.php">
<p>問1.あなたは俗にいういい大学の生徒ですか。</p>
<p>
<input type="radio" name="university" value="1">Yes<br>
<input type="radio" name="university" value="0.01">No<br>
</p>
<p>問2.あなたはサークルや部活に所属していましたか。</p>
<p>
<input type="radio" name="circle" value="1">Yes<br>
<input type="radio" name="circle" value="0.01">No<br>
</p>
<p>問3.運動をする習慣はありますか。</p>
<p>
<input type="radio" name="sport" value="1">Yes<br>
<input type="radio" name="sport" value="0.01">No<br>
</p>
<p>問4.あなたは組織のリーダーを務めたことがありますか。</p>
<p>
<input type="radio" name="leader" value="1">Yes<br>
<input type="radio" name="leader" value="0.01">No<br>
</p>
<p>問5.あなたは論理的に話ができますか。</p>
<p>
<input type="radio" name="logical" value="1">Yes<br>
<input type="radio" name="logical" value="0.01">No<br>
</p>
<p>問6.あなたは重要な場面でも心に余裕を持てますか。</p>
<p>
<input type="radio" name="mind" value="1">Yes<br>
<input type="radio" name="mind" value="0.01">No<br>
</p>
<p>問7.あなたはゼミに所属していましたか。</p>
<p>
<input type="radio" name="seminal" value="1">Yes<br>
<input type="radio" name="seminal" value="0.01">No<br>
</p>
<p>問8.あなたはとっさの質問でも十分な説得力のある答えができますか。</p>
<p>
<input type="radio" name="wit" value="1">Yes<br>
<input type="radio" name="wit" value="0.01">No<br>
</p>
<p>問9.あなたは人生において成功するための哲学を持っていますか。</p>
<p>
<input type="radio" name="philosophy" value="1">Yes<br>
<input type="radio" name="philosophy" value="0.01">No<br>
</p>
<p>問10.あなたには親友や恋人がいますか。</p>
<p>
<input type="radio" name="friend" value="1">Yes<br>
<input type="radio" name="friend" value="0.01">No<br>
</p>
<p><input class="submit_button" type="submit" value="送信">
</p>
</form>

<p>
<?php
$sum = array_sum($_POST);
if($sum == 0){
}
elseif($sum < 3){
	echo "あなたは正社員にはなれません。";
}
elseif($sum < 7){
	echo "あなたは正社員になれます。";
}
else{
	echo "あなたは就職にこまらないでしょう。";
}
?>
</p>

