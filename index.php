<!DOCTYPE html>
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Triangle form with PHP" />
  <meta name="author" content="Kai Nguyen" />
  <meta name="keywords" content="mths, ics2o" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>PHP triangle form</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">PHP triangle Form</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/Triangle.webp" alt="computer image" />
      </div>
      <div class="page-content">Enter triangle dimensions</div>
      <form action="answer.php" method="POST">
        <p>Base</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="base" />
          <label class="mdl-textfield__label" for="base-entered">Base (cm)</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <!-- Numeric Textfield -->
        <p>Height</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="height" />
          <label class="mdl-textfield__label" for="height-entered">Height (cm)</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <br />
        <input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit"></input>
      </form>
      <br />
      <br />
      <div class="page-content-answer">
        <div id="answer"></div>
      </div>
    </main>
  </div>
</body>

</html>