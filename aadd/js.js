$(document).ready(function(){
    var tldArray = new Array();
  
    // Store each option value into tldArray
    $("select.hide > option").each(function(){
        tldArray.push($(this).val());
    });
    
    $("#check").click(function(){
        var s = $("#domain").val().split('.');
        var choosenTld = '.'+s[s.length-1].toLowerCase(); // Get last value of the array, the TLD
        for (index = 0;index < tldArray.length;++index) {
            if (choosenTld.indexOf(tldArray[index]) >= 0 && tldArray[index].length == choosenTld.length) {
                $('select.hide').val(tldArray[index]);
                var newValue = $("#domain").val().toLowerCase().replace(tldArray[index],'');
                $("#domain").val(newValue);
            }
        }
    });
});