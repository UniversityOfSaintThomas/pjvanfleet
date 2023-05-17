<?php
include "databaseConnection.php";
include "formatter.php";
include "utilities.php";
include "pvfheader.php";
$blurbid=100;
?>

<div id="column2wide">
<h1 class="pageTitle">Biographical Sketch</h1>
<p class="picture">
	<img src="images/pvfworldseriessmall.jpg" alt="PVF"></img><br/><br/>
	Game 3 - 2004 World Series<br/><br/>
</p>
<dl>
	<p>
	<dt><a href="javascript:toggleLayer('<?php echo($blurbid)?>')">Education</a></dt>
	<p></p>
	<dd><span class="posthidden" id="<?php echo($blurbid)?>">
	<?php $blurbid+=1 ?>
	<p>
	I was raised about 20 miles west of Peoria, IL in Farmington, IL (pop. 2483).  I earned a Bachelors of Science
	degree at <a href="http://www.wiu.edu" title="WIU">Western Illinois University</a> and my Masters of Science and PhD 	at <a href="http://www.siuc.edu" title="SIU">Southern Illinois University</a>.   At WIU, I played on the
	<a href="http://www.wiuathletics.com/SportSelect.dbml?DB_OEM_ID=12000&KEY=&SPID=4953&SPSID=49976" title="WIU Tennis">tennis team</a>.  At SIU I did my doctoral work 	with <a href="http://www.math.siu.edu/neuman/" title="Ed Neuman's Page">Edward Neuman</a> and my master's work 	with <a href="http://www.math.siu.edu/kammler/" title="David Kammler's Page">David Kammler</a>.  David taught me 	many wonderful things about Fourier analysis.
	</span></dd>
	</p>
	</p><p>
	<dt><a href="javascript:toggleLayer('<?php echo($blurbid)?>')">Employment</a></dt>
	<p></p>
	<dd><span class="posthidden" id="<?php echo($blurbid)?>">
	<?php $blurbid+=1 ?>
	<p>
	I spent 1991-1992 as a postdoc at <a href="http://math.vanderbilt.edu" title="Vanderbilt University">Vanderbilt 	University</a> in Nashville, TN.  In 1992, I moved to Huntsville, TX and worked for six years at
	<a href="http://www.shsu.edu/~mth_www/" title="SHSU">Sam Houston State University</a>.  During my time at SHSU, I was 	fortunate to work with four mathematicians - <a href="http://www.geocities.com/prmassopust/">Peter Massopust</a>, 
	<a href="http://clem.mscd.edu/~ruch/" title="Ruch Webpage">David
	Ruch</a>, <a href="http://www.math.sjsu.edu/~so/" title="So Webpage">Wasin So</a>, and
	<a href="http://www.shsu.edu/~mth_jxw/" title="Wang Webpage">Jianzhong Wang</a> - as part of a research group in 	(multi)wavelets.  We received <a href="http://www.nsf.gov" title="NSF">National Science Foundation</a> funding for 	research in multiwavelets and	Wasin and I also worked on a grant from the <a href="http://www.serdp.org" 	title="SERDP">Strategic	Environmental Research and Development Program</a> (SERDP).  This agency does environmental 	research for the 	Department of Defense.
	</p><p>
	In 1998, I accepted the endowed position as Director of the <a href="http://cam.mathlab.stthomas.edu" title="CAM">	Center for Applied Mathematics</a> in the	<a href="http://www.stthomas.edu/mathematics" title="UST Math">Mathematics 	Department</a> at the <a href="http://www.stthomas.edu" title="UST">University of St. Thomas</a> in St. Paul, MN.
	The goal of CAM is to promote applied mathematics at the undergraduate level and to make undergraduates aware of the 	type of jobs available to applied mathematicians in business, industry, and education.  CAM sponsors a summer
	undergraduate research program, an academic year colloquium series, a visitor program, and much more.  Please check 	out the website for more information!
	</p>
	</span></dd>
	</p><p>
	<dt><a href="javascript:toggleLayer('<?php echo($blurbid)?>')">Research Interests</a></dt>
	<p></p>
	<dd><span class="posthidden" id="<?php echo($blurbid)?>">
	<?php $blurbid+=1 ?>
	<p>
	My main research interests are in the area of (multi)wavelets.  I am also interested in problems in spline theory and 	their connections to special functions.  Lately, I have spent much of my &quot;free&quot; time writing an 	undergraduate text on wavelets and their applications.  Please visit my <a href="vita.php" title="PVF Vita">vita</a>  	to see my research papers on wavelets and other areas and check out the wavelets page to learn about the book, sign 	up for an upcoming wavelet workshop, or download some software for working with wavelets.
	</p>
	</span></dd>
	</p><p>
	<dt><a href="javascript:toggleLayer('<?php echo($blurbid)?>')">Personal Information</a></dt>
	<p></p>
	<dd><span class="posthidden" id="<?php echo($blurbid)?>">
	<?php $blurbid+=1 ?>
	<p>
	I am married to Verena Van Fleet-Stalder.  She is a microbiologist from Switzerland.  We have three children - Sam (18), Matt (15), and Rachel (10).  In my spare time, I like to play tennis and guitar.  I am also a huge St. Louis 	Cardinals baseball fan.
	</p>
	</span></dd>
	</p><p>
	<dt><a href="javascript:toggleLayer('<?php echo($blurbid)?>')">Fun Fact</a></dt>
	<p></p>
	<dd><span class="posthidden" id="<?php echo($blurbid)?>">
	<?php $blurbid+=1 ?>
	<p>
	My Erd&ouml;s number is <b>3</b> <i> (Wang, Chui, Erd&ouml;s)</i>.  To compute yours, go
	<a href="http://www.oakland.edu/enp" title="Compute your Erd&oml;s Number">here</a>.
	</span></dd>
	</p>
	<p></p>
	<dt><a href="http://cam.mathlab.stthomas.edu/pvf/" title="PVF Webpage">Website</a>
	<br/>
</dl>
</div>
<?php
include "pvfoutlineNavigation.php";
include "pvffooter.php";
?>

