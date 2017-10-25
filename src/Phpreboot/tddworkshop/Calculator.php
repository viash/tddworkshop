<?php
namespace phpreboot\tddworkshop;

class Calculator
{
  public function add($numbers = '')
  {
    if(empty($numbers)){
      return 0;
    }

    if(!is_string($numbers)){
      throw new \InvalidArgumentException('Parameters must be a string');
    }

    $str_1 = substr($numbers, 0, 1);
    if(is_numeric($str_1))
    {
      $Str_nums = str_replace('\n',',',$numbers);
      $numbersArray = explode("," , $Str_nums);

      if (array_filter($numbersArray, 'is_numeric') !== $numbersArray)
      {
        throw new \InvalidArgumentException('Parameters string must contain numbers');
      }
      return array_sum($numbersArray);
    }
    else
    {
      $numbers_array = preg_split("/[\\\\]+/", $numbers);
      $numbersArray = explode($numbers_array[1] , $numbers_array[2]);
      $neg_arr=array();
      foreach ($numbersArray as $key => $value) {
        if($value < 0){
          $neg_arr[] = $value;
          }
        if($value > 1000){
          unset($numbersArray[$key]);
        }
      }
      $negatives = implode(",",$neg_arr);
      if(!empty($neg_arr)){
        throw new \InvalidArgumentException('Numbers ('.$negatives.') Cannot be Negative');
      }

      if (array_filter($numbersArray, 'is_numeric') !== $numbersArray) {
              throw new \InvalidArgumentException('Parameters string must contain numbers');
      }
      return array_sum($numbersArray);
    }
  }

  public function multiply($numbers = '')
  {
    if(empty($numbers)){
      return 0;
    }

    if(!is_string($numbers)){
      throw new \InvalidArgumentException('Parameters must be a string');
    }

    $str_1 = substr($numbers, 0, 1);
    if(is_numeric($str_1))
    {
      $Str_nums = str_replace('\n',',',$numbers);
      $numbersArray = explode("," , $Str_nums);

      if (array_filter($numbersArray, 'is_numeric') !== $numbersArray)
      {
        throw new \InvalidArgumentException('Parameters string must contain numbers');
      }
      return array_product($numbersArray);
    }
    else
    {
      $numbers_array = preg_split("/[\\\\]+/", $numbers);
      $numbersArray = explode($numbers_array[1] , $numbers_array[2]);
      $neg_arr=array();
      foreach ($numbersArray as $key => $value) {
        if($value < 0){
          $neg_arr[] = $value;
          }
        if($value > 1000){
          unset($numbersArray[$key]);
        }
      }
      $negatives = implode(",",$neg_arr);
      if(!empty($neg_arr)){
        throw new \InvalidArgumentException('Numbers ('.$negatives.') Cannot be Negative');
      }

      if (array_filter($numbersArray, 'is_numeric') !== $numbersArray) {
              throw new \InvalidArgumentException('Parameters string must contain numbers');
      }
      return array_product($numbersArray);
    }
  }
}
