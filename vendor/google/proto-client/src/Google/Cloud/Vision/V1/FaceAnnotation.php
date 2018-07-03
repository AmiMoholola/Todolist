<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A face annotation object contains the results of face detection.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.FaceAnnotation</code>
 */
class FaceAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * The bounding polygon around the face. The coordinates of the bounding box
     * are in the original image's scale, as returned in `ImageParams`.
     * The bounding box is computed to "frame" the face in accordance with human
     * expectations. It is based on the landmarker results.
     * Note that one or more x and/or y coordinates may not be generated in the
     * `BoundingPoly` (the polygon will be unbounded) if only a partial face
     * appears in the image to be annotated.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 1;</code>
     */
    private $bounding_poly = null;
    /**
     * The `fd_bounding_poly` bounding polygon is tighter than the
     * `boundingPoly`, and encloses only the skin part of the face. Typically, it
     * is used to eliminate the face from any image analysis that detects the
     * "amount of skin" visible in an image. It is not based on the
     * landmarker results, only on the initial face detection, hence
     * the <code>fd</code> (face detection) prefix.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly fd_bounding_poly = 2;</code>
     */
    private $fd_bounding_poly = null;
    /**
     * Detected face landmarks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.FaceAnnotation.Landmark landmarks = 3;</code>
     */
    private $landmarks;
    /**
     * Roll angle, which indicates the amount of clockwise/anti-clockwise rotation
     * of the face relative to the image vertical about the axis perpendicular to
     * the face. Range [-180,180].
     *
     * Generated from protobuf field <code>float roll_angle = 4;</code>
     */
    private $roll_angle = 0.0;
    /**
     * Yaw angle, which indicates the leftward/rightward angle that the face is
     * pointing relative to the vertical plane perpendicular to the image. Range
     * [-180,180].
     *
     * Generated from protobuf field <code>float pan_angle = 5;</code>
     */
    private $pan_angle = 0.0;
    /**
     * Pitch angle, which indicates the upwards/downwards angle that the face is
     * pointing relative to the image's horizontal plane. Range [-180,180].
     *
     * Generated from protobuf field <code>float tilt_angle = 6;</code>
     */
    private $tilt_angle = 0.0;
    /**
     * Detection confidence. Range [0, 1].
     *
     * Generated from protobuf field <code>float detection_confidence = 7;</code>
     */
    private $detection_confidence = 0.0;
    /**
     * Face landmarking confidence. Range [0, 1].
     *
     * Generated from protobuf field <code>float landmarking_confidence = 8;</code>
     */
    private $landmarking_confidence = 0.0;
    /**
     * Joy likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood joy_likelihood = 9;</code>
     */
    private $joy_likelihood = 0;
    /**
     * Sorrow likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood sorrow_likelihood = 10;</code>
     */
    private $sorrow_likelihood = 0;
    /**
     * Anger likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood anger_likelihood = 11;</code>
     */
    private $anger_likelihood = 0;
    /**
     * Surprise likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood surprise_likelihood = 12;</code>
     */
    private $surprise_likelihood = 0;
    /**
     * Under-exposed likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood under_exposed_likelihood = 13;</code>
     */
    private $under_exposed_likelihood = 0;
    /**
     * Blurred likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood blurred_likelihood = 14;</code>
     */
    private $blurred_likelihood = 0;
    /**
     * Headwear likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood headwear_likelihood = 15;</code>
     */
    private $headwear_likelihood = 0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * The bounding polygon around the face. The coordinates of the bounding box
     * are in the original image's scale, as returned in `ImageParams`.
     * The bounding box is computed to "frame" the face in accordance with human
     * expectations. It is based on the landmarker results.
     * Note that one or more x and/or y coordinates may not be generated in the
     * `BoundingPoly` (the polygon will be unbounded) if only a partial face
     * appears in the image to be annotated.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 1;</code>
     * @return \Google\Cloud\Vision\V1\BoundingPoly
     */
    public function getBoundingPoly()
    {
        return $this->bounding_poly;
    }

    /**
     * The bounding polygon around the face. The coordinates of the bounding box
     * are in the original image's scale, as returned in `ImageParams`.
     * The bounding box is computed to "frame" the face in accordance with human
     * expectations. It is based on the landmarker results.
     * Note that one or more x and/or y coordinates may not be generated in the
     * `BoundingPoly` (the polygon will be unbounded) if only a partial face
     * appears in the image to be annotated.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 1;</code>
     * @param \Google\Cloud\Vision\V1\BoundingPoly $var
     * @return $this
     */
    public function setBoundingPoly($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\BoundingPoly::class);
        $this->bounding_poly = $var;

        return $this;
    }

    /**
     * The `fd_bounding_poly` bounding polygon is tighter than the
     * `boundingPoly`, and encloses only the skin part of the face. Typically, it
     * is used to eliminate the face from any image analysis that detects the
     * "amount of skin" visible in an image. It is not based on the
     * landmarker results, only on the initial face detection, hence
     * the <code>fd</code> (face detection) prefix.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly fd_bounding_poly = 2;</code>
     * @return \Google\Cloud\Vision\V1\BoundingPoly
     */
    public function getFdBoundingPoly()
    {
        return $this->fd_bounding_poly;
    }

    /**
     * The `fd_bounding_poly` bounding polygon is tighter than the
     * `boundingPoly`, and encloses only the skin part of the face. Typically, it
     * is used to eliminate the face from any image analysis that detects the
     * "amount of skin" visible in an image. It is not based on the
     * landmarker results, only on the initial face detection, hence
     * the <code>fd</code> (face detection) prefix.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly fd_bounding_poly = 2;</code>
     * @param \Google\Cloud\Vision\V1\BoundingPoly $var
     * @return $this
     */
    public function setFdBoundingPoly($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\BoundingPoly::class);
        $this->fd_bounding_poly = $var;

        return $this;
    }

    /**
     * Detected face landmarks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.FaceAnnotation.Landmark landmarks = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLandmarks()
    {
        return $this->landmarks;
    }

    /**
     * Detected face landmarks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.FaceAnnotation.Landmark landmarks = 3;</code>
     * @param \Google\Cloud\Vision\V1\FaceAnnotation_Landmark[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLandmarks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\FaceAnnotation_Landmark::class);
        $this->landmarks = $arr;

        return $this;
    }

    /**
     * Roll angle, which indicates the amount of clockwise/anti-clockwise rotation
     * of the face relative to the image vertical about the axis perpendicular to
     * the face. Range [-180,180].
     *
     * Generated from protobuf field <code>float roll_angle = 4;</code>
     * @return float
     */
    public function getRollAngle()
    {
        return $this->roll_angle;
    }

    /**
     * Roll angle, which indicates the amount of clockwise/anti-clockwise rotation
     * of the face relative to the image vertical about the axis perpendicular to
     * the face. Range [-180,180].
     *
     * Generated from protobuf field <code>float roll_angle = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setRollAngle($var)
    {
        GPBUtil::checkFloat($var);
        $this->roll_angle = $var;

        return $this;
    }

    /**
     * Yaw angle, which indicates the leftward/rightward angle that the face is
     * pointing relative to the vertical plane perpendicular to the image. Range
     * [-180,180].
     *
     * Generated from protobuf field <code>float pan_angle = 5;</code>
     * @return float
     */
    public function getPanAngle()
    {
        return $this->pan_angle;
    }

    /**
     * Yaw angle, which indicates the leftward/rightward angle that the face is
     * pointing relative to the vertical plane perpendicular to the image. Range
     * [-180,180].
     *
     * Generated from protobuf field <code>float pan_angle = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setPanAngle($var)
    {
        GPBUtil::checkFloat($var);
        $this->pan_angle = $var;

        return $this;
    }

    /**
     * Pitch angle, which indicates the upwards/downwards angle that the face is
     * pointing relative to the image's horizontal plane. Range [-180,180].
     *
     * Generated from protobuf field <code>float tilt_angle = 6;</code>
     * @return float
     */
    public function getTiltAngle()
    {
        return $this->tilt_angle;
    }

    /**
     * Pitch angle, which indicates the upwards/downwards angle that the face is
     * pointing relative to the image's horizontal plane. Range [-180,180].
     *
     * Generated from protobuf field <code>float tilt_angle = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setTiltAngle($var)
    {
        GPBUtil::checkFloat($var);
        $this->tilt_angle = $var;

        return $this;
    }

    /**
     * Detection confidence. Range [0, 1].
     *
     * Generated from protobuf field <code>float detection_confidence = 7;</code>
     * @return float
     */
    public function getDetectionConfidence()
    {
        return $this->detection_confidence;
    }

    /**
     * Detection confidence. Range [0, 1].
     *
     * Generated from protobuf field <code>float detection_confidence = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setDetectionConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->detection_confidence = $var;

        return $this;
    }

    /**
     * Face landmarking confidence. Range [0, 1].
     *
     * Generated from protobuf field <code>float landmarking_confidence = 8;</code>
     * @return float
     */
    public function getLandmarkingConfidence()
    {
        return $this->landmarking_confidence;
    }

    /**
     * Face landmarking confidence. Range [0, 1].
     *
     * Generated from protobuf field <code>float landmarking_confidence = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setLandmarkingConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->landmarking_confidence = $var;

        return $this;
    }

    /**
     * Joy likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood joy_likelihood = 9;</code>
     * @return int
     */
    public function getJoyLikelihood()
    {
        return $this->joy_likelihood;
    }

    /**
     * Joy likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood joy_likelihood = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setJoyLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1\Likelihood::class);
        $this->joy_likelihood = $var;

        return $this;
    }

    /**
     * Sorrow likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood sorrow_likelihood = 10;</code>
     * @return int
     */
    public function getSorrowLikelihood()
    {
        return $this->sorrow_likelihood;
    }

    /**
     * Sorrow likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood sorrow_likelihood = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setSorrowLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1\Likelihood::class);
        $this->sorrow_likelihood = $var;

        return $this;
    }

    /**
     * Anger likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood anger_likelihood = 11;</code>
     * @return int
     */
    public function getAngerLikelihood()
    {
        return $this->anger_likelihood;
    }

    /**
     * Anger likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood anger_likelihood = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setAngerLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1\Likelihood::class);
        $this->anger_likelihood = $var;

        return $this;
    }

    /**
     * Surprise likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood surprise_likelihood = 12;</code>
     * @return int
     */
    public function getSurpriseLikelihood()
    {
        return $this->surprise_likelihood;
    }

    /**
     * Surprise likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood surprise_likelihood = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setSurpriseLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1\Likelihood::class);
        $this->surprise_likelihood = $var;

        return $this;
    }

    /**
     * Under-exposed likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood under_exposed_likelihood = 13;</code>
     * @return int
     */
    public function getUnderExposedLikelihood()
    {
        return $this->under_exposed_likelihood;
    }

    /**
     * Under-exposed likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood under_exposed_likelihood = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setUnderExposedLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1\Likelihood::class);
        $this->under_exposed_likelihood = $var;

        return $this;
    }

    /**
     * Blurred likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood blurred_likelihood = 14;</code>
     * @return int
     */
    public function getBlurredLikelihood()
    {
        return $this->blurred_likelihood;
    }

    /**
     * Blurred likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood blurred_likelihood = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setBlurredLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1\Likelihood::class);
        $this->blurred_likelihood = $var;

        return $this;
    }

    /**
     * Headwear likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood headwear_likelihood = 15;</code>
     * @return int
     */
    public function getHeadwearLikelihood()
    {
        return $this->headwear_likelihood;
    }

    /**
     * Headwear likelihood.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Likelihood headwear_likelihood = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setHeadwearLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1\Likelihood::class);
        $this->headwear_likelihood = $var;

        return $this;
    }

}

