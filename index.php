<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futuric-Login</title>
    
    <!-- bootstrap 5 import -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- font library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- hier kan je de theme aanpassen van donker naar licht -->
    <link id="mainStyle" rel="stylesheet" href="assets/css/style_dark.css">
</head>

<body>
    <div class="page-content d-flex align-items-center">
        <div class="container d-flex justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5">
                <div class="auth-card">
                    <h5 style="margin-top: 5px" class="auth-title">Login</h5>
                    <hr class="separator">
                    <!-- Login-Form-->
                    <form action="login-check.php" method="POST">
                        <div class="mb-2 mt-5">
                            <input type="email" id="email" name="email" class="form-control auth-input" placeholder="Email adress" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <input type="password" id="password" name="password" class="form-control auth-input" placeholder="password">
                        </div>
                        <button type="submit" id="submit" class="btn auth-btn mt-2 mb-4">Login</button>
                    </form>

                    <p class="text mb-1"> Forgot <a href="" class="text-link">password?</a></p>
                    <p class="text mb-4">no account yet? <a href="register.php" class="text-link">register here</a></p>

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
                document.getElementById("header_logo").src = "assets/img/logo.png";
                document.getElementById("theme_icon").className = "fas fa-moon";
            }
        }
    </script>


    <!-- Bootstrap 5 JS-Bundle CDN import: -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>