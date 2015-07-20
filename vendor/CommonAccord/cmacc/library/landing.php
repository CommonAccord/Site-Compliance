<body style="margin:40;padding:0">

<body style="margin:40;padding:0"><p align="center"><span title="Logo" ><img src="visual/cmacc-trans.png" style="width:35%" /></span></p><span title="Table.sec" ><table><tr><td><span title="IntroContent" ><span title="Introduction.sec" >This website is for compliance documents.<br><br>Currently, it centers on an <a href="index.php?action=doc&file=FoleyGRS/FCPAPolicy/Form/FCPA_01-02.md">Anti-Bribery and Anti-Corruption Policy</a> contributed by David Simon of Foley & Lardner. We invite you to use it, make extensions, suggest changes and contribute documents that complement or compete with it.  We also invite you to work on other materials at other CommonAccord sites or clone a site.</span><br><br><span title="DavidsDoc.sec" >When you click on the first link below, you will see David's document.</span><br><span title="PageTabs.sec" ><ul><li><span title="DocumentTab.sec" ><a href="index.php?action=doc&file=FoleyGRS/FCPAPolicy/Form/FCPA_01-02.md">Document</a> view has red <font color="red">{open points}</font>. If you <u>hover your cursor</u> over a part of the text and wait a moment, a tiny box will pop up and tell you the name of that span of text.</span><li><span title="SourceTab.sec" ><a href="index.php?action=source&file=FoleyGRS/FCPAPolicy/Form/FCPA_01-02.md">Source</a> for the components and an up arrow to take you to other files.</span><li><span title="EditTab.sec" ><a href="index.php?action=edit&file=FoleyGRS/FCPAPolicy/Form/FCPA_01-02.md">Edit</a> lets you play (save box at the bottom of the window).  Your changes are  temporary, wiped out by the next update of the site, unless you edit by "forking" on the GitHub repo or email your text to us at <a href="mailto:commonaccord@gmail.com">commonaccord@gmail.com</a>.</span></span><li><span title="EditCompleteTab.sec" ><a href="index.php?action=openedit&file=FoleyGRS/FCPAPolicy/Form/FCPA_01-02.md">Edit and Complete</a> prompts you with the missing elements.</span><li><span title="PrintTab.sec" ><a href="index.php?action=print&file=FoleyGRS/FCPAPolicy/Form/FCPA_01-02.md">Print</a> is the same as "Document," except it <i>does not</i> have a heading, colored opens or marked text spans. Ready for printing and stripped of metadata.</span><li><span title="GitHubTab.sec" ><a href="http://github.com/CommonAccord/{Site-Name!!}/blob/master/Doc/FoleyGRS/FCPAPolicy/Form/FCPA_01-02.md">GitHub</a> takes you to the source code for the entire site, kept at GitHub, where engineers keep software source code. If you have a GitHub account, feel free to fork.  If you don't - ask an engineer.  A GitHub account is useful and free.</span></ul></span><br><span title="DocumentsFolder.sec" ><a href="index.php?action=list&file=/">Folder with all the documents.</a></span><br><br><span title="OtherSites.sec" >Other sites: <ul><li><a href="http://source.commonaccord.org">source.commonaccord.org</a> (Master Service Agreement)<li>   <a href="http://ga4gh.commonaccord.org">ga4gh.commonaccord.org</a> (Patient Consents in Genomic Research)<li><a href="http://fr.commonaccord.org">fr.commonaccord.org</a> (French)<li>   <a href="http://commonaccord.org">commonaccord.org</a> (General)</ul></span><br><br><span title="PageSource.sec" >This page is made using Cmacc ("dog food" in startup parlance): <a href="index.php?action=source&file=Website/landing.md">Page Source</a></span></span></td><td><span title="TwitterBlock.sec" ><a class="twitter-timeline" href="https://twitter.com/CommonAccord/with_replies" data-widget-id="574817616360964096" width="600" height="300">Tweets by @CommonAccord</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></span></td></tr></table></span>



<?php

$lib_path = LIB_PATH;

$dir=LANDING_MD;


$document = `perl $lib_path/parser.pl $path/$dir`;

$minDocLength = 1;

if (strlen($document) > $minDocLength){ 


//kludge to let html headers have formatting.
 
  echo $document;}
 else {
   echo "Nothing to Show";


}
?>
