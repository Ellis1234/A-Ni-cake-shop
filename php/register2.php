<?php 
$link = mysqli_connect('localhost:3306', 'root', '', 'test');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}else {
    if (isset($_POST['submit'])){
    	if ($_POST['name'] == '')
		{
			echo  "<script>alert('用户名不能为空!');location.href='../html/register1.html'</script>";
		}
		if ($_POST['pw'] == $_POST['repw']&&$_POST['pw']!=''&&$_POST['repw']!=''){
    $query = "insert into user (username,password) values('{$_POST['name']}','{$_POST['pw']}')";
    $result=mysqli_query($link, $query);
    echo"<script>alert('注册成功，正在前往登录页面');location.href='../html/login1.html';</script>";
        }else {
             echo  "<script>alert('两次密码不相同!');location.href='../html/register1.html'</script>";
        }
    }
}
?>