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
);