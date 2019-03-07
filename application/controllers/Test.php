<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $a = 5;
        $b =& $a;
        $b = 3;

        echo $a . "<br>";
        echo $b;
    }

}
