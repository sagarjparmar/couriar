<?php
include_once "db_config.php";
if(isset($_POST['name']) && isset($_POST['uid']))
{
    $data = $_POST['name'];
    $uid = $_POST['uid'];
    $sql = "SELECT * FROM `address_book` WHERE (name like '%$data%' or email like '%$data%' or mobile like '%$data%' or address like '%$data%' or city like '%$data%' or landmark like '%$data%' or villege like '%$data%' or state like '%$data%') And `uid` = $uid";
    $query = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query))
    {
        while($row = mysqli_fetch_assoc($query))
        {
            $id = $row['id'];
            $name = $row['name'];
            $land = $row['landmark'];
            $email = $row['email'];
            $phone = $row['mobile'];
           // echo $id;
           echo "<div class='contact_display'  onclick='setAddressinForm(";
           echo $id;
           echo ");' id='contacts_lists'>";
           echo "<div class='name_title'>";
            echo "<span class='name_span'>";
            echo $name;
            echo "</span>";
            echo "<span class='add_span'>";
            echo $land;
            echo "</span></div><div class='contact_title'><span class='phone_span'>";
            echo $phone;
            echo "</span><span class='email_span'>";
            echo $email;
            echo "</span></div></div>";
        }
    }
    else
    {
        echo "<div class='name_title'>no data found</div>";
    }
}

?>