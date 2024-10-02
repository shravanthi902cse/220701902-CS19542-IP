<?php
class Booking {
  private $id;
  private $user_id;
  private $event_id;

  public function __construct($id, $user_id, $event_id) {
    $this->id = $id;
    $this->user_id = $user_id;
    $this->event_id = $event_id;
  }

  public function getId() {
    return $this->id;
  }

  public function getUserId() {
    return $this->user_id;
  }

  public function getEventId() {
 return $this->event_id;
  }
}
?>