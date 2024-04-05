<!-- Q1 変数と文字列 -->

<?php
$name = "安藤";
echo "私の名前は「" . $name . "」です。";
?>

<!-- Q2 四則演算 -->
<?php
$num = (5 * 4);
echo $num . "<br>";
echo $num / 2;
?>


<!-- Q3 日付操作 -->
<?php
$current_time = date("Y年m月d日 H時i分s秒");
echo "現在時刻は、" . $current_time . "です。";
?>


<!-- Q4 条件分岐-1 if文 -->
<?php
$device = "mac";

if ($device == "windows") {
    echo "使用OSは、windowsです。";
} else if ($device == "mac") {
    echo "使用OSは、macです。";
} else {
    echo "どちらでもありません。";
}
?>


<!-- Q5 条件分岐-2 三項演算子 -->
<?php
$age = 25;
$result = ($age < 18) ? "未成年です。" : "成人です。";
echo $result;
?>


<!-- Q6 配列 -->
<?php
$kanto = array("東京都", "神奈川県", "栃木県", "千葉県", "埼玉県", "茨城県", "群馬県");
echo $kanto[2] . "と" . $kanto[3] . "は関東地方の都道府県です。";
?>


<!-- Q7 連想配列-1 -->
<?php
$kanto_capitals = array(
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "栃木県" => "宇都宮市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "茨城県" => "水戸市",
    "群馬県" => "前橋市"
);

foreach ($kanto_capitals as $capital) {
    echo $capital . "<br>";
}
?>


<!-- Q8 連想配列-2 -->
<?php
$kanto_capitals = array(
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "栃木県" => "宇都宮市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "茨城県" => "水戸市",
    "群馬県" => "前橋市"
);

if (isset($kanto_capitals["埼玉県"])) {
    echo "埼玉県の県庁所在地は、" . $kanto_capitals["埼玉県"] . "です。";
}
?>


<!-- Q9 連想配列-3 -->
<?php
$kanto_capitals = array(
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "栃木県" => "宇都宮市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "茨城県" => "水戸市",
    "群馬県" => "前橋市",
    "愛知県" => null,
    "大阪府" => null
);

foreach ($kanto_capitals as $prefecture => $capital) {
    if (array_key_exists($prefecture, $kanto_capitals)) {
        if ($capital != null) {
            echo $prefecture . "の県庁所在地は、" . $capital . "です。" . PHP_EOL;
        } else {
            echo $prefecture . "は関東地方ではありません。" . PHP_EOL;
        }
    }
}
?>


<!-- Q10 関数-1 -->
<?php
function hello($name) {
    return $name . "さん、こんにちは。";
}

echo hello("金谷");
echo hello("安藤");
?>


<!-- Q11 関数-2 -->
<?php

function calcTaxInPrice($price) {

    $taxRate = 0.1;

    $taxInPrice = $price * (1 + $taxRate);
    return $taxInPrice;
}


$price = 1000;

$taxInPrice = calcTaxInPrice($price);

echo "{$price}円の商品の税込価格は{$taxInPrice}円です。";
?>


<!-- Q12 関数とif文 -->
function distinguishNum($num) {
    if ($num % 2 == 0) {
        return $num . 'は偶数です。';
    } else {
        return $num . 'は奇数です。';
    }
}

// 関数を実行して結果を表示
echo distinguishNum(11) . PHP_EOL;
echo distinguishNum(24) . PHP_EOL;


<!-- Q13 関数とswitch文 -->
<?php
function evaluateGrade($grade) {
    switch ($grade) {
        case 'A':
        case 'B':
            return '合格です。';
        case 'C':
            return '合格ですが追加課題があります。';
        case 'D':
            return '不合格です。';
        default:
            return '判定不明です。講師に問い合わせてください。';
    }
}


echo evaluateGrade('A') . PHP_EOL;
echo evaluateGrade('E') . PHP_EOL;

?>
