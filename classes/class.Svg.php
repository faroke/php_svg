<?php 
class Svg{
  private int $width;
  private int $height;
  private string $backgroundColor;
  private $listShapes;
  public function __construct(int $width, int $height, string $backgroundColor){
    $this->width = $width;
    $this->height = $heigth;
    $this->backgroundColor = $backgroundColor;
    $this->listShapes = array();
  }
  function addShape(string $type){
    switch($type){
      case 'rectangle':
        break;
      case 'circle':
        break;
      case 'ellipse':
        break;
      case 'shape':
        break;
      case 'square':
        break;
      default:
        break;
  }
  function renderer(){
    $stock = implode($this->listShapes);
    return '<svg xmlns="http://www.w3.org/2000/svg" width="{$this->width}" height="{$this->height}" viewBox="0 0 256 256"> {$stock}</svg>';
  }
  function draw(){}
}