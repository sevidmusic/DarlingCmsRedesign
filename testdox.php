<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Test Documentation</title>
    <style>
        body {
            text-rendering: optimizeLegibility;
            font-variant-ligatures: common-ligatures;
            font-kerning: normal;
            margin-left: 2em;
        }

        body > ul > li {
            font-family: Source Serif Pro, PT Sans, Trebuchet MS, Helvetica, Arial;
            font-size: 2em;
        }

        h2 {
            font-family: Tahoma, Helvetica, Arial;
            font-size: 3em;
        }

        ul {
            list-style: none;
            margin-bottom: 1em;
        }
    </style>
</head>
<body>
<h2 id="Extensions\Contests\Tests\Unit\abstractions\component\Actions\CreateSubmissionTest">Create Submission
    (Extensions\Contests\Tests\Unit\abstractions\component\Actions\CreateSubmission)</h2>
<ul>
    <li style="color: #555753;">✓ Was undone returns true when called after undo</li>
    <li style="color: #555753;">✓ Decrease position does not increase position if state is false</li>
    <li style="color: #555753;">✓ Decrease position decreases position by one hundredth</li>
    <li style="color: #555753;">✓ Was done returns false when called before do</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Positionable instance is set on instantiation</li>
    <li style="color: #555753;">✓ Get path to html form throws runtime exception if path assigned to path to html form
        property is not a path to an existing file
    </li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get output returns empty string if state is false</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Was undone returns false when called before undo</li>
    <li style="color: #555753;">✓ Do does not store submission if bad email is supplied in post data</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Increase position does not increase position if state is false</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Do returns true</li>
    <li style="color: #555753;">✓ Path assigned to test instances path to html form property points to an existing
        file
    </li>
    <li style="color: #555753;">✓ Component crud property is assigned a component crud implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Get path to html form throws runtime exception if path assigned to path to html form
        property points to a directory
    </li>
    <li style="color: #555753;">✓ Was done returns true when called after get output</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Do creates and stores submission from expected post data whose data matches expected
        submission except for unique ids
    </li>
    <li style="color: #555753;">✓ Undo returns false when called before do</li>
    <li style="color: #555753;">✓ Undo returns true when called after do</li>
    <li style="color: #555753;">✓
        GetOutputReturnsContentsOfFileLocatedAtPathAssignedToPathToHtmlFormPropertyReplacingStringUNIQUE
        IDWithCreateSubmissionInstancesUniqueIdIfCreateSubmissionsUniqueIdDoesNotExistInCurrentRequestsPOSTData
    </li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get position returns greater value after call to increase position</li>
    <li style="color: #555753;">✓ Get output returns html for bad url error message and form if submission url in post
        is a bad url
    </li>
    <li style="color: #555753;">✓ Increase position increases position by one hundredth</li>
    <li style="color: #555753;">✓ Get output returns html for bad email error message and form if submitter email in
        post is a bad email
    </li>
    <li style="color: #555753;">✓ Was undone returns false when called before do</li>
    <li style="color: #555753;">✓ Get output creates and stores submission from expected post data whose data matches
        expected submission except for unique ids
    </li>
    <li style="color: #555753;">✓ Get current request returns request implementation instance that reflects current
        request
    </li>
    <li style="color: #555753;">✓ Do does not store submission if bad youtube url is supplied in post data</li>
    <li style="color: #555753;">✓ Path assigned to test instances path to html form property does not point to a
        directory
    </li>
    <li style="color: #555753;">✓ Was done returns true when called after do</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get output returns expected html for success if submission was created and stored on
        call to do
    </li>
    <li style="color: #555753;">✓ Get position returns lesser value after call to decrease position</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
</ul>
<h2 id="Extensions\Contests\Tests\Unit\abstractions\component\Contest\SubmissionTest">Submission
    (Extensions\Contests\Tests\Unit\abstractions\component\Contest\Submission)</h2>
<ul>
    <li style="color: #555753;">✓ Increase position increases position by one hundredth</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Positionable instance is set on instantiation</li>
    <li style="color: #555753;">✓ Decrease position decreases position by one hundredth</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Get url throws a runtime exception if url property is not assigned a properly
        formatted url
    </li>
    <li style="color: #555753;">✓ Get position returns lesser value after call to decrease position</li>
    <li style="color: #555753;">✓ Get output returns a non empty string</li>
    <li style="color: #555753;">✓ Register vote increases submission postion if vote was registered</li>
    <li style="color: #555753;">✓ Total votes returns count of voter emails array</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Register vote adds specified users email to voter emails propertys array indexed by
        current timestamp
    </li>
    <li style="color: #555753;">✓ Date time of submission is assigned a date time implementation instance post
        instantiation whose timestamp matches expected timestamp
    </li>
    <li style="color: #555753;">✓ Increase position does not increase position if state is false</li>
    <li style="color: #555753;">✓ Get position returns greater value after call to increase position</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Register vote does not increase submission postion if vote was not registered</li>
    <li style="color: #555753;">✓ Register vote does add specified users email to voter emails propertys array if user
        has not voted within last 24 hours
    </li>
    <li style="color: #555753;">✓ SUBMISSION CONTAINERConstantIsAssignedStringSUBMISSIONS</li>
    <li style="color: #555753;">✓ Register vote does not add specified users email to voter emails propertys array if
        user has voted within last 24 hours
    </li>
    <li style="color: #555753;">✓ Submitter property is assigned a submitter implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Decrease position does not increase position if state is false</li>
    <li style="color: #555753;">✓ Assign meta data assigns specified value to specified key in meta data propertys
        array
    </li>
    <li style="color: #555753;">✓ AssignedStorablesContainerIsEqualToSUBMISSION CONTAINERConstantPostInstantiation</li>
    <li style="color: #555753;">✓ Voter emails property is assigned an empty array post instantiation</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get submitter returns same submitter implementation instance assigned to submitter
        property
    </li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Meta data property is assigned an empty array post instantiation</li>
    <li style="color: #555753;">✓ Get output returns empty string if state is false</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
</ul>
<h2 id="Extensions\Contests\Tests\Unit\classes\component\Contest\SubmissionTest">Submission
    (Extensions\Contests\Tests\Unit\classes\component\Contest\Submission)</h2>
<ul>
    <li style="color: #555753;">✓ Assign meta data assigns specified value to specified key in meta data propertys
        array
    </li>
    <li style="color: #555753;">✓ Decrease position does not increase position if state is false</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Meta data property is assigned an empty array post instantiation</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get url throws a runtime exception if url property is not assigned a properly
        formatted url
    </li>
    <li style="color: #555753;">✓ Register vote increases submission postion if vote was registered</li>
    <li style="color: #555753;">✓ Get output returns a non empty string</li>
    <li style="color: #555753;">✓ SUBMISSION CONTAINERConstantIsAssignedStringSUBMISSIONS</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ AssignedStorablesContainerIsEqualToSUBMISSION CONTAINERConstantPostInstantiation</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get position returns lesser value after call to decrease position</li>
    <li style="color: #555753;">✓ Voter emails property is assigned an empty array post instantiation</li>
    <li style="color: #555753;">✓ Increase position does not increase position if state is false</li>
    <li style="color: #555753;">✓ Decrease position decreases position by one hundredth</li>
    <li style="color: #555753;">✓ Submitter property is assigned a submitter implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Get output returns empty string if state is false</li>
    <li style="color: #555753;">✓ Register vote does not increase submission postion if vote was not registered</li>
    <li style="color: #555753;">✓ Register vote adds specified users email to voter emails propertys array indexed by
        current timestamp
    </li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Register vote does not add specified users email to voter emails propertys array if
        user has voted within last 24 hours
    </li>
    <li style="color: #555753;">✓ Increase position increases position by one hundredth</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Register vote does add specified users email to voter emails propertys array if user
        has not voted within last 24 hours
    </li>
    <li style="color: #555753;">✓ Date time of submission is assigned a date time implementation instance post
        instantiation whose timestamp matches expected timestamp
    </li>
    <li style="color: #555753;">✓ Get position returns greater value after call to increase position</li>
    <li style="color: #555753;">✓ Total votes returns count of voter emails array</li>
    <li style="color: #555753;">✓ Get submitter returns same submitter implementation instance assigned to submitter
        property
    </li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Positionable instance is set on instantiation</li>
</ul>
<h2 id="Extensions\Contests\Tests\Unit\classes\component\Contest\UserTest">User
    (Extensions\Contests\Tests\Unit\classes\component\Contest\User)</h2>
<ul>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get email returns string that matches string assigned to email property</li>
    <li style="color: #555753;">✓ Get email throws runtime exception if email assigned to email property is not a valid
        email
    </li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Email property is assigned a valid email post instantiation</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
</ul>
<h2 id="Extensions\Contests\Tests\Unit\classes\component\Actions\CreateSubmissionTest">Create Submission
    (Extensions\Contests\Tests\Unit\classes\component\Actions\CreateSubmission)</h2>
<ul>
    <li style="color: #555753;">✓ Get output returns html for bad url error message and form if submission url in post
        is a bad url
    </li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Decrease position does not increase position if state is false</li>
    <li style="color: #555753;">✓ Do creates and stores submission from expected post data whose data matches expected
        submission except for unique ids
    </li>
    <li style="color: #555753;">✓ Get output returns html for bad email error message and form if submitter email in
        post is a bad email
    </li>
    <li style="color: #555753;">✓ Was undone returns true when called after undo</li>
    <li style="color: #555753;">✓ Was done returns true when called after get output</li>
    <li style="color: #555753;">✓ Get position returns lesser value after call to decrease position</li>
    <li style="color: #555753;">✓ Get path to html form throws runtime exception if path assigned to path to html form
        property points to a directory
    </li>
    <li style="color: #555753;">✓ Positionable instance is set on instantiation</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Component crud property is assigned a component crud implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Increase position does not increase position if state is false</li>
    <li style="color: #555753;">✓ Get output returns empty string if state is false</li>
    <li style="color: #555753;">✓ Get path to html form throws runtime exception if path assigned to path to html form
        property is not a path to an existing file
    </li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Do does not store submission if bad youtube url is supplied in post data</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Do does not store submission if bad email is supplied in post data</li>
    <li style="color: #555753;">✓ Was done returns true when called after do</li>
    <li style="color: #555753;">✓ Get current request returns request implementation instance that reflects current
        request
    </li>
    <li style="color: #555753;">✓ Was undone returns false when called before do</li>
    <li style="color: #555753;">✓ Increase position increases position by one hundredth</li>
    <li style="color: #555753;">✓ Was done returns false when called before do</li>
    <li style="color: #555753;">✓ Get position returns greater value after call to increase position</li>
    <li style="color: #555753;">✓ Do returns true</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Path assigned to test instances path to html form property does not point to a
        directory
    </li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Undo returns false when called before do</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Path assigned to test instances path to html form property points to an existing
        file
    </li>
    <li style="color: #555753;">✓
        GetOutputReturnsContentsOfFileLocatedAtPathAssignedToPathToHtmlFormPropertyReplacingStringUNIQUE
        IDWithCreateSubmissionInstancesUniqueIdIfCreateSubmissionsUniqueIdDoesNotExistInCurrentRequestsPOSTData
    </li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get output creates and stores submission from expected post data whose data matches
        expected submission except for unique ids
    </li>
    <li style="color: #555753;">✓ Decrease position decreases position by one hundredth</li>
    <li style="color: #555753;">✓ Undo returns true when called after do</li>
    <li style="color: #555753;">✓ Was undone returns false when called before undo</li>
    <li style="color: #555753;">✓ Get output returns expected html for success if submission was created and stored on
        call to do
    </li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
</ul>
<h2 id="Extensions\Contests\Tests\Unit\abstractions\component\Contest\UserTest">User
    (Extensions\Contests\Tests\Unit\abstractions\component\Contest\User)</h2>
