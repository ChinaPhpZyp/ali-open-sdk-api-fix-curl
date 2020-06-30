<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PickOutboundNumbers
 *
 * @method string getCount()
 * @method string getInstanceId()
 * @method array getCandidateNumbers()
 * @method string getCalleeNumber()
 */
class PickOutboundNumbersRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'CCC',
            '2017-07-05',
            'PickOutboundNumbers'
        );
    }

    /**
     * @param string $count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->requestParameters['Count'] = $count;
        $this->queryParameters['Count'] = $count;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param array $candidateNumber
     *
     * @return $this
     */
	public function setCandidateNumbers(array $candidateNumber)
	{
	    $this->requestParameters['CandidateNumbers'] = $candidateNumber;
		foreach ($candidateNumber as $i => $iValue) {
			$this->queryParameters['CandidateNumber.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $calleeNumber
     *
     * @return $this
     */
    public function setCalleeNumber($calleeNumber)
    {
        $this->requestParameters['CalleeNumber'] = $calleeNumber;
        $this->queryParameters['CalleeNumber'] = $calleeNumber;

        return $this;
    }
}
