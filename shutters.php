<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Shutters</title>
  <link href="shuttersbox.css" type="text/css" rel="stylesheet">
  <script type="text/javascript" src="checkbox.js"></script>
</head>
<body>

<form id="shuttersbox" class="dashboardbox" name="temperature" method="post" accept-charset="utf-8">
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

    <div id="shutterlink" onclick="opentab('Features'); opensubtab('Shutters'); checkshutterbox(); display3()"> Custom room shutters </div>

    <div id="buttons">
        <span><input id="shutterreset" type="submit" value="Reset"></span>
        <span><input id="shutterapply" type="submit" value="Apply"></span>
      </div>
  </form>
</body>
</html>