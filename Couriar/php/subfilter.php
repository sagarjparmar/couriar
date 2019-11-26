<?php
    if(isset($_POST['filter']))
    {
        if($_POST['filter']==11)
        {
            echo "<option value='111'>Ascending Name</option><option value='112'>Dscending Name</option><option value='113'>ASC id</option><option value='114'>DSC id</option><option value='115'>ASC date</option><option value='116'>DSC date</option><option value='117'>Permission Full</option><option value='118'>Permission Local</option><option value='119'>Delivery Boy</option>";
        }
        else if($_POST['filter']==12)
        {
            echo "<option value='111'>Ascending</option><option value='112'>Dscending</option>";
        }else if($_POST['filter']==13 || $_POST['filter']==14)
        {
            echo "<option value='111'>Ascending</option><option value='112'>Dscending</option>";
        }
        else if($_POST['filter']==15)
        {
            echo "<option value='122'>This Week</option><option value='123'>This Month</option><option value='124'>Last 3 month</option><option value='125'>in Last 6 Month</option><option value='126'>in this year</option>";
        }
        else if($_POST['filter']==16)
        {
            echo "<option value='117'>Permission Full</option><option value='118'>Permission Local</option><option value='119'>Delivery Boy</option>";
        }
        else if($_POST['filter']==17)
        {
            echo "<option value='117'>Permission Full</option><option value='118'>Permission Local</option><option value='119'>Delivery Boy</option>";
        }
        else{
            echo "<option>invalid</option>";
        }
    }
?>