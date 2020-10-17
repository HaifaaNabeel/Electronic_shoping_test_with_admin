<?PHP

class DB{
    public $columns="";
    public $tables="";
    public $cond="";
    public $final_query="";
    private $connection;
    public $ordBy="";
    public $groupBy="";
    public $limit="";
    public $innJoin="";
    public $leftJoin="";
    public $outJoin="";



    function __construct($server,$dbname,$username,$pass){

       // $dsn="mysql:host=".$server.";dbname=".$dbname;
       $dsn="mysql:host=localhost;dbname=ecommerce_project";

        $this->connection=new PDO($dsn,"root","");

    }


    function select ($cols){

        if (empty($this->columns))
        {
            $this->columns=" select * " ;
        }
     
        else{
            $this->columns=" select ".implode(",",$cols)." " ;
        }
            return $this;

    }

    function from($tbls){

        $this->tables="from ".implode(",",$tbls)." ";
       
        return $this;

    }

    function where($cond,$oprator,$value){
        

        if(empty($this->cond))

        $this->cond="where ".$cond." ".$oprator." ".$value." ";
        else
        $this->cond.=" and ".$cond." ".$oprator." ".$value." ";

        return $this;


    }
    function orWhere($cond,$oprator,$value){
        if(empty($this->cond))

        $this->cond="where ".$cond." ".$oprator." ".$value." ";
        else
        $this->cond.=" or ".$cond." ".$oprator." ".$value." ";

        return $this;
    }

    function orderBy ($orCo,$orwa){
        if (empty($this->ordBy))
           $this->ordBy=" order by ".$orCo." ".$orwa." ";
        else
           $this->ordBy.=", ".$orCo." ".$orwa." ";
        return $this;
    }



    function build(){
        
        $this->final_query=$this->columns.$this->tables;
       
        return $this;
    }


    function exeucte(){
        
        $stmt=$this->connection->prepare($this->final_query);
        $stmt->execute();
       $result= $stmt->fetchAll(PDO::FETCH_OBJ);
       print_r($result);
       return $result;


    }


    function insert($tbl,$items){
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $values=array();
        foreach(array_values($items)as $item){
            $values[]="'".$item."'";
        }
       try{
        $this->final_query="insert into ".$tbl."(".implode(",",array_keys($items)).") values (".implode(",",$values).")";
        
        $stmt=$this->connection->prepare($this->final_query);
        $stmt->execute();
        echo $this->final_query;
       }catch(Exception $ex){
           
           echo $ex->getMessage();
       }
        return $this;

    }

    function selectOrder($ta,$row){
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
       try{
        $this->final_query=$sql ="SELECT * FROM `$ta` ORDER BY `$ta`.`$row` DESC"; 
        
        $stmt=$this->connection->prepare($this->final_query);
        $stmt->execute();
        echo $this->final_query;
        $result= $stmt->fetchAll(PDO::FETCH_OBJ);
        print_r($result);
        return $result;

       }catch(Exception $ex){
           
           echo $ex->getMessage();
       }
        return $this;

    }









}

?>