<!DOCTYPE HTML>
<html>
    <head>
        <title>Vicinia Redirect...</title>
    </head>
    <body>
        <?php
            $type = $_POST['formType'];
            
            if($type=='register' || $type=='signIn')
            {
                header("Location:development.html");
            }
            if($type=='order')
            {
                header("Location:notlog.html");
            }
            if($type=='contact')
            {
                header("Location:mssgSent.html");
            }
            
        ?>
    </body>
</html>