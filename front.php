<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<style>
    .image {
        position: relative;
    }

    .text {
        position: absolute;
        top: 25%;
        left: 5%;
        color: aliceblue;
        font-size: 6em;
        animation-name: ani;
        animation-duration: 16s;
        animation-delay: 4s;
    }

    #intu {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        ;
    }

    .card-body:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        ;
    }

    .card-body {
        background-color: lightcyan;
    }

    .info {
        animation-name: bod;
        animation-duration: 5s;
        animation-delay: 2s;
        transition-timing-function: ease;
    }

    @keyframes bod {
        from {
            left: 0%;
        }

        to {
            left: 10%;
        }
    }

    @keyframes ani {
        from {
            top: 20%;
            left: 3%;
        }

        to {
            top: 30%;
            left: 10%;
        }
    }
</style>

<body>
    <div class="image">
        <img src="money.jpg" style="width:100%;">
        <h1 class="text">Expense Tracker Agent</h1>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="#" style="font-size: 1.3em;">Home</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Enter your details</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="signup.php" method="post">
                            <div class="form-group">
                                Username:<input type="text" name="uname" class="form-control" required>
                            </div>
                            <div class="form-group">
                                Email:<input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                Password:<input type="password" name="password" class="form-control" required><br>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-danger" value="submit">Sign
                                    in</button>
                            </div>
                        </form>
                        If you have already an account.<a href=signin.php  data-bs-toggle="modal"
                data-bs-target="#myModal1">Log-in</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="myModal1">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Enter your details</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="signin1.php" method="post">
                            WElCOME TO EXPENSE TRACKER ....Enter your email and password.
                            <div class="form-group">
                                Email:<input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                Password:<input type="password" name="pswd" class="form-control" required><br>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-danger" value="submit">log
                                    in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div style="justify-content: center;margin: 1.5em;text-align: center;">
            <button type="button" class="btn btn-primary btn-lg m-2" id="login" data-bs-toggle="modal"
                data-bs-target="#myModal" style="margin: auto;">Register</button>
            <button type="button" class="btn btn-primary btn-lg" id="login" data-bs-toggle="modal"
                data-bs-target="#myModal1" style="margin: auto;">Log-in</button>
        </div>
    </div>
    <div class="card mt-5 container p-5" id="intu">
        <div>
            <h1><b>An intuitive and cross-platform finance website.</b></h1>
        </div>
        <div>
            <h5>Money Lover helps you get just about everything managed. A smart,
                easy-to-use app that allows you to track and categorize your in-and-out
                money, create budgets that you can actually stick to.</h5>
        </div>
    </div>
    <div class="card mt-lg-5 p-2 border-0 info" style="width: 55%;margin-left: 5em;">
        <div class="card-body">
            <h3>Simple money tracker</h3>
            <div>It takes seconds to record daily transactions. Put them into clear
                and visualized categories such as Expense: Food, Shopping or Income:
                Salary, Gift.</div>
        </div>
    </div>
    <div class="card  p-2 border-0 info" style="width: 55%;margin-left: 5em;">
        <div class="card-body">
            <h3>Painless Budgeting</h3>
            <div>Set budgets that are easy to stick to, based on your own
                spending habits. You’re one step closer to that stuff you want to buy.</div>
        </div>
    </div>
    <div class="card  p-2 border-0 info" style="width: 55%;margin-left: 5em;">
        <div class="card-body">
            <h3>The whole picture in one place</h3>
            <div>One report to give a clear view on your spending patterns. Understand
                where your money comes and goes with easy-to-read graphs.</div>
        </div>
    </div>
</body>

</html>