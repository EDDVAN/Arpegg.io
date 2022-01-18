<?php
    $localhost = "localhost"; #localhost
    $dbusername = "root"; #username of phpmyadmin
    $dbpassword = "";  #password of phpmyadmin
    $dbname = "arpeggio-database";  #database name

    if (!isset ($_GET['Upage']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['Upage'];  
    }

    if(!isset($_GET["username"])){
        $search_username="";
    }
    else{

        $search_username=$_GET["username"];
    }
   
    if(!isset($_GET["email"])){
        $search_email="";
    }
    else{

        $search_email=$_GET["email"];
    }
    
    $results_per_page = 10  ;  
    $page_first_result = ($page-1) * $results_per_page;  

    #connection string
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

    $query1 = 'SELECT * FROM users where (username LIKE "'.$search_username.'%") AND (email LIKE "'.$search_email.'%")';
    $result1 = mysqli_query($conn, $query1);  
    $number_of_result = mysqli_num_rows($result1);


    #determine the total number of pages available  
    $number_of_page = ceil ($number_of_result / $results_per_page);  

    $query='SELECT * FROM users where (username LIKE "'.$search_username.'%") AND (email LIKE "'.$search_email.'%") LIMIT ' . $page_first_result . ',' . $results_per_page; 
    $result = mysqli_query($conn,$query);
    $rowcount=$result->num_rows;
    
    if ($rowcount > 0) {
        while($row = mysqli_fetch_array($result)) {
            $querycount='SELECT * FROM  users u JOIN simples s ON u.iduser=s.idUser where (username LIKE "'.$row["username"].'%") AND (email LIKE "'.$row["email"].'%")';
            $Cresult = mysqli_query($conn,$querycount);
            $Ccount=$Cresult->num_rows;
            echo '<tr class="table-content">
                <td class="Centered-line">
                    <div><div class="profile-pic" style="background-image: url('.$row['profilepic'].');"></div></div>
                </td>
                <td>
                    <span>'.$row["idUser"].'</span>
                </td>
                <td>
                    <span>'.$row["username"].'</span>
                </td>
                <td>
                    <span>'.$row["email"].'</span>
                </td>
                <td>
                    <a href="User.php?username='.$row["username"].'" class="link-to-profile">Visite Profile</a>
                </td>
                <td>
                    <span>'.$Ccount.'</span>
                </td>';
        if($row["role"]=="admin"){
            $role="user";
            $role_message="Change";
        }else{
            $role="admin";
            $role_message="Change";
        }
        
            echo '<td class="Centered-line">';
            if($row["Deleted"]==1){
            echo '<a href="includes/undo-delete.php?id='.$row["idUser"].'" class="d-btn ">undo delete</a>';    
            }else{
            echo '<a class="d-btn BC-danger">Still active</a>';
            }
            echo 
                '</td>
                <td class="Centered-line">
                <span>'.$row["role"].'</span> <a href="includes/role-change.php?id='.$row["idUser"].'&role='.$role.'" class="d-btn ">'.$role_message.'</a>
                </td>
                <td>
                <a href="includes/delete-account.php?id='.$row["idUser"].'" class="d-btn user-delete">Delete</a>
                </td>
            </tr>';
        }
        echo '<div class="audio-wrap pagelinkwrap">';
        for($page = 1; $page<= $number_of_page; $page++) {  
            echo '<a class="Page-links" href = "Dashboard.php?Action=ManageUsers&Upage=' . $page . '">' . $page . ' </a>';
        } 
        echo '</div>';
    } else {
        if($page>1){
            echo '<script>
            window.location.href = "Dashboard.php?Action=ManageUsers&Upage=1";
            </script>';
        }else{
            echo "<h1>No Users were found </h1>";
        }
    }
    $conn->close();
?>




