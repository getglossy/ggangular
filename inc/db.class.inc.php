<?php
    class GetGlossyDB
    {
    	private $dbObject;
    	
    	private $dbName;
    	
    	private $exceptionMessage;
    	
    	function __construct ($dbName = null)
    	{
    		if ( !isset( $dbName ) 
    		     && !is_null($dbName)
    			)
    		{
    			$this->exceptionMessage = 'Database name varible ($dbName) has not been set when constructing the GetGlossy object';
    			$this->throwException();
    			
    		}
    		elseif ( !is_string( $dbName )
    				&& !empty( $dbName) )
    		{
    			$this->exceptionMessage = 'Database name varible ($dbName) is not a string';
    			$this->throwException();
    		}
    		else
    		{
    			$this->dbName = $dbName;
    			$this->dbObject = new PDO('mysql:host=getglossylabs.db.9135259.hostedresource.com;dbname=' . $dbName . ';charset=utf8', 'getglossylabs','GlossyG3t#');
    		}
    	}
    	
    	function getDBObj ()
    	{
    		return $this->dbObject;
    	}
    	
    	function throwException()
    	{
    		throw new Exception($this->exceptionMessage);
    	}
    }
?>