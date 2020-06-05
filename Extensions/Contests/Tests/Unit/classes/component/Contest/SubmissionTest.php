<?php

namespace Extensions\Contests\Tests\Unit\classes\component\Contest;

use DarlingCms\classes\primary\Positionable;
use DarlingCms\classes\primary\Storable;
use DarlingCms\classes\primary\Switchable;
use Extensions\Contests\core\classes\component\Contest\Submission;
use Extensions\Contests\core\classes\component\Contest\Submitter;
use Extensions\Contests\Tests\Unit\abstractions\component\Contest\SubmissionTest as AbstractSubmissionTest;

class SubmissionTest extends AbstractSubmissionTest
{
    public function setUp(): void
    {
        $this->setSubmission(
            new Submission(
                new Storable(
                    'SubmissionName',
                    'SubmissionLocation',
                    'SubmissionContainer'
                ),
                new Switchable(),
                new Positionable(),
                new Submitter(
                    new Storable(
                        'SubmitterName',
                        'SubmitterLocation',
                        'SubmitterContainer'
                    ),
                    'mocksubmissiontest@example.com'
                ),
                '/var/www/html/devData/devImage.jpeg'
            )
        );
        $this->setSubmissionParentTestInstances();
    }
}
