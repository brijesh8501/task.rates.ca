<?php

require_once 'backend/controller.php';
require_once 'jwt/jwt_actions.php';

$controller = new Controller();
$jwt_actions = new Jwt_Actions();

if(isset($_REQUEST['action'])){

    // action attached with request
    $action = $_REQUEST['action'];

    // save quote
    if($action === "save_quote"){

        // authenticate passed token
        $header = $jwt_actions->read_validate_header_token( apache_request_headers() );
        if($header === 1){

            // copy data
            $insert_data = $_REQUEST;

            //remove action
            unset($insert_data['action']);

            // validate data
            $result_check_input_exists = checkInputsExists($insert_data);

            // insert controller
            $insert_msg = $controller->inserQuoteInfoController($insert_data, 'quote_information');
            
            $insert_response = array(
                'insert_msg' => $insert_msg
            );
            echo json_encode($insert_response);

        }

    }
}


function checkInputsExists($data){

    $index = 0;
          
    $variableExists = "";
    $variableIsEmpty = "";

    foreach($data as $key=>$val){
        if(sizeof($data) - 1 === $index){

            $variableExists .= " isset(\$data['$key'])";
            $variableIsEmpty .= " (\$data['$key'] != '')";

        }else{

            $variableExists .= " isset(\$data['$key']) &&";
            $variableIsEmpty .= " (\$data['$key'] != '') &&";

        }
        $index++; 

    }

    $passVariableExists = trim($variableExists);
    $passVariableEmpty = trim($variableIsEmpty);
    
    eval("if($passVariableExists){
        if($passVariableEmpty){
            \$returnMsg = 1;
        }else{
            \$returnMsg = 0;
        }
    }else{
        \$returnMsg = 0;
    }");
    return $returnMsg;
}

?>