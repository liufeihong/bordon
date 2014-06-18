<?php
return array (
  'zone' => 
  array (
    'fieldid' => '199',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'zone',
    'name' => '区域',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'linkage',
    'setting' => 'array (
  \'linkageid\' => \'3360\',
  \'showtype\' => \'3\',
  \'space\' => \' \',
  \'filtertype\' => \'1\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '1',
    'listorder' => '0',
    'disabled' => '0',
    'isomnipotent' => '1',
    'linkageid' => '3360',
    'showtype' => '3',
    'space' => ' ',
    'filtertype' => '1',
  ),
  'city' => 
  array (
    'fieldid' => '201',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'city',
    'name' => '所属城市',
    'tips' => '',
    'css' => 'style="display:none"',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'number',
    'setting' => 'array (
  \'minnumber\' => \'1\',
  \'maxnumber\' => \'\',
  \'decimaldigits\' => \'0\',
  \'size\' => \'\',
  \'defaultvalue\' => \'\',
  \'rangetype\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '0',
    'disabled' => '0',
    'isomnipotent' => '1',
    'minnumber' => '1',
    'maxnumber' => '',
    'decimaldigits' => '0',
    'size' => '',
    'defaultvalue' => '',
    'rangetype' => '0',
  ),
  'info_area' => 
  array (
    'fieldid' => '202',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'info_area',
    'name' => '区域选择',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'omnipotent',
    'setting' => 'array (
  \'formtext\' => \'{zone}{city}\',
  \'fieldtype\' => \'varchar\',
  \'minnumber\' => \'1\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '0',
    'disabled' => '0',
    'isomnipotent' => '0',
    'formtext' => '{zone}{city}',
    'fieldtype' => 'varchar',
    'minnumber' => '1',
  ),
  'catid' => 
  array (
    'fieldid' => '170',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'catid',
    'name' => '栏目',
    'tips' => '',
    'css' => '',
    'minlength' => '1',
    'maxlength' => '6',
    'pattern' => '/^[0-9]{1,6}$/',
    'errortips' => '请选择栏目',
    'formtype' => 'catid',
    'setting' => 'array (
  \'defaultvalue\' => \'\',
)',
    'formattribute' => '',
    'unsetgroupids' => '-99',
    'unsetroleids' => '-99',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '64',
    'issearch' => '1',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '1',
    'disabled' => '0',
    'isomnipotent' => '0',
    'defaultvalue' => '',
  ),
  'typeid' => 
  array (
    'fieldid' => '169',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'typeid',
    'name' => '类别',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'typeid',
    'setting' => 'array (
  \'minnumber\' => \'\',
  \'defaultvalue\' => \'\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '64',
    'issearch' => '1',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '2',
    'disabled' => '0',
    'isomnipotent' => '0',
    'minnumber' => '',
    'defaultvalue' => '',
  ),
  'agent' => 
  array (
    'fieldid' => '189',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'agent',
    'name' => '来源',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'box',
    'setting' => 'array (
  \'options\' => \'个人|1
经纪人|2\',
  \'boxtype\' => \'radio\',
  \'fieldtype\' => \'varchar\',
  \'minnumber\' => \'1\',
  \'width\' => \'100\',
  \'size\' => \'1\',
  \'defaultvalue\' => \'1\',
  \'outputtype\' => \'1\',
  \'filtertype\' => \'1\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '2',
    'disabled' => '0',
    'isomnipotent' => '0',
    'options' => '个人|1
经纪人|2',
    'boxtype' => 'radio',
    'fieldtype' => 'varchar',
    'minnumber' => '1',
    'width' => '100',
    'size' => '1',
    'defaultvalue' => '1',
    'outputtype' => '1',
    'filtertype' => '1',
  ),
  'title' => 
  array (
    'fieldid' => '168',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'title',
    'name' => '标题',
    'tips' => '',
    'css' => 'inputtitle',
    'minlength' => '1',
    'maxlength' => '80',
    'pattern' => '',
    'errortips' => '请输入标题',
    'formtype' => 'title',
    'setting' => '',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '64',
    'issearch' => '1',
    'isadd' => '64',
    'isfulltext' => '1',
    'isposition' => '1',
    'listorder' => '4',
    'disabled' => '0',
    'isomnipotent' => '0',
  ),
  'address' => 
  array (
    'fieldid' => '197',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'address',
    'name' => '地址',
    'tips' => '',
    'css' => '',
    'minlength' => '1',
    'maxlength' => '100',
    'pattern' => '',
    'errortips' => '请输入地址',
    'formtype' => 'text',
    'setting' => 'array (
  \'size\' => \'50\',
  \'defaultvalue\' => \'\',
  \'ispassword\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '1',
    'isposition' => '0',
    'listorder' => '5',
    'disabled' => '0',
    'isomnipotent' => '0',
    'size' => '50',
    'defaultvalue' => '',
    'ispassword' => '0',
  ),
  'xiaoqu_address' => 
  array (
    'fieldid' => '182',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'xiaoqu_address',
    'name' => '所在小区',
    'tips' => '',
    'css' => '',
    'minlength' => '1',
    'maxlength' => '100',
    'pattern' => '',
    'errortips' => '请输入所在小区',
    'formtype' => 'text',
    'setting' => 'array (
  \'size\' => \'50\',
  \'defaultvalue\' => \'\',
  \'ispassword\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '1',
    'isposition' => '1',
    'listorder' => '6',
    'disabled' => '0',
    'isomnipotent' => '0',
    'size' => '50',
    'defaultvalue' => '',
    'ispassword' => '0',
  ),
  'map' => 
  array (
    'fieldid' => '206',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'map',
    'name' => '地图',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'map',
    'setting' => 'array (
  \'maptype\' => \'2\',
  \'api_key\' => \'\',
  \'defaultcity\' => \'上海\',
  \'hotcitys\' => \'北京,重庆,武汉,南京,上海,西安,宝鸡\',
  \'width\' => \'600\',
  \'height\' => \'400\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '6',
    'disabled' => '0',
    'isomnipotent' => '0',
    'maptype' => '2',
    'api_key' => '',
    'defaultcity' => '上海',
    'hotcitys' => '北京,重庆,武汉,南京,上海,西安,宝鸡',
    'width' => '600',
    'height' => '400',
  ),
  'rent_mode' => 
  array (
    'fieldid' => '184',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'rent_mode',
    'name' => '出租方式',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'box',
    'setting' => 'array (
  \'options\' => \'整租|1
合租|2
床位|3\',
  \'boxtype\' => \'radio\',
  \'fieldtype\' => \'varchar\',
  \'minnumber\' => \'1\',
  \'width\' => \'50\',
  \'size\' => \'1\',
  \'defaultvalue\' => \'1\',
  \'outputtype\' => \'0\',
  \'filtertype\' => \'1\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '1',
    'listorder' => '7',
    'disabled' => '0',
    'isomnipotent' => '0',
    'options' => '整租|1
合租|2
床位|3',
    'boxtype' => 'radio',
    'fieldtype' => 'varchar',
    'minnumber' => '1',
    'width' => '50',
    'size' => '1',
    'defaultvalue' => '1',
    'outputtype' => '0',
    'filtertype' => '1',
  ),
  'household' => 
  array (
    'fieldid' => '172',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'household',
    'name' => '整套户型',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'omnipotent',
    'setting' => 'array (
  \'formtext\' => \'{bedroom} 室 {hall} 厅 {bathroom} 卫   第 {floor}  层，共{floors} 层\',
  \'fieldtype\' => \'varchar\',
  \'minnumber\' => \'1\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '8',
    'disabled' => '0',
    'isomnipotent' => '0',
    'formtext' => '{bedroom} 室 {hall} 厅 {bathroom} 卫   第 {floor}  层，共{floors} 层',
    'fieldtype' => 'varchar',
    'minnumber' => '1',
  ),
  'area_info' => 
  array (
    'fieldid' => '175',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'area_info',
    'name' => '面积',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'omnipotent',
    'setting' => 'array (
  \'formtext\' => \'{area} 平方米 {objecttype}  {fittype} {toward}\',
  \'fieldtype\' => \'varchar\',
  \'minnumber\' => \'1\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '9',
    'disabled' => '0',
    'isomnipotent' => '0',
    'formtext' => '{area} 平方米 {objecttype}  {fittype} {toward}',
    'fieldtype' => 'varchar',
    'minnumber' => '1',
  ),
  'price_info' => 
  array (
    'fieldid' => '173',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'price_info',
    'name' => '租金',
    'tips' => '',
    'css' => '',
    'minlength' => '1',
    'maxlength' => '255',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'omnipotent',
    'setting' => 'array (
  \'formtext\' => \'{price}元/月 {pay_type_int}\',
  \'fieldtype\' => \'varchar\',
  \'minnumber\' => \'1\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '10',
    'disabled' => '0',
    'isomnipotent' => '0',
    'formtext' => '{price}元/月 {pay_type_int}',
    'fieldtype' => 'varchar',
    'minnumber' => '1',
  ),
  'houseallocation' => 
  array (
    'fieldid' => '179',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'houseallocation',
    'name' => '房屋配置',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'box',
    'setting' => 'array (
  \'options\' => \'床|1
热水器|2
洗衣机|3
空调|4
冰箱|5
电视机|6
宽带|7\',
  \'boxtype\' => \'checkbox\',
  \'fieldtype\' => \'varchar\',
  \'minnumber\' => \'1\',
  \'width\' => \'80\',
  \'size\' => \'1\',
  \'defaultvalue\' => \'\',
  \'outputtype\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '11',
    'disabled' => '0',
    'isomnipotent' => '0',
    'options' => '床|1
热水器|2
洗衣机|3
空调|4
冰箱|5
电视机|6
宽带|7',
    'boxtype' => 'checkbox',
    'fieldtype' => 'varchar',
    'minnumber' => '1',
    'width' => '80',
    'size' => '1',
    'defaultvalue' => '',
    'outputtype' => '0',
  ),
  'updatetime' => 
  array (
    'fieldid' => '166',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'updatetime',
    'name' => '更新时间',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'datetime',
    'setting' => 'array (
  \'dateformat\' => \'int\',
  \'format\' => \'Y-m-d H:i:s\',
  \'defaulttype\' => \'1\',
  \'defaultvalue\' => \'\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '64',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '12',
    'disabled' => '0',
    'isomnipotent' => '0',
    'dateformat' => 'int',
    'format' => 'Y-m-d H:i:s',
    'defaulttype' => '1',
    'defaultvalue' => '',
  ),
  'content' => 
  array (
    'fieldid' => '167',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'content',
    'name' => '补充内容',
    'tips' => '',
    'css' => '',
    'minlength' => '1',
    'maxlength' => '999999',
    'pattern' => '',
    'errortips' => '内容不能为空',
    'formtype' => 'editor',
    'setting' => 'array (
  \'toolbar\' => \'basic\',
  \'defaultvalue\' => \'\',
  \'enablekeylink\' => \'1\',
  \'replacenum\' => \'2\',
  \'link_mode\' => \'0\',
  \'enablesaveimage\' => \'1\',
  \'height\' => \'\',
  \'disabled_page\' => \'1\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '1',
    'isposition' => '0',
    'listorder' => '12',
    'disabled' => '0',
    'isomnipotent' => '0',
    'toolbar' => 'basic',
    'defaultvalue' => '',
    'enablekeylink' => '1',
    'replacenum' => '2',
    'link_mode' => '0',
    'enablesaveimage' => '1',
    'height' => '',
    'disabled_page' => '1',
  ),
  'photos' => 
  array (
    'fieldid' => '200',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'photos',
    'name' => '图片',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'images',
    'setting' => 'array (
  \'upload_allowext\' => \'gif|jpg|jpeg|png|bmp\',
  \'isselectimage\' => \'0\',
  \'upload_number\' => \'8\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '13',
    'disabled' => '0',
    'isomnipotent' => '0',
    'upload_allowext' => 'gif|jpg|jpeg|png|bmp',
    'isselectimage' => '0',
    'upload_number' => '8',
  ),
  'contact' => 
  array (
    'fieldid' => '198',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'contact',
    'name' => '联系人',
    'tips' => '',
    'css' => '',
    'minlength' => '1',
    'maxlength' => '20',
    'pattern' => '',
    'errortips' => '请输入联系人',
    'formtype' => 'text',
    'setting' => 'array (
  \'size\' => \'10\',
  \'defaultvalue\' => \'\',
  \'ispassword\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '1',
    'isposition' => '0',
    'listorder' => '14',
    'disabled' => '0',
    'isomnipotent' => '0',
    'size' => '10',
    'defaultvalue' => '',
    'ispassword' => '0',
  ),
  'thumb' => 
  array (
    'fieldid' => '165',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'thumb',
    'name' => '缩略图',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '100',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'image',
    'setting' => 'array (
  \'size\' => \'50\',
  \'defaultvalue\' => \'\',
  \'show_type\' => \'1\',
  \'upload_maxsize\' => \'1024\',
  \'upload_allowext\' => \'jpg|jpeg|gif|png|bmp\',
  \'watermark\' => \'0\',
  \'isselectimage\' => \'1\',
  \'images_width\' => \'\',
  \'images_height\' => \'\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '0',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '1',
    'listorder' => '15',
    'disabled' => '0',
    'isomnipotent' => '0',
    'size' => '50',
    'defaultvalue' => '',
    'show_type' => '1',
    'upload_maxsize' => '1024',
    'upload_allowext' => 'jpg|jpeg|gif|png|bmp',
    'watermark' => '0',
    'isselectimage' => '1',
    'images_width' => '',
    'images_height' => '',
  ),
  'phone' => 
  array (
    'fieldid' => '174',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'phone',
    'name' => '联系电话',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '/^[0-9-]{6,13}$/',
    'errortips' => '请输入联系电话',
    'formtype' => 'text',
    'setting' => 'array (
  \'size\' => \'30\',
  \'defaultvalue\' => \'\',
  \'ispassword\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '1',
    'isposition' => '0',
    'listorder' => '16',
    'disabled' => '0',
    'isomnipotent' => '0',
    'size' => '30',
    'defaultvalue' => '',
    'ispassword' => '0',
  ),
  'inputtime' => 
  array (
    'fieldid' => '163',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'inputtime',
    'name' => '发布时间',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'datetime',
    'setting' => 'array (
  \'fieldtype\' => \'int\',
  \'format\' => \'Y-m-d H:i:s\',
  \'defaulttype\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '0',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '1',
    'listorder' => '17',
    'disabled' => '0',
    'isomnipotent' => '0',
    'fieldtype' => 'int',
    'format' => 'Y-m-d H:i:s',
    'defaulttype' => '0',
  ),
  'relation' => 
  array (
    'fieldid' => '164',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'relation',
    'name' => '相关文章',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'omnipotent',
    'setting' => 'array (
  \'formtext\' => \'<input type=\\\'hidden\\\' name=\\\'info[relation]\\\' id=\\\'relation\\\' value=\\\'{FIELD_VALUE}\\\' style=\\\'50\\\' >
<ul class="list-dot" id="relation_text"></ul>
<div>
<input type=\\\'button\\\' value="添加相关" onclick="omnipotent(\\\'selectid\\\',\\\'?m=content&c=content&a=public_relationlist&modelid={MODELID}\\\',\\\'添加相关文章\\\',1)" class="button" style="width:66px;">
<span class="edit_content">
<input type=\\\'button\\\' value="显示已有" onclick="show_relation({MODELID},{ID})" class="button" style="width:66px;">
</span>
</div>\',
  \'fieldtype\' => \'varchar\',
  \'minnumber\' => \'1\',
)',
    'formattribute' => '',
    'unsetgroupids' => '2,6,4,5,1,17,18,7',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '0',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '1',
    'isposition' => '0',
    'listorder' => '17',
    'disabled' => '0',
    'isomnipotent' => '0',
    'formtext' => '<input type=\'hidden\' name=\'info[relation]\' id=\'relation\' value=\'{FIELD_VALUE}\' style=\'50\' >
