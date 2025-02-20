<?php
$con = mysqli_connect('localhost','root','','project29');
if($con != FALSE)
{
    echo('Connection failed: '.mysqli_connect_error());
}
else
{
    echo 'Very Good';
}
