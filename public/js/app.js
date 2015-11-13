$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(function(){
    $('.ui.dropdown').dropdown();
    $('.ui.checkbox').checkbox();
    $('.ui.accordion').accordion({exclusive: false});
    $('.message .close')
        .on('click', function() {
            $(this)
                .closest('.message')
                .transition('hide')
            ;
        });
    $('.item-browse-menu')
        .popup({
            popup     : '.popup-menu-admin',
            hoverable : true,
            position  : 'bottom left',
            delay     : {
                show: 100,
                hide: 500
            }
        })
    ;

    $('.section-audit-trails').on('click', '.btn-view-log', function(e){
        e.preventDefault();
        $($(this).data('target')).modal('show');
    });
});

$(document).ready(function() {
            
            $("input[type=file]").attr("style", "visibility: hidden;");
            $("input[type=file]").attr("id", "file");
            $("#file").css("position", "absolute");

            $("#file").change(function() {
                $("#uploadFile").val($(this).val());
            });

           $("#upload-button").click(function(e) {
                $("#file").click();
            });
        });