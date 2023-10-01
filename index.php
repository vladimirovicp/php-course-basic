<?php
    include 'config.php';
    $page = 'index';
    //$page = 'delivery';
    //$page = 'contacts';
    //$page = 'login';
    //$page = 'basket';


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->

    <title>PHP часть 1. Основы PHP</title>

    <style>
        .card-deck {
            margin-top: 20px
        }

        .card-body img {
            display: block;
            margin: 0 auto 15px;

        }

        .card-footer {
            background: transparent;
            border: 0;
        }

        .form-signin {
            width: 100%;
            max-width: 420px;
            padding: 15px;
            margin: auto;
        }
    </style>
</head>
<body<?php echo date('h') % 2 === 0 ? ' style="background-color: #aad9ab;"' : ''; ?>>


<?php include 'inc/nav.inc.php'; ?>

<?php
    switch ($page) {
        case 'delivery' :
            include 'page/delivery.inc.php';
            break;
        case 'contacts' :
            include 'page/contacts.inc.php';
            break;
        case 'login':
            include 'page/login.inc.php';
            break;
        case 'basket':
            include 'page/basket.inc.php';
            break;
        default :
            include 'page/main.inc.php';
            break;
    }
?>


<?php include 'inc/footer.inc.php'; ?>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
