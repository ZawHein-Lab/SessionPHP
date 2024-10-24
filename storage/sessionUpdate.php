<?php 
session_start();

$student_list =[];
if(isset($_SESSION['data'])){
$student_list = $_SESSION['data'];
}

