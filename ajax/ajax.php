<?php
//Query
require_once '../php/requires/do_dump.php';
//$data = json_decode(file_get_contents("php://input"));
//echo $data->name;
//do_dump($_POST);
$composer=  json_decode($_POST['compositor'],true);
$id= $composer['id'];
$conn = new mysqli("localhost","artur","5BaG4WhZi1");

        // check connection
        if (mysqli_connect_errno()) {
          exit('Connect failed: '. mysqli_connect_error());
        }
$search="SELECT * 
FROM  `xmltry`.`lhkvr_impromastering_titletemas` 
WHERE  `compositor` ='".$id."'";


            $result=$conn->query($search);
            if($result===false){
                echo "<hr/><br/>John Coltrane   <strong>FAIL</strong><br/><hr/>";
            }
            else{
           
             while ($row = $result->fetch_assoc()) {
        $rows[]=$row;
    }
            echo json_encode($rows);
            }
            $conn->close();
            
?>
