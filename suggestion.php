<?php
$name=$_POST['name'];
$suggest=$_POST['suggest'];
$email=$_POST['email'];
$qq=$_POST['qq'];

$dbserver="localhost:3306";
$dbname="linux";
$dbpassword="123456";

$conn=new mysqli($dbserver,$dbname,$dbpassword);
if($conn->connent_error){
    die("连接失败：".$conn->connent_error);
}

$sql="INSERT INTO suggest (name,email,qq)
   VALUES ($name,$emali,$qq)";
if($conn->query($sql)===TURE)
{
    echo "插入成功";
}else{
    echo $sql."<br>".$conn->error;
}
$conn->close();
?>