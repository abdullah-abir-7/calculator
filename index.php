<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Hello php !</title>
</head>

<body>
    <?php
     $result ="";
    if (isset($_POST['submit'])) {
        $first = $_POST['first'];
        $last = $_POST['last'];
        $addd = $_POST['submit'];

        switch ($addd) {
            case 'Sum':
                $result = $first + $last;
                break;
            case 'Sub':
                $result = $first - $last;
                break;
            case 'Multi':
                $result = $first * $last;
                break;
            case 'Div':
                $result = $first / $last;
                break;
          
        }
    }
    
    ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-5 m-auto">
                <div class="card ">
                    <div class="card-header text-center">
                        <h1 class="text-success " style="text-transform :uppercase">calculetor</h1>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                           <div class="d-flex justify-content-between">
                           <div class="mb-3">
                                <input type="text" name="first" class="form-control" placeholder="first digit" >
                            </div>
                            <div class="mb-3">
                                <input type="text" name="last" class="form-control" placeholder="last digit">
                            </div>
                           </div>
                          
                            <input type="submit" name="submit" class="btn btn-primary" value="Sum">
                            <input type="submit" name="submit" class="btn btn-success" value="Sub">
                            <input type="submit" name="submit" class="btn btn-dark" value="Multi">
                            <input type="submit" name="submit" class="btn btn-danger" value="Div">
                            <h2 class="text-info"><?php echo 'Result is :'. $result;?></h2>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>