<?php
session_start();
$server="localhost";$user="root";$pass="";$db="budget_db";
$conn= new mysqli($server,$user,$pass,$db);
if($conn->connect_error)
{
    die("failed".$conn->connect_error);
}
$create_db="CREATE DATABASE IF NOT EXISTS budget_db";
$conn->query($create_db);
$conn->select_db("budget_db");
$create_table="CREATE TABLE IF NOT EXISTS logtb(user VARCHAR(12),pswd VARCHAR(15))";  
//$create_table="CREATE TABLE IF NOT EXISTS logintb(user VARCHAR(6),pswd VARCHAR(10))";
$conn->query($create_table);
if($conn->query($create_table)===TRUE)
{
    echo "table created";
}
else
{
    echo "error".$conn->error;
}
//create table for academic consultants

// FOR Academic consultant
$create_table_AC="CREATE TABLE IF NOT EXISTS ACtb(
ACId VARCHAR(30) PRIMARY KEY,
ACName VARCHAR(35) NOT NULL UNIQUE,
ACBillToPay FLOAT(12,2) NOT NULL UNIQUE,
ACBillNo VARCHAR(35) NOT NULL UNIQUE,
ACDate DATE NOT NULL
)";

$conn->query($create_table_AC);
if($conn->query($create_table_AC)===TRUE)
{
    echo " AC table created";
}
else
{
    echo "error in AC ".$conn->error;
}

//For Project Guide
$create_table_PG="CREATE TABLE IF NOT EXISTS PGtb(
PGId VARCHAR(30) PRIMARY KEY,
PGName VARCHAR(35) NOT NULL UNIQUE,
PGDesc MEDIUMTEXT NOT NULL UNIQUE,
PGBillToPay FLOAT(12,2) NOT NULL UNIQUE,
PGBillNo VARCHAR(35) NOT NULL UNIQUE,
PGDate DATE NOT NULL 
)";
$conn->query($create_table_PG);
if($conn->query($create_table_PG)===TRUE)
{
    echo " PG table created";
}
else
{
    echo "error in PG ".$conn->error;
}

//For Guest Faculty
$create_table_GF="CREATE TABLE IF NOT EXISTS GFtb(
GFId VARCHAR(30) PRIMARY KEY,
GFName VARCHAR(35) NOT NULL UNIQUE,
GFDesc MEDIUMTEXT NOT NULL UNIQUE
GFBillToPay FLOAT(12,2) NOT NULL UNIQUE,
GFBillNo VARCHAR(35) NOT NULL UNIQUE,
GFDate DATE NOT NULL
)";
$conn->query($create_table_GF);
if($conn->query($create_table_GF)===TRUE)
{
    echo "GF table created";
}
else
{
    echo "error in GF".$conn->error;
}

//FOR Junior Assistant
$create_table_JF="CREATE TABLE IF NOT EXISTS JFTb(
JFId VARCHAR(30) PRIMARY KEY,
JAName VARCHAR(35) NOT NULL,
JABillToPay FLOAT(12,2) NOT NULL UNIQUE,
JABillNo VARCHAR(35) NOT NULL UNIQUE,
JADate DATE NOT NULL
)";
$conn->query($create_table_JF);
if($conn->query($create_table_JF)===TRUE)
{
    echo "JF table created";
}
else
{
    echo "error in JF ".$conn->error;
}

//OFS TAble
$create_table_OFS="CREATE TABLE IF NOT EXISTS OFSTb(
OFSId VARCHAR(30) PRIMARY KEY,
OFSName VARCHAR(35),
OFSBillToPay FLOAT(12,2) NOT NULL UNIQUE,
OFSBillNo VARCHAR(35) NOT NULL UNIQUE,
OFSDate DATE NOT NULL
)";
$conn->query($create_table_OFS);
if($conn->query($create_table_OFS)===TRUE)
{
    echo "OFS table created";
}
else
{
    echo "error in OFS ".$conn->error;
}
//LBA
$create_table_LBA="CREATE TABLE IF NOT EXISTS LBATb(
LBAId VARCHAR(30) PRIMARY KEY,
LBAName VARCHAR(35) NOT NULL UNIQUE,
LBABillToPay FLOAT(12,2) NOT NULL UNIQUE,
LBABillNo VARCHAR(35) NOT NULL UNIQUE,
LBADate DATE NOT NULL
)";
$conn->query($create_table_LBA);
if($conn->query($create_table_LBA)===TRUE)
{
    echo "LBA table created";
}
else
{
    echo "LBA error".$conn->error;
}
//CONT
$create_table_Cont="CREATE TABLE IF NOT EXISTS ConTb(
ContID VARCHAR(30) PRIMARY KEY,
ContType VARCHAR(35) NOT NULL UNIQUE,
COTBillToPay FLOAT(12,2) NOT NULL UNIQUE,
COTBillNo VARCHAR(35) NOT NULL UNIQUE,
COTDate DATE NOT NULL
)";
$conn->query($create_table_Cont);
if($conn->query($create_table_Cont)===TRUE)
{
    echo "CONT table created";
}
else
{
    echo "CONT error".$conn->error;
}

//BOK
$create_table_BOK="CREATE TABLE IF NOT EXISTS BokTb(
BokId VARCHAR(30) PRIMARY KEY,
BokType VARCHAR(35) NOT NULL UNIQUE,
BokName VARCHAR(35) NOT NULL UNIQUE,
BokISBN VARCHAR(35) NOT NULL UNIQUE,
BokPub VARCHAR(35) NOT NULL UNIQUE,
BokBillToPayVARCHAR(35) FLOAT(12,2) NOT NULL UNIQUE,
BokBillNo NOT NULL UNIQUE,
BOKDate DATE NOT NULL
)";

$conn->query($create_table_BOK);
if($conn->query($create_table_BOK)===TRUE)
{
    echo "BOK table created";
}
else
{
    echo "BOK error".$conn->error;
}
//LAB
$create_table_LAB="CREATE TABLE IF NOT EXISTS LabTb(
LabId VARCHAR(30) PRIMARY KEY,
LabItemType VARCHAR(35) NOT NULL UNIQUE,
LabCsNm VARCHAR(35) NOT NULL UNIQUE,
LabCsBillToPay FLOAT(12,2) NOT NULL UNIQUE,
LabCsBillNo VARCHAR(35) NOT NULL UNIQUE,
LabDate DATE NOT NULL
)";
$conn->query($create_table_LAB);
if($conn->query($create_table_LAB)===TRUE)
{
    echo "LAB table created";
}
else
{
    echo "LAB error".$conn->error;
} 


?>