function countChar(val) {
    var len = val.value.length;
    if (len >= 20000) {
        val.value = val.value.substring(0, 20000);
    } else {
        var char = 20000 - len;
        $('#charNum').text(char + ' caracteres restantes.');
    }
};
$(document).ready(function(){
    var isshow = localStorage.getItem('isshow');
    if (isshow== null) {
        $("#termsModal").modal('show');
    }
});
function accept(){
    localStorage.setItem('isshow', 1);
};

$(document).ready(function(){
   $("#homeBackModal").modal('show');
});