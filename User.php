<?php
class User {
    public $first_name;
    public $last_name;
    public $age;
    public $registration_number;
    public $days_since_last_login;
    public $days_since_last_purchase;
    public $avg_purchase_value;

    function __construct($_first_name, $_last_name, $_registration_number) {
        $this->first_name = $_first_name;
        $this->last_name = $_last_name;
        $this->registration_number = $_registration_number;
    }
}
?>