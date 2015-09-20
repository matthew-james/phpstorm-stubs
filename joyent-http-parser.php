<?php

/**
 * httpparser stub
 */

const HTTP_BOTH;

const HTTP_REQUEST;

const HTTP_RESPONSE;

/**
 * @param  mixed    $target One of HTTP_BOTH, HTTP_REQUEST, HTTP_RESPONSE
 * @return resource The httpparser resource
 */
function http_parser_init($target = HTTP_REQUEST) {}

/**
 * @param  resource $resource The httpparser resource
 * @param  string   $buffer
 * @param  array    $result
 * @return bool     Returns true if the parser is finished, false otherwise
 */
function http_parser_execute($resource, $buffer, array &$result) {}