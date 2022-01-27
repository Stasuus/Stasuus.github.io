$('#LoginBtn').click(function (e) { 
    e.preventDefault();
    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val();

    $('input').removeClass('error');
    $('#FormError').addClass('disable');
    
    

    $.ajax({
        url: '../function/authorization.php',
        type: 'POST',
        dataType: 'json',
        data: {
            Login: login,
            Password: password
        },
        success (data){

            console.log(data);

            if(data.status){
                document.location.href = '../index.php';
            }else{
                if(data.type == 1){
                    data.position.forEach(function(position){
                        console.log(position);
                        $(`input[name="${position}"]`).addClass('error');
                    })
                }
    
                $('#FormError').removeClass('disable').text(data.msg);    
            }
        }
    });
});