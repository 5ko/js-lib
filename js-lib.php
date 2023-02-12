<?php if (!defined('PmWiki')) exit();
/**
  Allegro: Modular, visual editor for PmWiki
  Written by (c) Petko Yotov 2017-2023   www.pmwiki.org/Petko

  This text is written for PmWiki; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published
  by the Free Software Foundation; either version 3 of the License, or
  (at your option) any later version. See pmwiki.php for full details
  and lack of warranty.
  
  This is a loader for the external libraries needed by Allegro.
*/
$RecipeInfo['js-lib']['Version'] = '20230212';

 # source code syntax, filterable, precision math, visual editor
$ModuleHeaderFmt[] = "$ModuleDirUrl/highlight.min.js highlight.default.min.css
  jets.min.js decimal.min.js
  trix.css trix.js";
  
# MathJax after Allegro
if($action == 'aedit') {
  $ModuleHeaderFmt[] = "$ModuleDirUrl/Sortable.min.js"; # drag-and-drop
  $ModuleHeaderFmt[] = array("$ModuleDirUrl/tex-svg.js", # MathJax formulas
    'id'=>'MathJax-script', 'async'=>'async'); 
}

