<?php

// Creating variables and constants
$projectName = 'The Entrepreneurial Minds Project';
$projectGoal = 'To create a platform to connect aspiring entrepreneurs to resources and mentors';
$targetAudience = 'Aspiring entrepreneurs and small business owners';

// Retrieving data
$projectMembers = get_project_members();
$projectSponsors = get_project_sponsors();
$projectResources = get_project_resources();

// Creating project page
$projectHtml = '
<html>
    <head>
        <title>' . $projectName . '</title>
    </head>
    <body>
        <h1>' . $projectName . '</h1>
        <h2>Goal</h2>
        <p>' . $projectGoal . '</p>

        <h2>Target Audience</h2>
        <p>' . $targetAudience . '</p>

        <h2>Team Members</h2>
        <ul>';
        foreach ($projectMembers as $member) {
            $projectHtml .= '<li>' . $member . '</li>';
        }
$projectHtml .= '
        </ul>
        <h2>Sponsors</h2>
        <ul>';
        foreach ($projectSponsors as $sponsor) {
            $projectHtml .= '<li>' . $sponsor . '</li>';
        }
$projectHtml .= '
        </ul>
        <h2>Resources</h2>
        <ul>';
        foreach ($projectResources as $resource) {
            $projectHtml .= '<li>' . $resource . '</li>';
        }
$projectHtml .= '
        </ul>
    </body>
</html>';

// Output HTML
echo $projectHtml;

// Defining functions
function get_project_members() {
    return array('John', 'Jane', 'Emily', 'Carl');
}

function get_project_sponsors() {
    return array('Google', 'Microsoft');
}

function get_project_resources() {
    return array('Mentors', 'Networking Events', 'Webinars');
}