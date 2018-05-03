<?php
/**
 * 限りなくuniqueに近いUUIDを生成する
 */

namespace App\Libs;


class UUID {

    /**
     * @var
     */
    public $prefix;

    /**
     * @var
     */
    public $entropy;

    /**
     * @param string $prefix
     * @param bool $entropy
     *
     */
    public function __construct($prefix = '', $entropy = false, $hash = null)
    {
        switch ($hash) {
            case 'md5': //32文字の16進数を返す
                //実行結果例：719deecdbfec1e13b4ed4e755ed39a47
                $this->uuid = md5(uniqid($prefix, $entropy));
                break;
            case 'sha1': //40文字の16進数を返す
                //実行結果例：ad46200ced3a5a5acd6697b11926589cc279b363
                $this->uuid = sha1(uniqid($prefix, $entropy));
                break;
            default: // $entropy:true 実行結果例：145677405658ddab75790ea7.19793837
                $this->uuid = uniqid($prefix, $entropy);
                break;
        }
    }

    /**
     * Limit the UUID by a number of characters
     *
     * @param $length
     * @param int $start
     * @return $this
     */
    public function limit($length, $start = 0)
    {
        $this->uuid = substr($this->uuid, $start, $length);

        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->uuid;
    }


}