<ul>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Email property is assigned a valid email post instantiation</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get email throws runtime exception if email assigned to email property is not a valid
        email
    </li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get email returns string that matches string assigned to email property</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
</ul>
<h2 id="UnitTests\classes\component\Template\UserInterface\StandardUITemplateTest">Standard UITemplate
    (UnitTests\classes\component\Template\UserInterface\StandardUITemplate)</h2>
<ul>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Add type increases position if corresponding index occupied</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get position returns lesser value after call to decrease position</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Add type adds specified components type at appropriate index</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get types returns array of assigned types</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Remove type removes type</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get position returns greater value after call to increase position</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Increase position increases position by one hundredth</li>
    <li style="color: #555753;">✓ Decrease position decreases position by one hundredth</li>
    <li style="color: #555753;">✓ Get types returns empty array if state is false</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
</ul>
<h2 id="UnitTests\classes\component\OutputComponentTest">Output Component
    (UnitTests\classes\component\OutputComponent)</h2>
<ul>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Positionable instance is set on instantiation</li>
    <li style="color: #555753;">✓ Get output returns empty string if state is false</li>
    <li style="color: #555753;">✓ Decrease position does not increase position if state is false</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Increase position does not increase position if state is false</li>
    <li style="color: #555753;">✓ Get position returns lesser value after call to decrease position</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Decrease position decreases position by one hundredth</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get position returns greater value after call to increase position</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Increase position increases position by one hundredth</li>
</ul>
<h2 id="UnitTests\abstractions\component\UserInterface\StandardUITest">Standard UI
    (UnitTests\abstractions\component\UserInterface\StandardUI)</h2>
<ul>
    <li style="color: #555753;">✓ Get output components assigned to responses returns array whose top level indexes are
        numeric strings
    </li>
    <li style="color: #555753;">✓ Decrease position decreases position by one hundredth</li>
    <li style="color: #555753;">✓ Get templates assigned to responses returns multi dimensional array of arrays of
        standard u i templates
    </li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get templates assigned to responses returns multi dimensional array of arrays</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get templates assigned to responses returns array of all standard u i templates
        assigned to all responses to current request
    </li>
    <li style="color: #555753;">✓ Positionable instance is set on instantiation</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get output components assigned to responses returns array of output components</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Router property is assigned a router implementation instance post instantiation</li>
    <li style="color: #555753;">✓ Get output returns collective output from output components organized by response
        position then template position then template o c type then output component position
    </li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get position returns lesser value after call to decrease position</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get templates assigned to responses returns array whose top level indexes are numeric
        strings
    </li>
    <li style="color: #555753;">✓ Get output components assigned to responses returns array of all output components
        assigned to all responses to current request
    </li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get output components assigned to responses returns array whose second level indexes
        are valid output component types
    </li>
    <li style="color: #555753;">✓ Get position returns greater value after call to increase position</li>
    <li style="color: #555753;">✓ Increase position does not increase position if state is false</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Increase position increases position by one hundredth</li>
    <li style="color: #555753;">✓ Get output returns empty string if state is false</li>
    <li style="color: #555753;">✓ Get output components assigned to responses returns array whose third level indexes
        are numeric strings
    </li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Get templates assigned to responses returns array whose second level indexes are
        numeric strings
    </li>
    <li style="color: #555753;">✓ Decrease position does not increase position if state is false</li>
</ul>
<h2 id="UnitTests\abstractions\component\Registry\Storage\StoredComponentRegistryTest">Stored Component Registry
    (UnitTests\abstractions\component\Registry\Storage\StoredComponentRegistry)</h2>
<ul>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Register component does not add components storable to registry propertys array if
        component is already registered
    </li>
    <li style="color: #555753;">✓ Accepted implementation property is assigned namespace of a defined interface post
        instantiation
    </li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Un register component removes specified storable from registry propertys array</li>
    <li style="color: #555753;">✓ Accepted implementation property is assigned namespace of a defined component
        implementation post instantiation
    </li>
    <li style="color: #555753;">✓ Get component crud returns same component crud implementation instance assigned to
        component crud property on instantiation
    </li>
    <li style="color: #555753;">✓ Register component returns true if component was registered</li>
    <li style="color: #555753;">✓ Get accepted implementation returns same namespace assigned to accepted implementation
        property on instantiation
    </li>
    <li style="color: #555753;">✓ Un register component returns true if specified storable was removed from registry
        propertys array
    </li>
    <li style="color: #555753;">✓ Un register component returns false if specified storable was not removed from
        registry propertys array
    </li>
    <li style="color: #555753;">✓ Component crud property is assigned an instance of a component crud implementation
        post instantiation
    </li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Purge registry removes all storables that reference components that no longer exist in
        storage from the registry propertys array
    </li>
    <li style="color: #555753;">✓ Get registered components reads all registered components from storage and returns
        them in an array
    </li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Registry property is set to an empty array post instantiation</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Register component returns false if component was not registered</li>
    <li style="color: #555753;">✓ Register component adds components storable to registry propertys array if component
        exists in storage and is not already registered and is an accepted implementation
    </li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Register component does not add components storable to registry propertys array if
        component does not exist in storage
    </li>
    <li style="color: #555753;">✓ Register component does not add components storable to registry propertys array if
        component is not an accepted implementation
    </li>
    <li style="color: #555753;">✓ Get registry returns array assigned to registry property</li>
    <li style="color: #555753;">✓ Empty registry assigns an empty array to the registry property</li>
</ul>
<h2 id="UnitTests\abstractions\component\Web\Routing\RouterTest">Router
    (UnitTests\abstractions\component\Web\Routing\Router)</h2>
<ul>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get request returns assigned request</li>
    <li style="color: #555753;">✓ Request is set post instantiation</li>
    <li style="color: #555753;">✓ Get responses returns array of responses that respond to assigned request</li>
    <li style="color: #555753;">✓ Get responses returns array of responses that are not corrupted</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get responses returns empty array if state is false</li>
    <li style="color: #555753;">✓ Get crud returns assigned crud</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get responses returns array of responses whose state is true</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Crud is set post instantiation</li>
</ul>
<h2 id="UnitTests\abstractions\component\Template\UserInterface\StandardUITemplateTest">Standard UITemplate
    (UnitTests\abstractions\component\Template\UserInterface\StandardUITemplate)</h2>
<ul>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get position returns lesser value after call to decrease position</li>
    <li style="color: #555753;">✓ Add type adds specified components type at appropriate index</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Decrease position decreases position by one hundredth</li>
    <li style="color: #555753;">✓ Get position returns greater value after call to increase position</li>
    <li style="color: #555753;">✓ Remove type removes type</li>
    <li style="color: #555753;">✓ Increase position increases position by one hundredth</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Add type increases position if corresponding index occupied</li>
    <li style="color: #555753;">✓ Get types returns array of assigned types</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get types returns empty array if state is false</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
</ul>
<h2 id="UnitTests\classes\component\Driver\Storage\FileSystem\JsonTest">Json
    (UnitTests\classes\component\Driver\Storage\FileSystem\Json)</h2>
<ul>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Delete removes specified component</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get storage path returns expected storage path</li>
    <li style="color: #555753;">✓ Read all returns array of all components stored in specified container at specified
        location
    </li>
    <li style="color: #555753;">✓ Get storage directory path returns expected storage directory path</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Storage directory exists post instantiation</li>
    <li style="color: #555753;">✓ Delete returns false and does not delete if state is false</li>
    <li style="color: #555753;">✓ Delete removes components storable from storage index</li>
    <li style="color: #555753;">✓ Read returns mock component if state is false</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Write saves component data to json file named using component id under sub path
        defined using component location and container
    </li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Read returns component specified by storable</li>
    <li style="color: #555753;">✓ Write adds components storable to storage index</li>
    <li style="color: #555753;">✓ Storage index exists post instantiation</li>
    <li style="color: #555753;">✓ Write does not write and returns false if state is false</li>
</ul>
<h2 id="UnitTests\abstractions\component\Crud\ComponentCrudTest">Component Crud
    (UnitTests\abstractions\component\Crud\ComponentCrud)</h2>
<ul>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Delete removes specified component</li>
    <li style="color: #555753;">✓ Read all returns array of components stored in specified container at specified
        location
    </li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Delete returns false and does not delete component if state is false</li>
    <li style="color: #555753;">✓ Create returns true</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Read returns specified component</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Storage driver is set and is a storage driver post instantiation</li>
    <li style="color: #555753;">✓ Read returns mock component instance if state is false</li>
    <li style="color: #555753;">✓ Storage driver is on upon instantiation</li>
    <li style="color: #555753;">✓ Update returns false and does not update component if state is false</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Update updates specified component</li>
    <li style="color: #555753;">✓ Create returns false and does not create component if state is false</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Read all returns an empty array if state is false</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
</ul>
<h2 id="UnitTests\abstractions\primary\StorableTest">Storable (UnitTests\abstractions\primary\Storable)</h2>
<ul>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
</ul>
<h2 id="UnitTests\abstractions\component\Web\Routing\RequestTest">Request
    (UnitTests\abstractions\component\Web\Routing\Request)</h2>
<ul>
    <li style="color: #555753;">✓ Get get returns empty array if state is false</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get post returns post array</li>
    <li style="color: #555753;">✓ Get post returns empty array if state is false</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ GetUrlReturns DISABLED IfStateIsFalse</li>
    <li style="color: #555753;">✓ Get get returns get array</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Can get url</li>
</ul>
<h2 id="UnitTests\abstractions\component\OutputComponentTest">Output Component
    (UnitTests\abstractions\component\OutputComponent)</h2>
<ul>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Increase position does not increase position if state is false</li>
    <li style="color: #555753;">✓ Increase position increases position by one hundredth</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get position returns greater value after call to increase position</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Decrease position does not increase position if state is false</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Positionable instance is set on instantiation</li>
    <li style="color: #555753;">✓ Decrease position decreases position by one hundredth</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get position returns lesser value after call to decrease position</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get output returns empty string if state is false</li>
    <li style="color: #555753;">✓ Can switch state</li>
</ul>
<h2 id="UnitTests\classes\component\Factory\OutputComponentFactoryTest">Output Component Factory
    (UnitTests\classes\component\Factory\OutputComponentFactory)</h2>
<ul>
    <li style="color: #555753;">✓ Get primary factory returns primary factory instance assigned to primary factory
        property
    </li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Build output component stores the output component implementation instance it builds
    </li>
    <li style="color: #555753;">✓ Get app returns app assigned to app property</li>
    <li style="color: #555753;">✓ Build output component registers the output component implementation instance it
        builds
    </li>
    <li style="color: #555753;">✓ Get app domain returns request returned by assigned apps get app domain method</li>
    <li style="color: #555753;">✓ Get component crud returns component crud instance assigned to switchable property
    </li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Build output component returns output component whose container matches supplied
        container
    </li>
    <li style="color: #555753;">✓ Switchable property is assigned component crud implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Factory container matches factory c o n t a i n e r constant</li>
    <li style="color: #555753;">✓ Stored component registry property is assigned stored component registry
        implementation instance post instantiation
    </li>
    <li style="color: #555753;">✓ Build output component returns output component whose name matches supplied name</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Primary factory property is assigned primary factory implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Build output component returns an output component implementation instance</li>
    <li style="color: #555753;">✓ Get stored component registry returns stored component registry instance assigned to
        stored component registry property
    </li>
    <li style="color: #555753;">✓ Build output component returns output component whose position matches supplied
        position
    </li>
    <li style="color: #555753;">✓ Store and register returns true if component was registered</li>
    <li style="color: #555753;">✓ Store and register returns false if component was not stored</li>
    <li style="color: #555753;">✓ Factory location matches app location</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Store and register returns false if component was not registered</li>
    <li style="color: #555753;">✓ Store and register returns true if component was stored</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Build output component returns output component whose output matches supplied output
    </li>
    <li style="color: #555753;">✓ App property is assigned app implementation instance post instantiation</li>
