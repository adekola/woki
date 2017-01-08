<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Woki - Local Discovery</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> 

         <link href="{{ asset('css/dist/semantic.css')}}" rel="stylesheet" type="text/css">
         <link href="{{ asset('css/disti/con.min.css')}}" rel="stylesheet" type="text/css">
        <style type="text/css">

    .hidden.menu {
      display: none;
    }

    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }


  </style>

  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="{{ asset('js/semantic.js')}}"></script>
  <script>
  $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

    })
  ;
  </script>
<style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
.en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255,255,255,.38) solid !important;
    border-radius: 4px !important;
}

.en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
}
</style><link rel="stylesheet" id="coToolbarStyle" href="chrome-extension://nppllibpnmahfaklnpggkibhkapjkeob/toolbar/styles/placeholder.css" type="text/css"><script type="text/javascript" id="cosymantecbfw_removeToolbar">(function () {				var toolbarElement = {},					parent = {},					interval = 0,					retryCount = 0,					isRemoved = false;				if (window.location.protocol === 'file:') {					interval = window.setInterval(function () {						toolbarElement = document.getElementById('coFrameDiv');						if (toolbarElement) {							parent = toolbarElement.parentNode;							if (parent) {								parent.removeChild(toolbarElement);								isRemoved = true;								if (document.body && document.body.style) {									document.body.style.setProperty('margin-top', '0px', 'important');								}							}						}						retryCount += 1;						if (retryCount > 10 || isRemoved) {							window.clearInterval(interval);						}					}, 10);				}			})();</script></head>
<body class="pushable" cz-shortcut-listen="true">

<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">
    <div class="ui text container">
      <h1 class="ui inverted header">
        Woki
      </h1>
      <h2>Local discovery will never be the same</h2> <br>
    </div>

  <div class="ui container">
      <div class="ui vertical small form">
          <div class="two fields">
              <div class="field">
                  <input placeholder="Do" type="text">
              </div>
              <span> in </span> 
              <div class="field">
                  <input placeholder="Where" type="text">
              </div>
              <div class="ui small primary button" data-content="Discover"><i class="right arrow icon"></i></div>
          </div>
      </div>
  </div>

  <div class="ui container">
    <table class="ui celled table">
    <thead>
      <tr><th>Name</th>
      <th>Activity</th>
      <th>Open/Not</th>
    </tr></thead>
    <tbody>
      <tr>
        <td>Primarck</td>
        <td>Shop</td>
        <td>Yes</td>
      </tr>
      <tr>
        <td>Netto</td>
        <td>Groceries</td>
        <td>Yes</td>
      </tr>
        <tr data-content="Eat Burgers at Burger King">
          <td>Burger King</td>
          <td>Hamburgers</td>
          <td>Yes</td>
        </tr>
    </tbody>
    <tfoot>
      <tr><th colspan="3">
        <div class="ui right floated pagination menu">
          <a class="icon item">
            <i class="left chevron icon"></i>
          </a>
          <a class="item">1</a>
          <a class="item">2</a>
          <a class="item">3</a>
          <a class="item">4</a>
          <a class="icon item">
            <i class="right chevron icon"></i>
          </a>
        </div>
      </th>
    </tr></tfoot>
  </table>
  </div>
</div>

  
</div>




</body>
</html>
