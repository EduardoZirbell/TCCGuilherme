<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/enums/asset_group_status.proto

namespace Google\Ads\GoogleAds\V11\Enums\AssetGroupStatusEnum;

use UnexpectedValueException;

/**
 * The possible statuses of an asset group.
 *
 * Protobuf type <code>google.ads.googleads.v11.enums.AssetGroupStatusEnum.AssetGroupStatus</code>
 */
class AssetGroupStatus
{
    /**
     * The status has not been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received value is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The asset group is enabled.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    const ENABLED = 2;
    /**
     * The asset group is paused.
     *
     * Generated from protobuf enum <code>PAUSED = 3;</code>
     */
    const PAUSED = 3;
    /**
     * The asset group is removed.
     *
     * Generated from protobuf enum <code>REMOVED = 4;</code>
     */
    const REMOVED = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ENABLED => 'ENABLED',
        self::PAUSED => 'PAUSED',
        self::REMOVED => 'REMOVED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssetGroupStatus::class, \Google\Ads\GoogleAds\V11\Enums\AssetGroupStatusEnum_AssetGroupStatus::class);

