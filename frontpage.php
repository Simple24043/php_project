<head>
    <style>
        .branch{
            padding: 10px;
        }
    </style>
    <link rel="stylesheet" href="style.css">

    <script>
        function getBranch(branch){
            const iframe = document.getElementById('iframe-box');
            if(branch == 'kapan'){
                iframe.src = 'branches/kapan.php';
            }else if(branch == 'baneshwor'){
                iframe.src = 'branches/baneshwor.php';
            }else if(branch == 'chabahil'){
                iframe.src = 'branches/chabahil.php';
            }
        }
    </script>
</head>
<?php
    session_start();
    if(isset($_SESSION['logged']) && $_SESSION['logged']){
        echo '<h1>Welcome '.$_SESSION['name'].'</h1>';
        echo '<a href="login-register/login.php"><button>logout</button></a>';
    }else{
        echo '<a href="login-register/login.php"><button class="login">Login</button></a>';
    }
?>

<h1 style="text-align: center">Futsal</h1>
<br>
<div class="Branch_button" style="text-align: center">
    <button class="branch" onclick="getBranch('kapan')">Kapan</button>
    <button class="branch" onclick="getBranch('baneshwor')">Baneshwor</button>
    <button class="branch" onclick="getBranch('chabahil')">Chabahil</button>
</div>

<div>
    <iframe id="iframe-box" src="branches/kapan.php" width="100%" height="100%"></iframe>
</div>