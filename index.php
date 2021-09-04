<?php


$studentList =  array(
    'name' => 'ratul',
    'age' => 20  
);

// foreach ($studentList as $key => $value) {
//    echo $key."<br>";
//    echo $value."<br>";
// }

//echo count($studentList);

// function sum($a = 0,$b = 0) {
//   try {
//       if($a == 0 && $b == 0) {
//           throw new Exception("TEST");
//       }
//     return $a+$b;
//   } catch(Exception $e) {
//       echo $e->getMessage();
//   }
// }
// echo sum();

//echo "TEST";
function a($c) {
    $b = $c;
}
// $fName = 'RATUL';
// $lName = 'Samanta';
// echo $fName.' '.$lName;
class ExceptionParent {
    public $name = "Ratul";
    private $bloodGroup = "o+";
    protected $address = "TEST";

    public function getUserDetails() {
        return $this->name.','.$this->address;
    }
}


 class ExceptionChild extends ExceptionParent {

   private $_msg;
   private $_userName;
   public $address;

   public static $count = 0;

   public function __construct($msg = 'TEST'){
       $this->_msg = $msg;
   }
   public function getMessage() {
        return $this->_msg;
   }
   public function setUserName($userName) {
       $this->_userName = $userName;
   }
   public function getUserName() {
       return $this->_userName;   
   }
   public function setCount($count) {
       self::$count = $count;
   }
   public function getCount() {
    return self::$count;
   }
   public function getUserDetails() {
    return $this->address;
   }
    
}


// class ExceptionChild1 extends ExceptionChild {

// }
 $e = new ExceptionChild();
 $e->setUserName('RATUL');
 $e->address = 'TEST';
 $e->setCount(5);
//  echo $e->getUserName();
//  echo "<br>";
//  echo $e->getCount();
 echo $e->getMessage();

 $e1 = new ExceptionChild();
 $e1->setUserName('Subhra');
//  echo $e1->getUserName();
//  echo "<br>";
//  echo $e1->getCount();

//  echo $name;
//  echo $name1;
 //echo $e->getMessage();
 //$e1 = new ExceptionChild1();
//  echo "<pre>";
//  print_r($e1);
//  echo "</pre>";
 //echo $e->address;

 //echo $e->getMessage();


// JSON - Javascaript 
echo "Another commit";




 
 
?>