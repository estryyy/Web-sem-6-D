<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $database = new Database();
        $db = $database->getConnection();

        $deleteSql = "DELETE FROM jabatan WHERE id = ?";
        $stmt = $db->prepare($deleteSql);
        $stmt->bindParam(1, $id);
        if($stmt->execute()){
            $_SESSION['hasil'] =true;
        }else{
            $_SESSION['hasil'] =false;
        }
    }
    echo "<meta http-equiv='refresh' content='0;url=?page=jabatanread'>";
?>