<html>
	<head>
		<style>

#fooBar{
	background-color: red;
	padding:  30px 30px 30px 30px;

    
}

		</style>
		<title>
		Dinamically add textbox, radio button
		</title>
		<script language="Javascript">
		function add(type) {

	//Create an input type dynamically.
	var element = document.createElement("input");
	var div = document.createElement("div");

	//Assign different attributes to the element.
	element.setAttribute("type", type);
	element.setAttribute("value", type);
	element.setAttribute("name", type);


	var foo = document.getElementById("fooBar");

	//Append the element in page (in span).
	foo.appendChild(element);
	foo.append(div);
}
		</script>
	</head>
	<body>
	<form>
		<h2>Dinamically add textbox, and radio button in form</h2>
		<br/>
		<h3>Please select any type</h3>
		<select name="element">
			<option value="button">Button</option>
			<option value="text">TextBox</option>
			<option value="radio">Radio</option>
		</select>
		<input type="button" value="add" onclick="add(document.forms[0].element.value)"/>
		<div id="fooBar">&nbsp;</div>
	</form>
	</body>
</html>