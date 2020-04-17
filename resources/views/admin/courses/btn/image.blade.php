<?php 
if (empty ($icon)){?>
  <img id="imgfalg" src="https://www.hicsohag.edu.eg/wp-content/uploads/2019/03/no-image.png"   >   
<?php
}else{ ?>    
  <img  id="imgfalg" src="{{ Storage::url($icon) }}" id="imgfalg"> 
<?php
 }
 ?> 