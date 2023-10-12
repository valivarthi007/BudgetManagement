<?php
$server="localhost";$user="root";$pass="";
$conn= new mysqli($server,$user,$pass);
if($conn->connect_error)
{
    die("failed".$conn->connect_error);
}
$create_db="CREATE DATABASE IF NOT EXISTS budget_db";
$conn->query($create_db);
$conn->select_db("budget_db");
$create_table="CREATE TABLE IF NOT EXISTS logintb(usrnm char(6) primary key auto_increment,pswd char(10))";
$conn->query($create_table);
if($conn->query($create_table)===TRUE)
{
    echo "table created";
}
else
{
    echo "error".$conn->error;
}
?>