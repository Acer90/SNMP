<?php
/**
 * phpsnmp - a PHP SNMP library
 *
 * Copyright (C) 2004 David Eder <david@eder,us>
 *
 * Based on snmp - a Python SNMP library
 * Copyright (C) 2003 Unicity Pty Ltd <libsnmp@unicity.com.au>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @author David Eder <david@eder.us>
 * @copyright 2004 David Eder
 * @package phpSNMP
 * @subpackage rfc1155
 * @version .7
 */

/**
 */

require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'rfc1155.php');

/**
 * SNMP V3 Engine ID
 *
 * @package phpSNMP
 * @subpackage rfc3411
 */
class rfc3411_EngineID extends rfc1155_OctetString
{
 /**
  * Constructor
  *
  * @param string $value
  */
  public function __construct($value)
  {
    if($value != '')
    {
      if(strlen($value) < 5 || strlen($value) > 32)
        trigger_error('rfc3411_EngineID must be of length 5 to 32', E_USER_WARNING);
      if(!(ord($value[0]) & 0x80) && strlen($value) != 12)
        trigger_error('rfc3411_EngineID size mismatch', E_USER_WARNING);
    }
    parent::__construct($value);
  }
}

