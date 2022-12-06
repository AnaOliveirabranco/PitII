$(document).ready(function () {
    function onScrollInit(items, trigger) {
        items.each(function () {
            var osElement = $(this),
                osAnimationClass = osElement.attr('data-os-animation'),
                osAnimationDelay = osElement.attr('data-os-animation-delay');
            osElement.css({
                '-webkit-animation-delay': osAnimationDelay,
                '-moz-animation-delay': osAnimationDelay,
                'animation-delay': osAnimationDelay
            });
            var osTrigger = (trigger) ? trigger : osElement;
            osTrigger.waypoint(function () {
                osElement.addClass('animated').addClass(osAnimationClass);
            }, {
                triggerOnce: true,
                offset: '90%'
            });
        });
    }
    onScrollInit($('.way-animation'));
    var content = '';
    var title = '';
    $('.linkModal').on('click', function (e) {
        e.preventDefault();
        content = $(this).parents('.group__item').find('.item-bottom').find('.detalhes').html();
        title = $(this).parents('.group__item').find('.item-top').find('.title').html();
        $('#modal-content').html(content);
        $('#modal-title').html(title);
        $('input[name=assuntoForm]').val($(this).data('assunto'));
    });
    $('.envia-mensagem').on('click', function (e) {
        title = "Envie sua mensagem";
        $('#modal-content').html("");
        $('#modal-title').html(title);
    });
    $('.ligamos-para-voce').on('click', function (e) {
        title = "Ligamos para você";
        $('#modal-content').html("");
        $('#modal-title').html(title);
    });
    $('.scroll-to').on('click', function (event) {
        var target = $($(this).attr('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 500);
        }
    });
    
    window.local = '';
    var startPos;
    var geoSuccess = function (position) {
        startPos = position;
        window.local = '(' + startPos.coords.latitude + ',' + startPos.coords.longitude + ')';
        console.log(window.local);
    };
    var geoError = function (error) {
        console.log('Ocorreu um erro. Erro de código: ' + error.code);
    };
    navigator.geolocation.getCurrentPosition(geoSuccess, geoError);

    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }
    if (getParameterByName('utm_source')) {
        var utm_source = getParameterByName('utm_source');
        Cookies.set('utm_source', utm_source, {
            expires: 7
        });
    } else if (Cookies.get('utm_source')) {
        var utm_source = Cookies.get('utm_source');
    } else {
        var utm_source = 'Desconhecido';
    }
    if (getParameterByName('utm_medium')) {
        var utm_medium = getParameterByName('utm_medium');
        Cookies.set('utm_medium', utm_medium, {
            expires: 7
        });
    } else if (Cookies.get('utm_medium')) {
        var utm_medium = Cookies.get('utm_medium');
    } else {
        var utm_medium = 'Desconhecido';
    }
    if (getParameterByName('utm_term')) {
        var utm_term = getParameterByName('utm_term');
        Cookies.set('utm_term', utm_term, {
            expires: 7
        });
    } else if (Cookies.get('utm_term')) {
        var utm_term = Cookies.get('utm_term');
    } else {
        var utm_term = 'Desconhecido';
    }
    if (getParameterByName('utm_content')) {
        var utm_content = getParameterByName('utm_content');
        Cookies.set('utm_content', utm_content, {
            expires: 7
        });
    } else if (Cookies.get('utm_content')) {
        var utm_content = Cookies.get('utm_content');
    } else {
        var utm_content = 'Desconhecido';
    }
    if (getParameterByName('utm_campaign')) {
        var utm_campaign = getParameterByName('utm_campaign');
        Cookies.set('utm_campaign', utm_campaign, {
            expires: 7
        });
    } else if (Cookies.get('utm_campaign')) {
        var utm_campaign = Cookies.get('utm_campaign');
    } else {
        var utm_campaign = 'Desconhecido';
    }
    var SPMaskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
            onKeyPress: function (val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };
    $('input[name="telefone-1"]').mask(SPMaskBehavior, spOptions);
    $('.form-1').validate({
        showErrors: function (errorMap, errorList) {
            $.each(this.validElements(), function (index, element) {
                var $element = $(element);
                $element.data("title", "").removeClass("error").tooltip("dispose");
            });
            $.each(errorList, function (index, error) {
                var $element = $(error.element);
                $element.tooltip("dispose").data("title", error.message).addClass("error").tooltip();
            });
        },
        submitHandler: function (form) {
            var formData = {
                'asssuntoForm': $('input[name=assuntoForm]').val(),
                'nome': $('input[name=nome-1]').val(),
                'telefone': $('input[name=telefone-1]').val(),
                'email': $('input[name=email-1]').val(),
                'mensagem': $('textarea[name=mensagem-1]').val(),
                'honeypot': $('input[name=honeypot-1]').val(),
                'utm_source': utm_source,
                'utm_medium': utm_medium,
                'utm_campaign': utm_campaign,
            };
            $.ajax({}).done(function (json) {
                if (json.erro !== null) {
                    $.ajax({
                        type: 'POST',
                        url: 'envia.php',
                        data: formData,
                        dataType: 'json',
                        encode: true
                    }).done(function (data) {
                        console.log(formData);
                        if (data.response) {
                            location.href = 'obrigado.php';
                        } else {
                            $('.form-1').html('<div class="alert alert-warning">Houve um problema, tente novamente mais tarde.</div>');
                        }
                    });
                } else {
                    $('.form-1').html('<div class="alert alert-warning">Houve um problema, tente novamente mais tarde.</div>');
                }
            });
        }
    });
});
$(document).on('opened', '.remodal', function () {
    $('.formEnvia').show();
    $('.formEnvia').find('.form-group').removeClass('has-error');
    $('.formEnvia').removeAttr('novalidate');
    $('.formEnvia').find("input[type=text], textarea").val("");
    $(".response").html("");
});
