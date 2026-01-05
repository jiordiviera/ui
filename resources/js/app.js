
import './utils/clipboard'
import datepicker from './ui/date-picker'


document.addEventListener('alpine:init', () => {

    Alpine.data('datePicker', datepicker);

});
