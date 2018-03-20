<!DOCTYPE html>
<html lang="en">
<?php echo $__header; ?>
<body>
<?php //echo $__header; ?>
<?php $typeuser = $this->session->userdata('typeuser'); ?>
<?php
						if ($typeuser=='1')
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