</ul>
<h2 id="UnitTests\classes\component\Web\AppTest">App (UnitTests\classes\component\Web\App)</h2>
<ul>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get requested app throws runtime exception on instance call if app is not installed
    </li>
    <li style="color: #555753;">✓ GetContainerReturnsValueOfAPP CONTAINERConstant</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get requested app throws runtime exception on static call if an app cant be found in
        storage whose name matches the value returned by passing supplied request to app derive name location from
        request method
    </li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓
        GetRequestedAppReturnsAppOnStaticCallWhoseNameAndLocationMatchTheValueReturnedByPassingSuppliedRequestToAppDeriveNameLocationFromRequestMethodAndWhoseContainerMatchesTheValueOfTheAppAPP
        CONTAINERConstant
    </li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Derive app name location returns alpha numeric string form of value returned by
        parsing specified requests url to get host or string d e f a u l t if url host cant be determined
    </li>
    <li style="color: #555753;">✓ Get requested app throws runtime exception on static call if app is not installed</li>
    <li style="color: #555753;">✓ Name and location were set using derive app name location from request method</li>
    <li style="color: #555753;">✓
        GetRequestedAppReturnsAppOnInstanceCallWhoseNameAndLocationMatchTheValueReturnedByPassingSuppliedRequestToAppDeriveNameLocationFromRequestMethodAndWhoseContainerMatchesTheValueOfTheAppAPP
        CONTAINERConstant
    </li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ APP CONTAINERConstantIsSetToStringAPP</li>
    <li style="color: #555753;">✓ Get requested app throws runtime exception on instance call if an app cant be found in
        storage whose name matches the value returned by passing supplied request to app derive name location from
        request method
    </li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get requested app throws runtime exception on instance call if app state is false</li>
    <li style="color: #555753;">✓ Get requested app throws runtime exception on static call if app data is corrupted
    </li>
    <li style="color: #555753;">✓ Get requested app throws runtime exception on instance call if app data is corrupted
    </li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get requested app throws runtime exception on static call if app state is false</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get app domain returns request supplied to constructor on instantiation</li>
</ul>
<h2 id="UnitTests\classes\component\Web\Routing\RouterTest">Router (UnitTests\classes\component\Web\Routing\Router)</h2>
<ul>
    <li style="color: #555753;">✓ Get responses returns empty array if state is false</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get crud returns assigned crud</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get responses returns array of responses whose state is true</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Request is set post instantiation</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Get request returns assigned request</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get responses returns array of responses that are not corrupted</li>
    <li style="color: #555753;">✓ Crud is set post instantiation</li>
    <li style="color: #555753;">✓ Get responses returns array of responses that respond to assigned request</li>
    <li style="color: #555753;">✓ Can switch state</li>
</ul>
<h2 id="UnitTests\abstractions\component\Factory\App\AppComponentsFactoryTest">App Components Factory
    (UnitTests\abstractions\component\Factory\App\AppComponentsFactory)</h2>
<ul>
    <li style="color: #555753;">✓ Build request stores the request implementation instance it builds</li>
    <li style="color: #555753;">✓ If request add storage info ignores components that are not requests</li>
    <li style="color: #555753;">✓ Factory container matches factory c o n t a i n e r constant</li>
    <li style="color: #555753;">✓ Stored component registry property is assigned stored component registry
        implementation instance post instantiation
    </li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Build global response registers the response implementation instance it builds</li>
    <li style="color: #555753;">✓ BuildLogSavesBuildLogToExpectedLocationAndProducesExpectedOutputIfSAVE
        LOGFlagIsSupplied
    </li>
    <li style="color: #555753;">✓ Build request returns request whose container matches supplied container</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Build domain returns request whose location matches expected app name location</li>
    <li style="color: #555753;">✓ If output component add storage info adds output components storable to response</li>
    <li style="color: #555753;">✓ BuildGlobalResponseReturnsResponseWhoseContainerMatchesGlobalResponseRESPONSE
        CONTAINERConstant
    </li>
    <li style="color: #555753;">✓ Store and register returns true if component was stored</li>
    <li style="color: #555753;">✓ Store and register returns false if component was not stored</li>
    <li style="color: #555753;">✓ Build global response returns response whose name matches supplied name</li>
    <li style="color: #555753;">✓ Get component crud returns component crud instance assigned to switchable property
    </li>
    <li style="color: #555753;">✓ Get primary factory returns primary factory instance assigned to primary factory
        property
    </li>
    <li style="color: #555753;">✓ App components factory implements standard u i template factory interface</li>
    <li style="color: #555753;">✓ Get app returns app assigned to app property</li>
    <li style="color: #555753;">✓ Build constructor args returns an array assigned a stored component registry
        implementation instance at index 2
    </li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Primary factory property is assigned primary factory implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Build standard u i template registers the standard u i template implementation
        instance it builds
    </li>
    <li style="color: #555753;">✓ Build domain returns request whose name matches expected app name location</li>
    <li style="color: #555753;">✓ Build global response stores the response implementation instance it builds</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Build response returns response whose name matches supplied name</li>
    <li style="color: #555753;">✓ Build request returns a request implementation instance</li>
    <li style="color: #555753;">✓ Get stored component registry returns a stored component registry whose accepted
        implementation is the component interface
    </li>
    <li style="color: #555753;">✓ BuildResponseReturnsResponseWhoseContainerMatchesResponseRESPONSE CONTAINERConstant
    </li>
    <li style="color: #555753;">✓ App property is assigned app implementation instance post instantiation</li>
    <li style="color: #555753;">✓ Build request returns request whose url matches supplied url</li>
    <li style="color: #555753;">✓ Build standard u i template returns standard u i template whose position matches
        supplied position
    </li>
    <li style="color: #555753;">✓ Build output component registers the output component implementation instance it
        builds
    </li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ App assigned to primary factory is stored and registered on instantiation</li>
    <li style="color: #555753;">✓ Build constructor args returns an array assigned a primary factory implementation
        instance at index 0
    </li>
    <li style="color: #555753;">✓ Build response stores the response implementation instance it builds</li>
    <li style="color: #555753;">✓ App components factory implements request factory interface</li>
    <li style="color: #555753;">✓ Build output component returns an output component implementation instance</li>
    <li style="color: #555753;">✓ Build response returns response whose assigned standard u i template count matches
        expected standard u i template count
    </li>
    <li style="color: #555753;">✓ Build domain returns request whose url matches supplied url</li>
    <li style="color: #555753;">✓ Build standard u i template returns standard u i template whose assigned types reflect
        supplied types
    </li>
    <li style="color: #555753;">✓ Build domain returns request whose container matches expected app name location</li>
    <li style="color: #555753;">✓ Build request returns request whose name matches supplied name</li>
    <li style="color: #555753;">✓ Get stored component registry returns stored component registry instance assigned to
        stored component registry property
    </li>
    <li style="color: #555753;">✓ Build constructor args returns an array of objects</li>
    <li style="color: #555753;">✓ Switchable property is assigned component crud implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Build constructor args returns an array with exactly three values</li>
    <li style="color: #555753;">✓ If request add storage info adds requests storable to response</li>
    <li style="color: #555753;">✓ Build global response returns a global response implementation instance</li>
    <li style="color: #555753;">✓ App components factory implements response factory interface</li>
    <li style="color: #555753;">✓ Build standard u i template returns an standard u i template implementation instance
    </li>
    <li style="color: #555753;">✓ Build response returns response whose assigned output component count matches expected
        output component count
    </li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Build constructor args returns an array assigned a component crud implementation
        instance at index 1
    </li>
    <li style="color: #555753;">✓ Build global response returns response whose assigned output component count matches
        expected output component count
    </li>
    <li style="color: #555753;">✓ Build output component stores the output component implementation instance it builds
    </li>
    <li style="color: #555753;">✓ If standard u i template add storage info ignores components that are not standard u i
        templates
    </li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Build standard u i template returns standard u i template whose container matches
        supplied container
    </li>
    <li style="color: #555753;">✓ Build standard u i template returns standard u i template whose name matches supplied
        name
    </li>
    <li style="color: #555753;">✓ Build response registers the response implementation instance it builds</li>
    <li style="color: #555753;">✓ Build output component returns output component whose output matches supplied output
    </li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Build request registers the request implementation instance it builds</li>
    <li style="color: #555753;">✓ Build response returns response whose assigned request count matches expected request
        count
    </li>
    <li style="color: #555753;">✓ Build log returns expected string</li>
    <li style="color: #555753;">✓ Store and register returns true if component was registered</li>
    <li style="color: #555753;">✓ App components factory implements stored component factory interface</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Build global response returns response whose assigned standard u i template count
        matches expected standard u i template count
    </li>
    <li style="color: #555753;">✓ If standard u i template add storage info adds standard u i templates storable to
        response
    </li>
    <li style="color: #555753;">✓ Build output component returns output component whose name matches supplied name</li>
    <li style="color: #555753;">✓ Build output component returns output component whose position matches supplied
        position
    </li>
    <li style="color: #555753;">✓ Build standard u i template stores the standard u i template implementation instance
        it builds
    </li>
    <li style="color: #555753;">✓ App components factory implements output component factory interface</li>
    <li style="color: #555753;">✓ Build response returns response whose position matches supplied position</li>
    <li style="color: #555753;">✓ Get app domain returns request returned by assigned apps get app domain method</li>
    <li style="color: #555753;">✓ Store and register returns false if component was not registered</li>
    <li style="color: #555753;">✓ Factory location matches app location</li>
    <li style="color: #555753;">✓ BuildLogEchosBuildLogIfSHOW LOGFlagIsSupplied</li>
    <li style="color: #555753;">✓ Build output component returns output component whose container matches supplied
        container
    </li>
    <li style="color: #555753;">✓ If output component add storage info ignores components that are not output
        components
    </li>
    <li style="color: #555753;">✓ Build global response returns response whose position matches supplied position</li>
    <li style="color: #555753;">✓ Build response returns a response implementation instance</li>
</ul>
<h2 id="UnitTests\abstractions\component\Web\Routing\GlobalResponseTest">Global Response
    (UnitTests\abstractions\component\Web\Routing\GlobalResponse)</h2>
<ul>
    <li style="color: #555753;">✓ Get output component storage info returns array of storable instances for assigned
        output components
    </li>
    <li style="color: #555753;">✓ GetContainerReturnsValueOfRESPONSE CONTAINERConstant</li>
    <li style="color: #555753;">✓ Remove template storage info removes specified templates storable instance</li>
    <li style="color: #555753;">✓ Get template storage info returns array of storable instances for assigned templates
    </li>
    <li style="color: #555753;">✓ Get output component storage info returns empty array if state is false</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Add template storage info adds specified template storable instance</li>
    <li style="color: #555753;">✓ Remove request storage info removes specified requests storable instance</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Add output component storage info adds specified output components storable instance
    </li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get request storage info returns array of storable instances for assigned requests
    </li>
    <li style="color: #555753;">✓ Positionable property is assigned a positionable implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Responds to request returns false for unknown request</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Add o request storage info adds specified o requests storable instance</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ RESPONSE CONTAINERConstantIsAssignedStringRESPONSES</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Remove output component storage info removes specified output components storable
        instance
    </li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get template storage info returns empty array if state is false</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Responds to request returns true for assigned request</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
</ul>
<h2 id="UnitTests\abstractions\component\Factory\StoredComponentFactoryTest">Stored Component Factory
    (UnitTests\abstractions\component\Factory\StoredComponentFactory)</h2>
