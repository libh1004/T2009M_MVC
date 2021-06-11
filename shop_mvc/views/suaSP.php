
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../shop_mvc/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../shop_mvc/css/SideBar.css">
    <title>Edit product</title>
</head>
<body>

<div class="container">
    <div class="content">
        <h3>Edit product</h3>
        <form action="?route=capnhatsp" method="post">
            <input name="name" type="text" value="<?php echo $sp["name"];?>">
            <input name="price" type="number" value="<?php echo $sp["price"];?>">
            <input name="product_id" type="number" value="<?php echo $sp["product_id"];?>">
            <input name="category_id"  value="<?php echo $sp["category_id"];?>" type="hidden">
            <button type="submit" style="float: right;margin-right: 45px">Submit</button>
        </form>

    </div>
</div>
</body>
</html>
