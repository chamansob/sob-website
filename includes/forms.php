<?php
require_once LIB_PATH . DS . 'database.php';
class forms
{
    protected static $wtform = 10;
    protected static $wtlable = 2;
    public static function heading($name = '')
    {
        $x = '<hr><div class="row">
		<div class="col-xl-12 col-md-12 col-sm-12 col-12">
			<h5 class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg> ' . $name . '</h5>
			</div>
	</div><hr>';
        return $x;
    }
    public static function form_start()
    {
        $x = '<form class="needs-validation" id="prodduct" action="#" enctype="multipart/form-data" method="POST"  novalidate>';
        return $x;
    }
    public static function form_start2($id)
    {
        $x = '<form id="' . $id . '" action="#" enctype="multipart/form-data" method="POST" >';
        return $x;
    }
    public static function form_end()
    {
        $x = '</form>';
        return $x;
    }
    public static function submit()
    {
        $x = '<div class="form-group row">
		<div class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . '">
		</div>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
		<button type="submit" name="submit" class="btn btn-primary submit-fn mt-2">Submit</button>
		</div>
		</div>';
        return $x;
    }
    public static function submit_c()
    {
        $x = '<div class="form-group row">
		<div class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . '">
		</div>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
		<button type="submit" name="submit" class="btn btn-danger btn-sm waves-effect waves-light">Clean Cache Memory</button>
		</div>
		</div>

		</div>';
        return $x;
    }
    public static function check($v)
    {
        $re = '';
        if ($v == 1) {
            $re = 'required';
        }
        return $re;
    }
    public static function checkst($v)
    {
        $res = '';
        if ($v == 1) {
            $res = ' (<span class="errors">*</span>) ';
        }
        return $res;
    }
    public static function input($lable, $name, $value, $n)
    {
        $re = self::check($n);
        $res = self::checkst($n);
        $x = '<div class="form-group row mb-4">
		<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
									<input type="text" class="form-control" name="' . $name . '" id="' . $name . '" autocomplete="off" value="' . $value . '" placeholder="' . ucfirst($lable) . '" ' . $re . '>
								</div></div>';
        return $x;
    }
    public static function slug($lable, $name, $value, $n)
    {
        $re = self::check($n);
        $res = self::checkst($n);
        $x = '<div class="form-group row mb-4">
		<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
									<input type="text" class="form-control" readonly name="' . $name . '" id="permalink" autocomplete="off" value="' . $value . '" placeholder="' . ucfirst($lable) . '" ' . $re . '>
								</div></div>';
        return $x;
    }
    public static function input_hn($lable, $name, $value, $n)
    {
        $re = self::check($n);
        $res = self::checkst($n);
        $x = '<div class="form-group row mb-4">
		<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
									<input type="text" class="form-control hinditext" name="' . $name . '" autocomplete="off" value="' . $value . '" placeholder="' . ucfirst($lable) . '" ' . $re . '>
								</div></div>';
        return $x;
    }
    public static function password($lable, $name, $value, $n)
    {
        $re = self::check($n);
        $res = self::checkst($n);
        $x = '<div class="form-group row mb-4">
		<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
									<input type="password" class="form-control" name="' . $name . '" autocomplete="off" value="' . $value . '" placeholder="' . ucfirst($lable) . '" ' . $re . '>
								</div></div>';
        return $x;
    }
    public static function email($lable, $name, $value, $n)
    {
        $re = self::check($n);
        $res = self::checkst($n);
        $x = '<div class="form-group row mb-4">
		<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
									<input type="email" class="form-control" name="' . $name . '"  id="emailadd" autocomplete="off" value="' . $value . '" placeholder="' . ucfirst($lable) . '" ' . $re . '>
								</div></div>';
        return $x;
    }
    public static function url($lable, $name, $value, $n)
    {
        $re = self::check($n);
        $res = self::checkst($n);
        $x = '<div class="form-group row mb-4">
		<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
		<input type="text" class="form-control url" name="' . $name . '" id="slug_input"  autocomplete="off"  value="' . $value . '" placeholder="' . ucfirst($lable) . '" ' . $re . '>
		</div></div>';
        return $x;
    }
    public static function hidden($name, $value)
    {
        $x = '<input type="hidden" name="' . $name . '" value="' . $value . '">';
        return $x;
    }
    public static function date($lable, $name, $value, $id, $n)
    {
        $re = self::check($n);
        $res = self::checkst($n);
        $x = '<div class="form-group row mb-4">
		<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
									<input type="text" class="form-control flatpickr flatpickr-input active" name="' . $name . '"  autocomplete="off" id="' . $id . '" value="' . $value . '" placeholder="' . ucfirst($lable) . '" ' . $re . '>
								</div></div>';
        return $x;
    }
    public static function date_mm($lable, $name, $value, $id, $n)
    {
        $re = self::check($n);
        $res = self::checkst($n);
        $x = '<div class="form-group row mb-4">
		<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
									<input type="text" class="form-control" name="' . $name . '" placeholder="dd-mm-yyyy" autocomplete="off" id="' . $id . '" value="' . $value . '" placeholder="' . ucfirst($lable) . '" ' . $re . '>
								</div></div>';
        return $x;
    }
    public static function date_mm_range($lable, $name, $value, $id, $n)
    {
        $re = self::check($n);
        $res = self::checkst($n);
        $x = '<div class="form-group row mb-4 row">
										<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':' . $res . '</label>
										<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
											<input class="form-control" type="text" name="' . $name . '" id="' . $id . '" value="' . $value . '">
										</div>
									</div>';
        return $x;
    }
    public static function number($lable, $name, $range, $value, $n)
    {
        $re = self::check($n);
        $res = self::checkst($n);
        $x = '<div class="form-group row mb-4">
		<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
									<input type="text" class="form-control" id="' . $name . '" min="0" max="' . $name . '" name="' . $name . '" value="' . $value . '" placeholder="' . ucfirst($lable) . '" ' . $re . '>
								</div></div>';
        return $x;
    }
    public static function text_editor($lable, $name, $value, $idname, $n)
    {
        $re = self::check($n);
        $res = self::checkst($n);
        $x = '<div class="form-group row mb-4">
			<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':' . $res . '</label>
			<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
			<textarea name="' . $name . '" id="' . $idname . '" class="form-control" placeholder="' . ucfirst($lable) . '" ' . $re . '>' . $value . '</textarea></div></div>';
        if ($idname != '') {
            $x .= "<script>


CKEDITOR.replace('" . $idname . "', {    filebrowserBrowseUrl :  '" . TP_BACK . "elfinder/elfinder.php',});
CKEDITOR.replace( '" . $idname . "', {
        qtRows: 20, // Count of rows
        qtColumns: 20, // Count of columns
        qtBorder: '1', // Border of inserted table
        qtWidth: '90%', // Width of inserted table
        qtStyle: { 'border-collapse' : 'collapse' },
        qtClass: 'test', // Class of table
        qtCellPadding: '0', // Cell padding table
        qtCellSpacing: '0', // Cell spacing table
        qtPreviewBorder: '4px double black', // preview table border
        qtPreviewSize: '4px', // Preview table cell size
        qtPreviewBackground: '#c8def4' // preview table background (hover)
    });

			CKEDITOR.replace( '" . $idname . "', {
				allowedContent:
					'h1 h2 h3 p blockquote strong em;' +
					'a[!href];' +
					'img(left,right)[!src,alt,width,height];' +
					'table tr th td caption;' +
					'span{!font-family};' +
					'span{!color};' +
					'span(!marker);' +
					'del ins'
			} );
			CKEDITOR.replace( '" . $idname . "', {
	// Load the simplebox plugin.
	extraPlugins: 'widgetbootstrap'
} );

		</script>";
        }
        return $x;
    }
    public static function textarea($lable, $name, $value, $idname, $n)
    {
        $re = self::check($n);
        $res = self::checkst($n);
        $x = '<div class="form-group row mb-4">
			<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':' . $res . '</label>
			<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
			<textarea name="' . $name . '" id="' . $idname . '" class="form-control" placeholder="' . ucfirst($lable) . '" ' . $re . '>' . $value . '</textarea></div></div>';
        return $x;
    }
    public static function textarea_hn($lable, $name, $value, $idname, $n)
    {
        $re = self::check($n);
        $res = self::checkst($n);
        $x = '<div class="form-group row mb-4">
			<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':' . $res . '</label>
			<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
			<textarea name="' . $name . '" id="' . $idname . '" class="form-control hinditext" placeholder="' . ucfirst($lable) . '" ' . $re . '>' . $value . '</textarea></div></div>';
        return $x;
    }
    public static function image($lable, $name)
    {
        $x = ' <div class="form-group row mb-4">
                                           <label for="exampleInputFile" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':</label>
                                         <div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">   <input type="file" class="form-control-file" name="' . $name . '" id="exampleFormControlFile1"></div>
                                        </div>';
        return $x;
    }
    public static function image_edit($lable, $name, $path, $image)
    {
        $x = '<div class="form-group row mb-4">
								<label for="exampleInputFile" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':</label>
<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">';
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/" . MYF . $path . $image)) {
            if ($image != '') {
                $x .= '<div style="width:150px">
		<img  src="' . BASE_PATH . $path . $image . '"  class="img-thumbnail img-responsive" /></div>
                  <div><strong>Remove Image:</strong>
                    <input type="checkbox" name="check_' . $name . '" id="checkbox" value="1" />
                  </div>

                  <input type="hidden" name="tpimg_' . $name . '" value="' . $image . '" >';
            }
        } else {
            $x .= '<div> <img class="img-thumbnail" src="' . TP_BACK . 'assets/images/sample.jpg' . '" width="60" height="60" /></div><br>';
        }
        $x .= '
			<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">   <input type="file" name="' . $name . '" accept="image/png, image/jpeg, image/gif"  class="form-control-file" id="exampleFormControlFile1"></div>

