<?php 
/**
 * 
 */

namespace app\Controllers;
use CodeIgniter\Controller;

/**
 * 
 */
class PortfolioController extends Controller{
    
    /**
     * 
     */
    public $parserObj = NULL;
    
    
    /**
     * 
     */
    public function __construct(){
       
        $this->parserObj = \Config\Services::Parser();
    
    }//end __construct()
    
    
    /**
     * 
     * @return string
     */
    public function portfolio(){
        
        $data1  = [
            "pageTitle"     => "Portfolio Page",
            "pageHeading"   => "Company Portfolio Head",
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
        //return $this->parserObj->render("layout/base_portfolio.php");
        return view("portfolio.php",$data1);
        
        
    }//end function porfolio()
    
    
    public function _remap($method,$param1=NULL,$param2=NULL){
        
        if(method_exists($this, $method)){
            
            return $this->$method($param1,$param2);
            
        }//endif method_exists()        
        else{
            
            echo "Call to Undefined Webpage";
            return 0;
            
        }//endelse method_exists()
        
        
    }//end function _remap()
    
    
}//end class PortfolioConstructor

?>