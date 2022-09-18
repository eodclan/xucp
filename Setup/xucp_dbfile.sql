SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT 'N/A',
  `email` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL,
  `online` int(11) NOT NULL DEFAULT 0,
  `whitelisted` tinyint(1) NOT NULL DEFAULT 0,
  `adminlevel` int(11) NOT NULL DEFAULT 0,
  `language` varchar(50) DEFAULT 'de',
  `userava` varchar(256) DEFAULT '/themes/uploads/default.jpg',
  `usersig` varchar(256) DEFAULT 'No signature available!'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;


-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xucp_config`
--

CREATE TABLE `xucp_config` (
  `id` int(11) NOT NULL,
  `site_dl_section` int(11) NOT NULL,
  `site_rage_section` int(11) NOT NULL,
  `site_altv_section` int(11) NOT NULL,
  `site_fivem_section` int(11) NOT NULL,
  `site_redm_section` int(11) NOT NULL,
  `site_online` int(11) NOT NULL,
  `site_name` varchar(32) NOT NULL,
  `site_teamspeak` varchar(64) NOT NULL,
  `site_gservername` varchar(64) NOT NULL,
  `site_gserverip` varchar(64) NOT NULL,
  `site_gserverport` varchar(64) NOT NULL,
  `site_themes` varchar(32) NOT NULL DEFAULT 'default-black',
  `site_lang` varchar(6) NOT NULL DEFAULT 'en',
  `frage1` varchar(256) DEFAULT NULL,
  `frage2` varchar(256) DEFAULT NULL,
  `frage3` varchar(256) DEFAULT NULL,
  `frage4` varchar(256) DEFAULT NULL,
  `frage5` varchar(256) DEFAULT NULL,
  `frage6` varchar(256) DEFAULT NULL,
  `frage7` varchar(256) DEFAULT NULL,
  `frage8` varchar(256) DEFAULT NULL,
  `frage9` varchar(256) DEFAULT NULL,
  `frage10` varchar(256) DEFAULT NULL,
  `frage11` varchar(256) DEFAULT NULL,
  `frage12` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Daten für Tabelle `xucp_config`
--

INSERT INTO `xucp_config` (`id`, `site_dl_section`, `site_rage_section`, `site_altv_section`, `site_fivem_section`, `site_redm_section`, `site_online`, `site_name`, `site_teamspeak`, `site_gservername`, `site_gserverip`, `site_gserverport`, `site_themes`, `site_lang`, `frage1`, `frage2`, `frage3`, `frage4`, `frage5`, `frage6`, `frage7`, `frage8`, `frage9`, `frage10`, `frage11`, `frage12`) VALUES
(1, 1, 0, 1, 0, 0, 1, 'Marvelous Life', 'ts3.marvelous-life.eu?port=9987', 'Marvelous Life', 'altv.marvelous-life.eu', '7799', 'default-black', 'en', 'Eine Person ist mit dem Auto in der Stadt unterwegs. Am Würfelpark vorbeigefahren, späht er eine Gruppe von Menschen auf, die sich gerade unterhalten. Er beschließt einfach so die Gruppe umzufahren. Warum ist das verboten?', 'Du bist gerade gemütlich am Karotten sammeln, wo plötzlich eine Person hinter dir steht und dir einen Schuss in den Kopf verpasst. Du hast diese Person noch nie zuvor gesehen. Darf er das?', 'Wo befinden sich unsere Safezones?', 'Was muss man bei der New-Life Regel beachten?', 'Wie lange hat man Zeit ein Supportfall zu melden?', 'Was muss man beachten, wenn Wertsachen durch einen Bug verschwinden oder beschädigt werden?', 'Was muss man bei einer Hinrichtungen, Suizid oder einer Ausreise beachten?', 'Ein Teammietglied kommt auf dich IC zu [AdminOutfit] wie verhälst du dich?', 'Sind Medic´s unantasbar?', 'Ab welchen Rang darf man Korrupt sein? ', 'Du hast 2 platte Reifen wie verhälst du dich im RP?', 'Dich nimmt eine Gang/Mafia als Geisel und fordert von dir das du all dein Geld ihnen gibst oder du stirbst was ist daran falsch und warum?');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xucp_keys`
--

