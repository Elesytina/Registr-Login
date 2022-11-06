<!doctype html>
<html lang="ru" >
    <head >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Главная страница</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container mt-5">
            <?php
            if($_COOKIE['user']==''):
            ?>
            <div class="row">
                <div class="col">
                    <h1>Registration form</h1>
                <form  action="check.php" method="post">
                 <input type="text" class="form-control" name="login" id="login" placeholder="Input login" required><br>
                 <input type="email" class="form-control" name="email" id="email" placeholder="Input email" required><br>
                 <input type="text" class="form-control" name="name" id="name" placeholder="Input name" required><br>
		 <input type="password" class="form-control" name="pass" id="pass" placeholder="Input password" required><br>
                 <input type="password" class="form-control" name="pass_repeat" id="pass_repeat" placeholder="Repeat password" required><br>
		 <button class="btn btn-success" name="do_registr" type="submit">Registr</button>
		</form>
                </div>
            <div class="col">
             <h1>Login form</h1>
             <form  action="auth.php" method="post">
                 <input type="text" class="form-control" name="login" id="login" placeholder="Input login" required><br>
		 <input type="password" class="form-control" name="pass" id="pass" placeholder="Input password" required><br>
		 <button class="btn btn-success" name="do_login" type="submit">Login</button>
		</form>
            </div>
                <?php else: ?>
                <p>User <?=$_COOKIE['user']?>  is registered. Click <a href="exit.php">here</a>. to exit</p>
                <?php endif;?>
        </div>
        </div>
    </body>
</html>
