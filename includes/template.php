<?php
// If it's going to need the database, then it's 
// probably smart to require it before we start.

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Intervention\Image\ImageManager;

class Template extends Model
{

	protected $table = "template";
	public $timestamps = false;
	protected $folder = "logo";
	use CommonTrait;

	public static function call_cl_fun()
	{
		return (new Template());
	}


	public static function other_script()
	{

?>

		<script type="text/javascript" charset="utf-8">
			// Documentation for client options:
			// https://github.com/Studio-42/elFinder/wiki/Client-configuration-options
			$(document).ready(function() {

				$('#cache_time').datepicker({
					dateFormat: "dd/mm/yy"
				})
				$('#elfinder').elfinder(
					// 1st Arg - options
					{
						cssAutoLoad: false, // Disable CSS auto loading
						baseUrl: './', // Base URL to css/*, js/*
						url: '<?= TP_BACK ?>elfinder/php/connector.minimal.php' // connector URL (REQUIRED)
						// , lang: 'ru'                    // language (OPTIONAL)
					},
					// 2nd Arg - before boot up function
					function(fm, extraObj) {
						// `init` event callback function
						fm.bind('init', function() {
							// Optional for Japanese decoder "encoding-japanese.js"
							if (fm.lang === 'ja') {
								fm.loadScript(
									['//cdn.rawgit.com/polygonplanet/encoding.js/1.0.26/encoding.min.js'],
									function() {
										if (window.Encoding && Encoding.convert) {
											fm.registRawStringDecoder(function(s) {
												return Encoding.convert(s, {
													to: 'UNICODE',
													type: 'string'
												});
											});
										}
									}, {
										loadType: 'tag'
									}
								);
							}
						});
						// Optional for set document.title dynamically.
						var title = document.title;
						fm.bind('open', function() {
							var path = '',
								cwd = fm.cwd();
							if (cwd) {
								path = fm.path(cwd.hash) || null;
							}
							document.title = path ? path + ':' + title : title;
						}).bind('destroy', function() {
							document.title = title;
						});
					}
				);
			});
		</script>
<?php
	}
	// Common Database Methods



	public static function action_data($id)
	{
		$data = self::find($id);
		$logo = '';
		$favicon_logo = '';
		$temp = '';
		$checkbox = '';
		$temps = '';
		$checkboxs = '';
		$tpimg_logo = '';
		$tpimg_favicon_logo = '';
		if (isset($_REQUEST['submit'])) {
			extract($_POST);
			$data->sitename = $sitename;

			if ($_FILES['logo']['size'] != 0) {
				$data->logo = $data->image_maker($_FILES['logo'], 1, $id, "logo");
			} elseif (isset($_POST['tpimg_logo'])) {
				$data->logo = $_POST['tpimg_logo'];
			}
			if ($_FILES['favicon_logo']['size'] != 0) {
				$data->favicon_logo = $data->image_maker($_FILES['favicon_logo'], 1, $id, "favicon_logo");
			} elseif (isset($_POST['tpimg_favicon_logo'])) {
				$data->favicon_logo = $_POST['tpimg_favicon_logo'];
			}
			$data->email = $email;
			$data->meta_keywords = $meta_keywords;
			$data->meta_description = $meta_description;
			$data->analytics = $analytics;
			$data->canonical = $canonical;
			$data->google_site_verification = $google_site_verification;
			$data->og_title = $og_title;
			$data->og_locale = $og_locale;
			$data->og_type = $og_type;
			$data->og_description = $og_description;
			$data->og_url = $og_url;
			$data->og_site_name = $og_site_name;
			$data->article_modified_time = $article_modified_time;
			$data->og_image = $og_image;
			$data->og_image_alt = $og_image_alt;
			$pp = $data->save();
			$message = '<div align="center">                
                <h4 class="alert alert-success">Success! Record Updated Successfully</h4>
                <span><img src="' . TP_BACK . 'assets/loaders/c_loader_re.gif" title="c_loader_re.gif"></span>
            </div>';

			echo output_message($message);
			redirect_by_js("" . TP_BACK . "admin/dashboard/settings", 100);
		}
	}

	public static function backupsql()
	{
		$data = Template_mo::backnow();
		backup_action('File Name', "{$data}");
		redirect_by_js("backnow_history", 100);
	}
	public static function backnow_history()
	{

		Template_mo::backnow_his();
	}
	public static function backup_history_clear()
	{
		Template_mo::backup_history_clears();
	}

	public static function form_data()
	{
		echo $fo = Forms::form_start();
		self::action_data(1, 'edit');
		$data = self::find(1);
		$impath = $data->path() . $data->logo;
		$impath2 = $data->path() . $data->favicon_logo;
		$sitename = $data->sitename;
		$email = $data->email;
		$favicon_logo = $data->favicon_logo;
		$logo = $data->logo;
		$meta_keywords = $data->meta_keywords;
		$meta_description = $data->meta_description;
		$analytics = $data->analytics;
		$canonical = $data->canonical;
		$google_site_verification = $data->google_site_verification;
		$og_title = $data->og_title;
		$og_locale = $data->og_locale;
		$og_type = $data->og_type;

		$og_description = $data->og_description;
		$og_url = $data->og_url;
		$og_site_name = $data->og_site_name;
		$article_modified_time = $data->article_modified_time;

		$og_image = $data->og_image;
		$og_image_alt = $data->og_image_alt;

		echo '<h2 class="text-center">Basic Inforamtion</h2>';
		echo $fo = Forms::image_simple_edit("Logo", "logo", $impath, $logo);
		echo $fo = Forms::image_simple_edit("Favicon image", "favicon_logo", $impath2, $favicon_logo);
		echo $fo = Forms::input("Email", "email", $email, 0, 0);
		echo '<hr><h2 class="text-center">Meta Inforamtion</h2><hr>';
		echo $fo = Forms::input("Site Title", "sitename", $sitename, 1, 0);
		echo $fo = Forms::text_editor("Meta Description", "meta_description", $meta_description, '', 0);
		echo $fo = Forms::text_editor("Meta Keyword", "meta_keywords", $meta_keywords, '', 0);
		echo $fo = Forms::text_editor("Google Analytics", "analytics", $analytics, '', 0);
		echo $fo = Forms::textarea("Canonical", "canonical", $canonical, 0, 0);
		echo $fo = Forms::textarea("Google Webmaster Code", "google_site_verification", $google_site_verification, 0, 0);

		echo '<hr><h2 class="text-center">Open Graph Inforamtion</h2><hr>';

		echo $fo = Forms::input("Og Title", "og_title", $og_title, 0, 0);
		echo $fo = Forms::input("Og Locale", "og_locale", $og_locale, 0, 0);
		echo $fo = Forms::input("Og Url", "og_url", $og_url, 0, 0);
		echo $fo = Forms::input("Og Type", "og_type", $og_type, 0, 0);
		echo $fo = Forms::input("Og Site Name", "og_site_name", $og_site_name, 0, 0);
		echo $fo = Forms::text_editor("Og Description", "og_description", $og_description, '', 0);

		echo $fo = Forms::input("Article Modified Time", "article_modified_time", $article_modified_time, 0, 0);
		echo $fo = Forms::input("Og Image", "og_image", $og_image, 0, 0);
		echo $fo = Forms::input("Og Image Alt", "og_image_alt", $og_image_alt, 0, 0);

		echo $fo = Forms::submit();
		echo $fo = Forms::form_end();
	}
}

?>