<?php
// $id = $_REQUEST["id"];
$con = new mysqli("","","");
$result_set = $con->query("select * from users");
$data = array();

while($row = $result_set->fetch_assoc()){
    $data[] = $row;
}

// $data = array("name"=>"Ali", "age"=>20, "address"=> array("streetAddress"=>"Street No 10"));

echo json_encode($data);

{
	"name": "Ali",
	"age": 20,
	"address":
	{
		"streetAddress": "Street No 10"
	}
}