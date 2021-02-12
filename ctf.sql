-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 08, 2020 at 11:34 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctf`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_level`
--

CREATE TABLE `history_level` (
  `id` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history_level`
--

INSERT INTO `history_level` (`id`, `id_level`, `user_id`, `time`) VALUES
(7, 2, 5, '2020-09-04 13:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `reward` decimal(10,2) NOT NULL,
  `proposition` text NOT NULL,
  `answer` text NOT NULL,
  `proposition_image` text NOT NULL,
  `title_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `title`, `reward`, `proposition`, `answer`, `proposition_image`, `title_image`) VALUES
(1, 'Javascript', '230.00', 'งืมมีคนเข้ารหัสไฟล์javascriptไว้อะในนั้นมันมีpasswordอยู่ลองหาวิธีเอาpassword มาให้ได้ทีครับ : var _0x5500=[\'\\x45\\x38\\x6f\\x50\\x57\\x51\\x42\\x64\\x4d\\x4a\\x62\\x79\\x78\\x63\\x57\\x68\\x57\\x4f\\x4e\\x63\\x54\\x57\\x3d\\x3d\',\'\\x57\\x34\\x4e\\x64\\x56\\x38\\x6b\\x64\\x45\\x74\\x52\\x64\\x48\\x68\\x39\\x61\\x73\\x4d\\x30\\x48\\x57\\x4f\\x58\\x58\\x57\\x36\\x4e\\x64\\x47\\x59\\x64\\x63\\x4c\\x32\\x79\\x6b\\x57\\x35\\x75\\x42\\x74\\x67\\x62\\x46\\x42\\x61\\x70\\x63\\x4b\\x61\\x3d\\x3d\',\'\\x7a\\x32\\x76\\x30\\x76\\x67\\x4c\\x54\\x7a\\x71\\x3d\\x3d\',\'\\x57\\x34\\x74\\x63\\x4d\\x38\\x6f\\x43\\x57\\x34\\x2f\\x63\\x50\\x6d\\x6f\\x66\\x43\\x57\\x3d\\x3d\',\'\\x57\\x35\\x56\\x64\\x4b\\x6d\\x6b\\x76\\x57\\x36\\x78\\x63\\x4d\\x53\\x6b\\x43\\x57\\x50\\x35\\x62\\x6d\\x72\\x52\\x63\\x4e\\x63\\x72\\x4a\\x57\\x35\\x31\\x68\\x57\\x37\\x2f\\x63\\x50\\x53\\x6f\\x66\\x61\\x53\\x6b\\x4e\\x57\\x35\\x52\\x64\\x47\\x53\\x6f\\x44\\x63\\x65\\x65\\x58\\x46\\x6d\\x6b\\x41\\x76\\x38\\x6b\\x2f\\x69\\x43\\x6f\\x48\\x78\\x43\\x6b\\x32\\x57\\x34\\x30\\x70\\x41\\x43\\x6f\\x4f\\x44\\x64\\x54\\x6f\\x43\\x5a\\x4e\\x64\\x48\\x4b\\x61\\x51\\x63\\x4a\\x4a\\x64\\x4c\\x53\\x6b\\x68\\x57\\x36\\x47\\x4c\\x77\\x6d\\x6b\\x78\\x69\\x74\\x53\\x79\\x70\\x67\\x70\\x64\\x4e\\x74\\x52\\x63\\x4d\\x4c\\x30\\x4f\\x62\\x38\\x6b\\x51\\x63\\x43\\x6b\\x59\\x57\\x34\\x42\\x64\\x53\\x4d\\x61\\x43\\x57\\x4f\\x71\\x6e\\x6b\\x38\\x6b\\x6c\\x57\\x50\\x33\\x63\\x4b\\x68\\x54\\x75\\x57\\x34\\x35\\x79\\x6d\\x4c\\x65\\x37\\x68\\x38\\x6f\\x33\\x57\\x35\\x44\\x50\\x64\\x43\\x6b\\x67\\x57\\x37\\x33\\x64\\x4f\\x4d\\x33\\x64\\x47\\x43\\x6b\\x50\\x57\\x51\\x6c\\x63\\x4b\\x6d\\x6f\\x30\\x42\\x38\\x6b\\x63\\x57\\x4f\\x62\\x38\\x67\\x43\\x6b\\x31\\x57\\x51\\x4a\\x63\\x4d\\x38\\x6f\\x61\\x67\\x66\\x42\\x63\\x4e\\x43\\x6f\\x49\\x41\\x77\\x53\\x50\\x57\\x51\\x37\\x64\\x52\\x6d\\x6b\\x44\\x57\\x36\\x52\\x63\\x47\\x75\\x38\\x57\\x78\\x38\\x6f\\x75\\x73\\x38\\x6f\\x58\\x41\\x53\\x6f\\x57\',\'\\x57\\x4f\\x4e\\x64\\x47\\x53\\x6f\\x64\',\'\\x42\\x67\\x39\\x4e\'];(function(_0x58f263,_0x1654cb){var _0x422e9f=function(_0x2e4a85){while(--_0x2e4a85){_0x58f263[\'push\'](_0x58f263[\'shift\']());}};_0x422e9f(++_0x1654cb);}(_0x5500,0x2117+-0x3*-0xa31+-0x149c*0x3));var _0x1882=function(_0xe29713,_0x514989){_0xe29713=_0xe29713-(0x2117+-0x3*-0xa31+-0x1fd5*0x2);var _0x38b407=_0x5500[_0xe29713];if(_0x1882[\'HLyVch\']===undefined){var _0x3a6f95=function(_0x175eea){var _0x14a551=\'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=\',_0x21dbe7=String(_0x175eea)[\'replace\'](/=+$/,\'\');var _0x3703b2=\'\';for(var _0x3d8f4c=-0x1*-0x21ce+-0x14c7*0x1+-0xd07,_0x336621,_0x2f55e4,_0x1318db=-0x11*-0x240+-0x1*0x16b+-0x15*0x1c1;_0x2f55e4=_0x21dbe7[\'charAt\'](_0x1318db++);~_0x2f55e4&&(_0x336621=_0x3d8f4c%(0x2*0x131e+0xd27+-0x335f)?_0x336621*(0x229a+0x40b+-0x2665)+_0x2f55e4:_0x2f55e4,_0x3d8f4c++%(0x210c+0x2*-0x647+-0x147a))?_0x3703b2+=String[\'fromCharCode\'](-0x3bb*0x3+0x65*0x4d+-0x1231&_0x336621>>(-(0xc32+-0x1*0x26e5+0x1ab5)*_0x3d8f4c&0xb0+-0x4*0x1b+-0x1*0x3e)):-0x4f9+0x1*0xaee+-0x5*0x131){_0x2f55e4=_0x14a551[\'indexOf\'](_0x2f55e4);}return _0x3703b2;};_0x1882[\'bTuvRy\']=function(_0x19499b){var _0x1c46b7=_0x3a6f95(_0x19499b);var _0x505494=[];for(var _0x2ed904=0x224c+0xe46+0x2*-0x1849,_0x180dd8=_0x1c46b7[\'length\'];_0x2ed904<_0x180dd8;_0x2ed904++){_0x505494+=\'%\'+(\'00\'+_0x1c46b7[\'charCodeAt\'](_0x2ed904)[\'toString\'](-0x216+0x203b+-0x1e15))[\'slice\'](-(0x1cee+-0x1*0x83e+-0xa57*0x2));}return decodeURIComponent(_0x505494);},_0x1882[\'KhhSEF\']={},_0x1882[\'HLyVch\']=!![];}var _0x255b25=_0x1882[\'KhhSEF\'][_0xe29713];return _0x255b25===undefined?(_0x38b407=_0x1882[\'bTuvRy\'](_0x38b407),_0x1882[\'KhhSEF\'][_0xe29713]=_0x38b407):_0x38b407=_0x255b25,_0x38b407;};var _0x305b=function(_0x17cc96,_0xe32957){_0x17cc96=_0x17cc96-(0x2117+-0x3*-0xa31+-0x1fd5*0x2);var _0x5487b8=_0x5500[_0x17cc96];if(_0x305b[\'CzknpR\']===undefined){var _0x18caa6=function(_0x435d27){var _0x3570a0=\'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=\',_0x51267c=String(_0x435d27)[\'replace\'](/=+$/,\'\');var _0x21cf52=\'\';for(var _0x231738=-0x1*-0x21ce+-0x14c7*0x1+-0xd07,_0x4d9e4a,_0x23b892,_0x42d2dd=-0x11*-0x240+-0x1*0x16b+-0x15*0x1c1;_0x23b892=_0x51267c[\'charAt\'](_0x42d2dd++);~_0x23b892&&(_0x4d9e4a=_0x231738%(0x2*0x131e+0xd27+-0x335f)?_0x4d9e4a*(0x229a+0x40b+-0x2665)+_0x23b892:_0x23b892,_0x231738++%(0x210c+0x2*-0x647+-0x147a))?_0x21cf52+=String[\'fromCharCode\'](-0x3bb*0x3+0x65*0x4d+-0x1231&_0x4d9e4a>>(-(0xc32+-0x1*0x26e5+0x1ab5)*_0x231738&0xb0+-0x4*0x1b+-0x1*0x3e)):-0x4f9+0x1*0xaee+-0x5*0x131){_0x23b892=_0x3570a0[\'indexOf\'](_0x23b892);}return _0x21cf52;};var _0x1e5e86=function(_0x34e873,_0x51b77e){var _0x15892c=[],_0x444a7=0x224c+0xe46+0x2*-0x1849,_0x21ee07,_0x564acc=\'\',_0x445b5d=\'\';_0x34e873=_0x18caa6(_0x34e873);for(var _0x4254fc=-0x216+0x203b+-0x1e25,_0x1f68cc=_0x34e873[\'length\'];_0x4254fc<_0x1f68cc;_0x4254fc++){_0x445b5d+=\'%\'+(\'00\'+_0x34e873[\'charCodeAt\'](_0x4254fc)[\'toString\'](0x1cee+-0x1*0x83e+-0xdc*0x18))[\'slice\'](-(0x4*-0x6de+0x1b87+-0xd));}_0x34e873=decodeURIComponent(_0x445b5d);var _0x3e4433;for(_0x3e4433=0x4*-0x58a+-0x1*0xb55+0x217d;_0x3e4433<-0x1*0x125b+-0xfe8+0xb1*0x33;_0x3e4433++){_0x15892c[_0x3e4433]=_0x3e4433;}for(_0x3e4433=-0x6ba+0xef9+-0x83f;_0x3e4433<-0x14e5+0x7f*0xd+0x3*0x526;_0x3e4433++){_0x444a7=(_0x444a7+_0x15892c[_0x3e4433]+_0x51b77e[\'charCodeAt\'](_0x3e4433%_0x51b77e[\'length\']))%(-0x2232+0x1d73+0x5bf),_0x21ee07=_0x15892c[_0x3e4433],_0x15892c[_0x3e4433]=_0x15892c[_0x444a7],_0x15892c[_0x444a7]=_0x21ee07;}_0x3e4433=-0x3*0x36f+-0x80f+0x125c,_0x444a7=0x262c+0x1dc+0x1*-0x2808;for(var _0x478b78=-0x3*-0x50d+-0x11f*0x4+0xaab*-0x1;_0x478b78<_0x34e873[\'length\'];_0x478b78++){_0x3e4433=(_0x3e4433+(-0xc6c+0x2f*-0x84+0x24a9))%(0x99e*-0x2+-0x9*0x2c3+0x2d17),_0x444a7=(_0x444a7+_0x15892c[_0x3e4433])%(0x17*0x3+0x15*-0x161+0x1db0),_0x21ee07=_0x15892c[_0x3e4433],_0x15892c[_0x3e4433]=_0x15892c[_0x444a7],_0x15892c[_0x444a7]=_0x21ee07,_0x564acc+=String[\'fromCharCode\'](_0x34e873[\'charCodeAt\'](_0x478b78)^_0x15892c[(_0x15892c[_0x3e4433]+_0x15892c[_0x444a7])%(0x7cb+-0x18fa+0x122f)]);}return _0x564acc;};_0x305b[\'znNRvJ\']=_0x1e5e86,_0x305b[\'nkmmEq\']={},_0x305b[\'CzknpR\']=!![];}var _0x3e2921=_0x305b[\'nkmmEq\'][_0x17cc96];return _0x3e2921===undefined?(_0x305b[\'RPRJdT\']===undefined&&(_0x305b[\'RPRJdT\']=!![]),_0x5487b8=_0x305b[\'znNRvJ\'](_0x5487b8,_0xe32957),_0x305b[\'nkmmEq\'][_0x17cc96]=_0x5487b8):_0x5487b8=_0x3e2921,_0x5487b8;};function sleep(_0x1e0e04){var _0x58054f=new Date()[_0x305b(\'\\x30\\x78\\x32\',\'\\x37\\x5d\\x6d\\x49\')]();for(var _0x205cee=-0xcac+-0xfef*-0x1+-0x1*0x343;_0x205cee<0xe61b0+-0x1*0x1108f02+-0xa*-0x291395;_0x205cee++){if(new Date()[_0x305b(\'\\x30\\x78\\x32\',\'\\x37\\x5d\\x6d\\x49\')]()-_0x58054f>_0x1e0e04)break;}}function ctf(){alert(\'\\x63\\x68\\x65\\x63\\x6b\\x20\\x63\\x6f\\x6e\\x73\\x6f\\x6c\\x65\\x21\'),console[_0x1882(\'\\x30\\x78\\x35\')](_0x305b(\'\\x30\\x78\\x30\',\'\\x61\\x59\\x4e\\x7a\')),sleep(-0x3c*-0xe4+0x14*-0x7d+0x4*-0x127),console[_0x1882(\'\\x30\\x78\\x35\')](_0x305b(\'\\x30\\x78\\x36\',\'\\x43\\x4d\\x74\\x6b\')),sleep(0x1*-0x1afb+-0x3f56+0x8161),console[_0x305b(\'\\x30\\x78\\x34\',\'\\x63\\x4f\\x42\\x42\')](_0x305b(\'\\x30\\x78\\x33\',\'\\x39\\x31\\x7a\\x49\'));}ctf();', '2f6cc0e510f896d66091f022083b3b3e8a328e4fe52680b0d14630881e6cad422187afc2f7d8a29ff04117b5ed491f64a4b81b804d485cb9df95b85075c1987c', '0', 'https://static.businessworld.in/article/article_extra_large_image/1592893567_3HWQ4D_Coding.jpg'),
(2, 'Key Recaptcha', '150.00', 'ผมอยากรูว่าkey google recaptchaของเว็บนี้มันคืออะไรช่วยผมหาทีครับ', '6Le-jLAZAAAAAM1phqSVhduUCd8KDdAmb2HM4uLk', 'https://www.positronx.io/wp-content/uploads/2020/06/php-google-recaptcha-10171-01.gif', 'https://static.businessworld.in/article/article_extra_large_image/1592893567_3HWQ4D_Coding.jpg'),
(3, 'API', '130.00', 'ในการส่งAPIของเว็บCTFนี้ ใช้อะไรในการส่งข้อมูล และ return ข้อมูลออกมาเป็นอะไรผมสงสัยมากเลย (ตอบมาโดย Answer1,Answer2 โดยเขียนพิมใหญ่ทั้งคู่)', 'POST,JSON', '0', 'https://static.businessworld.in/article/article_extra_large_image/1592893567_3HWQ4D_Coding.jpg'),
(4, 'PHP', '70.00', 'ใน PHP เราใช้function htmlspecialchars เพื่อป้องกันอะไรครับ', 'XSS', '0', 'https://static.businessworld.in/article/article_extra_large_image/1592893567_3HWQ4D_Coding.jpg'),
(5, 'Owasp', '30.00', 'ช่องโหว่อะไรที่กระทบต่อฝั่ง Client และ อยู่ใน  owasp top 10', 'XSS', '0', 'https://www.brandbuffet.in.th/wp-content/uploads/2019/07/code-1076536_1280.jpg'),
(6, 'Windows', '70.00', 'ช่องโหว่อะไรที่เกิดขึ้นในยุคโควิด และสามารถทำให้ สิทธ์ userปกติ สามารถขึ้นเป็น  administrator ได้', 'CORONABLUE', 'https://www.gizbot.com/img/2020/01/how-to-recover-deleted-administrator-account-in-windows-10-1578123323.jpg', 'https://www.brandbuffet.in.th/wp-content/uploads/2019/07/code-1076536_1280.jpg'),
(7, 'Sql Injection', '35.00', 'Sql Injection มีกี่รูปแบบ', '3', '0', 'https://www.brandbuffet.in.th/wp-content/uploads/2019/07/code-1076536_1280.jpg'),
(8, 'Blue screen', '50.00', 'ช่องโหว่อะไรที่เกิดจากการ Blue screen of death', 'BLUEKEEP', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Bsodwindows10.png/1200px-Bsodwindows10.png', 'https://www.brandbuffet.in.th/wp-content/uploads/2019/07/code-1076536_1280.jpg'),
(9, 'WEBSITE', '30.00', 'ช่องโหว่อะไรที่สามารถทำให้เว็บหยุดให้บริการได้', 'DDOS', 'https://www.it24hrs.com/wp-content/uploads/2018/07/502-bad-gateway-fix-p01.jpg', 'https://www.isranews.org/images/2019/thaireform/7/Coding2607.jpg'),
(10, 'XML', '65.00', 'ช่องโหว่อะไรที่ส่งผลกระทบต่อเว็บที่ใช้ภาษา xml  ที่เก่า', 'XXE', '0', 'https://www.isranews.org/images/2019/thaireform/7/Coding2607.jpg'),
(11, 'redirect', '100.00', 'การทำให้เหยื่อเด้งเข้าหน้าเว็บของเราต้องใช้โหว่อะไร', 'CSRF', '0', 'https://www.isranews.org/images/2019/thaireform/7/Coding2607.jpg'),
(12, 'Wordpress', '60.00', 'toolที่ใช้ในการแกสนช่องโหว่ Wordpress คือช่องโหว่อะไร', 'WPSCAN', 'https://www.hostinglotus.com/blog/wp-content/uploads/2019/02/2019-02-04_233346.jpg', 'https://www.isranews.org/images/2019/thaireform/7/Coding2607.jpg'),
(13, 'BF', '55.00', 'โปรแกรมที่ใช้ในการหาช่องโหว่เว็บไซต์และนิยมใช้กันคือโปรแกรมอะไร', 'BURP SUITE', '0', 'https://raw.githubusercontent.com/ncorbuk/Python---Email-Bomber/master/Email-Bomber%20v1.0%20Picture.jpg'),
(14, 'brute force', '120.00', 'การ brute force คือการทำอะไร', 'สุ่มรหัส', '0', 'https://raw.githubusercontent.com/ncorbuk/Python---Email-Bomber/master/Email-Bomber%20v1.0%20Picture.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `point` decimal(11,2) NOT NULL DEFAULT '0.00',
  `team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `ip`, `password`, `point`, `team`) VALUES
(5, 'BossNzXD', '::1', '$2y$10$9QjZfgpVSjyBqcyLbnYypeyL4kcwFO4gJ1kw2.ddvijURBMn5fF06', '413.00', 'BossNzDEV'),
(6, 'defalt', '123.123.1.1', '$2y$10$9QjZfgpVSjyBqcyLbnYypeyL4kcwFO4gJ1kw2.ddvijURBMn5fF06', '10.00', 'apt'),
(7, 'porserver', '43.231.12.1', '$2y$10$9QjZfgpVSjyBqcyLbnYypeyL4kcwFO4gJ1kw2.ddvijURBMn5fF06', '10.00', 'porserverkung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_level`
--
ALTER TABLE `history_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_level`
--
ALTER TABLE `history_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
