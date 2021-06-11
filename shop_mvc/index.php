<?php
    include_once "controllers/WebController.php";
    $route = isset($_GET["route"])?$_GET["route"]:"";
    $controller = new WebController();
    switch ($route){
        case "dsloai": $controller->dsLoai();break;
        case "chitietloai": $controller->chitietLoai();break;
        case "luuloai": $controller->luuLoai();break;
        case "themloai": $controller->themLoai();break;
        case "sualoai": $controller->suaLoai();break;
        case "xoaloai": $controller->xoaLoai();break;
        case "capnhatloai": $controller->capnhatLoai();break;

        case "dssp": $controller->dsSP();break;
        case "luusp": $controller->luuSP();break;
        case "themsp": $controller->themSP();break;
        case "chitietsp": $controller->chitietSP();break;
        case "suasp": $controller->suaSP();break;
        case "capnhatsp": $controller->capnhatSP();break;
        case "xoasp": $controller->xoaSP();break;
        default: $controller->home();
    }
