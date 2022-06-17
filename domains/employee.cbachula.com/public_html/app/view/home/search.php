<!DOCTYPE html>
<html lang="en">

<head>
    <script>var product_line = '<?=$product_line?>';</script>
    <script>var category_no = '<?=$category_no?>';</script>
    <script>var brand = '<?=$brand?>';</script>
    <script>var filter = '<?=$filter?>';</script>
    <script src="/public/js/search.js?t=<?=time()?>"></script>
</head>

<body ng-app="app" ng-controller="app_controller" ng-init="app_initialization()">

    <?php include('layout/navbar.php'); ?>

    <div class="container mt-2 mb-2">
        <?php include('layout/products.php'); ?>
    </div>

</body>
</html>

<style>

    .toggle1 {
        bottom:0 !important;
    }


    .product-img {
    width: 100%; 
    padding-bottom: 100%;
    position: relative;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.category-img {
    width: 100%; 
    padding-bottom: 100%;
    position: relative;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: .8rem .8rem 0 0;
}



.border-left {
    border-left: 1px solid #ddd;
}


</style>