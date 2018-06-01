<!doctype html>
<html lang="en">
<head>
    <title>STUDENT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="container">
        <div class="page-header">
            <img src="https://1.bp.blogspot.com/-yrypDURFLrk/Wl2Zdy5oGoI/AAAAAAAABQ8/gT7v-2JNd-M6tDZwTXsQ8zoqO5GOj6xkgCLcBGAs/s400/Altmetric_rgb.png" class="img-circle" alt="">
        </div>
    </div>


    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Sweet Home</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="">Life style</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </div>
    </nav>
    <div class="row centered-form">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 page-header text-center">
            <h2>Newest Home</h2>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <div class="row">

        @foreach($list_apartments as $item)
            <a href="">
                <div class="col-sm-4">
                    <div class="card"
                         style="background-image: url('{{$item->hinh_daidien}}'); background-size: cover; width: 100px; height: 120px;">
                    </div>
                    <div>
                        <h5>{{$item->ten_chungcu}}</h5>
                    </div>
                    <div>
                        <p>{{$item->gia_ban}}</p>
                    </div>
                    <div><p>{{$item->dia_chi}}</p></div>
                </div>
            </a>
        @endforeach

    </div>
    <div class="float-right">
        {{ $list_apartments->links() }}
    </div>
</div>

<script>

</script>
</body>
</html>