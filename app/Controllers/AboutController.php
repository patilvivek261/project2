<?php 
/**
 * 
 */

namespace app\Controllers;
use CodeIgniter\Controller;

class AboutController extends Controller{
    
    /**
     * 
     * @var object
     */
    public $parserObj = NULL;
    
    public function __construct(){
        
        $this->parserObj = \Config\Services::parser();
    }
    
    public function about(){
        
        
        $data1  = [
            "pageTitle"     => "About Page",
            "innerPageHeading"   => "about Heading",
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
        
        //return $this->parserObj->render('layout/base_inner.php');
        return view("about.php",$data1);
        
        
    }//end about() function 
    
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
        
        
    }//end function __remap()
    
    
}//end AboutController class

?>