<?php
namespace Qs\Builder\DatePicker;

use Bootstrap\Provider;
use Bootstrap\RegisterContainer;

class DatePickerProvider implements Provider {

    public function register(){
        RegisterContainer::registerSymLink(WWW_DIR . '/Public/builder-date-picker', __DIR__ . '/../asset/date-picker');
    }
}