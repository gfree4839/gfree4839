<!DOCTYPE html>
<html>
<head>
    <title>Digital Clock</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #111;
            color: #0f0;
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        #clock {
            display: inline-block;
            padding: 40px;
            border: 4px solid #0f0;
            border-radius: 20px;
            background-color: #222;
            color: #0f0;
            font-size: 120px; /* Increased font size */
            margin-bottom: 20px;
        }
        #countryTime {
            display: inline-block;
            padding: 20px;
            border: 2px solid #0f0;
            border-radius: 10px;
            background-color: #222;
            color: #0f0;
            font-size: 48px;
            margin-top: 20px;
        }
        input {
            padding: 10px;
            font-size: 24px;
            border-radius: 5px;
            border: 2px solid #0f0;
            background-color: #333;
            color: #0f0;
            margin-bottom: 20px;
        }
        button {
            padding: 10px 20px;
            font-size: 24px;
            border-radius: 5px;
            border: 2px solid #0f0;
            background-color: #333;
            color: #0f0;
            cursor: pointer;
        }
    </style>
    <script>
        function updateClock() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();
            var ampm = hours >= 12 ? 'PM' : 'AM';
            
            // Convert to 12-hour format
            hours = hours % 12;
            hours = hours ? hours : 12; // the hour '0' should be '12'
            
            // Add leading zeros if needed
            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            
            var timeString = hours + ':' + minutes + ':' + seconds + ' ' + ampm;
            
            document.getElementById('clock').innerHTML = timeString;
        }
        
        function fetchCountryTime() {
            var country = document.getElementById('countryInput').value;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'get_country_time.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (this.status === 200) {
                    document.getElementById('countryTime').innerHTML = this.responseText;
                }
            };
            xhr.send('country=' + country);
        }

        // Update the clock every second
        setInterval(updateClock, 1000);
        
        // Initialize the clock display
        window.onload = updateClock;
    </script>
</head>
<body>
    <div id="clock">
        <?php
        date_default_timezone_set('Asia/Kolkata'); // Correct timezone
        echo date('h:i:s A');
        ?>
    </div>
    <input type="text" id="countryInput" list="countryList" placeholder="Enter country name">
    <datalist id="countryList">
        <option value="Afghanistan">
        <option value="Albania">
        <option value="Algeria">
        <option value="Andorra">
        <option value="Angola">
        <option value="Argentina">
        <option value="Armenia">
        <option value="Australia">
        <option value="Austria">
        <option value="Azerbaijan">
        <option value="Bahamas">
        <option value="Bahrain">
        <option value="Bangladesh">
        <option value="Barbados">
        <option value="Belarus">
        <option value="Belgium">
        <option value="Belize">
        <option value="Benin">
        <option value="Bhutan">
        <option value="Bolivia">
        <option value="Bosnia and Herzegovina">
        <option value="Botswana">
        <option value="Brazil">
        <option value="Brunei">
        <option value="Bulgaria">
        <option value="Burkina Faso">
        <option value="Burundi">
        <option value="Cambodia">
        <option value="Cameroon">
        <option value="Canada">
        <option value="Cape Verde">
        <option value="Central African Republic">
        <option value="Chad">
        <option value="Chile">
        <option value="China">
        <option value="Colombia">
        <option value="Comoros">
        <option value="Congo">
        <option value="Costa Rica">
        <option value="Croatia">
        <option value="Cuba">
        <option value="Cyprus">
        <option value="Czech Republic">
        <option value="Denmark">
        <option value="Djibouti">
        <option value="Dominica">
        <option value="Dominican Republic">
        <option value="East Timor">
        <option value="Ecuador">
        <option value="Egypt">
        <option value="El Salvador">
        <option value="Equatorial Guinea">
        <option value="Eritrea">
        <option value="Estonia">
        <option value="Eswatini">
        <option value="Ethiopia">
        <option value="Fiji">
        <option value="Finland">
        <option value="France">
        <option value="Gabon">
        <option value="Gambia">
        <option value="Georgia">
        <option value="Germany">
        <option value="Ghana">
        <option value="Greece">
        <option value="Grenada">
        <option value="Guatemala">
        <option value="Guinea">
        <option value="Guinea-Bissau">
        <option value="Guyana">
        <option value="Haiti">
        <option value="Honduras">
        <option value="Hungary">
        <option value="Iceland">
        <option value="India">
        <option value="Indonesia">
        <option value="Iran">
        <option value="Iraq">
        <option value="Ireland">
        <option value="Israel">
        <option value="Italy">
        <option value="Ivory Coast">
        <option value="Jamaica">
        <option value="Japan">
        <option value="Jordan">
        <option value="Kazakhstan">
        <option value="Kenya">
        <option value="Kiribati">
