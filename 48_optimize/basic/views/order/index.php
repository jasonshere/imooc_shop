<!-- ============================================================= HEADER : END ============================================================= -->		<div id="single-product">
    <div class="container" style="padding-top:10px">
<?php foreach($orders as $order): ?>
<div style="margin-bottom:30px;">
  <div class="trade-order-mainClose">
    <div>
      <table style="width:100%;border-collapse:collapse;border-spacing:0px;">
        <colgroup>
          <col style="width:38%;">
          <col style="width:10%;">
          <col style="width:5%;">
          <col style="width:12%;">
          <col style="width:12%;">
          <col style="width:11%;">
          <col style="width:12%;">
        </colgroup>
        <tbody>
          <tr style="background-color:#F5F5F5;width:100%">
            <td style="padding:10px 20px;text-align:left;width:100%">
              <label>
                <strong title="" style="margin-right:8px;font-weight:bold;">
                    <?php echo date('Y-m-d H:i:s', $order->createtime); ?>
                </strong>
              </label>
              <span>
                订单号：
              </span>
              <span>
              </span>
              <span>
                <?php echo $order->orderid ?>
              </span>
            </td>
            
          </tr>
        </tbody>
      </table>
      <table style="width:100%;border-collapse:collapse;border-spacing:0px;">
        <colgroup>
          <col style="width:38%;">
          <col style="width:10%;">
          <col style="width:5%;">
          <col style="width:12%;">
          <col style="width:12%;">
          <col style="width:11%;">
        </colgroup>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach($order->products as $product): ?>
          <tr>
            <td style="text-align:left;vertical-align:top;padding-top:10px;padding-bottom:10px;border-right-width:0;border-right-style:solid;border-right-color:#E8E8E8;border-top-width:0;border-top-style:solid;border-top-color:#E8E8E8;padding-left:20px;" >
              <div style="overflow:hidden;">
              <a class="tp-tag-a" href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $product->productid]) ?>" style="float:left;width:27%;margin-right:2%;text-align:center;" target="_blank">
                <img src="<?php echo $product->cover ?>-picsmall" style="border:1px solid #E8E8E8;max-width:80px;">
                </a>
                <div style="float:left;width:71%;word-wrap:break-word;">
                  <div style="margin:0px;">
                  <a class="tp-tag-a" href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $product->productid]) ?>" target="_blank">
                      <span>
                        <?php echo $product->title ?>
                      </span>
                    </a>
                    <span>
                    </span>
                  </div>
                  <div style="margin-top:8px;margin-bottom:0;color:#9C9C9C;">
                    <span style="margin-right:6px;">
                      <span>
                        分类
                      </span>
                      <span>
                        ：
                      </span>
                      <span>
                        <?php echo $product->cate ?>
                      </span>
                    </span>
                  </div>
                  
                  <span>
                  </span>
                </div>
              </div>
            </td>
            <td style="text-align:center;vertical-align:top;padding-top:10px;padding-bottom:10px;border-right-width:0;border-right-style:solid;border-right-color:#E8E8E8;border-top-width:0;border-top-style:solid;border-top-color:#E8E8E8;">
              <div style="font-family:verdana;font-style:normal;">
                <p>
                    <?php echo $product->price ?>
                </p>
                <span>
                </span>
                <span>
                </span>
              </div>
            </td>
            <td style="text-align:center;vertical-align:top;padding-top:10px;padding-bottom:10px;border-right-width:0;border-right-style:solid;border-right-color:#E8E8E8;border-top-width:0;border-top-style:solid;border-top-color:#E8E8E8;">
              <div>
                <div>
                数量 <?php echo $product->num ?>
                </div>
              </div>
            </td>
            <td style="text-align:center;vertical-align:top;padding-top:10px;padding-bottom:10px;border-right-width:1px;border-right-style:solid;border-right-color:#E8E8E8;border-top-width:0;border-top-style:solid;border-top-color:#E8E8E8;" >
              <div>
                <div style="margin-bottom:3px;">
                  <span>
                    <span class="trade-ajax">
                      <span class="trade-tooltip-wrap">
                        <span>
                          <span class="trade-operate-text">
                            单位：个
                          </span>
                        </span>
                      </span>
                      <noscript>
                      </noscript>
                    </span>
                  </span>
                </div>
                
              </div>
            </td>
            <?php if ($i == 1): ?>
            <td style="text-align:center;vertical-align:top;padding-top:10px;padding-bottom:10px;border-right-width:1px;border-right-style:solid;border-right-color:#E8E8E8;border-top-width:0;border-top-style:solid;border-top-color:#E8E8E8;" >
              <div>
                <div style="font-family:verdana;font-style:normal;">
                  <span>
                  </span>
                  <span>
                  </span>
                  <p>
                    <strong>
                        <?php echo $order->amount ?> 元
                    </strong>
                  </p>
                  <span>
                  </span>
                </div>
                <p>
                  <span>
                    (含运费：
                  </span>
                  <span>
                    <?php echo \Yii::$app->params['expressPrice'][$order->expressid] ?> 元
                  </span>
                  <span>
                  </span>
                  <span>
                  </span>
                  <span>
                    )
                  </span>
                </p>
                
                <div>
                </div>
              </div>
            </td>
            <td style="text-align:center;vertical-align:top;padding-top:10px;padding-bottom:10px;border-right-width:1px;border-right-style:solid;border-right-color:#E8E8E8;border-top-width:0;border-top-style:solid;border-top-color:#E8E8E8;" >
              <div>
                <div style="margin-bottom:3px;">
                <a class="tp-tag-a" href="<?php echo yii\helpers\Url::to(['order/check', 'orderid' => $order->orderid]) ?>">
                    <?php echo $order->zhstatus ?>
                </a>
                </div>
                <?php if ($order->status == 220): ?>
                <div>
                  <div style="margin-bottom:3px;position:relative">
                    <span>
                        <a class="tp-tag-a" href="<?php echo yii\helpers\Url::to(['order/received', 'orderid' => $order->orderid]) ?>" target="_blank">
                        <span class="trade-operate-text">
                          确认收货
                        </span>
                      <div class="expressshow" style="overflow:auto;text-align:left;font-size:12px;width:200px;height:300px;position:absolute;border:1px solid #ccc;padding:15px;background-color:#eee">快递状态</div>
                      </a>
                    </span>
                    <span>
                        <a data="<?php echo $order->expressno ?>" class="tp-tag-a express" href="#" target="_blank">
                        <span class="trade-operate-text">
                          查看物流
                        </span>
                      <div class="expressshow" style="overflow:auto;text-align:left;font-size:12px;width:200px;height:300px;position:absolute;border:1px solid #ccc;padding:15px;background-color:#eee">快递状态</div>
                      </a>
                    </span>
                  </div>
                <?php endif; ?>
                <?php else: ?>
                    <td style="text-align:center;vertical-align:top;padding-top:10px;padding-bottom:10px;border-right-width:1px;border-right-style:solid;border-right-color:#E8E8E8;border-top-width:0;border-top-style:solid;border-top-color:#E8E8E8;" ></td>
                    <td style="text-align:center;vertical-align:top;padding-top:10px;padding-bottom:10px;border-right-width:1px;border-right-style:solid;border-right-color:#E8E8E8;border-top-width:0;border-top-style:solid;border-top-color:#E8E8E8;" ></td>
                <?php endif; ?>
                </div>
              </div>
            </td>
         </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
       </tbody>
      </table>
      <div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
</div>

