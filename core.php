<?php
// Core.php
// Tệp tin này chứa các thông tin khởi chạy cơ bản như kết nối đến database, session,...
session_start();

// Gọi file config vào đầu tiên để lấy các thông tin khởi chạy
include 'config.php';

class DB {
    private $link;

    function __construct(){
        $this->link = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
        mysqli_set_charset($this->link,'utf8');
    }

    // // Kết nối đến database
    // $db = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    // $db->set_charset("utf8");
    // if ($db->error) {
    //     die('Can not connect to database');
    // }


    public function db_select($sql) {
    
    $results = array();
    $query = mysqli_query($this->link,$sql);
    while ($row = mysqli_fetch_assoc($query)) {
        $results[] = $row;
    }

    return $results;
    }

    public function db_first_row ($sql) {
        $results = array();
        $query =  mysqli_query($this->link,$sql);
        return mysqli_fetch_assoc($query);
    }


    public function db_insert ($table, $data) {
       
        // array_keys lấy key 
        $fields = array_keys($data);
        $values = array_values($data);
        
        $fields = array_map(function ($value) {
            return "$value";
        }, $fields);

        $values = array_map(function ($value) {
            return "'$value'";
        }, $values);

        $fields = implode(', ', $fields);
        $values = implode(', ', $values);

        $sql = "INSERT INTO $table ($fields) VALUES ($values)";

        $query = mysqli_query($this->link,$sql);

        // ID gần nhất được lưu vào database
        
        return mysqli_insert_id( $this->link);
    }
     

    public function db_update ($table, $data, $where) {
      
        $sql = "UPDATE $table SET ";

        $i = 1;
        foreach ($data as $column => $value) {
            $sql .="`$column` = '$value' ";

            if ($i < count($data)) {
                $sql .= ", ";
            }

            $i++;
        }

        $sql .= " WHERE $where";
        
        mysqli_query($this->link,$sql);
       
    }


    public function db_delete ($table, $where) {
    
        $sql = "DELETE FROM $table WHERE $where";
         mysqli_query($this->link,$sql);
         //echo $sql  ;
    }
}   
