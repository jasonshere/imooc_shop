    <link rel="stylesheet" href="assets/admin/css/compiled/user-list.css" type="text/css" media="screen" />
    <!-- main container -->
    <div class="content">
        
        <div class="container-fluid">
            <div id="pad-wrapper" class="users-list">
                <div class="row-fluid header">
                    <h3>商品列表</h3>
                    <div class="span10 pull-right">
                        <a href="<?php echo yii\helpers\Url::to(['product/add']) ?>" class="btn-flat success pull-right">
                            <span>&#43;</span>
                            添加新商品
                        </a>
                    </div>
                </div>

                <!-- Users table -->
                <div class="row-fluid table">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="span6 sortable">
                                    <span class="line"></span>商品名称
                                </th>
                                <th class="span2 sortable">
                                    <span class="line"></span>商品库存
                                </th>
                                <th class="span2 sortable">
                                    <span class="line"></span>商品单价
                                </th>
                                <th class="span2 sortable">
                                    <span class="line"></span>是否热卖
                                </th>
                                <th class="span2 sortable">
                                    <span class="line"></span>是否促销
                                </th>
                                <th class="span2 sortable">
                                    <span class="line"></span>促销价
                                </th>
                                <th class="span2 sortable">
                                    <span class="line"></span>是否上架
                                </th>
                                <th class="span2 sortable">
                                    <span class="line"></span>是否推荐
                                </th>

                                <th class="span3 sortable align-right">
                                    <span class="line"></span>操作
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- row -->
                        <?php foreach($products as $product): ?>
                        <tr class="first">
                            <td>
                                <img src="<?php echo $product->cover; ?>-coversmall" class="img-circle avatar hidden-phone" />
                                <a href="#" class="name"><?php echo $product->title; ?></a>
                            </td>
                            <td>
                                <?php echo $product->num; ?>
                            </td>
                            <td>
                                <?php echo $product->price; ?>
                            </td>
                            <td>
                                <?php $hot = ['不热卖', '热卖'] ?>
                                <?php echo $hot[$product->ishot]; ?>
                            </td>
                            <td>
                                <?php $sale = ['不促销', '促销'] ?>
                                <?php echo $sale[$product->issale]; ?>
                            </td>
                            <td>
                                <?php echo $product->saleprice; ?>
                            </td>
                            <td>
                                <?php $on = ['下架', '上架'] ?>
                                <?php echo $on[$product->ison]; ?>
                            </td>
                            <td>
                                <?php $on = ['不推荐', '推荐'] ?>
                                <?php echo $on[$product->istui]; ?>
                            </td>

                            <td class="align-right">
                            <a href="<?php echo yii\helpers\Url::to(['product/mod', 'productid' => $product->productid]); ?>">编辑</a>
                            <a href="<?php echo yii\helpers\Url::to(['product/on', 'productid' => $product->productid]); ?>">上架</a>
                            <a href="<?php echo yii\helpers\Url::to(['product/off', 'productid' => $product->productid]); ?>">下架</a>
                            <a href="<?php echo yii\helpers\Url::to(['product/del', 'productid' => $product->productid]); ?>">删除</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="pagination pull-right">
                    <?php echo yii\widgets\LinkPager::widget([
                        'pagination' => $pager,
                        'prevPageLabel' => '&#8249;',
                        'nextPageLabel' => '&#8250;',
                    ]); ?>
                </div>
                <!-- end users table -->
            </div>
        </div>
    </div>
    <!-- end main container -->
