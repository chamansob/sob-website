<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Services extends Model
{
  use CommonTrait;
  protected $table = "services";
  public $timestamps = false;
  protected $folder = "services";


  public static function call_cl_fun()
  {
    return (new Services());
  }


  public static function show($pname, $action)
  {
    echo '<form name="form" action="deleteall" method="post">
            <div class="table-responsive" data-pattern="priority-columns">
            <table id="' . strtolower(self::table()) .
      's" class="table table-hover non-hover" style="width:100%">
              <thead>
                 <tr>
                  <th><input type="checkbox" name="checkall"/>Id</th>				  
				          <th>Title</th>                 
                  <th>Image</th>		
                  <th>Icon</th>	
                  <th>Status</th>				 
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
  public static function form_data()
  {
    echo $fo = Forms::form_start();
    if ($_GET['action'] == 'add') {
      self::action_data('', 'add');
      $title = '';
      $service_title = '';
      $service_slug = '';
      $image = '';
      $image_front = '';
      $impath = '';
      $icon = '';
      $front_text = '';
      $sub_text = '';
      $meta_title = '';
      $meta_description = '';
      $meta_keywords = '';
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
      $title = $rw->title;
      $service_title = $rw->service_title;
      $service_slug = $rw->service_slug;
      $image = $rw->image;
      $image_front = $rw->image_front;
      $impath = $rw->path();
      $icon = $rw->icon;
      $front_text = $rw->front_text;
      $sub_text = $rw->sub_text;
      $meta_title = $rw->meta_title;
      $meta_description = $rw->meta_description;
      $meta_keywords = $rw->meta_keywords;
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
    echo $fo = Forms::input("Icon", "icon", $icon, 1);
    echo $fo = Forms::input("Name", "title", $title, 1);
    echo $fo = Forms::input("Service Title", "service_title", $service_title, 1);
    echo $fo = Forms::input("Service Slug", "service_slug", $service_slug, 0);
    if ($_GET['action'] == 'add') {
      echo $fo = Forms::image("Upload image Front", "image_front");
    } else {
      echo $fo = Forms::image_edit("Upload image Front", "image_front", $impath, $image_front, "checkbox");
    }
    echo $fo = Forms::text_editor("Front Text", "front_text", $front_text, 'front_text', 0);
    if ($_GET['action'] == 'add') {
      echo $fo = Forms::image("Upload image", "image");
    } else {
      echo $fo = Forms::image_edit("Upload image", "image", $impath, $image, "checkbox");
    }

    echo $fo = Forms::input("Small Text", "sub_text", $sub_text, 0);
    echo $fo = Forms::text_editor("Text", "text", $text, 'text', 0);
    echo '<hr><h2 class="text-center">Meta Inforamtion</h2><hr>';
    echo $fo = Forms::input("Meta Title", "meta_title", $meta_title, 0);
    echo $fo = Forms::textarea("Meta Description", "meta_description", $meta_description, 'met_d', 0);
    echo $fo = Forms::textarea("Meta Keywords", "meta_keywords", $meta_keywords, 'meta_key', 0);
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
    if ($type == "edit") {
      $data = self::find($id);
    } else {
      $data = self::call_cl_fun();
    }
    if (isset($_REQUEST['submit'])) {

      $r = Request::capture();
      $data->title = $r->title;
      $data->service_title = $r->service_title;
      $data->service_slug =  ($r->service_slug == '') ? strtolower(str_replace(' ', '-', $r->title)) : $r->service_slug;
      if ($_FILES['image']['size'] != 0) {
        $data->image = $data->image_maker($_FILES['image'], 1, $id, 'image');
      } elseif (isset($_POST['tpimg_image'])) {
        $data->image = $_POST['tpimg_image'];
      } else {
        $data->image = '';
      }
      if ($_FILES['image_front']['size'] != 0) {
        $data->image_front = $data->image_maker($_FILES['image_front'], 1, $id, 'image_front');
      } elseif (isset($_POST['tpimg_image_front'])) {
        $data->image_front = $_POST['tpimg_image_front'];
      } else {
        $data->image_front = '';
      }
      $data->front_text = $r->front_text;
      $data->icon = $r->icon;
      $data->sub_text = $r->sub_text;
      $data->meta_title = $r->meta_title;
      $data->meta_description = $r->meta_description;
      $data->meta_keywords = $r->meta_keywords;
      $data->og_title = $r->og_title;
      $data->og_locale = $r->og_locale;
      $data->og_type = $r->og_type;
      $data->og_description = $r->og_description;
      $data->og_url = $r->og_url;
      $data->og_site_name = $r->og_site_name;
      $data->og_image = $r->og_image;
      $data->og_image_alt = $r->og_image_alt;
      $data->text = $r->text;

      if ($type == 'edit') {
        if (isset($_REQUEST['check_image'])) {
          unlink($_SERVER['DOCUMENT_ROOT'] . '/' . MYF . $data->path() . $data->image);
          $data->empty_image();
        }
        $data->updated_at = date("Y-m-d H:i:s");

        $pp = $data->save();
        $message = '<div align="center"><h4 class="alert alert-success">Success! Record Updated Successfully</h4><span><img src="' . TP_BACK . 'assets/loaders/c_loader_re.gif" title="c_loader_re.gif"></span>

</div>';
        echo output_message($message);
        redirect_by_js($id, 100);
      } else {

        $data->created_at = date("Y-m-d H:i:s");

        $data->updated_at = date("Y-m-d H:i:s");
        $pp = $data->save();
        $message = '<div align="center"><h4 class="alert alert-success">Success! New Record Added Successfully</h4><span><img src="' . TP_BACK . 'assets/loaders/c_loader_re.gif" title="c_loader_re.gif"></span>

</div>';
        echo output_message($message);
        redirect_by_js('add', 1000);
      }
    }
  }
}
