<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
  <!DOCTYPE html>
  <html>

  <head>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css" type='text/css'>
    <link rel="stylesheet" href="css/side-menu.css" type='text/css'>
    <link rel="stylesheet" href="css/p2.css" type='text/css'>

    <title>Password Generator</title>
    <?php require 'logic.php'; ?>

  </head>

  <body>

      <div id="layout">
        <!-- Menu toggle -->
        <a href="#menu" id="menuLink" class="menu-link">
          <!-- Hamburger icon -->
          <span></span>
        </a>

        <div id="menu">
          <div class="pure-menu">
            <a class="pure-menu-heading" href="#">DWA15</a>
            <ul class="pure-menu-list">
              <li class="pure-menu-item"><a href="http://p1.dwa15.jdepasquale.com/" class="pure-menu-link">Project 1</a>
                <ul class="pure-menu-children">
                  <li class="pure-menu-item ghub"><a href="https://github.com/depasq/p1" target="_blank" class="pure-menu-link">GitHub</a></li>
                </ul>
              </li>
              <li class="pure-menu-item"><a href="http://p2.dwa15.jdepasquale.com/" class="pure-menu-link">Project 2</a>
                <ul class="pure-menu-children">
                  <li class="pure-menu-item ghub"><a href="https://github.com/depasq/p2" target="_blank" class="pure-menu-link">GitHub</a></li>
                </ul>
              </li>
              <li class="pure-menu-item"><a href="#" class="pure-menu-link">Project 3</a>
                <ul class="pure-menu-children">
                  <li class="pure-menu-item ghub"><a href="https://github.com/depasq" target="_blank" class="pure-menu-link">GitHub</a></li>
                </ul>
              </li>
              <li class="pure-menu-item"><a href="#" class="pure-menu-link">Project 4</a>
                <ul class="pure-menu-children">
                  <li class="pure-menu-item ghub"><a href="https://github.com/depasq" target="_blank" class="pure-menu-link">GitHub</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>



      <div id="main">
        <div class="header">
        <h1>P2: XKCD-Style Password Generator</h1>
        </div>
        <div class="content">
    	<form class="pure-form-stacked" method='GET' action='index.php'>

    		<label for="NumWords"># of Words</label><input type='text' name='NumWords'><br>
    		<input type='text' name='Symbol'><br>

    		<input type='submit' value='Show A Password'>

    	</form>
    </div>
    </div>
    </div>
  </body>

  </html>