<ul>
    <li style="color: #555753;">✓ Store and register returns false if component was not registered</li>
    <li style="color: #555753;">✓ App property is assigned app implementation instance post instantiation</li>
    <li style="color: #555753;">✓ Store and register returns true if component was stored</li>
    <li style="color: #555753;">✓ Get stored component registry returns stored component registry instance assigned to
        stored component registry property
    </li>
    <li style="color: #555753;">✓ Factory container matches factory c o n t a i n e r constant</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Factory location matches app location</li>
    <li style="color: #555753;">✓ Get app domain returns request returned by assigned apps get app domain method</li>
    <li style="color: #555753;">✓ Store and register returns true if component was registered</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Primary factory property is assigned primary factory implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Switchable property is assigned component crud implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Get component crud returns component crud instance assigned to switchable property
    </li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get primary factory returns primary factory instance assigned to primary factory
        property
    </li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Stored component registry property is assigned stored component registry
        implementation instance post instantiation
    </li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Store and register returns false if component was not stored</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get app returns app assigned to app property</li>
</ul>
<h2 id="UnitTests\classes\component\Factory\App\AppComponentsFactoryTest">App Components Factory
    (UnitTests\classes\component\Factory\App\AppComponentsFactory)</h2>
<ul>
    <li style="color: #555753;">✓ Build domain returns request whose container matches expected app name location</li>
    <li style="color: #555753;">✓ Build standard u i template returns an standard u i template implementation instance
    </li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Build global response returns response whose assigned output component count matches
        expected output component count
    </li>
    <li style="color: #555753;">✓ Build response returns a response implementation instance</li>
    <li style="color: #555753;">✓ Build standard u i template returns standard u i template whose container matches
        supplied container
    </li>
    <li style="color: #555753;">✓ If output component add storage info adds output components storable to response</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Build output component returns an output component implementation instance</li>
    <li style="color: #555753;">✓ Build constructor args returns an array assigned a component crud implementation
        instance at index 1
    </li>
    <li style="color: #555753;">✓ Build request returns request whose name matches supplied name</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Build global response returns response whose position matches supplied position</li>
    <li style="color: #555753;">✓ Build domain returns request whose location matches expected app name location</li>
    <li style="color: #555753;">✓ Get app domain returns request returned by assigned apps get app domain method</li>
    <li style="color: #555753;">✓ Build global response returns response whose name matches supplied name</li>
    <li style="color: #555753;">✓ Build output component returns output component whose position matches supplied
        position
    </li>
    <li style="color: #555753;">✓ Build request stores the request implementation instance it builds</li>
    <li style="color: #555753;">✓ App components factory implements request factory interface</li>
    <li style="color: #555753;">✓ Build standard u i template returns standard u i template whose position matches
        supplied position
    </li>
    <li style="color: #555753;">✓ Build global response returns response whose assigned standard u i template count
        matches expected standard u i template count
    </li>
    <li style="color: #555753;">✓ Build log returns expected string</li>
    <li style="color: #555753;">✓ App components factory implements stored component factory interface</li>
    <li style="color: #555753;">✓ Build response returns response whose assigned output component count matches expected
        output component count
    </li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Factory location matches app location</li>
    <li style="color: #555753;">✓ Stored component registry property is assigned stored component registry
        implementation instance post instantiation
    </li>
    <li style="color: #555753;">✓ Build standard u i template returns standard u i template whose assigned types reflect
        supplied types
    </li>
    <li style="color: #555753;">✓ App components factory implements output component factory interface</li>
    <li style="color: #555753;">✓ Get stored component registry returns a stored component registry whose accepted
        implementation is the component interface
    </li>
    <li style="color: #555753;">✓ If output component add storage info ignores components that are not output
        components
    </li>
    <li style="color: #555753;">✓ Build constructor args returns an array of objects</li>
    <li style="color: #555753;">✓ Store and register returns true if component was stored</li>
    <li style="color: #555753;">✓ App assigned to primary factory is stored and registered on instantiation</li>
    <li style="color: #555753;">✓ Primary factory property is assigned primary factory implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Build global response registers the response implementation instance it builds</li>
    <li style="color: #555753;">✓ Store and register returns false if component was not stored</li>
    <li style="color: #555753;">✓ Build output component returns output component whose output matches supplied output
    </li>
    <li style="color: #555753;">✓ BuildLogEchosBuildLogIfSHOW LOGFlagIsSupplied</li>
    <li style="color: #555753;">✓ App components factory implements response factory interface</li>
    <li style="color: #555753;">✓ Build response returns response whose position matches supplied position</li>
    <li style="color: #555753;">✓ Switchable property is assigned component crud implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Build request returns request whose url matches supplied url</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ BuildGlobalResponseReturnsResponseWhoseContainerMatchesGlobalResponseRESPONSE
        CONTAINERConstant
    </li>
    <li style="color: #555753;">✓ BuildResponseReturnsResponseWhoseContainerMatchesResponseRESPONSE CONTAINERConstant
    </li>
    <li style="color: #555753;">✓ App components factory implements standard u i template factory interface</li>
    <li style="color: #555753;">✓ Factory container matches factory c o n t a i n e r constant</li>
    <li style="color: #555753;">✓ Build global response returns a global response implementation instance</li>
    <li style="color: #555753;">✓ Build constructor args returns an array with exactly three values</li>
    <li style="color: #555753;">✓ Get primary factory returns primary factory instance assigned to primary factory
        property
    </li>
    <li style="color: #555753;">✓ Get component crud returns component crud instance assigned to switchable property
    </li>
    <li style="color: #555753;">✓ Build response stores the response implementation instance it builds</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Build domain returns request whose url matches supplied url</li>
    <li style="color: #555753;">✓ Get app returns app assigned to app property</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Build output component registers the output component implementation instance it
        builds
    </li>
    <li style="color: #555753;">✓ Build response returns response whose assigned request count matches expected request
        count
    </li>
    <li style="color: #555753;">✓ Build output component returns output component whose name matches supplied name</li>
    <li style="color: #555753;">✓ Build output component stores the output component implementation instance it builds
    </li>
    <li style="color: #555753;">✓ Build request returns request whose container matches supplied container</li>
    <li style="color: #555753;">✓ Build domain returns request whose name matches expected app name location</li>
    <li style="color: #555753;">✓ BuildLogSavesBuildLogToExpectedLocationAndProducesExpectedOutputIfSAVE
        LOGFlagIsSupplied
    </li>
    <li style="color: #555753;">✓ Store and register returns false if component was not registered</li>
    <li style="color: #555753;">✓ Build output component returns output component whose container matches supplied
        container
    </li>
    <li style="color: #555753;">✓ Build constructor args returns an array assigned a primary factory implementation
        instance at index 0
    </li>
    <li style="color: #555753;">✓ Build response returns response whose name matches supplied name</li>
    <li style="color: #555753;">✓ Build response registers the response implementation instance it builds</li>
    <li style="color: #555753;">✓ Build constructor args returns an array assigned a stored component registry
        implementation instance at index 2
    </li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Build request registers the request implementation instance it builds</li>
    <li style="color: #555753;">✓ If standard u i template add storage info adds standard u i templates storable to
        response
    </li>
    <li style="color: #555753;">✓ If request add storage info ignores components that are not requests</li>
    <li style="color: #555753;">✓ Build global response stores the response implementation instance it builds</li>
    <li style="color: #555753;">✓ Build standard u i template returns standard u i template whose name matches supplied
        name
    </li>
    <li style="color: #555753;">✓ Build standard u i template registers the standard u i template implementation
        instance it builds
    </li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ App property is assigned app implementation instance post instantiation</li>
    <li style="color: #555753;">✓ Build response returns response whose assigned standard u i template count matches
        expected standard u i template count
    </li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get stored component registry returns stored component registry instance assigned to
        stored component registry property
    </li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Build standard u i template stores the standard u i template implementation instance
        it builds
    </li>
    <li style="color: #555753;">✓ Store and register returns true if component was registered</li>
    <li style="color: #555753;">✓ Build request returns a request implementation instance</li>
    <li style="color: #555753;">✓ If request add storage info adds requests storable to response</li>
    <li style="color: #555753;">✓ If standard u i template add storage info ignores components that are not standard u i
        templates
    </li>
</ul>
<h2 id="UnitTests\abstractions\component\ActionTest">Action (UnitTests\abstractions\component\Action)</h2>
<ul>
    <li style="color: #555753;">✓ Was done returns true when called after get output</li>
    <li style="color: #555753;">✓ Was undone returns true when called after undo</li>
    <li style="color: #555753;">✓ Was undone returns false when called before do</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Decrease position does not increase position if state is false</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Do returns true</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get position returns greater value after call to increase position</li>
    <li style="color: #555753;">✓ Undo returns false when called before do</li>
    <li style="color: #555753;">✓ Get output returns empty string if state is false</li>
    <li style="color: #555753;">✓ Was done returns false when called before do</li>
    <li style="color: #555753;">✓ Positionable instance is set on instantiation</li>
    <li style="color: #555753;">✓ Increase position increases position by one hundredth</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Decrease position decreases position by one hundredth</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get current request returns request implementation instance that reflects current
        request
    </li>
    <li style="color: #555753;">✓ Increase position does not increase position if state is false</li>
    <li style="color: #555753;">✓ Undo returns true when called after do</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get position returns lesser value after call to decrease position</li>
    <li style="color: #555753;">✓ Was undone returns false when called before undo</li>
    <li style="color: #555753;">✓ Was done returns true when called after do</li>
</ul>
<h2 id="UnitTests\abstractions\component\Factory\RequestFactoryTest">Request Factory
    (UnitTests\abstractions\component\Factory\RequestFactory)</h2>
<ul>
    <li style="color: #555753;">✓ Stored component registry property is assigned stored component registry
        implementation instance post instantiation
    </li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Factory location matches app location</li>
    <li style="color: #555753;">✓ Get component crud returns component crud instance assigned to switchable property
    </li>
    <li style="color: #555753;">✓ App property is assigned app implementation instance post instantiation</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Build request returns request whose container matches supplied container</li>
    <li style="color: #555753;">✓ Factory container matches factory c o n t a i n e r constant</li>
    <li style="color: #555753;">✓ Store and register returns false if component was not stored</li>
    <li style="color: #555753;">✓ Store and register returns true if component was registered</li>
    <li style="color: #555753;">✓ Build request returns a request implementation instance</li>
    <li style="color: #555753;">✓ Get app returns app assigned to app property</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Build request returns request whose name matches supplied name</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Store and register returns true if component was stored</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Switchable property is assigned component crud implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Store and register returns false if component was not registered</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Build request registers the request implementation instance it builds</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get primary factory returns primary factory instance assigned to primary factory
        property
    </li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get stored component registry returns stored component registry instance assigned to
        stored component registry property
    </li>
    <li style="color: #555753;">✓ Get app domain returns request returned by assigned apps get app domain method</li>
    <li style="color: #555753;">✓ Build request stores the request implementation instance it builds</li>
    <li style="color: #555753;">✓ Build request returns request whose url matches supplied url</li>
    <li style="color: #555753;">✓ Primary factory property is assigned primary factory implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
</ul>
<h2 id="UnitTests\classes\utility\ReflectionUtilityTest">Reflection Utility
    (UnitTests\classes\utility\ReflectionUtility)</h2>
<ul>
    <li style="color: #555753;">✓ Get class method parameter types returns array whose values are specified class
        methods expected parameter types
    </li>
    <li style="color: #555753;">✓ Get class method parameter names returns array whose values are specified class
        methods parameter names
    </li>
    <li style="color: #555753;">✓ Generate mock class method arguments returns array whose values types are methods
        expected argument types
    </li>
    <li style="color: #555753;">✓ Get class property types returns array whose values are specified classes expected
        property types
    </li>
    <li style="color: #555753;">✓ Get class instance returns instance of specified class</li>
    <li style="color: #555753;">✓ Get class reflection returns reflection of specified class</li>
    <li style="color: #555753;">✓ Get class property names returns array whose values are specified classes expected
        property names
    </li>
    <li style="color: #555753;">✓ Get class property values returns instances property values</li>
