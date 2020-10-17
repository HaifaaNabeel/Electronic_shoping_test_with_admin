<?PHP
use coreAppNS\Controller;

class admin_catController extends Controller{
public $controller;
public $cat_model;
public $function;



    function __construct($function="index"){

        $this->controller=new Controller();
        $this->cat_model=$this->controller->model_object->create_model('category');
        $this->$function();
        
    }


       function index(){
        $items=array(
            'categories'=>$this->cat_model->getDataOrder(),
            
        );
        
        $this->controller->view_object->create_view('admin/categories',$items);
       }

       function add(){
           //echo "in addddddddddd";
            //echo $_POST['create_date']='now()';
            print_r($_POST);
            //$_POST['create_date']='now()';
           $this->cat_model->addData($_POST); 
           //$this->controller->view_object->create_view('admin/add_cat_done');


       }
function add_cat()
{
    $items=array(
        'categories'=>$this->cat_model->getData(),
       
    
    );
    $this->controller->view_object->create_view('admin/add_cat',$items);

}
function update_cat()
{
    $this->controller->view_object->create_view('admin/update_cat');

}
function delete_cat()
{
    $this->controller->view_object->create_view('admin/update_cat');

} 

}


?>