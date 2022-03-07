<?php
require_once "./mvc/core/Database.php";

class ProductModel extends Database
{
    function getDetailProduct($id)
    {
        //truy cập csdl để lấy sản phẩm có id = $id

        return array("id"=>$id, "Name"=> "Gì đó", "Price"=> "350000");

    }
    function getProducts()
    {
        $query = "SELECT *FROM sanpham";

        return mysqli_query($this->con, $query);
    }

    function getHighlightProducts()
    {
        $query = "SELECT *FROM sanpham WHERE noibat = 0";

        return mysqli_query($this->con, $query);
    }

    function getProductByCategory($categoryId)
    {
        $query = "SELECT *FROM sanpham WHERE maloai = $categoryId";

        return mysqli_query($this->con, $query);
    }
}
?>