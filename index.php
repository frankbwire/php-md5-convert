<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PHP MD5 TETX CONVERTER</title>
    <link rel="icon" type="image/jpeg" sizes="200x200" href="assets/img/ncom%20logo%20small.jpg">
    <link rel="icon" type="image/jpeg" sizes="200x200" href="assets/img/ncom%20logo%20small.jpg">
    <link rel="icon" type="image/jpeg" sizes="200x200" href="assets/img/ncom%20logo%20small.jpg">
    <link rel="icon" type="image/jpeg" sizes="200x200" href="assets/img/ncom%20logo%20small.jpg">
    <link rel="icon" type="image/jpeg" sizes="200x200" href="assets/img/ncom%20logo%20small.jpg">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Kanadaka&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Telivigala&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Black-Navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button" style="background: rgb(34, 34, 34);border-radius: 20;border-top-left-radius: 20;border-top-right-radius: 20;border-bottom-right-radius: 20;border-bottom-left-radius: 20;border-style: none;padding-top: 0;padding-bottom: 10px;">
        <div class="container"><button class="navbar-toggler" data-bs-toggle="collapse"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="d-md-flex align-items-md-center"><a class="navbar-brand" href="index.php"><span>MD5 CONVERTER</span> </a></div>
        </div>
    </nav>
    <div class="container" style="background: #ffffff;padding: 10px;">
        <form class="border rounded shadow" style="padding: 5px;margin: 5px;" method="post" action="index.php">
            <div class="row" style="margin: 0PX;">
                <div class="col-md-12" style="margin-top: 5px;margin-bottom: 5px;"><p style="font-size: 14px;">Type your text/encrypted text on the provided form and press <span class="text-success" style="font-style: italic;letter-spacing: 1px;font-size: 12px;"><strong>ENCRYPT</strong></span></p></div>
                <div class="col-md-8" style="margin-bottom: 5px;margin-top: 5px;"><input class="form-control form-control-sm" type="text" autofocus="" required="" placeholder="insert text here..." style="background: rgba(206,212,218,0.5);" name="text"></div>
                <div class="col-md-4 d-md-flex align-items-md-center" style="margin-top: 5px;margin-bottom: 5px;text-align: left;">
                    <div class="btn-group btn-group-sm" role="group"><button class="btn btn-primary bg-success border rounded shadow" type="submit" style="margin-right: 5px;margin-left: 5px;letter-spacing: 1px;font-weight: bold;font-family: 'Akaya Kanadaka', serif;" name="encrypt">Encrypt</button></div>
                </div>
            </div>
        </form>
    </div>
    
    
    <!-- ENCRYPT CODE -->
    
    <?php
    
    if (isset($_POST["encrypt"])){
        
        $text=$_POST["text"] ??'';
        $etext=md5($text);
        ?>
        
        <!--RESULT DIV-->
    <div class="container" style="background: #ffffff;padding: 10px;">
        <div class="table-responsive border rounded shadow" style="margin: 5px;">
            <table class="table table-striped table-hover table-dark table-sm">
                <thead>
                    <tr>
                        <th style="font-size: 15px;letter-spacing: 1px;">Result&nbsp;<i class="far fa-smile-wink"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Your Text -&nbsp;&nbsp;<span class="text-warning" style="letter-spacing: 1px;font-family: 'Akaya Kanadaka', serif;"><?php echo $text; ?></span></td>
                    </tr>
                    <tr>
                        <td>Encrypted Text -&nbsp;&nbsp;<span class="text-warning" style="letter-spacing: 1px;font-family: 'Akaya Kanadaka', serif;"><?php echo $etext; ?></span></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td class="text-dark d-md-flex justify-content-md-end align-items-md-center flash animated infinite" style="font-size: 10px;letter-spacing: 1px;font-family: Alef, sans-serif;background: rgba(255,255,255,0);color: rgb(0,0,0);border-color: var(--bs-table-active-color);">Developed by:&nbsp; <i class="far fa-copyright"></i>&nbsp;Frankline Bwire</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!--END RESULT DIV-->
        <?php 
    }else
    {
      die;  
    };
    
    ?>
    
<!-- END ENCRYPT CODE -->
     
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>