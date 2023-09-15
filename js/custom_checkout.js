console.log("hello checkout");
jQuery(document).ready(function($) {
    $('#step_btn_x , #step_btn_x_m').on('click', function(e) {
        var countryMapping = [
            {"name": "Afghanistan", "code": "AF"},
            {"name": "Åland Islands", "code": "AX"},
            {"name": "Albania", "code": "AL"},
            {"name": "Algeria", "code": "DZ"},
            {"name": "American Samoa", "code": "AS"},
            {"name": "AndorrA", "code": "AD"},
            {"name": "Angola", "code": "AO"},
            {"name": "Anguilla", "code": "AI"},
            {"name": "Antarctica", "code": "AQ"},
            {"name": "Antigua and Barbuda", "code": "AG"},
            {"name": "Argentina", "code": "AR"},
            {"name": "Armenia", "code": "AM"},
            {"name": "Aruba", "code": "AW"},
            {"name": "Australia", "code": "AU"},
            {"name": "Austria", "code": "AT"},
            {"name": "Azerbaijan", "code": "AZ"},
            {"name": "Bahamas", "code": "BS"},
            {"name": "Bahrain", "code": "BH"},
            {"name": "Bangladesh", "code": "BD"},
            {"name": "Barbados", "code": "BB"},
            {"name": "Belarus", "code": "BY"},
            {"name": "Belgium", "code": "BE"},
            {"name": "Belize", "code": "BZ"},
            {"name": "Benin", "code": "BJ"},
            {"name": "Bermuda", "code": "BM"},
            {"name": "Bhutan", "code": "BT"},
            {"name": "Bolivia", "code": "BO"},
            {"name": "Bosnia and Herzegovina", "code": "BA"},
            {"name": "Botswana", "code": "BW"},
            {"name": "Bouvet Island", "code": "BV"},
            {"name": "Brazil", "code": "BR"},
            {"name": "British Indian Ocean Territory", "code": "IO"},
            {"name": "Brunei Darussalam", "code": "BN"},
            {"name": "Bulgaria", "code": "BG"},
            {"name": "Burkina Faso", "code": "BF"},
            {"name": "Burundi", "code": "BI"},
            {"name": "Cambodia", "code": "KH"},
            {"name": "Cameroon", "code": "CM"},
            {"name": "Canada", "code": "CA"},
            {"name": "Cape Verde", "code": "CV"},
            {"name": "Cayman Islands", "code": "KY"},
            {"name": "Central African Republic", "code": "CF"},
            {"name": "Chad", "code": "TD"},
            {"name": "Chile", "code": "CL"},
            {"name": "China", "code": "CN"},
            {"name": "Christmas Island", "code": "CX"},
            {"name": "Cocos (Keeling) Islands", "code": "CC"},
            {"name": "Colombia", "code": "CO"},
            {"name": "Comoros", "code": "KM"},
            {"name": "Congo", "code": "CG"},
            {"name": "Congo, The Democratic Republic of the", "code": "CD"},
            {"name": "Cook Islands", "code": "CK"},
            {"name": "Costa Rica", "code": "CR"},
            {"name": "Croatia", "code": "HR"},
            {"name": "Cuba", "code": "CU"},
            {"name": "Cyprus", "code": "CY"},
            {"name": "Czech Republic", "code": "CZ"},
            {"name": "Denmark", "code": "DK"},
            {"name": "Djibouti", "code": "DJ"},
            {"name": "Dominica", "code": "DM"},
            {"name": "Dominican Republic", "code": "DO"},
            {"name": "Ecuador", "code": "EC"},
            {"name": "Egypt", "code": "EG"},
            {"name": "El Salvador", "code": "SV"},
            {"name": "Equatorial Guinea", "code": "GQ"},
            {"name": "Eritrea", "code": "ER"},
            {"name": "Estonia", "code": "EE"},
            {"name": "Ethiopia", "code": "ET"},
            {"name": "Falkland Islands (Malvinas)", "code": "FK"},
            {"name": "Faroe Islands", "code": "FO"},
            {"name": "Fiji", "code": "FJ"},
            {"name": "Finland", "code": "FI"},
            {"name": "France", "code": "FR"},
            {"name": "French Guiana", "code": "GF"},
            {"name": "French Polynesia", "code": "PF"},
            {"name": "French Southern Territories", "code": "TF"},
            {"name": "Gabon", "code": "GA"},
            {"name": "Gambia", "code": "GM"},
            {"name": "Georgia", "code": "GE"},
            {"name": "Germany", "code": "DE"},
            {"name": "Ghana", "code": "GH"},
            {"name": "Gibraltar", "code": "GI"},
            {"name": "Greece", "code": "GR"},
            {"name": "Greenland", "code": "GL"},
            {"name": "Grenada", "code": "GD"},
            {"name": "Guadeloupe", "code": "GP"},
            {"name": "Guam", "code": "GU"},
            {"name": "Guatemala", "code": "GT"},
            {"name": "Guernsey", "code": "GG"},
            {"name": "Guinea", "code": "GN"},
            {"name": "Guinea-Bissau", "code": "GW"},
            {"name": "Guyana", "code": "GY"},
            {"name": "Haiti", "code": "HT"},
            {"name": "Heard Island and Mcdonald Islands", "code": "HM"},
            {"name": "Holy See (Vatican City State)", "code": "VA"},
            {"name": "Honduras", "code": "HN"},
            {"name": "Hong Kong", "code": "HK"},
            {"name": "Hungary", "code": "HU"},
            {"name": "Iceland", "code": "IS"},
            {"name": "India", "code": "IN"},
            {"name": "Indonesia", "code": "ID"},
            {"name": "Iran, Islamic Republic Of", "code": "IR"},
            {"name": "Iraq", "code": "IQ"},
            {"name": "Ireland", "code": "IE"},
            {"name": "Isle of Man", "code": "IM"},
            {"name": "Israel", "code": "IL"},
            {"name": "Italy", "code": "IT"},
            {"name": "Jamaica", "code": "JM"},
            {"name": "Japan", "code": "JP"},
            {"name": "Jersey", "code": "JE"},
            {"name": "Jordan", "code": "JO"},
            {"name": "Kazakhstan", "code": "KZ"},
            {"name": "Kenya", "code": "KE"},
            {"name": "Kiribati", "code": "KI"},
            {"name": "Korea, Republic of", "code": "KR"},
            {"name": "Kuwait", "code": "KW"},
            {"name": "Kyrgyzstan", "code": "KG"},
            {"name": "Latvia", "code": "LV"},
            {"name": "Lebanon", "code": "LB"},
            {"name": "Lesotho", "code": "LS"},
            {"name": "Liberia", "code": "LR"},
            {"name": "Libyan Arab Jamahiriya", "code": "LY"},
            {"name": "Liechtenstein", "code": "LI"},
            {"name": "Lithuania", "code": "LT"},
            {"name": "Luxembourg", "code": "LU"},
            {"name": "Macao", "code": "MO"},
            {"name": "Macedonia, The Former Yugoslav Republic of", "code": "MK"},
            {"name": "Madagascar", "code": "MG"},
            {"name": "Malawi", "code": "MW"},
            {"name": "Malaysia", "code": "MY"},
            {"name": "Maldives", "code": "MV"},
            {"name": "Mali", "code": "ML"},
            {"name": "Malta", "code": "MT"},
            {"name": "Marshall Islands", "code": "MH"},
            {"name": "Martinique", "code": "MQ"},
            {"name": "Mauritania", "code": "MR"},
            {"name": "Mauritius", "code": "MU"},
            {"name": "Mayotte", "code": "YT"},
            {"name": "Mexico", "code": "MX"},
            {"name": "Micronesia, Federated States of", "code": "FM"},
            {"name": "Moldova, Republic of", "code": "MD"},
            {"name": "Monaco", "code": "MC"},
            {"name": "Mongolia", "code": "MN"},
            {"name": "Montserrat", "code": "MS"},
            {"name": "Morocco", "code": "MA"},
            {"name": "Mozambique", "code": "MZ"},
            {"name": "Myanmar", "code": "MM"},
            {"name": "Namibia", "code": "NA"},
            {"name": "Nauru", "code": "NR"},
            {"name": "Nepal", "code": "NP"},
            {"name": "Netherlands", "code": "NL"},
            {"name": "Netherlands Antilles", "code": "AN"},
            {"name": "New Caledonia", "code": "NC"},
            {"name": "New Zealand", "code": "NZ"},
            {"name": "Nicaragua", "code": "NI"},
            {"name": "Niger", "code": "NE"},
            {"name": "Nigeria", "code": "NG"},
            {"name": "Niue", "code": "NU"},
            {"name": "Norfolk Island", "code": "NF"},
            {"name": "Northern Mariana Islands", "code": "MP"},
            {"name": "Norway", "code": "NO"},
            {"name": "Oman", "code": "OM"},
            {"name": "Pakistan", "code": "PK"},
            {"name": "Palau", "code": "PW"},
            {"name": "Palestinian Territory, Occupied", "code": "PS"},
            {"name": "Panama", "code": "PA"},
            {"name": "Papua New Guinea", "code": "PG"},
            {"name": "Paraguay", "code": "PY"},
            {"name": "Peru", "code": "PE"},
            {"name": "Philippines", "code": "PH"},
            {"name": "Pitcairn", "code": "PN"},
            {"name": "Poland", "code": "PL"},
            {"name": "Portugal", "code": "PT"},
            {"name": "Puerto Rico", "code": "PR"},
            {"name": "Qatar", "code": "QA"},
            {"name": "Reunion", "code": "RE"},
            {"name": "Romania", "code": "RO"},
            {"name": "Russian Federation", "code": "RU"},
            {"name": "RWANDA", "code": "RW"},
            {"name": "Saint Helena", "code": "SH"},
            {"name": "Saint Kitts and Nevis", "code": "KN"},
            {"name": "Saint Lucia", "code": "LC"},
            {"name": "Saint Pierre and Miquelon", "code": "PM"},
            {"name": "Saint Vincent and the Grenadines", "code": "VC"},
            {"name": "Samoa", "code": "WS"},
            {"name": "San Marino", "code": "SM"},
            {"name": "Sao Tome and Principe", "code": "ST"},
            {"name": "Saudi Arabia", "code": "SA"},
            {"name": "Senegal", "code": "SN"},
            {"name": "Serbia and Montenegro", "code": "CS"},
            {"name": "Seychelles", "code": "SC"},
            {"name": "Sierra Leone", "code": "SL"},
            {"name": "Singapore", "code": "SG"},
            {"name": "Slovakia", "code": "SK"},
            {"name": "Slovenia", "code": "SI"},
            {"name": "Solomon Islands", "code": "SB"},
            {"name": "Somalia", "code": "SO"},
            {"name": "South Africa", "code": "ZA"},
            {"name": "South Georgia and the South Sandwich Islands", "code": "GS"},
            {"name": "Spain", "code": "ES"},
            {"name": "Sri Lanka", "code": "LK"},
            {"name": "Sudan", "code": "SD"},
            {"name": "Suriname", "code": "SR"},
            {"name": "Svalbard and Jan Mayen", "code": "SJ"},
            {"name": "Swaziland", "code": "SZ"},
            {"name": "Sweden", "code": "SE"},
            {"name": "Switzerland", "code": "CH"},
            {"name": "Syrian Arab Republic", "code": "SY"},
            {"name": "Taiwan, Province of China", "code": "TW"},
            {"name": "Tajikistan", "code": "TJ"},
            {"name": "Tanzania, United Republic of", "code": "TZ"},
            {"name": "Thailand", "code": "TH"},
            {"name": "Timor-Leste", "code": "TL"},
            {"name": "Togo", "code": "TG"},
            {"name": "Tokelau", "code": "TK"},
            {"name": "Tonga", "code": "TO"},
            {"name": "Trinidad and Tobago", "code": "TT"},
            {"name": "Tunisia", "code": "TN"},
            {"name": "Turkey", "code": "TR"},
            {"name": "Turkmenistan", "code": "TM"},
            {"name": "Turks and Caicos Islands", "code": "TC"},
            {"name": "Tuvalu", "code": "TV"},
            {"name": "Uganda", "code": "UG"},
            {"name": "Ukraine", "code": "UA"},
            {"name": "United Arab Emirates", "code": "AE"},
            {"name": "United Kingdom", "code": "GB"},
            {"name": "United States", "code": "US"},
            {"name": "United States Minor Outlying Islands", "code": "UM"},
            {"name": "Uruguay", "code": "UY"},
            {"name": "Uzbekistan", "code": "UZ"},
            {"name": "Vanuatu", "code": "VU"},
            {"name": "Venezuela", "code": "VE"},
            {"name": "Viet Nam", "code": "VN"},
            {"name": "Virgin Islands, British", "code": "VG"},
            {"name": "Virgin Islands, U.S.", "code": "VI"},
            {"name": "Wallis and Futuna", "code": "WF"},
            {"name": "Western Sahara", "code": "EH"},
            {"name": "Yemen", "code": "YE"},
            {"name": "Zambia", "code": "ZM"},
            {"name": "Zimbabw","code": "ZN"}
        ];
        updateTopValue();
        if ($(this).hasClass('billing_form')) {
            $('.custom_coupon_form').show();
            var firstName = $('#billing_first_name').val();
            var lastName = $('#billing_last_name').val();
    
            var address1 = $('#billing_address_1').val();
            var address2 = $('#billing_address_2').val();
            var city = $('#billing_city').val();
            var postcode = $('#billing_postcode').val();
            var countryCode = $('#billing_country').val();
            var country = getCountryName(countryCode, countryMapping);
            // Create the address string by joining the fields with a comma
            var userAddress = [address1, address2, city, postcode, country].filter(Boolean).join(', ');
            var full_nmae = [firstName, lastName].filter(Boolean).join(' ');
            $('.address_x').html(userAddress);
            $('.username_x').html(full_nmae);
            
            $('.custom_c_sections #customer_details').hide();
            $('.payment_select_slide').show();
            console.log(userAddress);
            $(this).removeClass('billing_form');
            $(this).addClass('paymentmethod');
            $('.coupon_cont').show();
            // $('.billing_step').removeClass('active');
            $('.payment_step').addClass('active');
            $(this).html("Weiter >");
            if($(window).width() < 650){
                $('.order_details_sc').hide();
            }
        
        }else if($(this).hasClass('paymentmethod')){
            $('.custom_c_sections #customer_details').hide();
            $('.payment_select_slide').hide();
            $('.coupon_cont').hide();
            $('.details_overview').show();
            
            $(this).removeClass('paymentmethod');
            $(this).addClass('final_checkout');
            $(this).html("Jetzt bestellen");

            var coupon = $('#coupon_code').val();
            $('.coupon_Code').html(coupon);
            
            const paymentMethodRadios = document.querySelectorAll('input[name="payment_method"]');
            let selectedPaymentMethod = '';
            // Loop through the radio inputs to find the selected one
            paymentMethodRadios.forEach(function(radio) {
                if (radio.checked) {
                    selectedPaymentMethod = radio.value;
                }
            });

            $('.payment_methd').html(selectedPaymentMethod);
            // $('.payment_step').removeClass('active');
            $('.final_step').addClass('active');
            if($(window).width() < 650){
                $('.order_details_sc').show();
            }


        }else if($(this).hasClass('final_checkout')){
            const paymentMethodRadios = document.querySelectorAll('input[name="payment_method"]');
            let selectedPaymentMethod = '';
            // Loop through the radio inputs to find the selected one
            paymentMethodRadios.forEach(function(radio) {
                if (radio.checked) {
                    selectedPaymentMethod = radio.value;
                }
            });
            console.log(selectedPaymentMethod);
            if(selectedPaymentMethod == 'ppcp-gateway'){
                $('.component-frame').contents().find('.paypal-button').click();
                console.log($('.component-frame').contents().find('.paypal-button'));
                console.log($('.component-frame').contents());
                console.log($('.component-frame'));
            }else{
                $('#custom_checkout_x #place_order').click();
            }
            // $('.coupon_cont').hide();
            // $(this).html("Next >");
            // $('.billing_step').addClass('active');
            // $('.final_step').removeClass('active');
            
        }
    });
    $('.edit_payment').on('click', function(e) {
        $('.final_step').removeClass('active');
        $('.custom_c_sections #customer_details').hide();
        $('.payment_select_slide').show();
        $('.coupon_cont').show();
        if($(window).width() < 650){
            $('.order_details_sc').hide();
        }
        $('#step_btn_x , #step_btn_x_m').html("Weiter >");
        $('.details_overview').hide();
        $('#step_btn_x , #step_btn_x_m').removeClass('final_checkout');
        $('#step_btn_x , #step_btn_x_m').removeClass('billing_form');
        $('#step_btn_x , #step_btn_x_m').addClass('paymentmethod');
    })
    $('#edit_address').on('click', function(e) {
        $('.final_step').removeClass('active');
        $('.payment_step').removeClass('active');
        $('.custom_c_sections #customer_details').show();
        $('.payment_select_slide').hide();
        $('.details_overview').hide();
        if($(window).width() < 650){
            $('.order_details_sc').hide();
        }
        $('#step_btn_x , #step_btn_x_m').html("Weiter >");
        $('.coupon_cont').hide();
        $('#step_btn_x , #step_btn_x_m').removeClass('final_checkout');
        $('#step_btn_x , #step_btn_x_m').removeClass('paymentmethod');
        $('#step_btn_x , #step_btn_x_m').addClass('billing_form');
    })
    setInterval(function () {
        $('.custom_coupon_form').show();
    }, 1000);
    function getCountryName(code, mappingArray) {
        for (var i = 0; i < mappingArray.length; i++) {
            if (mappingArray[i].code === code) {
                return mappingArray[i].name;
            }
        }
        return code; // If not found, return the country code itself
    }

    // Function to check for the presence of .woocommerce-error and update the top value
    function updateTopValue() {
        var woocommerceError = document.querySelector('.woocommerce-error');
        var targetDiv = document.getElementById('custom_coupon');
        var csutom_payee =  document.querySelector('.csutom_payee');
        var csutom_payee_h = csutom_payee.offsetHeight;
        
        if (woocommerceError) {
            const errorHeight = woocommerceError.offsetHeight;
            targetDiv.style.top = csutom_payee_h + errorHeight + 100 + 'px';
        }else{
            console.log(csutom_payee_h);
            targetDiv.style.top = csutom_payee_h + 80 + 'px';
        }
    }
    
    // Run the updateTopValue function initially
    updateTopValue();
    
    // Set an interval to check every second
    setInterval(updateTopValue, 1000);
    // Rename
    setInterval(function() {
        $('.payment_methd.value_x').each(function() {
            if ($(this).text().trim() === 'bacs') {
                $(this).text('Vorkasse');
            }
        });
    }, 1000); // Überprüfen Sie alle 1 Sekunde

});