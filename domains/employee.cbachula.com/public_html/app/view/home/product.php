<!DOCTYPE html>
<html lang="en">

<head>
    <script>var product = JSON.parse('<?=$product?>');</script>
    <script src="/public/js/product.js?t=<?=time()?>"></script>
</head>

<body ng-app="app" ng-controller="app_controller" ng-init="app_initialization()">

    <?php include('layout/navbar.php'); ?>

    <div class="container px-0">
        <div class="product-img" style="background-image: url('https://catalog.cbachula.com/public/img/products/{{product.product_no}}-1.jpg');"></div>
    </div>

    <div class="container py-3" style="background-color: #fff;">
        <div class="text-bold text-default text-x-large mt-1">
            ฿ {{product.sales_price | number:2}}
        </div>
        <div class="text-bold text-large mt-2">{{product.product_name}}</div>
    </div>

    <div class="container py-3 mt-2" style="background-color: #fff;">
        <div class="text-bold text-large mt-1">รูปแบบการจัดส่ง</div>
        <div class="mt-2">{{product.product_type == 'Install' ? 'จัดส่งโดยซัพพลายเออร์' : 'จัดส่งโดย CBA'}}</div>
    </div>

    <div class="container py-3 mt-2" style="background-color: #fff;">
        <div class="text-bold text-large mt-1">รายละเอียดสินค้า</div>
        <div class="mt-2">{{product.product_description}}</div>
    </div>

    <div class="container mt-3 mb-2">
        <div class="text-bold" style="text-align:center;">สินค้าที่เกี่ยวข้อง</div>
        <?php include('layout/products.php'); ?>
    </div>

    <!-- <div style="position:sticky; bottom:0; background-color: #fff; border-top:1px solid #ddd;">
        <div class="container">
            <div class="row mx-0 py-2">
                <div class="col-4 ps-0 pe-3 my-auto">
                    <div style="text-align: center;"><i class="las la-comment-dots"></i> ติดต่อเรา</div>
                </div>
                <div class="col-8 ps-3 pe-0 border-left">
                    <button class="btn btn-default btn-round btn-block" ng-click="toggle()"><i class="las la-shopping-cart"></i> เพิ่มลงรถเข็น</button>
                </div>
            </div>
        </div>
    </div>

    <div id="black-wall" class="container d-none" style="position:fixed; top:0; background-color:#000; height:100%; opacity:0.75; z-index:10000;" ng-click="hide()"></div>

    <div id="select1" class="container py-3" style="position:fixed; bottom:-100%; background-color:#fff; border-radius:.8rem .8rem 0 0; z-index:10001; transition: all .5s ease;">
        <i class="las la-2x la-times float-end" ng-click="hide()"></i>
        <div class="row mx-0">
            <div class="col-4 px-0">
                <div class="category-img" style="background-image: url('https://catalog.cbachula.com/public/img/products/{{product.product_no}}-1.jpg'); border-radius:.8rem;"></div>
            </div>
            <div class="col-8 ps-2 pe-0">
                <div class="text-bold text-default">฿ {{product.sales_price | number:2}}</div>
                <div class="text-small text-grey">* ราคานี้ยังไม่รวมส่วนลดและค่าส่ง</div>
            </div>
        </div>
        <hr>
        <div class="text-bold mb-2">รูปแบบการจัดส่ง</div>
        <label class="input-label mb-2">
            <input type="radio" name="shipping_radio">
            <span class="checkmark-radio"></span>
            จัดส่งโดย CBA
        </label>
        <label class="input-label mb-0">
            <input type="radio" name="shipping_radio">
            <span class="checkmark-radio"></span>
            จัดส่งโดยซัพพลายเออร์
        </label>
        <hr>
        <table style="width:100%;">
            <tr>
                <td><span class="text-bold">จำนวน</span> เหลือ 10 ชิ้น</td>
                <td>
                    <table class="ms-auto">
                        <tr>
                            <td><i class="las la-2x la-minus-circle text-grey" ng-click="edit_quantity(-1)"></i></td>
                            <td class="text-large" style="padding:0 .8rem;">{{product.quantity}}</td>
                            <td><i class="las la-2x la-plus-circle text-grey" ng-click="edit_quantity(1)"></i></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <button class="btn btn-default btn-round btn-block mt-3" ng-click="add_to_cart()"><i class="las la-shopping-cart"></i> เพิ่มลงรถเข็น</button>
    </div> -->

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