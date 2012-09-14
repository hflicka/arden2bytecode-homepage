<?php include "includes/head.php"; ?>

<h2>Arden4Eclipse plugin</h2>

<p>There is an Arden Syntax Editor made with <a href="http://www.xtext.org/">xText</a> available as Eclipse plugin.</p>

<h3>Installation Instructions</h3>

<p>You can choose between two ways of installing:</p>

<ul>
<li>via Eclipse Marketplace (recommended, but slow)</li>
<li>via Eclipse Update Site (more complicated, but faster)</li>
</ul>

<h4>via Eclipse Marketplace</h4>

<p>To install via Eclipse Marketplace, follow these steps:</p>
<ol>
<li>Drag and drop the following Button onto a running Eclipse window to install the Arden Syntax Tools:
<a href="http://marketplace.eclipse.org/marketplace-client-intro?mpc_install=209263" 
   title="Drag and drop into a running Eclipse Indigo workspace to install Arden Syntax Tools"> 
	<img src="http://marketplace.eclipse.org/misc/installbutton.png" />
</a>
</li>
<li>Follow the installation procedure. When asked if you want to install unsigned software, click OK.</li>
</ol>

<h4>via Eclipse Update Site</h4>

<p>To install via the <a href="http://arden2bytecode.sf.net/eclipse/update/">Arden2ByteCode Update Site</a>, follow these steps:</p>
<ol>
<li>Start a recent version of the Eclipse IDE.<br>
If you don't have Eclipse yet, you may download the Eclipse IDE 
for Java Developers at 
<a href="http://www.eclipse.org/downloads/">http://www.eclipse.org/downloads/</a>.</li>
<li>Go to <b>Help -> Install new Software...</b> in the Eclipse menu.</li>
<li>Uncheck the <b>Contact all update sites during install to find required software</b> 
checkbox (this is useful to speed up the installation process).</li>
<li>Add <a href="http://arden2bytecode.sf.net/eclipse/update/">http://arden2bytecode.sf.net/eclipse/update/</a> 
as a Software Site.<br>
The name you enter for that site does not matter.<br>
Note that the loading of the Software Site content may take a 
while as the Eclipse servers are slow. During this time, you will see a "Pending..." notice.</li>
<li>Mark the "Arden Syntax Tools" to be installed. Click next.</li>
<li>Follow the installation procedure. When asked if you want to install unsigned software, click OK.</li>
<li>Once the Arden Syntax Editor is installed, Eclipse will prompt you if you 
want to add the xText Nature to your project when opening or creating an MLM (*.mlm) file. <br>
Choose "yes" to activate the Arden Syntax Editor.</li>
<li>You should now see the Syntax of <code>.mlm</code> files in that project being highlighted.</li>
</ol>

<?php include "includes/foot.php"; ?>
