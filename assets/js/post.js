/*
Post form data directly to our php class
 */
$(document).ready(function(){
    $("#submit").click(function(e){

        // Prevent default form submission behavior of a page reload
        e.preventDefault();

        // Gather values set in form
        var numWords = $("#numWords").val();
        var numIncludeChecked = $("#numIncludeChecked").prop('checked');
        var numIncluded = $("#numIncluded").val();
        var symbolIncludeChecked = $("#symbolIncludeChecked").prop('checked');
        var symbolIncluded = $("#symbolIncluded").val();

        // Construct payload to POST
        var payload = {
            numWords: numWords,
            numIncludeChecked: numIncludeChecked,
            numIncluded: numIncluded,
            symbolIncludeChecked: symbolIncludeChecked,
            symbolIncluded: symbolIncluded
        };
        $.post("PasswordGen.php", payload
        ).done(function(data) {
            $("#generated-password").modal();
            $("#pass-contatiner").text(data);
        });
    });
});