<?php

namespace Orkestra\Transactor\Entity\Result;

use Orkestra\Common\Type\Enum;

/**
 * Result Type Enumeration
 *
 * Describes the different types of results
 */
class ResultStatus extends Enum
{
    /**
     * The transaction has not yet been transacted
     */
    const UNPROCESSED = 'Unprocessed';

    /**
     * The transaction was approved
     */
    const APPROVED = 'Approved';

    /**
     * The transaction was declined
     */
    const DECLINED = 'Declined';

    /**
     * An error occurred
     */
    const ERROR = 'Error';

    /**
     * The transaction is pending
     */
    const PENDING = 'Pending';

    /**
     * The transaction has been processed but is not yet completed
     */
    const PROCESSED = 'Processed';

    /**
     * The transaction has been cancelled
     */
    const CANCELLED = 'Cancelled';

    /**
     * The transaction is on hold
     */
    const HOLD = 'Hold';

    /**
     * The transaction has been charged back
     */
    const CHARGED_BACK = 'Charged-back';
}