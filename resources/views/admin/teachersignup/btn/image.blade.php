<?php 
if (empty ($icon)){?>
  <img id="imgfalg" src="{{ asset( 'no_image/te.png')}}"   >   
<?php
}else{ ?>    
  <img  id="imgfalg" src="{{ Storage::url($icon) }}" id="imgfalg"> 
<?php
 }
 ?> 


 