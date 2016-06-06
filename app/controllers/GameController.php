<?php 
class GameController extends BaseController {

	//Controller used for games and/or projects from CodeUp.

	public function rollDice($guess = 1)
	{
		$dice = mt_rand(1, 6);

		if ($guess == $dice) {
			$message = 'You guessed correctly!';
		}	else {
			$message = 'Nope!  Try again.';
		}
		$data = array(
				'dice' => $dice,
				'guess' => $guess,
				'message' => $message);

		return View::make('roll-dice')->with($data);
	}

	public function showWhack()
	{
		return View::make('whack-a-weenie');
	}

	public function showSimon()
	{
		return View::make('simple-simon');
	}

	public function showWeather()
	{
		return View::make('weather_map');
	}

	public function showCalculator()
	{
		return View::make('calculator');
	}

}