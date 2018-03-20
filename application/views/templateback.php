<!DOCTYPE html>
<html lang="en">
<?php echo $__header; ?>
<body>
<?php //echo $__header; ?>
<?php $typeuser = $this->session->userdata('login'); ?>
<?php
						if ($typeuser=='admin')
								{echo $__menuadmin;}
						elseif ($typeuser == '2')
                        {echo $__menuuser;}
                                else
								{
									echo $__menu;
								}
							?>
<?php echo $__content; ?>
</div>
<?php echo $__footer; ?>
</body>
</html>
