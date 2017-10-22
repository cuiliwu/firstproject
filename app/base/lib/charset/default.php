<?php


class base_charset_default implements base_charset_interface
{
	function __construct() {
		set_time_limit(0);
	}
    function local2utf($strFrom,$charset='zh') {
        return $this->utfconvert($strFrom,$charset,false);
    }

    function utf2local($strFrom,$charset='zh') {
        return $this->utfconvert($strFrom,$charset,true);
    }

    function utfconvert($strFrom,$charset,$isfromUtf=false){
        if (!trim($strFrom)) return $strFrom;

        $charsetList = array('zh' => 'GBK//IGNORE', 'ZH' => 'GBK//IGNORE', 'gb' => 'GBK//IGNORE', 'GB' => 'GBK//IGNORE', 'utf' => 'UTF-8', 'UTF' => 'UTF-8', 'utf8' => 'UTF-8', 'UTF8' => 'UTF-8');
        $inCharset   = $isfromUtf ? 'UTF-8' : 'GBK//IGNORE';
        $outCharset  = isset($charsetList[$charset]) ? $charsetList[$charset] : $charset;

        return iconv($inCharset, $outCharset, $strFrom);
    }

    function u2utf8($c) {
        $str='';
        if ($c < 0x80) {
            $str.=$c;
        }
        else if ($c < 0x800) {
            $str.=chr(0xC0 | $c>>6);
            $str.=chr(0x80 | $c & 0x3F);
        }
        else if ($c < 0x10000) {
            $str.=chr(0xE0 | $c>>12);
            $str.=chr(0x80 | $c>>6 & 0x3F);
            $str.=chr(0x80 | $c & 0x3F);
        }
        else if ($c < 0x200000) {
            $str.=chr(0xF0 | $c>>18);
            $str.=chr(0x80 | $c>>12 & 0x3F);
            $str.=chr(0x80 | $c>>6 & 0x3F);
            $str.=chr(0x80 | $c & 0x3F);
        }
        return $str;
    }


    function utf82u($Char){
        switch(strlen($Char)){
            case 1:
                return ord($Char);
            case 2:
                $OutStr=(ord($Char[0])&0x3f)<<6;
                $OutStr+=ord($Char[1])&0x3f;
                return $OutStr;
            case 3:
                $OutStr=(ord($Char[0])&0x1f)<<12;
                $OutStr+=(ord($Char[1])&0x3f)<<6;
                $OutStr+=ord($Char[2])&0x3f;
                return $OutStr;
            case 4:
                $OutStr=(ord($Char[0])&0x0f)<<18;
                $OutStr+=(ord($Char[1])&0x3f)<<12;
                $OutStr+=(ord($Char[2])&0x3f)<<6;
                $OutStr+=ord($Char[3])&0x3f;
                return $OutStr;
        }
    }

	/**
	 * 替换utf-8字符集的bomtou
	 * @param string 传入待处理的字符串
	 * @return mixed 待处理的字符串或者false
	 */
	public function replace_utf8bom($str)
	{
		$charset [1] =  substr ( $str ,0,1);
		$charset [2] =  substr ( $str ,1,1);
		$charset [3] =  substr ( $str ,2,1);
		if  (ord( $charset [1]) == 239 && ord( $charset [2]) == 187 && ord( $charset [3]) == 191)
		{
			$str = substr( $str, 3);
			return $str;
		}
		else
		{
			return false;
		}
	}

	/**
	 * 判断是否是utf-8字符集
	 * @param string 传入字符串
	 * @return boolean true or false
	 */
	public function is_utf8_old($word)
	{
		if (preg_match("/^([".chr(228)."-".chr(233)."]{1}[".chr(128)."-".chr(191)."]{1}[".chr(128)."-".chr(191)."]{1}){1}/",$word) == true ||
			preg_match("/([".chr(228)."-".chr(233)."]{1}[".chr(128)."-".chr(191)."]{1}[".chr(128)."-".chr(191)."]{1}){1}$/",$word) == true ||
			preg_match("/([".chr(228)."-".chr(233)."]{1}[".chr(128)."-".chr(191)."]{1}[".chr(128)."-".chr(191)."]{1}){2,}/",$word) == true){
				return true;
		}else{
			return false;
		}
	}

    public function is_utf8 ( $string )  {

        return  preg_match ( '%^(?:
            [\x09\x0A\x0D\x20-\x7E] # ASCII
            | [\xC2-\xDF][\x80-\xBF] # non-overlong 2-byte
            | \xE0[\xA0-\xBF][\x80-\xBF] # excluding overlongs
            | [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2} # straight 3-byte
            | \xED[\x80-\x9F][\x80-\xBF] # excluding surrogates
            | \xF0[\x90-\xBF][\x80-\xBF]{2} # planes 1-3
            | [\xF1-\xF3][\x80-\xBF]{3} # planes 4-15
            | \xF4[\x80-\x8F][\x80-\xBF]{2} # plane 16
        )*$%xs' ,  $string ) ;
    }


}//End Class
