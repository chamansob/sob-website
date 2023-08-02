<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Team extends Model
{

  use CommonTrait;
  protected $table = "team";
  public $timestamps = false;
  protected $folder = "team";
  protected $guarded = [];

  public static function call_cl_fun()
  {
    return (new Team());
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
                  <th>Designation</th>
                  <th>Image</th>                 
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
      $image = '';
      $impath = '';
      $designation = '';
      $facebook = '';
      $twiiter = '';
      $instagram = '';
      $youtube = '';
    } else {
      self::action_data($_GET['id'], 'edit');

      $rw = self::findOrFail($_GET['id']);
      $name = $rw->name;
      $image = $rw->image;
      $impath = $rw->path();
      $designation = $rw->designation;
      $facebook = $rw->facebook;
      $twiiter = $rw->twiiter;
      $instagram = $rw->instagram;
      $youtube = $rw->youtube;
    }
    echo $fo = Forms::input("Name", "name", $name, 1);
    echo $fo = Forms::input("Designation", "designation", $designation, 1);
    if ($_GET['action'] == 'add') {
      echo $fo = Forms::image("Upload image", "image");
    } else {
      echo $fo = Forms::image_edit("Upload image", "image", $impath, $image, "checkbox");
    }
    echo $fo = Forms::input("Facebook", "facebook", $facebook, 0);
    echo $fo = Forms::input("Twiiter", "twiiter", $twiiter, 0);
    echo $fo = Forms::input("Instagram", "instagram", $instagram, 0);
    echo $fo = Forms::input("Youtube", "youtube", $youtube, 0);

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
      $data->name = $r->name;
      if ($_FILES['image']['size'] != 0) {
        $data->image = $data->image_maker($_FILES['image'], 1, $id, 'image');
      } elseif (isset($_POST['tpimg_image'])) {
        $data->image = $_POST['tpimg_image'];
      } else {
        $data->image = '';
      }
      $data->designation = $r->designation;
      $data->facebook = $r->facebook;
      $data->twiiter = $r->twiiter;
      $data->instagram = $r->instagram;
      $data->youtube = $r->youtube;

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
}
