<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/3299f686b9.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&family=Indie+Flower&family=M+PLUS+Code+Latin&family=Open+Sans:wght@300&family=Zen+Kurenaido&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Add Data</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #4d4d4d;">
        <div class="container-fluid">
            <span style="font-size: 40px; color: white;">
                <i class="fas fa-store"></i>
            </span>
            <a class="navbar-brand text-light" href="../index.php">&nbsp;<span style="color: #E9EFC0;">Tex</span><span style="color: #4E944F;">&nbsp;Management</span> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item" style="background-color: #111111;">
                        <a class="nav-link text-light" href="./add.php">Add Data</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link text-light" href="./add.php">Generate View</a>
                    </li>



                </ul>
                <form class="d-flex">
                    <a href="./profile.php" class="btn btn-light mx-2" type="submit">Profile</a>
                    <a href="../logout.php" class="btn btn-danger text-light" type="submit">Logout</a>
                </form>
            </div>
        </div>
    </nav>

    <div class="container text-center d-float px-5 mb-3">
        <h2 class="mb-3 mt-2">Insert Data</h2>
        <hr><br>

        <form action="op_insert.php" method="post">

            <div class="row">
                <div class="col">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"></span>
                        <input type="text" class="form-control" placeholder="Job No." aria-describedby="addon-wrapping" style="color: blue; font-weight: bold;" name="jobno">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"></span>
                        <input type="text" class="form-control" placeholder="Team" aria-describedby="addon-wrapping" style="color: blue; font-weight: bold;" name="jobno">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input class="form-control my-3" type="text" placeholder="Buyer/Brand" name="buyer">
                </div>
                <div class="col">
                    <input class="form-control my-3" type="text" placeholder="Type" name="type">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input class="form-control my-3" type="text" placeholder="Count" name="count">
                </div>
                <div class="col">
                    <input class="form-control my-3" type="text" placeholder="Brand" name="brand">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input class="form-control my-3" type="text" placeholder="Lot" name="lot">
                </div>
                <div class="col">
                    <input class="form-control my-3" type="text" placeholder="Type" name="type">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input class="form-control my-3" type="text" placeholder="Color Catagory" name="color">
                </div>
                <div class="col">
                    <input class="form-control my-3" type="text" placeholder="GSM" name="gsm">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input class="form-control my-3" type="text" placeholder="SL(MM)" name="sl">
                </div>
                <div class="col">
                    <input class="form-control my-3" type="text" placeholder="M/C Duta" name="mc">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input class="form-control my-3" type="text" placeholder="F/Dia" name="fdia">
                </div>
                <div class="col">
                    <input class="form-control my-3" type="text" placeholder="Grey(kg)" name="gkg">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input class="form-control my-3" type="text" placeholder="Finish(kg)" name="finish">
                </div>
                <div class="col">
                    <input class="form-control my-3" type="text" placeholder="Process Type" name="ptype">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input class="form-control my-3" type="text" placeholder="Start" name="start">
                </div>
                <div class="col">
                    <input class="form-control my-3" type="text" placeholder="End" name="end">
                </div>
                <div class="col">
                    <input class="form-control my-3" type="text" placeholder="W.Days" name="days">
                </div>
            </div>




            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button name="submit" type="submit" class="btn btn-dark" style="font-size : 20px;">Submit</button>
            </div>

        </form>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>