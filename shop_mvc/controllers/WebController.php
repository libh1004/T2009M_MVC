<?php
    include_once "database.php";
    class WebController{
        public function home(){

        }

        public function dsLoai(){
            $sql_txt = "select * from categories";
            $dsl = queryDB($sql_txt);
            include "views/dsLoai.php";
        }

        public function themLoai(){
            require_once "views/themLoai.php";
        }

        public function luuLoai(){
            $name = $_POST["name"];
            $description = $_POST["description"];
            $sql_txt = "insert into categories (name,description) values('$name','$description')";
            updateDB($sql_txt);
            header ("Location: ?route=dsloai");
        }

        public function chitietLoai(){
            $id = $_GET["id"];
            $sql_txt = "select * from categories where id = $id";
            $loai = queryDBelement($sql_txt);
            include "views/chitietLoai.php";
        }

        public function capnhatLoai(){
            $id = $_POST["id"];
            $name = $_POST["name"];
            $description = $_POST["description"];
            $sql_txt = "update categories set name ='$name',description = '$description' where id=$id";
            updateDB($sql_txt);
            header ("Location: ?route=dsloai&id=".$id);
        }

        public function suaLoai(){
            $id = $_GET["id"];
            $sql_txt = "select * from categories where id = $id";
            $loai = queryDBelement($sql_txt);
            include "views/suaLoai.php";
        }

        public function xoaLoai(){
            $id = $_GET["id"];
            $sql_txt = "delete from categories where id=$id";
            updateDB($sql_txt);
            header("Location: ?route=dsloai");
        }
        public function dsSP(){
            $category_id=  $_GET["category_id"];
            $sql_txt = "select * from products where category_id=$category_id";
            $dssp = queryDB($sql_txt);
            include "views/dsSP.php";
        }

        public function themSP(){
            require_once "views/themSP.php";
        }

        public function luuSP(){
            $name = $_POST["name"];
            $price = $_POST["price"];
            $category_id = $_POST["category_id"];
            $sql_txt = "insert into products (name,price,category_id) values('$name', $price,$category_id)";
            updateDB($sql_txt);
            header("Location: ?route=dssp&category_id=".$category_id);
        }

        public function chitietSP(){
            $product_id= $_GET["product_id"];
            $sql_txt = "select * from products where product_id=$product_id";
            $sp = queryDBelement($sql_txt);
            include "views/chitietSP.php";
        }

        public function suaSP(){
            $product_id = $_GET["product_id"];
            $sql_txt = "select * from products where product_id = $product_id";
            $sp = queryDBelement($sql_txt);
            include  "views/suaSP.php";
        }

        public function capnhatSP(){
            $product_id = $_POST["product_id"];
            $name = $_POST["name"];
            $price = $_POST["price"];
            $category_id = $_POST["category_id"];
            $sql_txt = "update products set name='$name',price=$price,category_id=$category_id where product_id=$product_id";
            updateDB($sql_txt);
            header("Location: ?route=dssp&category_id=".$category_id);
        }

        public function xoaSP(){
            $category_id = $_GET["category_id"];
            $sql_txt = "delete from products where category_id = $category_id";
            updateDB($sql_txt);
            header("Location: ?route=dssp&category_id=".$category_id);
        }
    }
