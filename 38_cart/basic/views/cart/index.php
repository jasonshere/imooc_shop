<?php
    use yii\bootstrap\ActiveForm;
?>
<!-- ============================================================= HEADER : END ============================================================= -->		<section id="cart-page">
    <div class="container">
        <!-- ========================================= CONTENT ========================================= -->
        <?php $form = ActiveForm::begin([
            'action' => yii\helpers\Url::to(['order/add']),
        ]) ?>
        <div class="col-xs-12 col-md-9 items-holder no-margin">
<?php $total = 0; ?>
<?php foreach((array)$data as $k=>$product): ?>
            <input type="hidden" name="OrderDetail[<?php echo $k?>][productid]" value="<?php echo $product['productid'] ?>">
            <input type="hidden" name="OrderDetail[<?php echo $k?>][price]" value="<?php echo $product['price'] ?>">
            <input type="hidden" name="OrderDetail[<?php echo $k?>][productnum]" value="<?php echo $product['productnum'] ?>">
            <div class="row no-margin cart-item">
                <div class="col-xs-12 col-sm-2 no-margin">
                <a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $product['productid']]) ?>" class="thumb-holder">
                    <img class="lazy" alt="" src="<?php echo $product['cover'] ?>-picsmall" />
                    </a>
                </div>

                <div class="col-xs-12 col-sm-5 ">
                    <div class="title">
                    <a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $product['productid']]) ?>"><?php echo $product['title'] ?></a>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-3 no-margin">
                    <div class="quantity">
                        <div class="le-quantity">
                                <a class="minus" href="#reduce"></a>
                                <input name="productnum" id="<?php echo $product['cartid'] ?>" readonly="readonly" type="text" value="<?php echo $product['productnum'] ?>" />
                                <a class="plus" href="#add"></a>
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-2 no-margin">
                    <div class="price">
                    ￥<span><?php echo $product['price'] ?></span>
                    </div>
                    <a class="close-btn" href="<?php echo yii\helpers\Url::to(['cart/del', 'cartid' => $product['cartid']]) ?>"></a>
                </div>
            </div><!-- /.cart-item -->
<?php $total += $product['price']*$product['productnum']; ?>
<?php endforeach; ?>
       </div>
        <!-- ========================================= CONTENT : END ========================================= -->

        <!-- ========================================= SIDEBAR ========================================= -->

        <div class="col-xs-12 col-md-3 no-margin sidebar ">
            <div class="widget cart-summary">
                <h1 class="border">商品购物车</h1>
                <div class="body">
                    <ul class="tabled-data no-border inverse-bold">
                        <li>
                            <label>购物车总价</label>
                            <div class="value pull-right">￥ <span><?php echo $total ?></span></div>
                        </li>
                    </ul>
                    <ul id="total-price" class="tabled-data inverse-bold no-border">
                        <li>
                            <label>订单总价</label>
                            <div class="value pull-right ordertotal">￥ <span><?php echo $total ?></span></div>
                        </li>
                    </ul>
                    <div class="buttons-holder">
                        <input type='submit' class="le-button big" value="去结算">
                        <a class="simple-link block" href="index.html" >继续购物</a>
                    </div>
                </div>
            </div><!-- /.widget -->

            <div id="cupon-widget" class="widget">
                <h1 class="border">使用优惠券</h1>
                <div class="body">
                    <form>
                        <div class="inline-input">
                            <input data-placeholder="请输入优惠券码" type="text" />
                            <button class="le-button" type="submit">使用</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.widget -->
        </div><!-- /.sidebar -->

        <!-- ========================================= SIDEBAR : END ========================================= -->
    </div>
</section>		<!-- ============================================================= FOOTER ============================================================= -->
<?php ActiveForm::end(); ?>
