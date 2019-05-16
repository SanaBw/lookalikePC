<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script>
      //register
        function inputData(){
        $(document).ready(function () {
        var firstName=document.getElementById('firstName').value;
        var lastName=document.getElementById('lastName').value;
        var username=document.getElementById('username').value;
        var email=document.getElementById('email').value;
        var password=document.getElementById('password').value;
        var password2=document.getElementById('password2').value;

        if(firstName===""||lastName===""||username===""||email===""||password==="")
            alert ("Please fill out every field !")
        else {
            if(password.length>=6){
                if(password===password2){
                	var data={};
                $("#registerForm").find('input').each(function(){
                    data[$(this).attr('name')]=$(this).val();
                });
                $.ajax({
                  
                    type:"POST",
                    url:"register",
                    data:data,
                    success: function(msg) {
                        alert('Successifully registered !');                  
                    }
                });


                $("#registerForm").find('input').each(function(){ //clear fields
                $(this).val('');
                });
                }
                else
                    alert("Passwords don't match !")

            } else
                alert("Password needs to be at least 6 characters long !")
            }

         });
            }

        //login

          function checkData(){
            $(document).ready(function () {

            var usernameLog=document.getElementById('usernameLog').value;
            var passwordLog=document.getElementById('passwordLog').value;

             $.ajax({
                    type:"POST",
                    url:"login",
                    data:{usernameLog: usernameLog, passwordLog:passwordLog},
                    success: function(msg){
                    window.location = "./mybuilds";
                  }


                });

            $("#loginForm").find('input').each(function(){ //clear fields
            $(this).val('');
            });

        });
        }


        </script>


<table>
    <tr>
        <td>
            <table id="registerForm">
    <tr>
        <td> <label for="firstName">First Name:</label>
        </td>
        <td><input name="firstName" id="firstName" type=text>
        </td>
    </tr>
    <tr>
        <td> <label for="lastName">Last Name:</label>
        </td>
        <td><input name="lastName" id="lastName" type=text>
        </td>
    </tr>
    <tr>
        <td> <label for="username">Username:</label>
        </td>
        <td><input name="username" id="username" type=text>
        </td>
    </tr>
    <tr>
        <td> <label for="email">E-mail:</label>
        </td>
        <td><input name="email" id="email" type=text>
        </td>
    </tr>
    <tr>
        <td><label for="password">Password:</label>
        </td>
        <td><input name="password" id="password" type=password>
        </td>
    </tr>
    <tr>
        <td> <label for="password2">Confirm Password:</label>
        </td>
        <td><input name="password2" id="password2" type=password>
        </td>
    </tr>
    <tr>
        <td colspan="2"><button id="registerbtn" onclick="inputData()">Register</button>
        </td>
    <tr>
</table>
        </td>
        <td>
            <table id="loginForm">
    <tr>
        <td> <label for="usernameLog">Username:</label>
        </td>
        <td><input name="usernameLog" id="usernameLog" type=text>
        </td>
    </tr>
    <tr>
        <td><label for="passwordLog">Password:</label>
        </td>
        <td><input name="passwordLog" id="passwordLog" type=password>
        </td>
    </tr>
    <tr>
        <td colspan="2"><button id="loginbtn" onclick="checkData()">Login</button>
        </td>
    <tr>
        <tr>
            <td id="result"></td>
        </tr>
</table>
        </td>
    </tr>
</table>
