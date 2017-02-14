<?php
/**
 * Csv Library
 *
 * 
 * @author	Ben Headrick
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://benheadrick.com
 */



Class UsefulStuff {
	
	/**
	 * Convert a US State to it's abbreviation.
	 *
	 * @param 	string	$str 		US State name
	 *
	 * @return 	mixed				Str containing abbreviation or bool(false) on fail
	 */
	public function state_to_abbr($str)
	{
		switch (strtolower($str)) 
		{
			case 'alaska':
				return 'AK';
			case 'alabama':
				return 'AL';
			case 'arkansas':
				return 'AR';
			case 'arizona':
				return 'AZ';
			case 'california':
				return 'CA';
			case 'olorado':
				return 'CO';
			case 'connecticut':
				return 'CT';
			case 'delaware':
				return 'DE';
			case 'florida':
				return 'FL';
			case 'georgia':
				return 'GA';
			case 'hawaii':
				return 'HI';
			case 'iowa':
				return 'IA';
			case 'idaho':
				return 'ID';
			case 'illinois':
				return 'IL';
			case 'indiana':
				return 'IN';
			case 'kansas':
				return 'KS';
			case 'kentucky':
				return 'KY';
			case 'louisiana':
				return 'LA';
			case 'massachusetts':
				return 'MA';
			case 'maryland':
				return 'MD';
			case 'maine':
				return 'ME';
			case 'michigan':
				return 'MI';
			case 'minnesota':
				return 'MN';
			case 'missouri':
				return 'MO';
			case 'mississippi':
				return 'MS';
			case 'montana':
				return 'MT';
			case 'north carolina':
				return 'NC';
			case 'north dakota':
				return 'ND';
			case 'nebraska':
				return 'NE';
			case 'new hampshire':
				return 'NH';
			case 'new jersey':
				return 'NJ';
			case 'new mexico':
				return 'NM';
			case 'nevada':
				return 'NV';
			case 'new York':
				return 'NY';
			case 'ohio':
				return 'OH';
			case 'oklahoma':
				return 'OK';
			case 'oregon':
				return 'OR';
			case 'pennsylvania':
				return 'PA';
			case 'rhode island':
				return 'RI';
			case 'south carolina':
				return 'SC';
			case 'south dakota':
				return 'SD';
			case 'tennessee':
				return 'TN';
			case 'texas':
				return 'TX';
			case 'utah':
				return 'UT';
			case 'virginia':
				return 'VA';
			case 'vermont':
				return 'VT';
			case 'washington':
				return 'WA';
			case 'wisconsin':
				return 'WI';
			case 'west virginia':
				return 'WV';
			case 'wyoming':
				return 'WY';
			case 'district of columbia':
				return 'DC';
			default:
				return FALSE;
		}
	}
	
	/**
	 * Spell out a US State when given abbreviation.
	 *
	 * @param 	string	$str		Str containing US State name
	 *
	 * @param 	bool	$capitalize	Whether to capitalize the first letter or not
	 *
	 * @return 	mixed 				Str containing State name or bool(false) on fail
	 */
	public function abbr_to_state($str, $capitalize = TRUE)
	{
		switch (ucwords($str)) 
		{
			case 'AK':
				$return = 'alaska';
				break;
			case 'AL':
				$return = 'alabama';
				break;
			case 'AR':
				$return = 'arkansas';
				break;
			case 'AZ':
				$return = 'arizona';
				break;
			case 'CA':
				$return = 'california';
				break;
			case 'CO':
				$return = 'olorado';
				break;
			case 'CT':
				$return = 'connecticut';
				break;
			case 'DE':
				$return = 'delaware';
				break;
			case 'FL':
				$return = 'florida';
				break;
			case 'GA':
				$return = 'georgia';
				break;
			case 'HI':
				$return = 'hawaii';
				break;
			case 'IA':
				$return = 'iowa';
				break;
			case 'ID':
				$return = 'idaho';
				break;
			case 'IL':
				$return = 'illinois';
				break;
			case 'IN':
				$return = 'indiana';
				break;
			case 'KS':
				$return = 'kansas';
				break;
			case 'KY':
				$return = 'kentucky';
				break;
			case 'LA':
				$return = 'louisiana';
				break;
			case 'MA':
				$return = 'massachusetts';
				break;
			case 'MD':
				$return = 'maryland';
				break;
			case 'ME':
				$return = 'maine';
				break;
			case 'MI':
				$return = 'michigan';
				break;
			case 'MN':
				$return = 'minnesota';
				break;
			case 'MO':
				$return = 'missouri';
				break;
			case 'MS':
				$return = 'mississippi';
				break;
			case 'MT':
				$return = 'montana';
				break;
			case 'NC':
				$return = 'north carolina';
				break;
			case 'ND':
				$return = 'north dakota';
				break;
			case 'NE':
				$return = 'nebraska';
				break;
			case 'NH':
				$return = 'new hampshire';
				break;
			case 'NJ':
				$return = 'new jersey';
				break;
			case 'NM':
				$return = 'new mexico';
				break;
			case 'NV':
				$return = 'nevada';
				break;
			case 'NY':
				$return = 'new York';
				break;
			case 'OH':
				$return = 'ohio';
				break;
			case 'OK':
				$return = 'oklahoma';
				break;
			case 'OR':
				$return = 'oregon';
				break;
			case 'PA':
				$return = 'pennsylvania';
				break;
			case 'RI':
				$return = 'rhode island';
				break;
			case 'SC':
				$return = 'south carolina';
				break;
			case 'SD':
				$return = 'south dakota';
				break;
			case 'TN':
				$return = 'tennessee';
				break;
			case 'TX':
				$return = 'texas';
				break;
			case 'UT':
				$return = 'utah';
				break;
			case 'VA':
				$return = 'virginia';
				break;
			case 'VT':
				$return = 'vermont';
				break;
			case 'WA':
				$return = 'washington';
				break;
			case 'WI':
				$return = 'wisconsin';
				break;
			case 'WV':
				$return = 'west virginia';
				break;
			case 'WY':
				$return = 'wyoming';
				break;
			case 'DC':
				$return = 'district of columbia';
				break;
			default:
				return FALSE;
		}
		if ($capitalize)
		{
			$return = ucfirst($return);
		}
		return $return;
	}

	
	/**
	 * Test whether any forms have been submitted with the POST method
	 *
	 * @param 	mixed	$name		bool(false) if only testing whether anything has been posted or string if 
	 *								testing a specific key name in the $_POST array.
	 *
	 * @return 	mixed 				bool(false) if nothing was submitted/value wasn't set or string if retreiving
	 *								a value from a valid input.
	 */
	public function post($name = FALSE)
	{
		if ( ! empty($_POST))
		{
			if ( ! $name)
			{
				return TRUE;
			}
			if (isset($_POST[$name]))
			{
				return $_POST[$name];
			}
		}
		return FALSE;
	}

	/**
	 * Test whether any forms have been submitted with the GET method
	 *
	 * @param 	mixed	$name		bool(false) if only testing whether anything has been posted or string if 
	 *								testing a specific key name in the $_GET array.
	 *
	 * @return 	mixed 				bool(false) if nothing was submitted/value wasn't set or string if retreiving
	 *								a value from a valid input.
	 */
	public function get($name = FALSE)
	{
		if (isset($_GET))
		{
			if ( ! $name)
			{
				return TRUE;
			}
			if (isset($_GET[$name]))
			{
				return $_GET[$name];
			}
		}
		return FALSE;
	}
	
}