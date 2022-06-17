<!DOCTYPE html>
<html lang="en">

<head>
    <script src="/public/js/index.js?t=<?=time()?>"></script>
</head>

<body ng-app="app" ng-controller="app_controller" ng-init="app_initialization()">

    <?php include('layout/navbar.php'); ?>

    <div class="container">

        <div id="banner" class="carousel slide banner-carousel" data-bs-ride="carousel" style="margin-top: .75rem;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#banner" data-bs-slide-to="{{$index}}" class="{{$first ? 'active' : ''}}" aria-current="true" ng-repeat="banner in banners"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item {{$first ? 'active' : ''}}" ng-repeat="banner in banners">
                    <img src="{{banner}}" class="d-block w-100" alt="banner-pic">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#banner" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#banner" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="mt-3">
            <span class="text-bold">หมวดหมู่สินค้า</span>
            <span class="text-grey text-small text-link float-end" onclick="location.assign('/search/categories')">ดูเพิ่มเติม <i class="las la-angle-right"></i></span>
            <div class="row row-cols-4 row-cols-md-6 row-cols-lg-8 mt-1" style="margin-left: -.25rem; margin-right: -.25rem;">
                <div class="col p-1" ng-repeat="category in categories" style="cursor:pointer;" ng-click="search_category(category.product_line, category.category_no)">
                    <div class="category-img" style="background-image: url('{{category.category_pic}}');"></div>
                    <div class="card-bottom p-2">
                        <div class="label text-smaller">
                            {{category.category_name}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <span class="text-bold">แบรนด์ดีสำหรับคุณ</span>
            <span class="text-grey text-small text-link float-end" onclick="location.assign('/search/brands')">ดูเพิ่มเติม <i class="las la-angle-right"></i></span>
            <div class="scrollmenu mt-2 py-3" style="border-radius: .8rem; background-color:#fff; text-align:center;">
                <img class="px-3 {{$first ? '' : 'border-left'}}" ng-repeat="brand in brands" src="/public/img/brands/{{brand}}.png" alt="" style="height:4rem; width:6rem;" ng-click="search_brand(brand)">
            </div>
        </div>
        
        <div class="mt-3 mb-2">
            <span class="text-bold">รายการสินค้า</span>
            <!-- <span class="text-grey text-small text-link float-end">ดูเพิ่มเติม <i class="las la-angle-right"></i></span> -->
            <?php include('layout/products.php'); ?>
        </div>

    </div>

</body>
</html>

<style>

    .banner-carousel {
        width:100%;
        border-radius:.8rem;
        overflow:hidden;
    }

    .card-bottom {
        border-radius: 0 0 .8rem .8rem;
        background-color:#fff;
    }

    .label {
        line-height: 1.2rem;
        height: 2.4rem;
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        text-align: center;

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


@media (min-width: 992px) {

    .row-cols-lg-8 > * {
      flex: 0 0 12.5%;
      max-width: 12.5%;
    }

}

.border-left {
    border-left: 1px solid #ddd;
}

div.scrollmenu {
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu img {
  display: inline-block;
  color: white;
  text-align: center;
  text-decoration: none;
}

.carousel-indicators [data-bs-target] {
    box-sizing: content-box;
    flex: 0 1 auto;
    width: .5rem;
    height: .5rem;
    border-radius: 1rem;
    padding: 0;
    margin-right: .3rem;
    margin-left: .3rem;
    text-indent: -999px;
    cursor: pointer;
    background-clip: padding-box;
    border: 0;
    background-color: #444;
    opacity: .6;
    transition: opacity .6s ease;
}

.carousel-indicators .active {
    background-color: #fff;
    opacity: 1;
}

</style>