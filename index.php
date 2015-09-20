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
        <h1>xkcd-Style Password Generator</h1>
      </div><br>
        <div class="content">
          <div class="pure-g">
            <div class="pure-u-1-2">
    	      <form class="pure-form pure-form-aligned" method='GET' action='index.php'>
             <fieldset>
    		       <div class="pure-control-group">
                 <label for="NumWords"># of Words (4-9)</label><input id="words" type='text' class="pure-input" name='NumWords'><br>
               </div>
    		        <div class="pure-control-group">
                  <label for="Symbol" class="pure-checkbox">Add a Symbol?</label><input type='checkbox' name='Symbol'><br>
                </div>
                <div class="pure-control-group">
                  <label for="Number">Add a Number?</label><input type='checkbox' name="Number"><br>
                </div>
                <div class="pure-control-group">
                  <label for="Capital">Capitalize?</label><input type='checkbox' name="Capital"><br>
                </div>
               <div class="pure-controls"><button type='submit' class="pure-button pure-button-primary">Generate Password</button>
               </div>
             </fieldset>
    	      </form>
          </div>
          <div class="pure-u-1-2">
            <div class="pwd">
              <?php print join('-', $pwdArray); ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>

  </html>
