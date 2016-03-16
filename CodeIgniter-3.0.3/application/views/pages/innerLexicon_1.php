<?php  require_once 'ViewConfig.php'; ?>
<!--  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  -->
  <link rel="stylesheet" type="text/css" href="sckb.css"> 
  
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
 <!--  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  -->
       <!--------------------Tree panel ----------------------------->
       <div class="panel panel-grey">
    <!-- <div class="panel panel-default">-->
    <!-- <div class="panel-heading">Relations
                <ul class="list-inline panel-actions">
                        <li><a href="#" id="relation-fullscreen" role="button" title="Toggle fullscreen"><i class="glyphicon glyphicon-resize-full"></i></a></li>
                </ul>
    </div> -->
        <div class="panel-heading">   
	<h3 class="panel-title"><a href="#" id="relation-fullscreen" role="button" title="Toggle fullscreen"><i class="glyphicon glyphicon-resize-full"></i></a>Relations</h3>							
        </div>

        <div id="relation-panel-1" class="panel-body" style="min-height: 35%; max-height: 35%;overflow-y: scroll">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1default" data-toggle="tab" onclick="updateTreeTabID(1);">SubClassOf</a></li>
            <li><a href="#tab2default" data-toggle="tab" onclick="updateTreeTabID(2);">has_proper_part</a></li>
            <li><a href="#tab3default" data-toggle="tab" onclick="updateTreeTabID(3);">has_part</a></li>
        </ul>
       
        
        <div class="tab-content">
        <!---First Panel -->        
        <div class="tab-pane fade in active" id="tab1default">
         
        <div id="treeWell2" class="tree well">
<?php

        $parentLinkName = str_replace(" ", "_", $node->lbl);
        $parentLinkName = str_replace("(", "_",$parentLinkName);
        $parentLinkName = str_replace(")", "_",$parentLinkName);
        //$parentLink = "/SciCrunchKS/index.php/pages/view/".$parentLinkName;
        $parentLink = "/".ViewConfig::$localContextName."/index.php/pages/view/".$node->id;
	//echo "<ul><li><span><i class=\"icon-folder-open\"></i><a target=\"_self\" href=\"".$parentLink."\">" . $node->lbl    .    "</a></span> <a href=\"\"></a>";
        echo "<ul><li><span id=\"".$node->id.","."none"."\"><i class=\"icon-folder-open\"></i>" . $node->lbl    .    "</span><a target=\"_self\" href=\"".$parentLink."\"><img src=\"/img/view-icon.png\" width=\"25\" height=\"25\"></a>";


        
	//echo "<ul><li><span style=\"background-color: #FFFF00\"><i class=\"icon-plus-sign\"></i>" . $mainNode->lbl . "</span> <a href=\"\"></a>"; 
        $mainLink = "/".ViewConfig::$localContextName."/index.php/pages/view/".$mainNode->id;
	echo "<ul><li><span style=\"background-color: #FFFF00\" id=\"".$mainNode->id.",".$node->id."\"><i class=\"icon-plus-sign\"></i>" . $mainNode->lbl . "</span> <a href=\"".$mainLink."\"><img src=\"/img/view-icon.png\" width=\"25\" height=\"25\"></a>"; 


	echo $leafHTML;

	

	echo "</li></ul>";
	echo "</li></ul>";


?>
        </div>
        </div>
        
        <!---End First Panel -->    
        <!---Second Panel -->    
        <div class="tab-pane" id="tab2default">
          <!-- <div id="rel-har_proper_part-panel" class="panel-body" style="min-height: 35%; max-height: 35%;overflow-y: scroll"> -->
           <div id="treeWellB" class="tree well">
<?php

        if(!is_null($node2))
        {
            $parentLinkName = str_replace(" ", "_", $node2->lbl);
            $parentLinkName = str_replace("(", "_",$parentLinkName);
            $parentLinkName = str_replace(")", "_",$parentLinkName);
            //$parentLink = "/SciCrunchKS/index.php/pages/view/".$parentLinkName;
            $parentLink = "/".ViewConfig::$localContextName."/index.php/pages/view/".$node2->id;
            //echo "<ul><li><span><i class=\"icon-folder-open\"></i><a target=\"_self\" href=\"".$parentLink."\">" . $node->lbl    .    "</a></span> <a href=\"\"></a>";
            echo "<ul><li><span id=\"".$node2->id.","."none"."\"><i class=\"icon-folder-open\"></i>" . $node2->lbl    .    "</span><a target=\"_self\" href=\"".$parentLink."\"><img src=\"/img/view-icon.png\" width=\"25\" height=\"25\"></a>";
        }

        
	//echo "<ul><li><span style=\"background-color: #FFFF00\"><i class=\"icon-plus-sign\"></i>" . $mainNode->lbl . "</span> <a href=\"\"></a>"; 
        $mainLink = "/".ViewConfig::$localContextName."/index.php/pages/view/".$mainNode->id;
	echo "<ul><li><span style=\"background-color: #FFFF00\" id=\"".$mainNode->id.",".$node->id."\"><i class=\"icon-plus-sign\"></i>" . $mainNode->lbl . "</span> <a href=\"".$mainLink."\"><img src=\"/img/view-icon.png\" width=\"25\" height=\"25\"></a>"; 

        if(!is_null($leafHTML2))
            echo $leafHTML2;

	

	echo "</li></ul>";
        
        if(!is_null($node2))
        {
            echo "</li></ul>";
        }


