<?php
/*
 * Function to register a new field for user's country
 *
 * @since 2.2.28
 * @returns void
 */

function ninja_forms_register_field_country(){
	$countries = array(
		__( '- Select One', 'ninja-forms' ) => '',
		__( 'Afghanistan', 'ninja-forms' ) => 'AF',
		__( 'Albania', 'ninja-forms' ) => 'AL',
		__( 'Algeria', 'ninja-forms' ) => 'DZ',
		__( 'American Samoa', 'ninja-forms' ) => 'AS',
		__( 'Andorra', 'ninja-forms' ) => 'AD',
		__( 'Angola', 'ninja-forms' ) => 'AO',
		__( 'Anguilla', 'ninja-forms' ) => 'AI',
		__( 'Antarctica', 'ninja-forms' ) => 'AQ',
		__( 'Antigua And Barbuda', 'ninja-forms' ) => 'AG',
		__( 'Argentina', 'ninja-forms' ) => 'AR',
		__( 'Armenia', 'ninja-forms' ) => 'AM',
		__( 'Aruba', 'ninja-forms' ) => 'AW',
		__( 'Australia', 'ninja-forms' ) => 'AU',
		__( 'Austria', 'ninja-forms' ) => 'AT',
		__( 'Azerbaijan', 'ninja-forms' ) => 'AZ',
		__( 'Bahamas', 'ninja-forms' ) => 'BS',
		__( 'Bahrain', 'ninja-forms' ) => 'BH',
		__( 'Bangladesh', 'ninja-forms' ) => 'BD',
		__( 'Barbados', 'ninja-forms' ) => 'BB',
		__( 'Belarus', 'ninja-forms' ) => 'BY',
		__( 'Belgium', 'ninja-forms' ) => 'BE',
		__( 'Belize', 'ninja-forms' ) => 'BZ',
		__( 'Benin', 'ninja-forms' ) => 'BJ',
		__( 'Bermuda', 'ninja-forms' ) => 'BM',
		__( 'Bhutan', 'ninja-forms' ) => 'BT',
		__( 'Bolivia', 'ninja-forms' ) => 'BO',
		__( 'Bosnia And Herzegowina', 'ninja-forms' ) => 'BA',
		__( 'Botswana', 'ninja-forms' ) => 'BW',
		__( 'Bouvet Island', 'ninja-forms' ) => 'BV',
		__( 'Brazil', 'ninja-forms' ) => 'BR',
		__( 'British Indian Ocean Territory', 'ninja-forms' ) => 'IO',
		__( 'Brunei Darussalam', 'ninja-forms' ) => 'BN',
		__( 'Bulgaria', 'ninja-forms' ) => 'BG',
		__( 'Burkina Faso', 'ninja-forms' ) => 'BF',
		__( 'Burundi', 'ninja-forms' ) => 'BI',
		__( 'Cambodia', 'ninja-forms' ) => 'KH',
		__( 'Cameroon', 'ninja-forms' ) => 'CM',
		__( 'Canada', 'ninja-forms' ) => 'CA',
		__( 'Cape Verde', 'ninja-forms' ) => 'CV',
		__( 'Cayman Islands', 'ninja-forms' ) => 'KY',
		__( 'Central African Republic', 'ninja-forms' ) => 'CF',
		__( 'Chad', 'ninja-forms' ) => 'TD',
		__( 'Chile', 'ninja-forms' ) => 'CL',
		__( 'China', 'ninja-forms' ) => 'CN',
		__( 'Christmas Island', 'ninja-forms' ) => 'CX',
		__( 'Cocos (Keeling) Islands', 'ninja-forms' ) => 'CC',
		__( 'Colombia', 'ninja-forms' ) => 'CO',
		__( 'Comoros', 'ninja-forms' ) => 'KM',
		__( 'Congo', 'ninja-forms' ) => 'CG',
		__( 'Congo, The Democratic Republic Of The', 'ninja-forms' ) => 'CD',
		__( 'Cook Islands', 'ninja-forms' ) => 'CK',
		__( 'Costa Rica', 'ninja-forms' ) => 'CR',
		__( 'Cote D\'Ivoire', 'ninja-forms' ) => 'CI',
		__( 'Croatia (Local Name: Hrvatska)', 'ninja-forms' ) => 'HR',
		__( 'Cuba', 'ninja-forms' ) => 'CU',
		__( 'Cyprus', 'ninja-forms' ) => 'CY',
		__( 'Czech Republic', 'ninja-forms' ) => 'CZ',
		__( 'Denmark', 'ninja-forms' ) => 'DK',
		__( 'Djibouti', 'ninja-forms' ) => 'DJ',
		__( 'Dominica', 'ninja-forms' ) => 'DM',
		__( 'Dominican Republic', 'ninja-forms' ) => 'DO',
		__( 'Timor-Leste (East Timor)', 'ninja-forms' ) => 'TL',
		__( 'Ecuador', 'ninja-forms' ) => 'EC',
		__( 'Egypt', 'ninja-forms' ) => 'EG',
		__( 'El Salvador', 'ninja-forms' ) => 'SV',
		__( 'Equatorial Guinea', 'ninja-forms' ) => 'GQ',
		__( 'Eritrea', 'ninja-forms' ) => 'ER',
		__( 'Estonia', 'ninja-forms' ) => 'EE',
		__( 'Ethiopia', 'ninja-forms' ) => 'ET',
		__( 'Falkland Islands (Malvinas)', 'ninja-forms' ) => 'FK',
		__( 'Faroe Islands', 'ninja-forms' ) => 'FO',
		__( 'Fiji', 'ninja-forms' ) => 'FJ',
		__( 'Finland', 'ninja-forms' ) => 'FI',
		__( 'France', 'ninja-forms' ) => 'FR',
		__( 'France, Metropolitan', 'ninja-forms' ) => 'FX',
		__( 'French Guiana', 'ninja-forms' ) => 'GF',
		__( 'French Polynesia', 'ninja-forms' ) => 'PF',
		__( 'French Southern Territories', 'ninja-forms' ) => 'TF',
		__( 'Gabon', 'ninja-forms' ) => 'GA',
		__( 'Gambia', 'ninja-forms' ) => 'GM',
		__( 'Georgia', 'ninja-forms' ) => 'GE',
		__( 'Germany', 'ninja-forms' ) => 'DE',
		__( 'Ghana', 'ninja-forms' ) => 'GH',
		__( 'Gibraltar', 'ninja-forms' ) => 'GI',
		__( 'Greece', 'ninja-forms' ) => 'GR',
		__( 'Greenland', 'ninja-forms' ) => 'GL',
		__( 'Grenada', 'ninja-forms' ) => 'GD',
		__( 'Guadeloupe', 'ninja-forms' ) => 'GP',
		__( 'Guam', 'ninja-forms' ) => 'GU',
		__( 'Guatemala', 'ninja-forms' ) => 'GT',
		__( 'Guinea', 'ninja-forms' ) => 'GN',
		__( 'Guinea-Bissau', 'ninja-forms' ) => 'GW',
		__( 'Guyana', 'ninja-forms' ) => 'GY',
		__( 'Haiti', 'ninja-forms' ) => 'HT',
		__( 'Heard And Mc Donald Islands', 'ninja-forms' ) => 'HM',
		__( 'Holy See (Vatican City State)', 'ninja-forms' ) => 'VA',
		__( 'Honduras', 'ninja-forms' ) => 'HN',
		__( 'Hong Kong', 'ninja-forms' ) => 'HK',
		__( 'Hungary', 'ninja-forms' ) => 'HU',
		__( 'Iceland', 'ninja-forms' ) => 'IS',
		__( 'India', 'ninja-forms' ) => 'IN',
		__( 'Indonesia', 'ninja-forms' ) => 'ID',
		__( 'Iran (Islamic Republic Of)', 'ninja-forms' ) => 'IR',
		__( 'Iraq', 'ninja-forms' ) => 'IQ',
		__( 'Ireland', 'ninja-forms' ) => 'IE',
		__( 'Israel', 'ninja-forms' ) => 'IL',
		__( 'Italy', 'ninja-forms' ) => 'IT',
		__( 'Jamaica', 'ninja-forms' ) => 'JM',
		__( 'Japan', 'ninja-forms' ) => 'JP',
		__( 'Jordan', 'ninja-forms' ) => 'JO',
		__( 'Kazakhstan', 'ninja-forms' ) => 'KZ',
		__( 'Kenya', 'ninja-forms' ) => 'KE',
		__( 'Kiribati', 'ninja-forms' ) => 'KI',
		__( 'Korea, Democratic People\'s Republic Of', 'ninja-forms' ) => 'KP',
		__( 'Korea, Republic Of', 'ninja-forms' ) => 'KR',
		__( 'Kuwait', 'ninja-forms' ) => 'KW',
		__( 'Kyrgyzstan', 'ninja-forms' ) => 'KG',
		__( 'Lao People\'s Democratic Republic', 'ninja-forms' ) => 'LA',
		__( 'Latvia', 'ninja-forms' ) => 'LV',
		__( 'Lebanon', 'ninja-forms' ) => 'LB',
		__( 'Lesotho', 'ninja-forms' ) => 'LS',
		__( 'Liberia', 'ninja-forms' ) => 'LR',
		__( 'Libyan Arab Jamahiriya', 'ninja-forms' ) => 'LY',
		__( 'Liechtenstein', 'ninja-forms' ) => 'LI',
		__( 'Lithuania', 'ninja-forms' ) => 'LT',
		__( 'Luxembourg', 'ninja-forms' ) => 'LU',
		__( 'Macau', 'ninja-forms' ) => 'MO',
		__( 'Macedonia, Former Yugoslav Republic Of', 'ninja-forms' ) => 'MK',
		__( 'Madagascar', 'ninja-forms' ) => 'MG',
		__( 'Malawi', 'ninja-forms' ) => 'MW',
		__( 'Malaysia', 'ninja-forms' ) => 'MY',
		__( 'Maldives', 'ninja-forms' ) => 'MV',
		__( 'Mali', 'ninja-forms' ) => 'ML',
		__( 'Malta', 'ninja-forms' ) => 'MT',
		__( 'Marshall Islands', 'ninja-forms' ) => 'MH',
		__( 'Martinique', 'ninja-forms' ) => 'MQ',
		__( 'Mauritania', 'ninja-forms' ) => 'MR',
		__( 'Mauritius', 'ninja-forms' ) => 'MU',
		__( 'Mayotte', 'ninja-forms' ) => 'YT',
		__( 'Mexico', 'ninja-forms' ) => 'MX',
		__( 'Micronesia, Federated States Of', 'ninja-forms' ) => 'FM',
		__( 'Moldova, Republic Of', 'ninja-forms' ) => 'MD',
		__( 'Monaco', 'ninja-forms' ) => 'MC',
		__( 'Mongolia', 'ninja-forms' ) => 'MN',
		__( 'Montenegro', 'ninja-forms' ) => 'ME',
		__( 'Montserrat', 'ninja-forms' ) => 'MS',
		__( 'Morocco', 'ninja-forms' ) => 'MA',
		__( 'Mozambique', 'ninja-forms' ) => 'MZ',
		__( 'Myanmar', 'ninja-forms' ) => 'MM',
		__( 'Namibia', 'ninja-forms' ) => 'NA',
		__( 'Nauru', 'ninja-forms' ) => 'NR',
		__( 'Nepal', 'ninja-forms' ) => 'NP',
		__( 'Netherlands', 'ninja-forms' ) => 'NL',
		__( 'Netherlands Antilles', 'ninja-forms' ) => 'AN',
		__( 'New Caledonia', 'ninja-forms' ) => 'NC',
		__( 'New Zealand', 'ninja-forms' ) => 'NZ',
		__( 'Nicaragua', 'ninja-forms' ) => 'NI',
		__( 'Niger', 'ninja-forms' ) => 'NE',
		__( 'Nigeria', 'ninja-forms' ) => 'NG',
		__( 'Niue', 'ninja-forms' ) => 'NU',
		__( 'Norfolk Island', 'ninja-forms' ) => 'NF',
		__( 'Northern Mariana Islands', 'ninja-forms' ) => 'MP',
		__( 'Norway', 'ninja-forms' ) => 'NO',
		__( 'Oman', 'ninja-forms' ) => 'OM',
		__( 'Pakistan', 'ninja-forms' ) => 'PK',
		__( 'Palau', 'ninja-forms' ) => 'PW',
		__( 'Panama', 'ninja-forms' ) => 'PA',
		__( 'Papua New Guinea', 'ninja-forms' ) => 'PG',
		__( 'Paraguay', 'ninja-forms' ) => 'PY',
		__( 'Peru', 'ninja-forms' ) => 'PE',
		__( 'Philippines', 'ninja-forms' ) => 'PH',
		__( 'Pitcairn', 'ninja-forms' ) => 'PN',
		__( 'Poland', 'ninja-forms' ) => 'PL',
		__( 'Portugal', 'ninja-forms' ) => 'PT',
		__( 'Puerto Rico', 'ninja-forms' ) => 'PR',
		__( 'Qatar', 'ninja-forms' ) => 'QA',
		__( 'Reunion', 'ninja-forms' ) => 'RE',
		__( 'Romania', 'ninja-forms' ) => 'RO',
		__( 'Russian Federation', 'ninja-forms' ) => 'RU',
		__( 'Rwanda', 'ninja-forms' ) => 'RW',
		__( 'Saint Kitts And Nevis', 'ninja-forms' ) => 'KN',
		__( 'Saint Lucia', 'ninja-forms' ) => 'LC',
		__( 'Saint Vincent And The Grenadines', 'ninja-forms' ) => 'VC',
		__( 'Samoa', 'ninja-forms' ) => 'WS',
		__( 'San Marino', 'ninja-forms' ) => 'SM',
		__( 'Sao Tome And Principe', 'ninja-forms' ) => 'ST',
		__( 'Saudi Arabia', 'ninja-forms' ) => 'SA',
		__( 'Senegal', 'ninja-forms' ) => 'SN',
		__( 'Serbia', 'ninja-forms' ) => 'SR',		
		__( 'Seychelles', 'ninja-forms' ) => 'SC',
		__( 'Sierra Leone', 'ninja-forms' ) => 'SL',
		__( 'Singapore', 'ninja-forms' ) => 'SG',
		__( 'Slovakia (Slovak Republic)', 'ninja-forms' ) => 'SK',
		__( 'Slovenia', 'ninja-forms' ) => 'SI',
		__( 'Solomon Islands', 'ninja-forms' ) => 'SB',
		__( 'Somalia', 'ninja-forms' ) => 'SO',
		__( 'South Africa', 'ninja-forms' ) => 'ZA',
		__( 'South Georgia, South Sandwich Islands', 'ninja-forms' ) => 'GS',
		__( 'Spain', 'ninja-forms' ) => 'ES',
		__( 'Sri Lanka', 'ninja-forms' ) => 'LK',
		__( 'St. Helena', 'ninja-forms' ) => 'SH',
		__( 'St. Pierre And Miquelon', 'ninja-forms' ) => 'PM',
		__( 'Sudan', 'ninja-forms' ) => 'SD',
		__( 'Suriname', 'ninja-forms' ) => 'SR',
		__( 'Svalbard And Jan Mayen Islands', 'ninja-forms' ) => 'SJ',
		__( 'Swaziland', 'ninja-forms' ) => 'SZ',
		__( 'Sweden', 'ninja-forms' ) => 'SE',
		__( 'Switzerland', 'ninja-forms' ) => 'CH',
		__( 'Syrian Arab Republic', 'ninja-forms' ) => 'SY',
		__( 'Taiwan', 'ninja-forms' ) => 'TW',
		__( 'Tajikistan', 'ninja-forms' ) => 'TJ',
		__( 'Tanzania, United Republic Of', 'ninja-forms' ) => 'TZ',
		__( 'Thailand', 'ninja-forms' ) => 'TH',
		__( 'Togo', 'ninja-forms' ) => 'TG',
		__( 'Tokelau', 'ninja-forms' ) => 'TK',
		__( 'Tonga', 'ninja-forms' ) => 'TO',
		__( 'Trinidad And Tobago', 'ninja-forms' ) => 'TT',
		__( 'Tunisia', 'ninja-forms' ) => 'TN',
		__( 'Turkey', 'ninja-forms' ) => 'TR',
		__( 'Turkmenistan', 'ninja-forms' ) => 'TM',
		__( 'Turks And Caicos Islands', 'ninja-forms' ) => 'TC',
		__( 'Tuvalu', 'ninja-forms' ) => 'TV',
		__( 'Uganda', 'ninja-forms' ) => 'UG',
		__( 'Ukraine', 'ninja-forms' ) => 'UA',
		__( 'United Arab Emirates', 'ninja-forms' ) => 'AE',
		__( 'United Kingdom', 'ninja-forms' ) => 'GB',
		__( 'United States', 'ninja-forms' ) => 'US',
		__( 'United States Minor Outlying Islands', 'ninja-forms' ) => 'UM',
		__( 'Uruguay', 'ninja-forms' ) => 'UY',
		__( 'Uzbekistan', 'ninja-forms' ) => 'UZ',
		__( 'Vanuatu', 'ninja-forms' ) => 'VU',
		__( 'Venezuela', 'ninja-forms' ) => 'VE',
		__( 'Viet Nam', 'ninja-forms' ) => 'VN',
		__( 'Virgin Islands (British)', 'ninja-forms' ) => 'VG',
		__( 'Virgin Islands (U.S.)', 'ninja-forms' ) => 'VI',
		__( 'Wallis And Futuna Islands', 'ninja-forms' ) => 'WF',
		__( 'Western Sahara', 'ninja-forms' ) => 'EH',
		__( 'Yemen', 'ninja-forms' ) => 'YE',
		__( 'Yugoslavia', 'ninja-forms' ) => 'YU',
		__( 'Zambia', 'ninja-forms' ) => 'ZM',
		__( 'Zimbabwe', 'ninja-forms' ) => 'ZW'
	);
	
	$tmp_array = array();
	foreach ( $countries as $country => $abbr ) {
		$tmp_array[] = array( 'name' => $country, 'value' => $abbr );
	}
	$args = array(
		'name' => 'Country',
		'sidebar' => '',
		'display_function' => 'ninja_forms_field_country_display',
		'group' => 'standard_fields',
		'edit_conditional' => true,
		'edit_options' => array(
			array(
				'type' => 'select',
				'name' => 'default_value',
				'label' => __( 'Default Country', 'ninja-forms' ),
				'class' => 'widefat',
				'options' => $tmp_array,
			),
			array(
				'type' => 'checkbox',
				'name' => 'country_use_custom_first',
				'label' => __( 'Use a custom first option', 'ninja-forms' ),
				'width' => 'thin',
			),
			array(
				'type' => 'text',
				'name' => 'country_custom_first',
				'label' => __( 'Custom first option', 'ninja-forms' ),
				'width' => 'thin',
				'class' => 'widefat',
			),
			array(
				'type' => 'hidden',
				'name' => 'user_info_field_group',
				'default' => 1,
			),
		),
		'conditional' => array(
			'value' => array(
				'type' => 'select',
				'options' => $countries,
			),
		),
	);

	ninja_forms_register_field( '_country', $args );
}

