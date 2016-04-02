$(document).ready(function() {

    $('#calendar').fullCalendar({
        // put your options and callbacks here
    })

    /* Set all views to 'none' */
    $('#notepad_view').css({
        'display': 'none'
    });
    $('#calendar_view').css({
        'display': 'none'
    });
    $('#reminder_view').css({
        'display': 'none'
    });
    $('#file_manager_view').css({
        'display': 'none'
    });
});

/* Close and open of notepad */
$('#notepad_close').click(function() {
    $('#notepad_view').css({
        'display': 'none'
    });
});
$('#notepad_open').click(function() {
    $('#notepad_view').css({
        'display': 'block'
    });
});

/* Close and open of calendar */
$('#calendar_close').click(function() {
    $('#calendar_view').css({
        'display': 'none'
    });
});
$('#calendar_open').click(function() {
    $('#calendar_view').css({
        'display': 'block'
    });
});

/* Close and open of reminder */
$('#reminder_close').click(function() {
    $('#reminder_view').css({
        'display': 'none'
    });
});
$('#reminder_open').click(function() {
    $('#reminder_view').css({
        'display': 'block'
    });
});

/* Close and open of file mang. */
$('#file_close').click(function() {
    $('#file_manager_view').css({
        'display': 'none'
    });
});
$('#file_open').click(function() {
    $('#file_manager_view').css({
        'display': 'block'
    });
});
$('#settings').click(function() {
	$('#list_view').toggle().empty().append('<a href="logout.php"><li>Logout</li></a>');
});
