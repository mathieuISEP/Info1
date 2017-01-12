<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Shutters</title>
  <link href="shutters.css" type="text/css" rel="stylesheet">
  <script type="text/javascript" src="checkbox.js"></script>
</head>
<body>

<form name="temperature" method="post" accept-charset="utf-8">
  <div id="shuttersbox">
    <div>Shutters</div>
    <div class="hr"><hr /></div>
    <table id="houseshutters">
      <tr>
        <td>House Shutters
        </td>
        <td>
         <div id="closed">CLOSED</div>
        </td>
        <td>
          <label class="switch">
            <input type="checkbox">
            <div class="slider round"></div>
          </label>
        </td>
        <td>
          <div id="open">OPEN</div>
        </td>
      </tr>
    </table>
    <span>
      <input type="checkbox" id="checkbox" onclick="javascript:display3()"> Custom house shutters
    </span> 
    <div id="shutterrooms">
      <table id="roomshutters">
        <tr>
          <td>Living Room
          </td>
          <td>
            <div class="closed">CLOSED</div>
          </td>
          <td>
            <label class="switch">
              <input type="checkbox">
              <div class="slider round"></div>
            </label>
          </td>
          <td>
            <div class="open">OPEN</div>
          </td>
        </tr>
        <tr>
          <td>Kitchen
          </td>
          <td>
            <div class="closed">CLOSED</div>
          </td>
          <td>
            <label class="switch">
              <input type="checkbox">
              <div class="slider round"></div>
            </label>
          </td>
          <td>
            <div class="open">OPEN</div>
          </td>
        </tr>
        <tr>
          <td>Bedroom 1
          </td>
          <td>
            <div class="closed">CLOSED</div>
          </td>
          <td>
            <label class="switch">
              <input type="checkbox">
              <div class="slider round"></div>
            </label>
          </td>
          <td>
            <div class="open">OPEN</div>
          </td>
        </tr>
        <tr>
          <td>Bedroom 2
          </td>
          <td>
            <div class="closed">CLOSED</div>
          </td>
          <td>
            <label class="switch">
              <input type="checkbox">
              <div class="slider round"></div>
            </label>
          </td>
          <td>
            <div class="open">OPEN</div>
          </td>
        </tr>
        <tr>
          <td>Bedroom 3
          </td>
          <td>
            <div class="closed">CLOSED</div>
          </td>
          <td>
            <label class="switch">
              <input type="checkbox">
              <div class="slider round"></div>
            </label>
          </td>
          <td>
            <div class="open">OPEN</div>
          </td>
        </tr>
        <tr>
          <td>Bedroom 4
          </td>
          <td>
            <div class="closed">CLOSED</div>
          </td>
          <td>
            <label class="switch">
              <input type="checkbox">
              <div class="slider round"></div>
            </label>
          </td>
          <td>
            <div class="open">OPEN</div>
          </td>
        </tr>
        <tr>
          <td>Bathroom 1
          </td>
          <td>
            <div class="closed">CLOSED</div>
          </td>
          <td>
            <label class="switch">
              <input type="checkbox">
              <div class="slider round"></div>
            </label>
          </td>
          <td>
            <div class="open">OPEN</div>
          </td>
        </tr>
        <tr>
          <td>Bathroom 2
          </td>
          <td>
            <div class="closed">CLOSED</div>
          </td>
          <td>
            <label class="switch">
              <input type="checkbox">
              <div class="slider round"></div>
            </label>
          </td>
          <td>
            <div class="open">OPEN</div>
          </td>
        </tr>
      </table>
    </div>

    <div id="buttons">
        <span><input id="shutterreset" type="submit" value="Reset"></span>
        <span><input id="shutterapply" type="submit" value="Apply"></span>
      </div>

  </div>
</form>

</body>
</html>