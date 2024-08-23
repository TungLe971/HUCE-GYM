<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HUCE GYM</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="../assets/css/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="../assets/css/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="../assets/css/dist/css/adminlte.min.css?v=3.2.0">
    <script nonce="a32a1677-3d3b-401a-af29-c6a583abfcf4">(function(w,d){!function(dk,dl,dm,dn){dk[dm]=dk[dm]||{};dk[dm].executed=[];dk.zaraz={deferred:[],listeners:[]};dk.zaraz.q=[];dk.zaraz._f=function(dp){return function(){var dq=Array.prototype.slice.call(arguments);dk.zaraz.q.push({m:dp,a:dq})}};for(const dr of["track","set","debug"])dk.zaraz[dr]=dk.zaraz._f(dr);dk.zaraz.init=()=>{var ds=dl.getElementsByTagName(dn)[0],dt=dl.createElement(dn),du=dl.getElementsByTagName("title")[0];du&&(dk[dm].t=dl.getElementsByTagName("title")[0].text);dk[dm].x=Math.random();dk[dm].w=dk.screen.width;dk[dm].h=dk.screen.height;dk[dm].j=dk.innerHeight;dk[dm].e=dk.innerWidth;dk[dm].l=dk.location.href;dk[dm].r=dl.referrer;dk[dm].k=dk.screen.colorDepth;dk[dm].n=dl.characterSet;dk[dm].o=(new Date).getTimezoneOffset();if(dk.dataLayer)for(const dy of Object.entries(Object.entries(dataLayer).reduce(((dz,dA)=>({...dz[1],...dA[1]})))))zaraz.set(dy[0],dy[1],{scope:"page"});dk[dm].q=[];for(;dk.zaraz.q.length;){const dB=dk.zaraz.q.shift();dk[dm].q.push(dB)}dt.defer=!0;for(const dC of[localStorage,sessionStorage])Object.keys(dC||{}).filter((dE=>dE.startsWith("_zaraz_"))).forEach((dD=>{try{dk[dm]["z_"+dD.slice(7)]=JSON.parse(dC.getItem(dD))}catch{dk[dm]["z_"+dD.slice(7)]=dC.getItem(dD)}}));dt.referrerPolicy="origin";dt.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(dk[dm])));ds.parentNode.insertBefore(dt,ds)};["complete","interactive"].includes(dl.readyState)?zaraz.init():dk.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a><b>HUCE GYM ĐĂNG KÝ</b></a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>
                <form action="../../controller/controller_ktc/dang_ky.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Full name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="retype_password"
                            placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>

                    </div>
                </form>
                <?php
    if(isset($_SESSION["retype_password"]))
    {
        echo "<span style='color:red;'>".$_SESSION["retype_password"]."</span>";
        session_destroy();
    }
    if(isset($_SESSION["nhap_all"]))
    {
        echo "<span style='color:red;'>".$_SESSION["nhap_all"]."</span>";
        session_destroy();
    }
    if(isset($_SESSION["check_gmail"]))
    {
        echo "<span style='color:red;'>".$_SESSION["check_gmail"]."</span>";
        session_destroy();
    }
?>
                <div class="social-auth-links text-center">
                    <p>- OR -</p>

                </div>
                <a href="dang_nhap.php" class="text-center">I already have a membership</a>
            </div>

        </div>
    </div>


    <script src="../assets/css/plugins/jquery/jquery.min.js"></script>

    <script src="../assets/css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/css/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>