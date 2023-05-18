<?php 
include('config.php');
    if (isset($_POST['graveClicked'])){
        $graveID = $_POST['graveClicked'];
        $sql = mysqli_query($mysqli,"SELECT * from gravesite LEFT JOIN deceased ON gravesite.deceasedID=deceased.deceasedID WHERE gravesite.gravesiteID=$graveID;");
        $result = mysqli_fetch_assoc($sql);
        $_POST['gravesiteResult'] = $result;
    }
    echo json_encode($_POST['gravesiteResult']);
    ?>