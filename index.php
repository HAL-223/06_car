<?php

// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。
class Car {
  private $name;
  private $number;
  private $color;

  public function __construct($name, $number, $color) {
    $this->name = $name;
    $this->number = $number;
    $this->color = $color;
  }
  // 車種
    public function getName() {
    return $this->name;
  }
  
  // 車体番号を取得
  public function getNumber() {
    return $this->number;
  }
  
  // カラーを取得
  public function getColor() {
    return $this->color;
  }
  
  public function setName($name) {
    $this->name = $name;
  }
  
  public function setNumber($number) {
    $this->number = $number;
  }
  
  public function setColor($color) {
    $this->color = $color;
  }
  public function selfIntroduction(){
    echo "車の車種:" . $this->name  . "、" . "車体番号:" . $this->number . "、" . "カラー:" . $this->color . "です。" . "<br>";
    }
  // $car1 = new Car('ランクル', 100, 'black'); 
  // $car1->selfIntrodaction();
  
  }
  $car1 = new Car('ランクル', 100, 'black'); 
  $car1->selfIntrodaction();
// 車名(車種)を取得
$car1->name = "ランクル";
echo $car1->getName();
echo '<br>';

// 車体番号を取得
echo $car1->getNumber();
echo '<br>';

// カラーを取得
echo $car1->getColor();
echo '<br>';

// 車の情報表示を表示
echo $car1->infomation();
echo '<br>';


// 車名(車種)を更新
$car1->setName('アルファード');
echo $car1->getName();
echo '<br>';

// 車体番号を取得
$car1->setNumber(200);
echo $car1->getNumber();
echo '<br>';

// カラーを取得
$car1->setColor('red');
echo $car1->getColor();
echo '<br>';

// 車の情報表示を表示
echo $car1->infomation();
echo '<br>';


  // // $car1->selfIntrodaction();
  // // 車名(車種)を取得
  // public function getName() {
  //   return $this->name;
  // }
  
  // // 車体番号を取得
  // public function getNumber() {
  //   return $this->number;
  // }
  // // echo $car1->getNumber();
  // // echo '<br>';
  
  // // カラーを取得
  // public function getColor() {
  //   return $this->color;
  // }
  // // echo $car1->getColor();
  // // echo '<br>';
  
  // public function setName($name) {
  //   $this->name = $name;
  // }
  
  // public function setNumber($number) {
  //   $this->number = $number;
  // }
  
  // public function setColor($color) {
  //   $this->color = $color;
  // }
  // public function selfIntroduction(){
  //   echo "車の車種:" . $this->name  . "、" . "車体番号:" . $this->number . "、" . "カラー:" . $this->color . "です。" . "<br>";
  //   }
  // }
  // // echo $car1->getName();

  // $car1 = new Car('ランクル', 100, 'black');
  // $car1->selfIntroduction();
  
  // $car1->setName('ランクル');
  // $car1->setNumber('100');
  // $car1->setColor('black');
  
  // echo $car1->getName();
  // echo "<br>";
  // echo $car1->getNumber();
  // echo "<br>";
  // echo $car1->getColor();
  // echo "<br>";

  
  // $car2 = new Car('アルファード', 200, 'red');
  // $car2->selfIntroduction();
  
  // $car1->setName('アルファード');
  // $car1->setNumber('200');
  // $car1->setColor('red');
  
  // echo $car1->getName();
  // echo "<br>";
  // echo $car1->getNumber();
  // echo "<br>";
  // echo $car1->getColor();
  // echo "<br>";
