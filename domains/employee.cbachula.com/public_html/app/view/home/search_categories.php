<!DOCTYPE html>
<html lang="en">

<head>
    <script src="/public/js/search_categories.js?t=<?=time()?>"></script>
</head>

<body ng-app="app" ng-controller="app_controller" ng-init="app_initialization()">

    <?php include('layout/navbar.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-3 px-0">
                <div ng-repeat="product_line in product_lines" class="px-2 {{selected_product_line == product_line.product_line ? 'selected_product_line' : ''}}" style="height: 7rem; cursor: pointer;" ng-click="filter_by_product_line(product_line.product_line)">
                    <div style="position: relative; height: 100%; width: 100%; border-bottom: 1px solid #c6def0;">
                        <div style="position: absolute; top: 50%; transform: translate(0,-50%); width:100%; text-align:center;">
                            <div><i class="las la-2x la-{{product_line.product_line_icon}}"></i></div>
                            <div class="text-small">{{product_line.product_line_name}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 pb-3" style="background-color: #fff;">
                <div class="accordion" id="categoryAccordion" style="position: sticky; top: 5rem;">
                    <div class="accordion-item" ng-repeat="category in categories">
                        <h2 class="accordion-header" id="heading{{category.category_no}}" ng-click="search_category(category.category_no)">
                            <div class="accordion-button collapsed px-0 py-3" data-bs-toggle="collapse" data-bs-target="#collapse{{category.category_no}}" aria-expanded="true" aria-controls="collapse{{category.category_no}}">
                                {{category.category_name}}
                                <!-- {{!$first ? 'collapsed' : ''}} -->
                            </div>
                        </h2>
                        <!-- <div id="collapse{{category.category_no}}" class="accordion-collapse collapse {{$first ? 'show' : ''}}" aria-labelledby="heading{{category.category_no}}" data-bs-parent="#categoryAccordion">
                            <div class="accordion-body px-0 pt-0 py-3">
                                <div class="row mb-3">
                                    <div class="col">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/65/Product_Photography.jpg" alt="" style="width: 100%;">
                                    </div>
                                    <div class="col">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/65/Product_Photography.jpg" alt="" style="width: 100%;">
                                    </div>
                                    <div class="col">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/65/Product_Photography.jpg" alt="" style="width: 100%;">
                                    </div>
                                </div>
                                <div class="text-grey text-small text-link" style="text-align:right;">ดูทั้งหมด <i class="las la-angle-right"></i></span>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<style>

    .selected_product_line {
        background-color: #6aa8d7;
        color: #fff;
    }

    .accordion-item:first-of-type {
        border-top-left-radius: 0 !important;
        border-top-right-radius: 0 !important;
    }

    .accordion-item:last-of-type {
        border-bottom-right-radius: 0 !important;
        border-bottom-left-radius: 0 !important;
    }
    
    .accordion-button:not(.collapsed) {
        color: unset !important;
        background-color: unset !important;
        box-shadow: unset !important;
    }

    .accordion-item {
        border-style: none;
        border-bottom: 1px solid #666 !important;
        cursor: pointer;
    }

</style>