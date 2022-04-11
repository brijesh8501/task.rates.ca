<?php
date_default_timezone_set('America/Toronto');

require_once 'jwt.php'; 

class Jwt_Actions{

    private $key = "KasbaniKhodiyarMaa";

    function auth($base_url){

        $iat = time();
        $exp = $iat + 60 * 60;
        $payload = array(
            'iss' => $base_url,
            'aud' => $base_url,
            'iat' => $iat,
            'exp' => $exp
        );

        $jwt = JWT::encode($payload, $this->key, 'HS512');

        return array(
            'token' => $jwt,
            'expires' => $exp
        );
    }

    function read_validate_header_token($header){

        if(isset($header['Authorization'])){
            
            $token = str_replace('Bearer ','', $header['Authorization']);

            try{
                $token = JWT::decode($token, $this->key, array('HS512') );
                return 1;
            } catch (\Exception $e){
                return 0;
            }

        }else{

            return 0;

        }

    }

    function read_validate_token($token){

        if(!empty($token) ){

            try{
                $token = JWT::decode($token, $this->key, array('HS512') );
                return 1;
            } catch (\Exception $e){
                return 0;
            }

        }else{

            return 0;

        }

    }

}
?>