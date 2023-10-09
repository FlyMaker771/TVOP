<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login TexasVoice</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/css/login.css">
</head>

<body>
    <main>
        <!-- <img src="texar01.jpg" alt="Texar" width="100%"> -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 login-section-wrapper">
                    <div class="brand-wrapper">
                        <img src="logoTexar.png" alt="Smk Texar" class="logo">
                        <img src="LOGO SMKASSALAM.png" alt="Smk Texar" class="logo">
                        <b>Texas Voice</b>
                    </div>
                    <div class="login-wrapper">
                        <br><br>
                        <h1 class=" login-title">Log in</h1>
                        <?php if (isset($validation)) : ?>
                            <div class="alert alert-danger">
                                <?= $validation->listErrors() ?>
                            </div>
                        <?php endif; ?>
                        <form action="<?php echo base_url('/auth/login') ?>" method="post">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="username" name="username" id="username" class="form-control" placeholder="enter your username" value="<?= set_value('username'); ?>">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
                            </div>
                            <input name="login" id="login" class="btn btn-info btn-block" type="submit" value="Login" style="text-decoration: none;">
                        </form>
                        <br>
                        <a href="#!" class="forgot-password-link">About Us</a>
                        <!-- <a href="#!" class="forgot-password-link">About Us</a> -->
                        <!-- <p class="login-wrapper-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p> -->
                    </div>
                </div>
            </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>