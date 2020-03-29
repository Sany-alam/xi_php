<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enlink - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid p-0 h-100">
            <div class="row no-gutters h-100 full-height">
                <div class="col-lg-4 d-none d-lg-flex bg" style="background-image:url('assets/images/others/sign-up-1.jpg')">
                    <div class="d-flex h-100 p-h-40 p-v-15 flex-column justify-content-between">
                        <div>
                            <img src="assets/images/logo/logo-white.png" alt="">
                        </div>
                        <div>
                            <h1 class="text-white m-b-20 font-weight-normal">Exploring Enlink</h1>
                            <p class="text-white font-size-16 lh-2 w-80 opacity-08">Climb leg rub face on everything give attitude nap all day for under the bed. Chase mice attack feet but rub face on everything hopped up.</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-white">© 2019 ThemeNate</span>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-white text-link" href="#">Legal</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-white text-link" href="#">Privacy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 bg-white">
                    <div class="container h-100">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col-md-8 col-lg-7 col-xl-6 mx-auto">
                                <h2>Sign Up</h2>
                                <p class="m-b-30">Create your account to get access</p>
                                <form action="{{ url('signingup') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="school_name">School name:</label>
                                        <input type="text" class="form-control" name="school_name" id="school_name" placeholder="Enter shcool name">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="school_email">School email:</label>
                                        <input type="email" class="form-control" name="school_email" id="school_email" placeholder="Enter school email">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="school_phone">School phone:</label>
                                        <input type="phone" class="form-control" name="school_phone" id="school_phone" placeholder="Enter school phone">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="school_password">School password:</label>
                                        <input type="password" class="form-control" name="school_password" id="school_password" placeholder="Enter school password">
                                    </div>
                                    <div class="form-group">
                                        <div class="text-right p-t-15">
                                            <button type="submit" class="btn btn-primary">Sign In</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>
</html>