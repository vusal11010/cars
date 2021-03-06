<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/main.js"></script>
    <style>
        .log-out {
            color: #ea1b2d;
        }
        .right-top a {
            margin-right: 8px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <a href="./index.php">
                <img src="./images/cars-logo.png" alt="Cars Logo">
            </a>
        </div>

        <nav>
            <ul>
                <li>
                    <a href="./index.php?page=home">Home</a>
                </li>
                <li>
                    <a href="./index.php?page=about">About</a>
                </li>
                <li>
                    <a href="./index.php?page=contact">Contact</a>
                </li>
            </ul>
        </nav>

        <div class="right-top">
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <?php echo '<a href="index.php?page=profile" style="color: #ea1b2d; font-weight: bold; text-transform: capitalize;">' . $_SESSION["username"] . '</a>'; ?>
                <a class="log-out" href="index.php?page=log-out"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
            <?php else: ?>
            <div class="registration">
                <a href="./index.php?page=log-in">Log In</a>
                <a href="./index.php?page=sign-up">Sign Up</a>
            </div>
            <?php endif; ?>
        </div>
    </header>