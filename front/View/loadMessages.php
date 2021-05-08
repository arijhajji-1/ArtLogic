<?php
require_once '../config.php';
$pdo = getConnexion();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
	<?php
$pseudo=$_SESSION['pseudo_user'];
$recupMessages = $pdo->query("SELECT * From messages order by date_message ASC");
while($messages=$recupMessages->fetch()){
?>

                                    <strong class="primary-font"><?php echo $messages['pseudo'] ; ?></strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span><?php echo $messages['date_message']; ?></small>
                                
                                <p><?php echo $messages['msg']; ?></p>
                            
<?php
}
?>
</body>
</html>