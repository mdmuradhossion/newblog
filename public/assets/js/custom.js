function success(msg) {
    var message = '<div id="toast-container" class="toast-top-right">\n' +
        '        <div class="toast toast-success" aria-live="polite">\n' +
        '            <button type="button" class="toast-close-button" role="button">×</button>\n' +
        '            <div class="toast-message">' + msg + '</div>\n' +
        '        </div>\n' +
        '    </div>';

    setTimeout(function () {
        $("#toast-container").fadeOut();
    }, 2000);
    return message;
}

function error(msg) {
    var message = '<div id="toast-container" class="toast-top-right">\n' +
        '        <div class="toast toast-error" aria-live="polite">\n' +
        '            <button type="button" class="toast-close-button" role="button">×</button>\n' +
        '            <div class="toast-message">' + msg + '</div>\n' +
        '        </div>\n' +
        '    </div>';

    setTimeout(function () {
        $("#toast-container").fadeOut();
    }, 2000);
    return message;
}

function timeOut() {
    setTimeout(function () {
        $("#toast-container").fadeOut();
    }, 2000);
}

$(document).on('submit', '#submitForm', function (e) {
    e.preventDefault();

    $.ajax({
        method: "POST",
        url: $(this).prop('action'),
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function () {
            $('#btnSubmit').html('<i class="fa fa-spinner fa-spin"></i>');
        },
        success: function (response) {
            if (response.success) {
                $('div.flash-message').html(success(response.success));
                $('#submitForm')[0].reset();
                $("#reload").load(location.href + " #reload");
            }
            if (response.error) {
                $('div.flash-message').html(error(response.error));
            }
            $('#btnSubmit').html('Submit');


        }
    });
});

$(document).ready(function() {
    $("#txtEditor").Editor();


    'use-strict';

    //Example 2
    $('#filer_example2').filer({
        limit: 3,
        maxSize: 3,
        extensions: ['jpg', 'jpeg', 'png', 'gif', 'psd'],
        changeInput: true,
        showThumbs: true,
        addMore: true
    });

    //Example 1
    $("#filer_example1").filer({
        limit: null,
        maxSize: null,
        extensions: null,
        changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Drag & Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn btn btn-custom">Browse Files</a></div></div>',
        showThumbs: true,
        theme: "dragdropbox",
        templates: {
            box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
            item: '<li class="jFiler-item">\
                        <div class="jFiler-item-container">\
                            <div class="jFiler-item-inner">\
                                <div class="jFiler-item-thumb">\
                                    <div class="jFiler-item-status"></div>\
                                    <div class="jFiler-item-info">\
                                        <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        <span class="jFiler-item-others">{{fi-size2}}</span>\
                                    </div>\
                                    {{fi-image}}\
                                </div>\
                                <div class="jFiler-item-assets jFiler-row">\
                                    <ul class="list-inline pull-left">\
                                        <li>{{fi-progressBar}}</li>\
                                    </ul>\
                                    <ul class="list-inline pull-right">\
                                        <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                    </ul>\
                                </div>\
                            </div>\
                        </div>\
                    </li>',

            progressBar: '<div class="bar"></div>',
            itemAppendToEnd: false,
            removeConfirmation: true,
            _selectors: {
                list: '.jFiler-items-list',
                item: '.jFiler-item',
                progressBar: '.bar',
                remove: '.jFiler-item-trash-action'
            }
        },
        dragDrop: {
            dragEnter: null,
            dragLeave: null,
            drop: null,
        },
        uploadFile: {
            url: "assets/plugins/jquery.filer/html/upload.html",
            data: null,
            type: 'POST',
            enctype: 'multipart/form-data',
            beforeSend: function() {},

            success: function(data, el) {
                var parent = el.find(".jFiler-jProgressBar").parent();
                el.find(".jFiler-jProgressBar").fadeOut("slow", function() {
                    $("<div class=\"jFiler-item-others text-success\"><i class=\"fas fa-plus\"></i> Success</div>")
                        .hide().appendTo(parent).fadeIn("slow");
                });
            },
            error: function(el) {
                var parent = el.find(".jFiler-jProgressBar").parent();
                el.find(".jFiler-jProgressBar").fadeOut("slow", function() {
                    // $("<div class=\"jFiler-item-others text-error\"><i class=\"fas fa-minus\"></i> Error</div>")
                    $("<div class=\"jFiler-item-others text-success\"><i class=\"fas fa-plus\"></i> Success</div>")
                        .hide().appendTo(parent).fadeIn("slow");
                });
            },
            statusCode: null,
            onProgress: null,
            onComplete: null
        },
        addMore: false,
        clipBoardPaste: true,
        excludeName: null,
        beforeRender: null,
        afterRender: null,
        beforeShow: null,
        beforeSelect: null,
        onSelect: null,
        afterShow: null,
        onRemove: function(itemEl, file, id, listEl, boxEl, newInputEl, inputEl) {
            var file = file.name;
            $.post('assets/plugins/jquery.filer/html/remove_file.html', {
                file: file
            });
        },
        onEmpty: null,
        options: null,
        captions: {
            button: "Choose Files",
            feedback: "Choose files To Upload",
            feedback2: "files were chosen",
            drop: "Drop file here to Upload",
            removeConfirmation: "Are you sure you want to remove this file?",
            errors: {
                filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
                filesType: "Only Images are allowed to be uploaded.",
                filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-maxSize}} MB.",
                filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB."
            }
        }
    });
});

$(document).on('submit', '#galleryFile', function (e) {
    e.preventDefault();
    $.ajax({
        method: "POST",
        url: $(this).prop('action'),
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function () {
            $('#messUplode').html('<i class="fa fa-spinner fa-spin"></i>');
        },
        success: function (response) {
            if (response.success) {
                $('div.flash-message').html(success(response.success));
                $('#galleryFile')[0].reset();
                $("#reload").load(location.href + " #reload");
                $.ajax({
                    method: "GET",
                    url: 'gallery-image',
                    success: function (response) {
                        $('#galleryImageShow').html(response);
                    }
                });
            }
            if (response.error) {
                $('div.flash-message').html(error(response.error));
            }
            $('#messUplode').html('');
        }
    });
});

function choseFile(elem){
    var id = $(elem).attr("id");
    var ext = id+'_url';
    var val = id+'_val';
    var image = id+'_img';

    $('.bd-example-modal-lg').modal('show');

    $.ajax({
        method: "GET",
        url: 'gallery-image',
        beforeSend: function () {
            $('#messUplode').html('<i class="fa fa-spinner fa-spin"></i>');
        },
        success: function (response) {
            $('#galleryImageShow').html(response);
            $('#messUplode').html('');
        }
    });

    $('#galleryImageForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: $(this).prop('action'),
            data: $(this).serialize(),
            beforeSend: function () {
                $('#subBtn').html('<i class="fa fa-spinner fa-spin"></i>');
            },
            success: function( response ) {
                $('#'+ext).val(response.extention);
                $('#'+val).val(response.id);
                $('#'+image).html(response.image);
                $("#galleryImageForm")[0].reset();
                ext = '';
                val = '';
                image ='';
                $('.bd-example-modal-lg').modal('hide');
                $('#subBtn').html('Add');
            }
        });
    });
}


