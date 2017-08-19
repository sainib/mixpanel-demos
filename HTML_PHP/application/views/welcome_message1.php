<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Example</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
.adimg{
width: 500px;
}

</style>


</head>

<body>


<div style="left-margin:50px;">

<div style="display:block;width:80%;text-align:center;">
    <img style="margin-left:30px;float:left;top:-100px;" src="./img/hwx.png" />
    <h1 >Ad Serving Demo</h1>
</div>

<div style="display:block;padding-left:350px;padding-top:50px;margin-left:350px;text-align:left;">

<div>

Select a user in dropdown and click on the link to run test with that user - </br>
</div>
<!--<ul>
<li>
<a href="#" onclick="javascript:startTestWithUser('user1');">User1</a>
</li>

<li>
<a href="#" onclick="javascript:startTestWithUser('user2');">User2</a>
</li>

</ul>-->
<div>
        <select name="drop_down" id="dropDownUser">
            <option value="-1" selected="Selected">Select a User</option>
        </select>
</div>        
<div style="display:block;padding:30px;margin:30px;">
        <a style="text-align:center;width:600px;display:block;padding:20px;background-color:#4CAF50;" href="#" onclick="javascript:startTestWithUser();">Click here to simulate the selected user</a>
</div>
</div>
</div>
    <hr>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>    

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

<script type="text/javascript">


function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}


$(document).ready(function() {
    $.getJSON("http://dzaratsian-10.field.hortonworks.com:7080/user", function(obj) {
        $.each(obj.users, function(ind, userObj) {
            $("#dropDownUser").append("<option value='"+userObj.userid+"''> UserID: " + userObj.userid + ", Name: " +userObj.FirstName+ " " +userObj.LastName+ ", Age: " +userObj.Age+  ", City: " +userObj.City+", "+userObj.State+"</option>");
        });
    });
});


function startTestWithUser(){
    
    if ($('#dropDownUser').val() === "-1") {
        alert('Select a user dummy!')
        return false;
    }else{

//        setCookie("ad-demo-uid",$('#dropDownUser').val(),1);
//        window.location.replace("./index1.html");        

        $.removeCookie("ad-demo-uid");
        $.cookie("ad-demo-uid",$('#dropDownUser').val() );
        document.cookie="my-ad-demo-uid=1";
        window.location.replace("./index1.html?id="+$('#dropDownUser').val());        
    }
}

//http://dzaratsian-10.field.hortonworks.com:7080/user


</script>

</body>

</html>




