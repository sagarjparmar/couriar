<?php
    include_once "db_config.php";
    if(isset($_POST['id']))
    {
        $data = $_POST['id'];
        $sql = "SELECT * FROM `address_book` WHERE id = $data";
        $query = mysqli_query($conn,$sql);
            if(mysqli_num_rows($query))
            {
                while($row = mysqli_fetch_assoc($query))
                {
                    $result['name'] = $row['name'];
                    $result['phone'] = $row['mobile'];
                    $result['email'] = $row['email'];
                    $result['address'] = $row['address'];
                    $result['land'] = $row['landmark'];
                    $result['state'] = $row['state'];
                    $result['city'] = $row['city'];
                    $result['villege'] = $row['villege'];
                    $result['pin_code'] = $row['pin_code'];
                }
            }
            echo json_encode($result);
    }
?>