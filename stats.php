<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> "/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> "/>

    <title>
    Statistics about attendees:  <?php echo $META['shortName'];?>
    </title>
    <style>
     
     #worldmap {
       height: 700px;
     }
     .loading {
       margin-top: 10em;
       text-align: center;
       color: gray;
     }
     
    </style>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container-fluid p-4">

      <h2 class="indPageTitle">
      Statistics about attendees
      </h2>
      <div id="worldmap"></div>
      <div class="row">
        <div class="col-6 offset-3">
          <table class="table table-striped w-50" id="table">
            <thead>
              <th>Country</th><th>Attendees</th>
            </thead>
            <tbody id="tbody">
            </tbody>
          </table>
        </div>
      </div>
    </main>

  <?php include "includes/footer.php"; ?>
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/custom/world-lowres.js"></script>
<script>
 let byCountry = [["ae", 8],
                  ["at", 15],
                  ["au", 24],
                  ["be", 28],
                  ["bg", 2],
                  ["br", 7],
                  ["ca", 24],
                  ["ch", 57],
                  ["cl", 2],
                  ["cn", 51],
                  ["cz", 3],
                  ["de", 110],
                  ["dk", 17],
                  ["ec", 1],
                  ["ee", 2],
                  ["eg", 1],
                  ["es", 24],
                  ["fi", 4],
                  ["fj", 1],
                  ["fr", 119],
                  ["gb", 69],
                  ["gr", 5],
                  ["hk", 5],
                  ["hr", 3],
                  ["hu", 3],
                  ["il", 39],
                  ["in", 28],
                  ["ir", 2],
                  ["it", 8],
                  ["jp", 53],
                  ["kr", 41],
                  ["kw", 1],
                  ["kz", 1],
                  ["lb", 1],
                  ["lu", 11],
                  ["mx", 4],
                  ["my", 3],
                  ["nl", 49],
                  ["no", 28],
                  ["nz", 5],
                  ["pk", 3],
                  ["pl", 7],
                  ["pt", 1],
                  ["ro", 4],
                  ["ru", 4],
                  ["sa", 3],
                  ["se", 6],
                  ["sg", 15],
                  ["si", 2],
                  ["sk", 3],
                  ["sn", 1],
                  ["tr", 6],
                  ["us", 274],
                  ["za", 1]];
 let countrySorted = [...byCountry];
  countrySorted.sort(function(a,b) {
   return b[1] - a[1];
 });