CREATE TABLE `xucp_keys` (
  `id` int(11) NOT NULL,
  `key1` varchar(256) DEFAULT NULL,
  `key2` varchar(256) DEFAULT NULL,
  `key3` varchar(256) DEFAULT NULL,
  `key4` varchar(256) DEFAULT NULL,
  `key5` varchar(256) DEFAULT NULL,
  `key6` varchar(256) DEFAULT NULL,
  `key7` varchar(256) DEFAULT NULL,
  `key8` varchar(256) DEFAULT NULL,
  `key9` varchar(256) DEFAULT NULL,
  `key10` varchar(256) DEFAULT NULL,
  `key11` varchar(256) DEFAULT NULL,
  `key12` varchar(256) DEFAULT NULL,
  `key13` varchar(256) DEFAULT NULL,
  `key14` varchar(256) DEFAULT NULL,
  `key15` varchar(256) DEFAULT NULL,
  `key16` varchar(256) DEFAULT NULL,
  `key17` varchar(256) DEFAULT NULL,
  `key18` varchar(256) DEFAULT NULL,
  `key19` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Daten für Tabelle `xucp_keys`
--

INSERT INTO `xucp_keys` (`id`, `key1`, `key2`, `key3`, `key4`, `key5`, `key6`, `key7`, `key8`, `key9`, `key10`, `key11`, `key12`, `key13`, `key14`, `key15`, `key16`, `key17`, `key18`, `key19`) VALUES
(1, '^', '0', '9', 'F2', 'F3', 'F4', 'F5', 'F6', 'NUM0', 'K', 'X', 'I', 'B', 'N', 'U (Manchmal auch mit E)', 'E', 'O', 'Bild hoch', 'Bild runter');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xucp_news`
--

CREATE TABLE `xucp_news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET latin1 NOT NULL,
  `title_de` varchar(100) NOT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `content_de` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Daten für Tabelle `xucp_news`
--

INSERT INTO `xucp_news` (`id`, `title`, `title_de`, `content`, `content_de`) VALUES
(1, 'Willkommen im UCP', 'Willkommen im UCP', 'Aktuell suchen wir noch Inhaber und Leader für folgende Staatliche Fraktionen:<br><br>Taxi = Inhaber & Mitarbeiter<br>LSMC = Inhaber & Mitarbeiter<br>Müllabfuhr Los Santos = Mitarbeiter<br>Gangs und Mafien können bei uns Beantragt werden mit einem kleinem Konzept!<br><br>Mit freundlichen Grüßen<br><br>XXX', 'Aktuell suchen wir noch Inhaber und Leader für folgende Staatliche Fraktionen:<br><br>Taxi = Inhaber & Mitarbeiter<br>LSMC = Inhaber & Mitarbeiter<br>Müllabfuhr Los Santos = Mitarbeiter<br>Gangs und Mafien können bei uns Beantragt werden mit einem kleinem Konzept!<br><br>Mit freundlichen Grüßen<br><br>XXX');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xucp_rules`
--

CREATE TABLE `xucp_rules` (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET latin1 NOT NULL,
  `title_de` varchar(100) NOT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `content_de` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Daten für Tabelle `xucp_rules`
--

INSERT INTO `xucp_rules` (`id`, `title`, `title_de`, `content`, `content_de`) VALUES
(1, 'Regelwerk', 'Regelwerk', '<span class=\'c1\'>Safezone: Einreise Platz und Krankenhaus</span><span class=\'c1\'>.</span><span class=\'c1\'>Combat-Logging: W&auml;hrend einer aktiven RP-Situation, sowie w&auml;hrend einer &ldquo;Bewusstlosigkeit&rdquo;, ist es dir untersagt das Spiel zu beenden. Spielabst&uuml;rze sind davon nicht betroffen.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Maskierungen: Vollmaskierte Spieler sind nicht an ihrer Stimme, Redensart zu erkennen.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Schussank&uuml;ndigung: Die offensichtliche Bedrohung mit einem gef&auml;hrlichen Gegenstand gilt als Schussank&uuml;ndigung! Es muss aber aus der RP-Situation hervorgehen.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Mikrofon: Es ist zwingend erforderlich ein funktionst&uuml;chtiges Mikrofon mit angemessener Qualit&auml;t zu verwenden. St&ouml;rger&auml;usche m&uuml;ssen unmittelbar vor dem RP noch behoben werden.</span><span class=\'c1\'>Solltest du mitbekommen, dass ein Mitspieler gegen die Serverregeln verst&ouml;&szlig;t, bist du verpflichtet die aktive Situation zu Ende zu spielen. Danach kannst du den Support, bestenfalls mit Videobeweis, dar&uuml;ber informieren.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Unterbrechungen: RP-Situationen, die durch einen Serverabsturz oder -neustart unterbrochen wurden, sind auszuspielen sobald der Server wieder l&auml;uft, das gleiche gilt f&uuml;r Spielabst&uuml;rze.</span><p class=\'c0 c3\'><span class=\'c1\'></span><p class=\'c0 c3\'><span class=\'c1\'></span><span></span><h5 class=\'c8\' id=\'h.valiyafud3aw\'><span class=\'c4\'>Staats Fraktionen (LSPD, LSMC etc.)</span></h4><span></span><span class=\'c1\'>Die Leitungen einer Staatlichen Fraktion (obersten zwei R&auml;nge), d&uuml;rfen aufgrund der Geltung ihrer F&uuml;hrungsposition, in keiner Weise korrupt sein.</span><span class=\'c1\'>Beim LSMC herrscht Korruptionsverbot.</span><span></span><h4 class=\"mb-0\">Voice</h4><span></span><span class=\'c1\'>Dein TeamSpeak Nickname muss den Namen eures Charakters beinhalten, das gleiche gilt f&uuml;r den Discord Server.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Stimmverzerrer sind gestattet, wenn eine entsprechende Maske getragen wird ( Nicht nur Sonnenbrille, M&uuml;tze, Bandana ). Zus&auml;tzlich muss ein RP Hintergrund bestehen.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Es ist Pflicht, w&auml;hrend man InGame ist, auf dem TeamSpeak Server connected zu sein und sich im &ldquo;InGame&rdquo;-Channel aufzuhalten. Es ist verboten, sich auf einen weiteren Voice Server zu befinden. &nbsp;</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Andere Discord-Server f&uuml;r Informationsaustausch oder zur Nutzung eines &ldquo;Funks&rdquo; sind nicht gestattet. Ausnahme: Staatlicher Funk der mit dem Support abgesprochen wurde.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Beim Verbinden mit unserem Server erkl&auml;rst du dich damit einverstanden, dass der IngameVoiceChat aufgenommen und genutzt werden darf.</span><span></span><h4 class=\"mb-0\">Charakter</h4><span></span><span class=\'c1\'>Jeder Charakter muss eine Hintergrundstory besitzen und diese m&uuml;sst ihr im RP passend abrufen k&ouml;nnt. Ein rasches Ab&auml;ndern der Herkunftsgeschichte ist verboten.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Troll-Namen sind nicht gestattet. Bitte haltet eine gewisse realistische Namensgebung ein. Au&szlig;erdem darf der Charaktername &nbsp;kein Name einer &ldquo;Ber&uuml;hmtheit&rdquo; sein. Auch wollen wir keine sehr bekannten Namen anderer Projekte sehen (Bsp. Ryan Butters, Manfred Lensch, Kurtis Kush).</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Die Supportleitung beh&auml;lt sich das Recht vor, den Namen zu &auml;ndern.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Das Spielen eines nicht vollj&auml;hrigen Charakters ist nicht gestattet.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Einen 2. Charakter zu erstellen ist fr&uuml;hestens nach einer Spielzeit von 3 Monaten m&ouml;glich und dann beim Support zu beantragen.</span><span class=\'c1\'>Wenn der 1. Charakter in einer Gang ist, darf der 2. Charakter nicht ins PD oder in eine andere Gang, andersrum genauso.</span><span></span><h4 class=\"mb-0\">Hinrichtungen, Suizid, Ausreisen</h4><span></span><span class=\'c1\'>In Absprache mit dem Support, k&ouml;nnt ihr eine Hinrichtung beantragen. Wenn diese genehmigt wurde, d&uuml;rfen die Mediziner die hingerichteten Spieler nicht behandeln. Der betroffene Charakter wird dar&uuml;ber nicht in Kenntnis gesetzt.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Ebenfalls in Absprache mit dem Support k&ouml;nnen Ausreiseantr&auml;ge oder Charakterl&ouml;schung erfolgen aber nur mit &uuml;berzeugendem Rp Grund!</span><span></span><h4 class=\"mb-0\">Bewusstlosigkeit (New-Life-Regel)</h4><span></span><p class=\'c5\'><span>W&auml;hrend der Bewusstlosigkeit, kannst du als Spieler alles wahrnehmen. Es ist verboten, dieses im RP zu benutzen.</span><span></span><p class=\'c5\'><span>Sollte ein Mediziner dich reanimieren, kannst du dein RP der Verletzung nach weiter spielen.</span><span></span><p class=\'c5\'><span>Sollte kein Mediziner da sein, um dich zu reanimieren, wachst du am Krankenhaus auf. Die Verletzung, welche du dir zugef&uuml;gt hast, besteht noch. Du solltest dich deiner Verletzung nach verhalten und gegebenenfalls bei der n&auml;chsten Gelegenheit einen Mediziner aufsuchen. Es ist dir untersagt, den Ort des geschehens f&uuml;r die n&auml;chsten 30 Minuten aufzusuchen. </span><span></span><h4 class=\"mb-0\">Geiselnahme, Raub</h4><span></span><span class=\'c1\'>Bei Geiselnahmen / Raub steht das RP im Vordergrund. So versuche keine &uuml;bertriebenen Forderungen zu stellen, sondern in einem zumutbaren Verh&auml;ltnis.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c7\'>Es m&uuml;ssen </span><span class=\'c7 c9\'>3 Polizisten</span><span class=\'c1\'>&nbsp;im Dienst sein um Geiselnahmen und einen Raub durchzuf&uuml;hren.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Bleibt fair auch bei kleinen &Uuml;berf&auml;llen.</span><span></span><h4 class=\"mb-0\">Gruppierungen, Gangs, Kriege</h4><span></span><span class=\'c1\'>W&auml;hrend des Krieges ist jeder Anh&auml;nger einer Gang verpflichtet, die Farben dieser oder den Kleidungsstil, sichtbar zu tragen.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Eine Gruppierung darf aus maximal 30 Personen bestehen.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Ein Gang Krieg kann nur mit vern&uuml;nftigem RP-Hintergrund und Support seitiger Absegnung entstehen.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Drive-By ist nur w&auml;hrend des Gangkriegs erlaubt.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Gangs, die sich in einem Krieg befinden, d&uuml;rfen ohne Schuss Ank&uuml;ndigung auf sich schie&szlig;en. </span><span class=\'c1\'>Weichen Zivis nach einer Warnung nicht aus, z&auml;hlt es als &ldquo;Kollateralschaden&rdquo;. Trotzdem wird dazu aufgerufen diese zu vermeiden.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Ein Ende kann nur entstehen, wenn eine der Parteien aufgegeben hat und anschlie&szlig;end eine R&uuml;ckmeldung an den Support gegeben hat.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Eine Gang darf nicht AKTIV mit einer anderen Gang vorgehen.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Das PD mit einer Gang zu st&uuml;rmen ist nur erlaubt, wenn es im Support angefragt wird und auch nur dann, wenn die RP-Gr&uuml;nde dementsprechend schwerwiegend sind.</span><span></span><h4 class=\"mb-0\">Streaming/Videos</h4><span></span><span class=\'c1\'>Jeder hat das Recht, auf unserem Server zu streamen. Die Serverleitung beh&auml;lt sich vor, ein Streaming Verbot auszusprechen, sollte der Inhalt nicht unseren Vorstellungen entsprechen.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Der Servername muss im Titel vorhanden sein.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Bedenk, dass du als Streamer/Creator den Server vertrittst. Verhalte dich bitte dementsprechend. </span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c7\'>Es ist m&ouml;glich, bei uns eine Stream-Partnerschaft zu erhalten. Dies bedeutet, dass bei uns eine Ank&uuml;ndigung im Discord erscheint, wenn du Live gehst. Zus&auml;tzlich hast du die M&ouml;glichkeit, ein Logo des Projektes in deinem Stream/Video einzublenden, dies ist aber keine Pflicht. Die Partnerschaft kannst du im Support beantragen. Bedingungen daf&uuml;r sind z.B 30 Tage aktives Streamen auf unserem Projekt. Der Support wird sich daraufhin deine Streams anschauen und sich bei dir melden. Sollte es zur Partnerschaft kommen, ist es dir untersagt, auf anderen Projekten zu streamen, solange die Partnerschaft aktiv ist. Diese kann nat&uuml;rlich jederzeit im Support abgegeben werden.</span><h5 class=\'c8 c3\' id=\'h.39jk5qlqb0gg\'><span class=\'c4\'></span></h4><h4 class=\"mb-0\">Sonstiges</h4><span></span><span class=\'c1\'>Bei Verlust von Items, Autos, etc. muss ein Videobeweis oder aussagekr&auml;ftigen Screenshots im Support gezeigt werden.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Support Gespr&auml;che d&uuml;rfen nicht aufgezeichnet werden.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Bei Regelverst&ouml;&szlig;en werden vom Support nur Spieler eingebunden, die auch aktiv an dem fehlerhaften RP beteiligt waren.</span><p class=\'c0 c3\'><span class=\'c1\'></span><b>Die Weitergabe oder gar der Verkauf eines Accounts ist strengstens untersagt.</b><p class=\'c0 c3\'><span class=\'c1\'></span><b>Das Verkaufen/Handeln von Ingame W&auml;hrung gegen W&auml;hrungen au&szlig;erhalb vom Projekt ist verboten.</b><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Namens&auml;nderungen bei z.B. einer Hochzeit m&uuml;ssen beim Support angefragt und genehmigt werden.</span><p class=\'c0 c3\'><span class=\'c1\'></span><b>Es ist dir verboten, Streams und Chats anderer Spieler zu verfolgen, w&auml;hrend du InGame bist.</b><p class=\'c0 c3\'><span class=\'c1\'></span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Bilder d&uuml;rfen keine Teile des HUDs enthalten.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Die Nutzungsrechte am Bild m&uuml;ssen gegeben sein.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Bilder m&uuml;ssen aus der 3rd-Person- oder Ego Perspektive einer weiteren Person entstanden sein.</span><b>Die Projektleitung darf ohne Angaben von Gr&uuml;nden einen permanenten Bann aussprechen.</b><span></span><h5 class=\'c8\' id=\'h.fiatw6wigkps\'><span class=\'c4\'>Ein Appell an alle Spieler</span></h4><span></span><span class=\'c6\'>Jeglicher Regelbruch MUSS unverz&uuml;glich beim Support innerhalb von 24 Stunden gemeldet werden. Nur so k&ouml;nnen wir alle am Spielspa&szlig; profitieren.</span><span class=\'c1\'>Bei Fragen &uuml;ber das Regelwerk, steht Euch der Support gerne zur Verf&uuml;gung.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Wer das liest, kann lesen.</span><p class=\'c3 c5\'><span></span><span class=\'c1\'>Bist du IC, dann ist es dir strickt UNTERSAGT in ein DISCORD SERVER oder andere VOICE SYSTEM zu SEIN!!!!<br><br>Ein Gang-Charakter darf kein Gang wechsel betreiben.</span>', '<span class=\'c1\'>Safezone: Einreise Platz und Krankenhaus</span><span class=\'c1\'>.</span><span class=\'c1\'>Combat-Logging: W&auml;hrend einer aktiven RP-Situation, sowie w&auml;hrend einer &ldquo;Bewusstlosigkeit&rdquo;, ist es dir untersagt das Spiel zu beenden. Spielabst&uuml;rze sind davon nicht betroffen.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Maskierungen: Vollmaskierte Spieler sind nicht an ihrer Stimme, Redensart zu erkennen.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Schussank&uuml;ndigung: Die offensichtliche Bedrohung mit einem gef&auml;hrlichen Gegenstand gilt als Schussank&uuml;ndigung! Es muss aber aus der RP-Situation hervorgehen.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Mikrofon: Es ist zwingend erforderlich ein funktionst&uuml;chtiges Mikrofon mit angemessener Qualit&auml;t zu verwenden. St&ouml;rger&auml;usche m&uuml;ssen unmittelbar vor dem RP noch behoben werden.</span><span class=\'c1\'>Solltest du mitbekommen, dass ein Mitspieler gegen die Serverregeln verst&ouml;&szlig;t, bist du verpflichtet die aktive Situation zu Ende zu spielen. Danach kannst du den Support, bestenfalls mit Videobeweis, dar&uuml;ber informieren.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Unterbrechungen: RP-Situationen, die durch einen Serverabsturz oder -neustart unterbrochen wurden, sind auszuspielen sobald der Server wieder l&auml;uft, das gleiche gilt f&uuml;r Spielabst&uuml;rze.</span><p class=\'c0 c3\'><span class=\'c1\'></span><p class=\'c0 c3\'><span class=\'c1\'></span><span></span><h5 class=\'c8\' id=\'h.valiyafud3aw\'><span class=\'c4\'>Staats Fraktionen (LSPD, LSMC etc.)</span></h4><span></span><span class=\'c1\'>Die Leitungen einer Staatlichen Fraktion (obersten zwei R&auml;nge), d&uuml;rfen aufgrund der Geltung ihrer F&uuml;hrungsposition, in keiner Weise korrupt sein.</span><span class=\'c1\'>Beim LSMC herrscht Korruptionsverbot.</span><span></span><h4 class=\"mb-0\">Voice</h4><span></span><span class=\'c1\'>Dein TeamSpeak Nickname muss den Namen eures Charakters beinhalten, das gleiche gilt f&uuml;r den Discord Server.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Stimmverzerrer sind gestattet, wenn eine entsprechende Maske getragen wird ( Nicht nur Sonnenbrille, M&uuml;tze, Bandana ). Zus&auml;tzlich muss ein RP Hintergrund bestehen.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Es ist Pflicht, w&auml;hrend man InGame ist, auf dem TeamSpeak Server connected zu sein und sich im &ldquo;InGame&rdquo;-Channel aufzuhalten. Es ist verboten, sich auf einen weiteren Voice Server zu befinden. &nbsp;</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Andere Discord-Server f&uuml;r Informationsaustausch oder zur Nutzung eines &ldquo;Funks&rdquo; sind nicht gestattet. Ausnahme: Staatlicher Funk der mit dem Support abgesprochen wurde.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Beim Verbinden mit unserem Server erkl&auml;rst du dich damit einverstanden, dass der IngameVoiceChat aufgenommen und genutzt werden darf.</span><span></span><h4 class=\"mb-0\">Charakter</h4><span></span><span class=\'c1\'>Jeder Charakter muss eine Hintergrundstory besitzen und diese m&uuml;sst ihr im RP passend abrufen k&ouml;nnt. Ein rasches Ab&auml;ndern der Herkunftsgeschichte ist verboten.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Troll-Namen sind nicht gestattet. Bitte haltet eine gewisse realistische Namensgebung ein. Au&szlig;erdem darf der Charaktername &nbsp;kein Name einer &ldquo;Ber&uuml;hmtheit&rdquo; sein. Auch wollen wir keine sehr bekannten Namen anderer Projekte sehen (Bsp. Ryan Butters, Manfred Lensch, Kurtis Kush).</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Die Supportleitung beh&auml;lt sich das Recht vor, den Namen zu &auml;ndern.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Das Spielen eines nicht vollj&auml;hrigen Charakters ist nicht gestattet.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Einen 2. Charakter zu erstellen ist fr&uuml;hestens nach einer Spielzeit von 3 Monaten m&ouml;glich und dann beim Support zu beantragen.</span><span class=\'c1\'>Wenn der 1. Charakter in einer Gang ist, darf der 2. Charakter nicht ins PD oder in eine andere Gang, andersrum genauso.</span><span></span><h4 class=\"mb-0\">Hinrichtungen, Suizid, Ausreisen</h4><span></span><span class=\'c1\'>In Absprache mit dem Support, k&ouml;nnt ihr eine Hinrichtung beantragen. Wenn diese genehmigt wurde, d&uuml;rfen die Mediziner die hingerichteten Spieler nicht behandeln. Der betroffene Charakter wird dar&uuml;ber nicht in Kenntnis gesetzt.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Ebenfalls in Absprache mit dem Support k&ouml;nnen Ausreiseantr&auml;ge oder Charakterl&ouml;schung erfolgen aber nur mit &uuml;berzeugendem Rp Grund!</span><span></span><h4 class=\"mb-0\">Bewusstlosigkeit (New-Life-Regel)</h4><span></span><p class=\'c5\'><span>W&auml;hrend der Bewusstlosigkeit, kannst du als Spieler alles wahrnehmen. Es ist verboten, dieses im RP zu benutzen.</span><span></span><p class=\'c5\'><span>Sollte ein Mediziner dich reanimieren, kannst du dein RP der Verletzung nach weiter spielen.</span><span></span><p class=\'c5\'><span>Sollte kein Mediziner da sein, um dich zu reanimieren, wachst du am Krankenhaus auf. Die Verletzung, welche du dir zugef&uuml;gt hast, besteht noch. Du solltest dich deiner Verletzung nach verhalten und gegebenenfalls bei der n&auml;chsten Gelegenheit einen Mediziner aufsuchen. Es ist dir untersagt, den Ort des geschehens f&uuml;r die n&auml;chsten 30 Minuten aufzusuchen. </span><span></span><h4 class=\"mb-0\">Geiselnahme, Raub</h4><span></span><span class=\'c1\'>Bei Geiselnahmen / Raub steht das RP im Vordergrund. So versuche keine &uuml;bertriebenen Forderungen zu stellen, sondern in einem zumutbaren Verh&auml;ltnis.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c7\'>Es m&uuml;ssen </span><span class=\'c7 c9\'>3 Polizisten</span><span class=\'c1\'>&nbsp;im Dienst sein um Geiselnahmen und einen Raub durchzuf&uuml;hren.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Bleibt fair auch bei kleinen &Uuml;berf&auml;llen.</span><span></span><h4 class=\"mb-0\">Gruppierungen, Gangs, Kriege</h4><span></span><span class=\'c1\'>W&auml;hrend des Krieges ist jeder Anh&auml;nger einer Gang verpflichtet, die Farben dieser oder den Kleidungsstil, sichtbar zu tragen.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Eine Gruppierung darf aus maximal 30 Personen bestehen.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Ein Gang Krieg kann nur mit vern&uuml;nftigem RP-Hintergrund und Support seitiger Absegnung entstehen.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Drive-By ist nur w&auml;hrend des Gangkriegs erlaubt.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Gangs, die sich in einem Krieg befinden, d&uuml;rfen ohne Schuss Ank&uuml;ndigung auf sich schie&szlig;en. </span><span class=\'c1\'>Weichen Zivis nach einer Warnung nicht aus, z&auml;hlt es als &ldquo;Kollateralschaden&rdquo;. Trotzdem wird dazu aufgerufen diese zu vermeiden.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Ein Ende kann nur entstehen, wenn eine der Parteien aufgegeben hat und anschlie&szlig;end eine R&uuml;ckmeldung an den Support gegeben hat.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Eine Gang darf nicht AKTIV mit einer anderen Gang vorgehen.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Das PD mit einer Gang zu st&uuml;rmen ist nur erlaubt, wenn es im Support angefragt wird und auch nur dann, wenn die RP-Gr&uuml;nde dementsprechend schwerwiegend sind.</span><span></span><h4 class=\"mb-0\">Streaming/Videos</h4><span></span><span class=\'c1\'>Jeder hat das Recht, auf unserem Server zu streamen. Die Serverleitung beh&auml;lt sich vor, ein Streaming Verbot auszusprechen, sollte der Inhalt nicht unseren Vorstellungen entsprechen.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Der Servername muss im Titel vorhanden sein.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Bedenk, dass du als Streamer/Creator den Server vertrittst. Verhalte dich bitte dementsprechend. </span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c7\'>Es ist m&ouml;glich, bei uns eine Stream-Partnerschaft zu erhalten. Dies bedeutet, dass bei uns eine Ank&uuml;ndigung im Discord erscheint, wenn du Live gehst. Zus&auml;tzlich hast du die M&ouml;glichkeit, ein Logo des Projektes in deinem Stream/Video einzublenden, dies ist aber keine Pflicht. Die Partnerschaft kannst du im Support beantragen. Bedingungen daf&uuml;r sind z.B 30 Tage aktives Streamen auf unserem Projekt. Der Support wird sich daraufhin deine Streams anschauen und sich bei dir melden. Sollte es zur Partnerschaft kommen, ist es dir untersagt, auf anderen Projekten zu streamen, solange die Partnerschaft aktiv ist. Diese kann nat&uuml;rlich jederzeit im Support abgegeben werden.</span><h5 class=\'c8 c3\' id=\'h.39jk5qlqb0gg\'><span class=\'c4\'></span></h4><h4 class=\"mb-0\">Sonstiges</h4><span></span><span class=\'c1\'>Bei Verlust von Items, Autos, etc. muss ein Videobeweis oder aussagekr&auml;ftigen Screenshots im Support gezeigt werden.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Support Gespr&auml;che d&uuml;rfen nicht aufgezeichnet werden.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Bei Regelverst&ouml;&szlig;en werden vom Support nur Spieler eingebunden, die auch aktiv an dem fehlerhaften RP beteiligt waren.</span><p class=\'c0 c3\'><span class=\'c1\'></span><b>Die Weitergabe oder gar der Verkauf eines Accounts ist strengstens untersagt.</b><p class=\'c0 c3\'><span class=\'c1\'></span><b>Das Verkaufen/Handeln von Ingame W&auml;hrung gegen W&auml;hrungen au&szlig;erhalb vom Projekt ist verboten.</b><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Namens&auml;nderungen bei z.B. einer Hochzeit m&uuml;ssen beim Support angefragt und genehmigt werden.</span><p class=\'c0 c3\'><span class=\'c1\'></span><b>Es ist dir verboten, Streams und Chats anderer Spieler zu verfolgen, w&auml;hrend du InGame bist.</b><p class=\'c0 c3\'><span class=\'c1\'></span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Bilder d&uuml;rfen keine Teile des HUDs enthalten.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Die Nutzungsrechte am Bild m&uuml;ssen gegeben sein.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Bilder m&uuml;ssen aus der 3rd-Person- oder Ego Perspektive einer weiteren Person entstanden sein.</span><b>Die Projektleitung darf ohne Angaben von Gr&uuml;nden einen permanenten Bann aussprechen.</b><span></span><h5 class=\'c8\' id=\'h.fiatw6wigkps\'><span class=\'c4\'>Ein Appell an alle Spieler</span></h4><span></span><span class=\'c6\'>Jeglicher Regelbruch MUSS unverz&uuml;glich beim Support innerhalb von 24 Stunden gemeldet werden. Nur so k&ouml;nnen wir alle am Spielspa&szlig; profitieren.</span><span class=\'c1\'>Bei Fragen &uuml;ber das Regelwerk, steht Euch der Support gerne zur Verf&uuml;gung.</span><p class=\'c0 c3\'><span class=\'c1\'></span><span class=\'c1\'>Wer das liest, kann lesen.</span><p class=\'c3 c5\'><span></span><span class=\'c1\'>Bist du IC, dann ist es dir strickt UNTERSAGT in ein DISCORD SERVER oder andere VOICE SYSTEM zu SEIN!!!!<br><br>Ein Gang-Charakter darf kein Gang wechsel betreiben.</span>');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xucp_support`
--

CREATE TABLE `xucp_support` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `msg` varchar(256) NOT NULL,
  `bug` varchar(30) NOT NULL,
  `posted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Daten für Tabelle `xucp_support`
--

INSERT INTO `xucp_support` (`id`, `username`, `msg`, `bug`, `posted`) VALUES
(6, 'DerStr1k3r', 'Test', 'This is a test message.', '2022-08-24 01:01:08');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xucp_whitelist`
--

CREATE TABLE `xucp_whitelist` (
  `id` int(11) NOT NULL,
  `charstory` varchar(2048) DEFAULT NULL,
  `ucpname` varchar(64) DEFAULT NULL,
  `charname` varchar(64) DEFAULT NULL,
  `frage1` varchar(256) DEFAULT NULL,
  `frage2` varchar(256) DEFAULT NULL,
  `frage3` varchar(256) DEFAULT NULL,
  `frage4` varchar(256) DEFAULT NULL,
  `frage5` varchar(256) DEFAULT NULL,
  `frage6` varchar(256) DEFAULT NULL,
  `frage7` varchar(256) DEFAULT NULL,
  `frage8` varchar(256) DEFAULT NULL,
  `frage9` varchar(256) DEFAULT NULL,
  `frage10` varchar(256) DEFAULT NULL,
  `frage11` varchar(256) DEFAULT NULL,
  `frage12` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Daten für Tabelle `xucp_whitelist`
--

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indizes für die Tabelle `xucp_config`
--
ALTER TABLE `xucp_config`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `xucp_keys`
--
ALTER TABLE `xucp_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `xucp_news`
--
ALTER TABLE `xucp_news`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `xucp_rules`
--
ALTER TABLE `xucp_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `xucp_support`
--
ALTER TABLE `xucp_support`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `xucp_whitelist`
--
ALTER TABLE `xucp_whitelist`
  ADD KEY `PRIMARY KEY` (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

--
-- AUTO_INCREMENT für Tabelle `xucp_config`
--
ALTER TABLE `xucp_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `xucp_keys`
--
ALTER TABLE `xucp_keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `xucp_news`
--
ALTER TABLE `xucp_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `xucp_rules`
--
ALTER TABLE `xucp_rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `xucp_support`
--
ALTER TABLE `xucp_support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `xucp_whitelist`
--
ALTER TABLE `xucp_whitelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
