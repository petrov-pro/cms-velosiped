<?
class MyValidator extends CustomValidator
{

    function DoValidate(&$formars,&$error_hash)
    {
        if(!empty($formars['cap']))
        {
            if($_SESSION['captcha']==$formars['cap']){
            		return true;
            		}else{
        	  		return false;
            		}
        	}else{
        	}

    }
}
?>