

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Roll Dice</title>
 </head>
 <body>
 	<h1>Dice: <?= $dice ?>
 	<h2>Your guess: <?= $guess ?></h2>
 	<h3><?= $message ?></h3>

 	<a href="{{{ action ('GameController@rollDice', 1) }}}">Guess 1</a>
 	<a href="{{{ action ('GameController@rollDice', 2) }}}">Guess 2</a>
 	<a href="{{{ action ('GameController@rollDice', 3) }}}">Guess 3</a>
 	<a href="{{{ action ('GameController@rollDice', 4) }}}">Guess 4</a>
 	<a href="{{{ action ('GameController@rollDice', 5) }}}">Guess 5</a>
 	<a href="{{{ action ('GameController@rollDice', 6) }}}">Guess 6</a>
 </body>
 </html>