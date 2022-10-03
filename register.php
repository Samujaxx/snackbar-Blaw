<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- bootstrap 5 import -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- font library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- hier kan je de theme aanpassen van donker naar licht -->
    <link id="mainStyle" rel="stylesheet" href="assets/css/style_dark.css">

</head>


<?php


?>

<body>

    <div class="page-content d-flex align-items-center">
        <div class="container d-flex justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5">
                <div class="auth-card">
                    <div class="logo-area">
                        <!-- hier kan je de lichte of donkere thema voor de logo kiezen -->
                        <img id="header_logo" class="logo" src="assets/img/logo_dark.png" />
                    </div>
                    <h5 class="auth-title">Register</h5>
                    <hr class="separator">

                    <!-- Signup-Form -->
                    <form action="register-check.php" method="POST">
                        <div class="mb-2">
                            <input type="text" name="name" id="name" class="form-control auth-input" placeholder="name">
                        </div>
                        <div class="mb-2">
                            <input type="text" name="surname" id="surname" class="form-control auth-input" placeholder="surname">
                        </div>
                        <div class="mb-4"> 
                            <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" class="form-control auth-input" placeholder="phone">
                        </div>

                        <div class="mb-2 mt-5">
                            <input type="email" name="email" id="email" class="form-control auth-input" placeholder="email adress">
                        </div>
                        <div class="mb-2">
                            <input type="password" name="password" id="password" class="form-control auth-input" placeholder="password">
                        </div>
                        <div class="mb-2">
                            <input type="password" name="password2" id="password2" class="form-control auth-input" placeholder="repeat password">
                        </div>
                        
                        <button type="submit" name="submit" id="submit" class="btn auth-btn mt-2 mb-4">register</button>
                    </form>
                    <p class="text mb-4">already have an account? <a href="index.php" class="text-link">Login</a></p>
                </div>
            </div>
        </div>
    </div>


    <button id="theme_button" class="btn btn-theme" onclick="onThemeChange()">
        <i id="theme_icon" class="fas fa-moon"></i>
    </button>


    <script type="text/javascript">
        function onThemeChange() {
            let cssStyleSheet = document.getElementById("mainStyle");
            let path = (cssStyleSheet.href).substring((cssStyleSheet.href).length-9, (cssStyleSheet.href).length);
            if(path === "style.css") {
                cssStyleSheet.href = "assets/css/style_dark.css";
                document.getElementById("header_logo").src = "assets/img/logo_dark.png";
                document.getElementById("theme_icon").className = "fas fa-sun";
            } else {
                cssStyleSheet.href = "assets/css/style.css";
                document.getElementById("he ogo").src = "assets/img/logo.png";
                document.getElementById("th on").className = "fas fa-moon";
            }
        }
    </script>


    <!-- Bootstrap 5 JS-Bundle CDN import: -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>