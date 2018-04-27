<script type="text/javascript">
document.getElementById("nombre_update").onkeypress = function(e) {
            var chr = String.fromCharCode(e.which);
            var lgth = document.getElementById("nombre").value.length;
            if ("áéíóúÁÉÍÓÚñqwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM".indexOf(chr) < 0 && ' '.indexOf(chr) < 0 || lgth > 49)
              return false;
};
document.getElementById("app_update").onkeypress = function(e) {
            var chr = String.fromCharCode(e.which);
            var lgth = document.getElementById("app").value.length;
            if ("áéíóúÁÉÍÓÚñqwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM".indexOf(chr) < 0 || lgth > 24)
              return false;
};
document.getElementById("apm_update").onkeypress = function(e) {
       var chr = String.fromCharCode(e.which);
       var lgth = document.getElementById("apm").value.length;
       if ("áéíóúÁÉÍÓÚñqwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM".indexOf(chr) < 0 || lgth > 24)
         return false;
};
document.getElementById("fono_user").onkeypress = function(e) {
       var chr = String.fromCharCode(e.which);
       var lgth = document.getElementById("fono").value.length;

       if ("1234567890".indexOf(chr) < 0 || lgth > 8)
         return false;
};
document.getElementById("mail_user").onkeypress = function(e) {
            var chr = String.fromCharCode(e.which);
            var lgth = document.getElementById("mail").value.length;
            if (".-_@0123456789ñqwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM".indexOf(chr) < 0 || lgth > 49)
              return false;
};
</script>
