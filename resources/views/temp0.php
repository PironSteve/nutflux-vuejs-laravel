<?php


Auth::user() = Auth::user()->subuser[0]->id;

header('Location: ../../list/index.blade.php');
?>
<h3>papa golf</h3>
<?php


exit();
//redirect 
