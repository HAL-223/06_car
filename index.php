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
  public function infomation(){
    echo "車の車種:" . $this->name  . "、" . "車体番号:" . $this->number . "、" . "カラー:" . $this->color . "、";
  }
}

$car1 = new Car('ランクル', 100, 'black'); 
// 車名(車種)を取得
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


// // 車名(車種)を更新
// $car1->setName('アルファード');
// echo $car1->getName();
// echo '<br>';

// // 車体番号を取得
// $car1->setNumber(200);
// echo $car1->getNumber();
// echo '<br>';

// // カラーを取得
// $car1->setColor('red');
// echo $car1->getColor();
// echo '<br>';

// // 車の情報表示を表示
// echo $car1->infomation();
// echo '<br>';

class Taxi extends Car {
  private $passeger;
  private $pickUp;
  private $lower;

  public function __construct($passenger) {
    $this->passenger;
  }

  public function setPassenger($passenger) {
    $this->passenger = $passenger;
  }

  public function getPassenger() {
    return $this->passenger;
  }

  public function setPickUp($pickUp) {
    $this->pickUp = $pickUp;
  }

  public function getPickUp() {
    return $this->PickUp;
  }

  public function setLower($lower) {
    $this->lower = $lower;
  }

  public function getlower() {
    return $this->lower;
  }

  public function infomation() {
    // parent::infomation();
    echo "車の車種:" . $this->name  . "のタクシー、" . "車体番号:" . $this->number . "、" . "カラー:" . $this->color . "、";
    echo "乗車人数は" . $this->pickUp . "人です。";
  }
}

$taxi1 = new Taxi('クラウンのタクシー', '222', 'black');
// 3人乗車
$taxi1->setpickUp(3);

// タクシーの情報表示を表示
echo $taxi1->infomation();
echo '<br>';

// 2人降車
$taxi1->setlower(2);
echo '<br>';

// 一人降車
$taxi1->setlower(2);

