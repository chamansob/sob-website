<?php

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManager;
use Illuminate\Http\Request;

class Lead extends Model
{
  protected $table = "lead";
  protected $folder = "lead";
  protected $guarded = [];
  use CommonTrait;

  public static function call_cl_fun()
  {
    return (new Lead());
  }

  public static function show($pname, $action)
  {
    echo '<form name="form" action="deleteall" method="post">
           
            <div class="widget-content widget-content-area br-6">
            <table id="' . strtolower(self::table()) . 's" class="table table-hover non-hover" style="width:100%">
              <thead>
               <tr>
                   <th>Id</th>
				  <th>Course</th>				   
				  <th>User Details</th>
				  <th>Domain</th>
				  <th>Created/Updated</th>					  
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
      $email = '';
      $phone = '';
      $course = '';
      $domain1 = '';
      $domain2 = '';
      $domain3 = '';
    } else {
      self::action_data($_GET['id'], 'edit');

      $rw = self::findOrFail($_GET['id']);

      $name = $rw->name;
      $email = $rw->email;
      $phone = $rw->phone;
      $course = $rw->course;
      $domain1 = $rw->domain1;
      $domain2 = $rw->domain2;
      $domain3 = $rw->domain3;
    }
    echo $fo = Forms::input("Name", "name", $name, 1);
    echo $fo = Forms::input("Email", "email", $email, 1);
    echo $fo = Forms::input("Phone", "phone", $phone, 1);
    echo $fo = Forms::input("Enrolled course", "course", $course, 0);
    echo $fo = Forms::input("Domain 1", "domain1", $domain1, 1);
    echo $fo = Forms::input("Domain 2", "domain2", $domain2, 1);
    echo $fo = Forms::input("Domain 3", "domain3", $domain3, 1);
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
      $data->email = $r->email;
      $data->phone = $r->phone;
      $data->course = $r->course;
      $data->domain1 = $r->domain1;
      $data->domain2 = $r->domain2;
      $data->domain3 = $r->domain3;
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
