    <link rel="stylesheet" href="assets/admin/css/compiled/user-list.css" type="text/css" media="screen" />
    <!-- main container -->
    <div class="content">
        
        <div class="container-fluid">
            <div id="pad-wrapper" class="users-list">
                <div class="row-fluid header">
                    <h3>分类列表</h3>
                    <div class="span10 pull-right">
                        <a href="<?php echo yii\helpers\Url::to(['category/add']) ?>" class="btn-flat success pull-right">
                            <span>&#43;</span>
                            添加新分类
                        </a>
                    </div>
                </div>

                    <?php
                    if (Yii::$app->session->hasFlash('info')) {
                        echo Yii::$app->session->getFlash('info');
                    }
                    ?>
                <!-- Users table -->
                <div class="row-fluid table">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="span3 sortable">
                                    <span class="line"></span>分类ID
                                </th>
                                <th class="span3 sortable">
                                    <span class="line"></span>分类名称
                                </th>
                                <th class="span3 sortable align-right">
                                    <span class="line"></span>操作
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- row -->
                        <?php foreach($cates as $cate): ?>
                        <tr class="first">
                            <td>
                                <?php echo $cate['cateid'] ?>
                            </td>
                            <td>
                                <?php echo $cate['title'] ; ?>
                            </td>
                            <td class="align-right">
                            <a href="<?php echo yii\helpers\Url::to(['category/mod', 'cateid' => $cate['cateid']]); ?>">编辑</a>
                            <a href="<?php echo yii\helpers\Url::to(['category/del', 'cateid' => $cate['cateid']]); ?>">删除</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="pagination pull-right">
                    <?php /*echo yii\widgets\LinkPager::widget([
                        'pagination' => $pager,
                        'prevPageLabel' => '&#8249;',
                        'nextPageLabel' => '&#8250;',
                        ]);*/ ?>
                </div>
                <!-- end users table -->
            </div>
        </div>
    </div>
    <!-- end main container -->
