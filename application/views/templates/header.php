<html>
<head>
    <title>Assemble | lookalikepc.com</title>
    <link rel="shortcut icon" type="image/png" href="https://i.imgur.com/PdHcSVv.png">
    <link rel="stylesheet"
          type="text/css"
          href="css/style1.css">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    </head>
<body>
     <table id="table1">
         <tr id="header" >
             <td id="logo" rowspan="2"><a href="http://test.supplyspace.net"><img src="https://i.imgur.com/PdHcSVv.png" /></a></td>
            <?php
             session_start();
             if(isset($_SESSION['id'])): ?>
             <td id="logout" colspan="3"><a href="http://test.supplyspace.net/logout">Log Out</a></td>
             <?php else: ?>
            <td id="login" colspan="3"><a href="http://test.supplyspace.net/loginregister">Log In/Register</a></td>
             <?php endif; ?>



         </tr>
         <tr id="navbar">
             <td id="assemble">
                 <a href="home">
                        Assemble
                 </a>
             </td>
             <td id="myBuilds">
                 <a href="mybuilds">
                 My Builds
                 </a>
             </td>
             <td id="popularBuilds">
                 <a href="popularbuilds">
                 Popular Builds
                 </a>
             </td>
         </tr>
     </table>
