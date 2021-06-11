
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../shop_mvc/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../shop_mvc/css/SideBar.css">
    <title>Edit category</title>
</head>
<body>
<div class="container">
    <div class="content">
        <h3>Edit category</h3>
        <button type="button" style="margin-bottom:30px"><a href="?route=dsloai" ><< Back</a></button>
        <form action="?route=capnhatloai" method="post">
            <input name="id" value="<?php echo $loai["id"];?>" type="hidden"/>
            <input name="name" type="text" value="<?php echo $loai["name"];?>"/>
            <input name="description" type="text" value="<?php echo $loai["description"];?>"/>
            <?php echo "</br>"?>
            <button type="submit" style="float: right;margin-right: 45px">Submit</button>
        </form>

    </div>

</div>
</body>
</html>

