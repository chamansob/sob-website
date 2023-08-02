<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

class Gallery extends Model
{

  use CommonTrait;
  protected $table = "gallery";
  public $timestamps = false;
  protected $folder = "gallery";

  public static function call_cl_fun()
  {
    return (new Gallery());
  }



  public static function show($pname, $action)
  {
    echo '<form name="form" action="deleteall" method="post">
            <div class="table-responsive" data-pattern="priority-columns">
            <table id="' . strtolower(self::table()) . 's" class="table table-hover non-hover" style="width:100%">
              <thead>
                 <tr>
                  <th><input type="checkbox" name="checkall"/>Id</th>
                   <th>Category</th> 				  
				          <th>Name</th>                 
                  <th>Image</th>		
                  <th>Created/Updated</th>	
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
      $name = '';
      $url = '';
      $cat_id = '';
      $image = '';
      $impath = '';
      $alt = '';
      $text = '';
    } else {
      self::action_data($_GET['id'], 'edit');
      $rw = self::findOrFail($_GET['id']);
      $cat_id = $rw->cat_id;
      $name = $rw->name;
      $url = $rw->url;
      $image = $rw->image;
      $impath = $rw->path();
      $alt = $rw->alt;
      $text = $rw->text;
    }
    echo $fo = Forms::Select("Gallery Category", "cat_id", 'gallerycat', $cat_id, 1);
    echo $fo = Forms::input("Name", "name", $name, 1);
    echo $fo = Forms::input("Url", "url", $url, 0);
    if ($_GET['action'] == 'add') {
      echo $fo = Forms::image("Upload image", "image");
    } else {
      echo $fo = Forms::image_edit("Upload image", "image", $impath, $image, "checkbox");
    }
    echo $fo = Forms::input("Alt", "alt", $alt, 0);
    echo $fo = Forms::textarea("Text", "text", $text, 'text', 0);
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
      $data->cat_id = $r->cat_id;
      $data->name = $r->name;
      $data->url = $r->url;
      if ($_FILES['image']['size'] != 0) {
        $data->image = $data->image_maker($_FILES['image'], 1, $id, 'image');
      } elseif (isset($_POST['tpimg_image'])) {
        $data->image = $_POST['tpimg_image'];
      } else {
        $data->image = '';
      }
      $data->alt = $r->alt;
      $data->text = $r->text;

      if ($type == 'edit') {
        if (isset($_REQUEST['check_image'])) {
          unlink($_SERVER['DOCUMENT_ROOT'] . '/' . MYF . $data->image_path());
          $data->empty_image();
        }
        $data->updated_at = date("Y-m-d H:i:s");

        $pp = $data->save();
        $message = '<div align="center"><h4 class="alert alert-success">Success! Record Updated Successfully</h4><span><img src="' . TP_BACK . 'assets/loaders/c_loader_re.gif" title="c_loader_re.gif"></span>

</div>';
        echo output_message($message);
        redirect_by_js($id, 100);
      } else {

        $data->status = "Active";

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
  public function Category()
  {
    return $this->belongsTo(Gallerycat::class, 'cat_id', 'id');
  }
}
