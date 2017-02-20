<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
 	<head>
        <meta charset="utf-8"/>
  		<title>DWA15 Assignment 2</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
 	</head>
 	<body>
        <div class="container">
            <h1>xkcd password generator</h1>
            <a href="https://xkcd.com/936/">
                <img class="xkcd-img" src="https://imgs.xkcd.com/comics/password_strength.png"/>
            </a>
            <form>
                <div class="form-group">
                    <label>
                        Number of words:  <input type="number" id='numWords'min="0" max="10" required/>
                    </label>
                </div>
                <br><br>
                <div class="form-group">
                    <label class="form-check-label">
                        Include a number: <input id='numIncludeChecked' type="checkbox" class="form-check-input"/>
                        <div id="number-input">
                            <label>Number to include in password:</label>
                            <input type="number" id='numIncluded'  min="0" max="5" />
                        </div>
                    </label>

                    <br><br>

                    <label class="form-check-label">
                        Include a symbol: <input id='symbolIncludeChecked' type="checkbox" class="form-check-input"/>
                        <div id="symbol-input">
                            <label>Symbol to include in password:</label>
                            <select id='symbolIncluded' >
                                <option>!</option>
                                <option>@</option>
                                <option>#</option>
                                <option>$</option>
                                <option>%</option>
                                <option>^</option>
                            </select>
                        </div>
                    </label>

                    <br><br>
                </div>
                <button id="submit" class="btn btn-primary">Generate Password</button>
            </form>
            <div id="generated-password" class="alert-success"></div>
        </div>

        <br><br>



        <script type="text/javascript">
            $(document).ready(function(){
                $("#submit").click(function(e){
                    e.preventDefault();
                    var numWords = $("#numWords").val();
                    var numIncludeChecked = $("#numIncludeChecked").val();
                    var numIncluded = $("#numIncluded").val();
                    var symbolIncludeChecked = $("#symbolIncludeChecked").val();
                    var symbolIncluded = $("#symbolIncluded").val();

                    var payload = {
                        numWords: numWords,
                        numIncludeChecked: numIncludeChecked,
                        numIncluded: numIncluded,
                        symbolIncludeChecked: symbolIncludeChecked,
                        symbolIncluded: symbolIncluded
                    };
                    $.post("test.php", payload
                        ).done(function(data) {
                        $("#generated-password").text(data);
                    });
                });
            })
        </script>
	</body>
</html>
