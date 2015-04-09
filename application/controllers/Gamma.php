<?php

/**
 * Secret stuff
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Gamma extends Application {

    function __construct() {
        parent::__construct();
        $this->restrict(ROLE_ADMIN);//limit access to admins only
    }

    //-------------------------------------------------------------
    //  We could tell you what was here, but...
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'gamma';
        $this->render();
    }

}
