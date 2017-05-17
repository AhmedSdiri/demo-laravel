<?php
namespace App\Utilities;

class Date
{
   public function isWeekend()
   {
      return date('N') >=6; 
   }
}