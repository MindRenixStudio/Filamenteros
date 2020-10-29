<!DOCTYPE html>
<html>
<head>

	<title>FILAMENTEROS - 3D Companion</title>

	<link rel="stylesheet" href="../CSS/css.css">

</head>
<body>
	<div id="divMasterTop"> <!-- master div -->
		<button id="LeftMenu" onclick="Animate()">≡</button>
		<h1 id="H1Top">FILAMENTEROS</h1>
		<p id="TopP1">(3D Printing companion webapp)</p>
		<button id="Login">LOGIN</button>
	</div>
	<div id="divLeftMenu" class="divMenuLeftIdle">
		<button id="MBT1" class="PrintersBTIdle" style="white-space: nowrap;">3D Printers</button>
		<button id="MBT2" class="PrintersBTIdle">Filaments</button>
		<button id="MBT3" class="PrintersBTIdle">Models</button>
		<button id="MBT4" class="PrintersBTIdle">Statistics</button>
	</div>

	<div id="MainScreenPrinter">
		<p class="MainScreenTitles">YOUR 3D PRINTERS</p>

		<div class="MainScreenItems">
			<progress value="68" max="100">
		</div>
		<div class="MainScreenItems">
			<p>a</p>
		</div>
		<div class="MainScreenItems">
			<p>a</p>
		</div>
		<div class="MainScreenItems">
			<p>a</p>
		</div>
	</div>

	<div id="MainScreenFilament">
		<p class="MainScreenTitles">YOUR FILAMENT</p>

		<div class="MainScreenItems">
			<p>a</p>
		</div>
		<div class="MainScreenItems">
			<p>a</p>
		</div>
		<div class="MainScreenItems">
			<p>a</p>
		</div>
		<div class="MainScreenItems">
			<p>a</p>
		</div>
	</div>

	<script src="../JS/menuAnimation.js"></script>
</body>
</html>