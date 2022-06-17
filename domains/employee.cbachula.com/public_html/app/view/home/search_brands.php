<!DOCTYPE html>
<html lang="en">

<head>
    <script src="/public/js/search_brands.js?t=<?=time()?>"></script>
</head>

<body ng-app="app" ng-controller="app_controller" ng-init="app_initialization()">

    <?php include('layout/navbar.php'); ?>

    <div class="container">
        <div class="row row-cols-4 row-cols-md-8 row-cols-lg-10 brand-card-row">
            <div class="col p-1" ng-repeat="brand in brands" ng-click="search_brand(brand)">
                <div class="p-2 brand-card">
                    <img src="/public/img/brands/{{brand}}.png" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<style>

    .brand-card-row {
        margin-top: .75rem;
        margin-left: -.25rem; 
        margin-right: -.25rem;
        margin-bottom: .75rem;
    }
    
    .brand-card {
        cursor: pointer;
        overflow: hidden;
        border-radius: .8rem;
        border: 1px solid #ddd;
        background-color: #fff;
    }

    @media (min-width: 768px) {
        .row-cols-md-8 > * {
            flex: 0 0 12.5%;
            max-width: 12.5%;
        }
    }

    @media (min-width: 992px) {
        .row-cols-lg-10 > * {
            flex: 0 0 10%;
            max-width: 10%;
        }
    }

</style>