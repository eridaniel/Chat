function GetMessages() {
    $.ajax({
        url: 'get_messages.php',
        type: 'GET',
        success: function (data) {
            $('#chat').html(data);
        }
    });
}

function SendMessage() {
    var user = $('#user').val();
    var message = $('#message').val();

    $.ajax({
        url: 'send_message.php',
        type: 'POST',
        data: { user: user, message: message },
        success: function () {
            $('#message').val('');
            GetMessages();
        }
    });
}

$(document).ready(function () {
    GetMessages();
    setInterval(GetMessages, 3000);
});