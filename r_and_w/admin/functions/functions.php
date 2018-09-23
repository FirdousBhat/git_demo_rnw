<?php
class GOFRESH{

	private $db;
 
    function __construct($DB_con)
    {
      $this->db = $DB_con;
    }

    function addCat($catName,$webImage,$mobImage){
    	$stmt = $this->db->prepare("INSERT INTO `gf_categories`(`cat_name`,`web_images`,`mob_images`,`last_mod_date`,`created_date`) VALUES (:cat,:webimg,:mobimg,:moddate,:createdate)");
    	$stmt->execute(['cat'=>$cat,'webimg'=>$webImage,'mobimg'=>$mobImage,'moddate'=>$createdate,'createdate'=>$createdate]);	

    }
}

$sql = "SELECT * FROM gf_products";
$products = $conn->query($sql);
if (!empty($products)) {
    if ($products->num_rows > 0) {
        while ($row = $products->fetch_assoc()) {
            $products_data[] = $row;
        }
    }
}

?>


