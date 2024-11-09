<?php
if(isset($_GET['modifier'])){
    //  TODO
    header("Location: ./modifier.php?inputphoto=".$_GET['inputphoto']."&inputdescription=".$_GET['inputdescription']);
}
else if(isset($_GET['supprimer'])){
    //  TODO
    header("Location: ./supprimer.php?inputphoto=".$_GET['inputphoto']);
}else{
    header("Location: ../pages/contact.php");
}
?>