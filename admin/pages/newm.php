<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/css/newstyle.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN PANEL</title>
</head>
<body>
<header>
    <h2 class="text-uppercase">admin panel <i class="fa fa-user-circle"></i></h2>
    <a href="filemanger.php"><button class="btn btn-success">file manger</button></a>
    <a href=".././index.php"><i class="fa fa-power-off"></i></a>
</header>
<div class="body-content">
    <aside class="">
        <ul class="p-0 m-0">
            <a href="">
                <li>
                    داشبورد<i class="fa fa-dashboard"></i>
                </li>
            </a>
            <a href="">
                <li>
                    منوها<i class="fa fa-bars"></i>
                </li>
            </a>
            <a href="">
                <li>
                    مطالب<i class="fa fa-newspaper-o"></i>
                </li>
            </a>
        </ul>
    </aside>
    <div class="content">
        <div class="row p-0">
            <form class="form col-5" action="">
                <h3 class="text-right mb-3">منو ها</h3>
                    <input  placeholder="عنوان" type="text">
                    <input  placeholder="لینک" type="text">
                    <input  placeholder="ترتیب" type="number">
                    <textarea  placeholder="توضیحات" rows="10"></textarea>
                    <button>submit</button>
            </form>
            <div class="col-6 menu-list">
                <h2 class="text-right mb-3">لیست</h2>
                <ul>
                    <li>خانه <i class="fa fa-trash"></i></li>
                    <li>درباره ما <i class="fa fa-trash"></i></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>