?>
       <!-- </div> -->
        </div>
        </div>
        <!-- End second panel -->
        <!---Third Panel -->    
        <div class="tab-pane" id="tab3default">
           <!--<div id="rel-has_part-panel" class="panel-body" style="min-height: 35%; max-height: 35%;overflow-y: scroll">-->
           <div id="treeWellC" class="tree well">
<?php

        if(!is_null($node3))
        {
            $parentLinkName = str_replace(" ", "_", $node3->lbl);
            $parentLinkName = str_replace("(", "_",$parentLinkName);
            $parentLinkName = str_replace(")", "_",$parentLinkName);
            //$parentLink = "/SciCrunchKS/index.php/pages/view/".$parentLinkName;
            $parentLink = "/".ViewConfig::$localContextName."/index.php/pages/view/".$node3->id;
            //echo "<ul><li><span><i class=\"icon-folder-open\"></i><a target=\"_self\" href=\"".$parentLink."\">" . $node->lbl    .    "</a></span> <a href=\"\"></a>";
            echo "<ul><li><span id=\"".$node3->id.","."none"."\"><i class=\"icon-folder-open\"></i>" . $node3->lbl    .    "</span><a target=\"_self\" href=\"".$parentLink."\"><img src=\"/img/view-icon.png\" width=\"25\" height=\"25\"></a>";

        }
        
	//echo "<ul><li><span style=\"background-color: #FFFF00\"><i class=\"icon-plus-sign\"></i>" . $mainNode->lbl . "</span> <a href=\"\"></a>"; 
        $mainLink = "/".ViewConfig::$localContextName."/index.php/pages/view/".$mainNode->id;
	echo "<ul><li><span style=\"background-color: #FFFF00\" id=\"".$mainNode->id.",".$node->id."\"><i class=\"icon-plus-sign\"></i>" . $mainNode->lbl . "</span> <a href=\"".$mainLink."\"><img src=\"/img/view-icon.png\" width=\"25\" height=\"25\"></a>"; 

        if(!is_null($leafHTML3))
            echo $leafHTML3;

        echo "</li></ul>";
	
            
	if(!is_null($node3))
        {
	echo "</li></ul>";
        }


?>
        </div>
        </div>
       <!-- </div> -->
        <!-- End Third panel -->
        
        </div>
       </div>
       </div>
       



    <!-- Lexicon table -->
    <!-- <div class="panel panel-default"> -->
     <div class="panel panel-grey">
    <div class="panel-heading">Lexicon</div>
<!--    <div class="panel-body" style="min-height: 120; max-height: 120;overflow-y: scroll">
	-->
	<div class="panel-body" style="min-height: 22%; max-height: 22%;overflow-y: scroll">

<div class="row" style="<?php
	$useBackground = false;
	$background = "background: #b8d1f3";
	//echo "<div class=\"row\" style=\"";
	if($useBackground)
	{
	    $useBackground = false;
	    echo $background;
	}
	else
	    $useBackground = true;
	//echo "\">";


?>">    
<div class="col-md-3">Concept URI</div>
<div class="col-md-9"><?php  echo $curie;    ?></div>
</div>
<!-- /div> -->

<div class="row" style="<?php
	//echo "<div class=\"row\" style=\"";
        if($useBackground)
        {
            $useBackground = false;
            echo $background;
        }
        else
            $useBackground = true;
       //echo "\">";

?>">
        <div class="col-md-3">Label(s)</div>
        <div class="col-md-9"><?php
	
	echo $mainNode->lbl;	

	?></div>
	</div>
<div class="row" style="<?php
        //echo "<div class=\"row\" style=\"";
        if($useBackground)
        {
            $useBackground = false;
            echo $background;
        }
        else
            $useBackground = true;
        //echo "\">";

?>">
    
    
    <?php


	
	$syn1 = 0;

        if(isset($mainNode->meta->synonym))
        {
            echo "<div class=\"col-md-3\">Synonyms</div>\n";
            echo "<div class=\"col-md-9\">\n";
            foreach($mainNode->meta->synonym as $synonym)
            {
                    if($syn1 > 0)
                       echo ", ";
                    else
                       $syn1 = $syn1+1;

                    echo $synonym;
            }
            echo "</div>\n";
           
        }


	?>
  </div>


</div>
<!---End of panel--------->
    </div>


    <!-- </div> -->
