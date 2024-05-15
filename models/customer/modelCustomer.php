<?php 

class customer extends DB {
    public function __construct()
    {
        parent::__construct();
    }

    function get_all_product() {
        $sql = "SELECT * FROM products";
        $query = $this->$this->query($sql);
        $result = $query->result_array();
        return $result;
    }
}