							</div></div>';
        return $x;
    }
    public static function img($lable, $name, $path, $image)
    {
        $x = '<div class="form-group row mb-4">
								<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':</label>
								<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">';
        //echo "check:". $_SERVER['DOCUMENT_ROOT']."/".MYF.'public/'.$path;
        //echo "check:". var_dump(file_exists(TP_BACK.$path));
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/" . MYF . $path)) {
            if ($image != '') {
                $x .= '<div style="width:150px">
		<img class="img-thumbnail img-responsive"  src="' . BASE_PATH . $path . '"  /></div>
                  <div><strong>Remove Image:</strong>
                    <input type="checkbox" name="check_' . $name . '" id="checkbox" value="1" />
                  </div>

                  <input type="hidden" name="tpimg_' . $name . '" value="' . $image . '" >';
            } else {
                $x .= '<div> <img class="thumbnail" src="' . TP_BACK . 'assets/images/sample.jpg' . '" width="60" height="60" /></div><br>';
            }
        }
        $x .= '<input type="file" class="form-control-file" name="' . $name . '">

							</div></div>';
        return $x;
    }
    public static function image_edit_sp($lable, $name, $path, $image, $im_id)
    {
        $x = '<div class="form-group row mb-4">
								<label for="exampleInputFile" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':</label>
<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">';
        if ($image != '') {
            $x .= '<div style="width:150px">
		<img  src="' . TP_BACK . $path . '" class="img-responsive img-thumbnail" /></div>
                  <div><strong>Remove Image:</strong>
                    <input type="checkbox" name="checkbox' . $im_id . '" id="checkbox' . $im_id . '" value="1" />
                  </div>

                  <input type="hidden" name="tpimg' . $im_id . '" value="' . $image . '" >';
        } else {
            $x .= '<div> <img class="img-responsive img-thumbnail" src="' . TP_BACK . 'assets/images/sample.jpg' . '" width="60" height="60" /></div><br>';
        }
        $x .= '<div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled">
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="' . $name . '"/> <!-- rename it -->
                    </div>
                </span>
            </div>

							</div></div>';
        return $x;
    }
    public static function image_simple_edit($lable, $name, $path, $image)
    {
        $x = '<div class="form-group row mb-4">
								<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':</label>
								<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">';
        //echo "check:" . $_SERVER['DOCUMENT_ROOT'] . "/" . MYF . 'public/' . $path ;
        //echo "check:" . var_dump(file_exists(TP_BACK . $path));
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/" . MYF . $path)) {
            if ($image != '') {
                $x .= '<div style="width:150px">
		<img  src="' . BASE_PATH . $path . '" class="img-responsive img-thumbnail" /></div>
                  <div><strong>Remove Image:</strong>
                    <input type="checkbox" name="check_' . $name . '" id="checkbox" value="1" />
                  </div>

                  <input type="hidden" name="tpimg_' . $name . '" value="' . $image . '" >';
            }
        } else {
            $x .= '<div> <img class="thumbnail" src="' . TP_BACK . 'assets/images/sample.jpg' . '" width="60" height="60" /></div><br>';
        }
        $x .= '<input type="file" class="form-control-file" name="' . $name . '">

							</div></div>';
        return $x;
    }
    public static function Select_n($lable, $name, $table)
    {
        $x = '<div class="form-group row mb-4">
		<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
			<select name="' . $name . '" class="lists form-control" required>
								<option value="">Select No of Question</option>';
        $n = 1;
        while ($n <= $table) {
            $x .= '<option value="' . $n . '">' . $n . '</option>';
            $n++;
        }
        $x .= '</select>
								</div></div>';
        return $x;
    }
    public static function Select_op($lable, $name, $arr, $t)
    {
        $x = '<div class="form-group row mb-4"><label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
			<select name="' . $name . '" class="lists form-control" required>';
        if ($t == '') {
            foreach ($arr as $ass) {
                $x .= '<option value="' . $ass . '">' . ucfirst($ass) . '</option>';
            }
        } else {
            foreach ($arr as $ass) {
                if (strtolower($t) == strtolower($ass)) {
                    $x .= '<option selected value="' . $t . '">' . ucfirst($t) . '</option>';
                } else {
                    $x .= '<option value="' . $ass . '">' . ucfirst($ass) . '</option>';
                }
            }
        }
        $x .= '</select>
         </div></div>';
        return $x;
    }
    public static function Select_st($lable, $name, $total, $t, $n)
    {
        $ns = 1;
        $re = self::check($n);
        $res = self::checkst($n);
        $x = '<div class="form-group row mb-4">
          <label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ': ' . $res . '</label>
          <div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
          <select name="' . $name . '" class="lists form-control" required>
          <option value="">Select No of Question</option>';
        if ($t != '') {
            $ss = '';
            if ($t < 10) {
                $ss = 0;
            }
            $x .= '<option selected value="' . $t . '">' . $ss . $t . '</option>';
            while ($ns != $total + 1) {
                $s = '';
                if ($ns < 10) {
                    $s = 0;
                }
                if ($t != $ns) {
                    $x .= '<option value="' . $ns . '">' . $s . $ns . '</option>';
                }
                $ns++;
            }
        } else {
            while ($ns != $total + 1) {
                if ($t != $ns) {
                    $s = '';
                    if ($ns < 10) {
                        $s = 0;
                    }
                    $x .= '<option value="' . $ns . '">' . $s . $ns . '</option>';
                }
                $ns++;
            }
        }
        $x .= '</select>
          </div></div>';
        return $x;
    }
    public static function Select($lable, $name, $table, $t, $n)
    {

        $re = self::check($n);
        $res = self::checkst($n);
        echo '<div class="form-group row mb-4">
		  <label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ': ' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
			';
        if ($t != null) {
            $tb = $table::whereNotIn("id", [$t])->get();
            $category = $table::findOrFail($t);
            $v = '<option selected value="' . $t . '">' . $category->id . '.' . ucfirst($category->name) . '</option>';
        } else {
            $c = new $table();
            $tb = $table::all();
            $v = '<option value="">Choose a option...</option>';
        }
        $x = '

	  <select name="' . $name . '" class="form-control selectpicker" data-live-search="true" ' . $re . '>' . $v;
        foreach ($tb as $rw) {
            $x .= '<option value="' . $rw->id . '">' . $rw->id . '.' . ucfirst($rw->name) . '</option>';
        }
        $x .= '</select>';
        $x .= '</div></div>';
        return $x;
    }
    public static function Selectbyname($lable, $name, $table, $t, $n, $fieldname)
    {

        $re = self::check($n);
        $res = self::checkst($n);
        echo '<div class="form-group row mb-4">
		  <label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ': ' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
			';
        if ($t != null) {
            $tb = $table::whereNotIn("id", [$t])->get();
            $category = $table::findOrFail($t);
            $v = '<option selected value="' . $t . '">' . $category->id . '.' . ucfirst($category->$fieldname) . '</option>';
        } else {
            $c = new $table();
            $tb = $table::all();
            $v = '<option value="">Choose a option...</option>';
        }
        $x = '

	  <select name="' . $name . '" class="form-control selectpicker" data-live-search="true" ' . $re . '>' . $v;
        foreach ($tb as $rw) {
            $x .= '<option value="' . $rw->id . '">' . $rw->id . '.' . ucfirst($rw->$fieldname) . '</option>';
        }
        $x .= '</select>';
        $x .= '</div></div>';
        return $x;
    }
    public static function Select_mms($lable, $name, $mtable, $table, $t, $n)
    {
        $re = self::check($n);
        $res = self::checkst($n);
        echo '<div class="form-group row mb-4">
		  <label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ': ' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
			';
        if ($t != null) {
            $tb = $table::whereNotIn("id", [$t])->get();
            $category = $table::findOrFail($t);
            $v = '<option selected value="' . $t . '">' . ucfirst($category->name) . '</option>';
        } else {
            $c = new $table();
            $tb = $table::all();
            $v = '<option value="">Choose a option...</option>';
        }
        $x = '

	  <select name="' . $name . '" class="form-control" ' . $re . '>' . $v;
        $tbs = $mtable::all();
        foreach ($tbs as $rws) {
            $x .= '<optgroup label="' . ucfirst($rws->name) . '">';
            foreach ($tb as $rw) {
                $x .= '<option value="' . $rw->id . '">' . ucfirst($rw->name) . '</option>';
            }
            $x .= '</optgroup>';
        }
        $x .= '</select>';
        $x .= '</div></div>';
        return $x;
    }
    public static function Select_menu($lable, $name, $table, $t, $n)
    {
        $re = self::check($n);
        $res = self::checkst($n);
        echo '<div class="form-group row mb-4">
		  <label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ': ' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
			';
        if ($t != null) {
            $tb = $table::whereNotIn("id", [$t])->get();
            $category = $table::findOrFail($t);
            $v = '<option selected value="' . $t . '">' . ucfirst($category->title) . '</option>';
        } else {
            $c = new $table();
            $tb = $table::all();
            $v = '<option value="">Choose a option...</option>';
        }
        $x = '

	  <select name="' . $name . '" class="form-control" ' . $re . '>' . $v;
        foreach ($tb as $rw) {
            $x .= '<option value="' . $rw->id . '">' . ucfirst($rw->title) . '</option>';
        }
        $x .= '</select>';
        $x .= '</div></div>';
        return $x;
    }

    public static function Select_gp($lable, $name, $table, $t, $n)
    {
        $re = self::check($n);
        $res = self::checkst($n);
        echo '<div class="form-group row mb-4">
		  <label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ': ' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
			';
        if ($t != null) {
            $tb = $table::whereNotIn("id", [$t])->get();
            $category = $table::findOrFail($t);
            $v = '<option selected value="' . $t . '">' . ucfirst($category->title) . '</option>';
        } else {
            $c = new $table();
            $tb = $table::all();
            $v = '<option value="">Choose a option...</option>';
        }
        $x = '

	  <select name="' . $name . '" class="form-control hinditext" ' . $re . '>' . $v;
        foreach ($tb as $rw) {
            $x .= '<option value="' . $rw->id . '">' . ucfirst($rw->title) . '</option>';
        }
        $x .= '</select>';
        $x .= '</div></div>';
        return $x;
    }
    public static function Selectmulti($lable, $name, $table, $mid, $id, $n)
    {
        $m = explode(",", $mid);
        $re = self::check($n);
        $res = self::checkst($n);
        $x = '<div class="form-group row mb-4">
		<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ': ' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
			<select name="' . $name . '[]" class="form-control tagging" ' . $re . ' multiple>';
        if ($mid == '') {
            $rs = $table::all();
            foreach ($rs as $rw) {
                $x .= '<option value="' . $rw->id . '">' . ucfirst($rw->name) . '</option>';
            }
        } else {

            $rw1 = $table::whereIn('id', $m)->get();

            foreach ($rw1 as $key => $value) {
                $x .= '<option selected="selected" value="' . $value->id . '">' . ucfirst($value->name) . '</option>';
            }

            $rs = $table::whereNotIn('id', $m)->get();
            foreach ($rs as $key => $value) {
                $x .= '<option value="' . $value->id . '">' . ucfirst($value->name) . '</option>';
            }
        }
        $x .= '</select>
								</div></div>';
        return $x;
    }
    public static function Select_multi($lable, $name, $arr, $t, $n)
    {

        $re = self::check($n);
        $res = self::checkst($n);
        $x = '<div class="form-group row mb-4">
		<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ': ' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
			<select name="' . $name . '[]" multiple="multiple" class="tagging form-control" ' . $re . '>';
        if ($t == '') {
            foreach ($arr as $key => $value) {
                $x .= '<option value="' . $key . '">' . ucfirst($value) . '</option>';
            }
        } else {
            foreach ($arr as $key => $value) {
                if (in_array($key, $t)) {
                    $x .= '<option selected value="' . $key . '">' . ucfirst($value) . '</option>';
                } else {
                    $x .= '<option value="' . $key . '">' . ucfirst($value) . '</option>';
                }
            }
        }
        $x .= '</select>
         </div></div>';
        return $x;
    }
    public static function Select_tag($lable, $name, $arr, $t, $n)
    {
        //print_r($arr);
        // exit();
        $re = self::check($n);
        $res = self::checkst($n);
        $x = '<div class="form-group row mb-4">
		<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ': ' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
			<select name="' . $name . '" class="select2_2 form-control" ' . $re . '>';
        if ($t == '') {
            foreach ($arr as $key => $value) {
                $x .= '<option value="' . $key . '">' . ucfirst($value) . '</option>';
            }
        } else {
            foreach ($arr as $key => $value) {
                if (strtolower($t) == strtolower($key)) {
                    $x .= '<option selected value="' . $key . '">' . ucfirst($value) . '</option>';
                } else {
                    $x .= '<option value="' . $key . '">' . ucfirst($value) . '</option>';
                }
            }
        }
        $x .= '</select>
         </div></div>';
        return $x;
    }
    public static function Selectmulti_sl($lable, $name, $table, $mid, $id, $n)
    {
        $re = self::check($n);
        $res = self::checkst($n);
        $x = '<div class="form-group row mb-4">
		<label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ': ' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
			<select name="' . $name . '[]" class="form-control ' . $id . '" ' . $re . ' multiple>';
        if ($mid == '') {
            $rs = $table::all();
            foreach ($rs as $rw) {
                $x .= '<option value="' . $rw->id . '">' . ucfirst($rw->name) . '</option>';
            }
        } else {
            $rw1 = $table::find_by_in($mid);
            foreach ($rw1 as $rwd) {
                $x .= '<option selected="selected" value="' . $rwd->id . '">' . ucfirst($rwd->name) . '</option>';
            }
            $rs = $table::find_by_not_in($mid);
            foreach ($rs as $rw) {
                $x .= '<option value="' . $rw->id . '">' . ucfirst($rw->name) . '</option>';
            }
        }
        $x .= '</select>
								</div></div>';
        return $x;
    }
    public static function Select_status_av($lable, $name, $sid)
    {
        $fd = "";
        $fd1 = "";
        $x = '<div class="form-group row mb-4"><label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
		<select name="' . $name . '" class="form-control" required>';
        if ($sid == 'Active') {
            $fd = "Selected";
        } else {
            $fd1 = "Selected";
        }
        $x .= '<option ' . $fd . ' value="Active">Active</option>
		<option ' . $fd1 . ' value="Deactive">Deactive</option>';
        $x .= '</select>

		</div></div>';
        return $x;
    }
    public static function Select_status_plus($lable, $name, $sid)
    {
        $fd = "";
        $fd1 = "";
        $x = '<div class="form-group row mb-4"><label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
		<select name="' . $name . '" class="form-control" required>';
        if ($sid == 1) {
            $fd = "Selected";
        } else {
            $fd1 = "Selected";
        }
        $x .= '<option ' . $fd . ' value="1">Link and 2 Images</option>
		<option ' . $fd1 . ' value="2">Link and 1 Images</option>';
        $x .= '</select>

		</div></div>';
        return $x;
    }
    public static function Select_status_yes($lable, $name, $sid)
    {
        $fd = "";
        $fd1 = "";
        $x = '<div class="form-group row mb-4"><label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
		<select name="' . $name . '" class="form-control" required>';
        if ($sid == 1) {
            $fd = "Selected";
        } else {
            $fd1 = "Selected";
        }
        $x .= '<option ' . $fd . ' value="1">Yes</option>
		<option ' . $fd1 . ' value="0">No</option>';
        $x .= '</select>

		</div></div>';
        return $x;
    }
    public static function Select_option($lable, $name, $options, $value)
    {
        $fd = "";
        $fd1 = "";
        $i = 0;
        $x = '<div class="form-group row mb-4"><label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ':</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
		<select name="' . $name . '" class="form-control" required>';
        if ($value != '') {

            for ($i != 0; $i < count($options); $i++) {
                $s = ($value == $i) ? "Select" : " ";

                $x .= '<option ' . $s . ' value="' . $i . '">' . $options[$i] . '</option>';
            }
        } else {

            for ($i != 0; $i < count($options); $i++) {
                $x .= '<option  value="' . $i . '">' . $options[$i] . '</option>';
            }
        }
        $x .= '</select>

		</div></div>';
        return $x;
    }
    public static function Select_ajax($lable, $name, $table, $t, $n)
    {
        $re = self::check($n);
        $res = self::checkst($n);
        echo '<div class="form-group row mb-4">
		  <label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ': ' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
			';
        if ($t != null) {
            $tb = $table::whereNotIn("id", [$t])->get();
            $category = $table::findOrFail($t);
            $v = '<option selected value="' . $t . '">' . $category->id . '.' . ucfirst($category->name) . '</option>';
        } else {
            $c = new $table();
            $tb = $table::all();
            $v = '<option value="">Choose a option...</option>';
        }
        $x = '

	  <select name="' . $name . '" class="form-control selectpicker" data-live-search="true" id="' . $name . '" ' . $re . '>' . $v;
        foreach ($tb as $rw) {
            $x .= '<option value="' . $rw->id . '">' . $rw->id . '.' . ucfirst($rw->name) . '</option>';
        }
        $x .= '</select>';
        $x .= '</div></div>';
        return $x;
    }
    public static function Select_ajax2($lable, $name, $table, $t, $n)
    {
        $re = self::check($n);
        $res = self::checkst($n);
        $v = '';
        echo '<div class="form-group row mb-4">
		  <label for="inputEmail3" class="col-xl-' . self::$wtlable . ' col-sm-4 col-md-' . self::$wtlable . ' col-form-label">' . $lable . ': ' . $res . '</label>
		<div class="col-xl-' . self::$wtform . ' col-lg-9 col-md-' . self::$wtform . '">
			';
        if ($t != null) {
            $tb = $table::whereNotIn("id", [$t])->get();
            $category = $table::findOrFail($t);
            $v = '<option selected value="' . $t . '">' . $category->id . '.' . ucfirst($category->name) . '</option>';
        } else {
            $c = new $table();
            $tb = $table::all();
            $v = '<option value="">Choose a option...</option>';
        }
        $x = '

	  <select name="' . $name . '" class="form-control selectpicker" data-live-search="true" id="' . $name . '" ' . $re . '>' . $v;
        if ($t != null) {
            foreach ($tb as $rw) {
                $x .= '<option value="' . $rw->id . '">' . $rw->id . '.' . ucfirst($rw->name) . '</option>';
            }
        }
        $x .= '</select>';
        $x .= '</div></div>';
        return $x;
    }
}
