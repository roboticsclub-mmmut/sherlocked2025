<?php include "base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login · Sherlocked · ROBOMANIA 2024</title>
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
                </div>
            </div>
        </div>
    </nav>
    <header class="my-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12 mb-5">
                    <h1 class="sub-title-heading">Hello Again!</h1>
                    <h3 class="sub-title-heading">Welcome back you've been missed! skdfs</h3>
                </div>
                <div class="col-4 mb-5">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <input class="form-control form-control-lg rounded-0 mb-3" type="text" name="username" id="username" placeholder="Enter Team Code" aria-label=".form-control-lg example">
                        <input class="form-control form-control-lg rounded-0 mb-5" type="password" name="password" id="password" placeholder="Password" aria-label=".form-control-lg example">
                        <div class="d-grid gap-2">
                            <button class="btn btn-warning btn-lg rounded-0 fw-bold im-fell" id="myStartButto" type="submit" onclick="chck()">LOGIN</button>
                        </div>
                        <p class="my-4">Before Start: <span id="hours"></span> Hours : <span id="minutes"></span> Mins : <span id="seconds"></span> Secs</p>
                        </form>
                </div>
                <div class="col-12">
                    <h5 id="info-msg"></h5>
                </div>
            </div>
        </div>
    </header>
    <script>
        // Set the date we're counting down to
        const countDownDate = new Date("Apr 06, 2024 12:00:00").getTime();

        // Function to update the countdown timer
        function updateCountdown() {
            const now = new Date().getTime();
            const distance = countDownDate - now;

            if (distance < 0) {
                // Countdown is over
                clearInterval(x); // Stop the interval
                // Display a message or perform other actions as needed
                console.log("Countdown is over!");
            } else {
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Ensure two-digit format for hours, minutes, and seconds
                const formattedHours = hours.toString().padStart(2, "0");
                const formattedMinutes = minutes.toString().padStart(2, "0");
                const formattedSeconds = seconds.toString().padStart(2, "0");

                document.getElementById("hours").innerHTML = formattedHours;
                document.getElementById("minutes").innerHTML = formattedMinutes;
                document.getElementById("seconds").innerHTML = formattedSeconds;

                // Enable/disable the button based on the condition
                const button = document.getElementById("myStartButton");
                button.disabled = !(hours === 0 && minutes === 0 && seconds === 0);
            }
        }

        // Start the countdown interval
        const x = setInterval(updateCountdown, 1000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["username"]) and !empty($_POST["password"])) {
            $team_code = $_POST["username"];
            $password = md5($_POST["password"]);
            $result = mysqli_query($conn, "SELECT * FROM `users` WHERE team_code='" . $team_code . "' AND hash='" . $password . "';");
            if ($result and mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $_SESSION['LOGGEDIN'] = 1;
                $_SESSION['team_code'] = $team_code;
                $_SESSION['level'] = $row['level'];
                // $_SESSION['nr'] = $row['notification'];
                echo '<script>document.getElementById("info-msg").innerHTML = "You have successfully logged in. Please wait, you will be redirected automatically..."</script>';
                echo "<meta content=\"2;level" . $_SESSION['level'] . ".php\" http-equiv=\"refresh\">";
            } else echo '<script>document.getElementById("info-msg").innerHTML = "Login failed. Please check your e-mail and password..."</script>';
        }
    }
    ?>


</body>

</html>