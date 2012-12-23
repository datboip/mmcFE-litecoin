<div class="block withsidebar">

	<div class="block_head">
		<div class="bheadl"></div>
		<div class="bheadr"></div>

                <h2>Welcome,
                <?php
                if($cookieValid) {

                        echo $userInfo->username . " ";

                        $account_type = 0;
                        $account_type = account_type($userInfo->id);

                        if ($account_type == 9) {
                                $account_type = "<b>Early-Adopter</b>: <b>0%</b> Pool Fee";
                        } else {
                                $account_type = "<b>Active Account</b>: <b>" .$settings->getsetting("sitepercent"). "%</b> Pool Fee";
                        }

                        echo "<font size='1px'>" .$account_type."</font> ";
                        echo "<font size='1px'><i>(You are <a href='/osList'>donating</a> <b></i>" .antiXss($donatePercent)."%</b> <i>of your earnings)</i></font>";
                } else {
                        echo "Guest";
                }
                ?>
                </h2>
	</div>		<!-- .block_head ends -->




	<div class="block_content">

		<div class="sidebar">
			<?php include_once ("includes/leftsidebar.php"); ?>
		</div>		<!-- .sidebar ends -->


		<div class="sidebar_content">

                <div class="block" style="clear:none;">
                 <div class="block_head">
                  <div class="bheadl"></div>
                  <div class="bheadr"></div>
<h1>Getting Started</h1>
		</div>
<div class="block_content" style="padding:10px;">
<p>
<ol>
<li><strong>Create account.</strong> Register <a href="/register">here</a>, or login if you already have account</li>

<li><strong>Download a miner.</strong>
	<ul>
	<li><em>Windows users:</em> download a "batteries" included package for
	    <a href="http://www.mediafire.com/?l8i99fbyn41n97a">64-bit</a> or
	    <a href="http://www.mediafire.com/?9nt43ahwpt1sefx">32-bit</a> Windows.
	    These packages include Pooler's cpuminer 2.1.2 and Matoking's GUI r6, updated 2012-02-03.<br>
	    Extract the files into a folder and start the included ScryptMiner.<br>
	    If you don't want a graphical user interface, you can download an optimized command-line miner
	    <a href="https://bitcointalk.org/index.php?topic=55038.msg654850#msg654850">here</a>.</li>
	<li><em>Linux users:</em> download and compile <a href="https://github.com/pooler/cpuminer">cpuminer</a>.
	    Under Debian and Ubuntu, you can use the following recipe:
<pre>
  sudo apt-get install make automake build-essential git
  sudo apt-get install libcurl4-openssl-dev
  git clone git://github.com/pooler/cpuminer.git
  cd cpuminer
  ./autogen.sh
  ./configure CFLAGS="-O3"
  make
  ./minerd --url http://mine.youdomain.net:port --userpass <em>your_username</em>.1:x
</pre></li>
	<li><em>Mac OS X users:</em> precompiled binaries are available <a href="https://bitcointalk.org/index.php?topic=55038.msg654850#msg654850">here</a>.</li>
	</ul>
</li>
<li><strong>Configure your miner.</strong> Start your miner using the following parameters:
	<table>
	<tr><td>URL:</td><td><kbd>http://mine.youdomain.net:/</kbd></td></tr>
	<tr><td>PORT:</td><td><kbd>port</kbd></td></tr>
	<tr><td>Username:</td><td><kbd><em>your_username</em>.1</kbd></td></tr>
	<tr><td>Password:</td><td><kbd>x</kbd></td></tr>
	</table>
	If you use a command-line miner, type:
<pre>
	./minerd --url http://mine.youdomain.net:port --userpass <em>your_username</em>.1:x
</pre>
	If you want, you can create additional slaves with usernames and passwords of your choice <a href=accountworkers>Here<br></a><br>
</li>
<li><strong>Create a Litecoin address to recieve payments.</strong>
	<ul>
	<li> Downloading the client & block chain: 	Download the Litecoin client from the <a href="http://www.litecoin.org/">official site</a><br>.
	Generate a new address and input it on your account page to receive payments.
	</li>
	<li> Using Instawallet: visit the <a href=http://wallet.it.cx>LTC Instawallet</a> and create a new wallet... keep the link as it is tied to your address/balance essentially your accout<br>
  <i>downloading the client and maintaining your own wallet.dat is always safest</i>


	</li>

	</ul>

	<li>Optional (linux): <strong>Keeping miner updated</strong></li>
    <ul>
      <li>Updateting manual:
      <pre>
      cd cpuminer
      git pull
      make clean
      ./configure CFLAGS="-O3"
      make
      ./minerd --url http://mine.youdomain.net:port --userpass <em>your_username</em>.1:x
      </pre>
      </li>

      </ul>
    <br><br>Thanks alot to <b>Pooler</b> for all his work on the minerd, <a href=https://github.com/pooler/cpuminer>@Github</a> & <a href=https://bitcointalk.org/index.php?action=profile;u=43931>@bitcointalk</a>
    </li>

</ol>

                </div>          <!-- nested block ends -->
                <div class="bendl"></div>
                <div class="bendr"></div>
                </div>




		</div>		<!-- .sidebar_content ends -->

	</div>		<!-- .block_content ends -->

	<div class="bendl"></div>
	<div class="bendr"></div>

</div>		<!-- .block ends -->
