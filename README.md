# xpire
App designed to help make users aware of food expirations, a tracker. 
Based around mysql database and written in php, html, css, and js, this app could really improve the efficiency of many food service industries in making inventory a less tedious and wasteful task

	drop project files into WWW directory in WAMP, or htdocs in MAMP

	Must setup sql database through phpmyadmin as follows:

	name of DB: xpire_foods
	
	collation: latin1_bin
	
	Table:
	
		Name: food
		
		Columns: 4
		
			Column 1: ID, int, auto-increment, primary key
			
			Column 2: expiry, date
			
			Column 3: name, text, latin1_bin
			
			column 4: quantity, int(255)
			
	USERNAME:ROOT
	
	PASSWORD:ROOT
	
