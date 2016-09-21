<html>
<style>
  html {
    background: black;
    color: white;
  }
</style>
  
<?php

/**
* DEPENDENCY INJECTION USING INTERFACES
*/
  
class Book {
  private $title;
  private $field;
  
  public function __construct($title)
  {
    $this->title = $title;
  }
  
  public function getTitle()
  {
    return "<h1>" . $this->title . "</h1>";
  }
  
  public function setField(Field $field)
  {
    $this->field = $field;
  }
  
  public function getField()
  {
    return "<h2><em> -- " . $this->field->getField() . "</em></h2>";
  }
}

interface Field {
  public function setField($fieldname);
}

class Author implements Field {
  private $name;
  private $field;
  
  public function __construct($name)
  {
    $this->name = $name;
  }
  
  public function setField($field)
  {
    $this->field = $field;
  }
  
  public function getField()
  {
    return "by" . $this->name;
  }
}
  
class Release implements Field {
  private $year;
  
  public function __construct($year)
  {
    $this->year = $year;
  }
  
  public function setField($field)
  {
    $this->year = $field;
  }
  
  public function getField()
  {
    return "released: " . $this->year;
  }
}
  
$davinci = new Book("Davinci Code");

echo $davinci->getTitle();

// $myo = new Author("Myo");

// $davinci->setField($myo);
  
$year = new Release("2016");
  
$davinci->setField($year);

echo $davinci->getField();


?>
  
</html>