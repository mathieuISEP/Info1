<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
      <title>Edit Dashboard</title>
        <link href="editdashboard.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="editdashboard.js"></script>

  </head>
<body>

		<form id="editdashboard" name="editdashboard" method="post">
			<div id="editdashboardtitle">Edit Your Dashboard</div>
			<div class="hr"><hr /></div>
			<ul id="editdashboardlist">
			<li class="editdashboardlist"><input class="editdashboardcheckbox" type="checkbox"><span>Temperature</span></li>
			<li class="editdashboardlist"><input class="editdashboardcheckbox" type="checkbox"><span>Alarm</span></li>
			<li class="editdashboardlist"><input class="editdashboardcheckbox" type="checkbox"><span>Shutters</span></li>
			<li class="editdashboardlist"><input class="editdashboardcheckbox" type="checkbox"><span>Humidity</span></li>
			</ul>
			<button id="savedashboard" form="editdashboard">Save</button>
			</form>
<!--
		<div id="editdashboardheader">Edit Your Dashboard

			<ul>
				<li class="featurecontent">
				<div id="featurecontent">Features

				<ul id="featurecontentlist" align="center" cellpadding="10" cellspacing="10">
					<li>
					<div id="featureelement1" class="featureelement" onclick="switchtable1()">
					<span>Temperature</span>
					<span class="rightarrow">&rarr;</span>
					</div>
					</li>
					<li>
					<div id="featureelement2" class="featureelement">
					<span>Alarm</span>
					<span class="rightarrow">&rarr;</span>
					</div>
					</li>
					<li>
					<div id="featureelement3" class="featureelement">
					<span>Shutters</span>
					<span class="rightarrow">&rarr;</span>
					</div>
					</li>
					<li>
					<div id="featureelement4" class="featureelement">
					<span>Humidity</span>
					<span class="rightarrow">&rarr;</span>
					</div>
					</li>
				</ul>

				</div>
				</li>
			</ul>

			<ul>
				<li class="dashboardcontent">
				<div id="dashboardcontent">Dashboard

				<ul id="dashboardcontentlist">
					<li>
					<div id="dashboardelement1" class="dashboardelement" onclick="switchback1()">
						<span class="leftarrow">&larr;</span>
						<span>Temperature</span>
					</div>
					</li>
					<li>
					<div id="dashboardelement2" class="dashboardelement">
					<span class="leftarrow">&larr;</span>
					<span>Alarm </span>
					</div>
					</li>
					<li>
					<div id="dashboardelement3" class="dashboardelement">
					<span class="leftarrow">&larr;</span>
					<span>Shutters</span>
					</div>
					</li>
					<li>
					<div id="dashboardelement4" class="dashboardelement">
					<span class="leftarrow">&larr;</span>
					<span>Humidity</span>
					</div>
					</li>
				</ul>

				</div>
				</li>
			</ul>

	</div>
	-->
</body>
</html>