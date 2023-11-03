<html>
<head>
	<title>Подтверждение</title>
	<style>
		body {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
			margin: 0;
		}

		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			text-align: center;
			max-width: 400px;
			padding: 130px;
			background-color: #f1f1f1;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			border-radius: 10px;
			position: relative;
		}
		
		h2 {
			margin-top: 0;
			font-size: 24px;
			font-weight: bold;
			text-transform: uppercase;
			color: #333;
		}

		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			text-align: center;
			margin-top: 20px;
		}
		
		input[type="text"] {
		    margin-bottom: 0px;
    padding: 41px;
    font-size: 24px;
    border: 1px solid #ccc;
    border-radius: 17px
px
;
    width: 100%;
    box-sizing: border-box;
		}
		
		input[type="submit"] {
			margin-top: 30px;
			background-color: #fff;
			color: #2980b9;
			padding: 10px 20px;
			border: 2px solid #2980b9;
			border-radius: 25px;
			cursor: pointer;
			font-size: 16px;
			transition: background-color 0.3s ease, color 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #2980b9;
			color: #fff;
		}

		.back-btn {
			position: absolute;
			top: 10px;
			left: 10px;
			background-color: #2980b9;
			color: #fff;
			border: none;
			border-radius: 25px;
			padding: 10px 20px;
			cursor: pointer;
			font-size: 16px;
			transition: background-color 0.3s ease, color 0.3s ease;
		}

		.back-btn:hover {
			background-color: #fff;
			color: #2980b9;
		}

		.checkbox-container {
			display: flex;
			align-items: center;
			margin-top: 10px;
		}

		.checkbox-label {
			font-size: 16px;
			margin-left: 5px;
		}
	</style>
</head>
<body>
	<div class="container">
		<button class="back-btn">Назад</button>
		<h2>Введите код</h2>
		<form method="POST">
			<label for="code"><span style="font-size: 20px">Получите 6-значный код в мобильном приложении для аутентификации</label>
			<input type="text" name="code" placeholder="Введите код">
			<div class="checkbox-container">
				<input type="checkbox" name="remember_device" id="remember_device">
				<label for="remember_device" class="checkbox-label">Запомнить это устройство на 30 дней</label>
</div>
<input type="submit" value="Подтвердить">
</form>
</div>

</body>
</html>