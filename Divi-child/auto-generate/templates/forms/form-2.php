<?php 
    global $remoteURL, $request, $apidata, $directoryURI, $parent, $themeVersion;
?>
<form method="post" enctype="multipart/form-data" target="gform_ajax_frame_2" id="gform_2" action="">
    <div class="field-full-name">
        <label>Name <span class="required">*</span></label>
        <div class=" field template-row template-no-gutters">
            <div class="first-name-container template-col-6">
                <div class=" i-container">										
                    <input type="text" name="first_name" class="first-name" placeholder="First">
                </div>
            </div>
            <div class="last-name-container template-col-6">
                <div class=" i-container">
                    <label></label>
                    <input type="text" name="last_name" class="last-name" placeholder="Last">
                </div>
            </div>
        </div>
    </div>
    <div class="field-phone field">
        <label>Phone <span class="required">*</span></label>
        <div class="phone-container i-container">
            <input type="number" name="phone" class="phone" placeholder="Phone">
        </div>
    </div>
    <div class="field-email field">
        <label>Email <span class="required">*</span></label>
        <div class="email-container i-container">
            <input type="email" name="email" class="email" placeholder="Email">
        </div>
    </div>
    <div class="field-address-main field">
        <label>Address <span class="required">*</span></label>
        <div class="address-1-container i-container">
            <input type="text" name="address_1" class="address_1">
            <label>Street Address</label>
        </div>
        <div class="address-2-container i-container">
            <input type="text" name="address_1" class="address_1">
            <label>Address Line 2</label>
        </div>
        <div class="city-state-container i-container template-row template-no-gutters">
            <div class="template-col-6 padding-r-child-5">
                <div>
                    <input type="text" name="address_1" class="address_1">
                    <label>City</label>
                </div>
            </div>
            <div class="template-col-6 padding-l-child-5">
                <div>
                    <input type="text" name="address_1" class="address_1">
                    <label>State / Province / Region</label>
                </div>
            </div>
        </div>
        <div class="city-state-container i-container template-row template-no-gutters">
            <div class="template-col-6 padding-r-child-5">
                <div>
                    <input type="text" name="address_1" class="address_1">
                    <label>ZIP / Postal Code</label>
                </div>
            </div>
            <div class="template-col-6 padding-l-child-5">
                <div>
                    <div class="address-country">
                        <select name="country" id="country" aria-required="true">
                            <option value="" selected="selected">Select Country</option>
                            <?php $countryLists  = ["Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bonaire, Sint Eustatius and Saba", "Bosnia and Herzegovina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos Islands", "Colombia", "Comoros", "Congo, Democratic Republic of the", "Congo, Republic of the", "Cook Islands", "Costa Rica", "Croatia", "Cuba", "Curaçao", "Cyprus", "Czech Republic", "Côte d'Ivoire", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini (Swaziland)", "Ethiopia", "Falkland Islands", "Faroe Islands", "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and McDonald Islands", "Holy See", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kuwait", "Kyrgyzstan", "Lao People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "North Korea", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Palestine, State of", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Romania", "Russia", "Rwanda", "Réunion", "Saint Barthélemy", "Saint Helena", "Saint Kitts and Nevis", "Saint Lucia", "Saint Martin", "Saint Pierre and Miquelon", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Sint Maarten", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia", "South Korea", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "US Minor Outlying Islands", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands, British", "Virgin Islands, U.S.", "Wallis and Futuna", "Western Sahara", "Yemen", "Zambia", "Zimbabwe", "Åland Islands"]; ?>
                            <?php foreach( $countryLists as $country ): ?>
                            <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <label>Country</label>
                </div>
            </div>
        </div>
    </div>
    <div class="field-service field">
        <div>
            <label>What project or service do you need?</label>
            <input type="text" name="service">
        </div>
    </div>
    <div class="field-file field">
        <div class="">
            <label>File</label>
            <div class="i-container">
                <div class="file-upload-content text-center">
                    <p class="file-text">Drop files here or</p>
                    <p class="file-button middle-center">Select Files</p>
                    <input type="file" id="file" class="file hidden" multiple="" placeholder="Select">
                </div>
                <label>Max. file size: 5 GB.</label>
            </div>
        </div>
    </div>
    <div class="field-consent field">
        <label>Consent</label>
        <div>
            <input type="checkbox" id="consent" name="consent" value="consent">
            <label for="consent" class="pointer"> ...I have read and agree to terms & conditions</label><br>
        </div>
        <div class="terms-services modal-opener-services">
            <p>Please Review Our Terms & Conditions</p>
        </div>
    </div>
    <div class="field-submit field">
        <div class="message-container">
            <input class="button" type="submit" name="submit" value="Submit">
        </div>
    </div>
</form>