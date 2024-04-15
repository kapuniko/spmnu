<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="180x180" href="https://crm.spmnu.kz/vendor/moonshine/logo_spmnu_favicon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="https://crm.spmnu.kz/vendor/moonshine/logo_spmnu_favicon.png">
        <link rel="icon" type="image/png" sizes="16x16" href="https://crm.spmnu.kz/vendor/moonshine/logo_spmnu_favicon.png">

        <title>SPMNU CRM/ERP system</title>


        <style>
            html{
                height: 100%;
                background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
                overflow: hidden;
            }

            #stars {
                width: 1px;
                height: 1px;
                background: transparent;
                box-shadow: 824px 1363px #FFF , 1310px 1714px #FFF , 1937px 1076px #FFF , 487px 818px #FFF , 659px 653px #FFF , 1864px 1218px #FFF , 1833px 447px #FFF , 1979px 29px #FFF , 111px 1483px #FFF , 1758px 1627px #FFF , 1128px 146px #FFF , 1504px 1319px #FFF , 118px 1002px #FFF , 342px 992px #FFF , 830px 673px #FFF , 1276px 902px #FFF , 1183px 1540px #FFF , 1150px 1264px #FFF , 1563px 644px #FFF , 1400px 896px #FFF , 1339px 1267px #FFF , 1537px 859px #FFF , 1990px 819px #FFF , 158px 120px #FFF , 1048px 1212px #FFF , 1603px 1058px #FFF , 252px 701px #FFF , 854px 408px #FFF , 1901px 1639px #FFF , 146px 1506px #FFF , 266px 53px #FFF , 377px 458px #FFF , 584px 1251px #FFF , 707px 1119px #FFF , 1289px 663px #FFF , 609px 1925px #FFF , 728px 703px #FFF , 374px 804px #FFF , 378px 319px #FFF , 1295px 1603px #FFF , 596px 509px #FFF , 501px 1267px #FFF , 1999px 208px #FFF , 599px 5px #FFF , 1639px 1434px #FFF , 616px 1214px #FFF , 298px 762px #FFF , 984px 1987px #FFF , 1939px 478px #FFF , 164px 479px #FFF , 568px 894px #FFF , 1543px 627px #FFF , 1307px 1735px #FFF , 1120px 1344px #FFF , 1342px 637px #FFF , 1789px 1073px #FFF , 918px 991px #FFF , 1210px 1359px #FFF , 545px 72px #FFF , 1837px 351px #FFF , 183px 794px #FFF , 340px 1670px #FFF , 678px 500px #FFF , 773px 778px #FFF , 1287px 1166px #FFF , 1273px 1399px #FFF , 1599px 380px #FFF , 1866px 1110px #FFF , 66px 1354px #FFF , 725px 689px #FFF , 1272px 345px #FFF , 1764px 916px #FFF , 2000px 1485px #FFF , 1812px 1357px #FFF , 1200px 1313px #FFF , 1323px 131px #FFF , 27px 1756px #FFF , 482px 1565px #FFF , 924px 1463px #FFF , 212px 638px #FFF , 1164px 1801px #FFF , 752px 192px #FFF , 353px 1885px #FFF , 240px 193px #FFF , 1422px 1340px #FFF , 550px 1113px #FFF , 976px 495px #FFF , 844px 1538px #FFF , 135px 643px #FFF , 248px 447px #FFF , 616px 1828px #FFF , 964px 1387px #FFF , 687px 132px #FFF , 1643px 226px #FFF , 1305px 1606px #FFF , 1855px 918px #FFF , 779px 292px #FFF , 1965px 1798px #FFF , 222px 711px #FFF , 630px 1505px #FFF , 605px 711px #FFF , 991px 319px #FFF , 1758px 1367px #FFF , 1806px 747px #FFF , 1831px 833px #FFF , 445px 172px #FFF , 184px 240px #FFF , 1315px 1762px #FFF , 1320px 1209px #FFF , 1515px 323px #FFF , 390px 1512px #FFF , 755px 688px #FFF , 1233px 799px #FFF , 1959px 536px #FFF , 1448px 1866px #FFF , 355px 567px #FFF , 526px 611px #FFF , 92px 598px #FFF , 1578px 1789px #FFF , 818px 299px #FFF , 1217px 1267px #FFF , 1706px 1819px #FFF , 1566px 1433px #FFF , 849px 1571px #FFF , 134px 172px #FFF , 1604px 286px #FFF , 1872px 1703px #FFF , 1368px 828px #FFF , 289px 797px #FFF , 871px 723px #FFF , 210px 913px #FFF , 92px 1747px #FFF , 530px 496px #FFF , 114px 436px #FFF , 263px 1372px #FFF , 779px 1211px #FFF , 1606px 1025px #FFF , 1384px 21px #FFF , 103px 503px #FFF , 1300px 1283px #FFF , 1599px 909px #FFF , 775px 782px #FFF , 425px 594px #FFF , 17px 654px #FFF , 1895px 1432px #FFF , 1452px 1438px #FFF , 1254px 1985px #FFF , 33px 997px #FFF , 1514px 937px #FFF , 1502px 1548px #FFF , 162px 537px #FFF , 264px 995px #FFF , 1718px 148px #FFF , 1424px 946px #FFF , 1234px 1609px #FFF , 173px 1954px #FFF , 615px 1309px #FFF , 1467px 1275px #FFF , 1226px 671px #FFF , 231px 681px #FFF , 826px 1883px #FFF , 437px 1163px #FFF , 689px 1880px #FFF , 1964px 1000px #FFF , 143px 924px #FFF , 1295px 939px #FFF , 1817px 1599px #FFF , 555px 1226px #FFF , 763px 1525px #FFF , 1670px 1159px #FFF , 69px 887px #FFF , 250px 975px #FFF , 1983px 216px #FFF , 933px 1453px #FFF , 32px 1621px #FFF , 878px 271px #FFF , 442px 704px #FFF , 282px 910px #FFF , 110px 123px #FFF , 1764px 1752px #FFF , 333px 401px #FFF , 863px 721px #FFF , 527px 145px #FFF , 288px 1187px #FFF , 634px 938px #FFF , 1304px 663px #FFF , 26px 46px #FFF , 1327px 1313px #FFF , 1725px 1368px #FFF , 897px 214px #FFF , 648px 831px #FFF , 1029px 664px #FFF , 1098px 1081px #FFF , 1239px 1483px #FFF , 448px 1805px #FFF , 1830px 939px #FFF , 1541px 1518px #FFF , 1551px 88px #FFF , 1442px 57px #FFF , 443px 571px #FFF , 1819px 360px #FFF , 1904px 154px #FFF , 223px 336px #FFF , 185px 368px #FFF , 714px 201px #FFF , 10px 1470px #FFF , 1995px 549px #FFF , 877px 1043px #FFF , 1504px 40px #FFF , 372px 984px #FFF , 890px 202px #FFF , 1311px 14px #FFF , 1366px 1492px #FFF , 1541px 1106px #FFF , 469px 1998px #FFF , 1893px 1460px #FFF , 1338px 219px #FFF , 1191px 13px #FFF , 328px 1012px #FFF , 1103px 760px #FFF , 1131px 1437px #FFF , 863px 944px #FFF , 1294px 1892px #FFF , 1590px 732px #FFF , 1970px 539px #FFF , 1558px 112px #FFF , 348px 488px #FFF , 1742px 1111px #FFF , 1963px 775px #FFF , 477px 1466px #FFF , 458px 390px #FFF , 727px 1431px #FFF , 971px 175px #FFF , 1744px 1814px #FFF , 1854px 1891px #FFF , 1037px 735px #FFF , 649px 1421px #FFF , 1071px 1498px #FFF , 102px 41px #FFF , 1376px 21px #FFF , 1465px 1027px #FFF , 545px 1396px #FFF , 538px 188px #FFF , 1541px 1505px #FFF , 1557px 1157px #FFF , 1872px 1556px #FFF , 1788px 1346px #FFF , 759px 613px #FFF , 230px 560px #FFF , 1161px 1942px #FFF , 1196px 624px #FFF , 1218px 1965px #FFF , 290px 1635px #FFF , 899px 339px #FFF , 552px 1242px #FFF , 952px 1351px #FFF , 640px 292px #FFF , 1708px 892px #FFF , 1042px 97px #FFF , 142px 1793px #FFF , 565px 316px #FFF , 1190px 880px #FFF , 1639px 759px #FFF , 1503px 1857px #FFF , 75px 1353px #FFF , 1932px 1875px #FFF , 1717px 372px #FFF , 1100px 1101px #FFF , 392px 310px #FFF , 450px 708px #FFF , 726px 1693px #FFF , 176px 86px #FFF , 206px 1167px #FFF , 666px 1171px #FFF , 277px 320px #FFF , 159px 1392px #FFF , 1918px 223px #FFF , 924px 160px #FFF , 430px 1193px #FFF , 39px 1422px #FFF , 673px 939px #FFF , 1205px 669px #FFF , 301px 131px #FFF , 590px 547px #FFF , 1052px 1841px #FFF , 1281px 1074px #FFF , 1555px 77px #FFF , 1113px 647px #FFF , 423px 209px #FFF , 666px 676px #FFF , 1413px 351px #FFF , 863px 1849px #FFF , 360px 766px #FFF , 1791px 1177px #FFF , 879px 276px #FFF , 1972px 1847px #FFF , 1337px 1590px #FFF , 1782px 1923px #FFF , 691px 1584px #FFF , 626px 318px #FFF , 188px 1545px #FFF , 193px 1908px #FFF , 459px 1782px #FFF , 865px 661px #FFF , 1243px 1774px #FFF , 964px 263px #FFF , 1298px 1820px #FFF , 762px 1760px #FFF , 1408px 118px #FFF , 1510px 823px #FFF , 920px 1317px #FFF , 822px 235px #FFF , 586px 619px #FFF , 784px 706px #FFF , 778px 189px #FFF , 1219px 158px #FFF , 282px 306px #FFF , 336px 758px #FFF , 225px 1839px #FFF , 125px 1996px #FFF , 1601px 174px #FFF , 832px 159px #FFF , 1201px 1450px #FFF , 955px 857px #FFF , 328px 1500px #FFF , 449px 640px #FFF , 642px 953px #FFF , 723px 1359px #FFF , 1446px 296px #FFF , 899px 7px #FFF , 277px 881px #FFF , 1774px 1485px #FFF , 713px 1392px #FFF , 401px 464px #FFF , 520px 890px #FFF , 1192px 1181px #FFF , 642px 972px #FFF , 1865px 361px #FFF , 749px 205px #FFF , 939px 1125px #FFF , 899px 1926px #FFF , 384px 1782px #FFF , 1172px 1134px #FFF , 1685px 848px #FFF , 909px 836px #FFF , 1131px 1156px #FFF , 1393px 1304px #FFF , 1285px 502px #FFF , 645px 695px #FFF , 360px 212px #FFF , 176px 1760px #FFF , 1188px 1463px #FFF , 1762px 190px #FFF , 729px 458px #FFF , 1724px 1519px #FFF , 759px 203px #FFF , 1992px 1669px #FFF , 710px 766px #FFF , 1640px 1248px #FFF , 485px 1815px #FFF , 1313px 1855px #FFF , 1641px 859px #FFF , 1813px 1702px #FFF , 1084px 1945px #FFF , 623px 1276px #FFF , 1244px 1223px #FFF , 672px 1386px #FFF , 1397px 1692px #FFF , 1510px 579px #FFF , 223px 1561px #FFF , 1367px 837px #FFF , 1166px 1758px #FFF , 1309px 676px #FFF , 1150px 122px #FFF , 532px 1073px #FFF , 609px 589px #FFF , 1768px 1726px #FFF , 1624px 757px #FFF , 530px 1551px #FFF , 1425px 1196px #FFF , 1139px 1419px #FFF , 1924px 36px #FFF , 715px 1222px #FFF , 1483px 1823px #FFF , 1592px 1361px #FFF , 860px 380px #FFF , 922px 961px #FFF , 866px 1775px #FFF , 1403px 1068px #FFF , 894px 1364px #FFF , 1483px 589px #FFF , 114px 476px #FFF , 109px 1746px #FFF , 1628px 1736px #FFF , 74px 928px #FFF , 1846px 1996px #FFF , 1862px 582px #FFF , 76px 1664px #FFF , 1654px 1778px #FFF , 1384px 1473px #FFF , 1903px 1342px #FFF , 78px 689px #FFF , 1480px 21px #FFF , 1843px 216px #FFF , 749px 1968px #FFF , 210px 1120px #FFF , 675px 1787px #FFF , 1990px 1165px #FFF , 1776px 1752px #FFF , 450px 1849px #FFF , 233px 1774px #FFF , 475px 75px #FFF , 1818px 1627px #FFF , 36px 1431px #FFF , 1409px 1296px #FFF , 274px 692px #FFF , 429px 1582px #FFF , 1514px 773px #FFF , 1648px 268px #FFF , 28px 296px #FFF , 69px 1172px #FFF , 391px 1865px #FFF , 1842px 1388px #FFF , 1955px 308px #FFF , 1659px 1405px #FFF , 893px 1152px #FFF , 1179px 827px #FFF , 608px 1689px #FFF , 1407px 1058px #FFF , 465px 1858px #FFF , 1976px 1281px #FFF , 1818px 64px #FFF , 789px 787px #FFF , 375px 748px #FFF , 1825px 1800px #FFF , 295px 917px #FFF , 383px 878px #FFF , 45px 577px #FFF , 103px 218px #FFF , 231px 1086px #FFF , 1512px 1859px #FFF , 701px 305px #FFF , 1090px 1424px #FFF , 1448px 217px #FFF , 1964px 1174px #FFF , 997px 87px #FFF , 459px 1944px #FFF , 647px 860px #FFF , 1491px 1846px #FFF , 1396px 1379px #FFF , 1805px 25px #FFF , 317px 1415px #FFF , 606px 1461px #FFF , 430px 767px #FFF , 1920px 931px #FFF , 830px 485px #FFF , 69px 487px #FFF , 922px 1844px #FFF , 375px 209px #FFF , 264px 210px #FFF , 1179px 442px #FFF , 456px 1745px #FFF , 1340px 1704px #FFF , 102px 1645px #FFF , 1671px 1709px #FFF , 1058px 1183px #FFF , 893px 1902px #FFF , 1287px 324px #FFF , 962px 149px #FFF , 1451px 496px #FFF , 15px 1182px #FFF , 964px 439px #FFF , 692px 806px #FFF , 888px 1321px #FFF , 290px 471px #FFF , 1602px 1373px #FFF , 1884px 1397px #FFF , 326px 921px #FFF , 864px 1470px #FFF , 1027px 1344px #FFF , 772px 1471px #FFF , 1317px 148px #FFF , 842px 1560px #FFF , 251px 1296px #FFF , 550px 1490px #FFF , 665px 1086px #FFF , 1307px 1461px #FFF , 1001px 51px #FFF , 1576px 323px #FFF , 596px 1268px #FFF , 326px 289px #FFF , 61px 676px #FFF , 229px 119px #FFF , 158px 349px #FFF , 1458px 12px #FFF , 1037px 570px #FFF , 986px 1950px #FFF , 1750px 323px #FFF , 406px 505px #FFF , 1934px 779px #FFF , 46px 1535px #FFF , 1971px 1292px #FFF , 1672px 980px #FFF , 1088px 1394px #FFF , 675px 1026px #FFF , 272px 763px #FFF , 1741px 184px #FFF , 697px 1564px #FFF , 1359px 203px #FFF , 1565px 236px #FFF , 1751px 899px #FFF , 1746px 55px #FFF , 1988px 1665px #FFF , 1683px 785px #FFF , 84px 1041px #FFF , 220px 1061px #FFF , 1264px 765px #FFF , 1985px 1100px #FFF , 1509px 555px #FFF , 836px 1860px #FFF , 1141px 107px #FFF , 1192px 1203px #FFF , 477px 1042px #FFF , 1818px 22px #FFF , 259px 855px #FFF , 1802px 188px #FFF , 842px 84px #FFF , 391px 506px #FFF , 1821px 1054px #FFF , 329px 1936px #FFF , 2px 1427px #FFF , 1542px 583px #FFF , 1949px 615px #FFF , 449px 716px #FFF , 935px 47px #FFF , 99px 1315px #FFF , 873px 362px #FFF , 637px 251px #FFF , 1347px 1784px #FFF , 1319px 62px #FFF , 230px 392px #FFF , 1365px 1326px #FFF , 1113px 33px #FFF , 634px 749px #FFF , 1279px 308px #FFF , 1205px 1272px #FFF , 1248px 1555px #FFF , 982px 1210px #FFF , 61px 1497px #FFF , 999px 1191px #FFF , 837px 898px #FFF , 1683px 1537px #FFF , 1185px 1729px #FFF , 1929px 1470px #FFF , 181px 313px #FFF , 1215px 1706px #FFF , 1102px 84px #FFF , 1931px 101px #FFF , 1787px 854px #FFF , 160px 1332px #FFF , 377px 13px #FFF , 1202px 59px #FFF , 450px 1161px #FFF , 209px 29px #FFF , 1955px 1567px #FFF , 1675px 400px #FFF , 1919px 1921px #FFF , 518px 712px #FFF , 1488px 1541px #FFF , 1763px 1028px #FFF , 1936px 1230px #FFF , 3px 473px #FFF , 1378px 109px #FFF , 1829px 1620px #FFF , 210px 902px #FFF , 1893px 511px #FFF , 470px 1093px #FFF , 1715px 421px #FFF , 1063px 244px #FFF , 454px 212px #FFF , 268px 917px #FFF , 1596px 1165px #FFF , 1854px 534px #FFF , 1449px 1119px #FFF , 308px 1469px #FFF , 717px 1451px #FFF , 889px 1212px #FFF , 1804px 874px #FFF , 794px 214px #FFF , 1231px 1780px #FFF , 1036px 793px #FFF , 719px 257px #FFF , 1289px 1805px #FFF , 1081px 797px #FFF , 332px 1485px #FFF , 1935px 1553px #FFF , 309px 65px #FFF , 993px 477px #FFF , 834px 1546px #FFF , 1600px 1910px #FFF , 1414px 1849px #FFF , 1390px 1226px #FFF , 1524px 1587px #FFF , 1556px 523px #FFF , 45px 1767px #FFF , 397px 879px #FFF , 62px 1990px #FFF , 1839px 1432px #FFF , 51px 1805px #FFF , 180px 850px #FFF , 850px 1296px #FFF , 239px 1428px #FFF , 1064px 769px #FFF , 155px 1231px #FFF , 1319px 1566px #FFF , 829px 456px #FFF , 1676px 1297px #FFF , 1692px 935px #FFF , 1557px 1755px #FFF , 1723px 291px #FFF , 1777px 405px #FFF , 607px 1478px #FFF , 684px 1753px #FFF , 939px 1256px #FFF , 1694px 1549px #FFF , 404px 964px #FFF , 647px 404px #FFF , 1256px 161px #FFF , 243px 1952px #FFF , 519px 1478px #FFF , 861px 1259px #FFF , 214px 641px #FFF , 1006px 136px #FFF , 1915px 480px #FFF , 1362px 1866px #FFF , 104px 1838px #FFF , 1477px 587px #FFF , 1591px 205px #FFF , 470px 1470px #FFF , 710px 372px #FFF , 686px 824px #FFF , 543px 327px #FFF , 1038px 1924px #FFF , 1576px 1937px #FFF , 1346px 677px #FFF , 190px 103px #FFF , 483px 347px #FFF , 366px 394px #FFF , 1822px 60px #FFF , 1208px 225px #FFF , 1496px 776px #FFF , 673px 860px #FFF , 606px 1782px #FFF , 115px 1855px #FFF , 1562px 1150px #FFF , 449px 337px #FFF , 235px 1132px #FFF , 1533px 1531px #FFF , 986px 848px #FFF , 133px 1625px #FFF , 1011px 1011px #FFF , 9px 524px #FFF , 1820px 1688px #FFF , 954px 760px #FFF , 1580px 1026px #FFF , 637px 120px #FFF , 34px 1131px #FFF , 1377px 1985px #FFF , 599px 1542px #FFF , 1798px 554px #FFF , 1718px 1022px #FFF , 275px 64px #FFF , 1761px 1533px #FFF , 651px 1053px #FFF , 1849px 1117px #FFF , 261px 1601px #FFF , 675px 1495px #FFF , 913px 703px #FFF , 1124px 257px #FFF , 1418px 1592px #FFF , 943px 898px #FFF , 1309px 1874px #FFF , 558px 1966px #FFF , 248px 1586px #FFF , 1048px 1559px #FFF , 1932px 1167px #FFF , 398px 238px #FFF , 482px 1717px #FFF , 1660px 962px #FFF , 1884px 1687px #FFF , 1816px 1219px #FFF , 402px 979px #FFF , 24px 1356px #FFF , 1592px 645px #FFF , 98px 1406px #FFF , 1461px 467px #FFF , 1503px 698px #FFF , 1712px 1177px #FFF , 593px 575px #FFF , 1347px 1224px #FFF;
                animation: animStar 50s linear infinite;
            }
            #stars:after {
                content: " ";
                position: absolute;
                top: 2000px;
                width: 1px;
                height: 1px;
                background: transparent;
                box-shadow: 824px 1363px #FFF , 1310px 1714px #FFF , 1937px 1076px #FFF , 487px 818px #FFF , 659px 653px #FFF , 1864px 1218px #FFF , 1833px 447px #FFF , 1979px 29px #FFF , 111px 1483px #FFF , 1758px 1627px #FFF , 1128px 146px #FFF , 1504px 1319px #FFF , 118px 1002px #FFF , 342px 992px #FFF , 830px 673px #FFF , 1276px 902px #FFF , 1183px 1540px #FFF , 1150px 1264px #FFF , 1563px 644px #FFF , 1400px 896px #FFF , 1339px 1267px #FFF , 1537px 859px #FFF , 1990px 819px #FFF , 158px 120px #FFF , 1048px 1212px #FFF , 1603px 1058px #FFF , 252px 701px #FFF , 854px 408px #FFF , 1901px 1639px #FFF , 146px 1506px #FFF , 266px 53px #FFF , 377px 458px #FFF , 584px 1251px #FFF , 707px 1119px #FFF , 1289px 663px #FFF , 609px 1925px #FFF , 728px 703px #FFF , 374px 804px #FFF , 378px 319px #FFF , 1295px 1603px #FFF , 596px 509px #FFF , 501px 1267px #FFF , 1999px 208px #FFF , 599px 5px #FFF , 1639px 1434px #FFF , 616px 1214px #FFF , 298px 762px #FFF , 984px 1987px #FFF , 1939px 478px #FFF , 164px 479px #FFF , 568px 894px #FFF , 1543px 627px #FFF , 1307px 1735px #FFF , 1120px 1344px #FFF , 1342px 637px #FFF , 1789px 1073px #FFF , 918px 991px #FFF , 1210px 1359px #FFF , 545px 72px #FFF , 1837px 351px #FFF , 183px 794px #FFF , 340px 1670px #FFF , 678px 500px #FFF , 773px 778px #FFF , 1287px 1166px #FFF , 1273px 1399px #FFF , 1599px 380px #FFF , 1866px 1110px #FFF , 66px 1354px #FFF , 725px 689px #FFF , 1272px 345px #FFF , 1764px 916px #FFF , 2000px 1485px #FFF , 1812px 1357px #FFF , 1200px 1313px #FFF , 1323px 131px #FFF , 27px 1756px #FFF , 482px 1565px #FFF , 924px 1463px #FFF , 212px 638px #FFF , 1164px 1801px #FFF , 752px 192px #FFF , 353px 1885px #FFF , 240px 193px #FFF , 1422px 1340px #FFF , 550px 1113px #FFF , 976px 495px #FFF , 844px 1538px #FFF , 135px 643px #FFF , 248px 447px #FFF , 616px 1828px #FFF , 964px 1387px #FFF , 687px 132px #FFF , 1643px 226px #FFF , 1305px 1606px #FFF , 1855px 918px #FFF , 779px 292px #FFF , 1965px 1798px #FFF , 222px 711px #FFF , 630px 1505px #FFF , 605px 711px #FFF , 991px 319px #FFF , 1758px 1367px #FFF , 1806px 747px #FFF , 1831px 833px #FFF , 445px 172px #FFF , 184px 240px #FFF , 1315px 1762px #FFF , 1320px 1209px #FFF , 1515px 323px #FFF , 390px 1512px #FFF , 755px 688px #FFF , 1233px 799px #FFF , 1959px 536px #FFF , 1448px 1866px #FFF , 355px 567px #FFF , 526px 611px #FFF , 92px 598px #FFF , 1578px 1789px #FFF , 818px 299px #FFF , 1217px 1267px #FFF , 1706px 1819px #FFF , 1566px 1433px #FFF , 849px 1571px #FFF , 134px 172px #FFF , 1604px 286px #FFF , 1872px 1703px #FFF , 1368px 828px #FFF , 289px 797px #FFF , 871px 723px #FFF , 210px 913px #FFF , 92px 1747px #FFF , 530px 496px #FFF , 114px 436px #FFF , 263px 1372px #FFF , 779px 1211px #FFF , 1606px 1025px #FFF , 1384px 21px #FFF , 103px 503px #FFF , 1300px 1283px #FFF , 1599px 909px #FFF , 775px 782px #FFF , 425px 594px #FFF , 17px 654px #FFF , 1895px 1432px #FFF , 1452px 1438px #FFF , 1254px 1985px #FFF , 33px 997px #FFF , 1514px 937px #FFF , 1502px 1548px #FFF , 162px 537px #FFF , 264px 995px #FFF , 1718px 148px #FFF , 1424px 946px #FFF , 1234px 1609px #FFF , 173px 1954px #FFF , 615px 1309px #FFF , 1467px 1275px #FFF , 1226px 671px #FFF , 231px 681px #FFF , 826px 1883px #FFF , 437px 1163px #FFF , 689px 1880px #FFF , 1964px 1000px #FFF , 143px 924px #FFF , 1295px 939px #FFF , 1817px 1599px #FFF , 555px 1226px #FFF , 763px 1525px #FFF , 1670px 1159px #FFF , 69px 887px #FFF , 250px 975px #FFF , 1983px 216px #FFF , 933px 1453px #FFF , 32px 1621px #FFF , 878px 271px #FFF , 442px 704px #FFF , 282px 910px #FFF , 110px 123px #FFF , 1764px 1752px #FFF , 333px 401px #FFF , 863px 721px #FFF , 527px 145px #FFF , 288px 1187px #FFF , 634px 938px #FFF , 1304px 663px #FFF , 26px 46px #FFF , 1327px 1313px #FFF , 1725px 1368px #FFF , 897px 214px #FFF , 648px 831px #FFF , 1029px 664px #FFF , 1098px 1081px #FFF , 1239px 1483px #FFF , 448px 1805px #FFF , 1830px 939px #FFF , 1541px 1518px #FFF , 1551px 88px #FFF , 1442px 57px #FFF , 443px 571px #FFF , 1819px 360px #FFF , 1904px 154px #FFF , 223px 336px #FFF , 185px 368px #FFF , 714px 201px #FFF , 10px 1470px #FFF , 1995px 549px #FFF , 877px 1043px #FFF , 1504px 40px #FFF , 372px 984px #FFF , 890px 202px #FFF , 1311px 14px #FFF , 1366px 1492px #FFF , 1541px 1106px #FFF , 469px 1998px #FFF , 1893px 1460px #FFF , 1338px 219px #FFF , 1191px 13px #FFF , 328px 1012px #FFF , 1103px 760px #FFF , 1131px 1437px #FFF , 863px 944px #FFF , 1294px 1892px #FFF , 1590px 732px #FFF , 1970px 539px #FFF , 1558px 112px #FFF , 348px 488px #FFF , 1742px 1111px #FFF , 1963px 775px #FFF , 477px 1466px #FFF , 458px 390px #FFF , 727px 1431px #FFF , 971px 175px #FFF , 1744px 1814px #FFF , 1854px 1891px #FFF , 1037px 735px #FFF , 649px 1421px #FFF , 1071px 1498px #FFF , 102px 41px #FFF , 1376px 21px #FFF , 1465px 1027px #FFF , 545px 1396px #FFF , 538px 188px #FFF , 1541px 1505px #FFF , 1557px 1157px #FFF , 1872px 1556px #FFF , 1788px 1346px #FFF , 759px 613px #FFF , 230px 560px #FFF , 1161px 1942px #FFF , 1196px 624px #FFF , 1218px 1965px #FFF , 290px 1635px #FFF , 899px 339px #FFF , 552px 1242px #FFF , 952px 1351px #FFF , 640px 292px #FFF , 1708px 892px #FFF , 1042px 97px #FFF , 142px 1793px #FFF , 565px 316px #FFF , 1190px 880px #FFF , 1639px 759px #FFF , 1503px 1857px #FFF , 75px 1353px #FFF , 1932px 1875px #FFF , 1717px 372px #FFF , 1100px 1101px #FFF , 392px 310px #FFF , 450px 708px #FFF , 726px 1693px #FFF , 176px 86px #FFF , 206px 1167px #FFF , 666px 1171px #FFF , 277px 320px #FFF , 159px 1392px #FFF , 1918px 223px #FFF , 924px 160px #FFF , 430px 1193px #FFF , 39px 1422px #FFF , 673px 939px #FFF , 1205px 669px #FFF , 301px 131px #FFF , 590px 547px #FFF , 1052px 1841px #FFF , 1281px 1074px #FFF , 1555px 77px #FFF , 1113px 647px #FFF , 423px 209px #FFF , 666px 676px #FFF , 1413px 351px #FFF , 863px 1849px #FFF , 360px 766px #FFF , 1791px 1177px #FFF , 879px 276px #FFF , 1972px 1847px #FFF , 1337px 1590px #FFF , 1782px 1923px #FFF , 691px 1584px #FFF , 626px 318px #FFF , 188px 1545px #FFF , 193px 1908px #FFF , 459px 1782px #FFF , 865px 661px #FFF , 1243px 1774px #FFF , 964px 263px #FFF , 1298px 1820px #FFF , 762px 1760px #FFF , 1408px 118px #FFF , 1510px 823px #FFF , 920px 1317px #FFF , 822px 235px #FFF , 586px 619px #FFF , 784px 706px #FFF , 778px 189px #FFF , 1219px 158px #FFF , 282px 306px #FFF , 336px 758px #FFF , 225px 1839px #FFF , 125px 1996px #FFF , 1601px 174px #FFF , 832px 159px #FFF , 1201px 1450px #FFF , 955px 857px #FFF , 328px 1500px #FFF , 449px 640px #FFF , 642px 953px #FFF , 723px 1359px #FFF , 1446px 296px #FFF , 899px 7px #FFF , 277px 881px #FFF , 1774px 1485px #FFF , 713px 1392px #FFF , 401px 464px #FFF , 520px 890px #FFF , 1192px 1181px #FFF , 642px 972px #FFF , 1865px 361px #FFF , 749px 205px #FFF , 939px 1125px #FFF , 899px 1926px #FFF , 384px 1782px #FFF , 1172px 1134px #FFF , 1685px 848px #FFF , 909px 836px #FFF , 1131px 1156px #FFF , 1393px 1304px #FFF , 1285px 502px #FFF , 645px 695px #FFF , 360px 212px #FFF , 176px 1760px #FFF , 1188px 1463px #FFF , 1762px 190px #FFF , 729px 458px #FFF , 1724px 1519px #FFF , 759px 203px #FFF , 1992px 1669px #FFF , 710px 766px #FFF , 1640px 1248px #FFF , 485px 1815px #FFF , 1313px 1855px #FFF , 1641px 859px #FFF , 1813px 1702px #FFF , 1084px 1945px #FFF , 623px 1276px #FFF , 1244px 1223px #FFF , 672px 1386px #FFF , 1397px 1692px #FFF , 1510px 579px #FFF , 223px 1561px #FFF , 1367px 837px #FFF , 1166px 1758px #FFF , 1309px 676px #FFF , 1150px 122px #FFF , 532px 1073px #FFF , 609px 589px #FFF , 1768px 1726px #FFF , 1624px 757px #FFF , 530px 1551px #FFF , 1425px 1196px #FFF , 1139px 1419px #FFF , 1924px 36px #FFF , 715px 1222px #FFF , 1483px 1823px #FFF , 1592px 1361px #FFF , 860px 380px #FFF , 922px 961px #FFF , 866px 1775px #FFF , 1403px 1068px #FFF , 894px 1364px #FFF , 1483px 589px #FFF , 114px 476px #FFF , 109px 1746px #FFF , 1628px 1736px #FFF , 74px 928px #FFF , 1846px 1996px #FFF , 1862px 582px #FFF , 76px 1664px #FFF , 1654px 1778px #FFF , 1384px 1473px #FFF , 1903px 1342px #FFF , 78px 689px #FFF , 1480px 21px #FFF , 1843px 216px #FFF , 749px 1968px #FFF , 210px 1120px #FFF , 675px 1787px #FFF , 1990px 1165px #FFF , 1776px 1752px #FFF , 450px 1849px #FFF , 233px 1774px #FFF , 475px 75px #FFF , 1818px 1627px #FFF , 36px 1431px #FFF , 1409px 1296px #FFF , 274px 692px #FFF , 429px 1582px #FFF , 1514px 773px #FFF , 1648px 268px #FFF , 28px 296px #FFF , 69px 1172px #FFF , 391px 1865px #FFF , 1842px 1388px #FFF , 1955px 308px #FFF , 1659px 1405px #FFF , 893px 1152px #FFF , 1179px 827px #FFF , 608px 1689px #FFF , 1407px 1058px #FFF , 465px 1858px #FFF , 1976px 1281px #FFF , 1818px 64px #FFF , 789px 787px #FFF , 375px 748px #FFF , 1825px 1800px #FFF , 295px 917px #FFF , 383px 878px #FFF , 45px 577px #FFF , 103px 218px #FFF , 231px 1086px #FFF , 1512px 1859px #FFF , 701px 305px #FFF , 1090px 1424px #FFF , 1448px 217px #FFF , 1964px 1174px #FFF , 997px 87px #FFF , 459px 1944px #FFF , 647px 860px #FFF , 1491px 1846px #FFF , 1396px 1379px #FFF , 1805px 25px #FFF , 317px 1415px #FFF , 606px 1461px #FFF , 430px 767px #FFF , 1920px 931px #FFF , 830px 485px #FFF , 69px 487px #FFF , 922px 1844px #FFF , 375px 209px #FFF , 264px 210px #FFF , 1179px 442px #FFF , 456px 1745px #FFF , 1340px 1704px #FFF , 102px 1645px #FFF , 1671px 1709px #FFF , 1058px 1183px #FFF , 893px 1902px #FFF , 1287px 324px #FFF , 962px 149px #FFF , 1451px 496px #FFF , 15px 1182px #FFF , 964px 439px #FFF , 692px 806px #FFF , 888px 1321px #FFF , 290px 471px #FFF , 1602px 1373px #FFF , 1884px 1397px #FFF , 326px 921px #FFF , 864px 1470px #FFF , 1027px 1344px #FFF , 772px 1471px #FFF , 1317px 148px #FFF , 842px 1560px #FFF , 251px 1296px #FFF , 550px 1490px #FFF , 665px 1086px #FFF , 1307px 1461px #FFF , 1001px 51px #FFF , 1576px 323px #FFF , 596px 1268px #FFF , 326px 289px #FFF , 61px 676px #FFF , 229px 119px #FFF , 158px 349px #FFF , 1458px 12px #FFF , 1037px 570px #FFF , 986px 1950px #FFF , 1750px 323px #FFF , 406px 505px #FFF , 1934px 779px #FFF , 46px 1535px #FFF , 1971px 1292px #FFF , 1672px 980px #FFF , 1088px 1394px #FFF , 675px 1026px #FFF , 272px 763px #FFF , 1741px 184px #FFF , 697px 1564px #FFF , 1359px 203px #FFF , 1565px 236px #FFF , 1751px 899px #FFF , 1746px 55px #FFF , 1988px 1665px #FFF , 1683px 785px #FFF , 84px 1041px #FFF , 220px 1061px #FFF , 1264px 765px #FFF , 1985px 1100px #FFF , 1509px 555px #FFF , 836px 1860px #FFF , 1141px 107px #FFF , 1192px 1203px #FFF , 477px 1042px #FFF , 1818px 22px #FFF , 259px 855px #FFF , 1802px 188px #FFF , 842px 84px #FFF , 391px 506px #FFF , 1821px 1054px #FFF , 329px 1936px #FFF , 2px 1427px #FFF , 1542px 583px #FFF , 1949px 615px #FFF , 449px 716px #FFF , 935px 47px #FFF , 99px 1315px #FFF , 873px 362px #FFF , 637px 251px #FFF , 1347px 1784px #FFF , 1319px 62px #FFF , 230px 392px #FFF , 1365px 1326px #FFF , 1113px 33px #FFF , 634px 749px #FFF , 1279px 308px #FFF , 1205px 1272px #FFF , 1248px 1555px #FFF , 982px 1210px #FFF , 61px 1497px #FFF , 999px 1191px #FFF , 837px 898px #FFF , 1683px 1537px #FFF , 1185px 1729px #FFF , 1929px 1470px #FFF , 181px 313px #FFF , 1215px 1706px #FFF , 1102px 84px #FFF , 1931px 101px #FFF , 1787px 854px #FFF , 160px 1332px #FFF , 377px 13px #FFF , 1202px 59px #FFF , 450px 1161px #FFF , 209px 29px #FFF , 1955px 1567px #FFF , 1675px 400px #FFF , 1919px 1921px #FFF , 518px 712px #FFF , 1488px 1541px #FFF , 1763px 1028px #FFF , 1936px 1230px #FFF , 3px 473px #FFF , 1378px 109px #FFF , 1829px 1620px #FFF , 210px 902px #FFF , 1893px 511px #FFF , 470px 1093px #FFF , 1715px 421px #FFF , 1063px 244px #FFF , 454px 212px #FFF , 268px 917px #FFF , 1596px 1165px #FFF , 1854px 534px #FFF , 1449px 1119px #FFF , 308px 1469px #FFF , 717px 1451px #FFF , 889px 1212px #FFF , 1804px 874px #FFF , 794px 214px #FFF , 1231px 1780px #FFF , 1036px 793px #FFF , 719px 257px #FFF , 1289px 1805px #FFF , 1081px 797px #FFF , 332px 1485px #FFF , 1935px 1553px #FFF , 309px 65px #FFF , 993px 477px #FFF , 834px 1546px #FFF , 1600px 1910px #FFF , 1414px 1849px #FFF , 1390px 1226px #FFF , 1524px 1587px #FFF , 1556px 523px #FFF , 45px 1767px #FFF , 397px 879px #FFF , 62px 1990px #FFF , 1839px 1432px #FFF , 51px 1805px #FFF , 180px 850px #FFF , 850px 1296px #FFF , 239px 1428px #FFF , 1064px 769px #FFF , 155px 1231px #FFF , 1319px 1566px #FFF , 829px 456px #FFF , 1676px 1297px #FFF , 1692px 935px #FFF , 1557px 1755px #FFF , 1723px 291px #FFF , 1777px 405px #FFF , 607px 1478px #FFF , 684px 1753px #FFF , 939px 1256px #FFF , 1694px 1549px #FFF , 404px 964px #FFF , 647px 404px #FFF , 1256px 161px #FFF , 243px 1952px #FFF , 519px 1478px #FFF , 861px 1259px #FFF , 214px 641px #FFF , 1006px 136px #FFF , 1915px 480px #FFF , 1362px 1866px #FFF , 104px 1838px #FFF , 1477px 587px #FFF , 1591px 205px #FFF , 470px 1470px #FFF , 710px 372px #FFF , 686px 824px #FFF , 543px 327px #FFF , 1038px 1924px #FFF , 1576px 1937px #FFF , 1346px 677px #FFF , 190px 103px #FFF , 483px 347px #FFF , 366px 394px #FFF , 1822px 60px #FFF , 1208px 225px #FFF , 1496px 776px #FFF , 673px 860px #FFF , 606px 1782px #FFF , 115px 1855px #FFF , 1562px 1150px #FFF , 449px 337px #FFF , 235px 1132px #FFF , 1533px 1531px #FFF , 986px 848px #FFF , 133px 1625px #FFF , 1011px 1011px #FFF , 9px 524px #FFF , 1820px 1688px #FFF , 954px 760px #FFF , 1580px 1026px #FFF , 637px 120px #FFF , 34px 1131px #FFF , 1377px 1985px #FFF , 599px 1542px #FFF , 1798px 554px #FFF , 1718px 1022px #FFF , 275px 64px #FFF , 1761px 1533px #FFF , 651px 1053px #FFF , 1849px 1117px #FFF , 261px 1601px #FFF , 675px 1495px #FFF , 913px 703px #FFF , 1124px 257px #FFF , 1418px 1592px #FFF , 943px 898px #FFF , 1309px 1874px #FFF , 558px 1966px #FFF , 248px 1586px #FFF , 1048px 1559px #FFF , 1932px 1167px #FFF , 398px 238px #FFF , 482px 1717px #FFF , 1660px 962px #FFF , 1884px 1687px #FFF , 1816px 1219px #FFF , 402px 979px #FFF , 24px 1356px #FFF , 1592px 645px #FFF , 98px 1406px #FFF , 1461px 467px #FFF , 1503px 698px #FFF , 1712px 1177px #FFF , 593px 575px #FFF , 1347px 1224px #FFF;
            }

            #stars2 {
                width: 2px;
                height: 2px;
                background: transparent;
                box-shadow: 1699px 1985px #FFF , 1150px 1714px #FFF , 1725px 1442px #FFF , 864px 1527px #FFF , 281px 361px #FFF , 1333px 40px #FFF , 1615px 1594px #FFF , 598px 1122px #FFF , 186px 1939px #FFF , 295px 1093px #FFF , 603px 1546px #FFF , 332px 1575px #FFF , 455px 954px #FFF , 698px 1970px #FFF , 1906px 928px #FFF , 734px 649px #FFF , 1665px 1886px #FFF , 1733px 1646px #FFF , 329px 504px #FFF , 1024px 485px #FFF , 446px 321px #FFF , 1722px 1350px #FFF , 1080px 1652px #FFF , 312px 580px #FFF , 1024px 443px #FFF , 372px 1322px #FFF , 8px 1018px #FFF , 1361px 1946px #FFF , 449px 1033px #FFF , 233px 169px #FFF , 1172px 1703px #FFF , 13px 1528px #FFF , 703px 1093px #FFF , 1836px 1684px #FFF , 494px 782px #FFF , 486px 1830px #FFF , 566px 718px #FFF , 1521px 175px #FFF , 728px 1109px #FFF , 346px 840px #FFF , 751px 593px #FFF , 1471px 638px #FFF , 1466px 1337px #FFF , 1849px 406px #FFF , 640px 1050px #FFF , 495px 1493px #FFF , 1670px 226px #FFF , 783px 492px #FFF , 1005px 1886px #FFF , 1351px 1001px #FFF , 459px 1516px #FFF , 48px 1705px #FFF , 1737px 1657px #FFF , 34px 402px #FFF , 1563px 1426px #FFF , 811px 1414px #FFF , 1861px 1344px #FFF , 1533px 1530px #FFF , 109px 1744px #FFF , 1352px 1892px #FFF , 1170px 1271px #FFF , 61px 1544px #FFF , 1457px 456px #FFF , 528px 917px #FFF , 1624px 947px #FFF , 1890px 856px #FFF , 65px 1447px #FFF , 1583px 1040px #FFF , 1930px 1600px #FFF , 1054px 847px #FFF , 839px 728px #FFF , 406px 1665px #FFF , 329px 124px #FFF , 1425px 960px #FFF , 885px 1100px #FFF , 1408px 1095px #FFF , 1232px 1937px #FFF , 1710px 1669px #FFF , 770px 789px #FFF , 47px 1038px #FFF , 1303px 1863px #FFF , 84px 1395px #FFF , 1617px 1293px #FFF , 1184px 1625px #FFF , 1103px 1006px #FFF , 123px 1936px #FFF , 1634px 277px #FFF , 874px 1994px #FFF , 58px 1692px #FFF , 1321px 1067px #FFF , 1311px 1574px #FFF , 1688px 1546px #FFF , 581px 1441px #FFF , 869px 758px #FFF , 697px 640px #FFF , 27px 1063px #FFF , 1301px 429px #FFF , 1406px 1963px #FFF , 1359px 1949px #FFF , 1950px 1209px #FFF , 825px 20px #FFF , 1872px 1063px #FFF , 1125px 1464px #FFF , 995px 399px #FFF , 1292px 135px #FFF , 1960px 21px #FFF , 1875px 427px #FFF , 1691px 130px #FFF , 832px 339px #FFF , 377px 1373px #FFF , 1895px 964px #FFF , 488px 529px #FFF , 511px 211px #FFF , 470px 29px #FFF , 513px 967px #FFF , 612px 1221px #FFF , 242px 377px #FFF , 144px 1783px #FFF , 1413px 1151px #FFF , 125px 1803px #FFF , 1831px 643px #FFF , 464px 868px #FFF , 98px 786px #FFF , 863px 1812px #FFF , 112px 916px #FFF , 152px 254px #FFF , 1237px 1393px #FFF , 598px 996px #FFF , 1675px 1326px #FFF , 1339px 770px #FFF , 1655px 1582px #FFF , 1608px 629px #FFF , 235px 1115px #FFF , 945px 740px #FFF , 1588px 1871px #FFF , 1768px 889px #FFF , 652px 406px #FFF , 745px 1687px #FFF , 109px 147px #FFF , 121px 946px #FFF , 1176px 1110px #FFF , 1321px 232px #FFF , 1958px 717px #FFF , 1103px 1057px #FFF , 388px 1457px #FFF , 1311px 1655px #FFF , 80px 1742px #FFF , 195px 979px #FFF , 1811px 267px #FFF , 341px 408px #FFF , 190px 569px #FFF , 428px 719px #FFF , 1762px 1410px #FFF , 1606px 749px #FFF , 999px 1998px #FFF , 554px 1870px #FFF , 1969px 715px #FFF , 198px 989px #FFF , 1945px 1848px #FFF , 834px 185px #FFF , 1891px 366px #FFF , 1514px 765px #FFF , 790px 1258px #FFF , 286px 1830px #FFF , 1398px 1687px #FFF , 179px 652px #FFF , 702px 1144px #FFF , 1852px 741px #FFF , 840px 1116px #FFF , 1358px 1045px #FFF , 1880px 206px #FFF , 1966px 843px #FFF , 100px 1813px #FFF , 109px 992px #FFF , 27px 786px #FFF , 386px 156px #FFF , 1997px 1888px #FFF , 617px 1366px #FFF , 1950px 1527px #FFF , 1640px 1151px #FFF , 816px 1206px #FFF , 1994px 1990px #FFF , 1568px 519px #FFF , 669px 389px #FFF , 597px 1617px #FFF , 1651px 1483px #FFF , 697px 882px #FFF , 1652px 547px #FFF , 1598px 1005px #FFF , 579px 1914px #FFF , 795px 1741px #FFF , 1617px 1109px #FFF , 664px 952px #FFF , 934px 735px #FFF , 601px 1267px #FFF , 1984px 1031px #FFF , 297px 1831px #FFF , 443px 1661px #FFF , 602px 439px #FFF , 457px 189px #FFF;
                animation: animStar 100s linear infinite;
            }
            #stars2:after {
                content: " ";
                position: absolute;
                top: 2000px;
                width: 2px;
                height: 2px;
                background: transparent;
                box-shadow: 1699px 1985px #FFF , 1150px 1714px #FFF , 1725px 1442px #FFF , 864px 1527px #FFF , 281px 361px #FFF , 1333px 40px #FFF , 1615px 1594px #FFF , 598px 1122px #FFF , 186px 1939px #FFF , 295px 1093px #FFF , 603px 1546px #FFF , 332px 1575px #FFF , 455px 954px #FFF , 698px 1970px #FFF , 1906px 928px #FFF , 734px 649px #FFF , 1665px 1886px #FFF , 1733px 1646px #FFF , 329px 504px #FFF , 1024px 485px #FFF , 446px 321px #FFF , 1722px 1350px #FFF , 1080px 1652px #FFF , 312px 580px #FFF , 1024px 443px #FFF , 372px 1322px #FFF , 8px 1018px #FFF , 1361px 1946px #FFF , 449px 1033px #FFF , 233px 169px #FFF , 1172px 1703px #FFF , 13px 1528px #FFF , 703px 1093px #FFF , 1836px 1684px #FFF , 494px 782px #FFF , 486px 1830px #FFF , 566px 718px #FFF , 1521px 175px #FFF , 728px 1109px #FFF , 346px 840px #FFF , 751px 593px #FFF , 1471px 638px #FFF , 1466px 1337px #FFF , 1849px 406px #FFF , 640px 1050px #FFF , 495px 1493px #FFF , 1670px 226px #FFF , 783px 492px #FFF , 1005px 1886px #FFF , 1351px 1001px #FFF , 459px 1516px #FFF , 48px 1705px #FFF , 1737px 1657px #FFF , 34px 402px #FFF , 1563px 1426px #FFF , 811px 1414px #FFF , 1861px 1344px #FFF , 1533px 1530px #FFF , 109px 1744px #FFF , 1352px 1892px #FFF , 1170px 1271px #FFF , 61px 1544px #FFF , 1457px 456px #FFF , 528px 917px #FFF , 1624px 947px #FFF , 1890px 856px #FFF , 65px 1447px #FFF , 1583px 1040px #FFF , 1930px 1600px #FFF , 1054px 847px #FFF , 839px 728px #FFF , 406px 1665px #FFF , 329px 124px #FFF , 1425px 960px #FFF , 885px 1100px #FFF , 1408px 1095px #FFF , 1232px 1937px #FFF , 1710px 1669px #FFF , 770px 789px #FFF , 47px 1038px #FFF , 1303px 1863px #FFF , 84px 1395px #FFF , 1617px 1293px #FFF , 1184px 1625px #FFF , 1103px 1006px #FFF , 123px 1936px #FFF , 1634px 277px #FFF , 874px 1994px #FFF , 58px 1692px #FFF , 1321px 1067px #FFF , 1311px 1574px #FFF , 1688px 1546px #FFF , 581px 1441px #FFF , 869px 758px #FFF , 697px 640px #FFF , 27px 1063px #FFF , 1301px 429px #FFF , 1406px 1963px #FFF , 1359px 1949px #FFF , 1950px 1209px #FFF , 825px 20px #FFF , 1872px 1063px #FFF , 1125px 1464px #FFF , 995px 399px #FFF , 1292px 135px #FFF , 1960px 21px #FFF , 1875px 427px #FFF , 1691px 130px #FFF , 832px 339px #FFF , 377px 1373px #FFF , 1895px 964px #FFF , 488px 529px #FFF , 511px 211px #FFF , 470px 29px #FFF , 513px 967px #FFF , 612px 1221px #FFF , 242px 377px #FFF , 144px 1783px #FFF , 1413px 1151px #FFF , 125px 1803px #FFF , 1831px 643px #FFF , 464px 868px #FFF , 98px 786px #FFF , 863px 1812px #FFF , 112px 916px #FFF , 152px 254px #FFF , 1237px 1393px #FFF , 598px 996px #FFF , 1675px 1326px #FFF , 1339px 770px #FFF , 1655px 1582px #FFF , 1608px 629px #FFF , 235px 1115px #FFF , 945px 740px #FFF , 1588px 1871px #FFF , 1768px 889px #FFF , 652px 406px #FFF , 745px 1687px #FFF , 109px 147px #FFF , 121px 946px #FFF , 1176px 1110px #FFF , 1321px 232px #FFF , 1958px 717px #FFF , 1103px 1057px #FFF , 388px 1457px #FFF , 1311px 1655px #FFF , 80px 1742px #FFF , 195px 979px #FFF , 1811px 267px #FFF , 341px 408px #FFF , 190px 569px #FFF , 428px 719px #FFF , 1762px 1410px #FFF , 1606px 749px #FFF , 999px 1998px #FFF , 554px 1870px #FFF , 1969px 715px #FFF , 198px 989px #FFF , 1945px 1848px #FFF , 834px 185px #FFF , 1891px 366px #FFF , 1514px 765px #FFF , 790px 1258px #FFF , 286px 1830px #FFF , 1398px 1687px #FFF , 179px 652px #FFF , 702px 1144px #FFF , 1852px 741px #FFF , 840px 1116px #FFF , 1358px 1045px #FFF , 1880px 206px #FFF , 1966px 843px #FFF , 100px 1813px #FFF , 109px 992px #FFF , 27px 786px #FFF , 386px 156px #FFF , 1997px 1888px #FFF , 617px 1366px #FFF , 1950px 1527px #FFF , 1640px 1151px #FFF , 816px 1206px #FFF , 1994px 1990px #FFF , 1568px 519px #FFF , 669px 389px #FFF , 597px 1617px #FFF , 1651px 1483px #FFF , 697px 882px #FFF , 1652px 547px #FFF , 1598px 1005px #FFF , 579px 1914px #FFF , 795px 1741px #FFF , 1617px 1109px #FFF , 664px 952px #FFF , 934px 735px #FFF , 601px 1267px #FFF , 1984px 1031px #FFF , 297px 1831px #FFF , 443px 1661px #FFF , 602px 439px #FFF , 457px 189px #FFF;
            }

            #stars3 {
                width: 3px;
                height: 3px;
                background: transparent;
                box-shadow: 732px 895px #FFF , 1784px 1593px #FFF , 995px 1325px #FFF , 874px 603px #FFF , 1899px 206px #FFF , 268px 773px #FFF , 1890px 270px #FFF , 841px 1375px #FFF , 1572px 1721px #FFF , 104px 1px #FFF , 1108px 1171px #FFF , 1850px 730px #FFF , 929px 1551px #FFF , 1251px 1785px #FFF , 1954px 854px #FFF , 843px 31px #FFF , 1173px 1418px #FFF , 175px 1671px #FFF , 1859px 1949px #FFF , 1122px 959px #FFF , 1204px 1297px #FFF , 1485px 915px #FFF , 580px 1255px #FFF , 1888px 1088px #FFF , 520px 1051px #FFF , 1044px 1631px #FFF , 1418px 830px #FFF , 1665px 1085px #FFF , 672px 1347px #FFF , 459px 1410px #FFF , 209px 1151px #FFF , 772px 432px #FFF , 676px 112px #FFF , 1798px 117px #FFF , 1876px 1122px #FFF , 701px 6px #FFF , 1353px 1298px #FFF , 1561px 576px #FFF , 810px 707px #FFF , 436px 47px #FFF , 1456px 810px #FFF , 1182px 782px #FFF , 676px 36px #FFF , 1397px 1429px #FFF , 379px 1228px #FFF , 510px 818px #FFF , 24px 1031px #FFF , 1677px 1098px #FFF , 718px 1377px #FFF , 1579px 1125px #FFF , 172px 245px #FFF , 888px 1022px #FFF , 1294px 528px #FFF , 1282px 143px #FFF , 712px 723px #FFF , 1651px 1850px #FFF , 320px 96px #FFF , 1102px 886px #FFF , 48px 935px #FFF , 104px 1161px #FFF , 1964px 1415px #FFF , 738px 1267px #FFF , 24px 1585px #FFF , 469px 178px #FFF , 1455px 554px #FFF , 1727px 182px #FFF , 922px 895px #FFF , 1196px 1323px #FFF , 318px 515px #FFF , 1392px 863px #FFF , 1401px 1057px #FFF , 697px 1419px #FFF , 909px 1963px #FFF , 1268px 1223px #FFF , 1858px 1875px #FFF , 946px 442px #FFF , 1213px 61px #FFF , 1898px 368px #FFF , 1775px 532px #FFF , 1906px 158px #FFF , 1973px 1991px #FFF , 1948px 1568px #FFF , 537px 572px #FFF , 291px 1252px #FFF , 1510px 799px #FFF , 797px 947px #FFF , 1555px 628px #FFF , 282px 1448px #FFF , 115px 1252px #FFF , 944px 1885px #FFF , 502px 1514px #FFF , 754px 362px #FFF , 223px 1311px #FFF , 1539px 1528px #FFF , 1772px 830px #FFF , 1932px 603px #FFF , 78px 1146px #FFF , 221px 1563px #FFF , 564px 1246px #FFF , 329px 73px #FFF;
                animation: animStar 150s linear infinite;
            }
            #stars3:after {
                content: " ";
                position: absolute;
                top: 2000px;
                width: 3px;
                height: 3px;
                background: transparent;
                box-shadow: 732px 895px #FFF , 1784px 1593px #FFF , 995px 1325px #FFF , 874px 603px #FFF , 1899px 206px #FFF , 268px 773px #FFF , 1890px 270px #FFF , 841px 1375px #FFF , 1572px 1721px #FFF , 104px 1px #FFF , 1108px 1171px #FFF , 1850px 730px #FFF , 929px 1551px #FFF , 1251px 1785px #FFF , 1954px 854px #FFF , 843px 31px #FFF , 1173px 1418px #FFF , 175px 1671px #FFF , 1859px 1949px #FFF , 1122px 959px #FFF , 1204px 1297px #FFF , 1485px 915px #FFF , 580px 1255px #FFF , 1888px 1088px #FFF , 520px 1051px #FFF , 1044px 1631px #FFF , 1418px 830px #FFF , 1665px 1085px #FFF , 672px 1347px #FFF , 459px 1410px #FFF , 209px 1151px #FFF , 772px 432px #FFF , 676px 112px #FFF , 1798px 117px #FFF , 1876px 1122px #FFF , 701px 6px #FFF , 1353px 1298px #FFF , 1561px 576px #FFF , 810px 707px #FFF , 436px 47px #FFF , 1456px 810px #FFF , 1182px 782px #FFF , 676px 36px #FFF , 1397px 1429px #FFF , 379px 1228px #FFF , 510px 818px #FFF , 24px 1031px #FFF , 1677px 1098px #FFF , 718px 1377px #FFF , 1579px 1125px #FFF , 172px 245px #FFF , 888px 1022px #FFF , 1294px 528px #FFF , 1282px 143px #FFF , 712px 723px #FFF , 1651px 1850px #FFF , 320px 96px #FFF , 1102px 886px #FFF , 48px 935px #FFF , 104px 1161px #FFF , 1964px 1415px #FFF , 738px 1267px #FFF , 24px 1585px #FFF , 469px 178px #FFF , 1455px 554px #FFF , 1727px 182px #FFF , 922px 895px #FFF , 1196px 1323px #FFF , 318px 515px #FFF , 1392px 863px #FFF , 1401px 1057px #FFF , 697px 1419px #FFF , 909px 1963px #FFF , 1268px 1223px #FFF , 1858px 1875px #FFF , 946px 442px #FFF , 1213px 61px #FFF , 1898px 368px #FFF , 1775px 532px #FFF , 1906px 158px #FFF , 1973px 1991px #FFF , 1948px 1568px #FFF , 537px 572px #FFF , 291px 1252px #FFF , 1510px 799px #FFF , 797px 947px #FFF , 1555px 628px #FFF , 282px 1448px #FFF , 115px 1252px #FFF , 944px 1885px #FFF , 502px 1514px #FFF , 754px 362px #FFF , 223px 1311px #FFF , 1539px 1528px #FFF , 1772px 830px #FFF , 1932px 603px #FFF , 78px 1146px #FFF , 221px 1563px #FFF , 564px 1246px #FFF , 329px 73px #FFF;
            }


            @keyframes animStar {
                from {
                    transform: translateY(0px);
                }
                to {
                    transform: translateY(-2000px);
                }
            }

            .logo{
                position: absolute;
                top:0;
                left:0;
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                filter: drop-shadow(-10px -10px 20px blue)
                drop-shadow(10px 10px 20px fuchsia);
                animation: space 20s infinite;
            }

            .logo a{
                display: block;
                width: 100%;
                height: 100%;
                text-align: center;
                /*perspective: 1000px;*/
                /*animation: float 20s infinite;*/
            }

            @keyframes float{
                0% {
                    transform:  translateY(0px) rotateX(5deg) rotateY(5deg);
                }
                50%{
                    transform:  translateY(10px) rotateX(-5deg) rotateY(5deg);
                }
                100% {
                    transform:  translateY(0px) rotateX(5deg) rotateY(5deg);
                }
            }

            svg{
                margin:auto;
            }

            .str0 {
                fill: rgba(0, 0, 0, .0);
                stroke: white;
                stroke-width: 40;
                stroke-opacity: 1;
                stroke-miterlimit: 22.9256;
                animation:  move 20s infinite,
                mig 5s;
                filter: drop-shadow(0px 0px 100px white)
                drop-shadow(0px 0px 50px white);
            }

            .star{
                stroke: white;
                fill: white;
                stroke-width: 20;
                filter: drop-shadow(0px 0px 100px white)
                drop-shadow(0px 0px 100px white);
                animation: mig-long 10s infinite;
            }

            #red { stroke: url(#Gradient1); }
            .stop1 { stop-color: yellow; }
            .stop2 { stop-color: red; }
            .stop3 { stop-color: yellow; }


            @keyframes move {
                0% {
                    stroke-dasharray: 100 100000;
                }
                25% {
                    stroke-dasharray: 10000 0;
                }
                50% {
                    stroke-dasharray: 10000 0;
                }
                75% {
                    stroke-dasharray: 100 100000;
                }
                100% {
                    stroke-dasharray: 0 100000;
                }
            }
            @keyframes space {
                0%{filter: drop-shadow(-10px -10px 20px blue)
                drop-shadow(10px 10px 20px fuchsia);}
                10%{filter: drop-shadow(-10px -10px 20px fuchsia)
                drop-shadow(10px 10px 20px blue);}
                50%{filter: drop-shadow(-10px -10px 20px fuchsia)
                drop-shadow(10px 10px 20px tomato);}
                100%{filter: drop-shadow(-10px -10px 20px blue)
                drop-shadow(10px 10px 20px fuchsia);}
            }
            @keyframes mig-long {
                0%{opacity:1}
                50%{opacity:0}
                100%{opacity:1}
            }
            @keyframes mig {
                10% {
                    stroke-opacity: 0;
                }
                13% {
                    stroke-opacity: 1;
                }
                16% {
                    stroke-opacity: .3;
                }
                20% {
                    stroke-opacity: 1;
                }
                23% {
                    stroke-opacity: 0;
                }
                30% {
                    stroke-opacity: 1;
                }
                35% {
                    stroke-opacity: .3;
                }
                50% {
                    stroke-opacity: 1;
                }
                100% {
                    stroke-opacity: 1;
                }
            }

        </style>
    </head>
    <body>
        <div class="logo">
          <a href="/crm">
              <svg  width="60%" height="auto" viewBox="0 0 22000 9000">
                  <defs>
                      <linearGradient id="Gradient1">
                          <stop class="stop1" offset="0%" />
                          <stop class="stop2" offset="50%" />
                          <stop class="stop3" offset="100%" />
                      </linearGradient>
                  </defs>
                  <g id="layer1">
                      <path class="str0" id="uu" d="M18207.28 4787.52c58.24,57.25 148.55,85.87 270.94,85.87 122.39,0 212.7,-28.62 270.94,-85.87 58.23,-57.25 87.35,-151.02 87.35,-281.31l0 -1190.35 669.21 0 0 1243.65c0,311.91 -85.38,532.01 -256.14,660.33 -170.76,128.31 -427.87,192.47 -771.36,192.47 -343.49,0 -600.61,-64.16 -771.37,-192.47 -170.75,-128.32 -256.13,-348.42 -256.13,-660.33l0 -1243.65 669.2 0 0 1190.35c0,130.29 29.13,224.06 87.36,281.31z"/>
                      <path class="str0" id="nn" d="M17154.61 4315.86l0 726.31c0,23.69 -1.48,46.39 -4.44,68.11 -2.96,21.72 -12.83,52.31 -29.61,91.79 -16.78,39.48 -39.98,73.53 -69.58,102.16 -29.62,28.62 -74.03,53.79 -133.26,75.51 -59.22,21.71 -130.28,32.57 -213.19,32.57 -96.74,0 -181.62,-13.33 -254.66,-39.97 -73.04,-26.66 -138.18,-81.44 -195.43,-164.35l-749.15 -1057.11c-23.7,-33.55 -42.45,-50.34 -56.27,-50.34 -27.64,0 -41.45,19.74 -41.45,59.22l0 1228.86 -515.24 0 0 -1729.28c0,-126.34 43.93,-219.12 131.77,-278.34 87.85,-59.22 198.89,-88.83 333.13,-88.83 201.35,0 347.43,64.15 438.24,192.47l755.08 1065.99c23.69,33.56 42.44,50.34 56.26,50.34 21.71,0 32.57,-16.78 32.57,-50.34l0 -1234.77 515.23 0z"/>
                      <path class="str0" id="mm" d="M13876.68 4133.12l-319.8 1000.84c-19.74,61.2 -39.98,109.08 -60.71,143.62 -20.73,34.54 -59.21,65.63 -115.47,93.27 -56.27,27.64 -130.79,41.46 -223.57,41.46 -132.26,0 -224.55,-23.2 -276.86,-69.59 -52.31,-46.39 -93.28,-115.97 -122.88,-208.76l-319.8 -1000.84c-15.79,-49.35 -28.63,-74.03 -38.5,-74.03 -17.77,0 -26.65,22.7 -26.65,68.11l20.73 1261.42 -675.13 0 0 -1732.24c0,-242.81 169.77,-364.21 509.3,-364.21 55.28,0 104.14,3.45 146.58,10.36 42.45,6.91 90.31,20.73 143.62,41.46 53.29,20.73 100.67,55.76 142.13,105.11 41.45,49.35 75.01,111.54 100.68,186.56l334.6 1006.76c17.76,63.18 38.49,94.76 62.18,94.76 23.69,0 44.41,-31.58 62.18,-94.76l334.61 -1006.76c25.66,-75.02 59.22,-137.21 100.68,-186.56 41.45,-49.35 88.83,-84.38 142.13,-105.11 53.29,-20.73 101.66,-34.55 145.09,-41.46 43.43,-6.91 91.79,-10.36 145.09,-10.36 339.54,0 509.31,121.4 509.31,364.21l0 1732.24 -675.13 0 23.69 -1261.42c0,-45.41 -8.88,-68.11 -26.65,-68.11 -11.84,0 -25.66,24.68 -41.45,74.03z"/>
                      <path class="str0" id="pp" d="M10056.86 4275.25l470.82 0c92.78,0 160.39,-16.28 202.83,-48.86 42.44,-32.57 63.67,-91.3 63.67,-176.18 0,-84.89 -20.73,-142.63 -62.18,-173.23 -41.46,-30.6 -109.57,-45.9 -204.32,-45.9l-340.52 0c-86.87,0 -130.3,43.44 -130.3,130.3l0 313.87zm0 1113.37l-669.2 0 0 -1747.04c0,-102.66 28.62,-182.61 85.87,-239.85 57.25,-57.25 137.2,-85.87 239.84,-85.87l1175.56 0c225.04,0 380.01,59.22 464.89,177.66 84.89,118.44 127.33,304.01 127.33,556.69 0,252.68 -42.44,439.23 -127.33,559.65 -84.88,120.41 -239.85,180.62 -464.89,180.62l-832.07 0 0 598.14z"/>
                      <path class="str0" id="ss" d="M7240.87 5388.62l0 -515.23 1148.91 0c76.98,0 115.47,-21.72 115.47,-65.15 0,-27.63 -10.85,-48.36 -32.56,-62.18 -21.72,-13.81 -55.28,-27.63 -100.68,-41.45l-802.46 -225.05c-232.94,-63.16 -349.41,-269.45 -349.41,-618.86 0,-363.23 161.88,-544.84 485.62,-544.84l1368.02 0 0 515.22 -1054.15 0c-94.75,0 -142.13,21.72 -142.13,65.15 0,31.59 14.81,55.28 44.42,71.07 29.61,15.79 73.04,30.6 130.29,44.41l698.81 186.55c155.96,41.45 266.51,110.06 331.65,205.8 65.14,95.74 97.72,233.43 97.72,413.07 0,189.51 -38,332.13 -114.01,427.87 -76,95.75 -205.79,143.62 -389.38,143.62l-1436.13 0z"/>
                      <path class="str0" id="l1" d="M2493.33 6040.85c885.15,-821.12 -1314.19,-3625.73 1574.4,-3688.24 -2204.67,921.49 -272.51,2388.16 -1574.4,3688.24z"/>
                      <path class="str0" id="l2" d="M2468.79 6231.2c1402.38,-414.38 712.41,-3137.68 3109.96,-3865.57 -3321.4,-100.08 -1523.28,2372.35 -3109.96,3865.57z"/>
                      <path class="str0" id="red" d="M2537.72 6309.09c3292.19,-897.1 1647.54,-3064.14 3791.53,-3916.79 -3120.35,700.98 -1695.46,3201.57 -3791.53,3916.79z"/>
                      <path class="str0" id="l3" d="M6403.5 2719c-801.57,997.24 1212.21,3618.54 -1660.82,3637.03 2324.51,-994.61 329.35,-2392.72 1660.82,-3637.03z"/>
                      <path class="str0" id="l4" d="M6435.09 2529.08c-1434.84,389.38 -772.05,3091.74 -3225.19,3776.81 3458.26,58.25 1587.78,-2423.88 3225.19,-3776.81z"/>

                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="25s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#uu" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="15s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#uu" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="15s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#nn" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="25s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#nn" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="18s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#mm" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="22s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#mm" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="30s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#pp" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="20s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#pp" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="15s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#ss" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="25s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#ss" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="18s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#l1" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="25s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#l1" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 50,10 10,50 0,10 -10z"/>
                      <animateMotion
                          dur="17s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#l2" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 50,10 10,50 0,10 -10z"/>
                      <animateMotion
                          dur="27s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#l2" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="30s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#l3" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="20s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#l3" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 50,10 10,50 0,10 -10z"/>
                      <animateMotion
                          dur="15s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#l4" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 50,10 10,50 0,10 -10z"/>
                      <animateMotion
                          dur="10s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#l4" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="22s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#uu" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="12s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#uu" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="12s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#nn" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="22s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#nn" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="15s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#mm" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="19s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#mm" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="27s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#pp" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="17s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#pp" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="12s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#ss" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="22s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#ss" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="15s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#l1" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="22s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#l1" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 50,10 10,50 0,10 -10z"/>
                      <animateMotion
                          dur="13s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#l2" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 50,10 10,50 0,10 -10z"/>
                      <animateMotion
                          dur="23s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#l2" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="26s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#l3" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 60,10 10,60 0,10 -10z"/>
                      <animateMotion
                          dur="17s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#l3" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 50,10 10,50 0,10 -10z"/>
                      <animateMotion
                          dur="13s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#l4" />
                      </animateMotion>
                  </g>
                  <g class="star">
                      <path d="M0 -50,-10 -10,-50 0,-10 10,0 50,10 10,50 0,10 -10z"/>
                      <animateMotion
                          dur="14s"
                          repeatCount="indefinite"
                          calcMode="linear">
                          <mpath href="#l4" />
                      </animateMotion>
                  </g>
              </svg>
          </a>
        </div>
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>

    </body>
</html>
