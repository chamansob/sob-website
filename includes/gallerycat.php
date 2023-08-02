<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class Gallerycat extends Model
{

  use CommonTrait;
  protected $table = "gallerycat";
  public $timestamps = false;
  protected $folder = "gallerycat";

  public static function call_cl_fun()
  {
    return (new Gallerycat());
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
				          <th>Name</th>                 
                  <th>Slug</th>
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

      $slug = '';

      $created_at = '';

      $updated_at = '';
    } else {
      self::action_data($_GET['id'], 'edit');

      $rw = self::findOrFail($_GET['id']);

      $name = $rw->name;
      $slug = $rw->slug;
    }
    echo $fo = Forms::input("Name", "name", $name, 1);
    echo $fo = Forms::input("Slug", "slug", $slug, 0);

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
      $data->slug =  ($r->slug == '') ? strtolower(str_replace(' ', '-', $r->name)) : $r->slug;

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
  public function Gallery()
  {
    return $this->hasMany(Gallery::class, 'cat_id', 'id');
  }
}
