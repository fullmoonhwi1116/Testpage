<?php
# Retrieve and display metadata
$sampleInstanceId = file_get_contents("http://169.254.169.254/latest/meta-data/instance-id");
$sampleAvailabilityZone = file_get_contents("http://169.254.169.254/latest/meta-data/placement/availability-zone");
?>

<h1>Welcome to AWS EC2 Test</h1>
<table>
    <tr>
        <td>Instance ID</td>
        <td><?php echo $sampleInstanceId; ?></td>
    </tr>
    <tr>
        <td>Availability Zone</td>
        <td><?php echo $sampleAvailabilityZone; ?></td>
    </tr>
</table>
