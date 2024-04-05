
<!-- Q1 tic-tac問題 -->
<?php

echo "1から100までのカウントを開始します\n";
for ($i = 1; $i <= 100; $i++) {

    if ($i % 4 == 0 && $i % 5 == 0) {
        echo "tic-tac\n";
    }

    elseif ($i % 4 == 0) {
        echo "tic\n";
    }

    elseif ($i % 5 == 0) {
        echo "tac\n";
    }

    else {
        echo $i . "\n";
    }
}
?>


<!-- Q2 多次元連想配列 -->
<!-- 問題1 -->
<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

$b_info = array_values(array_filter($personalInfos, function($info) {
    return $info['name'] === 'Bさん';
}))[0];

echo $b_info['name'] . 'の電話番号は' . $b_info['tel'] . 'です。';
?>

<!-- 問題２ -->
<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

foreach ($personalInfos as $key => $info) {
    $num = $key + 1;
    echo $num . '番目の' . $info['name'] . 'のメールアドレスは' . $info['mail'] . 'で、電話番号は' . $info['tel'] . 'です。' . PHP_EOL;
}
?>


<!-- 問題3 -->
<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

$ageList = [25, 30, 18];

foreach ($personalInfos as $key => &$info) {
    $info['age'] = $ageList[$key];
}

var_dump($personalInfos);
?>


<!-- Q3 オブジェクト-1 -->
<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }

    public function displayInfo()
    {
        echo "学籍番号{$this->studentId}番の生徒は{$this->studentName}です。";
    }
}

$student = new Student(120, '山田');

$student->displayInfo();

?>


<!-- // Q4 オブジェクト-2 -->
<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($course)
    {
        echo "{$this->studentName}は{$course}の授業に参加しました。学籍番号：{$this->studentId}";
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

?>


<!-- // Q5 定義済みクラス -->
<!-- 問題１ -->
<?php

$currentDate = new DateTime('now');
$oneMonthAgo = clone $currentDate;
$oneMonthAgo->modify('-1 month');

echo $oneMonthAgo->format('Y-m-d');

?>

<!-- 問題２ -->
<?php

$today = new DateTime('now');

$date1992 = new DateTime('1992-04-25');

$interval = $today->diff($date1992);

$totalDays = $interval->days;

echo "1992年4月25日から今日までの総日数は {$totalDays} 日です。";

?>


