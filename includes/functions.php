<?php

    $localhost = "localhost"; #localhost
    $dbusername = "root"; #username of phpmyadmin
    $dbpassword = "";  #password of phpmyadmin
    $dbname = "arpeggio-database";  #database name

    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

function check_login($con)
{

	if(isset($_SESSION['user_id']))
	{
		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

}
function check_logged(){
    if(isset($_SESSION['user_name'])){
        return true;
    }
    else{
        return false;
    }
}
function check_if_admin(){
    if(isset($_SESSION['user_name'])){
        if($_SESSION['role']=="admin"){
            return true;
        }
        else{
            return false;
        }
}
}