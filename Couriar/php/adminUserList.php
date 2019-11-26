<?php
    include_once "db_config.php";
    if(isset($_POST['filter'])&&isset($_POST['subfilter'])&&isset($_POST['search']))
    {
        $search = str_replace("_"," ",$_POST['search']);
        // echo getfilterquery($_POST['filter'],$_POST['subfilter'],$search);
        $sql = getfilterquery($_POST['filter'],$_POST['subfilter'],$search);
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query))
        {
            while($row = mysqli_fetch_assoc($query))
            {
               echo "<div class='userListContainer'>";
               echo "<div class='useriddiv'><label class='lblposition'>";
               echo $row['aid'];
               echo "</label></div>";
               echo "<div class='usernamediv'><label class='lblposition'>";
               echo $row['adminname'];
               echo "</label></div>";
               echo "<div class='useremaildiv'><label class='lblposition'>";
               echo $row['email'];
               echo "</label></div>";
               echo "<div class='createdondiv'><label class='lblposition'>";
               echo $row['date']." ".$row['time'];
               echo "</label></div>";
               echo "<div class='permissiondiva'><label class='lblposition'>";
               echo $row['permission'];
               echo "</label></div>";
               echo "<div class='editdiv' ><label class='lblposition textgreen' onclick='editUserDetails(".$row['aid'].")'>Edit";
               echo "</label></div>";
               echo "<div class='removediv' onclick='RemoveUser(".$row['aid'].")'><label class='lblposition textred'>Remove</label></div>";
               echo "</div>";
            }
        }
        mysqli_close($conn);

    }
    function getfilterquery($filter,$subfilter,$search)
    {
        $sql = "SELECT * FROM `adminlogin` order by date asc";
        if($filter == 11)
        {
            if($subfilter == 111)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE adminname like '$search%' or email like '$search%' order by aid asc";
            }
            else if($subfilter == 112)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE adminname like '$search%' or email like '$search%' order by adminname desc";
            }
            else if($subfilter == 113)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE adminname like '$search%' or email like '$search%' order by aid asc";
            }
            else if($subfilter == 114)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE adminname like '$search%' or email like '$search%' order by aid desc";
            }
            else if($subfilter == 115)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE adminname like '$search%' or email like '$search%' order by date asc";
            }
            else if($subfilter == 116)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE adminname like '$search%' or email like '$search%' order by date desc";
            }
            else if($subfilter == 117)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE adminname like '$search%' AND email like '$search%' AND permission = 103";
            }
            else if($subfilter == 118)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE adminname like '$search%' AND email like '$search%' AND permission = 102";
            }
            else if($subfilter == 118)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE adminname like '$search%' AND email like '$search%' AND permission = 101";
            }
        }else if($filter == 12)
        {
            if($subfilter == 111)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE adminname like '$search%' order by adminname asc";
            }
            else if($subfilter == 112)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE adminname like '$search%' order by adminname desc";
            }
        }else if($filter == 13)
        {
            if($subfilter == 111)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE aid like '$search%' order by aid asc";
            }
            else if($subfilter == 112)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE aid like '$search%' order by aid desc";
            }
        }else if($filter == 14)
        {
            if($subfilter == 111)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE email like '$search%' order by email asc";
            }
            else if($subfilter == 112)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE email like '$search%' order by email desc";
            }
        }
        else if($filter == 15)
        {
            
            if($subfilter == 122)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE adminname like '$search%' AND date BETWEEN CURRENT_DATE - INTERVAL DAYOFMONTH(CURRENT_DATE)-1 DAY - INTERVAL 1 WEEK AND CURRENT_DATE order by adminname asc";
            }
            else if($subfilter == 123)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE  adminname like '$search%' AND date BETWEEN CURRENT_DATE - INTERVAL DAYOFMONTH(CURRENT_DATE)-1 DAY - INTERVAL 1 MONTH AND CURRENT_DATE order by adminname asc";
            }
            else if($subfilter == 124)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE adminname like '$search%' AND date BETWEEN CURRENT_DATE - INTERVAL DAYOFMONTH(CURRENT_DATE)-1 DAY - INTERVAL 3 MONTH AND CURRENT_DATE order by adminname asc";
            }
            else if($subfilter == 125)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE  adminname like '$search%' AND date BETWEEN CURRENT_DATE - INTERVAL DAYOFMONTH(CURRENT_DATE)-1 DAY - INTERVAL 6 MONTH AND CURRENT_DATE order by adminname asc";
            }
            else if($subfilter == 126)
            {
                $sql ="SELECT * FROM `adminlogin` WHERE adminname like '$search%' AND date BETWEEN CURRENT_DATE - INTERVAL DAYOFMONTH(CURRENT_DATE)-1 DAY - INTERVAL 12 MONTH AND CURRENT_DATE order by adminname asc";
            }
        }
        else if($filter == 16)
        {
            if($subfilter == 117)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE adminname like '$search%' AND email like '$search%' AND permission = 103";
            }
            else if($subfilter == 118)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE adminname like '$search%' AND email like '$search%' AND permission = 102";
            }
            else if($subfilter == 118)
            {
                $sql = "SELECT * FROM `adminlogin` WHERE adminname like '$search%' AND email like '$search%' AND permission = 101";
            }
        }
        return $sql;
    }
?>