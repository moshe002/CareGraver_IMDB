<?php 
include('config.php');
    if (isset($_POST['graveClicked'])){
        $graveID = $_POST['graveClicked'];
        $sql = mysqli_query($mysqli,"SELECT * FROM Gravesite gs LEFT JOIN Deceased d ON gs.gravesiteID = d.gravesiteID LEFT JOIN GravesiteClassification gc ON gs.graveClassID = gc.graveClassID WHERE gs.gravesiteID = '$graveID';");
        $result = mysqli_fetch_assoc($sql);
        $_POST['gravesiteResult'] = $result;
    }
    echo json_encode($_POST['gravesiteResult']);
?>