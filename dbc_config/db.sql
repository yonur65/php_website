-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Tem 2017, 14:04:37
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `davranis`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `davranis`
--

CREATE TABLE `davranis` (
  `id` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `notu` int(2) NOT NULL,
  `aciklama` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hafta` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `davranislar`
--

CREATE TABLE `davranislar` (
  `id` int(11) NOT NULL,
  `kategoriId` int(11) NOT NULL,
  `ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `puan` int(2) NOT NULL,
  `aciklama` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `pdr` tinyint(1) NOT NULL,
  `bildiri` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `davranislar`
--

INSERT INTO `davranislar` (`id`, `kategoriId`, `ad`, `puan`, `aciklama`, `pdr`, `bildiri`) VALUES
(1, 5, 'Derse Katılım', 1, 'Yabancı dil dersinden haftanın öğrencisi seçildi.', 1, 1),
(2, 6, 'araç gereç getirmedi', 8, 'Ders araç ve gereçlerini eksik getirdi.', 1, 1),
(3, 32, 'ya böyle oldu', 7, 'sldkcşasndck', 1, 1),
(4, 25, 'Seni gidi YAramaz', 9, 'lan pis', 1, 0),
(7, 21, 'kusura bakmayın', 2, 'adfasdfasdfa', 1, 0),
(8, 34, 'yepyeni oldumu', 5, 'haaaaa', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `okullar` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`id`, `ad`, `okullar`) VALUES
(5, 'Ders', 'as'),
(6, 'Disiplin', 'as'),
(21, 'yeni35', 'AO IO OO'),
(25, 'kandırdım', 'AO'),
(26, 'plişlkişlkişlk45', ''),
(31, 'yeni35', ''),
(32, 'kamyon', 'AO IO'),
(33, 'plişlkişlkişlk35', 'AO'),
(34, 'yepyeni', 'AO IO OO'),
(35, 'sennnnn', 'AO IO');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sertifika`
--

CREATE TABLE `sertifika` (
  `id` int(11) NOT NULL,
  `ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `puan` int(11) NOT NULL,
  `okullar` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `bildirim` tinyint(1) NOT NULL,
  `yildiz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sertifika`
--

INSERT INTO `sertifika` (`id`, `ad`, `puan`, `okullar`, `message`, `bildirim`, `yildiz`) VALUES
(1, 'Bronz Sertifika', 100, 'AO', 'ljnkjnkj', 1, 15),
(2, 'Gümüş Sertifika', 200, 'OO', 'nlkjhlkjnlkjnlkjn', 1, 15),
(3, 'Altın Sertifika', 300, 'AO IO', 'öpöpoöp', 1, 15),
(4, '1 Yıldızlı Altın Sertifika', 300, 'AO IO', 'şlskdcnşaksncşsakcnaşskdcn', 1, 15),
(5, 'takdim bb', 800, 'AO', 'aşksdncşkasjcasdc [X]', 1, 50),
(6, 'teşekkür', 790, 'AO IO OO', 'pardon', 1, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siniflar`
--

CREATE TABLE `siniflar` (
  `id` int(11) NOT NULL,
  `ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siniflar`
--

INSERT INTO `siniflar` (`id`, `ad`) VALUES
(1, '2A'),
(2, '3B'),
(3, '7A');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `puan` int(15) NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sira` int(5) NOT NULL,
  `okul` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sinifid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `student`
--

INSERT INTO `student` (`id`, `no`, `ad`, `puan`, `resim`, `sira`, `okul`, `sinifid`) VALUES
(1, 85, 'ALİ BORÇSUZ', 650, 'SDVSDFVSDFSDCSASDC', 1, 'MERTER', 1),
(2, 25, 'AYLA TAŞKIN', 820, 'ADSCASCAS', 2, 'MERTER', 1),
(3, 55, 'SÜHEYLA çİFTÇİ', 850, 'ADCSACAS', 3, 'MERTER', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `davranis`
--
ALTER TABLE `davranis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studentId` (`studentId`);

--
-- Tablo için indeksler `davranislar`
--
ALTER TABLE `davranislar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategoriId` (`kategoriId`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sertifika`
--
ALTER TABLE `sertifika`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siniflar`
--
ALTER TABLE `siniflar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sinifid` (`sinifid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `davranis`
--
ALTER TABLE `davranis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `davranislar`
--
ALTER TABLE `davranislar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- Tablo için AUTO_INCREMENT değeri `sertifika`
--
ALTER TABLE `sertifika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `siniflar`
--
ALTER TABLE `siniflar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `davranis`
--
ALTER TABLE `davranis`
  ADD CONSTRAINT `davranis_ibfk_1` FOREIGN KEY (`studentId`) REFERENCES `student` (`id`);

--
-- Tablo kısıtlamaları `davranislar`
--
ALTER TABLE `davranislar`
  ADD CONSTRAINT `davranislar_ibfk_1` FOREIGN KEY (`kategoriId`) REFERENCES `kategori` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
