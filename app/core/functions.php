<?php 

function css($css)
{
    echo "<script>document.getElementById('head').innerHTML += '$css'; </script>";
}

function mainjs()
{
    echo '<script src="public/assets/jquery/jquery-3.6.0.min.js"></script>';
    echo '<script src="public/assets/bootstrap/bootstrap.bundle.min.js"></script>';
}