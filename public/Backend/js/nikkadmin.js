(function ( $ ) {
    $.fn.nikkAdminNav = function( options ) {
        var settings = $.extend({
            // These are the defaults.
            color: "#556b2f",
            backgroundColor: "white"
        }, options );

        return this.css({
            color: settings.color,
            backgroundColor: settings.backgroundColor
        });
    };
}( jQuery ));

// Core Layout
;ADMINLAYOUT = {
    navbarWithAside: function() {
        var navbarTrigger = $(".sidebarToggle"), navbarLayout = $(".adminLayout");
        navbarTrigger.on('click', function(){
            $(this).toggleClass('active');
            var aside = $(this).attr('data-target');
            var layout = $(this).attr('data-toggle');
            $(aside).toggleClass(layout);
        });
        function isWidth (){
            if($(window).width() < 992) {
                navbarTrigger.removeClass('active');
                navbarLayout.addClass('layout-full');
            } else {
                navbarTrigger.addClass('active');
                navbarLayout.removeClass('layout-full');
            }
        }
        isWidth();
        $(window).resize(function(){
            isWidth();
        });
    },
    fullScreenView: function (trigger) {
        $(trigger).click(function(){
            var target = $("[data-screen='" + $(this).attr('data-target') +"']");
            target.toggleClass("fullScreenView");
        });
    },
    materializeInputs: function() {
        setTimeout(function () {
            // alert("ff");
            $('input.mt-input:-webkit-autofill')
            .parent(".mt-form-group").find(".mt-label").addClass("active");
        }, 500);

        $(".mt-input")
        .click(function(){
            $(this).focus();
        })
        .focus(function(){
            $(this).parent(".mt-form-group").find(".mt-label").addClass("active");
        })
        .focusout(function(ifActive){
            var ifActive = ($(this).val());
            if (ifActive === "") {
                $(this).parent(".mt-form-group").find(".mt-label").removeClass("active");
            }
        });
    }
}

$(document).ready(function(){
    ADMINLAYOUT.navbarWithAside();
    ADMINLAYOUT.fullScreenView(".fullScreenTrigger");
    ADMINLAYOUT.materializeInputs();


    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $(function () {
        $('[data-toggle="popover"]').popover()
    });
});


// TODO: Working
$(document).on('load', function() {
    $('.js-selectAll').change(function () {
        var selectGroup = $(this).attr('data-group');
        alert(selectGroup);
        $('data-group['+ selectGroup +']').prop('checked', this.checked);
    });

    $('.selectedId').change(function () {
        var check = ($('.selectedId').filter(":checked").length == $('.selectedId').length);
        $('#selectall').prop("checked", check);
    });
})
