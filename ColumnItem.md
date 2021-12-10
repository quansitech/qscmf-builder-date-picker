## ColumnItem组件列表
+ [Time](https://github.com/quansitech/qscmf-builder-date-picker/blob/master/ColumnItem.md#Time)


**若在ListBuilder中使用，通过ColumnItem的value来修改组件属性值**

**若在SubTableBuilder中使用，通过form_item的options来修改组件属性值**

### Time
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

通过修改form_item的options来修改选择器的属性，设置说明如下

| 参数 | 说明 | 类型 | 默认值 |
|:---------- |:----------|:----------|:----------|
| placeholder | 输入框提示文字 | string | 请选择时间 |
