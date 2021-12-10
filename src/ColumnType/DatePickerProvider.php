<?php
namespace ColumnItem\DatePicker;

use Bootstrap\Provider;
use Bootstrap\RegisterContainer;
use ColumnItem\DatePicker\AntdTime\AntdTime;

class DatePickerProvider implements Provider {

    public function register(){

        RegisterContainer::registerListColumnType('antd_time', AntdTime::class);

    }
}