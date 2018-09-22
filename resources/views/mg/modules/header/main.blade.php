<div class="header_main">
    <div class="container">
        <div class="row">

            <!-- Logo -->
            <div class="col-lg-3 col-sm-3 col-6 order-1 order-lg-2">
                @include( $template_name .'.modules.logo.default')
            </div>

            <!-- ShopName  -->
            <div class="col-lg-12 col-6 order-2 order-lg-1 text-center pt-2">
                Фирменный магазин запчастей <strong>Master Gas Seoul</strong>
            </div>

            <!-- Search -->
            <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                @include( $template_name .'.modules.search.default')
            </div>

            <!-- Cart -->
            <div class="col-lg-3 col-6 order-lg-3 order-2 text-lg-left text-right">
                @include( $template_name .'.modules.shop_basket.default')
            </div>

        </div>
    </div>
</div>