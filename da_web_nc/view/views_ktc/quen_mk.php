<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HUCE GYM FORGOT PASSWORD</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="../assets/css/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="../assets/css/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="../assets/css/dist/css/adminlte.min.css?v=3.2.0">
    <script nonce="2c45c58d-d7ba-4c73-a13f-b87bfa141cf4">
    (function(w, d) {
        ! function(dk, dl, dm, dn) {
            dk[dm] = dk[dm] || {};
            dk[dm].executed = [];
            dk.zaraz = {
                deferred: [],
                listeners: []
            };
            dk.zaraz.q = [];
            dk.zaraz._f = function(dp) {
                return function() {
                    var dq = Array.prototype.slice.call(arguments);
                    dk.zaraz.q.push({
                        m: dp,
                        a: dq
                    })
                }
            };
            for (const dr of ["track", "set", "debug"]) dk.zaraz[dr] = dk.zaraz._f(dr);
            dk.zaraz.init = () => {
                var ds = dl.getElementsByTagName(dn)[0],
                    dt = dl.createElement(dn),
                    du = dl.getElementsByTagName("title")[0];
                du && (dk[dm].t = dl.getElementsByTagName("title")[0].text);
                dk[dm].x = Math.random();
                dk[dm].w = dk.screen.width;
                dk[dm].h = dk.screen.height;
                dk[dm].j = dk.innerHeight;
                dk[dm].e = dk.innerWidth;
                dk[dm].l = dk.location.href;
                dk[dm].r = dl.referrer;
                dk[dm].k = dk.screen.colorDepth;
                dk[dm].n = dl.characterSet;
                dk[dm].o = (new Date).getTimezoneOffset();
                if (dk.dataLayer)
                    for (const dy of Object.entries(Object.entries(dataLayer).reduce(((dz, dA) => ({
                            ...dz[1],
                            ...dA[1]
                        }))))) zaraz.set(dy[0], dy[1], {
                        scope: "page"
                    });
                dk[dm].q = [];
                for (; dk.zaraz.q.length;) {
                    const dB = dk.zaraz.q.shift();
                    dk[dm].q.push(dB)
                }
                dt.defer = !0;
                for (const dC of [localStorage, sessionStorage]) Object.keys(dC || {}).filter((dE => dE
                    .startsWith("_zaraz_"))).forEach((dD => {
                    try {
                        dk[dm]["z_" + dD.slice(7)] = JSON.parse(dC.getItem(dD))
                    } catch {
                        dk[dm]["z_" + dD.slice(7)] = dC.getItem(dD)
                    }
                }));
                dt.referrerPolicy = "origin";
                dt.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(dk[dm])));
                ds.parentNode.insertBefore(dt, ds)
            };
            ["complete", "interactive"].includes(dl.readyState) ? zaraz.init() : dk.addEventListener(
                "DOMContentLoaded", zaraz.init)
        }(w, d, "zarazData", "script");
    })(window, document);
    </script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>HUCE GYM FORGOT PASSWORD</b></a>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

                <?php 
    if (isset( $_SESSION["check_email"])){
        echo "<span style='color:red;'>".$_SESSION["check_email"]."</span>";
    }
    session_destroy();
?>

                <form action="../../controller/controller_ktc/email/quen_mk.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="gmail">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                        </div>


                    </div>
                </form>
                <p class="mt-3 mb-1">
                    <a href="dang_nhap.php">Login</a>
                </p>
                <p class="mb-0">
                    <a href="dang_ky.php" class="text-center">Register a new membership</a>
                </p>
            </div>

        </div>
    </div>


    <script src="../assets/css/plugins/jquery/jquery.min.js"></script>

    <script src="../assets/css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/css/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>