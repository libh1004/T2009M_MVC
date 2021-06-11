<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add product</title>
    <link rel="stylesheet" href="../shop_mvc/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../shop_mvc/css/SideBar.css">
</head>
<body>
<?php
$category_id = $_GET["category_id"];
?>
<div class="container">
    <div class="content">
        <h3>Add new product</h3>
        <form action="?route=luusp" method="post">
            <div class="input-info" style="width: 70%;padding: 40px;margin-left: 90px">
                <input name="category_id" value="<?php echo $category_id;?>" type="hidden"/>
                <input name="name" type="text" placeholder="Name" style="width: 45%;height: 45px"/>
                <input name="price" type="number" placeholder="Price" style="width: 45%;height: 45px;margin-left: 30px"/><br>
            </div>
            <button type="submit" style="float: right;margin-right: 45px">Submit</button>
        </form>
        <?php echo "<br/>"?>
    </div>
</div>
</body>
</html>

