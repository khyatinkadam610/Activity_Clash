<html>
<?php  
include ('.\includes\h.php');
          if($w<>"a"){
      header("Location: index.php"); }
?>
<html>
<head>

    <script>
      
        function preventBack() { window.history.forward(1); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };

      preventBack() 

</script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.margin{

margin-left: 4%;
margin-right:4%;
margin-top: 7%;
}

.hovereffect {
width:100%;
height:30%;
float:left;
overflow:hidden;
position:relative;
text-align:center;
cursor:default;
}

.hovereffect .overlay {
width:100%;
height:100%;
position:absolute;
overflow:hidden;
top:0;
left:0;
opacity:0;
background-color:rgba(0,0,0,0.5);
-webkit-transition:all .4s ease-in-out;
transition:all .4s ease-in-out
}

.hovereffect img {
display:block;
position:relative;
-webkit-transition:all .4s linear;
transition:all .4s linear;
}

.hovereffect h2 {
text-transform:uppercase;
color:#fff;
text-align:center;
position:relative;
font-size:17px;
background:rgba(0,0,0,0.6);
-webkit-transform:translatey(-100px);
-ms-transform:translatey(-100px);
transform:translatey(-100px);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
padding:10px;
}

.hovereffect a.info {
text-decoration:none;
display:inline-block;
text-transform:uppercase;
color:#fff;
border:1px solid #fff;
background-color:transparent;
opacity:0;
filter:alpha(opacity=0);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
margin:50px 0 0;
padding:7px 14px;
}

.hovereffect a.info:hover {
box-shadow:0 0 5px #fff;
}

.hovereffect:hover img {
-ms-transform:scale(1.2);
-webkit-transform:scale(1.2);
transform:scale(1.2);
}

.hovereffect:hover .overlay {
opacity:1;
filter:alpha(opacity=100);
}

.hovereffect:hover h2,.hovereffect:hover a.info {
opacity:1;
filter:alpha(opacity=100);
-ms-transform:translatey(0);
-webkit-transform:translatey(0);
transform:translatey(0);
}

.hovereffect:hover a.info {
-webkit-transition-delay:.2s;
transition-delay:.2s;
}
</style>
</head>
<body>

<div >

<div class=" margin col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="images/Screenshot (15).png" alt="">
        <div class="overlay">
           <h2>Participant Info</h2>
           <a class="info" href="admin_parti.php">Click here</a>
        </div>
    </div>
</div>

    <div class=" margin col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="images/Screenshot (18).png" alt="">
        <div class="overlay">
           <h2>Event Info</h2>
           <a class="info" href="table.php">Click here</a>
        </div>
    </div>
</div>

    <div class="margin col-lg-3 col-md-4 col-sm-6 col-xs-12" >
    <div class="hovereffect">
        <img class="img-responsive" src="images/Screenshot (20).png" alt="">
        <div class="overlay" >
           <h2>Organizer Info</h2>
           <a class="info" href="admin_org.php">CLick Here</a>
           <br>
        </div>
    </div>
</div>

</div>

</body>
<?php  

include ('.\includes\f.php');
    
?>

</html>