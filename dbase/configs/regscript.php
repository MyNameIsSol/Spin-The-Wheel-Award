<?php
    if(isset($_POST["signup"])){
        include 'dbcon.php';
        $tbname = 'users';
        $tbcols = 'id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                firstname VARCHAR(22) NOT NULL,
                lastname VARCHAR(22) NOT NULL,
                username VARCHAR(22) NOT NULL,
                email VARCHAR(225) NOT NULL,
                passwd VARCHAR(55) NOT NULL,
                phone VARCHAR(22) NOT NULL,
                terms VARCHAR(22) NOT NULL,
                profileimg VARCHAR(225) NOT NULL,
                address VARCHAR(225) NOT NULL,
                country VARCHAR(55) NOT NULL,
                btcaddr varchar(255) not null,
                walletbal VARCHAR(22) NOT NULL,
                currency VARCHAR(22) NOT NULL,
                country_currency VARCHAR(225) NOT NULL,
                currency_letter VARCHAR(22) NOT NULL,
                country_code VARCHAR(22) NOT NULL,
                totalwith VARCHAR(22) NOT NULL,
                earns VARCHAR(22) NOT NULL,
                welbonus VARCHAR(22) NOT NULL,
                spin VARCHAR(22) NOT NULL,
                spin_pacent VARCHAR(22) NOT NULL,
                access VARCHAR(22) NOT NULL,
                min_earn VARCHAR(55) NOT NULL,
                max_earn VARCHAR(22) NOT NULL,
                spin_no VARCHAR(22) NOT NULL,
                lev_2amt VARCHAR(22) NOT NULL,
                lev_4amt VARCHAR(22) NOT NULL,
                tearns VARCHAR(22) NOT NULL,
                currentplan VARCHAR(55) NOT NULL,
                refcode VARCHAR(55) NOT NULL,
                depositid varchar(255) not null,
                userid VARCHAR(22) NOT NULL,
                timeofinvest VARCHAR(55) NOT NULL,
                investedamount VARCHAR(22) NOT NULL,
                invest_type VARCHAR(55) NOT NULL,
                statusofinvest VARCHAR(22) NOT NULL,
                acctname VARCHAR(55) NOT NULL,
                acctnumber VARCHAR(55) NOT NULL,
                bankname VARCHAR(225) NOT NULL,
                whorefu VARCHAR(22) NOT NULL,
                active VARCHAR(22) NOT NULL,
                refpaid varchar(255) not null,
                withdrawal VARCHAR(22) NOT NULL,
                upline VARCHAR(22) NOT NULL,
                reg_date DATETIME NOT NULL';
        if($dbconnec){
        $sql = "CREATE TABLE IF NOT EXISTS $tbname($tbcols)";
        if(!mysqli_query($dbconnec, $sql)){
            header ("Location:../../account_1/register.php?tableerror");
            exit();
          }
        }
        $tbname = 'reftable';
        $tbcols = 'id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                username VARCHAR(22) NOT NULL,
                email VARCHAR(225) NOT NULL,
                phone VARCHAR(22) NOT NULL,
                referee VARCHAR(22) NOT NULL,
                bonus varchar(55) not null,
                status varchar(22) NULL,
                refcode varchar(22) NULL,
                reg_date DATETIME NOT NULL';
        if($dbconnec){
        $Sql = "CREATE TABLE IF NOT EXISTS $tbname($tbcols)";
        if(!mysqli_query($dbconnec, $Sql)){
            header ("Location:../../account_1/register.php?tableerror");
            exit();
          }
        }
    
        $uname=mysqli_real_escape_string($dbconnec,$_POST['uname']);
        $email=mysqli_real_escape_string($dbconnec,$_POST['email']);
        $country=mysqli_real_escape_string($dbconnec,$_POST['country']);
        $phone=mysqli_real_escape_string($dbconnec,$_POST['phone']);
        $passwd=mysqli_real_escape_string($dbconnec,$_POST['pwd']);
        $terms=mysqli_real_escape_string($dbconnec,$_POST['agree']);
        $refidd=mysqli_real_escape_string($dbconnec,$_POST['refid']);
        $date = date('d/m/y h:i:s');
        $walletbal = 0;
        $totalwith  = 0;
        $earns = 0;
        $country_list = array(
          array("name" => "Afghanistan","code" => "AF","symbol" => "؋","currency" => "AFN"),
          array("name" => "Aland Islands","code" => "AX","symbol" => "€","currency" => "EUR"),
          array("name" => "Albania","code" => "AL","symbol" => "Lek","currency" => "ALL"),
          array("name" => "Algeria","code" => "DZ","symbol" => "دج","currency" => "DZD"),
          array("name" => "American Samoa","code" => "AS","symbol" => "$","currency" => "USD"),
          array("name" => "Andorra","code" => "AD","symbol" => "€","currency" => "EUR"),
          array("name" => "Angola","code" => "AO","symbol" => "Kz","currency" => "AOA"),
          array("name" => "Anguilla","code" => "AI","symbol" => "$","currency" => "XCD"),
          array("name" => "Antarctica","code" => "AQ","symbol" => "$","currency" => "AAD"),
          array("name" => "Antigua and Barbuda","code" => "AG","symbol" => "$","currency" => "XCD"),
          array("name" => "Argentina","code" => "AR","symbol" => "$","currency" => "ARS"),
          array("name" => "Armenia","code" => "AM","symbol" => "֏","currency" => "AMD"),
          array("name" => "Aruba","code" => "AW","symbol" => "ƒ","currency" => "AWG"),
          array("name" => "Australia","code" => "AU","symbol" => "$","currency" => "AUD"),
          array("name" => "Austria","code" => "AT","symbol" => "€","currency" => "EUR"),
          array("name" => "Azerbaijan","code" => "AZ","symbol" => "m","currency" => "AZN"),
          array("name" => "Bahamas","code" => "BS","symbol" => "B$","currency" => "BSD"),
          array("name" => "Bahrain","code" => "BH","symbol" => ".د.ب","currency" => "BHD"),
          array("name" => "Bangladesh","code" => "BD","symbol" => "৳","currency" => "BDT"),
          array("name" => "Barbados","code" => "BB","symbol" => "Bds$","currency" => "BBD"),
          array("name" => "Belarus","code" => "BY","symbol" => "Br","currency" => "BYN"),
          array("name" => "Belgium","code" => "BE","symbol" => "€","currency" => "EUR"),
          array("name" => "Belize","code" => "BZ","symbol" => "$","currency" => "BZD"),
          array("name" => "Benin","code" => "BJ","symbol" => "CFA","currency" => "XOF"),
          array("name" => "Bermuda","code" => "BM","symbol" => "$","currency" => "BMD"),
          array("name" => "Bhutan","code" => "BT","symbol" => "Nu.","currency" => "BTN"),
          array("name" => "Bolivia","code" => "BO","symbol" => "Bs.","currency" => "BOB"),
          array("name" => "Bonaire, Sint Eustatius and Saba","code" => "BQ","symbol" => "$","currency" => "USD"),
          array("name" => "Bosnia and Herzegovina","code" => "BA","symbol" => "KM","currency" => "BAM"),
          array("name" => "Botswana","code" => "BW","symbol" => "P","currency" => "BWP"),
          array("name" => "Bouvet Island","code" => "BV","symbol" => "kr","currency" => "NOK"),
          array("name" => "Brazil","code" => "BR","symbol" => "R$","currency" => "BRL"),
          array("name" => "British Indian Ocean Territory","code" => "IO","symbol" => "$","currency" => "USD"),
          array("name" => "Brunei Darussalam","code" => "BN","symbol" => "B$","currency" => "BND"),
          array("name" => "Bulgaria","code" => "BG","symbol" => "Лв.","currency" => "BGN"),
          array("name" => "Burkina Faso","code" => "BF","symbol" => "CFA","currency" => "XOF"),
          array("name" => "Burundi","code" => "BI","symbol" => "FBu","currency" => "BIF"),
          array("name" => "Cambodia","code" => "KH","symbol" => "KHR","currency" => "KHR"),
          array("name" => "Cameroon","code" => "CM","symbol" => "FCFA","currency" => "XAF"),
          array("name" => "Canada","code" => "CA","symbol" => "$","currency" => "CAD"),
          array("name" => "Cape Verde","code" => "CV","symbol" => "$","currency" => "CVE"),
          array("name" => "Cayman Islands","code" => "KY","symbol" => "$","currency" => "KYD"),
          array("name" => "Central African Republic","code" => "CF","symbol" => "FCFA","currency" => "XAF"),
          array("name" => "Chad","code" => "TD","symbol" => "FCFA","currency" => "XAF"),
          array("name" => "Chile","code" => "CL","symbol" => "$","currency" => "CLP"),
          array("name" => "China","code" => "CN","symbol" => "¥","currency" => "CNY"),
          array("name" => "Christmas Island","code" => "CX","symbol" => "$","currency" => "AUD"),
          array("name" => "Cocos (Keeling) Islands","code" => "CC","symbol" => "$","currency" => "AUD"),
          array("name" => "Colombia","code" => "CO","symbol" => "$","currency" => "COP"),
          array("name" => "Comoros","code" => "KM","symbol" => "CF","currency" => "KMF"),
          array("name" => "Congo","code" => "CG","symbol" => "FC","currency" => "XAF"),
          array("name" => "Congo, Democratic Republic of the Congo","code" => "CD","symbol" => "FC","currency" => "CDF"),
          array("name" => "Cook Islands","code" => "CK","symbol" => "$","currency" => "NZD"),
          array("name" => "Costa Rica","code" => "CR","symbol" => "₡","currency" => "CRC"),
          array("name" => "Cote D'Ivoire","code" => "CI","symbol" => "CFA","currency" => "XOF"),
          array("name" => "Croatia","code" => "HR","symbol" => "kn","currency" => "HRK"),
          array("name" => "Cuba","code" => "CU","symbol" => "$","currency" => "CUP"),
          array("name" => "Curacao","code" => "CW","symbol" => "ƒ","currency" => "ANG"),
          array("name" => "Cyprus","code" => "CY","symbol" => "€","currency" => "EUR"),
          array("name" => "Czech Republic","code" => "CZ","symbol" => "Kč","currency" => "CZK"),
          array("name" => "Denmark","code" => "DK","symbol" => "Kr.","currency" => "DKK"),
          array("name" => "Djibouti","code" => "DJ","symbol" => "Fdj","currency" => "DJF"),
          array("name" => "Dominica","code" => "DM","symbol" => "$","currency" => "XCD"),
          array("name" => "Dominican Republic","code" => "DO","symbol" => "$","currency" => "DOP"),
          array("name" => "Ecuador","code" => "EC","symbol" => "$","currency" => "USD"),
          array("name" => "Egypt","code" => "EG","symbol" => "ج.م","currency" => "EGP"),
          array("name" => "El Salvador","code" => "SV","symbol" => "$","currency" => "USD"),
          array("name" => "Equatorial Guinea","code" => "GQ","symbol" => "FCFA","currency" => "XAF"),
          array("name" => "Eritrea","code" => "ER","symbol" => "Nfk","currency" => "ERN"),
          array("name" => "Estonia","code" => "EE","symbol" => "€","currency" => "EUR"),
          array("name" => "Ethiopia","code" => "ET","symbol" => "Nkf","currency" => "ETB"),
          array("name" => "Falkland Islands (Malvinas)","code" => "FK","symbol" => "£","currency" => "FKP"),
          array("name" => "Faroe Islands","code" => "FO","symbol" => "Kr.","currency" => "DKK"),
          array("name" => "Fiji","code" => "FJ","symbol" => "FJ$","currency" => "FJD"),
          array("name" => "Finland","code" => "FI","symbol" => "€","currency" => "EUR"),
          array("name" => "France","code" => "FR","symbol" => "€","currency" => "EUR"),
          array("name" => "French Guiana","code" => "GF","symbol" => "€","currency" => "EUR"),
          array("name" => "French Polynesia","code" => "PF","symbol" => "₣","currency" => "XPF"),
          array("name" => "French Southern Territories","code" => "TF","symbol" => "€","currency" => "EUR"),
          array("name" => "Gabon","code" => "GA","symbol" => "FCFA","currency" => "XAF"),
          array("name" => "Gambia","code" => "GM","symbol" => "D","currency" => "GMD"),
          array("name" => "Georgia","code" => "GE","symbol" => "ლ","currency" => "GEL"),
          array("name" => "Germany","code" => "DE","symbol" => "€","currency" => "EUR"),
          array("name" => "Ghana","code" => "GH","symbol" => "GH₵","currency" => "GHS"),
          array("name" => "Gibraltar","code" => "GI","symbol" => "£","currency" => "GIP"),
          array("name" => "Greece","code" => "GR","symbol" => "€","currency" => "EUR"),
          array("name" => "Greenland","code" => "GL","symbol" => "Kr.","currency" => "DKK"),
          array("name" => "Grenada","code" => "GD","symbol" => "$","currency" => "XCD"),
          array("name" => "Guadeloupe","code" => "GP","symbol" => "€","currency" => "EUR"),
          array("name" => "Guam","code" => "GU","symbol" => "$","currency" => "USD"),
          array("name" => "Guatemala","code" => "GT","symbol" => "Q","currency" => "GTQ"),
          array("name" => "Guernsey","code" => "GG","symbol" => "£","currency" => "GBP"),
          array("name" => "Guinea","code" => "GN","symbol" => "FG","currency" => "GNF"),
          array("name" => "Guinea-Bissau","code" => "GW","symbol" => "CFA","currency" => "XOF"),
          array("name" => "Guyana","code" => "GY","symbol" => "$","currency" => "GYD"),
          array("name" => "Haiti","code" => "HT","symbol" => "G","currency" => "HTG"),
          array("name" => "Heard Island and McDonald Islands","code" => "HM","symbol" => "$","currency" => "AUD"),
          array("name" => "Holy See (Vatican City State)","code" => "VA","symbol" => "€","currency" => "EUR"),
          array("name" => "Honduras","code" => "HN","symbol" => "L","currency" => "HNL"),
          array("name" => "Hong Kong","code" => "HK","symbol" => "$","currency" => "HKD"),
          array("name" => "Hungary","code" => "HU","symbol" => "Ft","currency" => "HUF"),
          array("name" => "Iceland","code" => "IS","symbol" => "kr","currency" => "ISK"),
          array("name" => "India","code" => "IN","symbol" => "₹","currency" => "INR"),
          array("name" => "Indonesia","code" => "ID","symbol" => "Rp","currency" => "IDR"),
          array("name" => "Iran, Islamic Republic of","code" => "IR","symbol" => "﷼","currency" => "IRR"),
          array("name" => "Iraq","code" => "IQ","symbol" => "د.ع","currency" => "IQD"),
          array("name" => "Ireland","code" => "IE","symbol" => "€","currency" => "EUR"),
          array("name" => "Isle of Man","code" => "IM","symbol" => "£","currency" => "GBP"),
          array("name" => "Israel","code" => "IL","symbol" => "₪","currency" => "ILS"),
          array("name" => "Italy","code" => "IT","symbol" => "€","currency" => "EUR"),
          array("name" => "Jamaica","code" => "JM","symbol" => "J$","currency" => "JMD"),
          array("name" => "Japan","code" => "JP","symbol" => "¥","currency" => "JPY"),
          array("name" => "Jersey","code" => "JE","symbol" => "£","currency" => "GBP"),
          array("name" => "Jordan","code" => "JO","symbol" => "ا.د","currency" => "JOD"),
          array("name" => "Kazakhstan","code" => "KZ","symbol" => "лв","currency" => "KZT"),
          array("name" => "Kenya","code" => "KE","symbol" => "KSh","currency" => "KES"),
          array("name" => "Kiribati","code" => "KI","symbol" => "$","currency" => "AUD"),
          array("name" => "Korea, Democratic People's Republic of","code" => "KP","symbol" => "₩","currency" => "KPW"),
          array("name" => "Korea, Republic of","code" => "KR","symbol" => "₩","currency" => "KRW"),
          array("name" => "Kosovo","code" => "XK","symbol" => "€","currency" => "EUR"),
          array("name" => "Kuwait","code" => "KW","symbol" => "ك.د","currency" => "KWD"),
          array("name" => "Kyrgyzstan","code" => "KG","symbol" => "лв","currency" => "KGS"),
          array("name" => "Lao People's Democratic Republic","code" => "LA","symbol" => "₭","currency" => "LAK"),
          array("name" => "Latvia","code" => "LV","symbol" => "€","currency" => "EUR"),
          array("name" => "Lebanon","code" => "LB","symbol" => "£","currency" => "LBP"),
          array("name" => "Lesotho","code" => "LS","symbol" => "L","currency" => "LSL"),
          array("name" => "Liberia","code" => "LR","symbol" => "$","currency" => "LRD"),
          array("name" => "Libyan Arab Jamahiriya","code" => "LY","symbol" => "د.ل","currency" => "LYD"),
          array("name" => "Liechtenstein","code" => "LI","symbol" => "CHf","currency" => "CHF"),
          array("name" => "Lithuania","code" => "LT","symbol" => "€","currency" => "EUR"),
          array("name" => "Luxembourg","code" => "LU","symbol" => "€","currency" => "EUR"),
          array("name" => "Macao","code" => "MO","symbol" => "$","currency" => "MOP"),
          array("name" => "Macedonia, the Former Yugoslav Republic of","code" => "MK","symbol" => "ден","currency" => "MKD"),
          array("name" => "Madagascar","code" => "MG","symbol" => "Ar","currency" => "MGA"),
          array("name" => "Malawi","code" => "MW","symbol" => "MK","currency" => "MWK"),
          array("name" => "Malaysia","code" => "MY","symbol" => "RM","currency" => "MYR"),
          array("name" => "Maldives","code" => "MV","symbol" => "Rf","currency" => "MVR"),
          array("name" => "Mali","code" => "ML","symbol" => "CFA","currency" => "XOF"),
          array("name" => "Malta","code" => "MT","symbol" => "€","currency" => "EUR"),
          array("name" => "Marshall Islands","code" => "MH","symbol" => "$","currency" => "USD"),
          array("name" => "Martinique","code" => "MQ","symbol" => "€","currency" => "EUR"),
          array("name" => "Mauritania","code" => "MR","symbol" => "MRU","currency" => "MRO"),
          array("name" => "Mauritius","code" => "MU","symbol" => "₨","currency" => "MUR"),
          array("name" => "Mayotte","code" => "YT","symbol" => "€","currency" => "EUR"),
          array("name" => "Mexico","code" => "MX","symbol" => "$","currency" => "MXN"),
          array("name" => "Micronesia, Federated States of","code" => "FM","symbol" => "$","currency" => "USD"),
          array("name" => "Moldova, Republic of","code" => "MD","symbol" => "L","currency" => "MDL"),
          array("name" => "Monaco","code" => "MC","symbol" => "€","currency" => "EUR"),
          array("name" => "Mongolia","code" => "MN","symbol" => "₮","currency" => "MNT"),
          array("name" => "Montenegro","code" => "ME","symbol" => "€","currency" => "EUR"),
          array("name" => "Montserrat","code" => "MS","symbol" => "$","currency" => "XCD"),
          array("name" => "Morocco","code" => "MA","symbol" => "DH","currency" => "MAD"),
          array("name" => "Mozambique","code" => "MZ","symbol" => "MT","currency" => "MZN"),
          array("name" => "Myanmar","code" => "MM","symbol" => "K","currency" => "MMK"),
          array("name" => "Namibia","code" => "NA","symbol" => "$","currency" => "NAD"),
          array("name" => "Nauru","code" => "NR","symbol" => "$","currency" => "AUD"),
          array("name" => "Nepal","code" => "NP","symbol" => "₨","currency" => "NPR"),
          array("name" => "Netherlands","code" => "NL","symbol" => "€","currency" => "EUR"),
          array("name" => "Netherlands Antilles","code" => "AN","symbol" => "NAf","currency" => "ANG"),
          array("name" => "New Caledonia","code" => "NC","symbol" => "₣","currency" => "XPF"),
          array("name" => "New Zealand","code" => "NZ","symbol" => "$","currency" => "NZD"),
          array("name" => "Nicaragua","code" => "NI","symbol" => "C$","currency" => "NIO"),
          array("name" => "Niger","code" => "NE","symbol" => "CFA","currency" => "XOF"),
          array("name" => "Nigeria","code" => "NG","symbol" => "₦","currency" => "NGN"),
          array("name" => "Niue","code" => "NU","symbol" => "$","currency" => "NZD"),
          array("name" => "Norfolk Island","code" => "NF","symbol" => "$","currency" => "AUD"),
          array("name" => "Northern Mariana Islands","code" => "MP","symbol" => "$","currency" => "USD"),
          array("name" => "Norway","code" => "NO","symbol" => "kr","currency" => "NOK"),
          array("name" => "Oman","code" => "OM","symbol" => ".ع.ر","currency" => "OMR"),
          array("name" => "Pakistan","code" => "PK","symbol" => "₨","currency" => "PKR"),
          array("name" => "Palau","code" => "PW","symbol" => "$","currency" => "USD"),
          array("name" => "Palestinian Territory, Occupied","code" => "PS","symbol" => "₪","currency" => "ILS"),
          array("name" => "Panama","code" => "PA","symbol" => "B/.","currency" => "PAB"),
          array("name" => "Papua New Guinea","code" => "PG","symbol" => "K","currency" => "PGK"),
          array("name" => "Paraguay","code" => "PY","symbol" => "₲","currency" => "PYG"),
          array("name" => "Peru","code" => "PE","symbol" => "S/.","currency" => "PEN"),
          array("name" => "Philippines","code" => "PH","symbol" => "₱","currency" => "PHP"),
          array("name" => "Pitcairn","code" => "PN","symbol" => "$","currency" => "NZD"),
          array("name" => "Poland","code" => "PL","symbol" => "zł","currency" => "PLN"),
          array("name" => "Portugal","code" => "PT","symbol" => "€","currency" => "EUR"),
          array("name" => "Puerto Rico","code" => "PR","symbol" => "$","currency" => "USD"),
          array("name" => "Qatar","code" => "QA","symbol" => "ق.ر","currency" => "QAR"),
          array("name" => "Reunion","code" => "RE","symbol" => "€","currency" => "EUR"),
          array("name" => "Romania","code" => "RO","symbol" => "lei","currency" => "RON"),
          array("name" => "Russian Federation","code" => "RU","symbol" => "₽","currency" => "RUB"),
          array("name" => "Rwanda","code" => "RW","symbol" => "FRw","currency" => "RWF"),
          array("name" => "Saint Barthelemy","code" => "BL","symbol" => "€","currency" => "EUR"),
          array("name" => "Saint Helena","code" => "SH","symbol" => "£","currency" => "SHP"),
          array("name" => "Saint Kitts and Nevis","code" => "KN","symbol" => "$","currency" => "XCD"),
          array("name" => "Saint Lucia","code" => "LC","symbol" => "$","currency" => "XCD"),
          array("name" => "Saint Martin","code" => "MF","symbol" => "€","currency" => "EUR"),
          array("name" => "Saint Pierre and Miquelon","code" => "PM","symbol" => "€","currency" => "EUR"),
          array("name" => "Saint Vincent and the Grenadines","code" => "VC","symbol" => "$","currency" => "XCD"),
          array("name" => "Samoa","code" => "WS","symbol" => "SAT","currency" => "WST"),
          array("name" => "San Marino","code" => "SM","symbol" => "€","currency" => "EUR"),
          array("name" => "Sao Tome and Principe","code" => "ST","symbol" => "Db","currency" => "STD"),
          array("name" => "Saudi Arabia","code" => "SA","symbol" => "﷼","currency" => "SAR"),
          array("name" => "Senegal","code" => "SN","symbol" => "CFA","currency" => "XOF"),
          array("name" => "Serbia","code" => "RS","symbol" => "din","currency" => "RSD"),
          array("name" => "Serbia and Montenegro","code" => "CS","symbol" => "din","currency" => "RSD"),
          array("name" => "Seychelles","code" => "SC","symbol" => "SRe","currency" => "SCR"),
          array("name" => "Sierra Leone","code" => "SL","symbol" => "Le","currency" => "SLL"),
          array("name" => "Singapore","code" => "SG","symbol" => "$","currency" => "SGD"),
          array("name" => "St Martin","code" => "SX","symbol" => "ƒ","currency" => "ANG"),
          array("name" => "Slovakia","code" => "SK","symbol" => "€","currency" => "EUR"),
          array("name" => "Slovenia","code" => "SI","symbol" => "€","currency" => "EUR"),
          array("name" => "Solomon Islands","code" => "SB","symbol" => "Si$","currency" => "SBD"),
          array("name" => "Somalia","code" => "SO","symbol" => "Sh.so.","currency" => "SOS"),
          array("name" => "South Africa","code" => "ZA","symbol" => "R","currency" => "ZAR"),
          array("name" => "South Georgia and the South Sandwich Islands","code" => "GS","symbol" => "£","currency" => "GBP"),
          array("name" => "South Sudan","code" => "SS","symbol" => "£","currency" => "SSP"),
          array("name" => "Spain","code" => "ES","symbol" => "€","currency" => "EUR"),
          array("name" => "Sri Lanka","code" => "LK","symbol" => "Rs","currency" => "LKR"),
          array("name" => "Sudan","code" => "SD","symbol" => ".س.ج","currency" => "SDG"),
          array("name" => "Suriname","code" => "SR","symbol" => "$","currency" => "SRD"),
          array("name" => "Svalbard and Jan Mayen","code" => "SJ","symbol" => "kr","currency" => "NOK"),
          array("name" => "Swaziland","code" => "SZ","symbol" => "E","currency" => "SZL"),
          array("name" => "Sweden","code" => "SE","symbol" => "kr","currency" => "SEK"),
          array("name" => "Switzerland","code" => "CH","symbol" => "CHf","currency" => "CHF"),
          array("name" => "Syrian Arab Republic","code" => "SY","symbol" => "LS","currency" => "SYP"),
          array("name" => "Taiwan, Province of China","code" => "TW","symbol" => "$","currency" => "TWD"),
          array("name" => "Tajikistan","code" => "TJ","symbol" => "SM","currency" => "TJS"),
          array("name" => "Tanzania, United Republic of","code" => "TZ","symbol" => "TSh","currency" => "TZS"),
          array("name" => "Thailand","code" => "TH","symbol" => "฿","currency" => "THB"),
          array("name" => "Timor-Leste","code" => "TL","symbol" => "$","currency" => "USD"),
          array("name" => "Togo","code" => "TG","symbol" => "CFA","currency" => "XOF"),
          array("name" => "Tokelau","code" => "TK","symbol" => "$","currency" => "NZD"),
          array("name" => "Tonga","code" => "TO","symbol" => "$","currency" => "TOP"),
          array("name" => "Trinidad and Tobago","code" => "TT","symbol" => "$","currency" => "TTD"),
          array("name" => "Tunisia","code" => "TN","symbol" => "ت.د","currency" => "TND"),
          array("name" => "Turkey","code" => "TR","symbol" => "₺","currency" => "TRY"),
          array("name" => "Turkmenistan","code" => "TM","symbol" => "T","currency" => "TMT"),
          array("name" => "Turks and Caicos Islands","code" => "TC","symbol" => "$","currency" => "USD"),
          array("name" => "Tuvalu","code" => "TV","symbol" => "$","currency" => "AUD"),
          array("name" => "Uganda","code" => "UG","symbol" => "USh","currency" => "UGX"),
          array("name" => "Ukraine","code" => "UA","symbol" => "₴","currency" => "UAH"),
          array("name" => "United Arab Emirates","code" => "AE","symbol" => "إ.د","currency" => "AED"),
          array("name" => "United Kingdom","code" => "GB","symbol" => "£","currency" => "GBP"),
          array("name" => "United States","code" => "US","symbol" => "$","currency" => "USD"),
          array("name" => "United States Minor Outlying Islands","code" => "UM","symbol" => "$","currency" => "USD"),
          array("name" => "Uruguay","code" => "UY","symbol" => "$","currency" => "UYU"),
          array("name" => "Uzbekistan","code" => "UZ","symbol" => "лв","currency" => "UZS"),
          array("name" => "Vanuatu","code" => "VU","symbol" => "VT","currency" => "VUV"),
          array("name" => "Venezuela","code" => "VE","symbol" => "Bs","currency" => "VEF"),
          array("name" => "Viet Nam","code" => "VN","symbol" => "₫","currency" => "VND"),
          array("name" => "Virgin Islands, British","code" => "VG","symbol" => "$","currency" => "USD"),
          array("name" => "Virgin Islands, U.s.","code" => "VI","symbol" => "$","currency" => "USD"),
          array("name" => "Wallis and Futuna","code" => "WF","symbol" => "₣","currency" => "XPF"),
          array("name" => "Western Sahara","code" => "EH","symbol" => "MAD","currency" => "MAD"),
          array("name" => "Yemen","code" => "YE","symbol" => "﷼","currency" => "YER"),
          array("name" => "Zambia","code" => "ZM","symbol" => "ZK","currency" => "ZMW"),
          array("name" => "Zimbabwe","code" => "ZW","symbol" => "$","currency" => "ZWL")
      );
        foreach($country_list as $key){
          if($country == $key['code']){
            $country = $key['name'];
            $country_code = $key['code'];
            $country_currency = $key['symbol'];
            $currency_letter = $key['currency'];
            }
      }
        $currency = "$";
        $withdrawal  = 0;
        $min_earn = 0.3;
        $max_earn = 0.6;
        $plan = "level1";
        $lev_2amt = 100;
        $lev_4amt = 200;
        $spin_no = 1;
        $encrpt = md5($email.time());
        $userid = 'usd-'. substr($encrpt,0,3).substr($encrpt,-3,3);
         // unique reference id
        $refcode = uniqid($uname,true);

        if(empty($uname)|| empty($email)||  empty($country) || empty($phone) || empty($passwd)){
                header ("Location:../../account_1/register.php?signupempty");
                exit();  
        }elseif(empty($terms)){
          header ("Location:../../account_1/register.php?tempty");
          exit();
        }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                header ("Location:../../account_1/register.php?invalidemail");
                exit();

            }else{
                $sql = "SELECT * FROM users WHERE email='$email'";
                $result = mysqli_query($dbconnec,$sql);
                $result_check = mysqli_num_rows($result);
                if($result_check > 0){
                    header ("Location:../../account_1/register.php?uidtaken");
                    exit();
                }else{
             $sql = "INSERT INTO users (username,userid,email,address,country,phone,passwd,walletbal,currency,country_currency,currency_letter,country_code,totalwith,earns,welbonus,spin,spin_pacent,access,acctname,acctnumber,bankname,
                   whorefu,withdrawal,upline,terms,reg_date,firstname,lastname,profileimg,btcaddr,min_earn,max_earn,spin_no,lev_2amt,lev_4amt,tearns,currentplan,refcode,depositid,
                   timeofinvest,investedamount,invest_type,statusofinvest,active,refpaid) 
                   VALUES ('$uname','$userid','$email','Address: Provide your address','$country','$phone','$passwd',
                   '$walletbal','$currency','$country_currency','$currency_letter','$country_code','$totalwith','$earns','',1,0,'','','','','$refidd','$withdrawal','$refidd','$terms','$date','','','','','$min_earn','$max_earn','$spin_no','$lev_2amt','$lev_4amt','','$plan','','','','','','','ACTIVATE',0)";

                    if(!mysqli_query($dbconnec,$sql)){
                      die("Error: ".mysqli_error($dbconnec));
                      }

              //email to new registered user        
              //from: site domain name
              $site_domain = 'prideemergencyfund.com';
              //from: sender name
              $site_name = 'Prideemergencyfund LLC';
              //from: sender email
              $sitesupport_email = "support@prideemergencyfund.com";
              //to: receiver name
              $receiver_name = $uname;
              //to: receiver email
              $receiver_email = $email;
      
              $title = $site_domain.' - Welcome '.$uname;
              $headers = "MIME-Version: 1.0" . PHP_EOL;
              $headers .= "Content-type: text/html; charset=utf-8" . PHP_EOL;
              $headers .= "From: $site_name <$sitesupport_email>" . PHP_EOL;
              $headers .= "Organization: $site_name" . PHP_EOL;
              $headers .= "Reply-To: $site_name Support Team <$sitesupport_email>" . PHP_EOL;
              $headers .= "Return-Path: <$sitesupport_email>" . PHP_EOL;
              $headers .= "X-Priority: 3" . PHP_EOL;
              $headers .= "X-Mailer: PHP/" . phpversion() . PHP_EOL;
      
              $message ='<!DOCTYPE html>
      <html>
      <head>
      <title>'.$title. '</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <style type="text/css">
          /* FONTS */
          @import url("https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i");
      
          /* CLIENT-SPECIFIC STYLES */
          body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
          table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
          img { -ms-interpolation-mode: bicubic; }
      
          /* RESET STYLES */
          img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
          table { border-collapse: collapse !important; }
          body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
      
          /* iOS BLUE LINKS */
          a[x-apple-data-detectors] {
              color: inherit !important;
              text-decoration: none !important;
              font-size: inherit !important;
              font-family: inherit !important;
              font-weight: inherit !important;
              line-height: inherit !important;
          }
      
          /* MOBILE STYLES */
          @media screen and (max-width:600px){
              h1 {
                  font-size: 32px !important;
                  line-height: 32px !important;
              }
          }
      
          /* ANDROID CENTER FIX */
          div[style*="margin: 16px 0;"] { margin: 0 !important; }
      </style>
      </head>
      <body style="background-color: #f3f5f7; margin: 0 !important; padding: 0 !important;">
      
      <!-- HIDDEN PREHEADER TEXT -->
      <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: "Poppins", sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
          
      </div>
      
      <table border="0" cellpadding="0" cellspacing="0" width="100%">
          <!-- LOGO -->
          <tr>
              <td align="center" style="padding: 0px 10px 0px 10px;">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                      <tr>
                      <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 10px 10px 10px;">
                        <a href="#" target="_blank">
                        <div style="display: flex; align-items: center;">
                              <img class="logo-light logo-img logo-img-lg" src="https://www.prideemergencyfund.com/asset_swtalrt/images/pridefundlogo.png" width="40" alt="" style="margin:0"><h1 style="color: #FB8B00; font-size:30px; font-weight: 800; margin:0 10px 0; padding:0">PRIDE</h1>
                          </div>
                        </a>
                      </td>
                    </tr>
                  </table>
              </td>
          </tr>
          <!-- HERO -->
          
          <tr>
              <td align="center" style="padding: 0px 10px 0px 10px;">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                      <tr>
                          <td bgcolor="#ffffff" align="left" valign="top" style="padding: 20px 20px 10px 10px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Poppins", sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 2px; line-height: 48px;">
                            <p style="font-size: 18px; font-weight: 600; margin: 10px 13px;">Hi '.$receiver_name.',</p>
                          </td>
                      </tr>
                  </table>
              </td>
          </tr>
          <!-- COPY BLOCK -->
          <tr>
              <td align="center" style="padding: 0px 10px 0px 10px;">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <!-- COPY -->
                    <tr>
                      <td bgcolor="#ffffff" align="left" style="padding: 10px 10px 20px 10px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                        <p style="margin: 10px 13px; font-size: 16px;">We\'re excited to have you here! Welcome.</p>
                        <p style="margin:10px 13px; font-size: 14px;">Congratulations, Your account opening was successful.</p>
                        <p style="margin:10px 13px; font-size: 14px;">To begin enjoying our benefits, you can login to your dashboard by clicking the login link below. </p>
                      </td>
                    </tr>
                    
                    <!-- COPY -->
                    <tr>
                      <td bgcolor="#ffffff" align="left" style="padding: 10px 10px 20px 10px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                        <p style="margin: 10px 13px; font-size: 14px;"> <a href="https://www.prideemergencyfund.com/account_2/login.php">Login here </a>to proceed.</p>
                      </td>
                    </tr>

                    <!-- COPY HEADING -->
                    <tr>
                      <td bgcolor="#ffffff" align="left" style="padding: 10px 10px 40px 10px; color: #111111; font-family: "Poppins", sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
                        <h2 style="font-size: 14px; font-weight: 400; margin: 10px 13px;">Your Login details are:</h2>
                      </td>
                    </tr>
                    <!-- COPY -->
                    <tr>
                      <td bgcolor="#ffffff" align="left" style="padding: 10px 10px 20px 10px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                        <p style="margin: 10px 13px; font-size: 14px;">Username: '. $uname .'</p>
                        <p style="margin: 10px 13px; font-size: 14px;">Password: '.$passwd.'</p>
                      </td>
                    </tr>
                    <!-- COPY -->
                    <tr>
                      <td bgcolor="#ffffff" align="left" style="padding: 10px 10px 20px 10px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                        <p style="margin:10px 13px; font-size: 14px;">Warm regards,</p>
                      </td>
                    </tr>
                   
                    <!-- COPY -->
                    <tr>
                      <td bgcolor="#ffffff" align="left" style="padding: 10px 10px 40px 10px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                        <p style="margin:10px 13px; font-size: 14px;">From ' . $site_name . '</p>
                      </td>
                    </tr>
                  </table>
              </td>
          </tr>
          <!-- FOOTER -->
          <tr>
              <td align="center" style="padding: 0px 10px 50px 10px;">
          
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
             
              <!-- PERMISSION REMINDER -->
              <tr>
                <td bgcolor="#ffffff" align="left" style="padding: 10px 10px 10px 10px; color: #aaaaaa; font-family: "Poppins", sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
                  <p style="margin:20px 13px; font-size: 14px;">You received this email because you signed up with prideemergencyfund. If it looks weird, <a href="www.prideemergencyfund.com" target="_blank" style="color: #4188FA; font-weight: 700;">view it in your browser</a>.</p>
                </td>
              </tr>
              <!-- UNSUBSCRIBE -->
              <tr>
                <td bgcolor="#ffffff" align="left" style="padding: 10px 10px 10px 10px; color: #aaaaaa; font-family: "Poppins", sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;">
                  <p style="margin: 20px 13px; font-size: 14px;">If these emails get annoying, please feel free to <a href="#" target="_blank" style="color: #4188FA; font-weight: 700;">unsubscribe</a>.</p>
                </td>
              </tr>
          <!-- COPYRIGHT -->
              <tr>
                <td align="center" style="padding: 50px 10px 10px 10px; color: #333333; font-family: "Poppins", sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
                  <p style="margin: 70px 0 20px; font-size: 14px;">Copyright ©  prideemergencyfund. All rights reserved.</p>
                </td>
              </tr>
            </table>
              </td>
          </tr>
      </table>
      
      </body>
      
      </html>';
      @mail($receiver_email,$title,$message,$headers);
                   //email to admin on new registered user
                   
        // WOEKING ON THE REFERENCE TABLE
        if(empty($refidd)){

        }else{
       
          $sql = "SELECT * FROM reftable WHERE username='$uname'";
          $result = mysqli_query($dbconnec,$sql);
          $result_check = mysqli_num_rows($result);
          if($result_check < 1){
            $refcode=uniqid();
          $refcode = "ref".substr($refcode,0,3).substr($refcode,-3,3);
          $refbonus = "NOT PAID";
          $stat = 'Pending';
          $sql = "INSERT INTO reftable (username,email,phone,referee,bonus,status,refcode,reg_date) VALUES ('$uname','$email','$phone','$refidd','$refbonus','$stat','$refcode','$date')";
          if(!mysqli_query($dbconnec,$sql)){
            die("Error: ".mysqli_error($dbconnec));
          }
        }

        $sql = "UPDATE users

        SET refpaid='no'

        WHERE username='$refidd'";
         if(!mysqli_query($dbconnec,$sql)){
          die("Error: ".mysqli_error($dbconnec));
        }

        $sql = "SELECT * FROM users WHERE username='$refidd' ";
        $result = mysqli_query($dbconnec,$sql);
        $result_check = mysqli_num_rows($result);
        if($result_check > 0){
        while($data = mysqli_fetch_assoc($result)){
 
        $unr= $data['username'];
        $emailr= $data['email'];

        // sending referal mail notifications to the already registered user
                          

        // sending referel mail notification to the admin
      
                          }
                  }
        }
                    //  END OF REFREAL LINK
                    header ("Location:../../account_2/login.php?signupsuc");
                    exit();
                }
            }
         
    }else{
        header ("Location:../../account_1/register.php?error");
        exit();
    }