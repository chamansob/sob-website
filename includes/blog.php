<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Blog extends Model
{
  use CommonTrait;
  protected $table = "blog";
  public $timestamps = false;
  protected $folder = "blog";

  public static function call_cl_fun()
  {
    return (new Blog());
  }

  public static function show($pname, $action)
  {
    echo '<form name="form" action="deleteall" method="post">
            <div class="table-responsive" data-pattern="priority-columns">
            <table id="' . strtolower(self::table()) . 's" class="table table-hover non-hover" style="width:100%">
              <thead>
                 <tr>
                  <th><input type="checkbox" name="checkall"/>Id</th>
				          <th>Name</th>
                  <th>Image</th>
                  <th>Small Text</th>
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
      $blog_id = '';
      $blog_title = '';
      $meta_title = '';
      $small_text = '';
      $meta_description = '';
      $meta_keywords = '';
      $text = '';
    } else {
      self::action_data($_GET['id'], 'edit');

      $rw = self::findOrFail($_GET['id']);

      $blog_id = $rw->blog_id;
      $blog_title = $rw->blog_title;

      $meta_title = $rw->meta_title;
      $small_text = $rw->small_text;
      $image = $rw->image;
      $impath = $rw->path();
      $meta_description = $rw->meta_description;
      $meta_keywords = $rw->meta_keywords;
      $text = $rw->text;
    }
    echo $fo = Forms::Selectbyname("Blog Category", "blog_id", 'blog_category', $blog_id, 1, 'cat_title');
    echo $fo = Forms::input("Blog Title", "blog_title", $blog_title, 1);
    if ($_GET['action'] == 'add') {
      echo $fo = Forms::image("Upload image", "image");
    } else {
      echo $fo = Forms::image_edit("Upload image", "image", $impath, $image, "checkbox");
    }
    echo $fo = Forms::textarea("Small Text", "sub_text", $small_text, 'small', 0);
    echo $fo = Forms::text_editor("Text", "text", $text, 'text', 0);
    echo '<hr><h2 class="text-center">Meta Inforamtion</h2><hr>';
    echo $fo = Forms::input("Meta Title", "meta_title", $meta_title, 0);
    echo $fo = Forms::text_editor("Meta Description", "meta_description", $meta_description, 'met_d', 0);
    echo $fo = Forms::text_editor("Meta_keywords", "meta_keywords", $meta_keywords, 'meta_key', 0);


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
      $data->blog_id = $r->blog_id;
      $data->blog_title = $r->blog_title;
      $data->blog_slug =  strtolower(str_replace(' ', '-', $r->blog_title));
      $data->meta_title = $r->meta_title;
      $data->meta_description = $r->meta_description;
      $data->meta_keywords = $r->meta_keywords;
      $data->text = $r->text;
      if ($_FILES['image']['size'] != 0) {
        $data->image = $data->image_maker($_FILES['image'], 1, $id, 'image');
      } elseif (isset($_POST['tpimg_image'])) {
        $data->image = $_POST['tpimg_image'];
      } else {
        $data->image = '';
      }
      if ($type == 'edit') {

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
