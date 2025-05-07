<?php

$metadata = array(
  'https://vocabs.ilc4clarin.ilc.cnr.it/inception/saml2/service-provider-metadata/inception-client' => array(
    'metadata-set' => 'saml20-sp-remote',
    'entityid' => 'https://vocabs.ilc4clarin.ilc.cnr.it/inception/saml2/service-provider-metadata/inception-client',
    'AssertionConsumerService' => array(
      array(
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
        'Location' => 'https://vocabs.ilc4clarin.ilc.cnr.it/auth/realms/inception-demo/broker/saml/endpoint',
        'index' => 1,
      ),
    ),
  ),
  'https://vocabs.ilc4clarin.ilc.cnr.it/auth/realms/clarin_realm' => array(
 	'metadata-set' => 'saml20-sp-remote',
	'entityid' => 'https://vocabs.ilc4clarin.ilc.cnr.it/auth/realms/clarin_realm',
	'AssertionConsumerService' => array(
		array(
	       		'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
	                'Location' => 'https://vocabs.ilc4clarin.ilc.cnr.it/auth/realms/clarin_realm/broker/saml/endpoint',
			'index' => 1,
			'isDefault' => true,
	        ),
	),
	#'SingleLogoutService' => array(
#		array(
#	        	'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
#	                'Location' => 'https://vocabs.ilc4clarin.ilc.cnr.it/auth/realms/clarin_realm/broker/saml/endpoint',
#	        ),
#	),
	'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
	'validate.authnrequest' => false,
	'saml20.sign.assertion' => false,
   ),
);
