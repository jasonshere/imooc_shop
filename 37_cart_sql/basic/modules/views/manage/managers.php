    <!-- main container -->
    <div class="content">
      
        <div class="container-fluid">
            <div id="pad-wrapper" class="users-list">
                <div class="row-fluid header">
                    <h3>管理员列表</h3>
                    <div class="span10 pull-right">
                        
                    <a href="<?php echo yii\helpers\Url::to(['manage/reg']); ?>" class="btn-flat success pull-right">
                            <span>&#43;</span>
                            添加新管理员
                        </a>
                    </div>
                </div>

                <!-- Users table -->
                <div class="row-fluid table">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="span2">
                                    管理员ID
                                </th>
                                <th class="span2">
                                    <span class="line"></span>管理员账号
                                </th>
                                <th class="span2">
                                    <span class="line"></span>管理员邮箱
                                </th>
                                <th class="span3">
                                    <span class="line"></span>最后登录时间
                                </th>
                                <th class="span3">
                                    <span class="line"></span>最后登录IP
                                </th>
                                <th class="span2">
                                    <span class="line"></span>添加时间
                                </th>
                                <th class="span2">
                                    <span class="line"></span>操作
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($managers as $manager): ?>
                        <!-- row -->
                        <tr>
                            <td>
                                <?php echo $manager->adminid; ?>
                            </td>
                            <td>
                                <?php echo $manager->adminuser; ?>
                            </td>
                            <td>
                                <?php echo $manager->adminemail; ?>
                            </td>
                            <td>
                                <?php echo date('Y-m-d H:i:s', $manager->logintime); ?>
                            </td>
                            <td>
                                <?php echo long2ip($manager->loginip); ?>
                            </td>
                            <td>
                                <?php echo date("Y-m-d H:i:s", $manager->createtime); ?>
                            </td>
                            <td class="align-right">
                            <a href="<?php echo yii\helpers\Url::to(['manage/del', 'adminid' => $manager->adminid]) ?>">删除</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                       </tbody>
                    </table>
                    <?php
                        if (Yii::$app->session->hasFlash('info')) {
                            echo Yii::$app->session->getFlash('info');
                        }
                    ?>
                </div>
                <div class="pagination pull-right">
                    <?php echo yii\widgets\LinkPager::widget(['pagination' => $pager, 'prevPageLabel' => '&#8249;', 'nextPageLabel' => '&#8250;']); ?>
                </div>
                <!-- end users table -->
            </div>
        </div>
    </div>
    <!-- end main container -->

