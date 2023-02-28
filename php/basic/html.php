<?php
namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;

  public function message1() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}

class Row {
  public $numCells = 0;
  public function message2() {
    echo "<p>The row has {$this->numCells} cells.</p>";
  }
}
?>