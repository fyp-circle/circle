@extends('layouts.profile_lay')

@section('profilecontent')
<div class="row">
    <div class="col-lg-12">
        <div class="row merged20" id="page-contents">
            <!-- centerl meta -->
            <div class="col-lg-12">
                <div class="central-meta">
                    <div class="about">
                        <div class="personal">
                            <h5 class="f-title"><i class="ti-info-alt"></i> Edit Info</h5>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left">
                                <li class="nav-item">
                                    <a href="#basic" class="nav-link active" data-toggle="tab">Basic info</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#work" class="nav-link" data-toggle="tab">Education</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#interest" class="nav-link" data-toggle="tab">interests</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#lang" class="nav-link" data-toggle="tab">languages</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="basic">
                                    <ul class="basics">
                                        <form method="post"  action="{{ route('editinfofriendspost',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" id="input" required="required" name="name" value= "{{Auth::user()->name}}"  />
                                                <label class="control-label" for="input">Full Name</label><i
                                                    class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <input disabled type="text" required="required" name="email" value= "{{Auth::user()->email}}"/>
                                                <label class="control-label" for="input">Email@</label><i
                                                    class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="required"  name="phone" value= "{{Auth::user()->phone}}" />
                                                <label class="control-label" for="input">Phone No.</label><i
                                                    class="mtrl-select"></i>
                                            </div>
                                            <div class="dob">
                                                <div class="form-group">
                                                    <select name="day">
                                                        <option value="00" disabled selected>Day</option>
                                                        <option value={{Auth::user()->day}} selected> {{Auth::user()->day}} </option>
                                                        <option value="01">1</option>
                                                        <option value="02">2</option>
                                                        <option value="03">3</option>
                                                        <option value="04">4</option>
                                                        <option value="05">5</option>
                                                        <option value="06">6</option>
                                                        <option value="07">7</option>
                                                        <option value="08">8</option>
                                                        <option value="09">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select name="month">
                                                        <option value="00" disable selected>Month</option>
                                                        <option value={{Auth::user()->month}} selected> {{Auth::user()->month}} </option>
                                                        <option value="01">January</option>
                                                        <option value="02">February</option>
                                                        <option value="03">March</option>
                                                        <option value="04">April</option>
                                                        <option value="05">May</option>
                                                        <option value="06">June</option>
                                                        <option value="07">July</option>
                                                        <option value="08">August</option>
                                                        <option value="09">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select name="year">
                                                        <option value="0000">Year</option>
                                                        <option value={{Auth::user()->year}} selected> {{Auth::user()->year}} </option>
                                                        <option value="2019">2019</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2009">2009</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2007">2007</option>
                                                        <option value="2006">2006</option>
                                                        <option value="2005">2005</option>
                                                        <option value="2004">2004</option>
                                                        <option value="2003">2003</option>
                                                        <option value="2002">2002</option>
                                                        <option value="2001">2001</option>
                                                        <option value="2000">2000</option>
                                                        <option value="1999">1999</option>
                                                        <option value="1998">1998</option>
                                                        <option value="1997">1997</option>
                                                        <option value="1996">1996</option>
                                                        <option value="1995">1995</option>
                                                        <option value="1994">1994</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1992">1992</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1990">1990</option>
                                                        <option value="1989">1989</option>
                                                        <option value="1988">1988</option>
                                                        <option value="1987">1987</option>
                                                        <option value="1986">1986</option>
                                                        <option value="1985">1985</option>
                                                        <option value="1984">1984</option>
                                                        <option value="1983">1983</option>
                                                        <option value="1982">1982</option>
                                                        <option value="1981">1981</option>
                                                        <option value="1980">1980</option>
                                                        <option value="1979">1979</option>
                                                        <option value="1978">1978</option>
                                                        <option value="1977">1977</option>
                                                        <option value="1976">1976</option>
                                                        <option value="1975">1975</option>
                                                        <option value="1974">1974</option>
                                                        <option value="1973">1973</option>
                                                        <option value="1972">1972</option>
                                                        <option value="1971">1971</option>
                                                        <option value="1970">1970</option>
                                                        <option value="1969">1969</option>
                                                        <option value="1968">1968</option>
                                                        <option value="1967">1967</option>
                                                        <option value="1966">1966</option>
                                                        <option value="1965">1965</option>
                                                        <option value="1964">1964</option>
                                                        <option value="1963">1963</option>
                                                        <option value="1962">1962</option>
                                                        <option value="1961">1961</option>
                                                        <option value="1960">1960</option>
                                                        <option value="1959">1959</option>
                                                        <option value="1958">1958</option>
                                                        <option value="1957">1957</option>
                                                        <option value="1956">1956</option>
                                                        <option value="1955">1955</option>
                                                        <option value="1954">1954</option>
                                                        <option value="1953">1953</option>
                                                        <option value="1952">1952</option>
                                                        <option value="1951">1951</option>
                                                        <option value="1950">1950</option>
                                                        <option value="1949">1949</option>
                                                        <option value="1948">1948</option>
                                                        <option value="1947">1947</option>
                                                        <option value="1946">1946</option>
                                                        <option value="1945">1945</option>
                                                        <option value="1944">1944</option>
                                                        <option value="1943">1943</option>
                                                        <option value="1942">1942</option>
                                                        <option value="1941">1941</option>
                                                        <option value="1940">1940</option>
                                                        <option value="1939">1939</option>
                                                        <option value="1938">1938</option>
                                                        <option value="1937">1937</option>
                                                        <option value="1936">1936</option>
                                                        <option value="1935">1935</option>
                                                        <option value="1934">1934</option>
                                                        <option value="1933">1933</option>
                                                        <option value="1932">1932</option>
                                                        <option value="1931">1931</option>
                                                        <option value="1930">1930</option>
                                                        <option value="1929">1929</option>
                                                        <option value="1928">1928</option>
                                                        <option value="1927">1927</option>
                                                        <option value="1926">1926</option>
                                                        <option value="1925">1925</option>
                                                        <option value="1924">1924</option>
                                                        <option value="1923">1923</option>
                                                        <option value="1922">1922</option>
                                                        <option value="1921">1921</option>
                                                        <option value="1920">1920</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-radio">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" checked="checked"  name="gender"><i
                                                            class="check-box"></i>Male
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="gender"><i class="check-box"></i>Female
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="required" name="city" value= "{{Auth::user()->city}}" />
                                                <label class="control-label" for="input">City</label><i
                                                    class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <select name="country">
                                                    <option value={{Auth::user()->country}} selected> {{Auth::user()->country}} </option>
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
                                                    <option value="India">India</option>
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
                                            <div class="form-group">
                                                <textarea rows="4" id="textarea" required="required" name="about_me">{{Auth::user()->about_me}}</textarea>
                                                <label class="control-label" for="textarea">About Me</label><i
                                                    class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                    <p style="font-size:1rem">Profile Pic</p>
                                                    <i class="fa fa-camera-retro"></i>
                                                    <input type="file"  class="form-control" name="dp">
                                            </div>
                                            <div class="form-group">
                                                    <p style="font-size:1rem">Cover Photo</p>
                                                    <i class="fa fa-camera-retro"></i>
                                                    <input type="file" class="form-control" name="cover">
                                            </div>
                                            <div class="submit-btns">
                                                <button type="button" class="mtr-btn"><span>Cancel</span></button>
                                                <button type="submit" class="mtr-btn"><span>Update</span></button>
                                            </div>
                                        </form>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="work" role="tabpanel">
                                    <div>
                                        <form method="post">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" checked="checked"><i
                                                        class="check-box"></i>Graduate
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" checked="checked"><i
                                                        class="check-box"></i>Masters
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="input" required="required" />
                                                <label class="control-label" for="input">Studying at</label><i
                                                    class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group half">
                                                <input type="text" required="required" />
                                                <label class="control-label" for="input">From</label><i
                                                    class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group half">
                                                <input type="text" required="required" />
                                                <label class="control-label" for="input">To</label><i
                                                    class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="required" />
                                                <label class="control-label" for="input">City</label><i
                                                    class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <select>
                                                    <option value="country">Country</option>
                                                    <option value="AFG">Afghanistan</option>
                                                    <option value="ALA">Ƭand Islands</option>
                                                    <option value="ALB">Albania</option>
                                                    <option value="DZA">Algeria</option>
                                                    <option value="ASM">American Samoa</option>
                                                    <option value="AND">Andorra</option>
                                                    <option value="AGO">Angola</option>
                                                    <option value="AIA">Anguilla</option>
                                                    <option value="ATA">Antarctica</option>
                                                    <option value="ATG">Antigua and Barbuda</option>
                                                    <option value="ARG">Argentina</option>
                                                    <option value="ARM">Armenia</option>
                                                    <option value="ABW">Aruba</option>
                                                    <option value="AUS">Australia</option>
                                                    <option value="AUT">Austria</option>
                                                    <option value="AZE">Azerbaijan</option>
                                                    <option value="BHS">Bahamas</option>
                                                    <option value="BHR">Bahrain</option>
                                                    <option value="BGD">Bangladesh</option>
                                                    <option value="BRB">Barbados</option>
                                                    <option value="BLR">Belarus</option>
                                                    <option value="BEL">Belgium</option>
                                                    <option value="BLZ">Belize</option>
                                                    <option value="BEN">Benin</option>
                                                    <option value="BMU">Bermuda</option>
                                                    <option value="BTN">Bhutan</option>
                                                    <option value="BOL">Bolivia, Plurinational State of</option>
                                                    <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="BIH">Bosnia and Herzegovina</option>
                                                    <option value="BWA">Botswana</option>
                                                    <option value="BVT">Bouvet Island</option>
                                                    <option value="BRA">Brazil</option>
                                                    <option value="IOT">British Indian Ocean Territory</option>
                                                    <option value="BRN">Brunei Darussalam</option>
                                                    <option value="BGR">Bulgaria</option>
                                                    <option value="BFA">Burkina Faso</option>
                                                    <option value="BDI">Burundi</option>
                                                    <option value="KHM">Cambodia</option>
                                                    <option value="CMR">Cameroon</option>
                                                    <option value="CAN">Canada</option>
                                                    <option value="CPV">Cape Verde</option>
                                                    <option value="CYM">Cayman Islands</option>
                                                    <option value="CAF">Central African Republic</option>
                                                    <option value="TCD">Chad</option>
                                                    <option value="CHL">Chile</option>
                                                    <option value="CHN">China</option>
                                                    <option value="CXR">Christmas Island</option>
                                                    <option value="CCK">Cocos (Keeling) Islands</option>
                                                    <option value="COL">Colombia</option>
                                                    <option value="COM">Comoros</option>
                                                    <option value="COG">Congo</option>
                                                    <option value="COD">Congo, the Democratic Republic of the</option>
                                                    <option value="COK">Cook Islands</option>
                                                    <option value="CRI">Costa Rica</option>
                                                    <option value="CIV">C𴥠d'Ivoire</option>
                                                    <option value="HRV">Croatia</option>
                                                    <option value="CUB">Cuba</option>
                                                    <option value="CUW">Cura袯</option>
                                                    <option value="CYP">Cyprus</option>
                                                    <option value="CZE">Czech Republic</option>
                                                    <option value="DNK">Denmark</option>
                                                    <option value="DJI">Djibouti</option>
                                                    <option value="DMA">Dominica</option>
                                                    <option value="DOM">Dominican Republic</option>
                                                    <option value="ECU">Ecuador</option>
                                                    <option value="EGY">Egypt</option>
                                                    <option value="SLV">El Salvador</option>
                                                    <option value="GNQ">Equatorial Guinea</option>
                                                    <option value="ERI">Eritrea</option>
                                                    <option value="EST">Estonia</option>
                                                    <option value="ETH">Ethiopia</option>
                                                    <option value="FLK">Falkland Islands (Malvinas)</option>
                                                    <option value="FRO">Faroe Islands</option>
                                                    <option value="FJI">Fiji</option>
                                                    <option value="FIN">Finland</option>
                                                    <option value="FRA">France</option>
                                                    <option value="GUF">French Guiana</option>
                                                    <option value="PYF">French Polynesia</option>
                                                    <option value="ATF">French Southern Territories</option>
                                                    <option value="GAB">Gabon</option>
                                                    <option value="GMB">Gambia</option>
                                                    <option value="GEO">Georgia</option>
                                                    <option value="DEU">Germany</option>
                                                    <option value="GHA">Ghana</option>
                                                    <option value="GIB">Gibraltar</option>
                                                    <option value="GRC">Greece</option>
                                                    <option value="GRL">Greenland</option>
                                                    <option value="GRD">Grenada</option>
                                                    <option value="GLP">Guadeloupe</option>
                                                    <option value="GUM">Guam</option>
                                                    <option value="GTM">Guatemala</option>
                                                    <option value="GGY">Guernsey</option>
                                                    <option value="GIN">Guinea</option>
                                                    <option value="GNB">Guinea-Bissau</option>
                                                    <option value="GUY">Guyana</option>
                                                    <option value="HTI">Haiti</option>
                                                    <option value="HMD">Heard Island and McDonald Islands</option>
                                                    <option value="VAT">Holy See (Vatican City State)</option>
                                                    <option value="HND">Honduras</option>
                                                    <option value="HKG">Hong Kong</option>
                                                    <option value="HUN">Hungary</option>
                                                    <option value="ISL">Iceland</option>
                                                    <option value="IND">India</option>
                                                    <option value="IDN">Indonesia</option>
                                                    <option value="IRN">Iran, Islamic Republic of</option>
                                                    <option value="IRQ">Iraq</option>
                                                    <option value="IRL">Ireland</option>
                                                    <option value="IMN">Isle of Man</option>
                                                    <option value="ISR">Israel</option>
                                                    <option value="ITA">Italy</option>
                                                    <option value="JAM">Jamaica</option>
                                                    <option value="JPN">Japan</option>
                                                    <option value="JEY">Jersey</option>
                                                    <option value="JOR">Jordan</option>
                                                    <option value="KAZ">Kazakhstan</option>
                                                    <option value="KEN">Kenya</option>
                                                    <option value="KIR">Kiribati</option>
                                                    <option value="PRK">Korea, Democratic People's Republic of</option>
                                                    <option value="KOR">Korea, Republic of</option>
                                                    <option value="KWT">Kuwait</option>
                                                    <option value="KGZ">Kyrgyzstan</option>
                                                    <option value="LAO">Lao People's Democratic Republic</option>
                                                    <option value="LVA">Latvia</option>
                                                    <option value="LBN">Lebanon</option>
                                                    <option value="LSO">Lesotho</option>
                                                    <option value="LBR">Liberia</option>
                                                    <option value="LBY">Libya</option>
                                                    <option value="LIE">Liechtenstein</option>
                                                    <option value="LTU">Lithuania</option>
                                                    <option value="LUX">Luxembourg</option>
                                                    <option value="MAC">Macao</option>
                                                    <option value="MKD">Macedonia, the former Yugoslav Republic of
                                                    </option>
                                                    <option value="MDG">Madagascar</option>
                                                    <option value="MWI">Malawi</option>
                                                    <option value="MYS">Malaysia</option>
                                                    <option value="MDV">Maldives</option>
                                                    <option value="MLI">Mali</option>
                                                    <option value="MLT">Malta</option>
                                                    <option value="MHL">Marshall Islands</option>
                                                    <option value="MTQ">Martinique</option>
                                                    <option value="MRT">Mauritania</option>
                                                    <option value="MUS">Mauritius</option>
                                                    <option value="MYT">Mayotte</option>
                                                    <option value="MEX">Mexico</option>
                                                    <option value="FSM">Micronesia, Federated States of</option>
                                                    <option value="MDA">Moldova, Republic of</option>
                                                    <option value="MCO">Monaco</option>
                                                    <option value="MNG">Mongolia</option>
                                                    <option value="MNE">Montenegro</option>
                                                    <option value="MSR">Montserrat</option>
                                                    <option value="MAR">Morocco</option>
                                                    <option value="MOZ">Mozambique</option>
                                                    <option value="MMR">Myanmar</option>
                                                    <option value="NAM">Namibia</option>
                                                    <option value="NRU">Nauru</option>
                                                    <option value="NPL">Nepal</option>
                                                    <option value="NLD">Netherlands</option>
                                                    <option value="NCL">New Caledonia</option>
                                                    <option value="NZL">New Zealand</option>
                                                    <option value="NIC">Nicaragua</option>
                                                    <option value="NER">Niger</option>
                                                    <option value="NGA">Nigeria</option>
                                                    <option value="NIU">Niue</option>
                                                    <option value="NFK">Norfolk Island</option>
                                                    <option value="MNP">Northern Mariana Islands</option>
                                                    <option value="NOR">Norway</option>
                                                    <option value="OMN">Oman</option>
                                                    <option value="PAK">Pakistan</option>
                                                    <option value="PLW">Palau</option>
                                                    <option value="PSE">Palestinian Territory, Occupied</option>
                                                    <option value="PAN">Panama</option>
                                                    <option value="PNG">Papua New Guinea</option>
                                                    <option value="PRY">Paraguay</option>
                                                    <option value="PER">Peru</option>
                                                    <option value="PHL">Philippines</option>
                                                    <option value="PCN">Pitcairn</option>
                                                    <option value="POL">Poland</option>
                                                    <option value="PRT">Portugal</option>
                                                    <option value="PRI">Puerto Rico</option>
                                                    <option value="QAT">Qatar</option>
                                                    <option value="REU">R궮ion</option>
                                                    <option value="ROU">Romania</option>
                                                    <option value="RUS">Russian Federation</option>
                                                    <option value="RWA">Rwanda</option>
                                                    <option value="BLM">Saint Barthꭥmy</option>
                                                    <option value="SHN">Saint Helena, Ascension and Tristan da Cunha
                                                    </option>
                                                    <option value="KNA">Saint Kitts and Nevis</option>
                                                    <option value="LCA">Saint Lucia</option>
                                                    <option value="MAF">Saint Martin (French part)</option>
                                                    <option value="SPM">Saint Pierre and Miquelon</option>
                                                    <option value="VCT">Saint Vincent and the Grenadines</option>
                                                    <option value="WSM">Samoa</option>
                                                    <option value="SMR">San Marino</option>
                                                    <option value="STP">Sao Tome and Principe</option>
                                                    <option value="SAU">Saudi Arabia</option>
                                                    <option value="SEN">Senegal</option>
                                                    <option value="SRB">Serbia</option>
                                                    <option value="SYC">Seychelles</option>
                                                    <option value="SLE">Sierra Leone</option>
                                                    <option value="SGP">Singapore</option>
                                                    <option value="SXM">Sint Maarten (Dutch part)</option>
                                                    <option value="SVK">Slovakia</option>
                                                    <option value="SVN">Slovenia</option>
                                                    <option value="SLB">Solomon Islands</option>
                                                    <option value="SOM">Somalia</option>
                                                    <option value="ZAF">South Africa</option>
                                                    <option value="SGS">South Georgia and the South Sandwich Islands
                                                    </option>
                                                    <option value="SSD">South Sudan</option>
                                                    <option value="ESP">Spain</option>
                                                    <option value="LKA">Sri Lanka</option>
                                                    <option value="SDN">Sudan</option>
                                                    <option value="SUR">Suriname</option>
                                                    <option value="SJM">Svalbard and Jan Mayen</option>
                                                    <option value="SWZ">Swaziland</option>
                                                    <option value="SWE">Sweden</option>
                                                    <option value="CHE">Switzerland</option>
                                                    <option value="SYR">Syrian Arab Republic</option>
                                                    <option value="TWN">Taiwan, Province of China</option>
                                                    <option value="TJK">Tajikistan</option>
                                                    <option value="TZA">Tanzania, United Republic of</option>
                                                    <option value="THA">Thailand</option>
                                                    <option value="TLS">Timor-Leste</option>
                                                    <option value="TGO">Togo</option>
                                                    <option value="TKL">Tokelau</option>
                                                    <option value="TON">Tonga</option>
                                                    <option value="TTO">Trinidad and Tobago</option>
                                                    <option value="TUN">Tunisia</option>
                                                    <option value="TUR">Turkey</option>
                                                    <option value="TKM">Turkmenistan</option>
                                                    <option value="TCA">Turks and Caicos Islands</option>
                                                    <option value="TUV">Tuvalu</option>
                                                    <option value="UGA">Uganda</option>
                                                    <option value="UKR">Ukraine</option>
                                                    <option value="ARE">United Arab Emirates</option>
                                                    <option value="GBR">United Kingdom</option>
                                                    <option value="USA" selected>United States</option>
                                                    <option value="UMI">United States Minor Outlying Islands</option>
                                                    <option value="URY">Uruguay</option>
                                                    <option value="UZB">Uzbekistan</option>
                                                    <option value="VUT">Vanuatu</option>
                                                    <option value="VEN">Venezuela, Bolivarian Republic of</option>
                                                    <option value="VNM">Viet Nam</option>
                                                    <option value="VGB">Virgin Islands, British</option>
                                                    <option value="VIR">Virgin Islands, U.S.</option>
                                                    <option value="WLF">Wallis and Futuna</option>
                                                    <option value="ESH">Western Sahara</option>
                                                    <option value="YEM">Yemen</option>
                                                    <option value="ZMB">Zambia</option>
                                                    <option value="ZWE">Zimbabwe</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <textarea rows="4" id="textarea" required="required"></textarea>
                                                <label class="control-label" for="textarea">Description</label><i
                                                    class="mtrl-select"></i>
                                            </div>
                                            <div class="submit-btns">
                                                <button type="button" class="mtr-btn"><span>Cancel</span></button>
                                                <button type="button" class="mtr-btn"><span>Update</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="interest" role="tabpanel">
                                    <div class="editing-interest">
                                        <form method="post">
                                            <label>Add interests: </label>
                                            <div><input type="text" placeholder="Photography, Cycling, traveling.">
                                            <button type="submit">Add</button></div>
                                            <ol class="interest-added">
                                                <li><a href="#" title="">Cycling</a><span class="remove"
                                                        title="remove"><i class="fa fa-close"></i></span></li>
                                                <li><a href="#" title="">Traveling</a><span class="remove"
                                                        title="remove"><i class="fa fa-close"></i></span></li>
                                                <li><a href="#" title="">Photography</a><span class="remove"
                                                        title="remove"><i class="fa fa-close"></i></span></li>
                                                <li><a href="#" title="">Shopping</a><span class="remove"
                                                        title="remove"><i class="fa fa-close"></i></span></li>
                                                <li><a href="#" title="">Eating</a><span class="remove"
                                                        title="remove"><i class="fa fa-close"></i></span></li>
                                                <li><a href="#" title="">Hoteling</a><span class="remove"
                                                        title="remove"><i class="fa fa-close"></i></span></li>
                                            </ol>
                                            <div class="submit-btns">
                                                <button type="button" class="mtr-btn"><span>Cancel</span></button>
                                                <button type="button" class="mtr-btn"><span>Update</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="lang" role="tabpanel">
                                        <div class="editing-interest">
                                                <form method="post">
                                                    <label>Add Language: </label>
                                                    <div><input type="text" placeholder="English, Spanish..">
                                                    <button type="submit">Add</button></div>
                                                    <ol class="interest-added">
                                                        <li><a href="#" title="">English</a><span class="remove"
                                                                title="remove"><i class="fa fa-close"></i></span></li>
                                                        <li><a href="#" title="">Urdu</a><span class="remove"
                                                                title="remove"><i class="fa fa-close"></i></span></li>
                                                        <li><a href="#" title="">Sindhi</a><span class="remove"
                                                                title="remove"><i class="fa fa-close"></i></span></li>
                                                    </ol>
                                                    <div class="submit-btns">
                                                        <button type="button" class="mtr-btn"><span>Cancel</span></button>
                                                        <button type="button" class="mtr-btn"><span>Update</span></button>
                                                    </div>
                                                </form>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
