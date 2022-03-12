<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            [
                "name_country" => "México",
                "iso_code" => "MX"
            ],
            [
                "name_country" => "Afganistán",
                "iso_code" => "AF"
            ],
            [
                "name_country" => "Islas Gland",
                "iso_code" => "AX"
            ],
            [
                "name_country" => "Albania",
                "iso_code" => "AL"
            ],
            [
                "name_country" => "Alemania",
                "iso_code" => "DE"
            ],
            [
                "name_country" => "Andorra",
                "iso_code" => "AD"
            ],
            [
                "name_country" => "Angola",
                "iso_code" => "AO"
            ],
            [
                "name_country" => "Anguilla",
                "iso_code" => "AI"
            ],
            [
                "name_country" => "Antártida",
                "iso_code" => "AQ"
            ],
            [
                "name_country" => "Antigua y Barbuda",
                "iso_code" => "AG"
            ],
            [
                "name_country" => "Antillas Holandesas",
                "iso_code" => "AN"
            ],
            [
                "name_country" => "Arabia Saudí",
                "iso_code" => "SA"
            ],
            [
                "name_country" => "Argelia",
                "iso_code" => "DZ"
            ],
            [
                "name_country" => "Argentina",
                "iso_code" => "AR"
            ],
            [
                "name_country" => "Armenia",
                "iso_code" => "AM"
            ],
            [
                "name_country" => "Aruba",
                "iso_code" => "AW"
            ],
            [
                "name_country" => "Australia",
                "iso_code" => "AU"
            ],
            [
                "name_country" => "Austria",
                "iso_code" => "AT"
            ],
            [
                "name_country" => "Azerbaiyán",
                "iso_code" => "AZ"
            ],
            [
                "name_country" => "Bahamas",
                "iso_code" => "BS"
            ],
            [
                "name_country" => "Bahréin",
                "iso_code" => "BH"
            ],
            [
                "name_country" => "Bangladesh",
                "iso_code" => "BD"
            ],
            [
                "name_country" => "Barbados",
                "iso_code" => "BB"
            ],
            [
                "name_country" => "Bielorrusia",
                "iso_code" => "BY"
            ],
            [
                "name_country" => "Bélgica",
                "iso_code" => "BE"
            ],
            [
                "name_country" => "Belice",
                "iso_code" => "BZ"
            ],
            [
                "name_country" => "Benin",
                "iso_code" => "BJ"
            ],
            [
                "name_country" => "Bermudas",
                "iso_code" => "BM"
            ],
            [
                "name_country" => "Bhután",
                "iso_code" => "BT"
            ],
            [
                "name_country" => "Bolivia",
                "iso_code" => "BO"
            ],
            [
                "name_country" => "Bosnia y Herzegovina",
                "iso_code" => "BA"
            ],
            [
                "name_country" => "Botsuana",
                "iso_code" => "BW"
            ],
            [
                "name_country" => "Isla Bouvet",
                "iso_code" => "BV"
            ],
            [
                "name_country" => "Brasil",
                "iso_code" => "BR"
            ],
            [
                "name_country" => "Brunéi",
                "iso_code" => "BN"
            ],
            [
                "name_country" => "Bulgaria",
                "iso_code" => "BG"
            ],
            [
                "name_country" => "Burkina Faso",
                "iso_code" => "BF"
            ],
            [
                "name_country" => "Burundi",
                "iso_code" => "BI"
            ],
            [
                "name_country" => "Cabo Verde",
                "iso_code" => "CV"
            ],
            [
                "name_country" => "Islas Caimán",
                "iso_code" => "KY"
            ],
            [
                "name_country" => "Camboya",
                "iso_code" => "KH"
            ],
            [
                "name_country" => "Camerún",
                "iso_code" => "CM"
            ],
            [
                "name_country" => "Canadá",
                "iso_code" => "CA"
            ],
            [
                "name_country" => "República Centroafricana",
                "iso_code" => "CF"
            ],
            [
                "name_country" => "Chad",
                "iso_code" => "TD"
            ],
            [
                "name_country" => "República Checa",
                "iso_code" => "CZ"
            ],
            [
                "name_country" => "China",
                "iso_code" => "CN"
            ],
            [
                "name_country" => "Chipre",
                "iso_code" => "CY"
            ],
            [
                "name_country" => "Isla de Navidad",
                "iso_code" => "CX"
            ],
            [
                "name_country" => "Ciudad del Vaticano",
                "iso_code" => "VA"
            ],
            [
                "name_country" => "Islas Cocos",
                "iso_code" => "CC"
            ],
            [
                "name_country" => "Colombia",
                "iso_code" => "CO"
            ],
            [
                "name_country" => "Comoras",
                "iso_code" => "KM"
            ],
            [
                "name_country" => "República Democrática del Congo",
                "iso_code" => "CD"
            ],
            [
                "name_country" => "Congo",
                "iso_code" => "CG"
            ],
            [
                "name_country" => "Islas Cook",
                "iso_code" => "CK"
            ],
            [
                "name_country" => "Corea del Norte",
                "iso_code" => "KP"
            ],
            [
                "name_country" => "Corea del Sur",
                "iso_code" => "KR"
            ],
            [
                "name_country" => "Costa de Marfil",
                "iso_code" => "CI"
            ],
            [
                "name_country" => "Costa Rica",
                "iso_code" => "CR"
            ],
            [
                "name_country" => "Croacia",
                "iso_code" => "HR"
            ],
            [
                "name_country" => "Cuba",
                "iso_code" => "CU"
            ],
            [
                "name_country" => "Dinamarca",
                "iso_code" => "DK"
            ],
            [
                "name_country" => "Dominica",
                "iso_code" => "DM"
            ],
            [
                "name_country" => "República Dominicana",
                "iso_code" => "DO"
            ],
            [
                "name_country" => "Ecuador",
                "iso_code" => "EC"
            ],
            [
                "name_country" => "Egipto",
                "iso_code" => "EG"
            ],
            [
                "name_country" => "El Salvador",
                "iso_code" => "SV"
            ],
            [
                "name_country" => "Emiratos Árabes Unidos",
                "iso_code" => "AE"
            ],
            [
                "name_country" => "Eritrea",
                "iso_code" => "ER"
            ],
            [
                "name_country" => "Eslovaquia",
                "iso_code" => "SK"
            ],
            [
                "name_country" => "Eslovenia",
                "iso_code" => "SI"
            ],
            [
                "name_country" => "España",
                "iso_code" => "ES"
            ],
            [
                "name_country" => "Islas ultramarinas de Estados Unidos",
                "iso_code" => "UM"
            ],
            [
                "name_country" => "Estados Unidos",
                "iso_code" => "US"
            ],
            [
                "name_country" => "Estonia",
                "iso_code" => "EE"
            ],
            [
                "name_country" => "Etiopía",
                "iso_code" => "ET"
            ],
            [
                "name_country" => "Islas Feroe",
                "iso_code" => "FO"
            ],
            [
                "name_country" => "Filipinas",
                "iso_code" => "PH"
            ],
            [
                "name_country" => "Finlandia",
                "iso_code" => "FI"
            ],
            [
                "name_country" => "Fiyi",
                "iso_code" => "FJ"
            ],
            [
                "name_country" => "Francia",
                "iso_code" => "FR"
            ],
            [
                "name_country" => "Gabón",
                "iso_code" => "GA"
            ],
            [
                "name_country" => "Gambia",
                "iso_code" => "GM"
            ],
            [
                "name_country" => "Georgia",
                "iso_code" => "GE"
            ],
            [
                "name_country" => "Islas Georgias del Sur y Sandwich del Sur",
                "iso_code" => "GS"
            ],
            [
                "name_country" => "Ghana",
                "iso_code" => "GH"
            ],
            [
                "name_country" => "Gibraltar",
                "iso_code" => "GI"
            ],
            [
                "name_country" => "Granada",
                "iso_code" => "GD"
            ],
            [
                "name_country" => "Grecia",
                "iso_code" => "GR"
            ],
            [
                "name_country" => "Groenlandia",
                "iso_code" => "GL"
            ],
            [
                "name_country" => "Guadalupe",
                "iso_code" => "GP"
            ],
            [
                "name_country" => "Guam",
                "iso_code" => "GU"
            ],
            [
                "name_country" => "Guatemala",
                "iso_code" => "GT"
            ],
            [
                "name_country" => "Guayana Francesa",
                "iso_code" => "GF"
            ],
            [
                "name_country" => "Guinea",
                "iso_code" => "GN"
            ],
            [
                "name_country" => "Guinea Ecuatorial",
                "iso_code" => "GQ"
            ],
            [
                "name_country" => "Guinea-Bissau",
                "iso_code" => "GW"
            ],
            [
                "name_country" => "Guyana",
                "iso_code" => "GY"
            ],
            [

                "name_country" => "Haití",
                "iso_code" => "HT"
            ],
            [

                "name_country" => "Islas Heard y McDonald",
                "iso_code" => "HM"
            ],
            [

                "name_country" => "Honduras",
                "iso_code" => "HN"
            ],
            [

                "name_country" => "Hong Kong",
                "iso_code" => "HK"
            ],
            [

                "name_country" => "Hungría",
                "iso_code" => "HU"
            ],
            [

                "name_country" => "India",
                "iso_code" => "IN"
            ],
            [

                "name_country" => "Indonesia",
                "iso_code"
            ],
            [

                "name_country" => "Irán",
                "iso_code" => "IR"
            ],
            [

                "name_country" => "Iraq",
                "iso_code" => "IQ"
            ],
            [

                "name_country" => "Irlanda",
                "iso_code" => "IE"
            ],
            [

                "name_country" => "Islandia",
                "iso_code" => "IS"
            ],
            [

                "name_country" => "Israel",
                "iso_code" => "IL"
            ],
            [

                "name_country" => "Italia",
                "iso_code" => "IT"
            ],
            [

                "name_country" => "Jamaica",
                "iso_code" => "JM"
            ],
            [

                "name_country" => "Japón",
                "iso_code" => "JP"
            ],
            [

                "name_country" => "Jordania",
                "iso_code" => "JO"
            ],
            [

                "name_country" => "Kazajstán",
                "iso_code" => "KZ"
            ],
            [

                "name_country" => "Kenia",
                "iso_code" => "KE"
            ],
            [

                "name_country" => "Kirguistán",
                "iso_code" => "KG"
            ],
            [

                "name_country" => "Kiribati",
                "iso_code" => "KI"
            ],
            [

                "name_country" => "Kuwait",
                "iso_code" => "KW"
            ],
            [

                "name_country" => "Laos",
                "iso_code" => "LA"
            ],
            [

                "name_country" => "Lesotho",
                "iso_code" => "LS"
            ],
            [

                "name_country" => "Letonia",
                "iso_code" => "LV"
            ],
            [

                "name_country" => "Líbano",
                "iso_code" => "LB"
            ],
            [

                "name_country" => "Liberia",
                "iso_code" => "LR"
            ],
            [

                "name_country" => "Libia",
                "iso_code" => "LY"
            ],
            [

                "name_country" => "Liechtenstein",
                "iso_code" => "LI"
            ],
            [

                "name_country" => "Lituania",
                "iso_code" => "LT"
            ],
            [

                "name_country" => "Luxemburgo",
                "iso_code" => "LU"
            ],
            [

                "name_country" => "Macao",
                "iso_code" => "MO"
            ],
            [

                "name_country" => "ARY Macedonia",
                "iso_code" => "MK"
            ],
            [

                "name_country" => "Madagascar",
                "iso_code" => "MG"
            ],
            [

                "name_country" => "Malasia",
                "iso_code" => "MY"
            ],
            [

                "name_country" => "Malawi",
                "iso_code" => "MW"
            ],
            [

                "name_country" => "Maldivas",
                "iso_code" => "MV"
            ],
            [

                "name_country" => "Malí",
                "iso_code" => "ML"
            ],
            [

                "name_country" => "Malta",
                "iso_code" => "MT"
            ],
            [

                "name_country" => "Islas Malvinas",
                "iso_code" => "FK"
            ],
            [

                "name_country" => "Islas Marianas del Norte",
                "iso_code" => "MP"
            ],
            [

                "name_country" => "Marruecos",
                "iso_code" => "MA"
            ],
            [

                "name_country" => "Islas Marshall",
                "iso_code" => "MH"
            ],
            [

                "name_country" => "Martinica",
                "iso_code" => "MQ"
            ],
            [

                "name_country" => "Mauricio",
                "iso_code" => "MU"
            ],
            [

                "name_country" => "Mauritania",
                "iso_code" => "MR"
            ],
            [

                "name_country" => "Mayotte",
                "iso_code" => "YT"
            ],
            [

                "name_country" => "Chile",
                "iso_code" => "CL"
            ],
            [

                "name_country" => "Micronesia",
                "iso_code" => "FM"
            ],
            [

                "name_country" => "Moldavia",
                "iso_code" => "MD"
            ],
            [

                "name_country" => "Mónaco",
                "iso_code" => "MC"
            ],
            [

                "name_country" => "Mongolia",
                "iso_code" => "MN"
            ],
            [

                "name_country" => "Montserrat",
                "iso_code" => "MS"
            ],
            [

                "name_country" => "Mozambique",
                "iso_code" => "MZ"
            ],
            [

                "name_country" => "Myanmar",
                "iso_code" => "MM"
            ],
            [

                "name_country" => "Namibia",
                "iso_code" => "NA"
            ],
            [

                "name_country" => "Nauru",
                "iso_code" => "NR"
            ],
            [

                "name_country" => "Nepal",
                "iso_code" => "NP"
            ],
            [

                "name_country" => "Nicaragua",
                "iso_code" => "NI"
            ],
            [

                "name_country" => "Níger",
                "iso_code" => "NE"
            ],
            [

                "name_country" => "Nigeria",
                "iso_code" => "NG"
            ],
            [

                "name_country" => "Niue",
                "iso_code" => "NU"
            ],
            [

                "name_country" => "Isla Norfolk",
                "iso_code" => "NF"
            ],
            [

                "name_country" => "Noruega",
                "iso_code" => "NO"
            ],
            [

                "name_country" => "Nueva Caledonia",
                "iso_code" => "NC"
            ],
            [

                "name_country" => "Nueva Zelanda",
                "iso_code" => "NZ"
            ],
            [

                "name_country" => "Omán",
                "iso_code" => "OM"
            ],
            [

                "name_country" => "Países Bajos",
                "iso_code" => "NL"
            ],
            [

                "name_country" => "Pakistán",
                "iso_code" => "PK"
            ],
            [

                "name_country" => "Palau",
                "iso_code" => "PW"
            ],
            [

                "name_country" => "Palestina",
                "iso_code" => "PS"
            ],
            [

                "name_country" => "Panamá",
                "iso_code" => "PA"
            ],
            [

                "name_country" => "Papúa Nueva Guinea",
                "iso_code" => "PG"
            ],
            [

                "name_country" => "Paraguay",
                "iso_code" => "PY"
            ],
            [

                "name_country" => "Perú",
                "iso_code" => "PE"
            ],
            [

                "name_country" => "Islas Pitcairn",
                "iso_code" => "PN"
            ],
            [

                "name_country" => "Polinesia Francesa",
                "iso_code" => "PF"
            ],
            [

                "name_country" => "Polonia",
                "iso_code" => "PL"
            ],
            [

                "name_country" => "Portugal",
                "iso_code" => "PT"
            ],
            [

                "name_country" => "Puerto Rico",
                "iso_code" => "PR"
            ],
            [

                "name_country" => "Qatar",
                "iso_code" => "QA"
            ],
            [

                "name_country" => "Reino Unido",
                "iso_code" => "GB"
            ],
            [

                "name_country" => "Reunión",
                "iso_code" => "RE"
            ],
            [

                "name_country" => "Ruanda",
                "iso_code" => "RW"
            ],
            [

                "name_country" => "Rumania",
                "iso_code" => "RO"
            ],
            [

                "name_country" => "Rusia",
                "iso_code" => "RU"
            ],
            [

                "name_country" => "Sahara Occidental",
                "iso_code" => "EH"
            ],
            [

                "name_country" => "Islas Salomón",
                "iso_code" => "SB"
            ],
            [

                "name_country" => "Samoa",
                "iso_code" => "WS"
            ],
            [

                "name_country" => "Samoa Americana",
                "iso_code" => "AS"
            ],
            [

                "name_country" => "San Cristóbal y Nevis",
                "iso_code" => "KN"
            ],
            [

                "name_country" => "San Marino",
                "iso_code" => "SM"
            ],
            [

                "name_country" => "San Pedro y Miquelón",
                "iso_code" => "PM"
            ],
            [

                "name_country" => "San Vicente y las Granadinas",
                "iso_code" => "VC"
            ],
            [

                "name_country" => "Santa Helena",
                "iso_code" => "SH"
            ],
            [

                "name_country" => "Santa Lucía",
                "iso_code" => "LC"
            ],
            [

                "name_country" => "Santo Tomé y Príncipe",
                "iso_code" => "ST"
            ],
            [

                "name_country" => "Senegal",
                "iso_code" => "SN"
            ],
            [

                "name_country" => "Serbia y Montenegro",
                "iso_code" => "CS"
            ],
            [

                "name_country" => "Seychelles",
                "iso_code" => "SC"
            ],
            [

                "name_country" => "Sierra Leona",
                "iso_code" => "SL"
            ],
            [

                "name_country" => "Singapur",
                "iso_code" => "SG"
            ],
            [

                "name_country" => "Siria",
                "iso_code" => "SY"
            ],
            [

                "name_country" => "Somalia",
                "iso_code" => "SO"
            ],
            [

                "name_country" => "Sri Lanka",
                "iso_code" => "LK"
            ],
            [

                "name_country" => "Suazilandia",
                "iso_code" => "SZ"
            ],
            [

                "name_country" => "Sudáfrica",
                "iso_code" => "ZA"
            ],
            [

                "name_country" => "Sudán",
                "iso_code" => "SD"
            ],
            [

                "name_country" => "Suecia",
                "iso_code" => "SE"
            ],
            [

                "name_country" => "Suiza",
                "iso_code" => "CH"
            ],
            [

                "name_country" => "Surinam",
                "iso_code" => "SR"
            ],
            [

                "name_country" => "Svalbard y Jan Mayen",
                "iso_code" => "SJ"
            ],
            [

                "name_country" => "Tailandia",
                "iso_code" => "TH"
            ],
            [

                "name_country" => "Taiwán",
                "iso_code" => "TW"
            ],
            [

                "name_country" => "Tanzania",
                "iso_code" => "TZ"
            ],
            [

                "name_country" => "Tayikistán",
                "iso_code" => "TJ"
            ],
            [

                "name_country" => "Territorio Británico del Océano Índico",
                "iso_code" => "IO"
            ],
            [

                "name_country" => "Territorios Australes Franceses",
                "iso_code" => "TF"
            ],
            [

                "name_country" => "Timor Oriental",
                "iso_code" => "TL"
            ],
            [

                "name_country" => "Togo",
                "iso_code" => "TG"
            ],
            [

                "name_country" => "Tokelau",
                "iso_code" => "TK"
            ],
            [

                "name_country" => "Tonga",
                "iso_code" => "TO"
            ],
            [

                "name_country" => "Trinidad y Tobago",
                "iso_code" => "TT"
            ],
            [

                "name_country" => "Túnez",
                "iso_code" => "TN"
            ],
            [

                "name_country" => "Islas Turcas y Caicos",
                "iso_code" => "TC"
            ],
            [

                "name_country" => "Turkmenistán",
                "iso_code" => "TM"
            ],
            [

                "name_country" => "Turquía",
                "iso_code" => "TR"
            ],
            [

                "name_country" => "Tuvalu",
                "iso_code" => "TV"
            ],
            [

                "name_country" => "Ucrania",
                "iso_code" => "UA"
            ],
            [

                "name_country" => "Uganda",
                "iso_code" => "UG"
            ],
            [

                "name_country" => "Uruguay",
                "iso_code" => "UY"
            ],
            [

                "name_country" => "Uzbekistán",
                "iso_code" => "UZ"
            ],
            [

                "name_country" => "Vanuatu",
                "iso_code" => "VU"
            ],
            [

                "name_country" => "Venezuela",
                "iso_code" => "VE"
            ],
            [

                "name_country" => "Vietnam",
                "iso_code" => "VN"
            ],
            [

                "name_country" => "Islas Vírgenes Británicas",
                "iso_code" => "VG"
            ],
            [

                "name_country" => "Islas Vírgenes de los Estados Unidos",
                "iso_code" => "VI"
            ],
            [

                "name_country" => "Wallis y Futuna",
                "iso_code" => "WF"
            ],
            [

                "name_country" => "Yemen",
                "iso_code" => "YE"
            ],
            [

                "name_country" => "Yibuti",
                "iso_code" => "DJ"
            ],
            [

                "name_country" => "Zambia",
                "iso_code" => "ZM"
            ],
            [

                "name_country" => "Zimbabue",
                "iso_code" => "ZW"
            ]
        ];

        Country::insert($arr);
    }
}
