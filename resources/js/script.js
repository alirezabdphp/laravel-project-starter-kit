(function($) {
    "use strict"; // Start of use strict

    $('.select2').select2();

    $("#dataTable1").DataTable();

    $('.make-slug').on('input', function (e) {
        e.preventDefault();
        var target = $(this).data('slug');
        if (target) {
            $(target).val($(this).val().toLowerCase().replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-'));
        }
    });

    $('.form-control').on('input', function (e) {
        e.preventDefault();
        if($(this).hasClass('is-invalid')){
           $(this).removeClass('is-invalid');
           $(this).parent().find('.error').fadeOut();
        }
    });

    // $('.copy-pay-url').on('click', function (e) {
    //     var target_url = document.getElementById($(this).data('uuid'));
    //     target_url.select();
    //     target_url.setSelectionRange(0, 99999)
    //     document.execCommand("copy");
    //     toastr["success"]("URL Copied to clipboard");
    // });



    $('.table').find('td').addClass('align-middle');

    $(document).ready(function () {
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "debug": true,
            "positionClass": "toast-bottom-right",
            "newestOnTop": false,
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "2000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        if ($("#toastrType").val() == '')
        {
            var type = 'success';
        } else {
            var type = $("#toastrType").val();
        }
        var toastrMessage = $("#toastrMessage").val();
        switch (type) {
            case 'info':
                toastr["info"](toastrMessage);
                break;

            case 'warning':
                toastr["warning"](toastrMessage);
                break;

            case 'success':
                toastr["success"](toastrMessage);
                break;

            case 'error':
                toastr["error"](toastrMessage);
                break;
        }
    });

    $.fn.confirmDelete = function (formId) {
        swal({
            title: "Are you really want to delete this ?",
            text: "All of the following objects and their related items will be deleted",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                formId.submit();
            }
        });
    };

    $.fn.confirm = function (url) {
        swal({
            title: "Are you sure?",
            text: "To change status",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                window.location.replace(url);
            }
        });
    };

})(jQuery); // End of use strict

