<link rel="stylesheet" type="text/css" href="./style.css">
<?php include "../header.php" ?>
<?php include "./var.php" ?>
		<div class="content">
		<?php
			foreach ($boxs as $box ) {
				echo "
					<div class= 'box ".$box."'>
						<span class='icon'></span>
						<a href='#' class='button'>
							$box
							<span class='line line-top'></span>
							<span class='line line-right'></span>
							<span class='line line-bottom'></span>
							<span class='line line-left'></span>
						</a>
					</div>
				";
				echo "
					<script type='text/javascript'>
						var a = document.getElementsByClassName('".$box."')[0];
						/*alert();*/
						a.childNodes[1].style.background='url(img/".$box.".svg)  no-repeat';
						a.childNodes[1].style.backgroundSize = '155px 155px'
					</script>
				";
			}
		?>
			<div class="box" id="back">
				<a href="../index.php" class="button">
					back
					<span class="line line-top"></span>
					<span class="line line-right"></span>
					<span class="line line-bottom"></span>
					<span class="line line-left"></span>
				</a>				
			</div>
		</div>
<?php include "../footer.php" ?>