<div class="navbar navbar-inverse navbar-fixed-top" id='nav'>
      <div class="container" >
        <div class="navbar-header">
          <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand hidden-sm" href="index.php">JZS</a>
        </div>
        <div class="navbar-collapse collapse" role="navigation">
          <ul class="nav navbar-nav">
            <li class="hidden-sm hidden-md"><a href="cv.php">个人简介</a></li>
            <li><a href="#" >教育背景</a></li>
            <li><a href="#" >项目经验</a></li>
            <li><a href="#" >个人分享</a></li>
            <li><a href="ic.php" >个人案例</a></li>
            <li><a href="example.php" >推荐实例</a></li>
            <li><i class="fa fa-fire job-hot"></i><a href="rp.php">心仪职位</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right hidden-sm">
            <li><a href="#">关于</a></li>
            
            
             <li class="lg"><a href="#" data-toggle="modal" data-target=".login">登录</a></li>
            
            <li class="re"><a href="#" data-toggle="modal" data-target=".resg">注册</a></li>

            <li class="user"> <a href="#"><?php

echo $_SESSION['username']; 
?></a></li>

            <li class="zhuxiao"> <a href="logincheck.php?action=logout">注销</a></li>
          
          </ul> 
        </div>
      </div>  
    </div>

    <!-- 登录 --><form action="logincheck.php" method="post">
    <div class="modal fade login" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close"><span aria-hidden="true" >&times;</span></button>
        <h3 class="modal-title" id="gridSystemModalLabel">Login In</h3>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2"></div>
             <div class="col-md-1">
                 <label class="input__label input__label--nao" for="username">
            <span class="input__label-content1 input__label-content--nao">账号：</span>
          </label>
             </div>
            <div class="col-md-7"><span class="input input--nao">
          <input class="input__field input__field--nao" type="email" id="username" name="username"/>
        
          <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
          </svg>
        </span> </div>
            <div class="col-md-2"> </div>
          </div>
            <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-1"> <label class="input__label input__label--nao" for="passwords" >
            <span class="input__label-content1 input__label-content--nao">密码：</span>
          </label></div>
            <div class="col-md-7"><span class="input input--nao">
          <input class="input__field input__field--nao" type="password" id="passwords" name="passwords"/>
         
          <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
          </svg>
        </span> </div>
            <div class="col-md-2"> </div>
          </div> 
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target=".resg">Registion</button>
        <button  class="btn btn-primary" id="denglu" type="submit" name="submit" value="登陆">Login</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</form>


<!-- 注册 -->
<form action="regcheck.php" method="post" id="signupForm">
 <div class="modal fade resg" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="gridSystemModalLabel">Registion</h3>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8"><span class="input input--nao">
          <input class="input__field input__field--nao" type="email" id="username" name="username" />
          <label class="input__label input__label--nao" for="username">
            <span class="input__label-content input__label-content--nao">用户名：</span>
          </label>
          <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
          </svg>
        </span> 
        </div>
            <div class="col-md-2"> </div>
          </div>
            <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8"><span class="input input--nao">
          <input class="input__field input__field--nao" name="password" type="password" id="password" />
          <label class="input__label input__label--nao" for="password">
            <span class="input__label-content input__label-content--nao">密码：</span>
          </label>
          <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
          </svg>
        </span> </div>
            <div class="col-md-2"> </div>
          </div> 
           <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8"><span class="input input--nao">

          <input class="input__field input__field--nao" name="confirm" type="password" id="confirm"/>
          <label class="input__label input__label--nao" for="confirm">
            <span class="input__label-content input__label-content--nao">重新输入密码：</span>
          </label>
          <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
          </svg>
        </span> </div>
            <div class="col-md-2"> </div>
          </div> 
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target=".login">Login</button>
        <button type="Submit" class="btn btn-primary" name="Submit" value="注册">Resgistion</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</form>


    <script>
   $().ready(function() {
// 在键盘按下并释放及提交后验证提交表单
  $("#signupForm").validate({

    rules:{
        password: {
          required: true,
          minlength: 5
        },
        confirm: {
          required: true,
          minlength: 5,
          equalTo: "#password"
        },
        username: {
          required: true,
          email: true
        }
      },
        messages:{
        password: {
          required: "请输入密码",
          minlength: "密码长度不能小于 5 个字母"
        },
        confirm: {
          required: "请输入密码",
          minlength: "密码长度不能小于 5 个字母",
          equalTo: "两次密码输入不一致"
        },
       username: "请输入一个正确的邮箱"
       
      
    }
  });
});
        </script>
 
<script type="text/javascript">
 $(document).ready(function(){

 if($(".user a").text()!="")
   {   $(".lg").css("display","none")
    $(".re").css("display","none")
    $(".user").css("display","block")
     $(".zhuxiao").css("display","block")
    swal(
  '欢迎进入部落格!',
  '<?php echo $_SESSION['username'] ?>',
  'success'
)
   }else{
     $(".lg").css("display","block")
    $(".re").css("display","block")
    $(".user").css("display","none")
     $(".zhuxiao").css("display","none")

   }
   $(".zhuxiao a").click(function(){
 swal(
  '登出部落格!',
  '你真是才高八度！',
  'success'
  )
   })
   
   
    
  })
</script>
