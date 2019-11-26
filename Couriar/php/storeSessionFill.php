<?php
session_start();
if(isset($_POST['fname']) && isset($_POST['fphone'])&& isset($_POST['femail']) && isset($_POST['faddress'])&& isset($_POST['fstate'])&& isset($_POST['fland'])&&  isset($_POST['fcity'])&& isset($_POST['fvillege'])&& isset($_POST['fpincode']) && isset($_POST['tname']) && isset($_POST['tphone']) && isset($_POST['femail']) && isset($_POST['taddress']) && isset($_POST['tland'])&& isset($_POST['tstate'])&& isset($_POST['tcity'])&& isset($_POST['tvillege'])&& isset($_POST['tpincode']))
{   $fname = $_POST['fname'];
    $fphone = $_POST['fphone'];
    $femail = $_POST['femail'];
    $faddress = $_POST['faddress'];
    $fland = $_POST['fland'];
    $fstate = $_POST['fstate'];
    $fcity = $_POST['fcity'];
    $fvillege = $_POST['fvillege'];
    $fpincode = $_POST['fpincode'];
    $tname = $_POST['tname'];
    $tphone = $_POST['tphone'];
    $temail = $_POST['temail'];
    $taddress = $_POST['taddress'];
    $tland = $_POST['tland'];
    $tstate = $_POST['tstate'];
    $tcity = $_POST['tcity'];
    $tvillege = $_POST['tvillege'];
    $tpincode = $_POST['tpincode'];
    
    $_SESSION['fname'] = $fname;
    $_SESSION['fphone'] = $fphone;
    $_SESSION['femail'] = $femail;
    $_SESSION['faddress'] = $faddress;
    $_SESSION['fland'] = $fland;
    $_SESSION['fstate'] = $fstate;
    $_SESSION['fcity'] = $fcity;
    $_SESSION['fvillege'] = $fvillege;
    $_SESSION['fpincode'] = $fpincode;
    $_SESSION['tname'] = $tname;
    $_SESSION['tphone'] = $tphone;
    $_SESSION['temail'] = $temail;
    $_SESSION['taddress'] = $taddress;
    $_SESSION['tland'] = $tland;
    $_SESSION['tstate'] = $tstate;
    $_SESSION['tcity'] = $tcity;
    $_SESSION['tvillege'] = $tvillege;
    $_SESSION['tpincode'] = $tpincode;
    
    echo true;
}
else
{
    echo false;
}

?>