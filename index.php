<html>
<head>
<title>Hello PHP!</title>
<script src="<?php echo $_ENV['ELASTICIO_WIDGET_URL'] ?>"></script>
</head>
<body>
<h1>PHP Demo of elastic.io contact importer</h1>

<button onclick="elasticio.contacts()"><strong>Click me!</strong></button>

<p>This demo project demonstrate how you can connect your App to Xing,
 LinkedIn, Google Contacts, Salesforce and many other APIs to import
 (and synchronise) contact data.
 </p>
 
<h2>Imported contacts:</h2>
<ul id="contacts"></ul>
<script>
	// Optional identification step
	elasticio.identify({
		id : 'my-superuser-id',
		email : 'chuck@norris.com',
		name : 'Chuck Norris'
	});
	// Registering event listener that will get the data
	elasticio.on('contact', function(contact) {
		// Now contact data is stored in 'contact' property
		var para = document.createElement("li");
		var node = document.createTextNode(contact.name.firstName + ' ' + contact.name.lastName);
		para.appendChild(node);

		var element = document.getElementById("contacts");
		element.appendChild(para);
	});
</script>
</body>
</html>
