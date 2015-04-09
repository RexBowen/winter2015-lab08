<?php

//user model class
class Users extends MY_Model {

    // Constructor
    public function __construct() {
        parent::__construct('users','id');
    }
}
