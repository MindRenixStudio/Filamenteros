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

	<div id="MainScreenFilament">
		<p class="MainScreenTitles">YOUR 3D PRINTERS</p>

		<div class="MainScreenItems">
			<img src="../ASSETS/printer.png" style="position: relative;margin: auto;height: 130px; top: 8px;">
			<p style="font-family: Staatliches; margin: auto; font-size: 35px; position: relative; top: 15px;">ENDER 3 V2</p>
			<p style="font-family: Staatliches; margin: auto; font-size: 25px; position: relative; top: 10px;">PRINTING</p>
			<p style="font-family: Staatliches; margin: auto; font-size: 15px; position: relative; top: 13px; left: -70px;">29.10.2020 15:00</p>
			<P style="font-family: Staatliches; margin: auto; font-size: 15px; position: relative; top: -8px; left: 70px;">29.10.2020 16:00</P>
		</div>
		<div class="MainScreenItems">
			<img src="../ASSETS/printer.png" style="position: relative;margin: auto;height: 130px; top: 8px;">
			<p style="font-family: Staatliches; margin: auto; font-size: 35px; position: relative; top: 15px;">PRUSA MINI</p>
			<p style="font-family: Staatliches; margin: auto; font-size: 25px; position: relative; top: 10px;">IDLE</p>
			<p style="font-family: Staatliches; margin: auto; font-size: 15px; position: relative; top: 13px; left: -70px;">29.10.2020 13:35</p>
			<P style="font-family: Staatliches; margin: auto; font-size: 15px; position: relative; top: -8px; left: 70px;">29.10.2020 21:53</P>
		</div>
		
	</div>
	<div id="MainScreenPrinter">
		<p class="MainScreenTitles" style="position: relative; left: 42%;">YOUR FILAMENT</p>

		<div class="MainScreenItems">
			<button style="height: 254px; width: 255px; position: absolute; border-radius: 20px; z-index: 1; background: transparent;"></button>
			<img src="../ASSETS/spool.png" style="position: relative;margin: auto;height: 130px; top: 0px;">
			<progress value="100" max="100" style="height: 15px; position: relative; top: 0px; border-radius: 20px; left: 12px; width: 227px; "></progress>
			<p style="font-family: Staatliches; margin: auto;">Remaining 650g/250m</p>
			<p style="font-family: Staatliches; margin: auto; font-size: 35px;">Galaxy black</p>
			<p style="font-family: Staatliches; margin: auto; position: relative; top: -10px;">Prusament | PLA</p>
			<p style="font-family: Staatliches; margin: auto; position: relative; font-size: 21px; top: -8px;">Bed - 60°C | Nozzle - 220°C</p>
			<!--<p style="font-family: Staatliches; margin: auto; position: relative; font-size: 21px; left: 61px; top: -35px;">Nozzle - 220°C</p> -->
		</div>
		<div class="MainScreenItems">
			<button style="height: 254px; width: 255px; position: absolute; border-radius: 20px; z-index: 1; background: transparent;"></button>
			<img src="../ASSETS/spool.png" style="position: relative;margin: auto;height: 130px; top: 0px;">
			<progress value="50" max="100" style="height: 15px; position: relative; top: 0px; border-radius: 20px; left: 12px; width: 227px; "></progress>
			<p style="font-family: Staatliches; margin: auto;">Remaining 650g/250m</p>
			<p style="font-family: Staatliches; margin: auto; font-size: 35px;">Emerald green</p>
			<p style="font-family: Staatliches; margin: auto; position: relative; top: -10px;">Prusament | PLA</p>
			<p style="font-family: Staatliches; margin: auto; position: relative; font-size: 21px; top: -8px;">Bed - 60°C | Nozzle - 220°C</p>
			<!--<p style="font-family: Staatliches; margin: auto; position: relative; font-size: 21px; left: 61px; top: -35px;">Nozzle - 220°C</p> -->
		</div>
		<div class="MainScreenItems">
			<button style="height: 254px; width: 255px; position: absolute; border-radius: 20px; z-index: 1; background: transparent;"></button>
			<img src="../ASSETS/spool.png" style="position: relative;margin: auto;height: 130px; top: 0px;">
			<progress value="80" max="100" style="height: 15px; position: relative; top: 0px; border-radius: 20px; left: 12px; width: 227px; "></progress>
			<p style="font-family: Staatliches; margin: auto;">Remaining 650g/250m</p>
			<p style="font-family: Staatliches; margin: auto; font-size: 35px;">Orange</p>
			<p style="font-family: Staatliches; margin: auto; position: relative; top: -10px;">Prusament | PLA</p>
			<p style="font-family: Staatliches; margin: auto; position: relative; font-size: 21px; top: -8px;">Bed - 60°C | Nozzle - 220°C</p>
			<!--<p style="font-family: Staatliches; margin: auto; position: relative; font-size: 21px; left: 61px; top: -35px;">Nozzle - 220°C</p> -->
		</div>
		<div class="MainScreenItems">
			<button style="height: 254px; width: 255px; position: absolute; border-radius: 20px; z-index: 1; background: transparent;"></button>
			<img src="../ASSETS/spool.png" style="position: relative;margin: auto;height: 130px; top: 0px;">
			<progress value="30" max="100" style="height: 15px; position: relative; top: 0px; border-radius: 20px; left: 12px; width: 227px; "></progress>
			<p style="font-family: Staatliches; margin: auto;">Remaining 300g/250m</p>
			<p style="font-family: Staatliches; margin: auto; font-size: 35px;">Blue</p>
			<p style="font-family: Staatliches; margin: auto; position: relative; top: -10px;">Prusament | PLA</p>
			<p style="font-family: Staatliches; margin: auto; position: relative; font-size: 21px; top: -8px;">Bed - 60°C | Nozzle - 220°C</p>
			<!--<p style="font-family: Staatliches; margin: auto; position: relative; font-size: 21px; left: 61px; top: -35px;">Nozzle - 220°C</p> -->
		</div>
	</div>



	<script src="../JS/menuAnimation.js"></script>
</body>
</html>