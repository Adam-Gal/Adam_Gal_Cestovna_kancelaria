-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: localhost
-- Čas generovania: Št 09.Máj 2024, 18:10
-- Verzia serveru: 8.0.36
-- Verzia PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `cestovna_kancelaria_vias`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `destinacie`
--

CREATE TABLE `destinacie` (
  `id` int NOT NULL,
  `fotka` varchar(150) COLLATE utf8mb3_slovak_ci NOT NULL,
  `destinacia` text COLLATE utf8mb3_slovak_ci NOT NULL,
  `cena1` int NOT NULL,
  `cena2` int NOT NULL,
  `cena3` int NOT NULL,
  `cena4` int NOT NULL,
  `cena5` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `destinacie`
--

INSERT INTO `destinacie` (`id`, `fotka`, `destinacia`, `cena1`, `cena2`, `cena3`, `cena4`, `cena5`) VALUES
(1, 'img/destinacie/img1.jpg', 'Bali', 500, 950, 1350, 1700, 2100),
(2, 'img/destinacie/img2.jpg', 'Egypt', 450, 800, 1200, 1500, 1850),
(3, 'img/destinacie/img3.jpg', 'Kanárske ostrovy', 600, 950, 1400, 1750, 2200),
(4, 'img/clanky/img1.jpg', 'Cyprus', 700, 1400, 1950, 2400, 2800),
(5, 'img/destinacie/img4.jpg', 'Hawai', 1000, 1800, 2600, 3400, 4100),
(6, 'img/clanky/img2.jpg', 'Malorka', 350, 600, 1000, 1600, 2100);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `dotazy`
--

CREATE TABLE `dotazy` (
  `id` int NOT NULL,
  `meno` varchar(150) COLLATE utf8mb3_slovak_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb3_slovak_ci NOT NULL,
  `text` text COLLATE utf8mb3_slovak_ci NOT NULL,
  `potvrdenie` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `dotazy`
--

INSERT INTO `dotazy` (`id`, `meno`, `email`, `text`, `potvrdenie`) VALUES
(1, 'Pouzivatel', 'pozivatel@email.sk', 'Testovací text správy ', 1);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `kontakty`
--

CREATE TABLE `kontakty` (
  `id` int NOT NULL,
  `adresat` text COLLATE utf8mb3_slovak_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb3_slovak_ci NOT NULL,
  `tel_c` varchar(150) COLLATE utf8mb3_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `kontakty`
--

INSERT INTO `kontakty` (`id`, `adresat`, `email`, `tel_c`) VALUES
(1, 'Manažér', 'manazer@vias.sk', '0904 372 960'),
(2, 'Riaditeľ', 'riaditel@vias.sk', '0904 386 764'),
(3, 'CallCentrum', 'dovolenka@vias.sk', '0903 752 184');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `kontakt_obrazky`
--

CREATE TABLE `kontakt_obrazky` (
  `id` int NOT NULL,
  `obrazok` varchar(150) COLLATE utf8mb3_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `kontakt_obrazky`
--

INSERT INTO `kontakt_obrazky` (`id`, `obrazok`) VALUES
(1, 'img/kontakt/img1.jpg'),
(2, 'img/kontakt/img2.jpg'),
(3, 'img/kontakt/img3.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `nazov` varchar(30) COLLATE utf8mb3_slovak_ci NOT NULL,
  `link` varchar(150) COLLATE utf8mb3_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `menu`
--

INSERT INTO `menu` (`id`, `nazov`, `link`) VALUES
(1, 'Domov', 'index.php'),
(2, 'Destinácie', 'destinacie.php'),
(3, 'Služby', 'sluzby.php'),
(4, 'Kontakt', 'kontakt.php'),
(5, 'Prihlásenie', 'login.php');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `novinky`
--

CREATE TABLE `novinky` (
  `id` int NOT NULL,
  `obrazok` varchar(150) COLLATE utf8mb3_slovak_ci NOT NULL,
  `nadpis` text COLLATE utf8mb3_slovak_ci NOT NULL,
  `text` text COLLATE utf8mb3_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `novinky`
--

INSERT INTO `novinky` (`id`, `obrazok`, `nadpis`, `text`) VALUES
(1, 'img/clanky/img1.jpg', 'Otvárame Krídla ku Slnečnému Ostrovu: Nová Destinácia Cyprus!', 'S ďalším letom naša cestovná spoločnosť prináša vzrušujúce správy - Cyprus, ostrov kontrastov a krásy, sa stáva našou najnovšou destináciou! Otvárame novú trasu, ktorá spája cestujúcich so slnečným pobrežím a pútavou históriou tejto jedinečnej krajiny. Zarezervujte si svoje letenky a pripravte sa na dobrodružstvo na Slnečnom Ostrove! Letisko na Cyprus je teraz otvorené pre vás, aby ste objavili kúzlo tohto jedinečného miesta. Nechajte sa unášať krásou a pohostinnosťou Cyprusu s našou cestovnou spoločnosťou!\r\n'),
(2, 'img/clanky/img2.jpg', 'Malorka: Ostrov Slnečných Lúčov a Kultúrnych Pokladov', 'V srdci Stredozemného mora sa rozprestiera Malorka, jedinečný ostrov plný krásnych scenérií, vôní citrusových sadov a pútavého kultúrneho dedičstva. Dnes sa pozrieme na čaro tohto ostrova, ktorý prilákal pozornosť cestovateľov svojou nezameniteľnou atmosférou a bohatou ponukou zážitkov. Malorka je miesto, kde sa nudit rozhodne nebudete. Pláže ponúkajú nielen oddych, ale aj rôzne vodné športy. Cyklistika, golfovanie a výlety na lodi sú len niektoré z možností pre športových nadšencov. Pre milovníkov nočného života sú tu moderné kluby a tradičné taverny, kde sa môžete pohrávať s taktmi flamenka.\r\n'),
(3, 'img/clanky/img3.jpg', 'Cestovanie mimo Tradičných Turistických Destinácií', 'Cestovanie je ako fascinujúci príbeh, ktorý sa odvíja na stránkach sveta. Často sa však stáva, že sa zameriavame iba na veľké metropoly a populárne turistické destinácie, pričom prehliadame malé mestečká, ktoré ukrývajú svoje vlastné tajomstvá a pôvab. Ak túžite po nezabudnuteľnom dobrodružstve, oddialte sa od hlučných davov a objavte krásy sveta v tých najmenších zákutiach.Cestovanie do malých mestečiek neznamená nutne obetovať pohodlie. Mnohé z týchto destinácií poskytujú útulné penzióny a malebné hotely, ktoré sú pripravené privítať cestovateľov so všetkým pohodlím a pohostinnosťou.\r\n');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `pouzivatelia`
--

CREATE TABLE `pouzivatelia` (
  `id` int NOT NULL,
  `email` text COLLATE utf8mb3_slovak_ci NOT NULL,
  `heslo` text COLLATE utf8mb3_slovak_ci NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `pouzivatelia`
--

INSERT INTO `pouzivatelia` (`id`, `email`, `heslo`, `role`) VALUES
(1, 'admin@vias.sk', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'manazer@vias.sk', '955db0b81ef1989b4a4dfeae8061a9a6', 0),
(3, 'riaditel@vias.sk', '955db0b81ef1989b4a4dfeae8061a9a6', 0),
(4, 'dovolenka@vias.sk', '955db0b81ef1989b4a4dfeae8061a9a6', 0);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `sluzby`
--

CREATE TABLE `sluzby` (
  `id` int NOT NULL,
  `nazov` text COLLATE utf8mb3_slovak_ci NOT NULL,
  `popis1` text COLLATE utf8mb3_slovak_ci NOT NULL,
  `popis2` text COLLATE utf8mb3_slovak_ci NOT NULL,
  `popis3` text COLLATE utf8mb3_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `sluzby`
--

INSERT INTO `sluzby` (`id`, `nazov`, `popis1`, `popis2`, `popis3`) VALUES
(1, 'Rezervácia leteniek:', 'Medzinárodné lety', 'Vnútroštátne lety', 'Last-minute ponuky'),
(2, 'Ubytovanie:', 'Hotely', 'Apartmány', ''),
(3, 'Preprava:', 'Autopožičovňa', 'Transfer z letiska', 'MHD v cieľovej destinácii'),
(4, 'Turistické balíčky:', 'Výlety a exkurzie', 'Skupinové a individuálne zájazdy', 'Kultúrne a dobrodružné programy'),
(5, 'Poistenie:', 'Cestovné poistenie', 'Zdravotné poistenie', 'Poistenie zrušenia'),
(6, 'Víza a iné formality:', 'Pomoc s vízami', '', 'Iné povinné formality'),
(7, 'Technická podpora:', '24/7 zákaznícka podpora', 'Mobilná aplikácia z informáciami pre zákazníkov', ''),
(8, 'Event Management:', 'Organizácia konferencií a podujatí', 'Team-building akcie', 'Svadobné plánovanie destinácií'),
(9, 'Jazykové služby:', 'Priradenie sprievodcu v cudzom jazyku', 'Preklady dokumentov', 'Komunikačná asistencia'),
(10, 'Cestovné poradenstvo:', 'Newsletter', 'Odporúčania pre destinácie', 'Špecializované odporúčania pre rodiny, páry, dobrodruhov'),
(11, 'Špeciálne služby pre firemných klientov:', 'Organizácia firemných ciest a team-buildingov', 'Zabezpečenie konferenčných priestorov', ''),
(12, 'VIP služby:', 'Prémiové lety a ubytovanie', '', 'Exkluzívne zážitky a služby');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `special`
--

CREATE TABLE `special` (
  `id` int NOT NULL,
  `fotka` varchar(150) COLLATE utf8mb3_slovak_ci NOT NULL,
  `destinacia` text COLLATE utf8mb3_slovak_ci NOT NULL,
  `text` text COLLATE utf8mb3_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `special`
--

INSERT INTO `special` (`id`, `fotka`, `destinacia`, `text`) VALUES
(1, 'img/special/img1.jpg', 'Bali', 'Kultúrne poklady a harmonická atmosféra vytvárajú ideálnu dovolenkovú oázu. Bali je miestom, kde sa stretáva prírodná krása s kultúrnym bohatstvom, ponúkajúc nezabudnuteľné zážitky pre váš oddych a zážitky.\r\n'),
(2, 'img/special/img2.jpg', 'Egypt', 'Piesočné pláže pri tyrkysovo modrom mori vytvárajú dokonalý ráj pre oddych. Egypt je miestom, kde sa stretáva moderný luxus s historickým pokladom, ponúkajúc nezabudnuteľné zážitky a relaxáciu v jednom.\r\n'),
(3, 'img/special/img3.jpg', 'Kanárske ostrovy', 'Oáza pod slnkom a modrým nebom Atlantiku. Zlatisté pláže, ktoré omýva príjemné teplo oceánu, tvoria dokonalé miesto na oddych. Kanárske ostrovy sú miestom, vytvárajúc ideálny raj pre oddych a objavovanie.\r\n');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `spravy`
--

CREATE TABLE `spravy` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `email` varchar(50) COLLATE utf8mb3_slovak_ci NOT NULL,
  `nadpis` varchar(100) COLLATE utf8mb3_slovak_ci NOT NULL,
  `text` varchar(500) COLLATE utf8mb3_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `spravy`
--

INSERT INTO `spravy` (`id`, `user_id`, `email`, `nadpis`, `text`) VALUES
(1, 1, 'meno@email.sk', 'Testovacia spáva', 'Správa pre admina'),
(2, 2, 'meno@email.sk', 'Testovacia spáva', 'Správa pre manažéra'),
(3, 3, 'meno@email.sk', 'Testovacia správa', 'Správa pre riaditeľa'),
(4, 4, 'meno@email.sk', 'Testovacia spáva', 'Správa pre podporu');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `destinacie`
--
ALTER TABLE `destinacie`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `dotazy`
--
ALTER TABLE `dotazy`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `kontakty`
--
ALTER TABLE `kontakty`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `kontakt_obrazky`
--
ALTER TABLE `kontakt_obrazky`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `novinky`
--
ALTER TABLE `novinky`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `pouzivatelia`
--
ALTER TABLE `pouzivatelia`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `sluzby`
--
ALTER TABLE `sluzby`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `special`
--
ALTER TABLE `special`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `spravy`
--
ALTER TABLE `spravy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `destinacie`
--
ALTER TABLE `destinacie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pre tabuľku `dotazy`
--
ALTER TABLE `dotazy`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pre tabuľku `kontakty`
--
ALTER TABLE `kontakty`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `kontakt_obrazky`
--
ALTER TABLE `kontakt_obrazky`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `novinky`
--
ALTER TABLE `novinky`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `pouzivatelia`
--
ALTER TABLE `pouzivatelia`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `sluzby`
--
ALTER TABLE `sluzby`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pre tabuľku `special`
--
ALTER TABLE `special`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `spravy`
--
ALTER TABLE `spravy`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
