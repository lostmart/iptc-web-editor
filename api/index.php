<?php
    //Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');


    function my_json_encode($data) {
        if( json_encode($data) === false ) {
            throw new Exception( json_last_error() );
        }else{
             return json_encode($data);
              // throw new Exception( json_last_error() );
        }
    }

    $data_array = ["msg" => "your data was successfully encoded !!"];


    try {
            echo my_json_encode($data_array);
        }
        catch(Exception $e ) {
            echo "we were not able to encode your data ... $e";
        }

?>