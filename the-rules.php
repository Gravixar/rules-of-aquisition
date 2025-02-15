<?php
/**
 * @package Rules_Of_Aquision
 * @version 1.0
 */
/*
Plugin Name: Ferengi Rules of Acquisition
Plugin URI: http://wordpress.org/extend/plugins/fereng-rules-of-acquisition/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in in many rules written most famously by Gint, the first Grand Nagus of the Ferengi people. When activated you will randomly see a rule from <cite>Ferengi Rules of Acquisition</cite> in the upper right of your admin screen on every page.
Author: Fahad Murtaza
Version: 1.0
Author URI: https://www.fahdmurtaza.com/
*/

function rules_of_aquision_get_rule() {
	/** These are the rules to a Ferengi Life */

	$rules = "`Once you have their money, you never give it back.` 	`The Nagus` (DS9 episode)
	2 	`The best deal is the one that makes the most profit.` 	The 34th Rule (DS9 novel)
	3 	`Never spend more for an acquisition than you have to.` 	`The Maquis, Part II` (DS9 episode)
	4 	`A woman wearing clothes is like a man in the kitchen.` 	The Ferengi Rules of Acquisition (DS9 novel)
	5 	`Always exaggerate your estimates.` 	Cold Fusion (SCE novel)
	6 	`Never let family stand in the way of opportunity.` 	`The Nagus` (DS9 episode)
	7 	`Always keep your ears open.` 	`In the Hands of the Prophets` (DS9 episode)
	8 	`Small print leads to large risk.` 	The Ferengi Rules of Acquisition (DS9 novel)
	9 	`Instinct, plus opportunity, equals profit.` 	`The Storyteller` (DS9 episode)
	10 	`Greed is eternal.` 	`Prophet Motive` (VOY episode)
	11 	`Even if its free, you can always buy it cheaper.` 	The Ferengi Rules of Acquisition (DS9 novel)
	12 	`Anything worth selling is worth selling twice.` 	The Ferengi Rules of Acquisition (DS9 novel)
	13 	`Anything worth doing is worth doing for money.` 	Legends of the Ferengi (DS9 novel)
	15 	`Dead men close no deals.` 	Demons of Air and Darkness (DS9 novel)
	16 	`A deal is a deal (is a deal)...until a better one comes along.` 	The Ferengi Rules of Acquisition (DS9 novel)
	17 	`A contract is a contract is a contract... but only between Ferengi.` 	`Body Parts` (DS9 episode)
	18 	`A Ferengi without profit is no Ferengi at all.` 	`Heart of Stone` (DS9 episode)
	19 	`Satisfaction is not guaranteed.` 	Legends of the Ferengi (DS9 novel)
	20 	`He who dives under the table today lives to profit tomorrow.` 	Ferenginar: Satisfaction is Not Guaranteed (DS9 novella)
	21 	`Never place friendship before profit.` 	`Rules of Acquisition` (DS9 episode)
	22 	`Wise men can hear profit in the wind.` 	`Rules of Acquisition` (DS9 episode)
	23 	`Nothing is more important than your health...except for your money.` 	`Acquisition` (ENT episode)
	25 	`You can't make a deal if you're dead.` 	`The Siege of Ar-558` (DS9 episode)
	27 	`There's nothing more dangerous than an honest businessman.` 	Legends of the Ferengi (DS9 novel)
	29 	`What's in it for me?` 	Highest Score (DS9 novel)
	30 	`A wise man knows that confidentiality equals profit.` 	The Badlands, Part IV (DS9 novel)
	31 	`Never make fun of a Ferengi's mother.` 	`The Siege` (DS9 episode)
	32 	`Insult something he cares about.` 	`Elite Force II`
	33 	`It never hurts to suck up to the boss.` 	`Rules of Acquisition` (DS9 episode)
	34 	`War is good for business.` 	`Destiny` (DS9 episode); The 34th Rule (DS9 novel)
	35 	`Peace is good for business.` 	`Destiny` (DS9 episode); The 34th Rule (DS9 novel)
	37 	`The early investor reaps the most interest.` 	ST novella: Reservoir Ferengi
	40 	`She can touch your lobes but never your latinum.` 	The Ferengi Rules of Acquisition (DS9 novel)
	41 	`Profit is its own reward.` 	The Ferengi Rules of Acquisition (DS9 novel)
	43 	`Feed your greed, but not enough to choke it.` 	The Buried Age (TNG novel)
	44 	`Never confuse wisdom with luck.` 	The Ferengi Rules of Acquisition (DS9 novel)
	45 	`Expand or die.*` 	`Acquisition` (ENT episode)
	47 	`Never trust a man wearing a better suit than your own.` 	`Rivals` (DS9 episode)
	48 	`The bigger the smile, the sharper the knife.` 	`Rules of Acquisition` (DS9 episode)
	52 	`Never ask when you can take.` 	The Ferengi Rules of Acquisition (DS9 novel)
	53 	`Never trust anybody taller than you.` 	Mission Gamma: Twilight (DS9 novel)
	54 	`Rate divided by time equals profit.` (Also known as `The Velocity of Wealth.`) 	Raise the Dawn (Typhon Pact novel)
	55 	`Take joy from profit, and profit from joy.` 	Worlds of Deep Space Nine: Bajor: Fragments and Omens (DS9 novel)
	57 	`Good customers are almost as rare as latinum...treasure them.` 	`Armageddon Game` (DS9 episode)
	58 	`There is no substitute for success.` 	The Ferengi Rules of Acquisition (DS9 novel)
	59 	`Free advice is seldom cheap.` 	`Rules of Acquisition` (DS9 episode)
	60 	`Keep your lies consistent.` 	The Ferengi Rules of Acquisition (DS9 novel)
	62 	`The riskier the road, the greater the profit.` 	`Rules of Acquisition` (DS9 episode)
	63 	`Work is the best therapy-at least for your employees.` 	`Over a Torrent Sea` (TTN novel)
	65 	`Win or lose, there's always Hupyrian beetle snuff.` 	The Ferengi Rules of Acquisition (DS9 novel)
	69 	`Ferengi are not responsible for the stupidity of other races.` 	Balance of Power (TNG novel)
	74 	`Knowledge equals profit.` 	`Inside Man` (VOY episode)
	75 	`Home is where the heart is, but the stars are made of latinum.` 	`Civil Defense` (DS9 episode)
	76 	`Every once in a while, declare peace. It confuses the Hell out of your enemies.` 	`The Homecoming` (DS9 episode)
	77 	`If you break it, you bought it.` 	Star Trek Online
	79 	`Beware of the Vulcan greed for knowledge.` 	The Ferengi Rules of Acquisition (DS9 novel)
	82 	`The flimsier the product, the higher the price.` 	The Ferengi Rules of Acquisition (DS9 novel)
	85 	`Never let the competition know what you're thinking.` 	The Ferengi Rules of Acquisition (DS9 novel)
	87 	`Learn the customer's weaknesses, so that you can better take advantage of him.` 	Highest Score (DS9 novel)
	88 	`It ain't over 'til its over.` 	Ferenginar: Satisfaction is Not Guaranteed (DS9 novella)
	89 	`Ask not what you can do for your profits, but what your profits can do for you.` 	The Ferengi Rules of Acquisition (DS9 novel)
	92 	`There are many paths to profit.` 	Highest Score (DS9 novel)
	94 	`Females and finances don't mix.` 	`Ferengi Love Songs` (DS9 episode)
	95 	`Expand or die.*` 	`False Profits` (VOY episode)
	97 	`Enough...is never enough.` 	The Ferengi Rules of Acquisition (DS9 novel)
	98 	`Every man has his price.` 	`In the Pale Moonlight` (DS9 episode)
	99 	`Trust is the biggest liability of all.` 	The Ferengi Rules of Acquisition (DS9 novel)
	102 	`Nature decays, but latinum lasts forever.` 	`The Jem'Hadar` (DS9 episode)
	103 	`Sleep can interfere with...` 	`Rules of Acquisition` (DS9 episode)
	104 	`Faith moves mountains...of inventory.` 	The Ferengi Rules of Acquisition (DS9 novel)
	106 	`There is no honor in poverty.` 	The Ferengi Rules of Acquisition (DS9 novel)
	109 	`Dignity and an empty sack is worth the sack.` 	`Rivals` (DS9 episode)
	110 	`Exploitation begins at home.` 	Star Trek Online
	111 	`Treat people in your debt like family... exploit them.` 	`Past Tense, Part I` (DS9 episode)
	112 	`Never have sex with the boss' sister.` 	`Playing God` (DS9 episode)
	113 	`Always have sex with the boss.` 	The Ferengi Rules of Acquisition (DS9 novel)
	121 	`Everything is for sale - even friendship.` 	The Ferengi Rules of Acquisition (DS9 novel)
	123 	`Even a blind man can recognize the glow of Latinum.` 	The Ferengi Rules of Acquisition (DS9 novel)
	125 	`You can't make a deal if you're dead.` 	`The Siege of AR-558` (DS9 episode)
	139 	`Wives serve; brother inherit.` 	`Necessary Evil` (DS9 episode)
	141 	`Only fools pay retail.` 	The Ferengi Rules of Acquisition (DS9 novel)
	144 	`There's nothing wrong with charity... as long as it winds up in your pocket.` 	Legends of the Ferengi (DS9 novel)
	147 	`People love the bartender.` 	Fearful Symmetry (DS9 novel)
	153 	`Sell the sizzle, not the steak.` 	`Deep Space Mine` (DS9 comic)
	162 	`Even in the worst of times, someone turns a profit.` 	The Ferengi Rules of Acquisition (DS9 novel)
	168 	`Whisper your way to success.` 	`Treachery, Faith, and the Great River` (DS9 episode)
	177 	`Know your enemies... but do business with them always.` 	The Ferengi Rules of Acquisition (DS9 novel)
	181 	`Not even dishonesty can tarnish the shine of profit.` 	The Ferengi Rules of Acquisition (DS9 novel)
	183 	`When life hands you ungaberries, make detergent.` 	Hollow Men (DS9 novel)
	184 	`A Ferengi waits to bid until his opponents have exhausted themselves.` 	Balance of Power (TNG novel)
	188 	`Not even dishonesty can tarnish the shine of profit.` 	Star Trek Online
	189 	`Let others keep their reputation. You keep their money.` 	The Ferengi Rules of Acquisition (DS9 novel)
	190 	`Hear all, trust nothing.` 	DS9 episode: `Call to Arms`
	192 	`Never cheat a Klingon... unless you're sure you can get away with it.` 	The Ferengi Rules of Acquisition (DS9 novel)
	193 	`Trouble comes in threes.` 	Star Trek Online
	194 	`It's always good business to know about new customers before they walk in your door.` 	`Whispers` (DS9 episode)
	199 	`Location, location, location.` 	The Soul Key (DS9 novel)
	200 	`A Ferengi chooses no side but his own` 	(DS9 novel: Ferenginar: Satisfaction is Not Guaranteed)
	202 	`The justification for profit is profit.` 	The Ferengi Rules of Acquisition (DS9 reference book)
	203 	`New customers are like razor-toothed gree worms. They can be succulent, but sometimes they bite back.` 	DS9 episode: `Little Green Men`
	208 	`Sometimes, the only thing more dangerous than a question is an answer.` 	DS9 episode: `Ferengi Love Songs`
	211 	`Employees are the rungs on the ladder of success, don't hesitate to step on them.` 	DS9 episode: `Bar Association`
	212 	`A good lie is easier to believe than the truth.` 	Star Trek Online
	214 	`Never begin a business transaction on an empty stomach.` 	DS9 episode: `The Maquis, Part I`
	216 	`Never gamble with a telepath.` 	DS9 novel: The Laertian Gamble
	217 	`You can't free a fish from water.` 	DS9 episode: `Past Tense, Part I`
	218 	`Always know what you're buying.` 	The Ferengi Rules of Acquisition (DS9 reference book)
	218 	`Sometimes what you get free cost entirely too much.` 	Baby on Board (DS9 Malibu Comics)
	219 	`Possession is eleven-tenths of the law!` 	TNG novel: Balance of Power
	223 	`Beware the man who doesn't take time for Oo-mox.` 	The Ferengi Rules of Acquisition (DS9 reference book)
	227 	`If that's what's written, then that's what's written.` 	Star Trek Online
	229 	`Latinum lasts longer than lust.` 	DS9 episode: `Ferengi Love Songs`
	235 	`Duck; death is tall.` 	Mission Gamma: Twilight (DS9 novel)
	236 	`You can't buy fate.` 	The Ferengi Rules of Acquisition (DS9 reference book)
	239 	`Never be afraid to mislabel a product.` 	DS9 episode: `Body Parts`
	240 	`Time, like latinum, is a highly limited commodity.` 	Star Trek Online
	242 	`More is good...all is better.` 	The Ferengi Rules of Acquisition (DS9 reference book)
	255 	`A wife is [a] luxury... a smart accountant a neccessity.` 	The Ferengi Rules of Acquisition (DS9 reference book)
	257 	`When the messenger comes to appropriate your profits, kill the messenger.` 	False Profits (Voyager)
	261 	`A wealthy man can afford everything except a conscience.` 	The Ferengi Rules of Acquisition (DS9 reference book)
	263 	`Never let doubt interfere with your lust for Latinum.` 	DS9 episode: `Bar Association`
	266 	`When in doubt, lie.` 	The Ferengi Rules of Acquisition (DS9 reference book)
	272 	`Always inspect the merchandise before making a deal.` 	Star Trek Online
	280 	`If it ain't broke, don't fix it.` 	DS9 novel: Ferenginar: Satisfaction is Not Guaranteed)
	284 	`Deep down, everyone's a Ferengi.` 	The Ferengi Rules of Acquisition (DS9 reference book)
	285 	`No good deed ever goes unpunished.` 	DS9 episode: `The Collaborator`";

	// Here we split it into lines
	$rules = explode( "\n", $rules );

	// And then randomly choose a line
	return wptexturize( $rules[ mt_rand( 0, count( $rules ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later
function rules_of_aquision() {
	$chosen = rules_of_aquision_get_rule();
	echo "<p id='ferengi_roq'>" . __('Rule #') . "$chosen</p>";
}
remove_action('admin_notices','hello_dolly');

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'rules_of_aquision' );

// We need some CSS to position the paragraph
function rules_of_aquision_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#ferengi_roq {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_head', 'rules_of_aquision_css' );
