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

	require_once(__DIR__ . "/app/core/fast.php");
  
    $rt = (isset($_GET['rt']) ? $rt = $_GET['rt'] : 'index');
	
	$fast = new fast();
	$fast->page_title = "Home Page";
	
	include_once(__DIR__ . "/app/views/header.php");
?>
    <body>
        <h2>Coming Soon!</h2>
        <p>Requested Page: <?php echo $rt; ?></p>
    </body>
<?php		
	include_once(__DIR__ . "/app/views/footer.php");

