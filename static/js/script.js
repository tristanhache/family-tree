$('form').submit( function ()
{
    if( $('input[name=login]').val() == 'username' && $('input[name=password]').val() == 'password' )
    {
        alert('You are logged in!');
        window.location.href="index.html";
    }
              
    else
    {
        alert('Wrong username or password!');
    }
        
    return false;
});