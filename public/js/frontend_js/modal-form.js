function setModalMaxHeight(element) {
    this.$element = $(element);
    this.$content = this.$element.find('.modal-content');
    let borderWidth = this.$content.outerHeight() - this.$content.innerHeight();
    let dialogMargin = $(window).width() < 768 ? 20 : 60;
    let contentHeight = $(window).height() - (dialogMargin + borderWidth);
    let headerHeight = this.$element.find('.modal-header').outerHeight() || 0;
    let footerHeight = this.$element.find('.modal-footer').outerHeight() || 0;
    let maxHeight = contentHeight - (headerHeight + footerHeight);

    this.$content.css({
        'overflow': 'hidden'
    });

    this.$element
        .find('.modal-body').css({
        'max-height': maxHeight,
        'overflow-y': 'auto'
    });
}

$(document).ready(function () {
    setModalMaxHeight($('#modalForm'))
    // Align modal when user resize the window
    $(window).on("resize", function () {
        $(".modal:visible").each(setModalMaxHeight($('#modalForm')));
    });
    //$('#modalForm').modal('show');
});


$('#modalForm').on('show.bs.modal', function () {
    $(this).show();
    setModalMaxHeight(this);
});
