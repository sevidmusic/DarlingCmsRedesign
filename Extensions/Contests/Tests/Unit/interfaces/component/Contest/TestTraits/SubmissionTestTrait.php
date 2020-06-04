<?php

namespace Extensions\Contests\Tests\Unit\interfaces\component\Contest\TestTraits;

use Extensions\Contests\core\interfaces\component\Contest\Submission;

trait SubmissionTestTrait
{

    private $submission;

    protected function setSubmissionParentTestInstances(): void
    {
        $this->setOutputComponent($this->getSubmission());
        $this->setOutputComponentParentTestInstances();
    }

    public function getSubmission(): Submission
    {
        return $this->submission;
    }

    public function setSubmission(Submission $submission): void
    {
        $this->submission = $submission;
    }

    public function testSubmitterPropertyIsAssignedASubmitterImplementationInstancePostInstantitation(): void {
        $this->assertTrue(
            in_array(
                'Extensions\Contests\core\interfaces\component\Contest\Submitter',
                class_implements($this->getSubmission()->export()['submitter'])
            )
        );
    }

    public function testGetSubmitterReturnsSameSubmitterImplementationInstanceAssignedToSubmitterProperty(): void
    {
        $this->assertEquals(
            $this->getSubmission()->export()['submitter'],
            $this->getSubmission()->getSubmitter()
        );
    }
}
