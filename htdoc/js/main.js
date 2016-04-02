$(document).ready(function() {

    $('#calendar').fullCalendar({
        // put your options and callbacks here
    })

    /* Set all views to 'none' */
    $('#notepad_view').css({
        'display': 'none'
    });
    // $('#calendar_view').css({
    //     'display': 'none'
    // });
    $('#reminder_view').css({
        'display': 'none'
    });
    $('#file_manager_view').css({
        'display': 'none'
    });
    $('#chat_view').css({
        'display': 'none'
    });
    $('#admin_view').css({
        'display': 'none'
    });
});

/* Close and open of notepad */
$('#notepad_close').click(function() {
    $('#notepad_view').toggle();
});
$('#notepad_open').click(function() {
    $('#notepad_view').toggle();
});

/* Close and open of calendar */
$('#calendar_close').click(function() {
    $('#calendar_view').toggle();
});
$('#calendar_open').click(function() {
    $('#calendar_view').toggle();
});

/* Close and open of reminder */
$('#reminder_close').click(function() {
    $('#reminder_view').toggle();
});
$('#reminder_open').click(function() {
    $('#reminder_view').toggle();
});

/* Close and open of file mang. */
$('#file_close').click(function() {
    $('#file_manager_view').toggle();
});
$('#file_open').click(function() {
    $('#file_manager_view').toggle();
});
$('#settings').click(function() {
	$('#list_view').toggle().empty().append('<a href="logout.php"><li><i class="fa fa-sign-out"></i>&nbsp;Logout</li></a>');
});

$('#events').click(function() {
	$('#list_view').toggle();
});
/* Close and open of file mang. */
$('#chat_close').click(function() {
    $('#chat_view').toggle();
});
$('#chat_open').click(function() {
    $('#chat_view').toggle();
});
$('#admin_close').click(function() {
    $('#admin_view').toggle();
});
$('#admin_open').click(function() {
    $('#admin_view').toggle();
});

function grabNewEvents() {

    event.preventDefault(); //Hijack event from PHP to refrain page reload. 

    var options = new Object();
    options.dataType = 'text';
    options.type = 'get';
    options.success = function(response) {
    //if AJAX Request is a success

    $('#list_view').empty().append(response)

  }; // END OF AJAX SUCCESS
  options.url = 'events.php';

    //PERFORM REQUEST
  $.ajax(options);
} //END OF FORM SUBMISSION

