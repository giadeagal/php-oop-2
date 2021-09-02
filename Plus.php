<?php

require_once "User.php";

class Plus extends User {

    public $discount;
    public $free_delivery;
    public $friend_invitation_sent;

    function __construct($_first_name, $_last_name) {
        $this->first_name = $_first_name;
        $this->last_name = $_last_name;
    }

}


?>