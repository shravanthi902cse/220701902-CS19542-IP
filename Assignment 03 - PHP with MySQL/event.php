<?php
class Event {
  private $id;
  private $title;
  private $description;
  private $date;
  private $time;
  private $location;
  private $price;

  public function __construct($id, $title, $description, $date, $time, $location, $price) {
    $this->id = $id;
    $this->title = $title;
    $this->description = $description;
    $this->date = $date;
    $this->time = $time;
    $this->location = $location;
    $this->price = $price;
  }

  public function getId() {
    return $this->id;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getDescription() {
    return $this->description;
  }

  public function getDate() {
    return $this->date;
  }

  public function getTime() {
    return $this->time;
  }

  public function getLocation() {
    return $this->location;
  }

  public function getPrice() {
    return $this->price;
  }
}
?>