<option value="Kuwait">
<option value="Kyrgyzstan">
<option value="Laos">
<option value="Latvia">
<option value="Lebanon">
<option value="Lesotho">
<option value="Liberia">
<option value="Libya">
<option value="Liechtenstein">
<option value="Lithuania">
<option value="Luxembourg">
<option value="Madagascar">
<option value="Malawi">
<option value="Malaysia">
<option value="Maldives">
<option value="Mali">
<option value="Malta">
<option value="Marshall Islands">
<option value="Mauritania">
<option value="Mauritius">
<option value="Mexico">
<option value="Micronesia">
<option value="Moldova">
<option value="Monaco">
<option value="Mongolia">
<option value="Montenegro">
<option value="Morocco">
<option value="Mozambique">
<option value="Myanmar">
<option value="Namibia">
<option value="Nauru">
<option value="Nepal">
<option value="Netherlands">
<option value="New Zealand">
<option value="Nicaragua">
<option value="Niger">
<option value="Nigeria">
<option value="North Korea">
<option value="North Macedonia">
<option value="Norway">
<option value="Oman">
<option value="Pakistan">
<option value="Palau">
<option value="Panama">
<option value="Papua New Guinea">
<option value="Paraguay">
<option value="Peru">
<option value="Philippines">
<option value="Poland">
<option value="Portugal">
<option value="Qatar">
<option value="Romania">
<option value="Russia">
<option value="Rwanda">
<option value="Saint Kitts and Nevis">
<option value="Saint Lucia">
<option value="Saint Vincent and the Grenadines">
<option value="Samoa">
<option value="San Marino">
<option value="Sao Tome and Principe">
<option value="Saudi Arabia">
<option value="Senegal">
<option value="Serbia">
<option value="Seychelles">
<option value="Sierra Leone">
<option value="Singapore">
<option value="Slovakia">
<option value="Slovenia">
<option value="Solomon Islands">
<option value="Somalia">
<option value="South Africa">
<option value="South Korea">
<option value="South Sudan">
<option value="Spain">
<option value="Sri Lanka">
<option value="Sudan">
<option value="Suriname">
<option value="Sweden">
<option value="Switzerland">
<option value="Syria">
<option value="Taiwan">
<option value="Tajikistan">
<option value="Tanzania">
<option value="Thailand">
<option value="Togo">
<option value="Tonga">
<option value="Trinidad and Tobago">
<option value="Tunisia">
<option value="Turkey">
<option value="Turkmenistan">
<option value="Tuvalu">
<option value="Uganda">
<option value="Ukraine">
<option value="United Arab Emirates">
<option value="United Kingdom">
<option value="United States">
<option value="Uruguay">
<option value="Uzbekistan">
<option value="Vanuatu">
<option value="Vatican City">
<option value="Venezuela">
<option value="Vietnam">
<option value="Yemen">
<option value="Zambia">
<option value="Zimbabwe">
    
</option>
</datalist>
<button onclick="fetchCountryTime()">Get Country Time</button>
<div id="countryTime"></div>
</body>
</html>
