<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/regester.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
            text-align: center;
            direction: rtl;
            /* font-family: 'irsens'; */
        }
    </style>
</head>
<body>
    


    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
    
            <!-- The content half -->
            <div class="col-md-12 bg-light">
                <div class="login d-flex align-items-center py-5">
    
                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h3 class="display-4">ورود به پنل نویسندگان</h3>
                                <br>
                                <p class="text-muted mb-4">وارد شوید</p>
                                <form>
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="email" placeholder="ایمیل" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputPassword" type="password" placeholder="گذرواژه" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                        <label for="customCheck1" class="custom-control-label">مرا به خاطر بسپار</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">ثبت نام</button>
                                    <div class="text-center d-flex justify-content-between mt-4"><p>فراموشی رمز عبور <a href="https://bootstrapious.com/snippets" class="font-italic text-muted"> 
                                            <u>کلیک کنید</u></a></p></div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End -->
    
                </div>
            </div><!-- End -->
    
        </div>
    </div>
    



</body>
</html>