<?php

/*    Copyright (C) 2015 Pruiti Salvatore - All Rights Reserved
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
 
class fast {

	public $config = array();
	public $Db;

	
	function __construct() {
		return true;
	
	}

	public function getVersion() {
		return $this->config["version"];
	}
	
	//da qui dovrei caricare il controller che gestisce l'oggetto
	
	public function load($fast) {
	
		include_once(__DIR__ . "/../views/header.php");
		include(__DIR__ . "/../views/" . $this->controller . ".php");
		include_once(__DIR__ . "/../views/footer.php");
	
	}
	
}

$fast = new fast();