</ul>
<h2 id="UnitTests\classes\component\ComponentTest">Component (UnitTests\classes\component\Component)</h2>
<ul>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
</ul>
<h2 id="UnitTests\abstractions\component\SwitchableComponentTest">Switchable Component
    (UnitTests\abstractions\component\SwitchableComponent)</h2>
<ul>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
</ul>
<h2 id="UnitTests\classes\component\Web\Routing\GlobalResponseTest">Global Response
    (UnitTests\classes\component\Web\Routing\GlobalResponse)</h2>
<ul>
    <li style="color: #555753;">✓ Add output component storage info adds specified output components storable instance
    </li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Remove output component storage info removes specified output components storable
        instance
    </li>
    <li style="color: #555753;">✓ Add template storage info adds specified template storable instance</li>
    <li style="color: #555753;">✓ Remove request storage info removes specified requests storable instance</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Responds to request returns false for unknown request</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ GetContainerReturnsValueOfRESPONSE CONTAINERConstant</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Get request storage info returns array of storable instances for assigned requests
    </li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get template storage info returns array of storable instances for assigned templates
    </li>
    <li style="color: #555753;">✓ Get template storage info returns empty array if state is false</li>
    <li style="color: #555753;">✓ Responds to request returns true for assigned request</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get output component storage info returns array of storable instances for assigned
        output components
    </li>
    <li style="color: #555753;">✓ Remove template storage info removes specified templates storable instance</li>
    <li style="color: #555753;">✓ RESPONSE CONTAINERConstantIsAssignedStringRESPONSES</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Positionable property is assigned a positionable implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Get output component storage info returns empty array if state is false</li>
    <li style="color: #555753;">✓ Add o request storage info adds specified o requests storable instance</li>
</ul>
<h2 id="UnitTests\classes\primary\PositionableTest">Positionable (UnitTests\classes\primary\Positionable)</h2>
<ul>
    <li style="color: #555753;">✓ Get position returns lesser value after call to decrease position</li>
    <li style="color: #555753;">✓ Get position returns greater value after call to increase position</li>
    <li style="color: #555753;">✓ Increase position increases position by one hundredth</li>
    <li style="color: #555753;">✓ Decrease position decreases position by one hundredth</li>
</ul>
<h2 id="UnitTests\classes\component\Factory\FactoryTest">Factory (UnitTests\classes\component\Factory\Factory)</h2>
<ul>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get app domain returns request returned by assigned apps get app domain method</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Factory container matches factory c o n t a i n e r constant</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ App property is assigned app implementation instance post instantiation</li>
    <li style="color: #555753;">✓ Factory location matches app location</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get app returns app assigned to app property</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
</ul>
<h2 id="UnitTests\classes\component\Driver\Storage\StandardTest">Standard
    (UnitTests\classes\component\Driver\Storage\Standard)</h2>
<ul>
    <li style="color: #555753;">✓ Delete returns false and does not delete if state is false</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Read returns component specified by storable</li>
    <li style="color: #555753;">✓ Delete removes specified component</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Write does not write and returns false if state is false</li>
    <li style="color: #555753;">✓ Get storage directory path returns expected storage directory path</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Write adds components storable to storage index</li>
    <li style="color: #555753;">✓ Get storage path returns expected storage path</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Storage index exists post instantiation</li>
    <li style="color: #555753;">✓ Storage directory exists post instantiation</li>
    <li style="color: #555753;">✓ Read returns mock component if state is false</li>
    <li style="color: #555753;">✓ Delete removes components storable from storage index</li>
    <li style="color: #555753;">✓ Write saves component data to json file named using component id under sub path
        defined using component location and container
    </li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Read all returns array of all components stored in specified container at specified
        location
    </li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
</ul>
<h2 id="UnitTests\abstractions\primary\SwitchableTest">Switchable (UnitTests\abstractions\primary\Switchable)</h2>
<ul>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
</ul>
<h2 id="UnitTests\abstractions\component\Factory\BaseComponentFactoryTest">Base Component Factory
    (UnitTests\abstractions\component\Factory\BaseComponentFactory)</h2>
<ul>
    <li style="color: #555753;">✓ Build classifiable returns a classifiable implementation instance</li>
    <li style="color: #555753;">✓ Build action returns action implementation instance</li>
    <li style="color: #555753;">✓ Build storable returns storable implementation instance whose assigned container
        matches specified container
    </li>
    <li style="color: #555753;">✓ Build component returns component implementation instance</li>
    <li style="color: #555753;">✓ Build switchable component returns switchable component implementation instance</li>
    <li style="color: #555753;">✓ Build identifiable returns a identifiable implementation instance</li>
    <li style="color: #555753;">✓ Build action returns action whose name and container match specified name and
        container and whose location matches app location and whose position matches specified position
    </li>
    <li style="color: #555753;">✓ Build switchable returns a switchable implementation instance</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Build positionable returns positionable implementation instance whose assigned
        position matches specified position
    </li>
    <li style="color: #555753;">✓ Build output component returns output component implementation instance</li>
    <li style="color: #555753;">✓ Build exportable returns a exportable implementation instance</li>
    <li style="color: #555753;">✓ Factory location matches app location</li>
    <li style="color: #555753;">✓ Build identifiable returns identifiable implementation instance whose assigned name
        matches specified name
    </li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get app returns app assigned to app property</li>
    <li style="color: #555753;">✓ Build component stores built component</li>
    <li style="color: #555753;">✓ Build switchable component returns switchable component whose name and container match
        specified name and container and whose location matches app location
    </li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Factory container matches factory c o n t a i n e r constant</li>
    <li style="color: #555753;">✓ Build action stores built action</li>
    <li style="color: #555753;">✓ App property is assigned app implementation instance post instantiation</li>
    <li style="color: #555753;">✓ Build positionable returns a positionable implementation instance</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Build output component returns output component whose name and container match
        specified name and container and whose location matches app location and whose output matches specified output
        and whose position matches specified position
    </li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get app domain returns request returned by assigned apps get app domain method</li>
    <li style="color: #555753;">✓ Build storable returns a storable implementation instance</li>
    <li style="color: #555753;">✓ Build storable returns storable implementation instance whose assigned name matches
        specified name
    </li>
    <li style="color: #555753;">✓ Build output component stores built output component</li>
    <li style="color: #555753;">✓ Component crud property is assigned component crud implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Build storable returns storable whose location matches factorys app instances
        location
    </li>
    <li style="color: #555753;">✓ Build component returns component whose name and container match specified name and
        container and whose location matches app location
    </li>
    <li style="color: #555753;">✓ Build switchable component stores built switchable component</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
</ul>
<h2 id="UnitTests\classes\component\Factory\StandardUITemplateFactoryTest">Standard UITemplate Factory
    (UnitTests\classes\component\Factory\StandardUITemplateFactory)</h2>
<ul>
    <li style="color: #555753;">✓ App property is assigned app implementation instance post instantiation</li>
    <li style="color: #555753;">✓ Primary factory property is assigned primary factory implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Build standard u i template stores the standard u i template implementation instance
        it builds
    </li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Store and register returns false if component was not registered</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get app domain returns request returned by assigned apps get app domain method</li>
    <li style="color: #555753;">✓ Build standard u i template returns standard u i template whose assigned types reflect
        supplied types
    </li>
    <li style="color: #555753;">✓ Get stored component registry returns stored component registry instance assigned to
        stored component registry property
    </li>
    <li style="color: #555753;">✓ Build standard u i template registers the standard u i template implementation
        instance it builds
    </li>
    <li style="color: #555753;">✓ Factory container matches factory c o n t a i n e r constant</li>
    <li style="color: #555753;">✓ Build standard u i template returns an standard u i template implementation instance
    </li>
    <li style="color: #555753;">✓ Build standard u i template returns standard u i template whose container matches
        supplied container
    </li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Stored component registry property is assigned stored component registry
        implementation instance post instantiation
    </li>
    <li style="color: #555753;">✓ Store and register returns true if component was registered</li>
    <li style="color: #555753;">✓ Get component crud returns component crud instance assigned to switchable property
    </li>
    <li style="color: #555753;">✓ Build standard u i template returns standard u i template whose name matches supplied
        name
    </li>
    <li style="color: #555753;">✓ Factory location matches app location</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Store and register returns true if component was stored</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Switchable property is assigned component crud implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Get primary factory returns primary factory instance assigned to primary factory
        property
    </li>
    <li style="color: #555753;">✓ Store and register returns false if component was not stored</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Build standard u i template returns standard u i template whose position matches
        supplied position
    </li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get app returns app assigned to app property</li>
</ul>
<h2 id="UnitTests\classes\component\Factory\RequestFactoryTest">Request Factory
    (UnitTests\classes\component\Factory\RequestFactory)</h2>
<ul>
    <li style="color: #555753;">✓ Build request stores the request implementation instance it builds</li>
    <li style="color: #555753;">✓ Store and register returns false if component was not stored</li>
    <li style="color: #555753;">✓ Factory container matches factory c o n t a i n e r constant</li>
    <li style="color: #555753;">✓ Build request returns request whose name matches supplied name</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Build request returns a request implementation instance</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get component crud returns component crud instance assigned to switchable property
    </li>
    <li style="color: #555753;">✓ Switchable property is assigned component crud implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Get app domain returns request returned by assigned apps get app domain method</li>
    <li style="color: #555753;">✓ Get app returns app assigned to app property</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Build request registers the request implementation instance it builds</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Build request returns request whose url matches supplied url</li>
    <li style="color: #555753;">✓ Factory location matches app location</li>
    <li style="color: #555753;">✓ App property is assigned app implementation instance post instantiation</li>
    <li style="color: #555753;">✓ Store and register returns true if component was stored</li>
    <li style="color: #555753;">✓ Build request returns request whose container matches supplied container</li>
    <li style="color: #555753;">✓ Get primary factory returns primary factory instance assigned to primary factory
        property
    </li>
    <li style="color: #555753;">✓ Primary factory property is assigned primary factory implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Store and register returns true if component was registered</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get stored component registry returns stored component registry instance assigned to
        stored component registry property
    </li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Stored component registry property is assigned stored component registry
        implementation instance post instantiation
    </li>
    <li style="color: #555753;">✓ Store and register returns false if component was not registered</li>
</ul>
<h2 id="UnitTests\classes\component\Web\Routing\ResponseTest">Response
    (UnitTests\classes\component\Web\Routing\Response)</h2>
<ul>
    <li style="color: #555753;">✓ Add output component storage info adds specified output components storable instance
    </li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get template storage info returns array of storable instances for assigned templates
    </li>
    <li style="color: #555753;">✓ Positionable property is assigned a positionable implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Remove template storage info removes specified templates storable instance</li>
    <li style="color: #555753;">✓ Add template storage info adds specified template storable instance</li>
    <li style="color: #555753;">✓ RESPONSE CONTAINERConstantIsAssignedStringRESPONSES</li>
    <li style="color: #555753;">✓ Add o request storage info adds specified o requests storable instance</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Remove output component storage info removes specified output components storable
        instance
    </li>
    <li style="color: #555753;">✓ Get request storage info returns array of storable instances for assigned requests
    </li>
    <li style="color: #555753;">✓ Get output component storage info returns array of storable instances for assigned
        output components
    </li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Responds to request returns false for unknown request</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ GetContainerReturnsValueOfRESPONSE CONTAINERConstant</li>
    <li style="color: #555753;">✓ Responds to request returns true for assigned request</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get template storage info returns empty array if state is false</li>
    <li style="color: #555753;">✓ Remove request storage info removes specified requests storable instance</li>
    <li style="color: #555753;">✓ Get output component storage info returns empty array if state is false</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
