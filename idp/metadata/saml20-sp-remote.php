<?php

/* $metadata['https://sp-dev.ilc4clarin.ilc.cnr.it/module.php/saml/sp/metadata.php/default-sp'] = array (
  'SingleLogoutService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://sp-dev.ilc4clarin.ilc.cnr.it/module.php/saml/sp/saml2-logout.php/default-sp',
    ),
  ),
  'AssertionConsumerService' =>
  array (
    0 =>
    array (
      'index' => 0,
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://sp-dev.ilc4clarin.ilc.cnr.it/module.php/saml/sp/saml2-acs.php/default-sp',
    ),
    1 =>
    array (
      'index' => 1,
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
      'Location' => 'https://sp-dev.ilc4clarin.ilc.cnr.it/module.php/saml/sp/saml1-acs.php/default-sp',
    ),
    2 =>
    array (
      'index' => 2,
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://sp-dev.ilc4clarin.ilc.cnr.it/module.php/saml/sp/saml2-acs.php/default-sp',
    ),
    3 =>
    array (
      'index' => 3,
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
      'Location' => 'https://sp-dev.ilc4clarin.ilc.cnr.it/module.php/saml/sp/saml1-acs.php/default-sp/artifact',
    ),
  ),
); */


$metadata = array(
  'https://sp-dev.ilc4clarin.ilc.cnr.it/module.php/saml/sp/metadata.php/default-sp' => array(
      'metadata-set' => 'saml20-sp-remote',
      'entityid' => 'https://sp-dev.ilc4clarin.ilc.cnr.it/module.php/saml/sp/metadata.php/default-sp',
      'SingleLogoutService' => array(
          array(
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
              'Location' => 'https://sp-dev.ilc4clarin.ilc.cnr.it/module.php/saml/sp/saml2-logout.php/default-sp',
          ),
      ),
      'AssertionConsumerService' => array(
          array(
              'index' => 0,
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
              'Location' => 'https://sp-dev.ilc4clarin.ilc.cnr.it/module.php/saml/sp/saml2-acs.php/default-sp',
          ),
          array(
              'index' => 1,
              'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
              'Location' => 'https://sp-dev.ilc4clarin.ilc.cnr.it/module.php/saml/sp/saml1-acs.php/default-sp',
          ),
          array(
              'index' => 2,
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
              'Location' => 'https://sp-dev.ilc4clarin.ilc.cnr.it/module.php/saml/sp/saml2-acs.php/default-sp',
          ),
          array(
              'index' => 3,
              'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
              'Location' => 'https://sp-dev.ilc4clarin.ilc.cnr.it/module.php/saml/sp/saml1-acs.php/default-sp/artifact',
          ),
      ),
      'NameIDFormat' => array(
          'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
      ),
      'OrganizationName' => 'ILC CNR',
      'OrganizationURL' => 'https://www.ilc.cnr.it',
      'contacts' => array(
          array(
              'contactType' => 'support',
              'givenName' => 'Support',
              'surName' => 'ILC CNR',
              'emailAddress' => 'mailto:support@ilc.cnr.it',
          ),
          array(
              'contactType' => 'technical',
              'givenName' => 'Technical Support',
              'surName' => 'ILC CNR',
              'emailAddress' => 'mailto:techsupport@ilc.cnr.it',
          ),
      ),
  ),
);
