function validateForm(){
    $('#form-alert').hide();
    $('#form-success').hide();
    
    let input = getFormData();
    console.log(input);
    console.log(checkIfEmpty(input));

    let all_allerts = checkIfEmpty(input) + checkForSpelling(input);
    
    displayAlert(all_allerts);

    if (all_allerts == ''){
        displaySuccess();
        writeFormData(input);
    }
    return true;
}

function checkIfEmpty(input){
    let output = '';
    let empty = [];
    for (let key in input){
        if (input[key] == ''){
            empty.push(key);
        }
    };
    if (empty.length !== 0){
        output += "<p>* Please fill in <b>" + empty.join(", ") + "</b> to submit!</p>";
    }
    return output;
}

function checkForSpelling(input){
    let output = "";
    let name_check = /^[a-zA-Z]*\s*([a-zA-Z]*\s)*[a-zA-Z]*$/g;
    let city_check = /^[a-zA-Z]*\s*([a-zA-Z]*\s*)*$/g;
    let age_check = /^[0-9][0-9]?$/g;
    let email_check = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/g;
    let phone_check = /^((\+|00(\s|\s?\-\s?)?)31(\s|\s?\-\s?)?(\(0\)[\-\s]?)?|0)[1-9]((\s|\s?\-\s?)?[0-9])((\s|\s?-\s?)?[0-9])((\s|\s?-\s?)?[0-9])\s?[0-9]\s?[0-9]\s?[0-9]\s?[0-9]\s?[0-9]$/g;


    if (!name_check.test(input['name']) && input['name'] !=! ''){
        output += "<p>* <b>" + input['name'] + "</b> is not a propper name!</p>";
    }
    
    if (!age_check.test(input['age']) && input['age'] != ''){
        output += "<p>* Please use a propper age in the format 00</p>";
    }
    else if (input['age'] < 9 && input['age'] != ''){
        output += "<p>* Your age is too low!</p>";
    }
    if (!city_check.test(input['city']) && input['city'] != '') {
        output += "<p>* <b>" + input['city'] + "</b> is not a valid city!</p>";
    }
    if (!email_check.test(input['e-mail']) && input['e-mail'] != ''){
        output += "<p>* <b>"+ input['e-mail'] + "</b> is not a valid e-mail address!</p>";
    }

    if (!phone_check.test(input['phone-number']) && input['phone-number'] != ''){
        output += "<p>* <b>" + input['phone-number'] + "</b> is not a valid phone-number!</p>";
    }
    return output;
}


function displayAlert(alert){
    if (alert != ''){
        $('#form-alert').show();
        $('#form-alert').html(alert);
    }
}

function displaySuccess(){
    $('#form-success').show();
}

function getFormData(){
    var input = {};
    $('.form-control').each(function (index) {
        input[$(this).attr('name')] = $(this).val();
    });

    return input;
}

function writeFormData(form_data){
    /** 
     *  Writes the data from the form into a table. 
    */
    form_keys = Object.keys(form_data);
    $('#form-content').show();
    let fields = $('#form-content').find('td');
    console.log(fields);

    let i = 0;
    fields.each(function(){
        $(this).html(form_data[form_keys[i]]);
        i++;
    });
}

function erase(){
    $('#form-content').hide();
    $('#form-alert').hide();
    $('#form-success').hide();

    $('.form-control').each(function(){
        $(this).val('');
    });
}

function showContact(){
    $('#link-tab').removeClass('active');
    $('#contact-tab').addClass('active');
    $('#links').hide();
    $('#contact').show();
}

function showHome(){
    $('#contact-tab').removeClass('active');
    $('#link-tab').addClass('active');
    $('#contact').hide();
    $('#links').show();
}

$(function() {
    $('#submit_button').on('click', validateForm);
    $('#erase_button').on('click', erase);
    $('#contact-tab').on('click', showContact);
    $('#link-tab').on('click', showHome);
});