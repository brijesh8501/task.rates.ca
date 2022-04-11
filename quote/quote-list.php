<?php  
require_once '../template-parts/header.php'; 
require_once '../backend/controller.php';
$controller = new Controller();

$fetch_quote_list = $controller->selectQuoteListController('quote_information');
?>
<section class="container" id="quote-list-section">
    <div class="quote-list">
        <div class="quote-list-header">
            <div>
                <button type="submit" class="btn-primary" id="new-quote" name="new-quote">+ New Quote</button>
            </div>
        </div>
        <div class="quote-list-table-wrapper table-wrapper">
            <table border="1" class="table">
                <thead>
                    <tr>
                        <td width="16.66%">Full Name</td>
                        <td width="16.66%">Phone Number</td>
                        <td width="16.66%">Email Address</td>
                        <td width="16.66%">Location</td>
                        <td width="19.32%">Vehicle(s)</td>
                        <td width="14%">#Date</td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if($fetch_quote_list === 0){
                    ?>
                    <tr>
                        <td colspan="6" class="text-center">No information</td>
                    </tr>
                    <?php }else{
                    foreach($fetch_quote_list as $key =>  $item){
                        $primary_driver_details = json_decode($item['primary_driver_details'], true); 
                        $vehicle_details = json_decode($item['vehicle_details'], true); 
                     
                    ?>
                    <tr>
                        <td><?php echo $primary_driver_details['first_name'].' '.$primary_driver_details['last_name']; ?></td>
                        <td><?php echo $primary_driver_details['phone_number']; ?></td>
                        <td><?php echo $primary_driver_details['email_address']; ?></td>
                        <td><?php echo $primary_driver_details['city'].', '.$primary_driver_details['province'].' - '.$primary_driver_details['postal_code']; ?></td>
                        <td>
                            <?php
                                foreach($vehicle_details as $k => $v){

                                    $no_of_vehicle = sizeof($vehicle_details);

                                    $ol_required = ( $no_of_vehicle > 1 )? 1 : 0;

                                    $car_year = $vehicle_details[$k]['vehicle_year'];
                                    $car_make = $vehicle_details[$k]['vehicle_make'];
                                    $car_model = $vehicle_details[$k]['vehicle_model'];

                                    $full_car_identity = $car_year.' '.$car_make.' '.$car_model; 

                                    if( $k === 0 && $ol_required === 1 ){
                                        echo '<ol class="table-styled">';
                                    }
                                    echo ( $ol_required === 1 )?
                                    '<li>'.$full_car_identity.'</li>'
                                    :
                                    '<span>'.$full_car_identity.'</span>'; 

                                    if( $no_of_vehicle === $k && $ol_required === 1 ){
                                        echo '</ol>';
                                    }

                                   
                                }
                            ?>
                        </td>
                        <td><?php echo $item['modified_date']; ?></td>
                    </tr>
                    <?php } } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php  require_once '../template-parts/footer.php'; ?>