<?php
//クラスの定義
class User
{
    public $name;
    public $age;
    //コンストラクタ
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    //自己紹介メソッド
    public function introduce()
    {
        echo "こんにちは、私は{$this->name}です。{$this->age}歳です。<br>";
    }
    //成人判定メソッド
    public function isAdult()
    {
        return $this->age >= 18;
    }
}
//オブジェクトの生成
$user1 = new User("田中太郎", 25);
$user2 = new User("佐藤花子", 17);
$user3 = new User("鈴木一郎", 30);

echo "<h2>ユーザー管理プログラム</h2>";
echo "<h3>自己紹介</h3>";

$user1->introduce();
$user2->introduce();
$user3->introduce();

echo "<h3>成人判定</h3>";

if ($user1->isAdult()) {
    echo "{$user1->name}さんは成人です。<br>";
} else {
    echo "{$user1->name}さんは未成年です。<br>";
}
if ($user2->isAdult()) {
    echo "{$user2->name}さんは成人です。<br>";
} else {
    echo "{$user2->name}さんは未成年です。<br>";
}
if ($user3->isAdult()) {
    echo "{$user3->name}さんは成人です。<br>";
} else {
    echo "{$user3->name}さんは未成年です。<br>";
}
?>