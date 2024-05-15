<?php 
class order extends DB{
function bills()
{
	$sql = "SELECT * FROM bills";
	$results = $this->db_select($sql);
	return $results;
}
function delete_bill($id) {
    return $this->db_delete('bills', "id = $id");
}
function delete_bill_detail($id) {
    return $this->db_delete('detail_bills', "id_bill=$id");
}

function detail_bills($id){
	$sql = "SELECT *,detail_bills.id as id_bills_detail  FROM detail_bills,products WHERE detail_bills.id_product=products.id AND detail_bills.id_bill=$id ";
	$results = $this->db_select($sql);
	return $results;
}

}