<!DOCTYPE html>
<html lang="pt - br">
<head>
    <title>Liffe Coffee</title>
    <link rel="stylesheet" href="index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- NAVBAR CREATION -->
   <header class="header">
    <nav class="navbar">
        <a href="../coffee website/index.html">Home</a>
        <a href="../coffee website/index.html">Portfolio</a>
          <a href="../coffee website/index.html">About</a>
          <a href="../coffee website/index.html">Contact</a>
          <a href="../coffee website/index.html">Help</a>
    </nav>
    <form action="" class="search-bar">
       <input type="text" placeholder="Search...">
       <button><i class='bx bx-search'></i></button>
    </form>
   </header>

    <!-- LOGIN -->

    <div class="background"></div>
    <div class="container">
        <div class="item">
            <h2 class="logo"><i class='bx bxl-xing'></i>Liffe Coffee</h2>
            <div class="text-item">
                <h2>Bem vindo <br><span>
                    Ao seu Canal
                </span></h2>
                <p>Lhe apresento um exelente café!</p>
                <div class="social-icon">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div>
        </div>
        <div class="login-section">
            <div class="form-box login">
                <form  action="" method="POST">
                    <h2>Entre</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" required>
                        <label >Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">Lembre de mim</label>
                        <a href="#">Esqueceu a senha?</a>
                    </div>
                    <button class="btn">Login</button>
                    <div class="create-account">
                        <p>Criar uma nova conta? <a href="#" class="register-link">Registre-Se!</a></p>
                    </div>
                </form>
            </div>
            <div class="form-box register">
                <form action="">

                    <h2>Registre-Se!</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" required>
                        <label >Seu nome</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" required>
                        <label >Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" required>
                        <label>Senha</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" required>
                        <label>Confirma Senha</label>   
                    </div>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">Eu concordo com a afirmação</label>
                    </div>
                    <button class="btn">Sign In</button>
                    <div class="create-account">
                        <p>Já possui uma conta? <a href="#" class="login-link">Entre</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <!-- SIGN UP FORM CREATION -->

    <script src="index.js"></script>
</body>

</html>