Highcharts.mapChart('worldmap', {
          chart: {
            map: 'custom/world-lowres'
          },

          title: {
            text: 'Attendees by country'
          },

          subtitle: {
            text: 'Source map: <a href="http://code.highcharts.com/mapdata/custom/world-lowres.js">World, Miller projection, low resolution</a>'
          },
          legend: {
            layout: 'horizontal',
            borderWidth: 0,
            floating: true,
            verticalAlign: 'bottom',
            y: 0
          },

          mapNavigation: {
            enabled: true,
            buttonOptions: {
              verticalAlign: 'bottom'
            }
          },

          colorAxis: {
            min: 1,
            type: 'logarithmic',
            maxColor: '#000022',
            minColor: '#EEEEFF'
          },

          series: [{
            animation: {
              duration: 2000
            },
            data: byCountry,
            name: 'Attendees by country',
            dataLabels: {
              enabled: true,
              format: '{point.name}'
            },
            tooltip: {
              pointFormat: '{point.name}: {point.value}'
            }
          }]
  });
 let names = {
   "gg": "Guernsey",
   "sd": "Sudan",
   "hm": "Heard Island and McDonald Islands",
   "za": "South Africa",
   "eh": "Western Sahara",
   "ru": "Russian Federation",
   "br": "Brazil",
   "ug": "Uganda",
   "cf": "Central African Republic",
   "ca": "Canada",
   "bq": "Bonaire, Sint Eustatius and Saba",
   "pf": "French Polynesia",
   "bm": "Bermuda",
   "pg": "Papua New Guinea",
   "im": "Isle of Man",
   "md": "Moldova, Republic of",
   "cd": "Congo, the Democratic Republic of the",
   "cg": "Congo",
   "dj": "Djibouti",
   "ie": "Ireland",
   "cc": "Cocos (Keeling) Islands",
   "eg": "Egypt",
   "jp": "Japan",
   "st": "Sao Tome and Principe",
   "th": "Thailand",
   "nf": "Norfolk Island",
   "tj": "Tajikistan",
   "mc": "Monaco",
   "sb": "Solomon Islands",
   "mo": "Macao",
   "cm": "Cameroon",
   "kh": "Cambodia",
   "tk": "Tokelau",
   "tt": "Trinidad and Tobago",
   "ck": "Cook Islands",
   "zm": "Zambia",
   "er": "Eritrea",
   "uy": "Uruguay",
   "sn": "Senegal",
   "lu": "Luxembourg",
   "vc": "Saint Vincent and the Grenadines",
   "by": "Belarus",
   "tm": "Turkmenistan",
   "om": "Oman",
   "aq": "Antarctica",
   "co": "Colombia",
   "pe": "Peru",
   "fi": "Finland",
   "sm": "San Marino",
   "cy": "Cyprus",
   "sv": "El Salvador",
   "rs": "Serbia",
   "tg": "Togo",
   "kp": "Korea, Democratic People's Republic of",
   "bd": "Bangladesh",
   "mk": "Macedonia, the Former Yugoslav Republic of",
   "mu": "Mauritius",
   "sl": "Sierra Leone",
   "kr": "Korea, Republic of",
   "fm": "Micronesia, Federated States of",
   "qa": "Qatar",
   "mm": "Myanmar",
   "hn": "Honduras",
   "de": "Germany",
   "hu": "Hungary",
   "bi": "Burundi",
   "np": "Nepal",
   "tf": "French Southern Territories",
   "tn": "Tunisia",
   "gm": "Gambia",
   "ve": "Venezuela, Bolivarian Republic of",
   "ni": "Nicaragua",
   "km": "Comoros",
   "lr": "Liberia",
   "mx": "Mexico",
   "am": "Armenia",
   "lk": "Sri Lanka",
   "bj": "Benin",
   "ky": "Cayman Islands",
   "mr": "Mauritania",
   "gw": "Guinea-Bissau",
   "vu": "Vanuatu",
   "re": "R\u00e9union",
   "tz": "Tanzania, United Republic of",
   "ro": "Romania",
   "my": "Malaysia",
   "cu": "Cuba",
   "bo": "Bolivia, Plurinational State of",
   "it": "Italy",
   "ma": "Morocco",
   "nc": "New Caledonia",
   "mh": "Marshall Islands",
   "mg": "Madagascar",
   "um": "United States Minor Outlying Islands",
   "tw": "Taiwan, Province of China",
   "py": "Paraguay",
   "se": "Sweden",
   "fo": "Faroe Islands",
   "lc": "Saint Lucia",
   "ly": "Libya",
   "mq": "Martinique",
   "lb": "Lebanon",
   "cz": "Czech Republic",
   "ht": "Haiti",
   "id": "Indonesia",
   "aw": "Aruba",
   "mn": "Mongolia",
   "si": "Slovenia",
   "gn": "Guinea",
   "je": "Jersey",
   "jm": "Jamaica",
   "ge": "Georgia",
   "kz": "Kazakhstan",
   "dm": "Dominica",
   "ai": "Anguilla",
   "bv": "Bouvet Island",
   "vg": "Virgin Islands, British",
   "gq": "Equatorial Guinea",
   "cx": "Christmas Island",
   "na": "Namibia",
   "kg": "Kyrgyzstan",
   "at": "Austria",
   "cv": "Cape Verde",
   "ms": "Montserrat",
   "bb": "Barbados",
   "gs": "South Georgia and the South Sandwich Islands",
   "kw": "Kuwait",
   "sj": "Svalbard and Jan Mayen",
   "ec": "Ecuador",
   "uz": "Uzbekistan",
   "la": "Lao People's Democratic Republic",
   "jo": "Jordan",
   "dk": "Denmark",
   "nr": "Nauru",
   "ke": "Kenya",
   "pk": "Pakistan",
   "sy": "Syrian Arab Republic",
   "et": "Ethiopia",
   "gy": "Guyana",
   "ax": "\u00c5land Islands",
   "tv": "Tuvalu",
   "tc": "Turks and Caicos Islands",
   "nl": "Netherlands",
   "wf": "Wallis and Futuna",
   "ba": "Bosnia and Herzegovina",
   "lv": "Latvia",
   "ls": "Lesotho",
   "bh": "Bahrain",
   "dz": "Algeria",
   "mf": "Saint Martin (French part)",
   "fj": "Fiji",
   "sa": "Saudi Arabia",
   "ee": "Estonia",
   "fk": "Falkland Islands (Malvinas)",
   "rw": "Rwanda",
   "fr": "France",
   "ye": "Yemen",
   "al": "Albania",
   "pw": "Palau",
   "cr": "Costa Rica",
   "ml": "Mali",
   "hr": "Croatia",
   "pn": "Pitcairn",
   "gr": "Greece",
   "bl": "Saint Barth\u00e9lemy",
   "ag": "Antigua and Barbuda",
   "ua": "Ukraine",
   "mv": "Maldives",
   "cl": "Chile",
   "pl": "Poland",
   "ar": "Argentina",
   "nu": "Niue",
   "pt": "Portugal",
   "be": "Belgium",
   "yt": "Mayotte",
   "ga": "Gabon",
   "iq": "Iraq",
   "sg": "Singapore",
   "io": "British Indian Ocean Territory",
   "sc": "Seychelles",
   "do": "Dominican Republic",
   "gb": "United Kingdom",
   "gh": "Ghana",
   "ae": "United Arab Emirates",
   "af": "Afghanistan",
   "ci": "C\u00f4te d'Ivoire",
   "gd": "Grenada",
   "vi": "Virgin Islands, U.S.",
   "pr": "Puerto Rico",
   "ws": "Samoa",
   "cn": "China",
   "gi": "Gibraltar",
   "us": "United States",
   "mz": "Mozambique",
   "lt": "Lithuania",
   "nz": "New Zealand",
   "mt": "Malta",
   "bw": "Botswana",
   "bg": "Bulgaria",
   "il": "Israel",
   "ao": "Angola",
   "tr": "Turkey",
   "sr": "Suriname",
   "td": "Chad",
   "vn": "Viet Nam",
   "gl": "Greenland",
   "ir": "Iran, Islamic Republic of",
   "ne": "Niger",
   "cw": "Cura\u00e7ao",
   "mw": "Malawi",
   "az": "Azerbaijan",
   "bt": "Bhutan",
   "sh": "Saint Helena, Ascension and Tristan da Cunha",
   "va": "Holy See (Vatican City State)",
   "ch": "Switzerland",
   "sz": "Swaziland",
   "ad": "Andorra",
   "gp": "Guadeloupe",
   "pm": "Saint Pierre and Miquelon",
   "as": "American Samoa",
   "in": "India",
   "sk": "Slovakia",
   "zw": "Zimbabwe",
   "hk": "Hong Kong",
   "es": "Spain",
   "no": "Norway",
   "bf": "Burkina Faso",
   "ph": "Philippines",
   "bs": "Bahamas",
   "pa": "Panama",
   "ki": "Kiribati",
   "sx": "Sint Maarten (Dutch part)",
   "gf": "French Guiana",
   "bz": "Belize",
   "gt": "Guatemala",
   "ps": "Palestine, State of",
   "tl": "Timor-Leste",
   "au": "Australia",
   "me": "Montenegro",
   "to": "Tonga",
   "ng": "Nigeria",
   "bn": "Brunei Darussalam",
   "gu": "Guam",
   "so": "Somalia",
   "ss": "South Sudan",
   "kn": "Saint Kitts and Nevis",
   "mp": "Northern Mariana Islands",
   "is": "Iceland",
   "li": "Liechtenstein"
  };
  let tbody = document.getElementById('tbody');
 console.dir(byCountry);
 countrySorted.forEach(function(item, index) {
    let tr = document.createElement('tr');
    let td = document.createElement('td');
   td.appendChild(document.createTextNode(names[item[0]]));
   tr.appendChild(td);
   td = document.createElement('td');
   td.appendChild(document.createTextNode(item[1]));
   tr.appendChild(td);
   tbody.appendChild(tr);
 });
</script>

</html>
