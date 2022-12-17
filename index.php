
<html>
<head>
    <title>DZ_Z1</title>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
<form method="post" action="#">
    <input type="text" name="tEmail" placeholder="Email" />
    <br>
    <input type="checkbox" name="cSubscribe" value="Subscribe"/>
    <label for="cSubscribe">Subscribe</label>
   <br>
   <button type="submit" name="nSend" value="vSend">Send</button>
</form>
<div id="myDiv">
    <?php
    if(isset($_POST['cSubscribe'])){
        echo '<p>Thank you for subscribing</p>';
    }
    ?>
</div>

</body>
</html>
</body>
</html>