<?php
class Product extends Controller
{
    function getProduct()
    {
        echo "Get product";
    }
    function detailProduct($id)
    {
        $productModel = $this->model(("ProductModel"));
        $data = $productModel->getDetailProduct($id);

        $this->view("ListProduct",$data);
    }
}
?>