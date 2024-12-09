<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Proxy\V1;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
abstract class ServiceOptions
{
    /**
     * @param integer $defaultTtl              Default TTL for a Session, in seconds.
     * @param string  $callbackUrl             URL Twilio will send callbacks to
     * @param string  $geoMatchLevel           Whether to find proxy numbers in the same
     *                                         areacode.
     * @param string  $numberSelectionBehavior What behavior to use when choosing a
     *                                         proxy number.
     * @param string  $interceptCallbackUrl    A URL for Twilio call before each
     *                                         Interaction.
     * @param string  $outOfSessionCallbackUrl A URL for Twilio call when a new
     *                                         Interaction has no Session.
     *
     * @return CreateServiceOptions Options builder
     */
    public static function create($defaultTtl = Values::NONE, $callbackUrl = Values::NONE, $geoMatchLevel = Values::NONE, $numberSelectionBehavior = Values::NONE, $interceptCallbackUrl = Values::NONE, $outOfSessionCallbackUrl = Values::NONE)
    {
        return new CreateServiceOptions($defaultTtl, $callbackUrl, $geoMatchLevel, $numberSelectionBehavior, $interceptCallbackUrl, $outOfSessionCallbackUrl);
    }

    /**
     * @param string  $uniqueName              A human readable description of this resource.
     * @param integer $defaultTtl              Default TTL for a Session, in seconds.
     * @param string  $callbackUrl             URL Twilio will send callbacks to
     * @param string  $geoMatchLevel           Whether to find proxy numbers in the same
     *                                         areacode.
     * @param string  $numberSelectionBehavior What behavior to use when choosing a
     *                                         proxy number.
     * @param string  $interceptCallbackUrl    A URL for Twilio call before each
     *                                         Interaction.
     * @param string  $outOfSessionCallbackUrl A URL for Twilio call when a new
     *                                         Interaction has no Session.
     *
     * @return UpdateServiceOptions Options builder
     */
    public static function update($uniqueName = Values::NONE, $defaultTtl = Values::NONE, $callbackUrl = Values::NONE, $geoMatchLevel = Values::NONE, $numberSelectionBehavior = Values::NONE, $interceptCallbackUrl = Values::NONE, $outOfSessionCallbackUrl = Values::NONE)
    {
        return new UpdateServiceOptions($uniqueName, $defaultTtl, $callbackUrl, $geoMatchLevel, $numberSelectionBehavior, $interceptCallbackUrl, $outOfSessionCallbackUrl);
    }
}

class CreateServiceOptions extends Options
{
    /**
     * @param integer $defaultTtl              Default TTL for a Session, in seconds.
     * @param string  $callbackUrl             URL Twilio will send callbacks to
     * @param string  $geoMatchLevel           Whether to find proxy numbers in the same
     *                                         areacode.
     * @param string  $numberSelectionBehavior What behavior to use when choosing a
     *                                         proxy number.
     * @param string  $interceptCallbackUrl    A URL for Twilio call before each
     *                                         Interaction.
     * @param string  $outOfSessionCallbackUrl A URL for Twilio call when a new
     *                                         Interaction has no Session.
     */
    public function __construct($defaultTtl = Values::NONE, $callbackUrl = Values::NONE, $geoMatchLevel = Values::NONE, $numberSelectionBehavior = Values::NONE, $interceptCallbackUrl = Values::NONE, $outOfSessionCallbackUrl = Values::NONE)
    {
        $this->options['defaultTtl'] = $defaultTtl;
        $this->options['callbackUrl'] = $callbackUrl;
        $this->options['geoMatchLevel'] = $geoMatchLevel;
        $this->options['numberSelectionBehavior'] = $numberSelectionBehavior;
        $this->options['interceptCallbackUrl'] = $interceptCallbackUrl;
        $this->options['outOfSessionCallbackUrl'] = $outOfSessionCallbackUrl;
    }

    /**
     * The default Time to Live for a Session, in seconds.
     *
     * @param integer $defaultTtl Default TTL for a Session, in seconds.
     *
     * @return $this Fluent Builder
     */
    public function setDefaultTtl($defaultTtl)
    {
        $this->options['defaultTtl'] = $defaultTtl;
        return $this;
    }

    /**
     * The URL Twilio will send callbacks to.
     *
     * @param string $callbackUrl URL Twilio will send callbacks to
     *
     * @return $this Fluent Builder
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->options['callbackUrl'] = $callbackUrl;
        return $this;
    }

    /**
     * Whether to find proxy numbers in the same areacode.
     *
     * @param string $geoMatchLevel Whether to find proxy numbers in the same
     *                              areacode.
     *
     * @return $this Fluent Builder
     */
    public function setGeoMatchLevel($geoMatchLevel)
    {
        $this->options['geoMatchLevel'] = $geoMatchLevel;
        return $this;
    }

    /**
     * What behavior to use when choosing a proxy number.
     *
     * @param string $numberSelectionBehavior What behavior to use when choosing a
     *                                        proxy number.
     *
     * @return $this Fluent Builder
     */
    public function setNumberSelectionBehavior($numberSelectionBehavior)
    {
        $this->options['numberSelectionBehavior'] = $numberSelectionBehavior;
        return $this;
    }

