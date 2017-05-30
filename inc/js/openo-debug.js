"use strict";

var id;
var title;

$(".openo-tab").click(function () {
    $(".openo-tab").removeClass('active');
    $(this).addClass('active');

    var tab_id = $(this).data('tab');

    $('.openo-main').removeClass('active');
    $(".openo-main[data-tab=" + tab_id + "]").addClass('active');
});

$(".item-open").click(function () {
    $(this).prev().toggleClass('active');
});

$('.openo-btn').click(function () {
    id = $(this).data('id');
    title = $(this).data('title');

    $("#modal-text").text(title);
    console.log(id);
    $('.modal').addClass('active');
});

$('button.button').click(function () {
    //post_to_url("/wp-json/web/booking/create", { booking_id: id }, 'post');
    $.ajax({
        method: "POST",
        url: url_book,
        data: { booking_id: id }
    }).done(function (msg) {
        console.log(msg);

        $('#gratz-title').text(title);
        $('.openo-sections').hide();
        $('.openo-bg').hide();
        $('.openo-gratz').show();
        $('.modal').removeClass('active');
    }).fail(function (msg) {
        console.log("Error: " + msg);
    });
});

$('.modal-clsbtn').click(function () {
    $('.modal').removeClass('active');
});

$('.gratz-close').click(function () {
    $('.openo-sections').show();
    $('.openo-bg').show();
    $('.openo-gratz').hide();
});

$('.gratz-invite').click(function () {
    $('.gratz').hide();
    $('.invite').show();
});

$('.invite-btn').click(function () {
    $('.invite').hide();
    $('.invite-conf').show();
});

$('.conf-btn').click(function () {
    var email = $('.invite-inp-email').val();
    var name = $('.invite-inp-name').val();
    var text = $('.invite-inp-text').val();

    $.ajax({
        method: "POST",
        url: url_email,
        data: {
            name: name,
            email: email,
            text: text
        }
    }).done(function (msg) {
        $('.invite-conf').hide();
        $('.invite-done').show();
    }).fail(function () {
        alert('Error');
    });
});

function post_to_url(path, params, method) {
    method = method || "post";

    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    for (var key in params) {
        if (params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);

            form.appendChild(hiddenField);
        }
    }

    document.body.appendChild(form);
    form.submit();
}