</ul>
<h2 id="UnitTests\classes\component\Registry\Storage\StoredComponentRegistryTest">Stored Component Registry
    (UnitTests\classes\component\Registry\Storage\StoredComponentRegistry)</h2>
<ul>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get accepted implementation returns same namespace assigned to accepted implementation
        property on instantiation
    </li>
    <li style="color: #555753;">✓ Un register component returns true if specified storable was removed from registry
        propertys array
    </li>
    <li style="color: #555753;">✓ Register component returns false if component was not registered</li>
    <li style="color: #555753;">✓ Un register component returns false if specified storable was not removed from
        registry propertys array
    </li>
    <li style="color: #555753;">✓ Empty registry assigns an empty array to the registry property</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get component crud returns same component crud implementation instance assigned to
        component crud property on instantiation
    </li>
    <li style="color: #555753;">✓ Purge registry removes all storables that reference components that no longer exist in
        storage from the registry propertys array
    </li>
    <li style="color: #555753;">✓ Accepted implementation property is assigned namespace of a defined interface post
        instantiation
    </li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Register component does not add components storable to registry propertys array if
        component is already registered
    </li>
    <li style="color: #555753;">✓ Register component returns true if component was registered</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get registry returns array assigned to registry property</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Accepted implementation property is assigned namespace of a defined component
        implementation post instantiation
    </li>
    <li style="color: #555753;">✓ Component crud property is assigned an instance of a component crud implementation
        post instantiation
    </li>
    <li style="color: #555753;">✓ Un register component removes specified storable from registry propertys array</li>
    <li style="color: #555753;">✓ Registry property is set to an empty array post instantiation</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Register component does not add components storable to registry propertys array if
        component does not exist in storage
    </li>
    <li style="color: #555753;">✓ Get registered components reads all registered components from storage and returns
        them in an array
    </li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Register component adds components storable to registry propertys array if component
        exists in storage and is not already registered and is an accepted implementation
    </li>
    <li style="color: #555753;">✓ Register component does not add components storable to registry propertys array if
        component is not an accepted implementation
    </li>
</ul>
<h2 id="UnitTests\abstractions\primary\ClassifiableTest">Classifiable (UnitTests\abstractions\primary\Classifiable)</h2>
<ul>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
</ul>
<h2 id="UnitTests\abstractions\component\Factory\FactoryTest">Factory
    (UnitTests\abstractions\component\Factory\Factory)</h2>
<ul>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get app domain returns request returned by assigned apps get app domain method</li>
    <li style="color: #555753;">✓ Factory location matches app location</li>
    <li style="color: #555753;">✓ App property is assigned app implementation instance post instantiation</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get app returns app assigned to app property</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Factory container matches factory c o n t a i n e r constant</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
</ul>
<h2 id="UnitTests\classes\primary\StorableTest">Storable (UnitTests\classes\primary\Storable)</h2>
<ul>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
</ul>
<h2 id="UnitTests\abstractions\component\Factory\StandardUITemplateFactoryTest">Standard UITemplate Factory
    (UnitTests\abstractions\component\Factory\StandardUITemplateFactory)</h2>
<ul>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Stored component registry property is assigned stored component registry
        implementation instance post instantiation
    </li>
    <li style="color: #555753;">✓ Store and register returns false if component was not stored</li>
    <li style="color: #555753;">✓ Get app returns app assigned to app property</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ App property is assigned app implementation instance post instantiation</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Build standard u i template stores the standard u i template implementation instance
        it builds
    </li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Build standard u i template returns standard u i template whose container matches
        supplied container
    </li>
    <li style="color: #555753;">✓ Get primary factory returns primary factory instance assigned to primary factory
        property
    </li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Store and register returns false if component was not registered</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Factory container matches factory c o n t a i n e r constant</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get stored component registry returns stored component registry instance assigned to
        stored component registry property
    </li>
    <li style="color: #555753;">✓ Store and register returns true if component was stored</li>
    <li style="color: #555753;">✓ Store and register returns true if component was registered</li>
    <li style="color: #555753;">✓ Build standard u i template returns an standard u i template implementation instance
    </li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get component crud returns component crud instance assigned to switchable property
    </li>
    <li style="color: #555753;">✓ Build standard u i template registers the standard u i template implementation
        instance it builds
    </li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Build standard u i template returns standard u i template whose name matches supplied
        name
    </li>
    <li style="color: #555753;">✓ Get app domain returns request returned by assigned apps get app domain method</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Factory location matches app location</li>
    <li style="color: #555753;">✓ Build standard u i template returns standard u i template whose position matches
        supplied position
    </li>
    <li style="color: #555753;">✓ Switchable property is assigned component crud implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Primary factory property is assigned primary factory implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Build standard u i template returns standard u i template whose assigned types reflect
        supplied types
    </li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
</ul>
<h2 id="UnitTests\classes\primary\SwitchableTest">Switchable (UnitTests\classes\primary\Switchable)</h2>
<ul>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Can switch state</li>
</ul>
<h2 id="UnitTests\classes\component\Factory\StoredComponentFactoryTest">Stored Component Factory
    (UnitTests\classes\component\Factory\StoredComponentFactory)</h2>
<ul>
    <li style="color: #555753;">✓ Get app domain returns request returned by assigned apps get app domain method</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Stored component registry property is assigned stored component registry
        implementation instance post instantiation
    </li>
    <li style="color: #555753;">✓ Get primary factory returns primary factory instance assigned to primary factory
        property
    </li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Factory container matches factory c o n t a i n e r constant</li>
    <li style="color: #555753;">✓ Store and register returns true if component was stored</li>
    <li style="color: #555753;">✓ Store and register returns false if component was not registered</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Store and register returns false if component was not stored</li>
    <li style="color: #555753;">✓ Get component crud returns component crud instance assigned to switchable property
    </li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Factory location matches app location</li>
    <li style="color: #555753;">✓ Switchable property is assigned component crud implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Get app returns app assigned to app property</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Primary factory property is assigned primary factory implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Store and register returns true if component was registered</li>
    <li style="color: #555753;">✓ Get stored component registry returns stored component registry instance assigned to
        stored component registry property
    </li>
    <li style="color: #555753;">✓ App property is assigned app implementation instance post instantiation</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
</ul>
<h2 id="UnitTests\abstractions\primary\ExportableTest">Exportable (UnitTests\abstractions\primary\Exportable)</h2>
<ul>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
</ul>
<h2 id="UnitTests\abstractions\primary\PositionableTest">Positionable (UnitTests\abstractions\primary\Positionable)</h2>
<ul>
    <li style="color: #555753;">✓ Decrease position decreases position by one hundredth</li>
    <li style="color: #555753;">✓ Get position returns greater value after call to increase position</li>
    <li style="color: #555753;">✓ Increase position increases position by one hundredth</li>
    <li style="color: #555753;">✓ Get position returns lesser value after call to decrease position</li>
</ul>
<h2 id="UnitTests\abstractions\component\Web\AppTest">App (UnitTests\abstractions\component\Web\App)</h2>
<ul>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓
        GetRequestedAppReturnsAppOnInstanceCallWhoseNameAndLocationMatchTheValueReturnedByPassingSuppliedRequestToAppDeriveNameLocationFromRequestMethodAndWhoseContainerMatchesTheValueOfTheAppAPP
        CONTAINERConstant
    </li>
    <li style="color: #555753;">✓ Get requested app throws runtime exception on instance call if an app cant be found in
        storage whose name matches the value returned by passing supplied request to app derive name location from
        request method
    </li>
    <li style="color: #555753;">✓ Get requested app throws runtime exception on static call if app state is false</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓
        GetRequestedAppReturnsAppOnStaticCallWhoseNameAndLocationMatchTheValueReturnedByPassingSuppliedRequestToAppDeriveNameLocationFromRequestMethodAndWhoseContainerMatchesTheValueOfTheAppAPP
        CONTAINERConstant
    </li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ GetContainerReturnsValueOfAPP CONTAINERConstant</li>
    <li style="color: #555753;">✓ Get requested app throws runtime exception on static call if app data is corrupted
    </li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Derive app name location returns alpha numeric string form of value returned by
        parsing specified requests url to get host or string d e f a u l t if url host cant be determined
    </li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get requested app throws runtime exception on static call if an app cant be found in
        storage whose name matches the value returned by passing supplied request to app derive name location from
        request method
    </li>
    <li style="color: #555753;">✓ Name and location were set using derive app name location from request method</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get requested app throws runtime exception on static call if app is not installed</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get requested app throws runtime exception on instance call if app is not installed
    </li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get app domain returns request supplied to constructor on instantiation</li>
    <li style="color: #555753;">✓ Get requested app throws runtime exception on instance call if app state is false</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ APP CONTAINERConstantIsSetToStringAPP</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get requested app throws runtime exception on instance call if app data is corrupted
    </li>
</ul>
<h2 id="UnitTests\abstractions\component\Factory\PrimaryFactoryTest">Primary Factory
    (UnitTests\abstractions\component\Factory\PrimaryFactory)</h2>
<ul>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Build storable returns a storable implementation instance</li>
    <li style="color: #555753;">✓ Build storable returns storable implementation instance whose assigned container
        matches specified container
    </li>
    <li style="color: #555753;">✓ Factory container matches factory c o n t a i n e r constant</li>
    <li style="color: #555753;">✓ Build storable returns storable whose location matches factorys app instances
        location
    </li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Build positionable returns a positionable implementation instance</li>
    <li style="color: #555753;">✓ Factory location matches app location</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Build identifiable returns identifiable implementation instance whose assigned name
        matches specified name
    </li>
    <li style="color: #555753;">✓ Build switchable returns a switchable implementation instance</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Build exportable returns a exportable implementation instance</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Build storable returns storable implementation instance whose assigned name matches
        specified name
    </li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Build identifiable returns a identifiable implementation instance</li>
    <li style="color: #555753;">✓ Build positionable returns positionable implementation instance whose assigned
        position matches specified position
    </li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get app domain returns request returned by assigned apps get app domain method</li>
    <li style="color: #555753;">✓ App property is assigned app implementation instance post instantiation</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get app returns app assigned to app property</li>
    <li style="color: #555753;">✓ Build classifiable returns a classifiable implementation instance</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
</ul>
<h2 id="UnitTests\classes\primary\ExportableTest">Exportable (UnitTests\classes\primary\Exportable)</h2>
<ul>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
</ul>
<h2 id="UnitTests\TestUtilityTests\ArrayTestUtilityTest">Array Test Utility
    (UnitTests\TestUtilityTests\ArrayTestUtility)</h2>
<ul>
    <li style="color: #555753;">✓ Can test array has expected number of elements</li>
    <li style="color: #555753;">✓ Can test arrays are equal</li>
    <li style="color: #555753;">✓ Can test array values are expected types</li>
    <li style="color: #555753;">✓ Can test array keys are expected keys</li>
    <li style="color: #555753;">✓ Can test array is not empty</li>
    <li style="color: #555753;">✓ Can test array values are correctly ordered</li>
    <li style="color: #555753;">✓ Can test array values are expected values</li>
    <li style="color: #555753;">✓ Can test array keys are correctly ordered</li>
    <li style="color: #555753;">✓ Can test array is empty</li>
</ul>
<h2 id="UnitTests\abstractions\component\Driver\Storage\StandardTest">Standard
    (UnitTests\abstractions\component\Driver\Storage\Standard)</h2>
<ul>
    <li style="color: #555753;">✓ Storage directory exists post instantiation</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Write saves component data to json file named using component id under sub path
        defined using component location and container
    </li>
    <li style="color: #555753;">✓ Get storage path returns expected storage path</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Read returns component specified by storable</li>
    <li style="color: #555753;">✓ Delete removes components storable from storage index</li>
    <li style="color: #555753;">✓ Read returns mock component if state is false</li>
    <li style="color: #555753;">✓ Delete returns false and does not delete if state is false</li>
    <li style="color: #555753;">✓ Write does not write and returns false if state is false</li>
    <li style="color: #555753;">✓ Storage index exists post instantiation</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Read all returns array of all components stored in specified container at specified
        location
    </li>
    <li style="color: #555753;">✓ Get storage directory path returns expected storage directory path</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Write adds components storable to storage index</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Delete removes specified component</li>
