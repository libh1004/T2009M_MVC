
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../shop_mvc/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../shop_mvc/css/SideBar.css">
    <title>List category</title>

</head>
<body>
<div class="container" >
    <h3>List categories</h3>
    <div class="content">
        <button type="button" style="margin-bottom: 30px;margin-left: 125px" ><a href="?route=themloai">Add</a> </button>
        <table style="width: 70%;margin-left: 125px">
            <tr>
                <th style="text-align: center">Id</th>
                <th style="text-align: center">Name</th>
                <th style="text-align: center">Description</th>
                <th style="text-align: center">Edit</th>
                <th style="text-align: center">Delete</th>
            </tr>
            <?php foreach ($dsl as $item){?>
                <tr>
                    <td><?php echo $item["id"];?></td>
                     <td><a href="?route=chitietloai&id=<?php echo $item["id"];?>"><?php echo $item["name"];?></a></td>
                    <td><?php echo $item["description"];?></td>
                    <td><a href="?route=sualoai&id=<?php echo $item["id"];?>">Edit</a></td>
                    <td><a href="?route=xoaloai&id=<?php echo $item["id"];?>">Delete</a></td>
                </tr>
            <?php }?>
        </table>
    </div>
</div>
</body>
</html>
