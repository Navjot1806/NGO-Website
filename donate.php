<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <title>Donation form</title>
    <link rel="stylesheet" href="form.css?v=<?php echo time(); ?>">
    
</head>
<body>
     <div class="testbox">
      <form action="donate_action.php" method="POST" onsubmit="return formvalidate()">
        <div class="banner">
          <h1>Donation Form</h1>
        </div>
        <br>
        <div class="colums">
          <div class="item">
            <label for="name">Name<span>*</span></label>
            <input id="name" type="text" name="name" class="form-control" />
            <span id="username"></span>
          </div>
          <div class="item">
            <label for="email">Email Address<span>*</span></label>
            <input id="email" type="text" name="email" class="form-control" />
            <span id="emails"></span>
          </div>
          <div class="item">
            <label for="phone">Phone<span>*</span></label>
            <input id="phone" type="tel"   name="phone" class="form-control" />
            <span id="phonenumber"></span>
          </div></br>
          <div class="item">
            <label for="address">Address<span>*</span></label>
            <input id="address" type="text" name="address" class="form-control" />
            <span id="addr"></span>
          </div>
          
          <div class="item">
            <label for="country">Country<span>*</span></label>
            <br>
            <select name="country" id="/" class="form-control">
            <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India" selected>India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
          </div>
        </div>
        <div class="week">
          <div class="question">
            <label>Different Categories For Donation :</label>
            <div class="question-answer">
            <span id="choice_error" style="color:red"></span>
              <div>
                <input type="radio" value="1" id="radio_0" name="choice">
                <label for="radio_0" class="radio" onclick="show(1)"><span>Donate For Education of Unpriviledged Children</span></label>
              </div>
              <div>
                <input  type="radio" value="2" id="radio_1" name="choice"/>
                <label for="radio_1" class="radio" onclick="show(2)"><span>Donate For Youth Training Centre</span></label>
              </div>
              <div>
                <input  type="radio" value="3" id="radio_2" name="choice"/>
                <label for="radio_2" class="radio" onclick="show(3)"><span>Donate For Disaster Relief</span></label>
              </div>
              <div>
                <input  type="radio" value="4" id="radio_3" name="choice"/>
                <label for="radio_3" class="radio" onclick="show(4)"><span>Donate For Covid-19 Relief</span></label>
              </div>
              <div>
                <input  type="radio" value="5" id="radio_4" name="choice"/>
                <label for="radio_4" class="radio" onclick="show(5)"><span>Donate For Child Health</span></label>
              </div>
            </div>
          </div>
        </div>
        <div class="week" id="education" style="display:none">
          <div class="question">
            <label>Donate For Education of UnPrivildeged Children</label>
            <div class="question-answer">
            <span id="err0" style="color:red"></span>
              <div>
                <input type="radio" value="30000" id="radio_5" name="donate1"/>
                <label for="radio_5" class="radio"><span>Rs. 30,000/- (for the education of 5 children for 1 year)</span></label>
              </div>
              <div>
                <input  type="radio" value="18000" id="radio_6" name="donate1"/>
                <label for="radio_6" class="radio"><span>Rs. 18,000/- (for the education of 3 children for 1 year)</span></label>
              </div>
              <div>
                <input  type="radio" value="6000" id="radio_7" name="donate1"/>
                <label for="radio_7" class="radio"><span> Rs. 6,000/- (for the education of 1 child for 1 year) </span></label>
              </div>
              <div>
                <input  type="radio" value="0" id="radio_8" name="donate1"/>
                <label for="radio_8" class="radio"><span> Other amount:</span></label>
                <input type="text" size="10" name="other1" id="other1">
                <span id="err2" style="color:red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="week" id="training" style="display:none">
          <div class="question">
            <label>Donate For Training of Youth</label>
            <div class="question-answer">
            <span id="err1" style="color:red"></span>
              <div>
                <input type="radio" value="15000" id="radio_9" name="donate2"/>
                <label for="radio_9" class="radio"><span>Rs. 15,000/- (for the training of 3 youth)</span></label>
              </div>
              <div>
                <input  type="radio" value="10000" id="radio_10" name="donate2"/>
                <label for="radio_10" class="radio"><span>Rs. 10,000/- (for the training of 2 youth)</span></label>
              </div>
              <div>
                <input  type="radio" value="5000" id="radio_11" name="donate2"/>
                <label for="radio_11" class="radio"><span>Rs. 5,000/- (for the training of 1 youth)</span></label>
              </div>
              <div>
                <input  type="radio" value="0" id="radio_12" name="donate2"/>
                <label for="radio_12" class="radio"><span> Other amount:</span></label>
                <input type="text" size="10" name="other2" id="other2">
                <span id="err3" style="color:red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="week" id="disaster_relief" style="display:none">
          <div class="question">
            <label>Donate In our Disaster Relief Fund</label>
              <div>
                <label for="donate3"></label>Enter amount you want to donate :</label>
                <input type="text" size="10" name="donate3" id="donate3">
                <span id="err4" style="color:red"></span>
              </div>
            </div>
          </div>
        <div class="week" id="covid_relief" style="display:none">
          <div class="question">
            <label>Donate In our Covid-19 Relief Fund</label>
              <div>
                <label for="donate4"></label>Enter amount you want to donate :</label>
                <input type="text" size="10" name="donate4" id="donate4">
                <span id="err5" style="color:red"></span>
              </div>
          </div>
        </div>
        <div class="week" id="child_healthcare" style="display:none">
          <div class="question">
            <label>Donate For Child Health Care</label>
            <div class="question-answer">
            <span id="err6" style="color:red"></span>
              <div>
                <input type="radio" value="14200" id="radio_13" name="donate5"/>
                <label for="radio_13" class="radio"><span>Rs. 14,200/- (healthcare for 100 children)</span></label>
              </div>
              <div>
                <input  type="radio" value="8520" id="radio_14" name="donate5"/>
                <label for="radio_14" class="radio"><span>Rs. 8,520/- (healthcare for 60 children)</span></label>
              </div>
              <div>
                <input  type="radio" value="4260" id="radio_15" name="donate5"/>
                <label for="radio_15" class="radio"><span>Rs. 4,260/- (healthcare for 30 children)</span></label>
              </div>
              <div>
                <input  type="radio" value="0" id="radio_16" name="donate5"/>
                <label for="radio_16" class="radio"><span> Other amount:</span></label>
                <input type="text" size="10" name="other3" id="other3">
                <span id="err7" style="color:red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-block">
          <button type="submit" href="/">Donate</button>
        </div>
      </form>
    </div>
    <script type="text/javascript" src="js/donate_control.js"></script>
    <script type="text/javascript" src="js/donate_validation.js"></script>
</body>
</html>