    /**
     * A URL for Twilio call before each Interaction. An error status code will prevent the interaction from continuing.
     *
     * @param string $interceptCallbackUrl A URL for Twilio call before each
     *                                     Interaction.
     *
     * @return $this Fluent Builder
     */
    public function setInterceptCallbackUrl($interceptCallbackUrl)
    {
        $this->options['interceptCallbackUrl'] = $interceptCallbackUrl;
        return $this;
    }

    /**
     * A URL for Twilio call when a new Interaction has no Session.
     *
     * @param string $outOfSessionCallbackUrl A URL for Twilio call when a new
     *                                        Interaction has no Session.
     *
     * @return $this Fluent Builder
     */
    public function setOutOfSessionCallbackUrl($outOfSessionCallbackUrl)
    {
        $this->options['outOfSessionCallbackUrl'] = $outOfSessionCallbackUrl;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Proxy.V1.CreateServiceOptions '.implode(' ', $options).']';
    }
}

class UpdateServiceOptions extends Options
{
    /**
     * @param string  $uniqueName              A human readable description of this resource.
     * @param integer $defaultTtl              Default TTL for a Session, in seconds.
     * @param string  $callbackUrl             URL Twilio will send callbacks to
     * @param string  $geoMatchLevel           Whether to find proxy numbers in the same
     *                                         areacode.
     * @param string  $numberSelectionBehavior What behavior to use when choosing a
     *                                         proxy number.
     * @param string  $interceptCallbackUrl    A URL for Twilio call before each
     *                                         Interaction.
     * @param string  $outOfSessionCallbackUrl A URL for Twilio call when a new
     *                                         Interaction has no Session.
     */
    public function __construct($uniqueName = Values::NONE, $defaultTtl = Values::NONE, $callbackUrl = Values::NONE, $geoMatchLevel = Values::NONE, $numberSelectionBehavior = Values::NONE, $interceptCallbackUrl = Values::NONE, $outOfSessionCallbackUrl = Values::NONE)
    {
        $this->options['uniqueName'] = $uniqueName;
        $this->options['defaultTtl'] = $defaultTtl;
        $this->options['callbackUrl'] = $callbackUrl;
        $this->options['geoMatchLevel'] = $geoMatchLevel;
        $this->options['numberSelectionBehavior'] = $numberSelectionBehavior;
        $this->options['interceptCallbackUrl'] = $interceptCallbackUrl;
        $this->options['outOfSessionCallbackUrl'] = $outOfSessionCallbackUrl;
    }

    /**
     * A human readable description of this resource, up to 64 characters.
     *
     * @param string $uniqueName A human readable description of this resource.
     *
     * @return $this Fluent Builder
     */
    public function setUniqueName($uniqueName)
    {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * The default Time to Live for a Session, in seconds.
     *
     * @param integer $defaultTtl Default TTL for a Session, in seconds.
     *
     * @return $this Fluent Builder
     */
    public function setDefaultTtl($defaultTtl)
    {
        $this->options['defaultTtl'] = $defaultTtl;
        return $this;
    }

    /**
     * The URL Twilio will send callbacks to.
     *
     * @param string $callbackUrl URL Twilio will send callbacks to
     *
     * @return $this Fluent Builder
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->options['callbackUrl'] = $callbackUrl;
        return $this;
    }

    /**
     * Whether to find proxy numbers in the same areacode.
     *
     * @param string $geoMatchLevel Whether to find proxy numbers in the same
     *                              areacode.
     *
     * @return $this Fluent Builder
     */
    public function setGeoMatchLevel($geoMatchLevel)
    {
        $this->options['geoMatchLevel'] = $geoMatchLevel;
        return $this;
    }

    /**
     * What behavior to use when choosing a proxy number.
     *
     * @param string $numberSelectionBehavior What behavior to use when choosing a
     *                                        proxy number.
     *
     * @return $this Fluent Builder
     */
    public function setNumberSelectionBehavior($numberSelectionBehavior)
    {
        $this->options['numberSelectionBehavior'] = $numberSelectionBehavior;
        return $this;
    }

    /**
     * A URL for Twilio call before each Interaction. An error status code will prevent the interaction from continuing.
     *
     * @param string $interceptCallbackUrl A URL for Twilio call before each
     *                                     Interaction.
     *
     * @return $this Fluent Builder
     */
    public function setInterceptCallbackUrl($interceptCallbackUrl)
    {
        $this->options['interceptCallbackUrl'] = $interceptCallbackUrl;
        return $this;
    }

    /**
     * A URL for Twilio call when a new Interaction has no Session.
     *
     * @param string $outOfSessionCallbackUrl A URL for Twilio call when a new
     *                                        Interaction has no Session.
     *
     * @return $this Fluent Builder
     */
    public function setOutOfSessionCallbackUrl($outOfSessionCallbackUrl)
    {
        $this->options['outOfSessionCallbackUrl'] = $outOfSessionCallbackUrl;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Proxy.V1.UpdateServiceOptions '.implode(' ', $options).']';
    }
}