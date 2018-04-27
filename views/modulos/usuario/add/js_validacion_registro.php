<script type="text/javascript">
document.getElementById("nombre").onkeypress = function(e) {
            var chr = String.fromCharCode(e.which);
            var lgth = document.getElementById("nombre").value.length;
            if ("áéíóúÁÉÍÓÚñqwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM".indexOf(chr) < 0 && ' '.indexOf(chr) < 0 || lgth > 49)
              return false;
};
document.getElementById("app").onkeypress = function(e) {
            var chr = String.fromCharCode(e.which);
            var lgth = document.getElementById("app").value.length;
            if ("áéíóúÁÉÍÓÚñqwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM".indexOf(chr) < 0 || lgth > 24)
              return false;
};
document.getElementById("apm").onkeypress = function(e) {
       var chr = String.fromCharCode(e.which);
       var lgth = document.getElementById("apm").value.length;
       if ("áéíóúÁÉÍÓÚñqwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM".indexOf(chr) < 0 || lgth > 24)
         return false;
};
document.getElementById("fono").onkeypress = function(e) {
       var chr = String.fromCharCode(e.which);
       var lgth = document.getElementById("fono").value.length;

       if ("1234567890".indexOf(chr) < 0 || lgth > 8)
         return false;
};
document.getElementById("mail").onkeypress = function(e) {
            var chr = String.fromCharCode(e.which);
            var lgth = document.getElementById("mail").value.length;
            if (".-_@0123456789ñqwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM".indexOf(chr) < 0 || lgth > 49)
              return false;
};

document.getElementById("pass").onkeypress = function(e) {
       var lgth = document.getElementById("pass").value.length;
       if (lgth > 16)
         return false;
};

function validaremail() {
    var email = document.getElementById("mail").value;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(email) ){
        alert("Error: La dirección de correo electronico " + email + " es incorrecta.");
        return false;
    }else{
        return true;
    }
}
</script>
