$(function () {
    var body = $("body");
    var dialog = $('#dialog');
    body.on("click", ".dialog-trigger", function () {
        var url = $(this).attr('data-remote-url');
        var size = $(this).attr('data-modal-size');
        if (typeof size !== typeof undefined && size !== false) {
            dialog.find('.modal-dialog').addClass('modal-' + size);
        }
        dialog.modal({'remote': url, backdrop: 'static'});
    });
});