</ul>
<h2 id="UnitTests\classes\component\Factory\PrimaryFactoryTest">Primary Factory
    (UnitTests\classes\component\Factory\PrimaryFactory)</h2>
<ul>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Build identifiable returns identifiable implementation instance whose assigned name
        matches specified name
    </li>
    <li style="color: #555753;">✓ Build identifiable returns a identifiable implementation instance</li>
    <li style="color: #555753;">✓ Build storable returns storable whose location matches factorys app instances
        location
    </li>
    <li style="color: #555753;">✓ Build switchable returns a switchable implementation instance</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Factory location matches app location</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Factory container matches factory c o n t a i n e r constant</li>
    <li style="color: #555753;">✓ Build positionable returns positionable implementation instance whose assigned
        position matches specified position
    </li>
    <li style="color: #555753;">✓ Build storable returns storable implementation instance whose assigned container
        matches specified container
    </li>
    <li style="color: #555753;">✓ Build storable returns a storable implementation instance</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ App property is assigned app implementation instance post instantiation</li>
    <li style="color: #555753;">✓ Build exportable returns a exportable implementation instance</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get app returns app assigned to app property</li>
    <li style="color: #555753;">✓ Build classifiable returns a classifiable implementation instance</li>
    <li style="color: #555753;">✓ Build positionable returns a positionable implementation instance</li>
    <li style="color: #555753;">✓ Build storable returns storable implementation instance whose assigned name matches
        specified name
    </li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get app domain returns request returned by assigned apps get app domain method</li>
</ul>
<h2 id="UnitTests\classes\component\Web\Routing\RequestTest">Request
    (UnitTests\classes\component\Web\Routing\Request)</h2>
<ul>
    <li style="color: #555753;">✓ Get get returns empty array if state is false</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Can get url</li>
    <li style="color: #555753;">✓ GetUrlReturns DISABLED IfStateIsFalse</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get post returns post array</li>
    <li style="color: #555753;">✓ Get get returns get array</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get post returns empty array if state is false</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
</ul>
<h2 id="UnitTests\abstractions\component\Factory\OutputComponentFactoryTest">Output Component Factory
    (UnitTests\abstractions\component\Factory\OutputComponentFactory)</h2>
<ul>
    <li style="color: #555753;">✓ Get app returns app assigned to app property</li>
    <li style="color: #555753;">✓ Primary factory property is assigned primary factory implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Factory container matches factory c o n t a i n e r constant</li>
    <li style="color: #555753;">✓ Store and register returns false if component was not registered</li>
    <li style="color: #555753;">✓ Build output component stores the output component implementation instance it builds
    </li>
    <li style="color: #555753;">✓ Build output component returns an output component implementation instance</li>
    <li style="color: #555753;">✓ App property is assigned app implementation instance post instantiation</li>
    <li style="color: #555753;">✓ Build output component returns output component whose position matches supplied
        position
    </li>
    <li style="color: #555753;">✓ Build output component returns output component whose output matches supplied output
    </li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Switchable property is assigned component crud implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Store and register returns true if component was registered</li>
    <li style="color: #555753;">✓ Stored component registry property is assigned stored component registry
        implementation instance post instantiation
    </li>
    <li style="color: #555753;">✓ Store and register returns false if component was not stored</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Build output component returns output component whose container matches supplied
        container
    </li>
    <li style="color: #555753;">✓ Build output component registers the output component implementation instance it
        builds
    </li>
    <li style="color: #555753;">✓ Get component crud returns component crud instance assigned to switchable property
    </li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Factory location matches app location</li>
    <li style="color: #555753;">✓ Get primary factory returns primary factory instance assigned to primary factory
        property
    </li>
    <li style="color: #555753;">✓ Build output component returns output component whose name matches supplied name</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Store and register returns true if component was stored</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get app domain returns request returned by assigned apps get app domain method</li>
    <li style="color: #555753;">✓ Get stored component registry returns stored component registry instance assigned to
        stored component registry property
    </li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
</ul>
<h2 id="UnitTests\classes\component\Factory\BaseComponentFactoryTest">Base Component Factory
    (UnitTests\classes\component\Factory\BaseComponentFactory)</h2>
<ul>
    <li style="color: #555753;">✓ Component crud property is assigned component crud implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Build storable returns storable implementation instance whose assigned name matches
        specified name
    </li>
    <li style="color: #555753;">✓ Build switchable returns a switchable implementation instance</li>
    <li style="color: #555753;">✓ Build exportable returns a exportable implementation instance</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get app domain returns request returned by assigned apps get app domain method</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Build action stores built action</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ App property is assigned app implementation instance post instantiation</li>
    <li style="color: #555753;">✓ Build output component returns output component whose name and container match
        specified name and container and whose location matches app location and whose output matches specified output
        and whose position matches specified position
    </li>
    <li style="color: #555753;">✓ Build action returns action whose name and container match specified name and
        container and whose location matches app location and whose position matches specified position
    </li>
    <li style="color: #555753;">✓ Build identifiable returns a identifiable implementation instance</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Build identifiable returns identifiable implementation instance whose assigned name
        matches specified name
    </li>
    <li style="color: #555753;">✓ Factory location matches app location</li>
    <li style="color: #555753;">✓ Build switchable component returns switchable component implementation instance</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Build positionable returns a positionable implementation instance</li>
    <li style="color: #555753;">✓ Build storable returns storable whose location matches factorys app instances
        location
    </li>
    <li style="color: #555753;">✓ Build output component returns output component implementation instance</li>
    <li style="color: #555753;">✓ Factory container matches factory c o n t a i n e r constant</li>
    <li style="color: #555753;">✓ Build positionable returns positionable implementation instance whose assigned
        position matches specified position
    </li>
    <li style="color: #555753;">✓ Build storable returns a storable implementation instance</li>
    <li style="color: #555753;">✓ Build action returns action implementation instance</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Build component stores built component</li>
    <li style="color: #555753;">✓ Build component returns component implementation instance</li>
    <li style="color: #555753;">✓ Get app returns app assigned to app property</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Build component returns component whose name and container match specified name and
        container and whose location matches app location
    </li>
    <li style="color: #555753;">✓ Build storable returns storable implementation instance whose assigned container
        matches specified container
    </li>
    <li style="color: #555753;">✓ Build switchable component stores built switchable component</li>
    <li style="color: #555753;">✓ Build output component stores built output component</li>
    <li style="color: #555753;">✓ Build classifiable returns a classifiable implementation instance</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Build switchable component returns switchable component whose name and container match
        specified name and container and whose location matches app location
    </li>
</ul>
<h2 id="UnitTests\abstractions\component\Driver\Storage\FileSystem\JsonTest">Json
    (UnitTests\abstractions\component\Driver\Storage\FileSystem\Json)</h2>
<ul>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Delete returns false and does not delete if state is false</li>
    <li style="color: #555753;">✓ Read all returns array of all components stored in specified container at specified
        location
    </li>
    <li style="color: #555753;">✓ Write saves component data to json file named using component id under sub path
        defined using component location and container
    </li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Delete removes specified component</li>
    <li style="color: #555753;">✓ Storage index exists post instantiation</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Read returns component specified by storable</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get storage path returns expected storage path</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Write does not write and returns false if state is false</li>
    <li style="color: #555753;">✓ Write adds components storable to storage index</li>
    <li style="color: #555753;">✓ Delete removes components storable from storage index</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Storage directory exists post instantiation</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Read returns mock component if state is false</li>
    <li style="color: #555753;">✓ Get storage directory path returns expected storage directory path</li>
</ul>
<h2 id="UnitTests\classes\component\UserInterface\StandardUITest">Standard UI
    (UnitTests\classes\component\UserInterface\StandardUI)</h2>
<ul>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get position returns greater value after call to increase position</li>
    <li style="color: #555753;">✓ Increase position does not increase position if state is false</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get templates assigned to responses returns array whose second level indexes are
        numeric strings
    </li>
    <li style="color: #555753;">✓ Get templates assigned to responses returns multi dimensional array of arrays of
        standard u i templates
    </li>
    <li style="color: #555753;">✓ Get position returns lesser value after call to decrease position</li>
    <li style="color: #555753;">✓ Get output components assigned to responses returns array of output components</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Router property is assigned a router implementation instance post instantiation</li>
    <li style="color: #555753;">✓ Get output components assigned to responses returns array whose second level indexes
        are valid output component types
    </li>
    <li style="color: #555753;">✓ Get output returns collective output from output components organized by response
        position then template position then template o c type then output component position
    </li>
    <li style="color: #555753;">✓ Get templates assigned to responses returns array of all standard u i templates
        assigned to all responses to current request
    </li>
    <li style="color: #555753;">✓ Get output components assigned to responses returns array whose top level indexes are
        numeric strings
    </li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Positionable instance is set on instantiation</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get output returns empty string if state is false</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Increase position increases position by one hundredth</li>
    <li style="color: #555753;">✓ Decrease position decreases position by one hundredth</li>
    <li style="color: #555753;">✓ Get output components assigned to responses returns array whose third level indexes
        are numeric strings
    </li>
    <li style="color: #555753;">✓ Get templates assigned to responses returns array whose top level indexes are numeric
        strings
    </li>
    <li style="color: #555753;">✓ Get output components assigned to responses returns array of all output components
        assigned to all responses to current request
    </li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get templates assigned to responses returns multi dimensional array of arrays</li>
    <li style="color: #555753;">✓ Decrease position does not increase position if state is false</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
</ul>
<h2 id="UnitTests\classes\primary\IdentifiableTest">Identifiable (UnitTests\classes\primary\Identifiable)</h2>
<ul>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
</ul>
<h2 id="UnitTests\classes\primary\ClassifiableTest">Classifiable (UnitTests\classes\primary\Classifiable)</h2>
<ul>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
</ul>
<h2 id="UnitTests\abstractions\component\Factory\ResponseFactoryTest">Response Factory
    (UnitTests\abstractions\component\Factory\ResponseFactory)</h2>
