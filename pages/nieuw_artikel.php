<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Local CSS -->
    <link rel="stylesheet" href="../css/nieuw_arikel.css">

    <title>Magazijn</title>
</head>

<body>
    <!-- sidebar with top content-->
    <div class="container">
        <div class="row">
            <div class="col-12 title">
                <h1>Nieuw Artikel</h1>
            </div>
            <form action="../nieuw_artikel_script.php" method="post">
                <label for="exampleInputEmail1" class="form-label url-input">Url</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                    <input type="text" name="url" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <label for="exampleInputEmail1" class="form-label mt-3">Aantal</label>
                <div class="input-group aantal">
                    <input type="number" name="aantal" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <label for="exampleInputEmail1" class="form-label mt-3">Reden</label>
                <div class="input-group">
                    <textarea class="form-control" name="reden" aria-label="With textarea" maxlength="500"></textarea>
                </div>
                <div class="col-12 btn-submit">
                    <input class="btn btn-primary" type="submit" value="Aanvragen">
                </div>
            </form>
        </div>
    </div>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- javascript for this index -->
    <script src="./js/sidebar.js"></script>
    <!-- boxicons usage link -->
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
</body>

</html>