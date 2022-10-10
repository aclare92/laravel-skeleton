import './bootstrap';
import './components';

$(document).ready(function () {
    //
});

$('body').on('click', '#auth-logout', function (event) {
    event.preventDefault();
    $('#logout-form').submit();
});
