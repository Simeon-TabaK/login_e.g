    alert(user)
    var user
    var pass
    $(document).ready(function() {
            
            $("#submitLog").click(function() {
                user = $('#signin-email').val()
                pass = $('#signin-password').val()
                
                $.post("src/logintraitment.php", {
                        submStudent: $('#submitLog').val(),
                        user: $('#signin-email').val(),
                        pass: $('#signin-password').val()
                    },
                    function(data, status) {
                        // alert("Data: " + data + "\nStatus: " + status);
                        if (data == 1) {
                            window.location.href = "home.html"
                        } else {
                            $('#message').text('E-mail ou mot de passe incorrect');}
                    });
            });

        //CHANGER TYPE OF INPUT PASSWORD
        $("#PasswordView").change(function() {
            if ($(this).is(':checked')) {
                $('#signin-password').attr('type', 'text');
            } else {
                $('#signin-password').attr('type', 'password');
            }
        });




    });