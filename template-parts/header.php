<?php
require_once 'global-env.php'; 


// if( !( isset($_SESSION['session_user_name']) ) && !( isset($_SESSION['session_user_email_address']) ) ){
  
//     header("location:".SITE_PATH."login/");

// }
// if( ( isset($_SESSION['session_user_name']) ) && ( isset($_SESSION['session_user_email_address']) ) ){

//     $jwt_actions = new Jwt_Actions();
//     $get_token_resp = $jwt_actions->auth(ABSURL);

    if( CURRENT_PAGE ){ 
        $page_title = $page_setup_details[CURRENT_PAGE]['title']; 
        $page_description = $page_setup_details[CURRENT_PAGE]['description']; 
        require_once '../jwt/jwt_actions.php';
    }else{ 
        $page_title = $page_setup_details['home']['title']; 
        $page_description = $page_setup_details['home']['description']; 
        require_once './jwt/jwt_actions.php';
    } 

    $jwt_actions = new Jwt_Actions();
    $get_token_resp = $jwt_actions->auth(ABSURL);
    
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo SITE_PATH; ?>assets/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo SITE_PATH; ?>assets/icons/favicon-16x16.png">
        <title><?php echo $page_title.' - '.PROJECT; ?></title>
        <link rel="stylesheet" href="<?php echo SITE_PATH; ?>css/main.css?v=<?= date('YmdHis'); ?>">
        <?php
            require_once 'font-style.php';
        ?>
    </head>
    <body id="body-wrapper">
    <input type="hidden" name="jwt_token" id="jwt_token" value="<?php echo $get_token_resp['token']; ?>"/>
    <input type="hidden" name="jwt_token_expires" id="jwt_token_expires" value="<?php echo $get_token_resp['expires']; ?>"/>

    <?php require_once 'navbar.php'; ?>
