<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="question.css">
    <title>WhereToGo</title>
</head>
<body>
    <div class = "header">
<img src="logo5.png">
    </div>

    <div class = "main">
<h1>オススメの旅行先診断</h1>
<div class = "rule">
<p>10個の質問に答えてください。</p>
<p>4つの選択肢から自分に最も合うもの1つを選んでください。</p>
<p>回答をもとにあなたにマッチする旅行先ベスト３を紹介します。</p>
</div>

<div class = "questions">
    <form action="recommendation.php" method="get" >
    <div class = "question">
<h2>1. 旅行に大きな費用はかけたくない。</h2>
<input type="radio" id="1" name="0" value="100">
<label for="1">強く賛成する</label>
<input type="radio" id="2" name="0" value="80">
<label for="2">賛成する</label>
<input type="radio" id="3" name="0" value="60">
<label for="3">不賛成である</label>
<input type="radio" id="4" name="0" value="40">
<label for="4">強く不賛成である</label>
    </div>
    <div class = "question">
<h2>2. 田舎よりも都会の方が好きである。</h2>
<input type="radio" id="5" name="1" value="100">
<label for="5">強く賛成する</label>
<input type="radio" id="6" name="1" value="80">
<label for="6">賛成する</label>
<input type="radio" id="7" name="1" value="60">
<label for="7">不賛成である</label>
<input type="radio" id="8" name="1" value="40">
<label for="8">強く不賛成である</label>
    </div>
    <div class = "question">
<h2>3. 旅行ではアウトドアをすることが好きだ。</h2>
<input type="radio" id="9" name="2" value="100">
<label for="9">強く賛成する</label>
<input type="radio" id="10" name="2" value="80">
<label for="10">賛成する</label>
<input type="radio" id="11" name="2" value="60">
<label for="11">不賛成である</label>
<input type="radio" id="12" name="2" value="40">
<label for="12">強く不賛成である</label>
    </div>
    <div class = "question">
<h2>4. 歴史的、もしくは文化的な街に行きたい。</h2>
<input type="radio" id="13" name="3" value="100">
<label for="13">強く賛成する</label>
<input type="radio" id="14" name="3" value="80">
<label for="14">賛成する</label>
<input type="radio" id="15" name="3" value="60">
<label for="15">不賛成である</label>
<input type="radio" id="16" name="3" value="40">
<label for="16">強く不賛成である</label>
    </div>
    <div class = "question">
<h2>5. 日本からできるだけ近い場所に行きたい。 </h2>
<input type="radio" id="17" name="4" value="100">
<label for="17">強く賛成する</label>
<input type="radio" id="18" name="4" value="80">
<label for="18">賛成する</label>
<input type="radio" id="19" name="4" value="60">
<label for="19">不賛成である</label>
<input type="radio" id="20" name="4" value="40">
<label for="20">強く不賛成である</label>
    </div>
    <div class = "question">
<h2>6. 時差が小さい場所に行きたい。</h2>
<input type="radio" id="21" name="5" value="100">
<label for="21">強く賛成する</label>
<input type="radio" id="22" name="5" value="80">
<label for="22">賛成する</label>
<input type="radio" id="23" name="5" value="60">
<label for="23">不賛成である</label>
<input type="radio" id="24" name="5" value="40">
<label for="24">強く不賛成である</label>
    </div>
    <div class = "question">
<h2>7. ご飯が美味しいところに行きたい。 </h2>
<input type="radio" id="25" name="6" value="100">
<label for="25">強く賛成する</label>
<input type="radio" id="26" name="6" value="80">
<label for="26">賛成する</label>
<input type="radio" id="27" name="6" value="60">
<label for="27">不賛成である</label>
<input type="radio" id="28" name="6" value="40">
<label for="28">強く不賛成である</label>
    </div>
    <div class = "question">
<h2>8. 旅行先の治安の良さは非常に重要だ。</h2>
<input type="radio" id="29" name="7" value="100">
<label for="29">強く賛成する</label>
<input type="radio" id="30" name="7" value="80">
<label for="30">賛成する</label>
<input type="radio" id="31" name="7" value="60">
<label for="31">不賛成である</label>
<input type="radio" id="32" name="7" value="40">
<label for="32">強く不賛成である</label>
    </div>
    <div class = "question">
<h2>9. 天気の良いところに行きたい。</h2>
<input type="radio" id="33" name="8" value="100">
<label for="33">強く賛成する</label>
<input type="radio" id="34" name="8" value="80">
<label for="34">賛成する</label>
<input type="radio" id="35" name="8" value="60">
<label for="35">不賛成である</label>
<input type="radio" id="36" name="8" value="40">
<label for="36">強く不賛成である</label>
    </div>
    <div class = "question">
<h2>10. 旅行先の衛生はとても重要だ。  </h2>
<input type="radio" id="37" name="9" value="100">
<label for="37">強く賛成する</label>
<input type="radio" id="38" name="9" value="80">
<label for="38">賛成する</label>
<input type="radio" id="39" name="9" value="60">
<label for="39">不賛成である</label>
<input type="radio" id="40" name="9" value="40">
<label for="40">強く不賛成である</label>
    </div>

<button type="submit">診断する</button>
    </form>
</div>

    </div>

    <div class = "footer">
<p>Copyright © 2023 WhereToGo All Rights Reserved.</p>
    </div>  

</body>
</html>