<ul>
    <li style="color: #555753;">✓ Primary factory property is assigned primary factory implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Build response registers the response implementation instance it builds</li>
    <li style="color: #555753;">✓ Build response returns response whose assigned request count matches expected request
        count
    </li>
    <li style="color: #555753;">✓ If output component add storage info ignores components that are not output
        components
    </li>
    <li style="color: #555753;">✓ Get app domain returns request returned by assigned apps get app domain method</li>
    <li style="color: #555753;">✓ If request add storage info ignores components that are not requests</li>
    <li style="color: #555753;">✓ Store and register returns false if component was not stored</li>
    <li style="color: #555753;">✓ If request add storage info adds requests storable to response</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Factory location matches app location</li>
    <li style="color: #555753;">✓ Store and register returns true if component was stored</li>
    <li style="color: #555753;">✓ Get primary factory returns primary factory instance assigned to primary factory
        property
    </li>
    <li style="color: #555753;">✓ App property is assigned app implementation instance post instantiation</li>
    <li style="color: #555753;">✓ Factory container matches factory c o n t a i n e r constant</li>
    <li style="color: #555753;">✓ Build global response returns response whose assigned standard u i template count
        matches expected standard u i template count
    </li>
    <li style="color: #555753;">✓ Build response returns response whose assigned standard u i template count matches
        expected standard u i template count
    </li>
    <li style="color: #555753;">✓ Build response returns a response implementation instance</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Build global response returns response whose name matches supplied name</li>
    <li style="color: #555753;">✓ Build global response stores the response implementation instance it builds</li>
    <li style="color: #555753;">✓ Build global response returns a global response implementation instance</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ BuildGlobalResponseReturnsResponseWhoseContainerMatchesGlobalResponseRESPONSE
        CONTAINERConstant
    </li>
    <li style="color: #555753;">✓ Build global response returns response whose assigned output component count matches
        expected output component count
    </li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Build response returns response whose assigned output component count matches expected
        output component count
    </li>
    <li style="color: #555753;">✓ Build global response returns response whose position matches supplied position</li>
    <li style="color: #555753;">✓ Get component crud returns component crud instance assigned to switchable property
    </li>
    <li style="color: #555753;">✓ Get stored component registry returns stored component registry instance assigned to
        stored component registry property
    </li>
    <li style="color: #555753;">✓ If standard u i template add storage info adds standard u i templates storable to
        response
    </li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Build global response registers the response implementation instance it builds</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Build response returns response whose name matches supplied name</li>
    <li style="color: #555753;">✓ Get app returns app assigned to app property</li>
    <li style="color: #555753;">✓ Switchable property is assigned component crud implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ BuildResponseReturnsResponseWhoseContainerMatchesResponseRESPONSE CONTAINERConstant
    </li>
    <li style="color: #555753;">✓ If output component add storage info adds output components storable to response</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Store and register returns false if component was not registered</li>
    <li style="color: #555753;">✓ Build response returns response whose position matches supplied position</li>
    <li style="color: #555753;">✓ If standard u i template add storage info ignores components that are not standard u i
        templates
    </li>
    <li style="color: #555753;">✓ Store and register returns true if component was registered</li>
    <li style="color: #555753;">✓ Build response stores the response implementation instance it builds</li>
    <li style="color: #555753;">✓ Stored component registry property is assigned stored component registry
        implementation instance post instantiation
    </li>
</ul>
<h2 id="UnitTests\classes\component\Crud\ComponentCrudTest">Component Crud
    (UnitTests\classes\component\Crud\ComponentCrud)</h2>
<ul>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Update returns false and does not update component if state is false</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Read all returns an empty array if state is false</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Update updates specified component</li>
    <li style="color: #555753;">✓ Create returns false and does not create component if state is false</li>
    <li style="color: #555753;">✓ Delete returns false and does not delete component if state is false</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Storage driver is on upon instantiation</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Read returns specified component</li>
    <li style="color: #555753;">✓ Read returns mock component instance if state is false</li>
    <li style="color: #555753;">✓ Read all returns array of components stored in specified container at specified
        location
    </li>
    <li style="color: #555753;">✓ Delete removes specified component</li>
    <li style="color: #555753;">✓ Create returns true</li>
    <li style="color: #555753;">✓ Storage driver is set and is a storage driver post instantiation</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
</ul>
<h2 id="UnitTests\abstractions\primary\IdentifiableTest">Identifiable (UnitTests\abstractions\primary\Identifiable)</h2>
<ul>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
</ul>
<h2 id="UnitTests\classes\component\SwitchableComponentTest">Switchable Component
    (UnitTests\classes\component\SwitchableComponent)</h2>
<ul>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Can switch state</li>
</ul>
<h2 id="UnitTests\abstractions\component\Web\Routing\ResponseTest">Response
    (UnitTests\abstractions\component\Web\Routing\Response)</h2>
<ul>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get output component storage info returns empty array if state is false</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get template storage info returns empty array if state is false</li>
    <li style="color: #555753;">✓ Positionable property is assigned a positionable implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ GetContainerReturnsValueOfRESPONSE CONTAINERConstant</li>
    <li style="color: #555753;">✓ Get output component storage info returns array of storable instances for assigned
        output components
    </li>
    <li style="color: #555753;">✓ Remove request storage info removes specified requests storable instance</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Add template storage info adds specified template storable instance</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Add output component storage info adds specified output components storable instance
    </li>
    <li style="color: #555753;">✓ Responds to request returns true for assigned request</li>
    <li style="color: #555753;">✓ Get request storage info returns array of storable instances for assigned requests
    </li>
    <li style="color: #555753;">✓ Responds to request returns false for unknown request</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ RESPONSE CONTAINERConstantIsAssignedStringRESPONSES</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Add o request storage info adds specified o requests storable instance</li>
    <li style="color: #555753;">✓ Remove output component storage info removes specified output components storable
        instance
    </li>
    <li style="color: #555753;">✓ Get template storage info returns array of storable instances for assigned templates
    </li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Remove template storage info removes specified templates storable instance</li>
</ul>
<h2 id="UnitTests\classes\component\Factory\ResponseFactoryTest">Response Factory
    (UnitTests\classes\component\Factory\ResponseFactory)</h2>
<ul>
    <li style="color: #555753;">✓ Factory location matches app location</li>
    <li style="color: #555753;">✓ Store and register returns true if component was registered</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ BuildResponseReturnsResponseWhoseContainerMatchesResponseRESPONSE CONTAINERConstant
    </li>
    <li style="color: #555753;">✓ If output component add storage info adds output components storable to response</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ If output component add storage info ignores components that are not output
        components
    </li>
    <li style="color: #555753;">✓ If request add storage info ignores components that are not requests</li>
    <li style="color: #555753;">✓ Build global response stores the response implementation instance it builds</li>
    <li style="color: #555753;">✓ Build global response returns response whose assigned output component count matches
        expected output component count
    </li>
    <li style="color: #555753;">✓ Get app returns app assigned to app property</li>
    <li style="color: #555753;">✓ Store and register returns true if component was stored</li>
    <li style="color: #555753;">✓ Build response stores the response implementation instance it builds</li>
    <li style="color: #555753;">✓ Build response returns response whose assigned output component count matches expected
        output component count
    </li>
    <li style="color: #555753;">✓ Build global response returns a global response implementation instance</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Build global response returns response whose position matches supplied position</li>
    <li style="color: #555753;">✓ App property is assigned app implementation instance post instantiation</li>
    <li style="color: #555753;">✓ Build response returns response whose name matches supplied name</li>
    <li style="color: #555753;">✓ If standard u i template add storage info adds standard u i templates storable to
        response
    </li>
    <li style="color: #555753;">✓ Get component crud returns component crud instance assigned to switchable property
    </li>
    <li style="color: #555753;">✓ Get primary factory returns primary factory instance assigned to primary factory
        property
    </li>
    <li style="color: #555753;">✓ Build global response registers the response implementation instance it builds</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Build response returns response whose assigned request count matches expected request
        count
    </li>
    <li style="color: #555753;">✓ Build response returns a response implementation instance</li>
    <li style="color: #555753;">✓ Factory container matches factory c o n t a i n e r constant</li>
    <li style="color: #555753;">✓ Build response returns response whose position matches supplied position</li>
    <li style="color: #555753;">✓ Store and register returns false if component was not stored</li>
    <li style="color: #555753;">✓ Primary factory property is assigned primary factory implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Build response returns response whose assigned standard u i template count matches
        expected standard u i template count
    </li>
    <li style="color: #555753;">✓ Build global response returns response whose name matches supplied name</li>
    <li style="color: #555753;">✓ Get stored component registry returns stored component registry instance assigned to
        stored component registry property
    </li>
    <li style="color: #555753;">✓ If standard u i template add storage info ignores components that are not standard u i
        templates
    </li>
    <li style="color: #555753;">✓ Build global response returns response whose assigned standard u i template count
        matches expected standard u i template count
    </li>
    <li style="color: #555753;">✓ Get app domain returns request returned by assigned apps get app domain method</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ If request add storage info adds requests storable to response</li>
    <li style="color: #555753;">✓ Switchable property is assigned component crud implementation instance post
        instantiation
    </li>
    <li style="color: #555753;">✓ Store and register returns false if component was not registered</li>
    <li style="color: #555753;">✓ Stored component registry property is assigned stored component registry
        implementation instance post instantiation
    </li>
    <li style="color: #555753;">✓ BuildGlobalResponseReturnsResponseWhoseContainerMatchesGlobalResponseRESPONSE
        CONTAINERConstant
    </li>
    <li style="color: #555753;">✓ Build response registers the response implementation instance it builds</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
</ul>
<h2 id="UnitTests\abstractions\utility\ReflectionUtilityTest">Reflection Utility
    (UnitTests\abstractions\utility\ReflectionUtility)</h2>
<ul>
    <li style="color: #555753;">✓ Get class instance returns instance of specified class</li>
    <li style="color: #555753;">✓ Get class reflection returns reflection of specified class</li>
    <li style="color: #555753;">✓ Generate mock class method arguments returns array whose values types are methods
        expected argument types
    </li>
    <li style="color: #555753;">✓ Get class property names returns array whose values are specified classes expected
        property names
    </li>
    <li style="color: #555753;">✓ Get class property types returns array whose values are specified classes expected
        property types
    </li>
    <li style="color: #555753;">✓ Get class property values returns instances property values</li>
    <li style="color: #555753;">✓ Get class method parameter types returns array whose values are specified class
        methods expected parameter types
    </li>
    <li style="color: #555753;">✓ Get class method parameter names returns array whose values are specified class
        methods parameter names
    </li>
</ul>
<h2 id="UnitTests\TestUtilityTests\StringTestUtilityTest">String Test Utility
    (UnitTests\TestUtilityTests\StringTestUtility)</h2>
<ul>
    <li style="color: #555753;">✓ Can test string is alpha numeric</li>
    <li style="color: #555753;">✓ Can test string is not empty</li>
    <li style="color: #555753;">✓ Can test strings match</li>
    <li style="color: #555753;">✓ Can test string length is expected string length</li>
    <li style="color: #555753;">✓ Can test string is empty</li>
</ul>
<h2 id="UnitTests\classes\component\ActionTest">Action (UnitTests\classes\component\Action)</h2>
<ul>
    <li style="color: #555753;">✓ Undo returns false when called before do</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get position returns lesser value after call to decrease position</li>
    <li style="color: #555753;">✓ Was undone returns false when called before undo</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Can switch state</li>
    <li style="color: #555753;">✓ Get position returns greater value after call to increase position</li>
    <li style="color: #555753;">✓ Increase position does not increase position if state is false</li>
    <li style="color: #555753;">✓ Decrease position decreases position by one hundredth</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Decrease position does not increase position if state is false</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Was done returns true when called after do</li>
    <li style="color: #555753;">✓ Was done returns true when called after get output</li>
    <li style="color: #555753;">✓ Positionable instance is set on instantiation</li>
    <li style="color: #555753;">✓ Do returns true</li>
    <li style="color: #555753;">✓ Was undone returns false when called before do</li>
    <li style="color: #555753;">✓ Was undone returns true when called after undo</li>
    <li style="color: #555753;">✓ Increase position increases position by one hundredth</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get output returns empty string if state is false</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
    <li style="color: #555753;">✓ Was done returns false when called before do</li>
    <li style="color: #555753;">✓ Undo returns true when called after do</li>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get current request returns request implementation instance that reflects current
        request
    </li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get state returns boolean</li>
</ul>
<h2 id="UnitTests\abstractions\component\ComponentTest">Component (UnitTests\abstractions\component\Component)</h2>
<ul>
    <li style="color: #555753;">✓ Get type returns non empty string</li>
    <li style="color: #555753;">✓ Get type returns instances fully qualified class name</li>
    <li style="color: #555753;">✓ Get name returns alpha numeric string</li>
    <li style="color: #555753;">✓ Properties match imported properties post import</li>
    <li style="color: #555753;">✓ Get unique id returns alpha numeric string</li>
    <li style="color: #555753;">✓ Get container returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get location returns non empty alpha numeric string</li>
    <li style="color: #555753;">✓ Get unique id returns non empty string</li>
    <li style="color: #555753;">✓ Get name returns non empty string</li>
    <li style="color: #555753;">✓ Export returns array whose values are instances property values</li>
</ul>
</body>
</html>