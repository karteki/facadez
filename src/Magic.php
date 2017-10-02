<?php

namespace Facadez\Magic;


/**
 *
 */
class Magic
{
  /**
   * Laravel application
   *
   * @var \Illuminate\Foundation\Application
   */
  public $app;

  /**
   * Create a new confide instance.
   *
   * @param \Illuminate\Foundation\Application $app
   *
   * @return void
   */
  public function __construct($app)
  {
      $this->app = $app;
  }

  function display()
  {
    echo "Hi Omkar";
  }
  function displayParam($param)
  {
    echo $this->app->auth->user();

    // echo $param;
  }





  /*
  *   It checks given array is multi dimention.
  *
  */
  function is_multi($a) {
    $rv = array_filter($a,'is_array');
    if(count($rv)>0) return true;
    return false;
  }

  /*
  *   It returns key wise output by guoupoing array.
  *
  */
  function keyBy($array, $columnName)
  {
      if (is_object($array)) {
        $array = $array->toArray();
      }

      $temp = [];
      foreach ($array as $key => $value) {
        // return $value;
        if (array_key_exists($value[$columnName], $temp)) {
          $count = count($temp[$value[$columnName]]);
         }
        else {
          $count = 0;
        }
        $temp[$value[$columnName]][$count] = $value;
      };
      return $temp;
  }
  function get($param)
  {
    echo $this->app->auth->user();
  }

}

 ?>
