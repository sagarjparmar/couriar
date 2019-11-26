<?php
    if(isset($_POST["filter"]))
    {
        if($_POST["filter"]==200)
        {
            echo "<option value=''>Latest</option> ";
        }
        else if($_POST["filter"]==201)
        {
            echo "<option value='225'>Ascending</option> ";
            echo "<option value='226'>Descending</option> ";

        }else if($_POST["filter"]==202)
        {
            echo "<option value='225'>Ascending</option> ";
            echo "<option value='226'>Descending</option> ";
            
        }else if($_POST["filter"]==203)
        {
            echo "<option value='225'>Ascending</option> ";
            echo "<option value='226'>Descending</option> ";
            
        }else if($_POST["filter"]==204)
        {
            echo "<option value='225'>Ascending</option> ";
            echo "<option value='226'>Descending</option> ";            
        }else if($_POST["filter"]==205)
        {
            echo "<option value='227'>Email</option> ";
            echo "<option value='228'>Mobile Number</option> ";
        }else if($_POST["filter"]==206)
        {
            echo "<option value='229'>Today</option> ";
            echo "<option value='230'>Tommorow</option> ";
            echo "<option value='231'>In Week</option> ";
            echo "<option value='232'>In Month</option> ";
            echo "<option value='233'>In three Month</option> ";
            echo "<option value='234'>In six Month</option> ";
            echo "<option value='235'>In Year</option> ";
            echo "<option value='236'>search</option> ";
        }else if($_POST["filter"]==207)
        {
            echo "<option value='240'>All</option>";
            echo "<option value='241'>Requsted</option>";
            echo "<option value='242'>Accepted</option>";
            echo "<option value='243'>Cancled</option>";
            echo "<option value='244'>Success</option>";
            echo "<option value='245'>Failed</option>";
        }else if($_POST["filter"]==208)
        {
            echo "<option value='250'>All</option>";
            echo "<option value='251'>Way to Pick</option>";
            echo "<option value='252'>Picked</option>";
            echo "<option value='253'>On the Way</option>";
            echo "<option value='254'>at Destination</option>";
            echo "<option value='255'>Delivered</option>";
            echo "<option value='256'>Unable to find</option>";
            echo "<option value='257'>Returned</option>";
        }else if($_POST["filter"]==209)
        {
            echo "<option value='X'>ALL</option>";
            echo "<option value='A'>NORMAL</option>";
            echo "<option value='B'>FAST</option>";
            echo "<option value='C'>SUPER FAST</option>";
            echo "<option value='D'>FAST</option>";
        }else if($_POST["filter"]==210)
        {
            echo "<option value='X'>ALL</option>";
            echo "<option value='A'>SMALL</option>";
            echo "<option value='B'>MEDIUM</option>";   
            echo "<option value='C'>BIG</option>";
        }else if($_POST["filter"]==211)
        {
            echo "<option value='X'>ALL</option>";
            echo "<option value='A'>LOW</option>";
            echo "<option value='B'>NORMAL</option>";   
            echo "<option value='C'>MEDIUM</option>";
            echo "<option value='D'>HEAVY</option>";
        }else if($_POST["filter"]==212)
        {
            echo "<option value='300'>ALL</option>";
            echo "<option value='321'>name</option>";
            echo "<option value='322'>mobile</option>";   
            echo "<option value='323'>email</option>";
            echo "<option value='324'>home</option>";
            echo "<option value='325'>landmark</option>";
            echo "<option value='326'>state</option>";
            echo "<option value='327'>city</option>";
            echo "<option value='328'>villege</option>";
            echo "<option value='329'>pincode</option>";
        }else if($_POST["filter"]==213)
        {
            echo "<option value='300'>ALL</option>";
            echo "<option value='321'>name</option>";
            echo "<option value='322'>mobile</option>";   
            echo "<option value='323'>email</option>";
            echo "<option value='324'>home</option>";
            echo "<option value='325'>landmark</option>";
            echo "<option value='326'>state</option>";
            echo "<option value='327'>city</option>";
            echo "<option value='328'>villege</option>";
            echo "<option value='329'>pincode</option>";
        }
        else if($_POST["filter"]==21)
        {
            echo "<option value='225'>Ascending</option> ";
            echo "<option value='226'>Descending</option> ";
        }
        else if($_POST["filter"]==22)
        {
            echo "<option value='225'>Ascending</option> ";
            echo "<option value='226'>Descending</option> ";
        }
        else if($_POST["filter"]==23)
        {
            echo "<option value='225'>Ascending</option> ";
            echo "<option value='226'>Descending</option> ";
        }
        else if($_POST["filter"]==24)
        {
            echo "<option value='229'>Today</option> ";
            echo "<option value='230'>Tommorow</option> ";
            echo "<option value='231'>In Week</option> ";
            echo "<option value='232'>In Month</option> ";
            echo "<option value='233'>In three Month</option> ";
            echo "<option value='234'>In six Month</option> ";
            echo "<option value='235'>In Year</option> ";
            echo "<option value='236'>search</option> ";
        }
        
    }
?>