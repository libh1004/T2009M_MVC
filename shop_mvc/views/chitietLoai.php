<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint"
          content="width=device-width", user-scalable=no, initial-scale="1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category detail</title>
    <link rel="stylesheet" href="../shop_mvc/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../shop_mvc/css/SideBar.css">
</head>
<body>
<div class="container" >
    <div class="content">
        <h3>Category detail</h3>
        <table style="width: 70%;margin-left: 125px">
            <tr>
                <th style="text-align: center">Id</th>
                <th style="text-align: center">Name</th>
                <th style="text-align: center">Description</th>
            </tr>
            <tr>
                <td><?php echo $loai["id"];?></td>
                <td><a href="?route=dssp&category_id=<?php echo $loai["id"];?>"><?php echo $loai["name"];?></a></td>
                <td><?php echo $loai["description"];?></td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>
