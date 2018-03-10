<?php
/**
 * @package      Magicgallery
 * @subpackage   Modules
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2016 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      GNU General Public License version 3 or later; see LICENSE.txt
 */
 
// no direct access
defined('_JEXEC') or die; ?>
<div class="mg-mod-galleria<?php echo $moduleclass_sfx; ?>">
<?php
switch($params->get("renderer", "thumbs_images")){
    case "images":
        echo $gallery->renderOnlyImages();
        break;
        
    default: // thumbs and images
        echo $gallery->render();
        break;
}
?>
</div>
