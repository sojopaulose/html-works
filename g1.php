<?php
$cc=mysqli_connect("localhost","root","");
if($cc->connect_error)
echo "connection unsuccessful";
else{
$d="CREATE DATABASE purchase";
if($cc->query($d)==true){
$cc=mysqli_connect("localhost","root","","purchase");
}
$s="CREATE TABLE bills(itemcode int PRIMARY KEY,itemname VARCHAR(25) NOT NULL,itype VARCHAR(25),available quantity VARCHAR(25),price DECIMAL(5,2))";
if($cc->query($s))
    {
    	echo "table created";
    }
}
$cc->close();

?>