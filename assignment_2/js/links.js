$(function(){
    var links = ['https://www.google.com', 'https://www.youtube.com', 'https://www.twitter.com'];

    links.forEach(link =>{
        var text = '<li><a target="_blank" href="' + link + '">'+ link +'</a></li>';
        $('#links').append(text);
    });

    $('#list_button').on('click', function(){
        if($('#links').css('opacity') == 1){
            $('#links').animate({'opacity':0}, 1000);
        }
        else if ($('#links').css('opacity') == 0){
            $('#links').animate({'opacity':1},1000);
        }
    });

    $('#add-to-list_button').on('click', function(){
        let name = $('#link_name').val();
        let url = $('#link_url').val();
        
        if (checkUrl(url) && checkInput(name)){
            let text = '<li><a target="_blank" href="' + url + '">' + name + '</a></li>';
            $('#links').append(text);
        }

    });

    $('#delete_button').on('click', enableDeleteMode);


    //On blur shows whether the input is correct

    $('#link_url').on('blur', function(){
        if (checkUrl($('#link_url').val())){
            $('#link_url').removeClass('border-danger');
            $('#link_url').addClass('border-success');
        }else{
            $('#link_url').addClass('border-danger');
        }
    });

    $('#link_name').on('blur', function(){
        if (checkInput($('#link_name').val())) {
            $('#link_name').removeClass('border-danger');
            $('#link_name').addClass('border-success');
        } else {
            $('#link_name').addClass('border-danger');
        }
    });



});

function enableDeleteMode(){
    $('#delete_button').html("Disable Delete Mode");
    $('#links a').each(function(){
        $(this).hover(function(){
            $( this ).css('color', 'red');
        },function(){
                $(this).css('color', '');
        })
        $(this).on('click', function(e){
            e.preventDefault();
            $(this).parent().remove();
            $(this).remove();
        })
    });
    $('#delete_button').on('click', disableDeleteMode);
}

function disableDeleteMode() {
    $('#delete_button').html("Enable Delete Mode");
    $('#links a').each(function(){
        $(this).unbind('mouseenter mouseleave click')
    })
    $('#delete_button').on('click',enableDeleteMode);
}






function checkInput(input){
    if(input.length > 0){
        return true;
    }
    return false;
}

function checkUrl(url){
    let regex = /https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/;
    if (regex.test(url)){
        return true;
    }
    return false;
}
