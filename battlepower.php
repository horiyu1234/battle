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

<p>あなたの戦闘力を診断します。以下の質問に答えてください。</p>
<form method="post" action="battlepower.php">
<p>問1.あなたはゴキブリに素手で触わることができますか。</p>
<p>
<input type="radio" name="gokiburi" value="1">余裕っしょ。<br>
<input type="radio" name="gokiburi" value="0.8">人前ならなんとか。<br>
<input type="radio" name="gokiburi" value="0.01">絶対無理。<br>
<input type="radio" name="gokiburi" value="0.5">ティッシュでつまむ。<br>
</p>
<p>問2.あなたはぶっちゃけマッチョですか。</p>
<p>
<input type="radio" name="mascle" value="1">体重100kg以上のゴリマッチョだ。<br>
<input type="radio" name="mascle" value="0.5">今流行りの細マッチョ、そこそこ。<br>
<input type="radio" name="mascle" value="0.01">マッチョではない。<br>
<input type="radio" name="mascle" value="0.8">見た目よりは体力ある。<br>
</p>
<p>問3.あなたは勉強ができる方ですか。</p>
<p>
<input type="radio" name="study" value="0.8">東大とか余裕だぜ。<br>
<input type="radio" name="study" value="0.5">そこそこには。まあまあの大学には入れる。<br>
<input type="radio" name="study" value="0.01">勉強何それおいしいの。<br>
<input type="radio" name="study" value="1">好きなことであれば勉強できる。<br>
</p>
<p>問4.あなたは何か格闘技を習っていますか。それは得意ですか。</p>
<p>
<input type="radio" name="combat_art" value="1">やってる。雑魚が何人かかってきても相手にならないぜ。<br>
<input type="radio" name="combat_art" value="0.5">まあ、護身術程度ではある。<br>
<input type="radio" name="combat_art" value="0.01">やってない。<br>
<input type="radio" name="combat_art" value="0.8">人間の格闘技とかやる必要はない。<br>
</p>
<p>問5.目の前にゴジラが現れました。あなたはどうしますか。</p>
<p>
<input type="radio" name="gojira" value="0.5">大事な人を連れて逃げる。<br>
<input type="radio" name="gojira" value="1">自衛隊なので、みんなのためにゴジラと戦う。<br>
<input type="radio" name="gojira" value="0.8">俺がかめはめ波を打てば余裕。<br>
<input type="radio" name="gojira" value="0.01">一目散に逃げる。
<br>
</p>
<p>問6.あなたは動物の気持ちがわかりますか。</p>
<p>
<input type="radio" name="animal" value="0.5">声が聞こえる。<br>
<input type="radio" name="animal" value="1">ペットとして、飼ってて少しはわかる。<br>
<input type="radio" name="animal" value="0.01">人間なんだからそんなもん知らん。<br>
<input type="radio" name="animal" value="0.8">おれがジャングルの長だ。<br>
</p>
<p>問7.目的地は僻地です。目的地まではまだ時間があり、走ればぎりぎり間に合いそうです。さあどうしますか。</p>
<p>
<input type="radio" name="destination" value="0.01">まあ、安定のタクシー<br>
<input type="radio" name="destination" value="0.5">普通に走る。<br>
<input type="radio" name="destination" value="1">ヒッチハイクする。<br>
<input type="radio" name="destination" value="0.8">自家用ジェットを使う。<br>

</p>
<p>問8.あなたは定職をもっています。しかし、ロジャーが死亡して「大海賊時代」が始まりました。あなたはどうしますか。</p>
<p>
<input type="radio" name="pirate" value="0.8">財閥の力を駆使して部下に財宝を取りにいかせる。<br>
<input type="radio" name="pirate" value="1">当然俺が海賊王になる。<br>
<input type="radio" name="pirate" value="0.01">そんなもん探さないで真面目に働く。<br>
<input type="radio" name="pirate" value="0.01">海賊を取り締まる。<br>
</p>
<p>問9.あなたは人生において成功するためのポリシーを持っていますか。または、絶対に成し遂げたいことがありますか。</p>
<p>
<input type="radio" name="philosophy" value="0.8">何事にも通じる考え方はもっている。<br>
<input type="radio" name="philosophy" value="1">俺にはなすべきことがある。<br>
<input type="radio" name="philosophy" value="0.01">今日がよければそれでいい。<br>
<input type="radio" name="philosophy" value="0.01">普通に生きていければいい。<br>
</p>
<p>問10.あなたは、生まれ変わったら何になりたいですか。</p>
<p>
<input type="radio" name="want" value="1">今の自分が大好きだ。<br>
<input type="radio" name="want" value="0.5">孫悟空<br>
<input type="radio" name="want" value="2">屋久島の屋久杉<br>
<input type="radio" name="want" value="0.01">鶴<br>
</p>
<p><input class="submit_button" type="submit" value="送信">
</p>
</form>

<p>
<?php
$sum = array_sum($_POST);
if($sum == 0){
}
elseif($sum <=  1){
	echo "あなたの戦闘力は2です。あなたは一般人です。";
}
elseif($sum <=  4){
	echo "あなたの戦闘力は5です。あなたは農家のおじさんです。";
}
elseif($sum <=  6){
	echo "あなたの戦闘力は10です。あなたは一般社会ではかなりの強者です。人生で成功できるでしょう。";
}
elseif($sum <=  7){
	echo "あなたの戦闘力は18000です。あなたはベジータになれるでしょう。";
}
elseif($sum <=  8){
	echo "あなたの戦闘力は53万です。あなたはフリーザですか？";
}
else{
	echo "あなたは戦闘力は∞です。戦闘力などというどうでもよい概念に惑わされず自分の人生を生きてください。";
}
?>
</p>