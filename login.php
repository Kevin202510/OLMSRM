<?php session_start(); ?>
<?php include('layout/head.php'); ?>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div style="margin-top:20vh;" class="col-xl-8 col-lg-12 col-md-4">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="user_email" name="user_email" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="user_password" name="user_password" placeholder="Password">
                                        </div>
                                        <button type="button" class="btn btn-primary btn-user btn-block" id="loginUser">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
<script src="authentication/authentication.js"></script>
<?php include('layout/script.php'); ?>