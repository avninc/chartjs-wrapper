<?php

namespace Charts;

class Utils
{
  public static function encode($contents)
  {
    return json_encode($contents);
  }

  public static function decode($contents)
  {
    return json_decode($contents);
  }
}
