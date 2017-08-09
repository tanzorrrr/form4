<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .container{

            padding:200px;
            margin:0 auto;
            text-align: center;
        }
        .form{
            border: solid 2px #000;
            padding: 100px;
            text-align: center;
            width: 250px;

        }

        input{
            display: block;
        }
                #error{
                    color:red;
                }
            #success{
                color: green;
            }



    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            var submit = $("#submit");
            var name= $("#name");
            var pass1 = $("#pass1");
            var pass2 = $("#pass2");
            submit.click(function(){
                if(name.val() ==""||pass1.val()==""||pass2=="" ){
                    $("#error").text("You not phold gaps");
                }else{

                    $.ajax({
                        url:"action.php",
                        type:"POST",
                        data:{name:name.val(),pass:pass1.val()},
                        success:function (data) {

                            if (data) {
                                $("#success").text("You seccessfooly registred");

                            }
                            if (data == 1) {
                                $("#error").text("errors");
                            }

                        }

                    });

                }

            });

            var submitlog= $("#submitlog");
            submitlog.click(function(){
                var login = $("#login").val();
                var pass= $("#pass").val();
                if(login ==""||pass==""){
                    $("#error").text("gapps is ampty");
                }else{
                  $.ajax({
                      url:"actionlogin.php",
                      type:"POST",
                      data:{name:login,pass:pass},
                      success:function (data) {


                        if(data==1){
                            aler("This login or passwprt not exist");
                        }else{
                            if(data==0){
                                alert("Ypu are seccessfoole afotorization")
                            }

                        }

                      }


                  });
                }


            });
        })
    </script>
</head>
<body>
<div class="container">

    <?php
    if(isset($_SESSION['id'])){
        $id_sesion =$_SESSION['id'];
        echo "Your id number <b>".$id_sesion."</b>";

    }else{
        echo "Your sesion id nt exist";
    }

    ?>
    <div class="form">
        <span id="success"></span>
        <span id="error"></span>
        name:
        <input type="text" id="name">
        pass1
        <input type="password" id="pass1">
        pass2
        <input type="password" id="pass2">
        <input type="submit"id="submit">

    </div>

    <div class="form">
        <span id="success"></span>
        <span id="error"></span>
        name:
        <input type="text" id="login">
        pass1
        <input type="password" id="pass">


        <input type="submit"id="submitlog" value="enter">

    </div>
</div>

</body>
</html>