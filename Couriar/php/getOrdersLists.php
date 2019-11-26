<?php
    include_once "db_config.php";
    if(isset($conn) && isset($_POST['filter'])&&isset($_POST['sfilter'])&&isset($_POST['search']))
    {
        $search = str_replace("_"," ",$_POST['search']);
        $sql = getQuery($_POST['filter'],$_POST['sfilter'],$search);
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query))
        {
            while($row = mysqli_fetch_assoc($query))
            {
                echo "<div class='orderDetailsContainer'>";
                echo "<div class='idContainer'><label class='lblset'>";
                echo $row['o_id'];//001
                echo "</label></div><div class='uidContainer'><label class='lblset'>";
                echo $row['uid'];
                echo "</label></div><div class='RNameContainer'><label class='lblset'>";
                echo $row['uname'];
                echo "</label></div><div class='RNameContainer'><label class='lblset'>";
                echo $row['sname'];
                echo "</label></div><div class='RNameContainer'><label class='lblset'>";
                echo $row['sphone'];
                echo "</label></div><div class='RNameContainer'><label class='lblset'>";
                echo $row['date'];
                echo "</label></div><div class='RNameContainer'><label class='lblset'>";
                echo getDeliveryType($row['dtypet']);
                echo "</label></div><div class='RNameContainer'><label class='lblset ";
                echo setTrackAction($row['track']);
                echo "' onclick='";
                echo setTrackAction($row['track']);
                echo "(";
                echo $row['o_id'];
                echo ")'>";
                echo setTrackAction($row['track']);
                echo "</label></div><div class='RNameContainer'><label  class='lblset ";
                echo setOrder($row['status']);
                echo "' onclick='";
                echo setOrder($row['status']);
                echo "(";
                echo $row['o_id'];
                echo ")'>";
                echo setOrder($row['status']);
                echo "</label></div><div class='RButtonContainer'><button class='editviewbtn' id='' title='Edit and View' style=";
                echo '"';
                echo "background: url";
                echo "('src/editview.svg')";
                echo " no-repeat; background-size:100%;";
                echo '"';
                echo " onclick='viewOrder(";
                echo $row['o_id'];
                echo ")'";
                echo "></button></div></div>";
            }
        }else
        {
            echo "no data found";
        }
    }
