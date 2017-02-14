<?php
spl_autoload_register(function ($class) {
	include 'classes/' . $class . '.class.php';
});

$class = new UsefulStuff;

if ($form = $class->post('form-id'))
{
	if ($form === 'abbr-to-state')
	{
		if ($result = $class->abbr_to_state($class->post('state')))
		{
			include 'result.php';
		}
		else
		{
			$error = 'You did not submit a valid us state abbreviation.';
			include 'error.php';
		}
	}
	elseif ($form === 'state-to-abbr')
	{
		if ($result = $class->state_to_abbr($class->post('abbr')))
		{
			include 'result.php';
		}
		else
		{
			$error = 'You did not enter a valid state name.';
			include 'error.php';
		}
	}
	
}
else
{
	include 'form.php';
}