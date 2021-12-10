## ColumnItem组件列表

+ [AntdTime](https://github.com/quansitech/qscmf-builder-date-picker/blob/master/ColumnItem.md#AntdTime)


***

**若在ListBuilder中使用，通过column的value来修改组件属性值**
```php
(new \Qscmf\Builder\ListBuilder())
->addTableColumn('start_time', '开始时间', 'antd_time', ['placeholder' => '开始时间','disabled' => false], true);

```

**若在SubTableBuilder中使用，通过form_item的options来修改组件属性值**
```php
(new \Qscmf\Builder\SubTableBuilder())
->addFormItem('start_time', 'antd_time',['placeholder' => '开始时间','disabled' => false]);
```

***


### AntdTime
```label
时间选择器
```

```php
// 最简单的时间选择器
$subB = new SubTableBuilder();
$subB->addTableHeader('时间', '30%');
$subB->addFormItem('start_time', 'time');

$builder = new \Qscmf\Builder\ListBuilder();
$builder->addTableColumn('start_time', '开始时间', 'time', '', true);
```

设置说明如下，其余参考通用配置属性。

| 参数 | 说明 | 类型 | 默认值 |
|:---------- |:----------|:----------|:----------|
| placeholder | 输入框提示文字 | string | 请选择时间 |
