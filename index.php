<?php
// Подключение к БД
include './connectToDb.php';
?>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap&subset=cyrillic" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./css/style.css">

        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body>

        <div class="content main-page">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Modal</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog main-modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Make Jooby a part of your business. Let its virtues work for you.</h4>
                    <h5>Contact us to get the partnersship provision.</h5>
                    
                    <div id="form_result"></div>

                    <form id="submitForm" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6 required">
                                <input type="text" class="form-control" name="name_form" id="name_form" placeholder="Name" required>
                            </div>
                            <div class="form-group col-md-6 required">
                                <input type="email" class="form-control" name="email_form" id="email_form" placeholder="E-mail" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6 required">
                                <select name="country_form" id="country_form" class="form-control" required>
                                    <option selected hidden value="">Choose country</option>
                                    <option value="1" name="Азербайджан">Азербайджан</option>
                                    <option value="2" name="Армения">Армения</option>
                                    <option value="3" name="Белорусь">Белорусь</option>
                                    <option value="4" name="Казахстан">Казахстан</option>
                                    <option value="5" name="Киргизия">Киргизия</option>
                                    <option value="6" name="Молдова">Молдова</option>
                                    <option value="7" name="Республика">Республика</option>
                                    <option value="8" name="Россия">Россия</option>
                                    <option value="9" name="Таджикистан">Таджикистан</option>
                                    <option value="10" name="Туркменистан">Туркменистан</option>
                                    <option value="11" name="Узбекистан">Узбекистан</option>
                                    <option value="12" name="Украина">Украина</option>

                                    <option value="13" name="Франция">Франция</option>
                                    <option value="14" name="Англия">Англия</option>
                                    <option value="15" name="Испания">Испания</option>
                                    <option value="16" name="Италия">Италия</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6 required">
                                <input type="text" class="form-control" name="phone_form" id="phone_form" placeholder="Phone" required>
                            </div>
                            
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="company_form" id="company_form" placeholder="Company">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="site_form" id="site_form" placeholder="Site">
                            </div>
                        </div>

                        <div class="form-group textarea-wrap">
                            <textarea class="form-control" name="text_form" id="text_form" rows="3" placeholder="Type your message..."></textarea>
                        </div>

                        <div class="mark_form">* - Required fields</div>

                        <div class="btn_wrap">
                            <button id="submitForm" type="submit" class="btn btn-primary submit">Send</button>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>

        </div>
   
        <script src="./js/my_script.js" type="text/javascript"></script>
    </body>
</html>