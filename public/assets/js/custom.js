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

                if ( response.url !== undefined ){
                    window.location.replace(response.url);
                }
            }
            if (response.error) {
                $('div.flash-message').html(error(response.error));
            }
            $('#btnSubmit').html('Submit');


        }
    });
});

// $(document).ready(function() {
//
// });


var dropzone = new Dropzone('#file-upload', {
    previewTemplate: document.querySelector('#preview-template').innerHTML,
    parallelUploads: 3,
    thumbnailHeight: 150,
    thumbnailWidth: 150,
    maxFilesize: 5,
    filesizeBase: 1500,
    thumbnail: function (file, dataUrl) {
        if (file.previewElement) {
            file.previewElement.classList.remove("dz-file-preview");
            var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
            for (var i = 0; i < images.length; i++) {
                var thumbnailElement = images[i];
                thumbnailElement.alt = file.name;
                thumbnailElement.src = dataUrl;
            }
            setTimeout(function () {
                file.previewElement.classList.add("dz-image-preview");
            }, 1);
        }
    }
});

var minSteps = 6,
    maxSteps = 60,
    timeBetweenSteps = 100,
    bytesPerStep = 100000;

dropzone.uploadFiles = function (files) {
    var self = this;

    for (var i = 0; i < files.length; i++) {

        var file = files[i];
        totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

        for (var step = 0; step < totalSteps; step++) {
            var duration = timeBetweenSteps * (step + 1);
            setTimeout(function (file, totalSteps, step) {
                return function () {
                    file.upload = {
                        progress: 100 * (step + 1) / totalSteps,
                        total: file.size,
                        bytesSent: (step + 1) * file.size / totalSteps
                    };

                    self.emit('uploadprogress', file, file.upload.progress, file.upload
                        .bytesSent);
                    if (file.upload.progress == 100) {
                        file.status = Dropzone.SUCCESS;
                        self.emit("success", file, 'success', null);
                        self.emit("complete", file);
                        self.processQueue();
                    }
                };
            }(file, totalSteps, step), duration);
        }
    }
}

// $('#tag').tagsinput('add', 'some tag');

$('input').tagsinput({
    source: function(query) {
        return $.getJSON('citynames.json');
    }
});


