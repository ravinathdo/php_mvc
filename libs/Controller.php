<?php
// this is the base controller
class Controller {

    function __construct() {
        echo 'Main Controller<br/>';
        $this->view = new View();
    }

}

