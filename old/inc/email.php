<?php

class email
{
    private $_to             = 'will@getglossy.com.au';
    private $_recieverName   = 'Peter';
    private $_from           = 'anon@anon.com.au';
    private $_headers        = '';
    private $_message        = null;
    private $_subject        = null;
    private $_senderName     = null;
    private $_errorMessage   = null;

    public function __construct ()
    {
        $this->_headers .= 'MIME-Version: 1.0' . "\r\n";
        $this->_headers .= 'Content-type: text/html; charset=utf8' . "\r\n";
        $this->_headers .= 'To: :recieverName: <:to:>' . "\r\n";
        $this->_headers .= 'From: :senderName: <:from:>' . "\r\n";

        $this->_message = '';
    }

    public function __set ($name, $value)
    {
        if ( !isset($name)
            && !isset($value) )
        {
            $this->_errorMessage = 'name and/or value parameters are not set.';
            throw new Exception('Caught exception: ' . $this->_errorMessage);
        }
        else
        {
            if ( !is_string($name) )
            {
                $this->_errorMessage = 'name is not string, got ' . gettype($name) . 'instead.';
                throw new Exception('Caught exception: ' . $this->_errorMessage);
            }
            else
            {
                if ( empty($name)
                    && empty($value) )
                {
                    $this->_errorMessage = 'name and/or value parameters are empty.';
                    throw new Exception('Caught exception: ' . $this->_errorMessage);
                }
                else
                {
                    if ( !property_exists('email', '_' . $name) )
                    {
                        $this->_errorMessage = 'Varible $'. $name .' (name parameter) cannot be found in class: '. get_class();
                        throw new Exception('Caught exception: ' . $this->_errorMessage);
                    }
                    else
                    {
                        $this->{'_' . $name} = $value;
                        //echo $this->{'_' . $name} . "\n";
                        return true;
                    }
                }
            }
        }
    }

    public function __get ($name)
    {
        if ( !isset($name) )
        {
            $this->_errorMessage = 'Varible $'. $name .' (name parameter) is not set.';
            throw new Exception($this->_errorMessage);
        }
        else
        {
            if ( !is_string($name) )
            {
                $this->_errorMessage = 'Varible $'. $name .' (name parameter) is not string, got ' . gettype($name) . 'instead.';
                throw new Exception($this->_errorMessage);
            }
            else
            {
                if ( empty($name) )
                {
                    $this->_errorMessage = 'Varible $'. $name .' (name parameter) is empty.';
                    throw new Exception($this->_errorMessage);
                }
                else
                {
                    if ( !is_a($this, $name) )
                    {
                        $this->_errorMessage = 'Varible $'. $name .' (name parameter) cannot be found in class: '. get_class();
                        throw new Exception($this->_errorMessage);
                    }
                    else
                    {
                        return $_{$name};
                    }
                }
            }
        }
    }

    private function actionCheckParams ()
    {
        $properties = get_object_vars($this);
        foreach ($properties as $prop => $val)
        {
            //echo 'prop: ' . $prop . ', val:' . $val . "\n";
            if ( $prop != '_errorMessage' )
            {
                if ( is_null($val) )
                {
                    $this->_errorMessage = 'Property "'. str_replace('_', '', $prop) .'" has not been set in class: '. get_class();
                    throw new Exception($this->_errorMessage);
                }
            }
        }

        return true;
    }

    private function actionBuildHeaders ()
    {
        $properties = get_object_vars($this);
        foreach ($properties as $prop => $val)
        {
            $var = str_replace('_', '', $prop);
            //echo 'var: ' . $var, "\n";
            $this->_headers = str_replace(':' . $var . ':', $val, $this->_headers);
        }

        return true;
    }

    public function actionSubmit ()
    {
        if ( $this->actionCheckParams() )
        {
            if ( $this->actionBuildHeaders() )
            {
                //echo $this->_to, "\n", $this->_subject, "\n", $this->_message, "\n", $this->_headers;
                if ( mail($this->_to, $this->_subject, $this->_message, $this->_headers) )
                {
                    return true;
                }
                else
                {
                    $this->_errorMessage = 'Email message failed to send. No additional information given.';
                    throw new Exception($this->_errorMessage);
                }
            }
        }
    }
}