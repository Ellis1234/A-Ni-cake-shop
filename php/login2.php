<?php 
$link = mysqli_connect('localhost:3306', 'root', '', 'test');
if (!$link){
    echo"<script>alert('数据库连接失败！')</script>";
}else {
    if (isset($_POST['submit'])){
        $query = "select * from user where username = '{$_POST['name']}' and password = '{$_POST['pw']}'";
        $result = mysqli_query($link, $query);
		$name = $_POST['name'];
		$pwd = $_POST['pw'];
		 if($name == "" || $pwd == "")  
        {  
            echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  
        }  
        if (mysqli_num_rows($result) > 0 ){
            echo"<script>alert('登录成功，正在前往主页面');location.href='../html/index.html';</script>";
        }
    }
}
?>