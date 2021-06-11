
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../shop_mvc/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../shop_mvc/css/SideBar.css">
    <title>List product</title>

</head>
<body >
<?php
    $category_id = $_GET["category_id"];
?>
<div class="container" >
    <h3>List product</h3>
    <div class="content">
        <button type="button" style="margin-bottom: 30px;margin-left: 125px" ><a href="?route=themsp&category_id=<?php echo $category_id;?>">Add</a> </button>
        <table style="width: 70%;margin-left: 125px">
            <tr>
                <th style="text-align: center">ProductID</th>
                <th style="text-align: center">Name</th>
                <th style="text-align: center">Price</th>
                <th style="text-align: center">CategoryID</th>
                <th style="text-align: center">Edit</th>
                <th style="text-align: center">Delete</th>
            </tr>
            <?php
                foreach ($dssp as $item){?>
                    <tr>
                        <td><?php echo $item["product_id"];?></td>
                        <td><a href="?route=chitietsp&product_id=<?php echo $item["product_id"];?>"> <?php echo $item["name"];?></a></td>
                        <td><?php echo $item["price"];?></td>
                        <td><?php echo $item["category_id"];?></td>
                        <td><a href="?route=suasp&product_id=<?php echo $item["product_id"];?>">Edit</a> </td>
                        <td><a href="?route=xoasp&category_id=<?php echo $item["category_id"];?>">Delete</a> </td>
                    </tr>
                <?php }?>
        </table>
    </div>
</div>

</body>
</html>
