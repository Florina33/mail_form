$(document).ready(function () {

    /* Форма обратной связи */

    $('#submitForm').submit(function (event) {
        // event.preventDefault(); 

        // console.log( $(this).serialize() );
        alert( "serialize " + $('#submitForm').serialize() );

        var nameForm = $("#name_form").val();
        console.log(nameForm);
        // alert(nameForm);

        var emailForm = $("#email_form").val();
        console.log(emailForm);

        // var countryForm = $("#country_form").find('option:selected');
        var countryFormValue = $("#country_form").find('option:selected').val();
        var countryFormText = $("#country_form").find('option:selected').text();
        console.log(countryFormText);

        var phoneForm = $("#phone_form").val();
        console.log(phoneForm);

        var companyForm = $("#company_form").val();
        console.log(companyForm);

        var siteForm = $("#site_form").val();
        console.log(siteForm);

        var textForm = $("#text_form").val();
        console.log(textForm);

        // console.log($.ajax);

        var ajaxObj = {
            url: './send_mail.php',
            type: 'post',
            data: $("#submitForm").serialize(),
            // data: { 
            //     getName: nameForm, 
            //     getEmail: emailForm, 
            //     getCountryValue: countryFormValue, 
            //     getCountryText: countryFormText, 
            //     getPhone: phoneForm, 
            //     getCompany: companyForm, 
            //     getSite: siteForm, 
            //     getText: textForm 
            // },
            success: function (response) {
                alert(response);               
                // если Сообщение удачно отправлено!
                if (response) {
                    // $('.form_result').html("Ваше сообщение получено, спасибо!");
                    $('.form_result').text("Ваше сообщение отправлено, спасибо!");
                }
                else {
                    // alert("0000");
                    $('.form_result').text("Ваше сообщение не удалось отправить");
                }
            },
            dataType: 'json' // указывает какого типа будут полушенны данные с пхп в параметр response, по умолч. строка
        }
        $.ajax(ajaxObj);


        event.preventDefault(); // чтоб не перерезагружалась стр.
        return false;
    });


});



