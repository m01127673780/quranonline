<?php 
if (empty ($img)){?>
  <img id="imgfalg" src="{{ Storage::url('/beststudent/No_Image.jpg') }}"   >   
<?php
}else{ ?>    
  <img  id="imgfalg" src="{{ Storage::url($img) }}" id="imgfalg"> 
 <?php
 }
 ?> 
 
 