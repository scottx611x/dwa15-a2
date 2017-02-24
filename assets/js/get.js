/*
Post form data directly to our php class
 */

$(document).ready(function(){
    $("#submit").click(function(e){

        // Prevent default form submission behavior of a page reload
        e.preventDefault();

        // Gather values set in form
        var numWords = parseInt($("#numWords").val());
        var numIncludeChecked = $("#numIncludeChecked").prop('checked');
        var numIncluded = parseInt($("#numIncluded").val());
        var symbolIncludeChecked = $("#symbolIncludeChecked").prop('checked');
        var symbolIncluded = $("#symbolIncluded").val();

        //Validate some stuff
        if (numWords >= 10){
            alert("You're way too paranoid. Try with >= 10 words!");
            return;
        }
        if (numWords == 0){
            alert("Number of words must be > 0!");
            return;
        }
        if (!isInt(numWords)){
            alert("Number of words must be a whole number for this to work!");
            return;
        }
        if (numIncludeChecked && !isInt(numIncludeChecked)){
            alert("Number to include must be a whole number for this to work!");
            return;
        }

        // Construct payload to POST
        var payload = {
            numWords: numWords,
            numIncludeChecked: numIncludeChecked,
            numIncluded: numIncluded,
            symbolIncludeChecked: symbolIncludeChecked,
            symbolIncluded: symbolIncluded
        };

        $.get("PasswordGen.php", payload
        ).done(function(data) {
            var error = JSON.stringify(eval("(" + data + ")"));
            if (!error["error"]) {
                $("#generated-password").modal();
                $("#pass-contatiner").text(data);
            }
            else{
                $("#generated-error").modal();
                $("#error-contatiner").text(error["error"]);
            }
        });
    });
    function isInt(n) {
        return n % 1 === 0;
    }
});

