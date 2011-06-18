<?php
require 'src/Page.php';

class IndexPage
{
	public function activeTab()
	{
		return 'index';
	}

	public function render()
	{
?>
				<h2>Get Involved</h2>
				<p>You can help the project in many ways. Pick what suits your skills best, all contributions are much appreciated by the rest of the community. More detailed information on how to go about contributing is available on our <a href="http://wiki.phpbb.com/Get_Involved" title="Get Involved">Get Involved</a> wiki page.</p>
				<ul class="contribution-list">
					<li>
						<b><a href="http://wiki.phpbb.com/Get_Involved#Reporting_Bugs" title="Reporting Bugs">Report bugs</a></b><br />
						phpBB can only be improved if the developers are aware of the problems users encounter. Detailed descriptions of problems help contributors solve them quickly.
					</li>
					<li>
						<b><a href="http://wiki.phpbb.com/Get_Involved#Reproducing_Bugs" title="Reproducing Bugs">Reproduce bugs and verify fixes</a></b><br />
						Help identify incorrectly reported bugs to speed up development. Test bugfixes to ensure they work as expected and do not have unintended side effects.
					</li>
					<li class="line-break">
						<b><a href="http://wiki.phpbb.com/Get_Involved#Creating_.2F_Submitting_Patches" title="Creating / Submitting Patches">Submit patches</a></b><br />
						Know how to work with PHP, CSS or HTML? Fix a bug or implement a feature yourself and prepare your patch to be merged into phpBB.
					</li>
					<li>
						<b><a href="http://wiki.phpbb.com/Get_Involved#Reviewing_Patches" title="Reviewing Patches">Review patches</a></b><br />
						Help identify problems before they go into a released version of phpBB and reach our users. Review and test other contributors' patches to identify problems.
					</li>
					<li class="line-break">
						<b><a href="http://wiki.phpbb.com/Get_Involved#Discussing_Existing_RFCs" title="Discuss Existing RFCs">Discussing existing RFCs</a></b><br />
						RFCs are enhancement proposals for future versions of phpBB. You can provide comments on these proposals as well as collaborate on their implementation at the Development Discussion Board.
					</li>
					<li>
						<b><a href="http://wiki.phpbb.com/Get_Involved#Creating_New_RFCs" title="Creating new RFCs">Create new RFCs</a></b><br />
						Propose a new feature or a change in behaviour for discussion with the rest of the community. All big changes need to go through this process on the Development Discussion Board.
					</li>
					<li class="line-break full-line">
						<b><a href="http://wiki.phpbb.com/Get_Involved#Participating_in_development_IRC_channel_and_area51" title="Participate">Participate in development IRC channel and Area51</a></b><br />
						phpBB's development is public. When developers want to discuss something, have a question or want to request feedback they do it either in the development IRC channel (#phpbb-dev on FreeNode) or on the Development Discussion Board. Everyone is welcome to participate in these discussions to whatever extent they want.
					</li>
				</ul>

				<div>
					<h2>Development Sites &amp; Tools</h2>
					<ul class="section-list">
						<li>
							<a href="http://github.com/phpbb/" title="Github"><img src="images/github.png" title="Github" alt="Github" /></a>
							<h2>Github</h2>
							<p>phpBB's source code is hosted in <a href="http://git-scm.org/" title="Git">Git</a> repositories at Github. You can also find a number of other tools for phpBB or MOD development there.</p>
						</li>
						<li>
							<a href="http://tracker.phpbb.com/" title="Tracker"><img src="images/tracker.png" title="Tracker" alt="Tracker" /></a>
							<h2>Issue Tracker</h2>
							<p>If you found a bug in phpBB this is the place to report it. If you're not sure if the behaviour you found is really a bug try asking for help in the <a href="http://www.phpbb.com/community/viewforum.php?f=46" title="Support Forum">Support Forum</a> first.</p>
						</li>
						<li>
							<a href="http://bamboo.phpbb.com/" title="Bamboo"><img src="images/bamboo.png" title="Bamboo" alt="Bamboo" /></a>
							<h2>Continuous Integration</h2>
							<p>phpBB is continuously tested against a large suite of automated tests to ensure we deliver a high quality product. Bamboo takes care of running the tests and providing us with useful statistics.</p>
						</li>
						<li>
							<a href="http://wiki.phpbb.com/" title="Wiki"><img src="images/wiki.png" title="Wiki" alt="Wiki" /></a>
							<h2>Wiki</h2>
							<p>The wiki is used to document a variety of best practices as well as the architecture of phpBB. A number of tutorials and in-depth articles explain how to work with particular parts of phpBB.</p>
						</li>

						<li class="line-break">
							<a href="http://code.phpbb.com" title="Code Forge"><img src="images/code-forge.png" title="Code Forge" alt="Code Forge" /></a>
							<h2>Code Forge</h2>
							<p>The former home of phpBB source code still hosts a few utilities that haven't been moved over to git yet and subversion mirrors of our git repositories.</p>
						</li>
						<li>
							<img src="images/coding-style.png" title="Coding Guidelines" alt="Coding Guidelines" />
							<h2>Coding Guidelines</h2>
							<p>Automatically generated documentation for phpBB APIs - always up to date.</p>
							<ul>
								<li><a href="docs/30x/coding-guidelines.html">Olympus (3.0.x) Guide</a></li>
								<li><a href="docs/31x/coding-guidelines.html">Ascraeus (3.1.x) Guide</a></li>
							</ul>
						</li>
						<li>
							<img src="images/api.png" title="API Documentation" alt="API Documentation" />
							<h2>API Documentation</h2>
							<p>Automatically generated documentation for phpBB APIs - always up to date.</p>
							<ul>
								<li><a href="docs/code/30x/">Olympus (3.0.x) Docs</a></li>
								<li><a href="docs/code/31x/">Ascraeus (3.1.x) Docs</a></li>
							</ul>
						</li>
						<li>
							<a href="phpBB/" title="Development Discussion"><img src="images/development-discussion.png" title="Development Discussion" alt="Development Discussion" /></a>
							<h2>Development Discussion</h2>
							<p>All proposals for new features and code changes are discussed in this forum. It runs the latest unstable version of phpBB allowing you to test upcoming features.</p>
						</li>
					</ul>
				</div>
<?php
	}
}

$page = new Page(new IndexPage);
$page->render();
