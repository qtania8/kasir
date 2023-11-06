<?php
require  'function.php';

if(isset($_POST["register"])){
	if(registrasi($_POST) > 0){
		echo "<script>
		alert('user baru berhasil ditambahkan!');
		</script>";
	}else{
		echo mysqli_error($conn);
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Project Baru</title>
</head>

<body style="background-color: #D2B48C;">
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Registrasi</h3>
                            <?php if (isset($error)) { ?>
                                <div>
                                    <script>
                                        alert("<?php echo $error; ?>");
                                    </script>
                                </div>
                            <?php } ?>

                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Konfirmasi password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Registrasi">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>