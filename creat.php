<?php
$server="localhost";$user="root";$pass="";$db="budget_db";
$conn= new mysqli($server,$user,$pass,$db);
if($conn->connect_error)
{
    die("failed".$conn->connect_error);
}
$create_db="CREATE DATABASE IF NOT EXISTS budget_db";
$conn->query($create_db);
$conn->select_db("budget_db");
//$create_table="CREATE TABLE IF NOT EXISTS log(user VARCHAR(12),pswd VARCHAR(15))";  
$create_table="CREATE TABLE IF NOT EXISTS logintb(user VARCHAR(6) primary key,pswd VARCHAR(10))";
$conn->query($create_table);
if($conn->query($create_table)===TRUE)
{
    echo "login table created";
}
else
{
    echo "error".$conn->error;
}
//Academic Consultant
$create_table_ac="CREATE TABLE IF NOT EXISTS acctb(accid VARCHAR(10) primary key,acName VARCHAR(50),acBillToPay FLOAT(12,2),acBillNo )";
$conn->query($create_table_ac);
if($conn->query($create_table_ac)===TRUE)
{
    echo "AC table created";
}
else
{
    echo "error".$conn->error;
}
?>