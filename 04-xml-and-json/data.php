<?php 
$data = array(
    array(
    "country" => "Pakistan",
    "cities" => array("Lahore", "Karachi", "Sialkot", "Faisalabad", "Gujranwala")
    ),
    array(
    "country" => "China",
    "cities" => array("Shanghai", "Beijing", "Shenzhen", "Guangzhou", "Chongqing")
    ),
    array(
    "country" => "India",
    "cities" => array("Bangalore", "Hyderabad", "Mumbai", "Chennai", "Delhi")
    )
);
echo json_encode($data);