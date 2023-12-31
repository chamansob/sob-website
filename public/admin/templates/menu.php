<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Menu Manager</title>
<meta charset="utf-8">

<link rel="stylesheet" href="<?php echo _BASE_URL; ?>templates/css/style.css">
<!--[if lte IE 8]>
<script type="text/javascript" src="<?php echo _BASE_URL; ?>templates/js/html5.js"></script>
<![endif]-->
<script>
var _BASE_URL = '<?php echo _BASE_URL; ?>';
var current_group_id = <?php echo $group_id; ?>;
</script>
<script src="<?php echo _BASE_URL; ?>templates/js/jquery.1.4.1.min.js"></script>
<script src="<?php echo _BASE_URL; ?>templates/js/interface-1.2.js"></script>
<script src="<?php echo _BASE_URL; ?>templates/js/inestedsortable.js"></script>
<script src="<?php echo _BASE_URL; ?>templates/js/menu.js"></script>
<script src="<?php echo _BASE_URL; ?>templates/js/jquery.slugify.js"></script>
<script type="text/javascript" charset="utf-8">
			$().ready(function () {
				$('.url').slugify('.title');
			
				var pigLatin = function(str) {
					return str.replace(/(\w*)([aeiou]\w*)/g, "$2$1ay");
				}
			
				$('#pig_latin').slugify('.title', {
						slugFunc: function(str, originalFunc) { return pigLatin(originalFunc(str)); } 
					}
				);
			
			}); 
		</script>

</head>
<body>
	<section>
		<header>
			
			<div id="link">
				<a class="button red" href="<?=_BASE_URL?>">Back to Admin</a>
			</div>
           
		</header>
		<article>
			<section>
				<ul id="menu-group">
					<?php foreach ((array)$menu_groups as $id => $title) : ?>
					<li id="group-<?php echo $id; ?>">
						<a href="<?php echo site_url('menu&amp;group_id=' . $id); ?>">
							<?php echo $title; ?>
						</a>
					</li>
					<?php endforeach; ?>
					<li id="add-group"><a href="<?php echo site_url('menu_group.add'); ?>" title="Add Menu Group">+</a></li>
				</ul>
				<div class="clear"></div>

				<form method="post" id="form-menu" action="<?php echo site_url('menu.save_position'); ?>">
					<div class="ns-row" id="ns-header">
						<div class="ns-actions">Actions</div>
						<div class="ns-class">Status</div>
					    <div class="ns-url">Url</div>
						<div class="ns-title">Title</div>
					</div>
					<?php echo $menu_ul; ?>
					<div id="ns-footer">
						<button type="submit" class="button green small" id="btn-save-menu">Update Menu</button>
					</div>
				</form>
			</section>
			<aside>
				<div class="box info">
					<h2>Info</h2>
					<section>
						<p>Drag the menu list to re-order, and click <b>Update Menu</b> to save the position.</p>
						<p>To add a menu, use the <b>Add Menu</b> form below.</p>
					</section>
				</div>
				<div class="box">
					<h2>Current Menu Group</h2>
					<section>
						<span id="edit-group-input"><?php echo $group_title; ?></span>
						(ID: <b><?php echo $group_id; ?></b>)
						<div>
							<a id="edit-group" class="button green" href="#">Edit</a>
							<?php if ($group_id > 1) : ?>
							&middot; <a id="delete-group" href="#">Delete</a>
							<?php endif; ?>
						</div>
					</section>
				</div>
				<div class="box" >
					<h2>Quick Add Menu</h2>
					<section>
						<form id="form-add-menu" method="post" action="<?php echo site_url('menu.add'); ?>">
							<p>
								<label for="menu-title">Title</label>
								<input type="text" name="title" autocomplete="off" class="title" id="menu-title">
							</p>
							<p>
								<label for="menu-url">URL</label>
								<input type="text" name="url" class="url" autocomplete="off" id="menu-url">
							</p>
							<p>
								<label for="menu-class">Type</label>
								
                                <select name="class" id="menu-class">
                                <?php
                                $mes = Menu_type::all();
								foreach($mes as $menuda)
								{
									if($menuda->status=="Active")
									{
                                echo'<option value="'.$menuda->id.'">'.ucfirst($menuda->name).'</option>';
								}}
                                ?>
                                
                                </select>
                                <input type="hidden" name="status" id="menu-class" value="Active">
							</p>
                         
							<p class="buttons">
								<input type="hidden" name="group_id" value="<?php echo $group_id; ?>">
								<button id="add-menu" type="submit" class="button green small">Add Menu</button>
							</p>
						</form>
					</section>
				</div>
			</aside>
			<div class="clear"></div>
		</article>
		<footer>
			
		</footer>
	</section>
	<div id="loading">
		<img src="<?php echo _BASE_URL; ?>templates/images/ajax-loader.gif" alt="Loading">
		Processing...
	</div>
</body>
</html>