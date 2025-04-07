<?php include "base.php" ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["answer"]) and isset($_POST["submit"])) {
        $result = mysqli_query($conn, "SELECT * from levels where level='50';");
        if ($result and mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($row["answer"] == md5($_POST["answer"])) {
                $_SESSION['level'] = 99;
                $res = mysqli_query($conn, "SELECT level from users where email='" . $_SESSION['email'] . "';");
                $row1 = mysqli_fetch_array($res, MYSQLI_ASSOC);
                if ($_SESSION['level'] > $row1['level'])
                    mysqli_query($conn, "UPDATE users set level='" . $_SESSION['level'] . "',time=" . date("Y-m-d h:m:s", time()) . " where email='" . $_SESSION['email'] . "';");
                echo "<meta content=\"0;winner.php\" http-equiv=\"refresh\">";
            }
        }
    }
}
?>

<?php if (!isset($_SESSION['level']))
    die("<h1>access denied</h1>");
else if ($_SESSION['level'] < 99)
    die("<h1>access denied</h1>");
else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <title>LEVEL 1 · Sherlocked · ROBOMANIA 2024
        </title> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
        <link rel="stylesheet" href="./stylesheets/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Palette+Mosaic&family=Rock+3D&family=Rubik+80s+Fade&family=Syne+Tactile&display=swap" rel="stylesheet">
    </head>

    <body class="font-monospace text-light-yellow">
        <nav class="navbar navbar-expand-lg py-lg-4 py-3 px-lg-0 px-2">
            <div class="container">
                <a class="navbar-brand text-light-yellow fs-4 rm-logo-font" href="https://www.rcmmmut.in/events">ROBOMANIA'24</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#ead196; font-size:28px;"></i></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav fs-5">
                        <a class="nav-link text-light-yellow me-3" aria-current="page" href="./"><i class="fa-solid fa-house"></i>
                            Home</a>
                        <a class="nav-link text-light-yellow me-3" href="./reluesandregulations_n.php" target="_blank"><i class="fa-solid fa-book"></i> Rules &
                            Regulations</a>
                        <a class="nav-link text-light-yellow me-3" href="./leaderboard.php" target="_blank"><i class="fa-solid fa-list"></i>
                            Leaderboard</a>
                        <a class="nav-link text-light-yellow" href="./logout.php"><i class="fa-solid fa-right-from-bracket"></i>
                            Logout</a>
                    </div>
                </div>
            </div>
        </nav>
        <header class="my-5">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <!-- <h1 class="sub-title-heading display-5">LEVEL 1</h1> -->
                    </div>
                    <div class="col-12 my-5">
                        <img src="https://res.cloudinary.com/dnnge30kx/image/upload/v1712340803/ibbiuzslt7j0ha2s8qpq.jpg" alt="">
                    </div>
                    <div class="col-12 mt-3 mb-5">
                    <a href="./logout.php"><button type="button" class="btn btn-warning btn-lg im-fell border-3 rounded-0 fs-4 fw-bold mt-4 px-4"><b>CONTINUE</b></button></a>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <footer>
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <p class="fs-5">Copyright © 2024 <b>Robotics Club</b>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

    </html>
<?php } ?>