<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="favicon-rocket.ico">
  <title>Password Generator</title>
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css" type='text/css'>
  <link rel="stylesheet" href="css/side-menu.css" type='text/css'>
  <link rel="stylesheet" href="css/p2.css" type='text/css'>

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
          <a class="pure-menu-heading" href="http://dwa15.jdepasquale.com/">DWA15</a>
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
            <li class="pure-menu-item"><a href="http://p3.dwa15.jdepasquale.com/" class="pure-menu-link">Project 3</a>
              <ul class="pure-menu-children">
                <li class="pure-menu-item ghub"><a href="https://github.com/depasq/p3" target="_blank" class="pure-menu-link">GitHub</a></li>
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
      <h1><a class="head-link" href="https://xkcd.com/936/" target="_blank">xkcd-Style</a> Password Generator</h1>
    </div><br>
      <div class="content">
        <div class="pwd-block">
          Random Password:<br>
          <div class="pwd">
            <?php print implode($sep, $pwdArray); ?>
          </div>
        </div>
        <div class="pure-g">
          <div class="pure-u-1-3">
  	      <form class="pure-form pure-form-aligned" method='GET' action='index.php'>
           <fieldset>
  		       <div class="pure-control-group">
               <label for="NumWords"># of Words (4-9)</label><input type='text' class="pure-input" id="NumWords" name="NumWords"><br>
             </div>
             <div class="pure-control-group">
               <label for="Separator">Separator (default: -)</label><input type='text' class="pure-input" id="Separator" name="Separator"><br>
             </div>
  		        <div class="pure-control-group">
                <label for="Symbol" class="pure-checkbox">Add a Symbol?</label><input type='checkbox' id="Symbol" name="Symbol"><br>
              </div>
              <div class="pure-control-group">
                <label for="Number">Add a Number?</label><input type='checkbox' id="Number" name="Number"><br>
              </div>
              <div class="pure-control-group">
                <label for="Capital">Capitalize?</label><input type='checkbox' id="Capital" name="Capital"><br>
              </div>
             <div class="pure-controls"><button type='submit' class="pure-button pure-button-primary">Generate Password</button>
             </div>
           </fieldset>
  	      </form>
          <img class="pure-img-responsive" src="./img/craft.jpg" alt="Chandra">
        </div>
        <div class="pure-u-1-2">
          Learn more:<br><a class="head-link" href='<?= $data['link']; ?>' target="_blank"><?= $data['title']; ?></a>
          <img class="pure-img-responsive" src='<?= $data['image']; ?>' alt='<?= $data['source']; ?>'>
        </div>
      </div>
        <div class="footer">
          <p>The <a class="head-link" href="https://xkcd.com/936/" target="_blank">xkcd comic</a> that inspired this tool shows that passwords
          composed of random words are easier to remember, yet harder for brute-force method attacks to guess.  This astronomically-biased password
          generator sources the text of a randomly selected press release from the Chandra X-ray Observatory's
          <a class="head-link" href="http://chandra.si.edu" target="_blank">public website</a>.</p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
