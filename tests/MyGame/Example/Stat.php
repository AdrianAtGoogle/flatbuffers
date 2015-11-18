<?php
// automatically generated, do not modify

namespace MyGame\Example;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class Stat extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return Stat
     */
    public static function getRootAsStat(ByteBuffer $bb)
    {
        $obj = new Stat();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    public static function StatIdentifier()
    {
        return "MONS";
    }

    public static function StatBufferHasIdentifier(ByteBuffer $buf)
    {
        return self::__has_identifier($buf, self::StatIdentifier());
    }

    public static function StatExtension()
    {
        return "mon";
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return Stat
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    public function getId()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @return long
     */
    public function getVal()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->bb->getLong($o + $this->bb_pos) : 0;
    }

    /**
     * @return ushort
     */
    public function getCount()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->bb->getUshort($o + $this->bb_pos) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startStat(FlatBufferBuilder $builder)
    {
        $builder->StartObject(3);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return Stat
     */
    public static function createStat(FlatBufferBuilder $builder, $id, $val, $count)
    {
        $builder->startObject(3);
        self::addId($builder, $id);
        self::addVal($builder, $val);
        self::addCount($builder, $count);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addId(FlatBufferBuilder $builder, $id)
    {
        $builder->addOffsetX(0, $id, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param long
     * @return void
     */
    public static function addVal(FlatBufferBuilder $builder, $val)
    {
        $builder->addLongX(1, $val, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param ushort
     * @return void
     */
    public static function addCount(FlatBufferBuilder $builder, $count)
    {
        $builder->addUshortX(2, $count, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endStat(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}
