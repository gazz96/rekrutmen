<?php 

class Controller {
 

    public function request($name = '') {
        

        $input = [];
        
        
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            $input = $_GET;
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST;
        }

        
        if(!$name) return $input;

        return isset($input[$name]) ? $input[$name] : '';
    }
    

}