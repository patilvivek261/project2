<?php 
/**
 * 
 */

namespace app\Controllers;
use CodeIgniter\Controller;

/**
 * 
 */
class HomeController extends Controller{
    
    /**
     * 
     * @var object
     */
    public $parserObj=NULL;
    
    /**
     * 
     */
    public function __construct(){
        
        $this->parserObj = \Config\Services::Parser();
    }

    /**
     * 
     * @return string
     */
    public function home(){
        
        $data1  = [
            "pageTitle"     => "Home Page",
            "pageHeading"   => "Home Head",
            "subjects"      => [
                                ["sub"=>"NodeJS"],
                                ["sub"=>"MYSQL"],
                                ["sub"=>"CodeIgniter4"],
                                ["sub"=>"Laravel"],
                                ["sub"=>"PHP"],
                                ["sub"=>"HTML5"],
                                ["sub"=>"Jquery"],
                                ["sub"=>"Ajax"],
            ],
            "amount"        => "9000",
            "date"          => "2021-05-07",
            
        ];
                
        //return $this->parserObj->render("home.php",$data1);
        return view("home.php",$data1);
    }

    /**
     * 
     */
    
    public function _remap($method,$param1=NULL,$param2=NULL){
        
        /**
         * 
         */
        if(method_exists($this,$method)){
            
            return $this->$method($param1,$param2);
            
        }//endif method_exists()
        else{
        
            echo "Call To Undefined Webpage";
            return 1;
        
        }//endelse method_exists()
    
    }

}


?>
