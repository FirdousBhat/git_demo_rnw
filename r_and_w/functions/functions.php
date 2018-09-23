<?php

CLASS RaW{


	private $db;
 
    function __construct($conn)
    {
      $this->db = $conn;
    }



    public function userRegister($data){

    	try{
             
        $each = explode('|',$data);
    	$chk_phno = $this->db->prepare('SELECT count(*) FROM `RaW_customers` WHERE `user_mobile` = :phno');
    	$chk_phno->bindParam(':phno',$each[1],PDO::PARAM_STR);
    	$chk_phno->execute();
    	if($chk_phno->fetchColumn() >0){

    		$msg = 'phNoExists';
    	}else{                
               $pass = password_hash($each[3], PASSWORD_DEFAULT);
    		$stmt = $this->db->prepare('INSERT INTO `RaW_customers`(user_name,user_mobile,user_email,password) VALUES(:name,:mobile,:email,:password)');
    		$stmt->bindParam(':name',$each[0]);
    		$stmt->bindParam(':mobile',$each[1],PDO::PARAM_STR);
    		$stmt->bindParam(':email',$each[2],PDO::PARAM_STR);
    		$stmt->bindParam(':password',$pass,PDO::PARAM_STR);
    		$stmt->execute();
    		if($stmt){
    			$msg = 'success';
    		}else{
    			$msg = 'false';
    		}
    	}

    	}catch(PDOException $e){

    		echo $e->getMessage();

    		$msg = 'false';
    	}

    	return $msg;
    }







    public function userLogin($phno,$pass){

    try{
    	$stmt = $this->db->prepare('SELECT count(*) FROM `RaW_customers` WHERE `user_mobile` = :phno');
    	$stmt->bindparam(':phno',$phno,PDO::PARAM_STR);
    	$stmt->execute();
    	if($stmt->fetchColumn() >0){

            $sth = $this->db->prepare('SELECT `user_id`,`user_name`,password FROM `RaW_customers` WHERE `user_mobile` = :phno');
    		$sth->bindParam(':phno',$phno);
    	    $sth->execute();
    	    $res = $sth->fetch(PDO::FETCH_ASSOC);
    	    if(password_verify($pass,$res['password'])){

    	    	$_SESSION['user_id'] = $res['user_id'];

    	    	$msg = 'success';
    	    }
    	    else{
    	    	$msg = 'wrongPass';
    	    }
    	}else{

    		$msg = 'notExists';
    	}

    	}catch(PDOException $e){

    		echo $e->getMessage();
    	}
     return $msg;

}



public function getUserName($userid){

	try{

	$stmt = $this->db->prepare('SELECT `user_name` FROM `RaW_customers` WHERE `user_id` = :uid');
	$stmt->bindParam(':uid',$userid,PDO::PARAM_INT);
	$stmt->execute();
	$res = $stmt->fetch(PDO::FETCH_ASSOC);
	return $res['user_name'];

    }catch(PDOException $e){

	echo $e->getMessage();
}

}

}