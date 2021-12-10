<?php
namespace FormItem\DatePicker;

use Bootstrap\Provider;
use Bootstrap\RegisterContainer;
use FormItem\DatePicker\Time\Time;
use FormItem\DatePicker\TimeRange\TimeRange;
use FormItem\DatePicker\DateRange\DateRange;

class DatePickerProvider implements Provider {

    public function register(){
        RegisterContainer::registerFormItem('time', Time::class);
        RegisterContainer::registerFormItem('time_range', TimeRange::class);
        RegisterContainer::registerFormItem('date_range', DateRange::class);
    }
}