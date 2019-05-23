$(function(){
    $('#name').on('keyup blur change', checkValidName);
    $('#age').on('keyup blur change', checkValidAge);
    $('#email').on('keyup blur change', checkValidEmail);
    $('#residence').on('keyup blur change', checkValidPlace);
    $('#submit_button').click(function () {
         if (checkValidName() && checkValidAge() && checkValidEmail() && checkValidPlace()) { 
             $('form').submit();
            }
            })
});

function checkValidName(){
    let name = $('#name').val();
    let reg = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/g;

    if (reg.test(name)) {
        $('#name').addClass('is-valid');
        $('#name').removeClass('is-invalid');
        return true;
    } else {
        $('#name').addClass('is-invalid');
        $('#name').removeClass('is-valid');
        return false;
    }
}

function checkValidAge(){
    let age = $('#age').val();
    let reg = /^[0-9]?[0-9]$/ig;

    if (reg.test(age)) {
        $('#age').addClass('is-valid');
        $('#age').removeClass('is-invalid');
        return true;
    } else {
        $('#age').addClass('is-invalid');
        $('#age').removeClass('is-valid');
        return false;
    }
}

function checkValidEmail(){
    let email = $('#email').val();
    let reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[A-Z0-9.-]+(\.[A-Z]{2,})+$/ig;

    if (reg.test(email)){
        $('#email').addClass('is-valid');
        $('#email').removeClass('is-invalid');
        return true;
    }else{
        $('#email').addClass('is-invalid');
        $('#email').removeClass('is-valid');
        return false;
    }
}

function checkValidPlace() {
    let place = $('#residence').val();
    let reg = /^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/g;

    if (reg.test(place)) {
        $('#residence').addClass('is-valid');
        $('#residence').removeClass('is-invalid');
        return true;
    } else {
        $('#residence').addClass('is-invalid');
        $('#residence').removeClass('is-valid');
        return false;
    }
}
