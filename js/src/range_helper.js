import moment from 'moment';
import 'moment/locale/zh-cn';

const RangeHelper = {
    resetFormatWithPickerType:(format = null, picker = "date", show_time = false) => {
        if (!format) {
            switch (picker) {
                default:
                    format = show_time ? 'YYYY-MM-DD HH:mm:ss' : 'YYYY-MM-DD';
                    break;
                case "week":
                    format = 'YYYY-wo';
                    break;
                case "month":
                    format = 'YYYY-MM';
                    break;
                case "quarter":
                    format = 'YYYY-\\QQ';
                    break;
                case "year":
                    format = 'YYYY';
                    break;
            }
        }

        if (Array.isArray(format)){
            format = format[0]
        }

        return format;
    },

    initDefaultValue:(defaultValue, format) => {
        return defaultValue.length === 2 ? [moment(defaultValue[0], format), moment(defaultValue[1], format)] : null;
    },
    joinHiddenValueWithSep:(value, valueSeparator) =>{
        return value.join(valueSeparator);
    },

    initHiddenDefaultValue:(defaultValue, format, valueSeparator) =>{
        return defaultValue ? RangeHelper.joinHiddenValueWithSep([defaultValue[0].format(format), defaultValue[1].format(format)], valueSeparator) : null
    },

}
export default RangeHelper;