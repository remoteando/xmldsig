<?php

namespace Remoteando\XmlDSigTest\Adapter;

use Remoteando\XmlDSig\Adapter\XmlseclibsAdapter;

/**
 * Test suite for Xmlseclibs adapter.
 */
class XmlseclibsAdapterTest extends CommonTestCase
{
    protected function setUp()
    {
        $this->adapter = new XmlseclibsAdapter();
    }

    public function testGetPublicKeyFromPrivateKey()
    {
        $this->markTestIncomplete('PHP OpenSSL extension does not extract public key from private key');
    }
}
