-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: yogaemmental
-- ------------------------------------------------------
-- Server version	8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Home','<!DOCTYPE html>\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<h3 style=\"text-align: center;\">&nbsp;</h3>\r\n<h3 style=\"text-align: center;\">&nbsp;</h3>\r\n<h3 style=\"text-align: center;\"><em>Ausser der Suche nach der Seele</em><br><em>Ist nichts</em><br><em>von besonderen Bedeutung!</em></h3>\r\n<h3 style=\"text-align: center; padding-left: 120px;\"><em>B.K.S. Jyengar</em></h3>\r\n<h3 style=\"text-align: center;\"><br><br><em>YOGA ist die Reise zu unserem Selbst...!</em><br><em>So wird er zur Quelle str&ouml;mender Kraft...!</em></h3>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</body>\r\n</html>\n','home','pages/IHQ4pKN6q6wDunXx7SvWh3FDyQAEA3e0MdOazsOT.png',NULL,'2019-06-21 13:35:03','2019-06-21 22:00:13'),(2,'Sandra Kuhlmann','<!DOCTYPE html>\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<h1>&nbsp;</h1>\r\n<h1>Meine Person</h1>\r\n<div>\r\n<div>Mein Name ist Sandra Kuhlmann und ich bin 1965 in Bern geboren. Seit meiner Kindheit habe ich die Freude an der Bewegung nie verloren, damals als Eiskunstl&auml;uferin, sp&auml;ter im Tanz oder Theater. Dem K&ouml;rper seelischen Ausdruck verleihen zu k&ouml;nnen, hat mich immer schon durchw&auml;rmt und erfreut.<br>Das Leben hat mir noch andere Aufgaben gestellt. Wesentlicher Teil ist und war meine Familie, mein Mann und unsere f&uuml;nf Kinder. Dazu bauten mein Mann und ich eine sozialp&auml;dagogische Institution mit einer Demeter Landwirtschaft im Emmental auf, Sothegra.<br>All die Erfahrungen, die ich machen durfte, f&uuml;hrten mich eines Tages zum Yoga. In der Tapas Yoga- Schule in Kehrsatz begann ich eine vierj&auml;hrige Ausbildung zur Yoga- Lehrerin der Yoga Schweiz, YCH.</div>\r\n<div>&nbsp;</div>\r\n</div>\r\n<h1>Diplome und Zertifikate</h1>\r\n<div>\r\n<div><span style=\"font-family: Walkway; font-weight: bold; text-decoration: underline;\">2017</span>: Diplom zur diplomierten Yogalehrerin der Yoga Schweiz, YCH,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;und der Europ&auml;ischen Yoga- Union, EYU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ruth Westhauser, Tapas Yogaschule Bern,</div>\r\n<div><br><span style=\"font-family: Walkway; font-weight: bold; text-decoration: underline;\">2019</span>: Zertifikat Yoga in der Schwangerschaft und R&uuml;ckbildung, Ursula Salbert, Yoga Carmen Bern</div>\r\n<div><br><span style=\"font-family: Walkway; font-weight: bold; text-decoration: underline;\">2017-2019</span>: Svastha Yoga and Ayurveda of Krishnamacharya Therapie Programm, Modul 1-4 in Bern, Ganesh Mohan und Dr. G&uuml;nter Nissen, Berlin</div>\r\n</div>\r\n<pre><br><br><br><br><br></pre>\r\n</body>\r\n</html>\n','sandra-kuhlmann','pages/OfJkk8vj70Gp67u6l5pqTslsmLJT3hwyIpNthR8q.jpeg',NULL,'2019-06-21 13:35:03','2019-06-21 22:00:30'),(3,'Yoga','<!DOCTYPE html>\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<h1>&nbsp;</h1>\r\n<h1>Was ist Yoga?</h1>\r\n<p>&nbsp;</p>\r\n<div>\r\n<div>Yoga ist ein ganzheitlicher, hinduistisch gepr&auml;gter &Uuml;bungsweg f&uuml;r die Seele, den Geist und den K&ouml;rper. Jedes Asana (&Uuml;bungspraxis) ist neben der k&ouml;rperlichen Kr&auml;ftigung, ein innerer kreativer Prozess, der uns neue Dimensionen er&ouml;ffnen kann.Heute kennen wir im Westen vor allem den Hatha-Yoga, der uns den Weg der inneren Erleuchtung weist. Mit ethischen Handlungsans&auml;tzen, t&auml;glicher &Uuml;bungspraxis- Asana, Atem&uuml;bungen- Pranayama - &Uuml;bungen zur Beruhigung und Reinigung auf mentaler und energetischen Ebene, f&uuml;hrt uns der Hatha- Yoga in die Stille zur Konzentrationsf&auml;higkeit. Hier beginnt der &Uuml;bergang zur Meditation, zu unserem Selbst. Diesen Schulungsweg finden wir in den verschiedenen Yogaschulen: z.B. Patanjali Yoga Sutra beinhaltet der achtfache Pfad, auch als Spiegel der Seele genannt; In der Bhagavad Gita, wird der Bakthi Marga als der Yoga Weg der Hingabe dargestellt. Die verschiedenen Yogaschulen haben sich in der Entstehungsgeschichte gegenseitig gepr&auml;gt und beeinflusst.</div>\r\n</div>\r\n<h1>&nbsp;</h1>\r\n<h1>Gesundheit</h1>\r\n<p>&nbsp;</p>\r\n<div>\r\n<div>Heutzutage ist der Yoga immer noch oder gerade wieder aktuell. In der modernen Zeit, in welcher wir st&auml;ndig gefordert oder sogar gestresst uns f&uuml;hlen, kann Yoga uns helfen, innere Ruhe zu erlangen. T&auml;glich kurze Zeit sich selber zu g&ouml;nnen, f&ouml;rdert unsere Gesundheit und Ausgeglichenheit, daraus kann Wohlbefinden und Zufriedenheit entstehen.Die K&ouml;rper&uuml;bungen, Asana helfen unseren oft einseitig belasteten K&ouml;rper auszugleichen: mit Aufrichtung, Lockerung, Dehnungen und Kr&auml;ftigung der Muskulatur und Balance&uuml;bungen. Durch die K&ouml;rperarbeit erreichen wir mehr Stabilit&auml;t und zugleich Leichtigkeit: Sthiram Sukham Asana, PYS. 2,6.Die Atem&uuml;bungen, Pranayama f&uuml;hren uns mit der Konzentration auf den Atem, in die Stille und schenken uns Ruhe und Gelassenheit. Der Energiehaushalt wird gereinigt und harmonisiert. Sind die Gedanken durch die Konzentration auf den Atem unter Kontrolle, erweitert sich das Bewusstsein. In der Meditation kann der &Uuml;bende die Verbindung zu seinem Selbst neu erfahren und sich mit der Einheit verbinden. Diese Erfahrungen erm&ouml;glichen uns, die Lebenshaltung positiv zu gestalten und innere Zufriedenheit zu erreichen.</div>\r\n</div>\r\n</body>\r\n</html>\n','yoga','pages/KyUxTpSbtmkWJlyEV35YjoF0UGbrG9LQTvfp9pFn.jpeg',NULL,'2019-06-21 13:35:03','2019-06-21 19:10:04'),(4,'Unterricht','<!DOCTYPE html>\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<h1>&nbsp;</h1>\r\n<h1>Mein Yoga Unterricht</h1>\r\n<div>\r\n<div>Im Gruppenunterricht gehe ich neben der Praxis auf die Yogaphilosophie ein und vermittle damit Inhalt und Ziel in der Yogastunde. Zentrale Themen sind Patanjali Yoga Sutra (Achtfache Pfad), Hatha Yoga Pratipika und Bhakti Yoga.In meinem Yogaunterricht m&ouml;chte ich alle Menschen ansprechen: Mit oder ohne Yoga-Erfahrung, auch das Alter spielt keine Rolle. In meinem Yogaunterricht achte ich besonders darauf, dass Jeder seinen individuellen Weg, seinen Bed&uuml;rfnissen und F&auml;higkeiten folgen kann, ohne Anforderungsprofile. Auch nehme ich in meiner Yogapraxis auf die heutigen k&ouml;rperlichen Verh&auml;ltnisse R&uuml;cksicht und gestalte meinen Unterricht zeitgerecht. Dazu ist jeder Teilnehmer aufgefordert, seine F&auml;higkeiten kennenzulernen und zu nutzen, Grenzen zu respektieren und dadurch im Einklang mit seinem K&ouml;rper, der Seele und dem Geist Fortschritte zu erzielen.Der Unterricht ist in: Einklang- Aufw&auml;rmen- Asana (Praxis), Pranayama (Atem&uuml;bungen- Achtsamkeits&uuml;bungen) und Ausklang (Meditations&uuml;bungen, Yoga-Nidra) gestaltet.</div>\r\n<div>&nbsp;</div>\r\n</div>\r\n<h1>Schwangerschaftsyoga</h1>\r\n<div>\r\n<div>Im Schwangerschaftsyoga beziehe ich mich auch auf das Hatha- Yoga. Die &Uuml;bungen sind speziell sanfte Asana f&uuml;r Schwangere zur F&ouml;rderung der Wahrnehmungs-Bewegungs- und Entspannungsf&auml;higkeit. Es werden auch Atem&uuml;bungen unterrichtet, speziell die Bauchatmung und das T&ouml;nen zur Begleitung der Wehen. Entspannungs&uuml;bungen, Visualisierungen und Meditationen runden den Unterricht ab.</div>\r\n<div>&nbsp;</div>\r\n</div>\r\n<h1>Beckenboden- und Rueckbildungsyoga</h1>\r\n<div>\r\n<div>Im Beckenboden und R&uuml;ckbildungsyoga nach der Schwangerschaft, vermittle ich anatomische Kenntnisse des Beckenbodens. Es werden &Uuml;bungen, Asana zur Wiederherstellung der Wahrnehmungsf&auml;higkeit, Beweglichkeit und Haltef&auml;higkeit des Beckenbodens vermittelt. Wir lernen im Alltag unseren Beckenboden bewusst zu schonen; Bei Druckerh&ouml;hung, Belastung, Ern&auml;hrung etc.<br>Im Unterricht werden Asana zur Anregung von Stoffwechsel und Kreislauf erlernt und Asana f&uuml;r die Mobilit&auml;t, Kraft, K&ouml;rperstatik und f&uuml;r das Gleichgewicht ge&uuml;bt.</div>\r\n<div>&nbsp;</div>\r\n</div>\r\n<h1>Svastha Yoga Therapie</h1>\r\n<div>\r\n<div>Das Svastha Yoga Therapie Programm ist aufbauend auf den Lehren Krishnamacharya und beinhaltet die Essenz aus dem traditionellen Yoga und Ayurveda, verbunden mit der modernen Medizin. Meine erlernten Kenntnisse f&uuml;hren mich &uuml;ber das Bewegungssystem, sowie Anatomie der Atmung, zu den Atemwegs- und Herzkreislauferkrankungen und neurologische- und immunologische Erkrankungen, sowie seelische und psychische Probleme. Svastha Yoga erm&ouml;glicht aus einer ganzheitlichen Pespektive den Prozess des Gesundwerdens anzugehen. Unter Anwendung von K&ouml;rper&uuml;bungen und Atemtechniken, sowie auch Meditationen und Philosophischer Aspekte helfen den Betroffenen wieder ins Gleichgewicht zu finden. Das therapeutische Yoga erg&auml;nzt und erweitert das Spektrum der Behandlung und die Komponente der Selbstwirksamkeit, mit der, der/ die PatientIn aktiv teilhaben und mitgestalten kann. Weiter wird dem Patient/ der Patientin durch die Meditation der innere Zugang zu sich selber wieder er&ouml;ffnet. Die Selbstheilungskr&auml;fte werden aktiviert, dadurch wird das Urvertrauen aufgebaut und der Zugang zum Lebenslicht wird m&ouml;glich.</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n</div>\r\n</body>\r\n</html>\n','unterricht','pages/PRixnvJwiRPGUIiNH4pxj11VYZWzVLHYUpu6QIm1.jpeg',NULL,'2019-06-21 13:35:03','2019-06-21 19:20:53'),(5,'Angebot','<!DOCTYPE html>\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>&nbsp;</p>\r\n<h1>Angebot</h1>\r\n<div>Yoga Emmental<br>Bernstrasse 3, 3550 Langnau. (Bei Tearoom Wysler &uuml;ber die Bernstrasse, rechts ins G&auml;ssli nach ca. 50 Meter links ums Eck.)<br><hr><br>\r\n<table style=\"height: 110px;\">\r\n<tbody>\r\n<tr style=\"height: 89px;\">\r\n<td style=\"height: 89px; width: 219.875px;\">Allgemeiner Gruppenunterricht<br>&nbsp;&nbsp;&nbsp;&nbsp;in Langnau: :<br><span style=\"font-family: Walkway; font-weight: bold; text-decoration: underline;\">Montag</span>: 19:45-21:15<br><span style=\"font-family: Walkway; font-weight: bold; text-decoration: underline;\">Mittwoch</span>: 18:10-19:25</td>\r\n<td style=\"height: 89px; width: 271.875px;\">Schwangerschaftsyoga:<br><span style=\"font-family: Walkway; font-weight: bold; text-decoration: underline;\">Montag</span>: 18:15-19:30<br>Beckenboden- und R&uuml;ckbildungsyoga:<br><span style=\"font-family: Walkway; font-weight: bold; text-decoration: underline;\">Mittwoch</span>: 19:45-21:00</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"height: 21px; width: 505.208px; text-align: center; padding-left: 40px;\" colspan=\"2\" align=\"center\">Yogatherapie und Einzelstunde nach Absprache</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<br>Anmeldung erw&uuml;nscht, der Eintritt ist laufend m&ouml;glich.</div>\r\n<div><br>Weiter Informationen und Anmeldung unter: Telefon: 034 496 53 07 oder Email: <a href=\"mailto:info@sothegra.ch\">info@sothegra.ch</a></div>\r\n<div><br>Zahlungsmodus: Preis pro Lektion im Gruppenunterricht: Fr. 25.00/ Fr. 20.00 i.A.</div>\r\n<div><br>8 Lektionen werden im Voraus bezahlt und in der jeweiligen besuchten Lektion wird auf dem Coupon abgekreuzt. (Coupon drei Monate g&uuml;ltig)<br>Schnupperstunde gratis.</div>\r\n<div><br>Therapieunterricht, Einzelunterricht nach Absprache: 60 Min &agrave; Fr. 95.00</div>\r\n<p>&nbsp;</p>\r\n</body>\r\n</html>\n','angebot','pages/FQHUzgZEO2XhV19aNgnKEIjd8EV2xJr0yXSCCUrb.jpeg',NULL,'2019-06-21 13:35:03','2019-06-21 19:19:37'),(6,'Kontakt',NULL,'kontakt','pages/Nyt6N6bFsvkCfbkwvKUZ17ivIDCcLlTzwPymd9mZ.jpeg','contact','2019-06-21 13:35:03','2019-06-21 19:46:42');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-22  2:00:56
