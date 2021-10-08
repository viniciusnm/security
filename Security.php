<?php

/**
 * Class Security
 * @package App\GeraDoc
 */
class Security
{
    private $encryptionIV = "1234567891011121";
    private $key = "???";
    private $ciphering = "AES-128-CTR";

    public function encrypt($string)
    {
        return openssl_encrypt($string, $this->ciphering,
            $this->key, 0, $this->encryptionIV);
    }

    public function decript($encryption)
    {
        return openssl_decrypt($encryption, $this->ciphering,
            $this->key, 0, $this->encryptionIV);
    }
}

$security = new Security();
echo $security->encrypt("");
echo $security->decript("");
