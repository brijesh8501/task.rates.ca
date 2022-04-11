<?php
// error_reporting(0);
require_once 'model.php';
class Controller{
    private $model;
    public function __construct(){
        date_default_timezone_set('America/Toronto');
        $this->model = new Model();
    }

    public function selectQuoteListController($table){

        // select
        $select_record = $this->model->select_all($table);
        if($select_record !== 0){  
            $data_exists = $select_record;
        }else{
            $data_exists = 0;
        }
        return $data_exists;

    }

    public function inserQuoteInfoController($data, $table){

        // store data
        $insert_data = [];
        // store constraint of data
        $insert_data_constraint = [];

        // if integer requires, specify the column name into array
        $insert_int_column = [];

        foreach($data as $key => $val){
            $insert_data[$key] = strip_tags($val);

            if (in_array( $key, $insert_int_column)) {

                $insert_data_constraint[$key] = 'i';

            }else{

                $insert_data_constraint[$key] = 's';

            }
        }

        // attach date/time
        $insert_data_constraint['modified_date'] = 's';
        $insert_data_constraint['created_date'] = 's';

        $insert_data['modified_date'] = date('Y-m-d H:i:s a');
        $insert_data['created_date'] = date('Y-m-d H:i:s a');

        // insert data
        $insert_resp = $this->model->insert($insert_data, $insert_data_constraint, $table);
        return $insert_resp;

    }

}