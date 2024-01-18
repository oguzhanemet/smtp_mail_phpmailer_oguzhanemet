<?php

class controller

{
	
    


    public function render($file, $params = [])

    {

        if (file_exists(VIEWS_PATH."/".$file.'.php')) {

            require_once VIEWS_PATH."/".$file.'.php';

        } else {

            exit($file."");

        }

    }



    public function model($file)

    {

        if (file_exists(MODELS_PATH . "/" . $file . ".php")) {

            require_once MODELS_PATH . "/" . $file . ".php";



            if (class_exists($file)) {

                return new $file;

            } else {

                exit($file . "");

            }

        } else {

            exit($file . "");

        }

    }
	
	
	


}

