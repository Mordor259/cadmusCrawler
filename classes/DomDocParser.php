<?php
class DomDocParser{
  private $doc;
  public function __construct($url){
    $options=array('http' => array('method'=>"GET",'header'=>"User-Agent: cadmusBot/0.1\n"));
    $context=stream_context_create($options);
    $this->doc= new DOMDocument();
    @$this->doc->loadHTML(file_get_contents($url,false,$context));
  }

  public function getLinks(){
    return $this->doc->getElementsByTagName("a");
  }

}

 ?>
