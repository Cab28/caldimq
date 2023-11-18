<?php
class DivisionByZeroException extends \Exception {
  public function __construct() {
    parent::__construct("Деление на ноль");
  }
}
