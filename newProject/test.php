<?php
class person{
    public $employe_id;
    public $age;
    public $fname;
public $mname;
public $lname;
public function __construct($employe_id,$age,$fname,$mname,$lname){
    $this->employe_id=$employe_id;
    $this->age=$age;
    $this->fname=$fname;
    $this->mname=$mname;
    $this->lname=$lname;
}
}
?>


