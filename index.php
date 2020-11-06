<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<title>FILAMENTEROS - 3D Companion</title>

	<link rel="stylesheet" href="CSS/css.css">

</head>
<body>
	<div id="divMasterTop"> <!-- master div -->
		<button id="LeftMenu" onclick="AnimateMenu()">≡</button>
		<a href="index.php"><h1 id="H1Top">FILAMENTEROS</h1> </a>
		<p id="TopP1">(3D Printing companion webapp)</p>
		<button id="Login">LOGIN</button>

		<div style="z-index: 10; background-color: #424242; position: absolute; width: 17%; height: 25%; left: 82%; top: 5%; border-radius: 15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); visibility: hidden;">
			<form name="Log" id="Log" method="post" action="">
			<p style="font-family: Staatliches; font-size: 30px; color: white; width: 70px; position: absolute; left: 4%; top: -10%;">NICK</p>	
				<input type="text" name="LogNick" id="LogiNick" style="width: 80%; border-radius: 8px; height: 25px; position: absolute; left: 4%; top: 15%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> <?php echo $fillnick; ?> <br><br>
			<p style="font-family: Staatliches; font-size: 30px; color: white; width: 70px; position: absolute; left: 4%; top: 20%;">PASSWORD</p>
				<input type="password" name="LogPass" id="LogiPass" style="width: 80%; border-radius: 8px; height: 25px; position: absolute; left: 4%; top: 46%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><br><br>
			<input type="submit" value="Login" name="Login" style="font-family: Staatliches; font-size: 37px; border-radius: 18px; width: 35%; height: 57px; position: absolute; left: 4%; top: 64%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
			</form>
		</div>

	</div>
	<div id="divLeftMenu" class="divMenuLeftIdle">
		<button id="MBT1" class="PrintersBTIdle" style="white-space: nowrap;">3D Printers</button>
		<button id="MBT2" class="PrintersBTIdle">Filaments</button>
		<button id="MBT3" class="PrintersBTIdle">Models</button>
		<button id="MBT4" class="PrintersBTIdle">Statistics</button>
		<button id="MBT5" class="PrintersBTIdle"><a href="PHP-HTML/page_calculator.php">Calculator</a></button>
	</div>

	<div class="MainScreenFilament" id="Filament">
		<p class="MainScreenTitles">YOUR 3D PRINTERS</p>
		<div class="MainScreenItems">

			<button style="height: 254px; width: 255px; position: absolute; border-radius: 20px; z-index: 1; background: transparent;"></button>
			<img src="ASSETS/printer.png" style="position: relative;margin: auto;height: 130px; top: 8px;">
			<p style="font-family: Staatliches; margin: auto; font-size: 35px; position: relative; top: 15px;">ENDER 3 V2</p>
			<p style="font-family: Staatliches; margin: auto; font-size: 25px; position: relative; top: 10px;">PRINTING</p>
			<p style="font-family: Staatliches; margin: auto; font-size: 15px; position: relative; top: 13px; left: -70px;">29.10.2020 15:00</p>
			<P style="font-family: Staatliches; margin: auto; font-size: 15px; position: relative; top: -8px; left: 70px;">29.10.2020 16:00</P>
		</div>
		<div class="MainScreenItems">
			<button style="height: 254px; width: 255px; position: absolute; border-radius: 20px; z-index: 1; background: transparent;"></button>
			<img src="ASSETS/printer.png" style="position: relative;margin: auto;height: 130px; top: 8px;">
			<p style="font-family: Staatliches; margin: auto; font-size: 35px; position: relative; top: 15px;">PRUSA MINI</p>
			<p style="font-family: Staatliches; margin: auto; font-size: 25px; position: relative; top: 10px;">IDLE</p>
			<p style="font-family: Staatliches; margin: auto; font-size: 15px; position: relative; top: 13px; left: -70px;">29.10.2020 13:35</p>
			<P style="font-family: Staatliches; margin: auto; font-size: 15px; position: relative; top: -8px; left: 70px;">29.10.2020 21:53</P>
		</div>
		
	</div>
	<div class="MainScreenPrinter" id="Printer">
		<p class="MainScreenTitles" style="position: relative; left: 42%;">YOUR FILAMENT</p>

		<div class="MainScreenItems">
			<button style="height: 254px; width: 255px; position: absolute; border-radius: 20px; z-index: 1; background: transparent;"></button>
			<img src="ASSETS/spool.png" style="position: relative;margin: auto;height: 130px; top: 0px;">
			<progress value="100" max="100" style="height: 15px; position: relative; top: 0px; border-radius: 20px; left: 12px; width: 227px; "></progress>
			<p style="font-family: Staatliches; margin: auto;">Remaining 650g/250m</p>
			<p style="font-family: Staatliches; margin: auto; font-size: 35px;">Galaxy black</p>
			<p style="font-family: Staatliches; margin: auto; position: relative; top: -10px;">Prusament | PLA</p>
			<p style="font-family: Staatliches; margin: auto; position: relative; font-size: 21px; top: -8px;">Bed - 60°C | Nozzle - 220°C</p>
		</div>
		<div class="MainScreenItems">
			<button style="height: 254px; width: 255px; position: absolute; border-radius: 20px; z-index: 1; background: transparent;"></button>
			<img src="ASSETS/spool.png" style="position: relative;margin: auto;height: 130px; top: 0px;">
			<progress value="50" max="100" style="height: 15px; position: relative; top: 0px; border-radius: 20px; left: 12px; width: 227px; "></progress>
			<p style="font-family: Staatliches; margin: auto;">Remaining 650g/250m</p>
			<p style="font-family: Staatliches; margin: auto; font-size: 35px;">Emerald green</p>
			<p style="font-family: Staatliches; margin: auto; position: relative; top: -10px;">Prusament | PLA</p>
			<p style="font-family: Staatliches; margin: auto; position: relative; font-size: 21px; top: -8px;">Bed - 60°C | Nozzle - 220°C</p>
		</div>
		<div class="MainScreenItems">
			<button style="height: 254px; width: 255px; position: absolute; border-radius: 20px; z-index: 1; background: transparent;"></button>
			<img src="ASSETS/spool.png" style="position: relative;margin: auto;height: 130px; top: 0px;">
			<progress value="80" max="100" style="height: 15px; position: relative; top: 0px; border-radius: 20px; left: 12px; width: 227px; "></progress>
			<p style="font-family: Staatliches; margin: auto;">Remaining 650g/250m</p>
			<p style="font-family: Staatliches; margin: auto; font-size: 35px;">Orange</p>
			<p style="font-family: Staatliches; margin: auto; position: relative; top: -10px;">Prusament | PLA</p>
			<p style="font-family: Staatliches; margin: auto; position: relative; font-size: 21px; top: -8px;">Bed - 60°C | Nozzle - 220°C</p>
		</div>
		<div class="MainScreenItems">
			<button style="height: 254px; width: 255px; position: absolute; border-radius: 20px; z-index: 1; background: transparent;"></button>
			<img src="ASSETS/spool.png" style="position: relative;margin: auto;height: 130px; top: 0px;">
			<progress value="30" max="100" style="height: 15px; position: relative; top: 0px; border-radius: 20px; left: 12px; width: 227px; "></progress>
			<p style="font-family: Staatliches; margin: auto;">Remaining 300g/250m</p>
			<p style="font-family: Staatliches; margin: auto; font-size: 35px;">Blue</p>
			<p style="font-family: Staatliches; margin: auto; position: relative; top: -10px;">Prusament | PLA</p>
			<p style="font-family: Staatliches; margin: auto; position: relative; font-size: 21px; top: -8px;">Bed - 60°C | Nozzle - 220°C</p>
		</div>
	</div>

	<div class="MainScreenModels" id="Models">
		<p class="MainScreenTitles" style="position: relative; left: 42%;">YOUR MODELS</p>
		<div class="MainScreenItems">
			<button style="height: 254px; width: 255px; position: absolute; border-radius: 20px; z-index: 1; background: transparent;"></button>
			<img src="ASSETS/model.png" style="position: relative;margin: auto;height: 104px; top: 0px;">
			<p style="font-family: Staatliches; margin: auto; font-size: 30px; text-align: center;">Diorama Diorama</p>
			<p style="font-family: Staatliches; margin: auto; font-size: 28px; position: relative; top: -9px; font-size: 28px;">Emerald green</p>
			<p style="font-family: Staatliches; margin: auto; position: relative; top: -4px; font-size: 28px;">Cost: 6.48Kč</p>
			<p style="font-family: Staatliches; margin: auto; position: relative; font-size: 28px; top: -8px;">68g | 2d 08h 21m</p>
		</div>

	</div>

	<div class="MainScreenInventory" id="Inventory">
		<p class="MainScreenTitles" style="position: relative; left: 42%;">YOUR INVENTORY</p>
		<div class="MainScreenItems">
			<button style="height: 254px; width: 255px; position: absolute; border-radius: 20px; z-index: 1; background: transparent;"></button>
			<img src="ASSETS/nozzle.png" style="position: relative;margin: auto;height: 130px; top: 0px;">
			<p style="font-family: Staatliches; margin: auto; font-size: 35px;">Full metal 0.4mm</p>
			<p style="font-family: Staatliches; margin: auto; position: relative; top: -10px; font-size: 30px;">3x</p>			
		</div>
	</div>

	<div style="background-color: #424242; height: 80px; width: 80px; border-radius: 45px; position: fixed; top: 90%; left: 94%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
		<button onclick="AnimateAdding()" style="height: 80px; width: 80px; z-index: 1; background: transparent; border-radius: 45px; position: absolute;"></button>
		<p style="margin: auto; position: relative; color: white; font-family: Staatliches; font-size: 100px; left: 18px; top: -18px;">+</p>
	</div>

	<div id="addFilament" class="AddFilamentIdle">
		<button style="height: 80px; width: 80px; z-index: 1; background: transparent; border-radius: 45px; position: absolute;"></button>
		<img src="ASSETS/spool_w.png" style="position: relative;margin: auto;height: 50px; top: 14px; left: 14px;">
	</div>

	<div id="addPrinter" class="AddPrinterIdle">
		<button style="height: 80px; width: 80px; z-index: 1; background: transparent; border-radius: 45px; position: absolute;"></button>
		<img src="ASSETS/printer_w.png" style="position: relative;margin: auto;height: 50px; top: 14px; left: 14px;">
	</div>

	<div id="addInventory" class="AddInventoryIdle">
		<button style="height: 80px; width: 80px; z-index: 1; background: transparent; border-radius: 45px; position: absolute;"></button>
		<img src="ASSETS/nozzle_w.png" style="position: relative;margin: auto;height: 50px; top: 14px; left: 14px;">
	</div>

	<div id="addModel" class="AddModelIdle">
		<button style="height: 80px; width: 80px; z-index: 1; background: transparent; border-radius: 45px; position: absolute;"></button>
		<img src="ASSETS/model_w.png" style="position: relative;margin: auto;height: 50px; top: 14px; left: 14px;">
	</div>

	<script src="JS/menuAnimation.js"></script>
	<script src="JS/addingAnimation.js"></script>
	<script src="JS/toCalcAnimation.js"></script>

</body>
</html>