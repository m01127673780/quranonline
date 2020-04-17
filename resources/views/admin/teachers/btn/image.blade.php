<?php 
if (empty ($img)){?>
  <img id="imgfalg" src="{{ asset( 'no_image/no-image.png')}}"   >   
<?php
}else{ ?>    
  <img  id="imgfalg" src="{{ Storage::url($img) }}" id="imgfalg"> 
<?php
 }
 ?> 

 