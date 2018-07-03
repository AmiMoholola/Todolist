<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Cloud\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The set of columns' values that share the same k-anonymity value.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta1.RiskAnalysisOperationResult.KAnonymityResult.KAnonymityEquivalenceClass</code>
 */
class RiskAnalysisOperationResult_KAnonymityResult_KAnonymityEquivalenceClass extends \Google\Protobuf\Internal\Message
{
    /**
     * Set of values defining the equivalence class. One value per
     * quasi-identifier column in the original KAnonymity metric message.
     * The order is always the same as the original request.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.Value quasi_ids_values = 1;</code>
     */
    private $quasi_ids_values;
    /**
     * Size of the equivalence class, for example number of rows with the
     * above set of values.
     *
     * Generated from protobuf field <code>int64 equivalence_class_size = 2;</code>
     */
    private $equivalence_class_size = 0;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * Set of values defining the equivalence class. One value per
     * quasi-identifier column in the original KAnonymity metric message.
     * The order is always the same as the original request.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.Value quasi_ids_values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuasiIdsValues()
    {
        return $this->quasi_ids_values;
    }

    /**
     * Set of values defining the equivalence class. One value per
     * quasi-identifier column in the original KAnonymity metric message.
     * The order is always the same as the original request.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.Value quasi_ids_values = 1;</code>
     * @param \Google\Cloud\Dlp\V2beta1\Value[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuasiIdsValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2beta1\Value::class);
        $this->quasi_ids_values = $arr;

        return $this;
    }

    /**
     * Size of the equivalence class, for example number of rows with the
     * above set of values.
     *
     * Generated from protobuf field <code>int64 equivalence_class_size = 2;</code>
     * @return int|string
     */
    public function getEquivalenceClassSize()
    {
        return $this->equivalence_class_size;
    }

    /**
     * Size of the equivalence class, for example number of rows with the
     * above set of values.
     *
     * Generated from protobuf field <code>int64 equivalence_class_size = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEquivalenceClassSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->equivalence_class_size = $var;

        return $this;
    }

}

