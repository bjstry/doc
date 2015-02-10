<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <title>欢迎使用艮泰电子售后平台</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="/service__PUBLIC__/login/favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="/service__PUBLIC__/login/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="/service__PUBLIC__/login/css/style2.css" />
		<link rel="stylesheet" type="text/css" href="/service__PUBLIC__/login/css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <div class="codrops-top">
                <a href="">
                </a>
                <span class="right">
                </span>
                <div class="clr"></div>
            </div>
            <header>
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="__URL__/logincheck" autocomplete="on" method='post'> 
                                <h1>登 录</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" >用户名：</label>
                                    <input id="username" name="username" required="required" type="text" placeholder="请输入用户名"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> 密&nbsp;&nbsp;&nbsp;&nbsp;码： </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="请输入您的密码" /> 
                                </p>
                                <p class="keeplogin"> 
									<!--<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">自动登录</label>
				-->				</p>
                                <p class="login button"> 
                                    <input type="submit" value="登录" /> 
								</p>
                                <p class="change_link">
									还没有账号？
									<a href="#toregister" class="to_register">注册</a><a href = "http://www.shgentai.com">返回艮泰</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="__URL__/userAdd" autocomplete="on" method='post'> 
                                <h1> 注 册 </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">用户名：</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="请输入用户名" />
                                </p>
                                <!--<p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>>
				<p>
					<label for "depart">工作部门：</label>
					<select id = "depart" name = "department" style = "height:25px;width:100px;">
                                        	<option value ="技术部">技术部</option>
                                        	<option value ="行政部">行政部</option>
                                        	<option value ="业务部">业务部</option>
                                        	<option value ="财务部">财务部</option>
	                                </select><br/>
				</p>-->
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">密&nbsp;&nbsp;&nbsp;&nbsp;码：</label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="请输入密码"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">密码确认:</label>
                                    <input id="passwordsignup_confirm" name="repassword" required="required" type="password" placeholder="请再一次输入密码"/>
                                </p>
				<p>
					<label for "depart">工作部门：</label>
					<select id = "depart" name = "department" style = "height:25px;width:100px;">
                                        	<option value ="技术部">技术部</option>
                                        	<option value ="行政部">行政部</option>
                                        	<option value ="业务部">业务部</option>
                                        	<option value ="财务部">财务部</option>
	                                </select><br/>
				</p>
                                <p class="signin button"> 
									<input type="submit" name='submite' value="注 册"/> 
								</p>
                                <p class="change_link">  
									已经有账户了 ?
									<a href="#tologin" class="to_register">直接去登录 </a><a href = "http://www.shgentai.com">返回艮泰</a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>