add_action( 'init', 'ninja_forms_register_field_country' );

/*
 * Function to display our country field on the front-end.
 *
 * @since 2.2.30
 * @returns void
 */

function ninja_forms_field_country_display( $field_id, $data ) {
	$countries = array(
		__( 'Afghanistan', 'ninja-forms' ) => 'AF',
		__( 'Albania', 'ninja-forms' ) => 'AL',
		__( 'Algeria', 'ninja-forms' ) => 'DZ',
		__( 'American Samoa', 'ninja-forms' ) => 'AS',
		__( 'Andorra', 'ninja-forms' ) => 'AD',
		__( 'Angola', 'ninja-forms' ) => 'AO',
		__( 'Anguilla', 'ninja-forms' ) => 'AI',
		__( 'Antarctica', 'ninja-forms' ) => 'AQ',
		__( 'Antigua And Barbuda', 'ninja-forms' ) => 'AG',
		__( 'Argentina', 'ninja-forms' ) => 'AR',
		__( 'Armenia', 'ninja-forms' ) => 'AM',
		__( 'Aruba', 'ninja-forms' ) => 'AW',
		__( 'Australia', 'ninja-forms' ) => 'AU',
		__( 'Austria', 'ninja-forms' ) => 'AT',
		__( 'Azerbaijan', 'ninja-forms' ) => 'AZ',
		__( 'Bahamas', 'ninja-forms' ) => 'BS',
		__( 'Bahrain', 'ninja-forms' ) => 'BH',
		__( 'Bangladesh', 'ninja-forms' ) => 'BD',
		__( 'Barbados', 'ninja-forms' ) => 'BB',
		__( 'Belarus', 'ninja-forms' ) => 'BY',
		__( 'Belgium', 'ninja-forms' ) => 'BE',
		__( 'Belize', 'ninja-forms' ) => 'BZ',
		__( 'Benin', 'ninja-forms' ) => 'BJ',
		__( 'Bermuda', 'ninja-forms' ) => 'BM',
		__( 'Bhutan', 'ninja-forms' ) => 'BT',
		__( 'Bolivia', 'ninja-forms' ) => 'BO',
		__( 'Bosnia And Herzegowina', 'ninja-forms' ) => 'BA',
		__( 'Botswana', 'ninja-forms' ) => 'BW',
		__( 'Bouvet Island', 'ninja-forms' ) => 'BV',
		__( 'Brazil', 'ninja-forms' ) => 'BR',
		__( 'British Indian Ocean Territory', 'ninja-forms' ) => 'IO',
		__( 'Brunei Darussalam', 'ninja-forms' ) => 'BN',
		__( 'Bulgaria', 'ninja-forms' ) => 'BG',
		__( 'Burkina Faso', 'ninja-forms' ) => 'BF',
		__( 'Burundi', 'ninja-forms' ) => 'BI',
		__( 'Cambodia', 'ninja-forms' ) => 'KH',
		__( 'Cameroon', 'ninja-forms' ) => 'CM',
		__( 'Canada', 'ninja-forms' ) => 'CA',
		__( 'Cape Verde', 'ninja-forms' ) => 'CV',
		__( 'Cayman Islands', 'ninja-forms' ) => 'KY',
		__( 'Central African Republic', 'ninja-forms' ) => 'CF',
		__( 'Chad', 'ninja-forms' ) => 'TD',
		__( 'Chile', 'ninja-forms' ) => 'CL',
		__( 'China', 'ninja-forms' ) => 'CN',
		__( 'Christmas Island', 'ninja-forms' ) => 'CX',
		__( 'Cocos (Keeling) Islands', 'ninja-forms' ) => 'CC',
		__( 'Colombia', 'ninja-forms' ) => 'CO',
		__( 'Comoros', 'ninja-forms' ) => 'KM',
		__( 'Congo', 'ninja-forms' ) => 'CG',
		__( 'Congo, The Democratic Republic Of The', 'ninja-forms' ) => 'CD',
		__( 'Cook Islands', 'ninja-forms' ) => 'CK',
		__( 'Costa Rica', 'ninja-forms' ) => 'CR',
		__( 'Cote D\'Ivoire', 'ninja-forms' ) => 'CI',
		__( 'Croatia (Local Name: Hrvatska)', 'ninja-forms' ) => 'HR',
		__( 'Cuba', 'ninja-forms' ) => 'CU',
		__( 'Cyprus', 'ninja-forms' ) => 'CY',
		__( 'Czech Republic', 'ninja-forms' ) => 'CZ',
		__( 'Denmark', 'ninja-forms' ) => 'DK',
		__( 'Djibouti', 'ninja-forms' ) => 'DJ',
		__( 'Dominica', 'ninja-forms' ) => 'DM',
		__( 'Dominican Republic', 'ninja-forms' ) => 'DO',
		__( 'Timor-Leste (East Timor)', 'ninja-forms' ) => 'TL',
		__( 'Ecuador', 'ninja-forms' ) => 'EC',
		__( 'Egypt', 'ninja-forms' ) => 'EG',
		__( 'El Salvador', 'ninja-forms' ) => 'SV',
		__( 'Equatorial Guinea', 'ninja-forms' ) => 'GQ',
		__( 'Eritrea', 'ninja-forms' ) => 'ER',
		__( 'Estonia', 'ninja-forms' ) => 'EE',
		__( 'Ethiopia', 'ninja-forms' ) => 'ET',
		__( 'Falkland Islands (Malvinas)', 'ninja-forms' ) => 'FK',
		__( 'Faroe Islands', 'ninja-forms' ) => 'FO',
		__( 'Fiji', 'ninja-forms' ) => 'FJ',
		__( 'Finland', 'ninja-forms' ) => 'FI',
		__( 'France', 'ninja-forms' ) => 'FR',
		__( 'France, Metropolitan', 'ninja-forms' ) => 'FX',
		__( 'French Guiana', 'ninja-forms' ) => 'GF',
		__( 'French Polynesia', 'ninja-forms' ) => 'PF',
		__( 'French Southern Territories', 'ninja-forms' ) => 'TF',
		__( 'Gabon', 'ninja-forms' ) => 'GA',
		__( 'Gambia', 'ninja-forms' ) => 'GM',
		__( 'Georgia', 'ninja-forms' ) => 'GE',
		__( 'Germany', 'ninja-forms' ) => 'DE',
		__( 'Ghana', 'ninja-forms' ) => 'GH',
		__( 'Gibraltar', 'ninja-forms' ) => 'GI',
		__( 'Greece', 'ninja-forms' ) => 'GR',
		__( 'Greenland', 'ninja-forms' ) => 'GL',
		__( 'Grenada', 'ninja-forms' ) => 'GD',
		__( 'Guadeloupe', 'ninja-forms' ) => 'GP',
		__( 'Guam', 'ninja-forms' ) => 'GU',
		__( 'Guatemala', 'ninja-forms' ) => 'GT',
		__( 'Guinea', 'ninja-forms' ) => 'GN',
		__( 'Guinea-Bissau', 'ninja-forms' ) => 'GW',
		__( 'Guyana', 'ninja-forms' ) => 'GY',
		__( 'Haiti', 'ninja-forms' ) => 'HT',
		__( 'Heard And Mc Donald Islands', 'ninja-forms' ) => 'HM',
		__( 'Holy See (Vatican City State)', 'ninja-forms' ) => 'VA',
		__( 'Honduras', 'ninja-forms' ) => 'HN',
		__( 'Hong Kong', 'ninja-forms' ) => 'HK',
		__( 'Hungary', 'ninja-forms' ) => 'HU',
		__( 'Iceland', 'ninja-forms' ) => 'IS',
		__( 'India', 'ninja-forms' ) => 'IN',
		__( 'Indonesia', 'ninja-forms' ) => 'ID',
		__( 'Iran (Islamic Republic Of)', 'ninja-forms' ) => 'IR',
		__( 'Iraq', 'ninja-forms' ) => 'IQ',
		__( 'Ireland', 'ninja-forms' ) => 'IE',
		__( 'Israel', 'ninja-forms' ) => 'IL',
		__( 'Italy', 'ninja-forms' ) => 'IT',
		__( 'Jamaica', 'ninja-forms' ) => 'JM',
		__( 'Japan', 'ninja-forms' ) => 'JP',
		__( 'Jordan', 'ninja-forms' ) => 'JO',
		__( 'Kazakhstan', 'ninja-forms' ) => 'KZ',
		__( 'Kenya', 'ninja-forms' ) => 'KE',
		__( 'Kiribati', 'ninja-forms' ) => 'KI',
		__( 'Korea, Democratic People\'s Republic Of', 'ninja-forms' ) => 'KP',
		__( 'Korea, Republic Of', 'ninja-forms' ) => 'KR',
		__( 'Kuwait', 'ninja-forms' ) => 'KW',
		__( 'Kyrgyzstan', 'ninja-forms' ) => 'KG',
		__( 'Lao People\'s Democratic Republic', 'ninja-forms' ) => 'LA',
		__( 'Latvia', 'ninja-forms' ) => 'LV',
		__( 'Lebanon', 'ninja-forms' ) => 'LB',
		__( 'Lesotho', 'ninja-forms' ) => 'LS',
		__( 'Liberia', 'ninja-forms' ) => 'LR',
		__( 'Libyan Arab Jamahiriya', 'ninja-forms' ) => 'LY',
		__( 'Liechtenstein', 'ninja-forms' ) => 'LI',
		__( 'Lithuania', 'ninja-forms' ) => 'LT',
		__( 'Luxembourg', 'ninja-forms' ) => 'LU',
		__( 'Macau', 'ninja-forms' ) => 'MO',
		__( 'Macedonia, Former Yugoslav Republic Of', 'ninja-forms' ) => 'MK',
		__( 'Madagascar', 'ninja-forms' ) => 'MG',
		__( 'Malawi', 'ninja-forms' ) => 'MW',
		__( 'Malaysia', 'ninja-forms' ) => 'MY',
		__( 'Maldives', 'ninja-forms' ) => 'MV',
		__( 'Mali', 'ninja-forms' ) => 'ML',
		__( 'Malta', 'ninja-forms' ) => 'MT',
		__( 'Marshall Islands', 'ninja-forms' ) => 'MH',
		__( 'Martinique', 'ninja-forms' ) => 'MQ',
		__( 'Mauritania', 'ninja-forms' ) => 'MR',
		__( 'Mauritius', 'ninja-forms' ) => 'MU',
		__( 'Mayotte', 'ninja-forms' ) => 'YT',
		__( 'Mexico', 'ninja-forms' ) => 'MX',
		__( 'Micronesia, Federated States Of', 'ninja-forms' ) => 'FM',
		__( 'Moldova, Republic Of', 'ninja-forms' ) => 'MD',
		__( 'Monaco', 'ninja-forms' ) => 'MC',
		__( 'Mongolia', 'ninja-forms' ) => 'MN',
		__( 'Montenegro', 'ninja-forms' ) => 'ME',
		__( 'Montserrat', 'ninja-forms' ) => 'MS',
		__( 'Morocco', 'ninja-forms' ) => 'MA',
		__( 'Mozambique', 'ninja-forms' ) => 'MZ',
		__( 'Myanmar', 'ninja-forms' ) => 'MM',
		__( 'Namibia', 'ninja-forms' ) => 'NA',
		__( 'Nauru', 'ninja-forms' ) => 'NR',
		__( 'Nepal', 'ninja-forms' ) => 'NP',
		__( 'Netherlands', 'ninja-forms' ) => 'NL',
		__( 'Netherlands Antilles', 'ninja-forms' ) => 'AN',
		__( 'New Caledonia', 'ninja-forms' ) => 'NC',
		__( 'New Zealand', 'ninja-forms' ) => 'NZ',
		__( 'Nicaragua', 'ninja-forms' ) => 'NI',
		__( 'Niger', 'ninja-forms' ) => 'NE',
		__( 'Nigeria', 'ninja-forms' ) => 'NG',
		__( 'Niue', 'ninja-forms' ) => 'NU',
		__( 'Norfolk Island', 'ninja-forms' ) => 'NF',
		__( 'Northern Mariana Islands', 'ninja-forms' ) => 'MP',
		__( 'Norway', 'ninja-forms' ) => 'NO',
		__( 'Oman', 'ninja-forms' ) => 'OM',
		__( 'Pakistan', 'ninja-forms' ) => 'PK',
		__( 'Palau', 'ninja-forms' ) => 'PW',
		__( 'Panama', 'ninja-forms' ) => 'PA',
		__( 'Papua New Guinea', 'ninja-forms' ) => 'PG',
		__( 'Paraguay', 'ninja-forms' ) => 'PY',
		__( 'Peru', 'ninja-forms' ) => 'PE',
		__( 'Philippines', 'ninja-forms' ) => 'PH',
		__( 'Pitcairn', 'ninja-forms' ) => 'PN',
		__( 'Poland', 'ninja-forms' ) => 'PL',
		__( 'Portugal', 'ninja-forms' ) => 'PT',
		__( 'Puerto Rico', 'ninja-forms' ) => 'PR',
		__( 'Qatar', 'ninja-forms' ) => 'QA',
		__( 'Reunion', 'ninja-forms' ) => 'RE',
		__( 'Romania', 'ninja-forms' ) => 'RO',
		__( 'Russian Federation', 'ninja-forms' ) => 'RU',
		__( 'Rwanda', 'ninja-forms' ) => 'RW',
		__( 'Saint Kitts And Nevis', 'ninja-forms' ) => 'KN',
		__( 'Saint Lucia', 'ninja-forms' ) => 'LC',
		__( 'Saint Vincent And The Grenadines', 'ninja-forms' ) => 'VC',
		__( 'Samoa', 'ninja-forms' ) => 'WS',
		__( 'San Marino', 'ninja-forms' ) => 'SM',
		__( 'Sao Tome And Principe', 'ninja-forms' ) => 'ST',
		__( 'Saudi Arabia', 'ninja-forms' ) => 'SA',
		__( 'Senegal', 'ninja-forms' ) => 'SN',
		__( 'Serbia', 'ninja-forms' ) => 'SR',	
		__( 'Seychelles', 'ninja-forms' ) => 'SC',
		__( 'Sierra Leone', 'ninja-forms' ) => 'SL',
		__( 'Singapore', 'ninja-forms' ) => 'SG',
		__( 'Slovakia (Slovak Republic)', 'ninja-forms' ) => 'SK',
		__( 'Slovenia', 'ninja-forms' ) => 'SI',
		__( 'Solomon Islands', 'ninja-forms' ) => 'SB',
		__( 'Somalia', 'ninja-forms' ) => 'SO',
		__( 'South Africa', 'ninja-forms' ) => 'ZA',
		__( 'South Georgia, South Sandwich Islands', 'ninja-forms' ) => 'GS',
		__( 'Spain', 'ninja-forms' ) => 'ES',
		__( 'Sri Lanka', 'ninja-forms' ) => 'LK',
		__( 'St. Helena', 'ninja-forms' ) => 'SH',
		__( 'St. Pierre And Miquelon', 'ninja-forms' ) => 'PM',
		__( 'Sudan', 'ninja-forms' ) => 'SD',
		__( 'Suriname', 'ninja-forms' ) => 'SR',
		__( 'Svalbard And Jan Mayen Islands', 'ninja-forms' ) => 'SJ',
		__( 'Swaziland', 'ninja-forms' ) => 'SZ',
		__( 'Sweden', 'ninja-forms' ) => 'SE',
		__( 'Switzerland', 'ninja-forms' ) => 'CH',
		__( 'Syrian Arab Republic', 'ninja-forms' ) => 'SY',
		__( 'Taiwan', 'ninja-forms' ) => 'TW',
		__( 'Tajikistan', 'ninja-forms' ) => 'TJ',
		__( 'Tanzania, United Republic Of', 'ninja-forms' ) => 'TZ',
		__( 'Thailand', 'ninja-forms' ) => 'TH',
		__( 'Togo', 'ninja-forms' ) => 'TG',
		__( 'Tokelau', 'ninja-forms' ) => 'TK',
		__( 'Tonga', 'ninja-forms' ) => 'TO',
		__( 'Trinidad And Tobago', 'ninja-forms' ) => 'TT',
		__( 'Tunisia', 'ninja-forms' ) => 'TN',
		__( 'Turkey', 'ninja-forms' ) => 'TR',
		__( 'Turkmenistan', 'ninja-forms' ) => 'TM',
		__( 'Turks And Caicos Islands', 'ninja-forms' ) => 'TC',
		__( 'Tuvalu', 'ninja-forms' ) => 'TV',
		__( 'Uganda', 'ninja-forms' ) => 'UG',
		__( 'Ukraine', 'ninja-forms' ) => 'UA',
		__( 'United Arab Emirates', 'ninja-forms' ) => 'AE',
		__( 'United Kingdom', 'ninja-forms' ) => 'GB',
		__( 'United States', 'ninja-forms' ) => 'US',
		__( 'United States Minor Outlying Islands', 'ninja-forms' ) => 'UM',
		__( 'Uruguay', 'ninja-forms' ) => 'UY',
		__( 'Uzbekistan', 'ninja-forms' ) => 'UZ',
		__( 'Vanuatu', 'ninja-forms' ) => 'VU',
		__( 'Venezuela', 'ninja-forms' ) => 'VE',
		__( 'Viet Nam', 'ninja-forms' ) => 'VN',
		__( 'Virgin Islands (British)', 'ninja-forms' ) => 'VG',
		__( 'Virgin Islands (U.S.)', 'ninja-forms' ) => 'VI',
		__( 'Wallis And Futuna Islands', 'ninja-forms' ) => 'WF',
		__( 'Western Sahara', 'ninja-forms' ) => 'EH',
		__( 'Yemen', 'ninja-forms' ) => 'YE',
		__( 'Yugoslavia', 'ninja-forms' ) => 'YU',
		__( 'Zambia', 'ninja-forms' ) => 'ZM',
		__( 'Zimbabwe', 'ninja-forms' ) => 'ZW'
	);

	if( isset( $data['default_value'] ) ) {
		$default_value = $data['default_value'];
	}else{
		$default_value = '';
	}

	if ( isset ( $data['country_custom_first'] ) ) {
		$country_custom_first = $data['country_custom_first'];
	} else {
		$country_custom_first = '';
	}

	if ( isset ( $data['country_use_custom_first'] ) AND $data['country_use_custom_first'] == 1 ) {
		$countries = array_merge( array( $country_custom_first => $country_custom_first ), $countries );
	}

	$field_class = ninja_forms_get_field_class( $field_id );
	?>

	<input type="hidden" id="ninja_forms_field_<?php echo $field_id;?>_list_type" value="dropdown">
	<select name="ninja_forms_field_<?php echo $field_id;?>" id="ninja_forms_field_<?php echo $field_id;?>" rel="<?php echo $field_id;?>" class="<?php echo $field_class;?>">
		<?php
		foreach ( $countries as $country => $abbr ) {
			?>
			<option value="<?php echo $abbr;?>" <?php selected( $abbr, $default_value );?>><?php echo $country;?></option>
			<?php
		}
	?>
	</select>

	<?php
}

/*
 *
 * Function that filters the hidden field output by display that identifies the field type.
 * This is a work around and will need to be removed once proper field registration is in place.
 *
 * @since 2.2.30
 * @returns string $field_type
 */

function ninja_forms_field_country_type_filter( $field_type, $field_id ) {
	$field = ninja_forms_get_field_by_id( $field_id );
	if ( $field['type'] == '_country' ) {
		$field_type = 'list';
	}
	
	return $field_type;
}

add_action( 'ninja_forms_display_field_type', 'ninja_forms_field_country_type_filter', 10, 2 );