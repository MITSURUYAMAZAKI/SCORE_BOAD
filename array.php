<?php

class Score{

  private $array;
  private $row0;
  private $row1;
  private $row2;
  private $row3;
  private $row4;
  private $row5;
  private $row6;
  private $row7;

  function __construct(){
    //初期値をセット
      $this->array = [$this->row0, $this->row1, $this->row2, $this->row3, $this->row4, $this->row5, $this->row6, $this->row7];
  }

  function setScore0($score0){
    $this->row0 =["","","","","","","",""];
    $this->row1 =["","","","","","","",""];
    $this->row2 =["","","","","","","",""];
    $this->row3 =["","","","","","","",""];
    $this->row4 =["","","","","","","",""];
    $this->row5 =["","","","","","","",""];
    $this->row6 =["","","","","","","",""];
    $this->row7 =["","","","","","","",""];
    $this->array = $score0;
      }

    function getScore0(){
      return $this->score0;
    }



}
?>