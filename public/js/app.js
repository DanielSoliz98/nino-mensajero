function countChar(val) {
    var len = val.value.length;
    if (len >= 20000) {
        val.value = val.value.substring(0, 20000);
    } else {
        var char = 20000 - len;
        $('#charNum').text(char + ' caracteres restantes.');
    }
};
