<?php
/**Create A Session */
 if(!session_id())
  {
    session_start();
  }

/**See all of the session Contents*/

var_dump($_SESSION);

/**Delete a Session */
 session_destroy();

?>
