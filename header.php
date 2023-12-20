<head>
<link rel="stylesheet" href="header.css">
</head>
<body onresize="s()">
    

<div class="header-div">
    <div class="logo">
    <!-- <a href="index.php"><img src="img/logo.jpeg" alt=""></a> -->
    </div>
    <input type="button" value="nav" class="btn" onclick="btn()">
    <div class="header">
        <ul class="header-ul">
             <li><a href="about.php">about</a></li>
             <li><a href="index.php">home</a></li>
             <li><a href="login.php">login</a></li>
             <li><a href="sign.php">sign-up</a></li>
    
        </ul>
    </div>
</div>




 <!--responsiv-->
 <script>
        // alert("WELLCOME ")
        let a=1

        function s()
        {
            let p=screen.width;
            console.log(p)
            if(p>600)
            {
                document.getElementsByClassName('header').style="visibility:visible;"
            }
            else{
                document.getElementsByClassName('header').style="visibility:hidden;"
            }
            
        }
        function btn()
        {
            if(a==1){
                document.getElementsByClassName('header').style="visibility:visible;"
                a++
             }  
             else{
                document.getElementsByClassName('header').style="visibility:hidden;"
                a--
             }
        }
    </script>
    </body>