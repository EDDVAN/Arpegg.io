<?php

    $localhost = "localhost"; #localhost
    $dbusername = "root"; #username of phpmyadmin
    $dbpassword = "";  #password of phpmyadmin
    $dbname = "arpeggio-database";  #database name


$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
$sql1="SELECT * FROM users";
$result1 = mysqli_query($conn,$sql1);
$rowcount1=$result1->num_rows;

$sql2="SELECT * FROM simples";
$result2 = mysqli_query($conn,$sql2);
$rowcount2=$result2->num_rows;

$simpleDownloads=0;
while($row = mysqli_fetch_array($result2)){
    if($row['Nbr_Downloads']!=NULL){
        $simpleDownloads=$simpleDownloads+$row['Nbr_Downloads'];
    }
}

$sql3="SELECT * FROM midi";
$result3 = mysqli_query($conn,$sql3);
$rowcount3=$result3->num_rows;

$MidiDownloads=0;
while($row = mysqli_fetch_array($result3)){
    if($row['Nbr_Downloads']!=NULL){
        $MidiDownloads=$MidiDownloads+$row['Nbr_Downloads'];
    }
}

$sql4="SELECT * FROM users where Deleted=1";
$result4 = mysqli_query($conn,$sql4);
$rowcount4=$result4->num_rows;

$sql5="SELECT * FROM users where Deleted=0 and Active=0";
$result5 = mysqli_query($conn,$sql5);
$rowcount5=$result5->num_rows;

$rowcount6=$rowcount1-($rowcount4+$rowcount5);

$sql7="SELECT * FROM simples where Deleted=1";
$result7 = mysqli_query($conn,$sql7);
$rowcount7=$result7->num_rows;

$sql8="SELECT * FROM simples where Deleted=0 and Visible=0";
$result8 = mysqli_query($conn,$sql8);
$rowcount8=$result8->num_rows;

$rowcount9=$rowcount2-($rowcount7+$rowcount8);

                    echo   '<div class="DC-Section">
                                <h1>USERS</h1>
                                <div>
                                    <h3>Total Users: </h3> <span id="T_U">'.$rowcount1.'</span>
                                    <h3>Total Active Users: </h3> <span id="T_U">'.$rowcount6.'</span>
                                    <h3>Total Inactive Users: </h3> <span id="T_U">'.$rowcount5.'</span>
                                    <h3>Total Deleted Users: </h3> <span id="T_U">'.$rowcount4.'</span>
                                </div>
                            </div>
                            <div class="DC-Section">
                                <h1>SIMPLES</h1>
                                <div>
                                    <h3>Total Simples Uploaded: </h3> <span id="T_S">'.$rowcount2.'</span>
                                    <h3>Total Current Simples: </h3> <span id="T_S">'.$rowcount9.'</span>
                                    <h3>Total Deleted Simples: </h3> <span id="T_S">'.$rowcount7.'</span>
                                    <h3>Total Hidden Simples: </h3> <span id="T_S">'.$rowcount8.'</span>
                                    <h3>Total Downloads: </h3> <span id="T_S_D">'.$simpleDownloads.'</span>
                                </div>
                            </div>
                            <div class="DC-Section">
                                <h1>REPORTS</h1>
                                <div>
                                    <h3>Total Reports: </h3> <span id="T_R"></span>
                                    <h3>Unsolved Report: </h3> <span id="T_R_U">11</span>
                                    <h3>Solved Reports: </h3> <span id="T_R_S">23</span>
                                </div>
                            </div>
                            <div class="DC-Section">
                                <h1>MIDI</h1>
                                <div>
                                    <h3>Total MiDis: </h3> <span id="T_M">'.$rowcount3.'</span>
                                    <h3>Total Downloads: </h3> <span id="T_M_D">'.$MidiDownloads.'</span>
                                </div>
                            </div>';

?>