<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<title>FILAMENTEROS - 3D Companion</title>

	<link rel="stylesheet" href="../CSS/css.css">

</head>
<body>
	<div id="divMasterTop"> <!-- master div -->
		<button id="LeftMenu" onclick="AnimateMenu()">≡</button>
		<a href="../index.php"><h1 id="H1Top">FILAMENTEROS</h1> </a>
		<p id="TopP1">(3D Printing companion webapp)</p>
		<button id="Login">LOGIN</button>

		<div style="z-index: 10; background-color: #424242; position: absolute; width: 17%; height: 25%; left: 82%; top: 5%; border-radius: 15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); visibility: hidden;">
			<form name="Log" id="Log" method="post" action="">
			<p style="font-family: Staatliches; font-size: 30px; color: white; width: 70px; position: absolute; left: 4%; top: -10%;">NICK</p>	
				<input type="text" name="LogNick" id="LogiNick" style="width: 80%; border-radius: 8px; height: 25px; position: absolute; left: 4%; top: 15%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><br><br>
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
		<button id="MBT5" class="PrintersBTIdle" onclick="toCalcAnimation()">Calculator</button>
	</div>

	<div class="Calculator">
		<p class="CalculatorTitle" style="position: relative; left: 42%;">Calculator</p>		
	</div>

	<div class="CalculatorInfo">

		<p id="priceAll" style="width: 10%; height: 35%; position: absolute; background-color: #FF6600; color: white; left: 99%; font-family: Staatliches; font-size: 35px; text-align: center; padding-top: 10px; padding-right: 5px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">$0.00</p>

		<p class="CalculatorInfoTitle" style="position: relative; left: 37%;">Basic info about print</p>
		<p style="display: inline-grid; color: white; font-family: Staatliches; font-size: 30px; position: absolute; top: 10%; left: 10%;">Print time (h) (m)</p>
		<p style="display: inline-grid; color: white; font-family: Staatliches; font-size: 30px; position: absolute; top: 10%; left: 40%;">Name of project</p>
		<p style="display: inline-grid; color: white; font-family: Staatliches; font-size: 30px; position: absolute; top: 10%; left: 73%;">Filament used (g)</p>

		<textarea id="Hours" placeholder="Hours" style="resize: none; outline: none; font-family: Staatliches; font-size: 25px; height: 40px; width: 80px; position: relative; left: 10%; margin-bottom: 20px; top: 10px; text-align: center; padding-top: 10px;"></textarea>
		<textarea id="Minutes" placeholder="Minutes" style="resize: none; outline: none; font-family: Staatliches; font-size: 25px; height: 40px; width: 80px; position: relative; left: 11%; margin-bottom: 20px; top: 10px; text-align: center; padding-top: 10px;"></textarea>
		<textarea placeholder="Name of project" style="resize: none; outline: none; font-family: Staatliches; font-size: 25px; height: 40px; width: 280px; position: relative; left: 20%; margin-bottom: 20px; top: 10px; text-align: center; padding-top: 10px;"></textarea>

		<textarea id="FilamentUsedCounter" placeholder="Grams" style="resize: none; outline: none; font-family: Staatliches; font-size: 25px; height: 40px; width: 80px; position: relative; left: 36%; margin-bottom: 20px; top: 10px; text-align: center; padding-top: 10px;"></textarea>
	</div>

	<div class="CalculatorFilament">

		<p id="FilamentPrice" style="width: 10%; height: 30%; position: absolute; background-color: #FF6600; color: white; left: 99%; font-family: Staatliches; font-size: 35px; text-align: center; padding-top: 10px; padding-right: 5px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">$0.00</p>

		<p class="CalculatorFilamentTitle" style="position: relative; left: 41%;">Filament info</p>
		<p id="FilamentMaterial" style="display: inline-grid; color: white; font-family: Staatliches; font-size: 30px; position: absolute; top: 10%; left: 10%;">Material</p>
		<p style="display: inline-grid; color: white; font-family: Staatliches; font-size: 30px; position: absolute; top: 10%; left: 32.5%;">Spool price</p>
		<p style="display: inline-grid; color: white; font-family: Staatliches; font-size: 30px; position: absolute; top: 10%; left: 58%;">Spool weight</p>
		<p style="display: inline-grid; color: white; font-family: Staatliches; font-size: 30px; position: absolute; top: 10%; left: 79%;">Surcharge</p>

		<select style="resize: none; outline: none; font-family: Staatliches; font-size: 25px; height: 50px; width: 80px; position: relative; left: 10.5%; margin-bottom: 20px; top: -20px; text-align: center; padding-top: 10px;">
			<option value="0" class="CalculatorSelection">PLA</option>
			<option value="1" class="CalculatorSelection">ABS</option>
			<option value="2" class="CalculatorSelection">TPU</option>
			<option value="3" class="CalculatorSelection">PETG</option>
			<option value="4" class="CalculatorSelection">HIPS</option>
			<option value="5" class="CalculatorSelection">NYLON</option>
			<option value="6" class="CalculatorSelection">ASA</option>
			<option value="7" class="CalculatorSelection">PVA</option>
			<option value="8" class="CalculatorSelection">PETT</option>
			<option value="9" class="CalculatorSelection">PET</option>
			<option value="10" class="CalculatorSelection">TPE</option>
			<option value="11" class="CalculatorSelection">PC</option>
			<option value="12" class="CalculatorSelection">PP</option>
			<option value="13" class="CalculatorSelection">WOOD</option>
		</select>
		<textarea id="FilamentSpoolPrice" placeholder="Spool price" style="resize: none; outline: none; font-family: Staatliches; font-size: 25px; height: 40px; width: 280px; position: relative; left: 18%; margin-bottom: 20px; top: 10px; text-align: center; padding-top: 10px;"></textarea>
		<textarea id="FilamentSpoolWeight" placeholder="Grams" style="resize: none; outline: none; font-family: Staatliches; font-size: 25px; height: 40px; width: 130px; position: relative; left: 24.5%; margin-bottom: 20px; top: 10px; text-align: center; padding-top: 10px;"></textarea>
		<textarea id="FilamentSurcharge" placeholder="Surcharge (%)" style="resize: none; outline: none; font-family: Staatliches; font-size: 25px; height: 40px; width: 150px; position: relative; left: 31%; margin-bottom: 20px; top: 10px; text-align: center; padding-top: 10px;"></textarea>
	</div>

	<div class="CalculatorEnergy">

		<p id="ConsumptionPrice" style="width: 10%; height: 36%; position: absolute; background-color: #FF6600; color: white; left: 99%; font-family: Staatliches; font-size: 35px; text-align: center; padding-top: 10px; padding-right: 5px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">$0.00</p>

		<p class="CalculatorEnergyTitle" style="position: relative; left: 37%;">Energy consumption</p>
		<p style="display: inline-grid; color: white; font-family: Staatliches; font-size: 30px; position: absolute; top: 10%; left: 26%;">Consumption</p>
		<p style="display: inline-grid; color: white; font-family: Staatliches; font-size: 30px; position: absolute; top: 10%; left: 55%;">Price of kwh</p>

		<textarea id="Watts" placeholder="W" style="resize: none; outline: none; font-family: Staatliches; font-size: 25px; height: 40px; width: 130px; position: relative; left: 26.5%; margin-bottom: 20px; top: 10px; text-align: center; padding-top: 10px;"></textarea>
		<textarea id="kWhPrice" placeholder="kWh price" style="resize: none; outline: none; font-family: Staatliches; font-size: 25px; height: 40px; width: 130px; position: relative; left: 42.8%; margin-bottom: 20px; top: 10px; text-align: center; padding-top: 10px;"></textarea>
	</div>

	<div class="CalculatorWork">

		<p id="WorkPrice" style="width: 10%; height: 15%; position: absolute; background-color: #FF6600; color: white; left: 99%; font-family: Staatliches; font-size: 35px; text-align: center; padding-top: 10px; padding-right: 5px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">$0.00</p>

		<p class="CalculatorWorkTitle" style="position: relative; left: 38%;">Work calculation</p>
		<p style="display: inline-grid; color: white; font-family: Staatliches; font-size: 30px; position: absolute; top: 4%; left: 10%;">Print setup</p>
		<p style="display: inline-grid; color: white; font-family: Staatliches; font-size: 30px; position: absolute; top: 15%; left: 10%;">Time (m)</p>
		<p style="display: inline-grid; color: white; font-family: Staatliches; font-size: 30px; position: absolute; top: 15%; left: 55%;">Tariff</p>
		<p style="display: inline-grid; color: white; font-family: Staatliches; font-size: 30px; position: absolute; top: 47%; left: 10%;">Postprocessing</p>
		<p style="display: inline-grid; color: white; font-family: Staatliches; font-size: 30px; position: absolute; top: 58%; left: 10%;">Time (m)</p>
		<p style="display: inline-grid; color: white; font-family: Staatliches; font-size: 30px; position: absolute; top: 58%; left: 55%;">Tariff</p>

		<textarea id="SetupMinutes" placeholder="Minutes (m)" style="resize: none; outline: none; font-family: Staatliches; font-size: 25px; height: 40px; width: 290px; position: absolute; left: 10%; margin-bottom: 20px; top: 34%; text-align: center; padding-top: 10px;"></textarea>
		<textarea id="SetupHour" placeholder="Hour (h)" style="resize: none; outline: none; font-family: Staatliches; font-size: 25px; height: 40px; width: 290px; position: absolute; left: 54.8%; margin-bottom: 20px; top: 34%; text-align: center; padding-top: 10px;"></textarea>
		<textarea id="PostMinutes" placeholder="Minutes (m)" style="resize: none; outline: none; font-family: Staatliches; font-size: 25px; height: 40px; width: 290px; position: absolute; left: 10%; margin-bottom: 20px; top: 78%; text-align: center; padding-top: 10px;"></textarea>
		<textarea id="PostHour" placeholder="Hour (h)" style="resize: none; outline: none; font-family: Staatliches; font-size: 25px; height: 40px; width: 290px; position: absolute; left: 54.8%; margin-bottom: 20px; top: 78%; text-align: center; padding-top: 10px;"></textarea>
	</div>

	<div style="background-color: #424242; height: 80px; width: 80px; border-radius: 45px; position: fixed; top: 90%; left: 94%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
		<button onclick="AnimateAdding()" style="height: 80px; width: 80px; z-index: 1; background: transparent; border-radius: 45px; position: absolute;"></button>
		<p style="margin: auto; position: relative; color: white; font-family: Staatliches; font-size: 100px; left: 18px; top: -18px;">+</p>
	</div>

	<div id="addFilament" class="AddFilamentIdle">
		<button style="height: 80px; width: 80px; z-index: 1; background: transparent; border-radius: 45px; position: absolute;"></button>
		<img src="../ASSETS/spool_w.png" style="position: relative;margin: auto;height: 50px; top: 14px; left: 14px;">
	</div>

	<div id="addPrinter" class="AddPrinterIdle">
		<button style="height: 80px; width: 80px; z-index: 1; background: transparent; border-radius: 45px; position: absolute;"></button>
		<img src="../ASSETS/printer_w.png" style="position: relative;margin: auto;height: 50px; top: 14px; left: 14px;">
	</div>

	<div id="addInventory" class="AddInventoryIdle">
		<button style="height: 80px; width: 80px; z-index: 1; background: transparent; border-radius: 45px; position: absolute;"></button>
		<img src="../ASSETS/nozzle_w.png" style="position: relative;margin: auto;height: 50px; top: 14px; left: 14px;">
	</div>

	<div id="addModel" class="AddModelIdle">
		<button style="height: 80px; width: 80px; z-index: 1; background: transparent; border-radius: 45px; position: absolute;"></button>
		<img src="../ASSETS/model_w.png" style="position: relative;margin: auto;height: 50px; top: 14px; left: 14px;">
	</div>

	<script src="../JS/menuAnimation.js"></script>
	<script src="../JS/addingAnimation.js"></script>
	<script src="../JS/toCalcAnimation.js"></script>
	<script src="../JS/calculating.js"></script>

</body>
</html>