<?php 
if (empty ($img)){?>
  <img id="imgfalg" src="https://www.hicsohag.edu.eg/wp-content/uploads/2019/03/no-image.png"   >   
s<?php
}else{ ?>    
  <img  id="imgfalg" src="{{ Storage::url($img) }}" id="imgfalg"> 
<?php
 }
 ?>  


 

 