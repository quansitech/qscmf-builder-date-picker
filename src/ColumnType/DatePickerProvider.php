<?php
namespace ColumnItem\DatePicker;

use Bootstrap\Provider;
use Bootstrap\RegisterContainer;
use ColumnItem\DatePicker\Time\Time;

class DatePickerProvider implements Provider {

    public function register(){

        RegisterContainer::registerListColumnType('time', Time::class);

    }
}