<ul class="list-dot" id="relation_text"></ul>
<div>
<input type=\'button\' value="添加相关" onclick="omnipotent(\'selectid\',\'?m=content&c=content&a=public_relationlist&modelid={MODELID}\',\'添加相关文章\',1)" class="button" style="width:66px;">
<span class="edit_content">
<input type=\'button\' value="显示已有" onclick="show_relation({MODELID},{ID})" class="button" style="width:66px;">
</span>
</div>',
    'fieldtype' => 'varchar',
    'minnumber' => '1',
  ),
  'posids' => 
  array (
    'fieldid' => '162',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'posids',
    'name' => '推荐位',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'posid',
    'setting' => 'array (
  \'cols\' => \'4\',
  \'width\' => \'125\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '18',
    'disabled' => '0',
    'isomnipotent' => '0',
    'cols' => '4',
    'width' => '125',
  ),
  'groupids_view' => 
  array (
    'fieldid' => '161',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'groupids_view',
    'name' => '阅读权限',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '100',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'groupid',
    'setting' => 'array (
  \'groupids\' => \'\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '19',
    'disabled' => '0',
    'isomnipotent' => '0',
    'groupids' => '',
  ),
  'islink' => 
  array (
    'fieldid' => '188',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'islink',
    'name' => '转向链接',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'islink',
    'setting' => 'array (
  \'size\' => \'\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '20',
    'disabled' => '0',
    'isomnipotent' => '0',
    'size' => '',
  ),
  'url' => 
  array (
    'fieldid' => '160',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'url',
    'name' => 'URL',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '100',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'text',
    'setting' => '',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '64',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '50',
    'disabled' => '0',
    'isomnipotent' => '0',
  ),
  'listorder' => 
  array (
    'fieldid' => '192',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'listorder',
    'name' => '排序',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '6',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'number',
    'setting' => '',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '64',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '51',
    'disabled' => '0',
    'isomnipotent' => '0',
  ),
  'template' => 
  array (
    'fieldid' => '191',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'template',
    'name' => '内容页模板',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '30',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'template',
    'setting' => 'array (
  \'size\' => \'\',
  \'defaultvalue\' => \'\',
)',
    'formattribute' => '',
    'unsetgroupids' => '-99',
    'unsetroleids' => '-99',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '0',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '53',
    'disabled' => '0',
    'isomnipotent' => '0',
    'size' => '',
    'defaultvalue' => '',
  ),
  'status' => 
  array (
    'fieldid' => '185',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'status',
    'name' => '状态',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '2',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'box',
    'setting' => '',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '64',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '55',
    'disabled' => '0',
    'isomnipotent' => '0',
  ),
  'username' => 
  array (
    'fieldid' => '187',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'username',
    'name' => '用户名',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '20',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'text',
    'setting' => '',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '64',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '98',
    'disabled' => '0',
    'isomnipotent' => '0',
  ),
  'hall' => 
  array (
    'fieldid' => '171',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'hall',
    'name' => '厅',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '99',
    'pattern' => '/^[0-9-]+$/',
    'errortips' => '',
    'formtype' => 'number',
    'setting' => 'array (
  \'minnumber\' => \'0\',
  \'maxnumber\' => \'99\',
  \'decimaldigits\' => \'0\',
  \'size\' => \'5\',
  \'defaultvalue\' => \'\',
  \'rangetype\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '1',
    'listorder' => '100',
    'disabled' => '0',
    'isomnipotent' => '1',
    'minnumber' => '0',
    'maxnumber' => '99',
    'decimaldigits' => '0',
    'size' => '5',
    'defaultvalue' => '',
    'rangetype' => '0',
  ),
  'price' => 
  array (
    'fieldid' => '176',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'price',
    'name' => '租金',
    'tips' => '',
    'css' => '',
    'minlength' => '1',
    'maxlength' => '100000',
    'pattern' => '/^[0-9.-]+$/',
    'errortips' => '',
    'formtype' => 'number',
    'setting' => 'array (
  \'minnumber\' => \'0\',
  \'maxnumber\' => \'100000\',
  \'decimaldigits\' => \'0\',
  \'size\' => \'5\',
  \'defaultvalue\' => \'\',
  \'rangetype\' => \'1\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '1',
    'listorder' => '100',
    'disabled' => '0',
    'isomnipotent' => '1',
    'minnumber' => '0',
    'maxnumber' => '100000',
    'decimaldigits' => '0',
    'size' => '5',
    'defaultvalue' => '',
    'rangetype' => '1',
  ),
  'pay_type_int' => 
  array (
    'fieldid' => '177',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'pay_type_int',
    'name' => '支付类型',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'box',
    'setting' => 'array (
  \'options\' => \'押一付三|1
面议|2
押一付一|3
押一付二|4
押二付一|5
押二付三|6
半年付不押|7
年付不押|8
押一付半年|9\',
  \'boxtype\' => \'select\',
  \'fieldtype\' => \'varchar\',
  \'minnumber\' => \'1\',
  \'width\' => \'100\',
  \'size\' => \'1\',
  \'defaultvalue\' => \'1\',
  \'outputtype\' => \'0\',
  \'filtertype\' => \'1\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '100',
    'disabled' => '0',
    'isomnipotent' => '1',
    'options' => '押一付三|1
面议|2
押一付一|3
押一付二|4
押二付一|5
押二付三|6
半年付不押|7
年付不押|8
押一付半年|9',
    'boxtype' => 'select',
    'fieldtype' => 'varchar',
    'minnumber' => '1',
    'width' => '100',
    'size' => '1',
    'defaultvalue' => '1',
    'outputtype' => '0',
    'filtertype' => '1',
  ),
  'toward' => 
  array (
    'fieldid' => '178',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'toward',
    'name' => '房间朝向',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'box',
    'setting' => 'array (
  \'options\' => \'选择朝向|
东|1
南|2
西|3
北|4
南北|5
东西|6
东南|7
西南|8
东北|9
西北|10\',
  \'boxtype\' => \'select\',
  \'fieldtype\' => \'varchar\',
  \'minnumber\' => \'1\',
  \'width\' => \'100\',
  \'size\' => \'1\',
  \'defaultvalue\' => \'\',
  \'outputtype\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '100',
    'disabled' => '0',
    'isomnipotent' => '1',
    'options' => '选择朝向|
东|1
南|2
西|3
北|4
南北|5
东西|6
东南|7
西南|8
东北|9
西北|10',
    'boxtype' => 'select',
    'fieldtype' => 'varchar',
    'minnumber' => '1',
    'width' => '100',
    'size' => '1',
    'defaultvalue' => '',
    'outputtype' => '0',
  ),
  'fittype' => 
  array (
    'fieldid' => '180',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'fittype',
    'name' => '装修类型',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'box',
    'setting' => 'array (
  \'options\' => \'毛坯|1
简单装修|2
中等装修|3
精装修|4
豪华装修|5\',
  \'boxtype\' => \'select\',
  \'fieldtype\' => \'varchar\',
  \'minnumber\' => \'1\',
  \'width\' => \'100\',
  \'size\' => \'1\',
  \'defaultvalue\' => \'2\',
  \'outputtype\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '100',
    'disabled' => '0',
    'isomnipotent' => '1',
    'options' => '毛坯|1
简单装修|2
中等装修|3
精装修|4
豪华装修|5',
    'boxtype' => 'select',
    'fieldtype' => 'varchar',
    'minnumber' => '1',
    'width' => '100',
    'size' => '1',
    'defaultvalue' => '2',
    'outputtype' => '0',
  ),
  'objecttype' => 
  array (
    'fieldid' => '181',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'objecttype',
    'name' => '房屋类型',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'box',
    'setting' => 'array (
  \'options\' => \'平房|1
普通住宅|2
商住两用|3
公寓|4
别墅|5
其他|6\',
  \'boxtype\' => \'select\',
  \'fieldtype\' => \'varchar\',
  \'minnumber\' => \'1\',
  \'width\' => \'100\',
  \'size\' => \'1\',
  \'defaultvalue\' => \'2\',
  \'outputtype\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '100',
    'disabled' => '0',
    'isomnipotent' => '1',
    'options' => '平房|1
普通住宅|2
商住两用|3
公寓|4
别墅|5
其他|6',
    'boxtype' => 'select',
    'fieldtype' => 'varchar',
    'minnumber' => '1',
    'width' => '100',
    'size' => '1',
    'defaultvalue' => '2',
    'outputtype' => '0',
  ),
  'area' => 
  array (
    'fieldid' => '183',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'area',
    'name' => '面积',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '10',
    'pattern' => '/^[0-9.-]+$/',
    'errortips' => '',
    'formtype' => 'text',
    'setting' => 'array (
  \'size\' => \'10\',
  \'defaultvalue\' => \'\',
  \'ispassword\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '1',
    'isposition' => '0',
    'listorder' => '100',
    'disabled' => '0',
    'isomnipotent' => '1',
    'size' => '10',
    'defaultvalue' => '',
    'ispassword' => '0',
  ),
  'bedroom' => 
  array (
    'fieldid' => '193',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'bedroom',
    'name' => '室',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '99',
    'pattern' => '/^[0-9-]+$/',
    'errortips' => '',
    'formtype' => 'number',
    'setting' => 'array (
  \'minnumber\' => \'0\',
  \'maxnumber\' => \'99\',
  \'decimaldigits\' => \'0\',
  \'size\' => \'5\',
  \'defaultvalue\' => \'\',
  \'rangetype\' => \'1\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '1',
    'listorder' => '100',
    'disabled' => '0',
    'isomnipotent' => '1',
    'minnumber' => '0',
    'maxnumber' => '99',
    'decimaldigits' => '0',
    'size' => '5',
    'defaultvalue' => '',
    'rangetype' => '1',
  ),
  'floor' => 
  array (
    'fieldid' => '194',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'floor',
    'name' => '所在楼层',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '100',
    'pattern' => '/^[0-9-]+$/',
    'errortips' => '',
    'formtype' => 'text',
    'setting' => 'array (
  \'size\' => \'5\',
  \'defaultvalue\' => \'\',
  \'ispassword\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '1',
    'isposition' => '0',
    'listorder' => '100',
    'disabled' => '0',
    'isomnipotent' => '1',
    'size' => '5',
    'defaultvalue' => '',
    'ispassword' => '0',
  ),
  'floors' => 
  array (
    'fieldid' => '195',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'floors',
    'name' => '总楼层',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '100',
    'pattern' => '/^[0-9-]+$/',
    'errortips' => '',
    'formtype' => 'text',
    'setting' => 'array (
  \'size\' => \'5\',
  \'defaultvalue\' => \'\',
  \'ispassword\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '1',
    'isposition' => '0',
    'listorder' => '100',
    'disabled' => '0',
    'isomnipotent' => '1',
    'size' => '5',
    'defaultvalue' => '',
    'ispassword' => '0',
  ),
  'bathroom' => 
  array (
    'fieldid' => '196',
    'modelid' => '14',
    'siteid' => '1',
    'field' => 'bathroom',
    'name' => '卫',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '99',
    'pattern' => '/^[0-9-]+$/',
    'errortips' => '',
    'formtype' => 'number',
    'setting' => 'array (
  \'minnumber\' => \'0\',
  \'maxnumber\' => \'99\',
  \'decimaldigits\' => \'0\',
  \'size\' => \'5\',
  \'defaultvalue\' => \'\',
  \'rangetype\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '1',
    'listorder' => '100',
    'disabled' => '0',
    'isomnipotent' => '1',
    'minnumber' => '0',
    'maxnumber' => '99',
    'decimaldigits' => '0',
    'size' => '5',
    'defaultvalue' => '',
    'rangetype' => '0',
  ),
);
?>