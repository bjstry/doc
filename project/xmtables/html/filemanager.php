
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
    <head>    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />	
	<title>...:::: PHP File Manager</title>
    <script language="Javascript" type="text/javascript">
    <!--
        function Is(){
            this.appname = navigator.appName;
            this.appversion = navigator.appVersion;
            this.platform = navigator.platform;
            this.useragent = navigator.userAgent.toLowerCase();
            this.ie = ( this.appname == 'Microsoft Internet Explorer' );
            if (( this.useragent.indexOf( 'mac' ) != -1 ) || ( this.platform.indexOf( 'mac' ) != -1 )){
                this.sisop = 'mac';
            } else if (( this.useragent.indexOf( 'windows' ) != -1 ) || ( this.platform.indexOf( 'win32' ) != -1 )){
                this.sisop = 'windows';
            } else if (( this.useragent.indexOf( 'inux' ) != -1 ) || ( this.platform.indexOf( 'linux' ) != -1 )){
                this.sisop = 'linux';
            }
        }
        var is = new Is();
        function enterSubmit(keypressEvent,submitFunc){
            var kCode = (is.ie) ? keypressEvent.keyCode : keypressEvent.which
            if( kCode == 13) eval(submitFunc);
        }
        function getCookieVal (offset) {
            var endstr = document.cookie.indexOf (';', offset);
            if (endstr == -1) endstr = document.cookie.length;
            return unescape(document.cookie.substring(offset, endstr));
        }
        function getCookie (name) {
            var arg = name + '=';
            var alen = arg.length;
            var clen = document.cookie.length;
            var i = 0;
            while (i < clen) {
                var j = i + alen;
                if (document.cookie.substring(i, j) == arg) return getCookieVal (j);
                i = document.cookie.indexOf(' ', i) + 1;
                if (i == 0) break;
            }
            return null;
        }
        function setCookie (name, value, expires) {
            var argv = setCookie.arguments;
            var argc = setCookie.arguments.length;
            var expires = (argc > 2) ? argv[2] : null;
            var path = (argc > 3) ? argv[3] : null;
            var domain = (argc > 4) ? argv[4] : null;
            var secure = (argc > 5) ? argv[5] : false;
            document.cookie = name + '=' + escape (value) +
            ((expires == null) ? '' : ('; expires=' + expires.toGMTString())) +
            ((path == null) ? '' : ('; path=' + path)) +
            ((domain == null) ? '' : ('; domain=' + domain)) +
            ((secure == true) ? '; secure' : '');
        }
        function delCookie (name) {
            var exp = new Date();
            exp.setTime (exp.getTime() - 1);
            var cval = getCookie (name);
            document.cookie = name + '=' + cval + '; expires=' + exp.toGMTString();
        }
        var frameWidth, frameHeight;
        function getFrameSize(){
            if (self.innerWidth){
                frameWidth = self.innerWidth;
                frameHeight = self.innerHeight;
            }else if (document.documentElement && document.documentElement.clientWidth){
                frameWidth = document.documentElement.clientWidth;
                frameHeight = document.documentElement.clientHeight;
            }else if (document.body){
                frameWidth = document.body.clientWidth;
                frameHeight = document.body.clientHeight;
            }else return false;
            return true;
        }
        getFrameSize();
    //-->
    </script>
    
    </head>
    <script language="Javascript" type="text/javascript">
    <!--
        var W = screen.width;
        var H = screen.height;
        var FONTSIZE = 0;
        switch (W){
            case 640:
                FONTSIZE = 8;
            break;
            case 800:
                FONTSIZE = 10;
            break;
            case 1024:
                FONTSIZE = 12;
            break;
            default:
                FONTSIZE = 14;
            break;
        }
     document.writeln(' <style type="text/css"> body { font-family : Arial; font-size: '+FONTSIZE+'px; font-weight : normal; color: #000000; background-color: #eeeeee; } table { font-family : Arial; font-size: '+FONTSIZE+'px; font-weight : normal; color: #000000; cursor: default; } input { font-family : Arial; font-size: '+FONTSIZE+'px; font-weight : normal; color: #000000; } textarea { font-family : Courier; font-size: 12px; font-weight : normal; color: #000000; } a { font-family : Arial; font-size : '+FONTSIZE+'px; font-weight : bold; text-decoration: none; color: #000000; } a:link { color: #000000; } a:visited { color: #000000; } a:hover { color: #0a77f7; } a:active { color: #000000; } tr.entryUnselected { background-color: #ffffff; } tr.entryUnselected:hover { background-color: #c0ebfd; } tr.entrySelected { background-color: #a7d2e4; } </style> '); 
    //-->
    </script>
    <body onLoad="if(parent.location.href != self.location.href){ parent.location.href = self.location.href } return true;">

        <table border=0 cellspacing=0 cellpadding=5>
            <form name="login_form" action="filemanager.php" method="post">
            <tr>
            <td><b>PHP File Manager</b>
            </tr>
            <tr>
            <td align=left><font size=4>Enter the password.</font>
            </tr>
            <tr>
            <td><input name=pass type=password size=10> <input type=submit value="Send">
            </tr>
        
            </form>
        </table>
             <script language="Javascript" type="text/javascript">
             <!--
             document.login_form.pass.focus();
             //-->
             </script>
        </body>
</html>
