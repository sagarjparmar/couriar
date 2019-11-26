<?php
// CONNECT TO DATABASE
$a = $_GET['term'];
$term = strtolower($a);
$conn = mysqli_connect("localhost","root","123","test");
$sql = "select state_name from state where state_name like '%$term%'";
if($result = mysqli_query($conn,$sql))
{
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $data[] = $row['state_name'];
        }
    }
}
else
{
    echo "false";
}
echo json_encode($data);
mysqli_close($conn);
?>