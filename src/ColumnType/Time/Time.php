<?php
namespace ColumnItem\DatePicker\Time;


use Illuminate\Support\Str;
use Qscmf\Builder\ButtonType\Save\TargetFormTrait;

class Time extends \Qscmf\Builder\ColumnType\ColumnType implements \Qscmf\Builder\ColumnType\EditableInterface
{
    use TargetFormTrait;

    public function build(&$option, $data, $listBuilder){
        return '<span title="' . $data[$option['name']] . '" >' . $data[$option['name']] . '</span>';
    }

    public function editBuild(&$option, $data, $listBuilder){
        $class = $this->getSaveTargetForm();

        $opt = array_merge([
            'name' => $option['name'],
            'defaultValue' => $data[$option['name']],
        ], $option['value'] ?: []);

        unset($opt['format']);

        $option['extra_class'] && $opt['className'] = $option['extra_class'];

        $view = new \Think\View();
        $view->assign('class', $class);
        $view->assign('extra_arr', $option['extra_arr']);
        $view->assign('gid', Str::uuid());
        $view->assign('opt', $opt);

        return $view->fetch(__DIR__ . '/time.html');
    }

    protected function formatTimeVal($value, $format = null){
        list($hour, $min, $sec) = explode(':', $value);
        $timestamp = mktime($hour?:0, $min?:0, $sec?:0);
        return date($format?:"H:i:s", $timestamp);
    }
}