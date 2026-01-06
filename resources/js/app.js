
import './utils/clipboard'
import datepicker from './ui/date-picker'
import accordion from './ui/accordion';
import carousel from './ui/carousel'
import commandPalette from './ui/command-palette'


document.addEventListener('alpine:init', () => {

    Alpine.data('datePicker', datepicker);
    Alpine.data('accordion', accordion);
    Alpine.data('carousel', carousel);
    Alpine.data('commandPalette', commandPalette)
});
