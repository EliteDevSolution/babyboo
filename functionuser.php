<?php

$stmt = $conn->query("SELECT * FROM user WHERE Email='".$_POST['Email']."'  AND UserPass='".$_POST['UserPass']."'");
if($stmt->rowCount() !=0){ // have a record 
$row = $stmt->fetch(PDO::FETCH_ASSOC); // fetch a record
          
          $_SESSION['IdUser'] = $row['IdUser'];

          echo"<script>document.location.href='user/listbaby1.php';</script>";
        }

else {
    echo"<script>alert('Wrong Email & Password');document.location.href='indexuser.html';</script>";
}


function viewData($sql) {
    global $conn;

    $query = $conn->prepare($sql);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);

    return $result;
}

?>