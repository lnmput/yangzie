$(function () {
    var body = $("body");
    var dialog = $('#dialog');
    var dialog_snapshoot = dialog.find('.modal-content').html();
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover({container: 'body'});
    body.on("click", ".dialog-trigger", function () {
        var url = $(this).attr('data-remote-url');
        var size = $(this).attr('data-modal-size');
        if (typeof size !== typeof undefined && size !== false) {
            dialog.find('.modal-dialog').addClass('modal-' + size);
        }
        console.log(url);
        dialog.modal({'remote': url, backdrop: 'static'});
    });

    dialog.on('hidden.bs.modal', function (e) {
        $(this).find('.modal-dialog').attr('class', 'modal-dialog');
        $(this).removeData('bs.modal');
        $(this).find('.modal-content').html(dialog_snapshoot);
    });

    body.on("submit", "form", function (event) {
        $(event.target).find('button.once-click').attr('disabled', true).html('正在执行...');
    });

});