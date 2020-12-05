const likes = document.querySelectorAll('.like');

likes.forEach(like => {
    like.addEventListener('click',() =>{
        like.classList.toggle('red');
    })
})


$(document).ready(function(){

    $('#phone').mask('+7-700-000-00-00');

    $('.sign_in').click(function(e){
        e.preventDefault();

        $('input').removeClass('invalid');

        const login = $('input[name="login"]').val()
        const password = $('input[name="password"]').val()

        $.ajax({
            url: '../server/vendor/signin.php',
            type: 'post',
            dataType: 'json',
            data: {
                login,
                password
            },
            success (data){

                if(data.status){
                    document.location.href = 'mainpage.php';
                } else {
                    if (data.type === 1){
                        data.fields.forEach(function (el){
                           $(`input[name="${el}"]`).addClass('invalid');
                        })
                    }

                    $('.error-msg').removeClass('no_active').text(data.message)  ;
                }
            }
        })
    });

    $('.sign_up').click(function(e){
        e.preventDefault();

        $('input').removeClass('invalid');

        const name = $('input[name="name"]').val()
        const login = $('input[name="login_up"]').val()
        const email = $('input[name="email"]').val()
        const password = $('input[name="password_up"]').val()

        $.ajax({
            url: '../server/vendor/signup.php',
            type: 'post',
            dataType: 'json',
            data: {
                name,
                login,
                email,
                password
            },
            success (data){
                if(data.status){
                    document.location.href = 'mainpage.php';
                } else {
                    if (data.type === 1){
                        data.fields.forEach(function (el){
                            $(`input[name="${el}"]`).addClass('invalid');
                        })
                    }

                    $('.error-msg').removeClass('no_active').text(data.message)  ;
                }
            }
        })
    });

$("#contactForm").validate({
    rules: {
        name: "required",
        tel: "required",
        email: {
            required: true,
            email: true
        },
        text: "required"
    },
    message: {
        name: "Пожалуйста введите имя",
        tel: "Пожалуйста введите телефон",
        email: {
            required: "Пожалуйста введите email",
            email: "Вы ввели неверный формат email"
        },
        text: "Пожалуйста введите сообщение"
    },
    errorPlacement: function (error, element){
        error.insertAfter('#invalid-' + element.attr('name'));
    },
    submitHandler: function (form){
        sendAjaxForm('result_form','contactForm','../server/Models/addContactMsgToDatabase.php')
    }
});


function sendAjaxForm(result_form,ajax_form,url){

    const name = $('input[name="name"]').val();
    const tel = $('input[name="tel"]').val();
    const email = $('input[name="email"]').val();
    const text = $('input[name="text"]').val();


    $.ajax({
        url:      url,
        type:     "POST",
        dataType: "json",
        data: {
            name,
            tel,
            email,
            text
        },
        success: function(response) {
            console.log(response);
        },
        error: function(response) {
            $('#result_form').html('Извините, повторите отправку заявки, так как произошёл сбой');
        }
    });
}


});