mysqli_close($conn);
function test()
{
echo "<div class='orderDetailsContainer'>
    <div class='idContainer'><label class='lblset'>001</label></div>
    <div class='uidContainer'><label class='lblset'>002</label></div>
    <div class='RNameContainer'><label class='lblset'>User's Name</label></div>
    <div class='RNameContainer'><label class='lblset'>Sender's Name</label></div>
    <div class='RNameContainer'><label class='lblset'>Sender's Contact</label></div>
    <div class='RNameContainer'><label class='lblset'>Orders's Date</label></div>
    <div class='RNameContainer'><label class='lblset'>Delivery Type</label></div>
    <div class='RNameContainer'><label class='lblset'>Track's Action</label></div>
    <div class='RNameContainer'><label  class='lblset'>Order Action</label></div>
    <div class='RButtonContainer'><button class='editviewbtn' id='' title='Edit and View' style='background: url('src/editview.svg') no-repeat; background-size:100%;'></button></div>
</div>";
}
function getQuery($filter,$subfilter,$search)
{
    if($filter == 200)
    {
            $sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` ORDER BY status ASC";
    }        
    else if($filter == 201)    
    {
            if($subfilter == 225)
            {$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` WHERE o_id like '$search%' or login.uname like '$search%' ORDER BY o_id ASC";}
            else if($subfilter == 226)    
            {$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` WHERE o_id like '$search%' or login.uname like '$search%' ORDER BY o_id DESC";}   
    }
    else if($filter == 202)    
    {
            if($subfilter == 225){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` WHERE uid like '$search%' or login.uname like '$search%' ORDER BY uid ASC";}
            else if($subfilter == 226){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` WHERE uid like '$search%' or login.uname like '$search%' ORDER BY uid DESC";}
    }
    else if($filter == 203)   
    {
        if($subfilter == 225){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` WHERE login.uname like '$search%' ORDER BY login.uname ASC";}
        else if($subfilter == 226){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` WHERE login.uname like '$search%' ORDER BY login.uname DESC";}
    }
    else if($filter == 204)   
    {
        if($subfilter == 225){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` WHERE orders.sname like '$search%' ORDER BY orders.sname ASC";}
        else if($subfilter == 226){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` WHERE orders.sname like '$search%' ORDER BY orders.sname DESC";}
    }
    else if($filter == 205)   
    {
        //senders contacts 227 email,228 mobile
            if($subfilter == 227){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` WHERE orders.semail like '$search%' ORDER BY orders.semail ASC"; }
            else if($subfilter == 228){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` WHERE orders.sphone like '$search%' ORDER BY orders.sphone ASC";}
    }
    else if($filter == 206)   
    {
            //229 today //230 tomorrow //231 in week//232 in month//233 in 3 month//
            //https://www.plus2net.com/sql_tutorial/date-lastweek.php
            if($subfilter == 229){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` WHERE orders.date = CURRENT_DATE  ORDER BY orders.o_id DESC";}
            else if($subfilter == 230){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` WHERE orders.date = (CURRENT_DATE - 1) ORDER BY orders.o_id DESC";}
            else if($subfilter == 231){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` WHERE orders.date >= DATE_SUB(CURDATE(), INTERVAL 7 DAY) ORDER BY orders.o_id DESC";}
            else if($subfilter == 232){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` WHERE orders.date between DATE_FORMAT(CURDATE() ,'%Y-%m-01') AND CURDATE() ORDER BY orders.o_id DESC";}
            else if($subfilter == 233){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` WHERE orders.date BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 3 MONTH ) AND DATE_SUB( CURDATE( ) ,INTERVAL 0 MONTH ) ORDER BY orders.o_id DESC";}
            else if($subfilter == 234){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` WHERE orders.date BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 6 MONTH ) AND DATE_SUB( CURDATE( ) ,INTERVAL 0 MONTH ) ORDER BY orders.o_id DESC";}
            else if($subfilter == 235){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` WHERE orders.date BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 12 MONTH ) AND DATE_SUB( CURDATE( ) ,INTERVAL 0 MONTH ) ORDER BY orders.o_id DESC";}
            else if($subfilter == 236){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` WHERE orders.date like '$search%' ORDER BY orders.o_id DESC";}
    }
    else if($filter == 207)   
    {
            if($subfilter == 240){$sql="SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` ORDER BY orders.status ASC";}
            else if($subfilter==241){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.status=241  ORDER BY orders.date ASC";}
            else if($subfilter == 242){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.status=242  ORDER BY orders.date ASC";}
            else if($subfilter==243){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.status=243  ORDER BY orders.date ASC";}
            else if($subfilter == 244){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.status=244  ORDER BY orders.date ASC";}
            else if($subfilter == 245){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.status=245  ORDER BY orders.date ASC";}
    }
    else if($filter == 208)   
    {
        
            if($subfilter == 250){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` ORDER BY orders.track ASC";}
            else if($subfilter ==  251){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.track=251  ORDER BY orders.date ASC";}
            else if($subfilter == 252){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.track=252  ORDER BY orders.date ASC";}
            else if($subfilter == 253){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.track=253  ORDER BY orders.date ASC";}
            else if($subfilter == 254){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.track=254  ORDER BY orders.date ASC";}
            else if($subfilter == 255){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.track=255  ORDER BY orders.date ASC";}
            else if($subfilter == 256){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.track=256  ORDER BY orders.date ASC";}
            else if($subfilter == 257){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.track=257  ORDER BY orders.date ASC";}
    }
    else if($filter == 209)   
    {
            if($subfilter == 'X'){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` ORDER BY orders.dtypet DESC";}
            else if($subfilter == 'A'){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.dtypet = 'A' ORDER BY orders.date DESC";}
            else if($subfilter == 'B'){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.dtypet = 'B' ORDER BY orders.date DESC";}
            else if($subfilter == 'C'){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.dtypet = 'C' ORDER BY orders.date DESC";}
            else if($subfilter == 'D'){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.dtypet = 'D' ORDER BY orders.date DESC";}
    }
    else if($filter == 210)   
    {
 
        if($subfilter == 'X'){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` ORDER BY orders.psizet DESC";}
        else if($subfilter == 'A'){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.psizet = 'A' ORDER BY orders.date DESC";}
        else if($subfilter == 'B'){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.psizet = 'B' ORDER BY orders.date DESC";}
        else if($subfilter == 'C'){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.psizet = 'C' ORDER BY orders.date DESC";}
    }
    else if($filter == 211)       
    {
            if($subfilter == 'X'){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` ORDER BY orders.pweightt DESC";}
            else if($subfilter == 'A'){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.pweightt = 'A' ORDER BY orders.date DESC";}
            else if($subfilter == 'B'){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.pweightt = 'B' ORDER BY orders.date DESC";}
            else if($subfilter == 'C'){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.pweightt = 'C' ORDER BY orders.date DESC";}
            else if($subfilter == 'D'){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.pweightt = 'D' ORDER BY orders.date DESC";}
    }
    else if($filter == 212)   
    {
                if($subfilter == 300){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.sname='$search%' or orders.sphone='$search%' or orders.semail='$search%' or orders.saddress='$search%' or orders.sland='' or orders.sstate='$search%' or orders.sstate='$search%' or orders.scity='$search%' or orders.svillege='$search%' or orders.spincode='$search%' ORDER BY o_id DESC";}
                else if($subfilter==321){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.sname='$search%' ORDER BY o_id DESC";}
                else if($subfilter==322){$sql="SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.sphone='$search%' ORDER BY o_id DESC";}
                else if($subfilter==323){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.semail='$search%' ORDER BY o_id DESC";}
                else if($subfilter == 324){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.saddress='$search%' ORDER BY o_id DESC";}
                else if($subfilter ==325){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where  orders.sland='$search%'  ORDER BY o_id DESC";}
                else if($subfilter ==326){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.sstate='$search%' ORDER BY o_id DESC";}
                else if($subfilter ==327){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.scity='$search%' ORDER BY o_id DESC";}
                else if($subfilter ==328){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where  orders.svillege='$search%' ORDER BY o_id DESC";}
                else if($subfilter ==329){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where  orders.spincode='$search%' ORDER BY o_id DESC";}
    }
    else if($filter == 213)   
        {
                if($subfilter == 300){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.rname='$search%' or orders.rphone='$search%' or orders.remail='$search%' or orders.raddress='$search%' or orders.rland='' or orders.rstate='$search%' or orders.rstate='$search%' or orders.rcity='$search%' or orders.rvillege='$search%' or orders.rpincode='$search%' ORDER BY o_id DESC";}
                else if($subfilter==321){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.rname='$search%' ORDER BY o_id DESC";}
                else if($subfilter==322){$sql="SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.rphone='$search%' ORDER BY o_id DESC";}
                else if($subfilter==323){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.remail='$search%' ORDER BY o_id DESC";}
                else if($subfilter==324){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.rsaddress='$search%' ORDER BY o_id DESC";}
                else if($subfilter==325){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where  orders.rland='$search%'  ORDER BY o_id DESC";}
                else if($subfilter==326){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.rstate='$search%' ORDER BY o_id DESC";}
                else if($subfilter==327){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.rcity='$search%' ORDER BY o_id DESC";}
                else if($subfilter==328){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where  orders.rvillege='$search%' ORDER BY o_id DESC";}
                else if($subfilter==329){$sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where  orders.rpincode='$search%' ORDER BY o_id DESC";}
        }

    
    return $sql;
}
function getDeliveryType($type)
{
    if($type == 'A')
    {
        return "NORMAL";
    }
    else if($type == 'B')
    {
        return "FAST";
    }
    else if($type == 'C')
    {
        return "SUPER FAST";
    }
    else if($type == 'D')
    {
        return "QUICK";
    }
    else
    {
        return "undefined";
    }
}
function setTrackAction($track)
{
    if($track == null)
    {
        return "Gotopick";
    }
    if($track == 251)
    {
        return "Pick";
    }
    if($track == 252)
    {
        return "ontheway";
    }
    else if($track == 253)
    {
        return "destination";
    }
    else if($track == 254)
    {
        return "delivered";
    }
    else if($track == 256)
    {
        return "unabletofind";
    }
    else if($track == 257)
    {
        return "returned";
    }
    else if($track == 255);
    {
        return "successfull";
    }
}
function setOrder($status)
{
    if($status == 241)
    {
        return "accept";
    }
    else if($status == 242)
    {
        return "success";
    }
    else if($status == 243)
    {
        return "cancled";
    }
    else if($status == 244)
    {
        return "successfull";
    }  
    else if($status == 245)
    {
        return "failed";
    }
}
?>