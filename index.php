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
        <script src="assets/js/post.js" type="text/javascript"></script>
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
                        Number of words:  <input type="number" id='numWords' required/>
                    </label>
                </div>
                <br><br>
                <div class="form-group">
                    <label class="form-check-label">
                        Include a number: <input id='numIncludeChecked' type="checkbox" data-toggle="switch" value="true" class="form-check-input"/>
                        <br>
                        <div id="number-input">
                            <label>Number to include in password:</label>
                            <input type="number" id='numIncluded'/>
                        </div>
                    </label>

                    <br><br>

                    <label class="form-check-label">
                        Include a symbol: <input id='symbolIncludeChecked' type="checkbox" data-toggle="switch" value="true" class="form-check-input"/>
                        <br>
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

                    <br><br>
                </div>
                <button id="submit" class="btn btn-primary">Generate Password</button>
            </form>

            <div id="generated-password" class="modal fade alert-success password-display">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Your Password is:</h4>
                </div>
                <br>
                <div id="pass-contatiner" class="modal-body">
                </div>
            </div>
        </div>
	</body>
</html>
