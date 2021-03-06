## FormItem组件列表
+ [Time](https://github.com/quansitech/qscmf-builder-date-picker/blob/master/FormItem.md#Time)
+ [TimeRange](https://github.com/quansitech/qscmf-builder-date-picker/blob/master/FormItem.md#TimeRange)
+ [DateRange](https://github.com/quansitech/qscmf-builder-date-picker/blob/master/FormItem.md#DateRange)


### Time
```label
时间选择器
```

```php
// 最简单的时间选择器
->addFormItem('time', 'time', '时间')
```

通过修改form_item的options来修改选择器的属性，设置说明如下，其余参考通用配置属性。

| 参数 | 说明 | 类型 | 默认值 |
|:---------- |:----------|:----------|:----------|
| placeholder | 输入框提示文字 | string | 请选择时间 |

### TimeRange
```label
时间范围选择器
```

```php
// 最简单的时间范围选择器
->addFormItem('time_range', 'time_range', '时间范围')
```

通过修改form_item的options来修改选择器的属性，设置说明如下，其余参考通用配置属性。

| 参数 | 说明 | 类型 | 默认值 |
|:---------- |:----------|:----------|:----------|
| valueSeparator | 值分隔符 | string | , |
| order | 始末时间是否自动排序 | boolean | true |


```lebal
valueSeparator 说明
范围选择器的值默认使用,拼接，例如时间范围选择器的值为 05:00:00,06:00:00。
可以通过配置该值来修改拼接符，如该值为 - ，则以上时间范围选择器返回的值为 05:00:00 - 06:00:00。

传值给范围选择器时，拼接符应该一致，否则初始化值为null。
```

```php
->addFormItem('time_range1', 'time_range', '时间范围1') // 返回的值05:00:00,06:00:00
->addFormItem('time_range2', 'time_range', '时间范围2','',["valueSeparator" => " - "]) // 返回的值05:00:00 - 06:00:00
->setFormData(['time_range1'=>'05:00:00,06:00:00','time_range2' => '05:00:00 - 06:00:00'])
```


```lebal
order 说明
当开始时间大于结束时间时，组件默认会互换两个时间的值。

若需要开始时间大于结束时间，则将该值改为false。
```

```php
->addFormItem('time_range', 'time_range', '时间范围','',["order" => false])
->setFormData(['time_range' => '20:00,06:00']) // 表示晚上8点至次日凌晨6点
```


### DateRange
```label
日期范围选择器
```

```php
// 最简单的日期范围选择器
->addFormItem('date_range', 'date_range', '日期范围')
```

通过修改form_item的options来修改选择器的属性，设置说明如下，其余参考通用配置属性。

| 参数 | 说明 | 类型 | 默认值 |
|:---------- |:----------|:----------|:----------|
| picker | 设置选择器类型 | string，可选值 date I week I month I quarter I year | date |
| showTime | 增加时间选择功能 | boolean | false |
| valueSeparator | 值分隔符 | string | , |

```php
->addFormItem('datetime_range', 'date_range', '日期时间范围','',["showTime" => true])
->addFormItem('week_range', 'date_range', '周范围','',["picker" => "week"])
->addFormItem('month_range', 'date_range', '月范围','',["picker" => "month"])
->addFormItem('quarter_range', 'date_range', '季度范围','',["picker" => "quarter"])
->addFormItem('year_range', 'date_range', '年范围','',["picker" => "year"])
```
