Model.Root=<p align="center">{Logo}</p>{Table.sec}

Logo=<img src="visual/cmacc-trans.png" style="width:35%" />

Table.sec=<table><tr><td>{IntroContent}</td><td>{TwitterBlock.sec}</td></tr></table>

IntroContent={Introduction.sec}<br><br>{DavidsDoc.sec}<br>{PageTabs.sec}<br>{DocumentsFolder.sec}<br><br>{OtherSites.sec}<br><br>{PageSource.sec}



Introduction.sec=This website is for compliance documents.<br><br>Currently, it centers on an <a href="index.php?action=doc&file={DemoDocName!!}">Anti-Bribery and Anti-Corruption Policy</a> contributed by David Simon of Foley & Lardner. We invite you to use it, make extensions, suggest changes and contribute documents that complement or compete with it.  We also invite you to work on other materials at other CommonAccord sites or clone a site.

DavidsDoc.sec=When you click on the first link below, you will see David's document.

 
Examples.sec=Examples:<ul><li><span title="Go to Acme's Policy"><a href="index.php?action=source&file=/Deal/Acme-Policies/Acme-AntiBriberyPolicy_01-01.md">Acme's Anti-Bribery Policy</a> based on the model policy.</span><li><span title="Revise Acme's Policy"><a href="index.php?action=source&file=/Deal/Acme-Policies/Acme-AntiBriberyPolicy_01-02.md">Draft 2 of Acme's Policy</a> based on that first draft.</span></ul>

DocumentsFolder.sec=<a href="index.php?action=list&file=/">Folder with all the documents.</a>

OtherSites.sec=Other sites: <ul><li><a href="http://source.commonaccord.org">source.commonaccord.org</a> (Master Service Agreement)<li>   <a href="http://ga4gh.commonaccord.org">ga4gh.commonaccord.org</a> (Patient Consents in Genomic Research)<li><a href="http://fr.commonaccord.org">fr.commonaccord.org</a> (French)<li>   <a href="http://commonaccord.org">commonaccord.org</a> (General)</ul>

TwitterBlock.sec=<a class="twitter-timeline" href="https://twitter.com/CommonAccord/with_replies" data-widget-id="574817616360964096" width="600" height="300">Tweets by @CommonAccord</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

PageSource.sec=This page is made using Cmacc ("dog food" in startup parlance): <a href="index.php?action=source&file=Website/landing.md">Page Source</a>

//We draw from a common list, hosted at GitHub:

DemoDocName=FoleyGRS/FCPAPolicy/Form/FCPA_01-02.md
 
=[?https://raw.githubusercontent.com/CommonAccord/Site-Org/master/Doc/Website/ListOfCommonAccordWebsites.md]