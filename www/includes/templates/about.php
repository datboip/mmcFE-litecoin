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


		<div class="sidebar_content" id="sb1">

                <div class="block" style="clear:none;">
                 <div class="block_head">
                  <div class="bheadl"></div>
                  <div class="bheadr"></div>
			<h1>About PPLNS Payout system, Facts and myths</h1>

		</div>

		<div class="block_content" style="padding:10px;">

<p>First of all if talking about PPLNS it is important to understand how it works. PPLNS is short for &#8220;Pay Per Last N Shares&#8221;. The current proportional reward system is round based. One round is the time between the first share after the last found block and the share which solves a block. PPLNS however means that we no longer consider valid shares of one round but we consider a number N of shares. No matter if they are part of the round or not. The number N is currently for each blockchain twice the difficulty (actually rounded down to an easy to calculate integer value).</p>
<p>Let me illustrate PPLNS using the image below. One round has an arbitrary number of shares which is solely based on sheer luck. On proportional reward system only shares of one round are considered for calculating rewards. However with PPLNS a quite constant number N of shares is considered for calculating rewards. This number N changes only with the difficulty. Please have a look at the image below:</p>
<p style="text-align: center;"><img class="size-full wp-image-150 aligncenter" title="PPLNS share per round" src="images/shares_round.png" alt="PPLNS share per round" width="450" height="80" /></p>
<p>As you know the number of shares needed to solve a block within a round is different. Round one and three needed<em> (difficulty * 2)</em> shares to be solved. Round two and four are quite short rounds. There were less than <em>(difficulty * 2)</em> shares nessecary to solve them. Round five however is a very long round which means the pool needed more than <em>(difficulty * 2)</em> shares to solve the block. From this follows that:</p>
<ul>
<li>Rounds one and three are like proportional rounds. All of your shares from the given round are considered for reward calculations.</li>
<li>For rounds two and four shares from the previous rounds are considered for calculations as well (marked green). In other words: regardless of round boundaries we always consider the last <em>(difficulty * 2)</em> shares. Your portion of the amount of shares is used to calculate your reward.</li>
<li>Round five however is very long. In this round your lowermost shares (within the marked red part) are silently dropped if they are not within the last <em>(difficulty * 2)</em> shares.</li>
</ul>
<p><strong>Why do we need to switch the reward system at all?</strong></p>
<p>PPLNS favors constant and/or occasional loyal pool members over pool hoppers. As you might have seen each time we find a LTC block the pools hashrate peaks instantly. This is due to pool hoppers starting to mine. They are betting for a &#8220;quick win&#8221; (like round two above) with low shares per round. If the round exceeds a certain amount of shares they &#8220;hop&#8221; to another proportional pool which started a new round more recently trying their luck on the other pool. This assures better rewards for pool hoppers over occasional or constant miners which are loyal to their pool. Pool hopping however implies that pool hoppers need to know when a round is started and how much shares are considered for reward. This is very easy with propotional reward system. Using PPLNS this is no longer true. On long rounds (like round five above) the pool hoppers shares won&#8217;t be considered for reward calculations in favor of loyal miners. This is due to the fact that pool hoppers only mine on the beginning of rounds. On short and normal rounds pool hoppers won&#8217;t loose their shares. But due to the fact that shares from previous rounds from loyal miners are considered twice (or even more often on extremely short rounds) the pool hopper won&#8217;t get the same reward as from proportional reward system.</p>
<p><strong>I&#8217;m only an occasional miner. Will I loose shares if playing/being offline?</strong></p>
<p>It depends. Even if you are a constant miner you&#8217;ll loose shares on very long rounds. On the other hand if you for example stop mining shortly before the end of round three from the image above you&#8217;ll be rewarded for round three. If you then start mining on the mid of round five you&#8217;ll be rewarded a bit for round four (despite the fact you haven&#8217;t submitted any shares as some of your shares from round three are considered for round four as well) and you&#8217;ll be fully rewarded for round five (you won&#8217;t loose any shares as you &#8220;skipped&#8221; the &#8220;red part&#8221; of shares which have been cut off due to the length of the round). The point however is no one (and thus the pool hopper as well) knows when a round ends in advance. Thus you deliberately can&#8217;t avoid cut offs. Sometimes you are lucky sometimes your are not. <em><strong>This however levels out over the time for non-hoppers</strong></em>. The important point is, that you as loyal pool member have an advantage over pool hoppers. Even if you are mining only occasionally in order to enjoy the silence within your mining room.</p>
<p><strong>Isn&#8217;t it that you as pool operator earn more from PPLNS?</strong></p>
<p>Short answer: No. As a pool operator I&#8217; In fact for a pool operator it doesn&#8217;t matter at all which reward system is used. I expect rounds to become a bit longer after PPLNS is activated as the pool hoppers will start to avoid the Pool. Thus revenues for me will be lower. But there were some loyal pool members who clearly stated that they want to get rid of the pool hoppers and I respect their wish. Furthermore I&#8217;m too an occasional miner on the Pool as I don&#8217;t want the miners to be running at night and from time to time I need them to test new Pool versions on development systems. Thus being a miner like you I like PPLNS better than proportional. But speaking as pool operator there is no difference between the reward systems.</p>
<p>Thanks to g2x3k/Poolx-eu for PPLNS description</p>

</div><!-- nested block ends -->


		<div class="bendl"></div>
		<div class="bendr"></div>
		</div>


		</div>		<!-- .sidebar_content ends -->


	</div>		<!-- .block_content ends -->




	<div class="bendl"></div>
	<div class="bendr"></div>

</div>			<!-- .block ends -->
