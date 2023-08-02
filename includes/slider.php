<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Slider extends Model
{
  use CommonTrait;
  protected $table = "slider";
  public $timestamps = false;
  protected $folder = "slider";
  protected $guarded = [];


  public static function call_cl_fun()
  {
    return (new Slider());
  }


  public static function show($pname, $action)
  {
    echo
    '<form name="form" action="deleteall" method="post">
            <div class="table-responsive" data-pattern="priority-columns">
            <table id="' . strtolower(self::table()) .
      's" class="table table-hover non-hover" style="width:100%">
              <thead>
                 <tr>
                  <th><input type="checkbox" name="checkall"/>Id</th>	
                  <th>Image</th>				  
				          <th>Name</th>                 
                  <th>Link</th>
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
      $title = '';
      $sub_title = '';
      $btn_title = '';
      $link = '';
      $image = '';
      $impath = '';
    } else {
      self::action_data($_GET['id'], 'edit');

      $rw = self::findOrFail($_GET['id']);

      $name = $rw->name;
      $text = $rw->text;
      $title =  $rw->title;
      $sub_title =  $rw->sub_title;
      $btn_title = $rw->btn_title;
      $link = $rw->link;
      $image = $rw->image;
      $impath = $rw->image_path();
    }
    echo $fo = Forms::input("Name", "name", $name, 1);
    echo $fo = Forms::input("Title", "title", $title, 1);
    echo $fo = Forms::text_editor("Sub Title", "sub_title", $sub_title, 'editor', 1);
    echo $fo = Forms::input("Button Title", "btn_title", $btn_title, 0);
    echo $fo = Forms::input("Link", "link", $link, 0);
    echo $fo = Forms::img("Image Upload", "image", $impath, $image);


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
      $data->title = $r->title;
      $data->sub_title = $r->sub_title;
      $data->btn_title = $r->btn_title;
      $data->link = $r->link;
      if ($_FILES['image']['size'] != 0) {
        $data->image = $data->image_maker($_FILES['image'], 1, $id, 'image');
      } elseif (isset($_POST['tpimg_image'])) {
        $data->image = $_POST['tpimg_image'];
      } else {
        $data->image = '';
      }


      if ($type == 'edit') {
        if (isset($_REQUEST['check_image'])) {
          unlink($_SERVER['DOCUMENT_ROOT'] . '/' . MYF . $data->image_path());
          $data->empty_image();
        }
        $pp = $data->save();
        $message = '<div align="center"><h4 class="alert alert-success">Success! Record Updated Successfully</h4><span><img src="' . TP_BACK . 'assets/loaders/c_loader_re.gif" title="c_loader_re.gif"></span>

</div>';
        echo output_message($message);
        redirect_by_js($id, 100);
      } else {

        $data->status = "Active";
        $pp = $data->save();
        $message = '<div align="center"><h4 class="alert alert-success">Success! New Record Added Successfully</h4><span><img src="' . TP_BACK . 'assets/loaders/c_loader_re.gif" title="c_loader_re.gif"></span>

</div>';
        echo output_message($message);
        redirect_by_js('add', 1000);
      }
    }
  }
}
