<?php

/**
 * HttpParser Extension Stub
 */

class HttpParser
{
    /**
     * Methods
     */

    public function __construct(){}
    
    public function __destruct(){}

    /**
     * Takes a string of data, and parses the string of data returning
     * an integer to indicate how much of the data has been read.
     *
     * @param string $buffer
     * @param int $offset
     * @return int
     */
    public function execute($buffer, $offset){}

    /**
     * Tells you whether the parser is in an error state.
     *
     * @return bool
     */
    public function hasError(){}

    /**
     * Tells you whether the parser is finished or not and in a good state.
     *
     * @return bool
     */
    public function isFinished(){}

    /**
     * Returns an associative array of CGI environment variables.
     *
     * @return array
     */
    public function getEnvironment(){}
    
    
}