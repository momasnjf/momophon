<?php
class Home extends Controller
{
    function Hello()
    {
        echo "Hello From Home";
    }

    function Index()
    {
        $productModel = $this->model("ProductModel");

        $highlightProducts = $productModel->getHighlightProducts();

        $phoneProducts = $productModel->getProductByCategory(1);
        $laptopProducts = $productModel->getProductByCategory(2);

        $this->view("/Home/Index",[$highlightProducts, $laptopProducts]);
    }

    function Show()
    {
        $newsModel = $this->model("NewsModel");
        $news = $newsModel->getNews();

        $newsLength = $newsModel->showNumberNews();

        $this->view("ListNew" ,$news);
    }
}
?>