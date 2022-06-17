<!DOCTYPE html>
<html lang="en">

<head>
    <script src="/public/js/cart.js?t=<?=time()?>"></script>
</head>

<body ng-app="app" ng-controller="app_controller" ng-init="app_initialization()">

    <?php include('layout/navbar.php'); ?>

    <div class="container py-3" style="background-color: #fff;">
        <span class="text-bold">ข้อมูลลูกค้า</span>
        <div class="row mx-0 mt-2 position-relative" ng-show="customer == null">
            <input class="input-default" type="text" placeholder="เบอร์โทรศัพท์มือถือลูกค้า" style="width:100%" ng-model="customer_tel">
            <div class="search-button" ng-click="search_customer()">
                <i class="las la-search"></i>
            </div>
        </div>
        <div class="mt-2" ng-show="customer != null && customer != ''">
            <div><b>เบอร์โทรศัพท์มือถือ</b> {{customer.customer_tel}}</div>
            <div><b>ชื่อลูกค้า</b> {{customer.customer_name}} {{customer.customer_surname}}</div>
            <div><b>ที่อยู่</b> {{customer.address}}</div>
        </div>
        <div class="mt-2" ng-show="customer == ''">
            <div style="text-align:center;">ไม่พบข้อมูลลูกค้า</div>
            <div><b>เบอร์โทรศัพท์มือถือ</b> {{customer.customer_tel}}</div>
            <div><b>ชื่อลูกค้า</b> {{customer.customer_name}} {{customer.customer_surname}}</div>
            <div><b>ที่อยู่</b> {{customer.address}}</div>
        </div>
    </div>
    
    <div class="container py-3 mt-2 mb-2" style="background-color: #fff;">
        <span class="text-bold">รายการสินค้า</span>
        <div class="mt-3">
            <label class="input-label">
                เลือกทั้งหมด
                <input id="select_all" type="checkbox" ng-model="is_selected_all" ng-change="select_all()">
                <span class="checkmark"></span>
            </label>
        </div>
        <hr>
        <div class="row mx-0 mt-3" ng-repeat="product in cart">
            <div class="col-1 px-0">
                <label class="input-label">
                    <input id="select_{{product.product_no}}" type="checkbox" ng-model="product.is_checked" ng-change="calculate_total_price()">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="col-3 px-0">
                <img src="https://catalog.cbachula.com/public/img/products/{{product.product_no}}-1.jpg" alt="" style="width: 100%; border-radius:.8rem; border: 1px solid #ddd;">
            </div>
            <div class="col-8 ps-2 pe-0">
                <div class="mt-1"><span class="badge rounded-pill text-xx-small px-2 py-1" style="background-color: #bbb;">{{product.product_type == 'Install' ? 'จัดส่งโดยซัพพลายเออร์' : 'จัดส่งโดย CBA'}}</span></div>
                <div class="product-card-name mt-2">{{product.product_name}}</div>
                <div class="row">
                    <div class="col">
                        <div class="text-bold">฿ {{product.sales_price | number:2}}</div>
                    </div>
                    <div class="col">
                        <div>
                            <table style="width:100%;">
                                <tr>
                                    <td>
                                        <table class="ms-auto">
                                            <tr>
                                                <td><i class="las la-minus-circle text-grey" ng-click="edit_quantity(product, -1)" style="font-size: 135%;"></i></td>
                                                <td style="padding:0 .8rem;">{{product.quantity}}</td>
                                                <td><i class="las la-plus-circle text-grey" ng-click="edit_quantity(product, 1)" style="font-size: 135%;"></i></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div style="position:sticky; bottom:0; background-color: #fff; border-top:1px solid #ddd;">
        <div class="container">
            <div class="row mx-0 py-2">
                <div class="col px-0 my-auto">
                    <div>ยอดรวม:</div>
                    <div class="text-bold text-default">฿ {{total_sales_price | number:2}}</div>
                </div>
                <div class="col ps-3 pe-0 border-left">
                    <button class="btn btn-default btn-round btn-block">ขอออก SO</button>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

<style>

    .input-label {
        display: block;
        position: relative;
        padding-left: 2rem;
        margin-bottom: .8rem;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .input-label input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #fff;
        border-radius:.4rem;
        border:.08rem solid #bbb;
    }

    /* When the checkbox is checked, add a blue background */
    .input-label input:checked ~ .checkmark {
        background-color: #6aa8d9;
    }

    /* Style the checkmark/indicator */
    .input-label input:checked ~ .checkmark:after {
        font-family: 'Line Awesome Free';
        font-weight: 900;
        color: white;
        font-size: 90%;
        margin-left: .25rem;
        content: "\f00c";
    }

    .product-card-name {
        line-height: 1.2rem;
        height: 2.4rem;
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
    }

</style>