<?php
/* Форма обратной связи  */
?>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>
    <body>

        <div class="content">

            <div class="form_result"></div>

            <form id="submitForm" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="name_form" placeholder="Name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" id="email_form" placeholder="E-mail" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <select id="country_form" class="form-control" required>
                            <!-- <option selected>Choose country</option> -->
                            <option value="1">Азербайджан</option>
                            <option value="2">Армения</option>
                            <option value="3">Белорусь</option>
                            <option value="4">Казахстан</option>
                            <option value="5">Киргизия</option>
                            <option value="6">Молдова</option>
                            <option value="7">Республика</option>
                            <option value="8">Россия</option>
                            <option value="9">Таджикистан</option>
                            <option value="10">Туркменистан</option>
                            <option value="11">Узбекистан</option>
                            <option value="12">Украина</option>

                            <option value="13">Франция</option>
                            <option value="14">Англия</option>
                            <option value="15">Испания</option>
                            <option value="16">Италия</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="phone_form" placeholder="Phone" required>
                    </div>
                    
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="company_form" placeholder="Company">
                    </div>

                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="site_form" placeholder="Site">
                    </div>
                </div>

                <div class="form-group">
                    <textarea class="form-control" id="text_form" rows="3" placeholder="Type your message..."></textarea>
                </div>

                <button id="submitForm" type="submit" class="btn btn-primary submit">Send</button>
            </form>

        </div>
   

        <script src="./js/my_script.js" type="text/javascript"></script>

    </body>
</html>