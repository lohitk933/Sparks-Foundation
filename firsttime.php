<?php

//Setting up connection
$servername="localhost";
$username ="root";
$password = "";

$conn= mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Sorry we failed to connect:". mysqli_connect_error());
}else{
    echo "Conection was esatablished succesfully. <br>";
}

//Creating database sparksbank
$sql= "CREATE DATABASE SparksBank";

$result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry we failed to create database. <br>";
}else{
    echo "DATABASE Created Successfully.<br>";
}

//Creating table customers
 $sql = "CREATE TABLE `sparksbank`.`customers` ( `Cust_ID` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(11) NOT NULL , `Email` VARCHAR(20) NOT NULL , `Amount` FLOAT(30) NOT NULL , PRIMARY KEY (`Cust_ID`)) ";

 $result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry we failed to create table.<br>";
}else{
    echo "Customer Table Created Successfully.<br>";
}

//Adding 10 dummey data into table customers
$sql ="INSERT INTO `sparksbank`.`customers` (`Cust_ID`, `Name`, `Email`, `Amount`) VALUES ('1', 'Lohit k', 'lohit@outlook.com', '50000.00'), ('2', 'Acchu', 'acchu@gmail.com', '25000.00'), ('3', 'Nikhil', 'nikhil@yahoo.com', '15000.00'), ('4', 'Shashank BS', 'shashank@gmail.com', '22000.00'), ('5', 'Shashidhar', 'Shashidhar@gmail.com', '25000.00'), ('6', 'Sid', 'sid@abc.com', '20000.00'), ('7', 'Nagu', 'nagu@ind.com', '22000.00'), ('8', 'rahul', 'rahul@xyz.com', '20000.00'), ('9', 'Abhi', 'abhi@gmail.com', '21000.00'), ('10', 'Kumar', 'kuamr@yahoo.com', '30000.00')";

$result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry we failed to add entries to table. <br>";
}else{
    echo "Entries added to table Successfully.<br>";
}

//Creating transaction table customers
$sql = "CREATE TABLE `sparksbank`.`transaction` ( `Tran_ID` INT NOT NULL AUTO_INCREMENT , `From` VARCHAR(11) NOT NULL , `To` VARCHAR(11) NOT NULL , `Amount` DECIMAL NOT NULL , PRIMARY KEY (`Tran_ID`))";

$result = mysqli_query($conn,$sql);

if(!$result){
   echo "Sorry we failed to create table.<br>";
}else{
   echo "Transaction Table Created Successfully.<br>";
}

?>