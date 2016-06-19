# 快递单号查询

## 安装

环境要求：yii2

1. 使用 [composer](https://getcomposer.org/)

  ```shell
  composer require dzer/yii2-express
  ```

## 使用

基本使用:

```php
<?php

use dzer\express\Express;

//Express::search('快递单号','快递公司代码（可空）','返回格式（可空）');
$rs = Express::search('807209844896');
```
不传递快递公司代码时，会自动判断快递单号所属快递公司，默认返回json.

返回结果:
```
{
  "nu": "807209844896",
  "message": "ok",
  "ischeck": "0",
  "com": "yuantong",
  "updatetime": "2016-06-17 11:00:56",
  "status": "200",
  "condition": "H100",
  "data": [
    {
      "time": "2016-06-17 08:37:12",
      "context": "重庆市渝北区四部公司(点击查询电话)郭** 派件中 派件员电话13637819857",
      "ftime": "2016-06-17 08:37:12"
    },
    {
      "time": "2016-06-17 05:08:02",
      "context": "重庆市渝北区四部公司 已收入",
      "ftime": "2016-06-17 05:08:02"
    },
    {
      "time": "2016-06-17 04:18:37",
      "context": "重庆转运中心 已发出,下一站 重庆市渝北区四部",
      "ftime": "2016-06-17 04:18:37"
    },
    {
      "time": "2016-06-17 03:30:19",
      "context": "重庆转运中心 已收入",
      "ftime": "2016-06-17 03:30:19"
    },
    {
      "time": "2016-06-15 22:06:50",
      "context": "杭州转运中心 已发出,下一站 重庆转运中心",
      "ftime": "2016-06-15 22:06:50"
    },
    {
      "time": "2016-06-15 22:05:03",
      "context": "杭州转运中心 已收入",
      "ftime": "2016-06-15 22:05:03"
    },
    {
      "time": "2016-06-15 18:18:18",
      "context": "浙江省杭州市萧山中部公司 已发出,下一站 杭州转运中心",
      "ftime": "2016-06-15 18:18:18"
    },
    {
      "time": "2016-06-15 17:52:08",
      "context": "浙江省杭州市萧山中部公司 已打包",
      "ftime": "2016-06-15 17:52:08"
    },
    {
      "time": "2016-06-15 17:52:08",
      "context": "浙江省杭州市萧山中部公司(点击查询电话) 已揽收",
      "ftime": "2016-06-15 17:52:08"
    },
    {
      "time": "2016-06-15 11:18:02",
      "context": "浙江省杭州市萧山中部公司 取件人: 王棕元 已收件",
      "ftime": "2016-06-15 11:18:02"
    }
  ],
  "state": "5"
}
```
返回结果说明：
com	物流公司编号
nu	物流单号
time	每条跟踪信息的时间
context	每条跟综信息的描述
state	快递单当前的状态 ：　
    0：在途，即货物处于运输过程中；
    1：揽件，货物已由快递公司揽收并且产生了第一条跟踪信息；
    2：疑难，货物寄送过程出了问题；
    3：签收，收件人已签收；
    4：退签，即货物由于用户拒签、超区等原因退回，而且发件人已经签收；
    5：派件，即快递正在进行同城派件；
    6：退回，货物正处于退回发件人的途中；
status	查询结果状态：
    0：物流单暂无结果，
    1：查询成功，
    2：接口出现异常，

快递公司代码：
```
$data = array(
        'shunfeng' => '顺丰',
        'yuantong' => '圆通速递',
        'shentong' => '申通',
        'yunda' => '韵达快运',
        'ems' => 'ems快递',
        'tiantian' => '天天快递',
        'zhaijisong' => '宅急送',
        'quanfengkuaidi' => '全峰快递',
        'zhongtong' => '中通速递',
        'rufengda' => '如风达',
        'debangwuliu' => '德邦物流',
        'huitongkuaidi' => '汇通快运',
        'aae' => 'aae全球专递',
        'anjie' => '安捷快递',
        'anxindakuaixi' => '安信达快递',
        'biaojikuaidi' => '彪记快递',
        'bht' => 'bht',
        'baifudongfang' => '百福东方国际物流',
        'coe' => '中国东方（COE）',
        'changyuwuliu' => '长宇物流',
        'datianwuliu' => '大田物流',
        'dhl' => 'dhl',
        'dpex' => 'dpex',
        'dsukuaidi' => 'd速快递',
        'disifang' => '递四方',
        'fedex' => 'fedex（国外）',
        'feikangda' => '飞康达物流',
        'fenghuangkuaidi' => '凤凰快递',
        'feikuaida' => '飞快达',
        'guotongkuaidi' => '国通快递',
        'ganzhongnengda' => '港中能达物流',
        'guangdongyouzhengwuliu' => '广东邮政物流',
        'gongsuda' => '共速达',
        'hengluwuliu' => '恒路物流',
        'huaxialongwuliu' => '华夏龙物流',
        'haihongwangsong' => '海红',
        'haiwaihuanqiu' => '海外环球',
        'jiayiwuliu' => '佳怡物流',
        'jinguangsudikuaijian' => '京广速递',
        'jixianda' => '急先达',
        'jjwl' => '佳吉物流',
        'jymwl' => '加运美物流',
        'jindawuliu' => '金大物流',
        'jialidatong' => '嘉里大通',
        'jykd' => '晋越快递',
        'kuaijiesudi' => '快捷速递',
        'lianb' => '联邦快递（国内）',
        'lianhaowuliu' => '联昊通物流',
        'longbanwuliu' => '龙邦物流',
        'lijisong' => '立即送',
        'lejiedi' => '乐捷递',
        'minghangkuaidi' => '民航快递',
        'meiguokuaidi' => '美国快递',
        'menduimen' => '门对门',
        'ocs' => 'OCS',
        'peisihuoyunkuaidi' => '配思货运',
        'quanchenkuaidi' => '全晨快递',
        'quanjitong' => '全际通物流',
        'quanritongkuaidi' => '全日通快递',
        'quanyikuaidi' => '全一快递',
        'santaisudi' => '三态速递',
        'shenghuiwuliu' => '盛辉物流',
        'sue' => '速尔物流',
        'shengfeng' => '盛丰物流',
        'saiaodi' => '赛澳递',
        'tiandihuayu' => '天地华宇',
        'tnt' => 'tnt',
        'ups' => 'ups',
        'wanjiawuliu' => '万家物流',
        'wenjiesudi' => '文捷航空速递',
        'wuyuan' => '伍圆',
        'wxwl' => '万象物流',
        'xinbangwuliu' => '新邦物流',
        'xinfengwuliu' => '信丰物流',
        'yafengsudi' => '亚风速递',
        'yibangwuliu' => '一邦速递',
        'youshuwuliu' => '优速物流',
        'youzhengguonei' => '邮政包裹挂号信',
        'youzhengguoji' => '邮政国际包裹挂号信',
        'yuanchengwuliu' => '远成物流',
        'yuanweifeng' => '源伟丰快递',
        'yuanzhijiecheng' => '元智捷诚快递',
        'yuntongkuaidi' => '运通快递',
        'yuefengwuliu' => '越丰物流',
        'yad' => '源安达',
        'yinjiesudi' => '银捷速递',
        'zhongtiekuaiyun' => '中铁快运',
        'zhongyouwuliu' => '中邮物流',
        'zhongxinda' => '忠信达',
        'zhimakaimen' => '芝麻开门'
    );
```
## License

MIT
