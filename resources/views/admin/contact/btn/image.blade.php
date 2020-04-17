<?php 
if (empty ($icon)){?>
  <img id="imgfalg" src="{{ asset( 'no_image/user.png')}} "    >   
<?php
}else{ ?>    
  <img  id="imgfalg" src="{{ Storage::url($icon) }}" id="imgfalg"> 
<?php
 }
 ?> 
