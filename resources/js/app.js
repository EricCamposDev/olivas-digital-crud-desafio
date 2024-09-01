import './bootstrap';

$(function() {

    $(".phone-mask").mask('(99) 99999-9999')

    const phoneInputScope = $(".phone-inputs").html()
    $(".new-phone-input").click(function() {
        $(".phone-inputs").append(phoneInputScope)
        $(".phone-mask").mask('(99) 99999-9999')

        $('.phone-inputs').each(function() {
            $(this).find('.delete-phone-input').click(function() {
                $(this).parent().remove()
            })
        })
    })


})