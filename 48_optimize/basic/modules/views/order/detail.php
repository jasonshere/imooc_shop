    <!-- main container -->
    <div class="content">
        
        <div class="container-fluid">
            <div id="pad-wrapper" class="users-list">
                <div class="row-fluid header">
                    <h3>订单详情</h3>
                </div>
                <div class="row-fluid">
                    <p>订单编号：<?php echo $order->orderid ?></p>
                    <p>下单用户：<?php echo $order->username ?></p>
                    <p>收货地址：<?php echo $order->address ?></p>
                    <p>订单总价：<?php echo $order->amount ?></p>
                    <p>快递方式：<?php echo array_key_exists($order->expressid, \Yii::$app->params['express'])?\Yii::$app->params['express'][$order->expressid]:'' ?></p>
                    <p>快递编号：<?php echo $order->expressno ?></p>
                    <p>订单状态：<?php echo $order->zhstatus ?></p>
                    <p>商品列表：</p>
                    <p>
                        <?php foreach($order->products as $product): ?>
                        <div style="display:inline">
                            <img src="<?php echo $product->cover ?>-piclistsmall">
                            <?php echo $product->num ?> x <?php echo $product->title ?>
                        </div>
                        <?php endforeach; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
