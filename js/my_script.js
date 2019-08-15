$(document).ready(function () {

    /* Форма обратной связи */

    $('#submitForm').submit(function (event) {
        // event.preventDefault(); 

        // console.log( $(this).serialize() );
        alert($('#submitForm').serialize() );

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

        var formData = {
            getName: nameForm, 
            getEmail: emailForm, 
            getCountryValue: countryFormValue, 
            getCountryText: countryFormText, 
            getPhone: phoneForm, 
            getCompany: companyForm, 
            getSite: siteForm, 
            getText: textForm 
          };

        // var str = $("#submitForm").serializeArray();
        var str_form = $("#submitForm").serialize();

        var ajaxObj = {
            url: './send_mail.php',
            type: 'post',
            // data: str_form,
            data: formData,
            success: function (response) {
                console.log(response);               
                alert(response);               
                // если Сообщение удачно отправлено!
                if (response != 0) {
                    // $('.form_result').html("Ваше сообщение получено, спасибо!");
                    $('#form_result').text("Ваше сообщение отправлено, спасибо!");
                }
                else {
                    // alert("0000");
                    $('#form_result').text("Ваше сообщение не удалось отправить");
                }
            },
            dataType: 'json' // указывает какого типа будут полушенны данные с пхп в параметр response, по умолч. строка
        }
        $.ajax(ajaxObj);

        $('#submitForm')[0].reset();


        event.preventDefault(); // чтоб не перерезагружалась стр.
        return false;
    });


});



