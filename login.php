<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="login_style.css">
</head>
<body>
    <div class="entete">
        <label for="entete"> النظام الإلكتروني لتسيير الزوايا</label>
    </div>
    <div class="container_left">
        <h2>حساب الدخول</h2>
        <div class="form_container">
            <form action="verification.php" method="POST">
                <div class="input_container">
                    <input type="text" id="user" name="username" size="40px" placeholder="إسم المستخدم">
                    <label for="user">المستخدم:</label>
                </div>
                <div class="input_container">
                    <input type="text" id="mp" name="password" size="40px" placeholder="كلمة المرور">
                    <label for="mp" >كلمة المرور:</label>                   
                </div>
                <button type="submit" id='submit'  >الدخول</button>
                <?php
                 /*  session_start();
                  if($_SESSION['username'] !== ""){
                    // echo "Favorite color is " . $_SESSION["username"] . ".<br>";
                    header("location:principale.php");
                  }
                  else
                  { */
                if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
           // }
                ?>
            </form>
        </div>
    </div>
</body>
</html>