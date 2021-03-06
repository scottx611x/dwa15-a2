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
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="assets/js/get.js" type="text/javascript"></script>
    </head>
 	<body>
        <div class="container">
            <h1>xkcd password generator</h1>
            <a href="https://xkcd.com/936/">
                <img class="xkcd-img" src="https://imgs.xkcd.com/comics/password_strength.png"/>
            </a>
            <br><br>
            <div class="inputs form-group">
                <label>Number of words (REQUIRED)  <input type="number" id='numWords'/></label>
                <br>
                <label>
                    Include a number: <input id='numIncludeChecked' type="checkbox" data-toggle="switch" value="true"/>

                    <div id="number-input">
                        <label>Number to include in password:</label>
                        <input type="number" id='numIncluded'/>
                    </div>
                </label>
                <label>
                    Include a symbol: <input id='symbolIncludeChecked' type="checkbox" data-toggle="switch" value="true"/>

                    <div id="symbol-input">
                        <label>Symbol to include in password:</label>
                        <select id='symbolIncluded'>
                            <option>!</option>
                            <option>@</option>
                            <option>#</option>
                            <option>$</option>
                            <option>%</option>
                            <option>^</option>
                        </select>
                    </div>
                </label>
                <br>
            </div>
            <button id="submit" class="btn btn-primary">Generate Password</button>
        </div>
            <div id="generated-password" class="modal fade alert-success password-display">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Your Password is:</h4>
                </div>
                <br>
                <div id="pass-container" class="modal-body">
                </div>
            </div>
            <div id="generated-error" class="modal fade alert-danger error-display">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Something bad happened:</h4>
                </div>
                <br>
                <div id="error-container" class="modal-body">
                </div>
                <div id="user-input-container" class="modal-body">
                </div>
            </div>

	</body>
</html>
