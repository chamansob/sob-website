<?php

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	protected $table = "page";
	use CommonTrait;
	public $timestamps = false;
	protected $folder = "page";
	protected $guarded = [];

	public static function call_cl_fun()
	{
		return (new Page());
	}

	public static function show($pname, $action)
	{
		echo '<form name="form" class="widget-content" action="deleteall" method="post">
		<div class="table-responsive" data-pattern="priority-columns">
		<table id="' . strtolower(self::tableclass()) .
			's" class="table table-hover non-hover" style="width:100%">
		 
		  <thead>
		   <tr>
			 <th><input type="checkbox" name="checkall"/>
				Id</th>
			  <th>Name</th>
			  <th>Menu Name</th>
			  <th>Image</th>
			  <th>Options </th>
			</tr>
		  </thead>
		  
		</table>';
		$data = self::call_cl_fun();
		if ($data->count() != 0) {

			echo 'Check All <input type="checkbox" id="checkall" name="checkall"/><br><br>
				<button class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="submit"><i class="ico fa fa-trash"></i> Delete All</button>
				';
		}
		echo '</div>
          </form>';
	}

	public static function menu($id)
	{
?>

		<div class="form-group row mb-4">
			<label for="inputEmail3" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Menus:</label>
			<div class="col-xl-10 col-lg-9 col-sm-10">
				<select id="country" class="form-control" name="mid" required>
					<?php


					if ($_GET['action'] == 'add') {

						echo '<option selected="selected" value="0"> Please Select</option>';
						$menu1 = Menu::where("group_id", 1)->get();
						foreach ($menu1 as $menus) {
							$m = Menu::where("parent_id", $menus->id)->get();
							$m1 = Page::where("mid", $menus->id)->count();

							if ($m1 == 0) {
								$link = $menus->id;
								echo '<option value="' . $link . '">' . ucfirst($menus->title) . '</option>';
							}

							if ($m != 0) {

								$sub = Menu::where("parent_id", $menus->id)->get();
								foreach ($sub as $ro) {
									$m2 = Menu::where("parent_id", $ro->id)->get();
									$rp1 = Page::where("mid", $ro->id)->count();

									if ($rp1 == 0) {
										$link = $ro->id;
										echo '<option value="' . $link . '">&nbsp;&nbsp;&nbsp;&nbsp;|-' . ucfirst($ro->title) . '</option>';
									}


									if ($m2 != 0) {

										$sub1 = Menu::where("parent_id", $ro->id)->get();
										foreach ($sub1 as $ro1) {
											$m3 = Menu::where("parent_id", $ro1->id)->get();
											$rp2 = Page::where("mid", $ro1->id)->count();
											if ($rp2 == 0) {
												$link = $ro1->id;
												echo '<option value="' . $link . '">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-|-' . ucfirst($ro1->title) . '</option>';
											}


											if ($m3 != 0) {

												$sub2 = Menu::where("parent_id", $ro1->id)->get();
												foreach ($sub2 as $ro2) {
													$m3 = Menu::where("parent_id", $ro2->id)->get();
													$rp3 = Page::where("mid", $ro2->id)->count();

													if ($rp3 == 0) {
														$link = $ro2->id;
														echo '<option value="' . $link . '">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-|-|-' . ucfirst($ro2->title) . '</option>';
													}
												}
											}
										}
									}
								}
							}
						}
					} else {
						$rw3 = Menu::findOrFail($id);
					?>
						<option selected="selected" value="<?= $rw3->id ?>">
							<?= $rw3->title ?>
						</option>
					<?php
						$row1 = Menu::all();
						foreach ($row1 as $row1) {
							if ($row1->class == 1) {
								if ($rw3->url != $row1->url) {
									if ($row1->parent_id != 0) {
										$m1 = "--";
									} else {
										$m1 = "";
									}

									echo '<option value=' . $row1->id . '>' . $m1 . '' . $row1->title . '</option>';
								}
							}
						}
					}
					?>
				</select>
			</div>
		</div>
<?php
	}
	public static function form_data()
	{
		echo $fo = Forms::form_start();
		if ($_GET['action'] == 'add') {
			self::action_data('', 'add');
			$mid = '';
			$title = '';
			$heading = '';
			$pheading = '';
			$meta_keywords = '';
			$meta_description = '';
			$image = '';
			$impath = '';
			$text = '';
			$og_title = '';
			$og_locale = '';
			$og_type = '';

			$og_description = '';
			$og_url = '';
			$og_site_name = '';

			$og_image = '';
			$og_image_alt = '';
		} else {
			self::action_data($_GET['id'], 'edit');

			$rw = self::findOrFail($_GET['id']);

			$mid = $rw->mid;
			$title = $rw->title;
			$heading = $rw->heading;
			$meta_keywords = $rw->meta_keywords;
			$meta_description = $rw->meta_description;
			$image = $rw->image;
			$impath = $rw->image_path();
			$text = $rw->text;
			$og_title = $rw->og_title;
			$og_locale = $rw->og_locale;
			$og_type = $rw->og_type;

			$og_description = $rw->og_description;
			$og_url = $rw->og_url;
			$og_site_name = $rw->og_site_name;
			$article_modified_time = $rw->article_modified_time;

			$og_image = $rw->og_image;
			$og_image_alt = $rw->og_image_alt;
		}
		self::menu($mid);
		echo $fo = Forms::input("Name", "title", $title, 1);
		echo $fo = Forms::input("Heading", "heading", $heading, 0);

		echo $fo = Forms::textarea("Meta Keyword", "meta_keywords", $meta_keywords, '', 0);
		echo $fo = Forms::textarea("Meta Description", "meta_description", $meta_description, '', 0);
		if ($_GET['action'] == 'add') {
			echo $fo = Forms::image("Upload image", "image");
		} else {
			echo $fo = Forms::image_edit("Upload image", "image", $impath, $image, "checkbox");
		}

		echo $fo = Forms::text_editor("Text", "text", $text, 'editors', 1);
		echo '<hr><h2 class="text-center">Open Graph Inforamtion</h2><hr>';

		echo $fo = Forms::input("Og Title", "og_title", $og_title, 0, 0);
		echo $fo = Forms::input("Og Locale", "og_locale", $og_locale, 0, 0);
		echo $fo = Forms::input("Og Url", "og_url", $og_url, 0, 0);
		echo $fo = Forms::input("Og Type", "og_type", $og_type, 0, 0);
		echo $fo = Forms::input("Og Site Name", "og_site_name", $og_site_name, 0, 0);
		echo $fo = Forms::text_editor("Og Description", "og_description", $og_description, '', 0);
		echo $fo = Forms::input("Og Image", "og_image", $og_image, 0, 0);
		echo $fo = Forms::input("Og Image Alt", "og_image_alt", $og_image_alt, 0, 0);
		echo $fo = Forms::submit();
		echo $fo = Forms::form_end();
	}
	protected static function action_data($id, $type)
	{
		if ($type == 'edit') {

			$data = self::find($id);
		} else {

			$data = self::call_cl_fun();
		}
		if (isset($_REQUEST['submit'])) {
			extract($_POST);
			$data->mid = $mid;
			$data->title = $title;
			$data->heading = $heading;
			$data->meta_keywords = $meta_keywords;
			$data->meta_description = $meta_description;
			$data->og_title = $og_title;
			$data->og_locale = $og_locale;
			$data->og_type = $og_type;
			$data->og_description = $og_description;
			$data->og_url = $og_url;
			$data->og_site_name = $og_site_name;
			$data->og_image = $og_image;
			$data->og_image_alt = $og_image_alt;
			if ($_FILES['image']['size'] != 0) {
				$data->image = $data->image_maker($_FILES['image'], 1, $id, "image");
			} elseif (isset($_POST['tpimg_image'])) {
				$data->image = $_POST['tpimg_image'];
			} else {
				$data->image = '';
			}
			$data->text = $text;

			if ($type == 'edit') {
				if (isset($_POST["check_image"])) {
					$datas = self::find($id);
					$image_name = '';
					unlink($_SERVER['DOCUMENT_ROOT'] . "/" . MYF . $datas->image_path());
					$datas->empty_imgae($id);
				}

				$pp = $data->save();
				$message = '<div align="center"><h4 class="alert alert-success">Success! Record Updated Successfully</h4><span><img src="' . TP_BACK . 'assets/loaders/c_loader_re.gif" title="c_loader_re.gif"></span>

</div>';
				echo output_message($message);
				redirect_by_js($id, 100);
			} else {
				$pp = $data->save();
				$message = '<div align="center"><h4 class="alert alert-success">Success! New Record Added Successfully</h4><span><img src="' . TP_BACK . 'assets/loaders/c_loader_re.gif" title="c_loader_re.gif"></span>

</div>';
				echo output_message($message);
				redirect_by_js('add', 1000);
			}
		}
	}
}
