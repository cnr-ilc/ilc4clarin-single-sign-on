<?php

$config = array(

    // This is a authentication source which handles admin authentication.
    'admin' => array(
        // The default is to use core:AdminPassword, but it can be replaced with
        // any authentication source.

        'core:AdminPassword',
    ),


    // An authentication source which can authenticate against both SAML 2.0
    // and Shibboleth 1.3 IdPs.
    'default-sp' => array(
        'saml:SP',

        
        // The entity ID of this SP.
        // Can be NULL/unset, in which case an entity ID is generated based on the metadata URL.
        'entityID' => 'https://sp.ilc4clarin.ilc.cnr.it',

        // The entity ID of the IdP this should SP should contact.
        // Can be NULL/unset, in which case the user will be shown a list of available IdPs.
        //'idp' => 'https://idp.tutorial.stack-dev.cirrusidentity.com/saml2/idp/metadata.php',

        'idp' => null,
        // The URL to the discovery service.
        // Can be NULL/unset, in which case a builtin discovery service will be used.
        'discoURL' => 'https://discovery.clarin.eu/',

        'privatekey' => 'private_key.pem',
        'certificate' => 'certificate.pem',
        /*
         * WARNING: SHA-1 is disallowed starting January the 1st, 2014.
         *
         * Uncomment the following option to start using SHA-256 for your signatures.
         * Currently, SimpleSAMLphp defaults to SHA-1, which has been deprecated since
         * 2011, and will be disallowed by NIST as of 2014. Please refer to the following
         * document for more information:
         *
         * http://csrc.nist.gov/publications/nistpubs/800-131A/sp800-131A.pdf
         *
         * If you are uncertain about identity providers supporting SHA-256 or other
         * algorithms of the SHA-2 family, you can configure it individually in the
         * IdP-remote metadata set for those that support it. Once you are certain that
         * all your configured IdPs support SHA-2, you can safely remove the configuration
         * options in the IdP-remote metadata set and uncomment the following option.
         *
         * Please refer to the hosted SP configuration reference for more information.
          */
        //'signature.algorithm' => 'http://www.w3.org/2001/04/xmldsig-more#rsa-sha256',

        /*
         * The attributes parameter must contain an array of desired attributes by the SP.
         * The attributes can be expressed as an array of names or as an associative array
         * in the form of 'friendlyName' => 'name'. This feature requires 'name' to be set.
         * The metadata will then be created as follows:
         * <md:RequestedAttribute FriendlyName="friendlyName" Name="name" />
         */
        /*'name' => array(
             'en' => 'A service',
             'no' => 'En tjeneste',
          ),

          'attributes' => array(
            'attrname' => 'urn:oid:x.x.x.x',
        ),*/
        /*'attributes.required' => array (
            'urn:oid:x.x.x.x',
        ),*/
        'UIInfo' => array(
            'DisplayName' =>  array(
                'en'=> 'Service Provider for the CLARIN Research Infrastructure provided by ILC-CNR',
                'it'=> 'Service Provider per l\'infrastruttura di Ricerca CLARIN erogato da ILC-CNR',
            ),
            'Description' => array(
                'en'=> 'ILC-CNR for the CLARIN-IT consortium: service provider for federated authentication',
                'it'=> 'ILC-CNR per il consorzio CLARIN-IT: service provider per l\'autenticazione federata'
            ),
            'PrivacyStatementURL' => array(
                'en' => 'https://sp.ilc4clarin.ilc.cnr.it/privacy.html',
                'it' => 'https://sp.ilc4clarin.ilc.cnr.it/privacy.html',
	    ),
	    'InformationURL' => [
	        'en' => 'https://sp.ilc4clarin.ilc.cnr.it/privacy.html',
	    ],
            'Logo' => array(
                array(
                    'url'=> 'https://sp.ilc4clarin.ilc.cnr.it/img/ilc4clarin_80x53.png',
                    'height'=> 53,
                    'width'=> 80
                ),
                array(
                    'url'=> 'https://sp.ilc4clarin.ilc.cnr.it/img/ilc4clarin_16x16.png',
                    'height'=> 16,
                    'width'=> 16
                )
            )
        ),

        'name' => array(
            'it'=> 'Service Provider per l\'infrastruttura di Ricerca CLARIN erogato da ILC-CNR',
            'en'=> 'Service Provider for the CLARIN Research Infrastructure provided by ILC-CNR',
        ),

        'attributes.NameFormat' => 'urn:oasis:names:tc:SAML:2.0:attrname-format:uri',

        'attributes' => array(
            'eduPersonPrincipalName'=> 'urn:oid:1.3.6.1.4.1.5923.1.1.1.6',
            'email'=> 'urn:oid:0.9.2342.19200300.100.1.3',
            /* 'cn'=> 'urn:oid:2.5.4.3',
            'organizationName'=> 'urn:oid:2.5.4.10', */
            'displayName' => 'urn:oid:2.16.840.1.113730.3.1.241',
            'eduPersonTargetedID' => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.10',
            'eduPersonScopedAffiliation' => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.9'
        ),

        'attributes.required' => array(
            'urn:oid:1.3.6.1.4.1.5923.1.1.1.6',
            'urn:oid:0.9.2342.19200300.100.1.3',
            'urn:oid:2.16.840.1.113730.3.1.241',
            'urn:oid:1.3.6.1.4.1.5923.1.1.1.10',
            'urn:oid:1.3.6.1.4.1.5923.1.1.1.9'
        ),

	'contacts' => [
	    [
                'contactType'       => 'administrative',
	        'emailAddress'      => 'michele.mallia@cnr.it',
	        'givenName'         => 'Michele',
	        'surName'           => 'Mallia',
	        'telephoneNumber'   => '(+39)3392804180',
	        'company'           => 'Consiglio Nazionale delle Ricerche',
	    ],
	    [
	        'contactType'       => 'technical',
	        'emailAddress'      => 'michele.mallia@cnr.it',
	        'givenName'         => 'Michele',
	        'surName'           => 'Mallia',
	        'telephoneNumber'   => '(+39)3392804180',
	        'company'           => 'Consiglio Nazionale delle Ricerche',
	    ],
            [
                'contactType'       => 'support',
                'emailAddress'      => 'michele.mallia@cnr.it',
                'givenName'         => 'Michele',
                'surName'           => 'Mallia',
                'telephoneNumber'   => '(+39)3392804180',
                'company'           => 'Consiglio Nazionale delle Ricerche',
            ],
        ],

        'description' => [
            'en'=> 'ILC-CNR for the CLARIN-IT consortium: service provider for federated authentication',
            'it'=> 'ILC-CNR per il consorzio CLARIN-IT: service provider per l\'autenticazione federata'
	],

	'RegistrationInfo' => [
	   'authority' => 'urn:mace:sp.ilc4clarin.ilc.cnr.it',
	   'instant' => '2025-02-10T14:01:00.000Z',
	   'policies' => ['en' => 'https://sp.ilc4clarin.ilc.cnr.it/privacy.html'],
	  
	],

        'OrganizationName' => array(
            'en' => 'National Research Council (CNR)',
            'it' => 'Consiglio Nazionale delle Ricerche (CNR)',
        ),

        'OrganizationDisplayName' => array(
            'it' => 'CNR Istituto di Linguistica Computazionale "Antonio Zampolli"',
            'en' => 'CNR Institute for Computational Linguistics "Antonio Zampolli"',
        ),

        'OrganizationURL' => array(
            'it' => 'http://www.ilc.cnr.it',
            'en' => 'http://www.ilc.cnr.it/en',
        ),

        'EntityAttributes' => array(
            '{urn:oasis:names:tc:SAML:2.0:attrname-format:uri}http://macedir.org/entity-category' => ['http://www.geant.net/uri/dataprotection-code-of-conduct/v1', 'http://refeds.org/category/research-and-scholarship', 'http://clarin.eu/category/clarin-member']
        ),
    ),

);
