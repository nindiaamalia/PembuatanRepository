<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <button class="btn btn-primary btn-hilang">hilang</button>
    <button class="btn btn-primary btn-muncul">muncul</button>
    <h1>Ini Adalah Text H1 atau judul</h1>
    <!--ini file import jquery dan js-->
    <script src="bootstrap-5.0.2-dist/js/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".btn-hilang").click(function(){
                $("h1").hide();
                // $("h1").fadeOut();
                // $("h1").sledeUp();
            })
                $(".btn-muncul").click(function(){
                $("h1").show();
                // $("h1").fadein();
                // $("h1").slideDown();
            })
            $(".btn-toggle").click(function(){
                // $("h1").toggle();
                // $("h1").fadeToggle();
                // $("h1").slideToggle();
            })
        })
        
        
    </script>
</body>
</html>