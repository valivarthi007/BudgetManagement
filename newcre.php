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

$errors = [];

$create_table_LK="CREATE TABLE IF NOT EXISTS logtb(
    user VARCHAR(12) PRIMARY KEY,
    pswd VARCHAR(15) NOT NULL UNIQUE
)";

$create_table_AC="CREATE TABLE IF NOT EXISTS ACtb(
ACId VARCHAR(30) PRIMARY KEY,
ACName VARCHAR(35) NOT NULL UNIQUE,
ACBillToPay FLOAT(12,2) NOT NULL UNIQUE,
ACBillNo VARCHAR(35) NOT NULL UNIQUE,
ACDate DATE NOT NULL
)";


//For Project Guide
$create_table_PG="CREATE TABLE IF NOT EXISTS PGtb(
PGId VARCHAR(30) PRIMARY KEY,
PGName VARCHAR(35) NOT NULL UNIQUE,
PGDesc MEDIUMTEXT NOT NULL UNIQUE,
PGBillToPay FLOAT(12,2) NOT NULL UNIQUE,
PGBillNo VARCHAR(35) NOT NULL UNIQUE,
PGDate DATE NOT NULL 
)";

//For Guest Faculty
$create_table_GF="CREATE TABLE IF NOT EXISTS GFtb(
GFId VARCHAR(30) PRIMARY KEY,
GFName VARCHAR(35) NOT NULL UNIQUE,
GFDesc MEDIUMTEXT NOT NULL UNIQUE,
GFBillToPay FLOAT(12,2) NOT NULL UNIQUE,
GFBillNo VARCHAR(35) NOT NULL UNIQUE,
GFDate DATE NOT NULL
)";

//FOR Junior Assistant
$create_table_JF="CREATE TABLE IF NOT EXISTS JFTb(
JFId VARCHAR(30) PRIMARY KEY,
JAName VARCHAR(35) NOT NULL,
JABillToPay FLOAT(12,2) NOT NULL UNIQUE,
JABillNo VARCHAR(35) NOT NULL UNIQUE,
JADate DATE NOT NULL
)";

//OFS TAble
$create_table_OFS="CREATE TABLE IF NOT EXISTS OFSTb(
OFSId VARCHAR(30) PRIMARY KEY,
OFSName VARCHAR(35),
OFSBillToPay FLOAT(12,2) NOT NULL UNIQUE,
OFSBillNo VARCHAR(35) NOT NULL UNIQUE,
OFSDate DATE NOT NULL
)";
//LBA
$create_table_LBA="CREATE TABLE IF NOT EXISTS LBATb(
LBAId VARCHAR(30) PRIMARY KEY,
LBAName VARCHAR(35) NOT NULL UNIQUE,
LBABillToPay FLOAT(12,2) NOT NULL UNIQUE,
LBABillNo VARCHAR(35) NOT NULL UNIQUE,
LBADate DATE NOT NULL
)";
//CONT
$create_table_Cont="CREATE TABLE IF NOT EXISTS ConTb(
ContID VARCHAR(30) PRIMARY KEY,
ContType VARCHAR(35) NOT NULL UNIQUE,
COTBillToPay FLOAT(12,2) NOT NULL UNIQUE,
COTBillNo VARCHAR(35) NOT NULL UNIQUE,
COTDate DATE NOT NULL
)";

//BOK
$create_table_BOK="CREATE TABLE IF NOT EXISTS BokTb(
BokId VARCHAR(30) PRIMARY KEY,
BokType VARCHAR(35) NOT NULL UNIQUE,
BokName VARCHAR(35) NOT NULL UNIQUE,
BokISBN VARCHAR(35) NOT NULL UNIQUE,
BokPub VARCHAR(35) NOT NULL UNIQUE,
BokBillToPay FLOAT(12,2) NOT NULL UNIQUE,
BokBillNo VARCHAR(35) NOT NULL UNIQUE,
BOKDate DATE NOT NULL
)";

//LAB
$create_table_LAB="CREATE TABLE IF NOT EXISTS LabTb(
LabId VARCHAR(30) PRIMARY KEY,
LabItemType VARCHAR(35) NOT NULL UNIQUE,
LabCsNm VARCHAR(35) NOT NULL UNIQUE,
LabCsBillToPay FLOAT(12,2) NOT NULL UNIQUE,
LabCsBillNo VARCHAR(35) NOT NULL UNIQUE,
LabDate DATE NOT NULL
)";

$tables = [$create_table_LK,$create_table_AC,$create_table_PG,$create_table_GF,$create_table_JF,$create_table_OFS,$create_table_LBA,$create_table_Cont,$create_table_BOK,$create_table_LAB];

foreach($tables as $k => $sql){
    $query = $conn->query($sql);

    if(!$query)
       $errors[] = "Table $k : Creation failed ($conn->error)";
    else
       $errors[] = "Table $k : Creation done";
}


foreach($errors as $msg) {
   echo "$msg <br>";
}

?>
