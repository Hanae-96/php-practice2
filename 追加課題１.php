<?php

//問題1
class Pokemon {

    public $name;
    public $element;

    public function __construct($Pokemon_name,$Pokemon_element) {
        $this->name = $Pokemon_name;
        $this->element = $Pokemon_element;
    }
    
    public function attack($skill) {
        echo "いけ、" . $this->element . $this->name . "!!" . $skill . "だ!!" . "\n\n";
    }
}

$pikachu = new Pokemon('ピカチュウ','ネズミポケモン');
$pikachu->attack('10万ボルト');

//問題2

class Employee {

    public $employeeId;
    public $employeeName;

    public function __construct($id,$name) {
        $this->employeeId = $id;
        $this->employeeName = $name;
    }

    public function checkIn() {
        echo $this->employeeName . "が出勤しました。社員ID：" . $this->employeeId;
    }
}

$employee = new Employee(1,"山田太郎");
$employee->checkIn();
// 出力：(任意の社員名)が出勤しました。社員ID：(任意の社員ID)
?>