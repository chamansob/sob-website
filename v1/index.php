<?php
include ("../includes/initialize.php");
use Illuminate\Container\Container;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$path='';
if(isset($_GET['model']))
{
	
$class_name = $_GET['model'];
 $path = LIB_PATH . DS . "{$class_name}.php";
}
if (file_exists($path))
{

    $request_method = $_SERVER['REQUEST_METHOD'];
    switch ($request_method)
    {
        case 'GET':
            if (isset($_GET['id']))
            {

                try
                {
					
                    $id = $_GET['id'];
                    $x = $class_name::findOrFail($id);
                    echo json_encode($x);
                }
               catch(ModelNotFoundException $ex)
                {

                    echo "Error:". $ex->getMessage();

                }
            }
            else
            {

                try
                {
                    $x = $class_name::all();
                    echo json_encode($x);
                }
                catch(\Illuminate\Database\QueryException $ex)
                {

                    echo "Error:". $ex->getMessage();

                }

            }
        break;
        case 'POST':
            $container = new Container;

            // Create a request from server variables, and bind it to the container; optional
            $request = Request::capture();
            $x = $container->instance('Illuminate\Http\Request', $request);
            $dart = ($x->all());
            $removed = array_pop($dart);

            $ds = new $class_name();
            try
            {
                $fill = $ds->create($dart);
                echo "Data Inserted";
            }
            catch(\Illuminate\Database\QueryException $ex)
            {

                 echo "Error:". $ex->getMessage();

            }
        break;
        case 'PUT':
            $container = new Container;
            // Create a request from server variables, and bind it to the container; optional
            $request = Request::capture();
            $x = $container->instance('Illuminate\Http\Request', $request);
            $dart = ($x->all());
            $removed = array_pop($dart);
           // print_r($dart);
            //exit();
            $ds = $class_name::find($_GET['id']);
            try
            {
                $fill = $ds->update($dart);
                echo "Data Updated";
            }
            catch(\Illuminate\Database\QueryException $ex)
            {

               echo "Error:". $ex->getMessage();

            }
        break;
        case 'DELETE':
            if (isset($_GET['id']))
            {

                try
                {
                    $id = $_GET['id'];
                    $x = $class_name::find($id);
                    $x->delete();
                    echo "Data Deleted";
                }
                catch(\Illuminate\Database\QueryException $ex)
                {

                      echo "Error:". $ex->getMessage();

                }

            }
            else
            {
               echo "Error:please give a id";
            }
        break;
        case 'OPTIONS':
            //deleteEmployee();
            
        break;
        default:
            header('HTTP/1.0 405 Method Not Allowed');
        break;
    }

}
else
{
    echo "No Model not Exsits";
}

?>
