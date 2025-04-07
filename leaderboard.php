<?php
include "base.php";
$_SESSION["result"] = mysqli_query($conn, "SELECT * FROM users ORDER BY level DESC,time;");
if ($_SESSION["result"]) {
    $r = mysqli_num_rows($_SESSION["result"]);
} else die("Some error occured, please try later");
$t = 1;
echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard · Sherlocked · ROBOMANIA 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="./stylesheets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Palette+Mosaic&family=Rock+3D&family=Rubik+80s+Fade&family=Syne+Tactile&display=swap"
        rel="stylesheet">
</head>

<body class="font-monospace text-light-yellow">
<nav class="navbar navbar-expand-lg py-lg-4 py-3 px-lg-0 px-2">
        <div class="container">
            <a class="navbar-brand text-light-yellow fs-4 rm-logo-font" href="https://www.rcmmmut.in/events">ROBOMANIA\'24</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#ead196; font-size:28px;"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav fs-5">
                    <a class="nav-link text-light-yellow me-3" aria-current="page" href="./"><i class="fa-solid fa-house"></i>
                        Home</a>
                    <a class="nav-link text-light-yellow me-3" href="./reluesandregulations_n.php" target="_blank"><i class="fa-solid fa-book"></i> Rules &
                        Regulations</a>
                    <a class="nav-link text-light-yellow me-3" href="./leaderboard.php"><i class="fa-solid fa-list"></i>
                        Leaderboard</a>
                </div>
            </div>
        </div>
    </nav>
    <header class="my-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="sub-title-heading display-5">LEADERBOARD</h1>
                </div>
                <div class="col-12 my-3 table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="fs-4">
                            <tr>
                                <th scope="col">POSITION</th>
                                <th scope="col">TEAM DETAILS</th>
                                <th scope="col">COLLEGE</th>
                                <th scope="col">LEVEL</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider fs-5">';
                            for($i=0;$i<100;$i++) if($r) {
                                $row=mysqli_fetch_array($_SESSION["result"],MYSQLI_ASSOC); echo'<tr>
                                <td>'.$t.'</td>
                                <td>
                                    <h6 class="fs-4">Team Code: '.$row["team_code"].'</h6>
                                    <h6>Team Name: '.$row["team_name"].'</h6>
                                </td>
                                <td>'.$row["college"].'</td>
                                <td>'.$row["level"].'</td>
                                </tr>';
                                $r--;
                                $t++;
                                }
                                echo '
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>';
