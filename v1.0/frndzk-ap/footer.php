<?php 
ob_start();
 
if(isset($_SESSION['bitto'])) {
require('../frndzk.php');



echo'<div id="footer">';

frndzk_footer_core();

echo'</div>
<!-- End Footer -->
</body>
</html>';

} else { 
  header("Location: index.php"); 
}
ob_flush();
?>