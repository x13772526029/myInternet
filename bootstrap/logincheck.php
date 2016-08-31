
<?php  
header("Content-Type: text/html;charset=utf-8"); 
      error_reporting(E_ALL ^ E_NOTICE); 

       
       session_start();



    if(isset($_POST["submit"]) && $_POST["submit"] == "登陆")  
    {  
        $user = $_POST["username"];  
        $psw = $_POST["passwords"];  
      
        if($user == "" || $psw == "")  
        {  
            echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  
        }  
        else  
        {  
            @mysql_connect("localhost","root","mysql56");  
            mysql_select_db("sina");  
            mysql_query("set names 'gbk'");  
            $sql = "select username,password from user where username = '$_POST[username]' and password = '$_POST[passwords]'";  
            $result = mysql_query($sql);  
            $num = mysql_num_rows($result);  
            if($num)  
            {  
                $row = mysql_fetch_array($result);  //将数据以索引方式储存在数组中  
                 $_SESSION['username'] = $user;
                echo "<script>location=\"index.php\"</script>";

                  
            }  
            else  
            {  
                echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>location=\"index.php\"</script>";  
    }  
    //注销登录
if($_GET['action'] == "logout"){
    unset($_SESSION['id']);
    unset($_SESSION['username']);
   
    exit;
}
  header("Content-Type: text/html; charset=utf-8")
?>  


