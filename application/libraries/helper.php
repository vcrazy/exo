<?php

class Helper
{
	/**
	 * @param string $str - the cyrillic string
	 * @return string - the corresponding latin string
	*/
	public static function cyr2lat($str)
	{
		$str = mb_strtolower($str, 'utf-8');

        $cyr = array("а", "б", "в", "г", "д", "е", "ж", "з", "и", "й", "к", "л", "м", "н", "о", "п", "р", "с", "т", "у", "ф", "х", "ц", "ч", "ш", "щ", "ъ", "ь", "ю", "я", ' ', '-');
        $lat = array("a", "b", "v", "g", "d", "e", "j", "z", "i", "i", "k", "l", "m", "n", "o", "p", "r", "s", "t", "u", "f", "h", "c", "ch", "sh", "sht", "a", "i", "iu", "ia", '-', '-');

		$cyr = array_combine($cyr, $lat);

        $out = '';

		$j = mb_strlen($str, 'utf-8');

		for($i = 0; $i < $j; $i++)
		{
			$l = mb_substr($str, $i, 1, 'utf-8');

			if(isset($cyr[$l]))
            {
				$out .= $cyr[$l];
			}
			else
			{
				$out .= $l;
			}
        }

		return $out;
	}

}
