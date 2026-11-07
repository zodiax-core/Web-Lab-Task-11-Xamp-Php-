<?php
/* 
TASK 11: MINI PROJECT - STUDENT INFO PAGE
This script processes student marks, calculates performance statistics,
tracks display repetitions using static variables, and structures 
everything into a clean HTML format.
*/

//Variable Initializations
$studentName = "Tayyab Asif";
$rollNumber = "70173531";

// Individual subject marks
$mathMarks = 85;
$physicsMarks = 78;
$computerMarks = 92;

// Passing threshold criteria
$passMarkPerSubject = 50;
$targetPercentage = 85.0; // Target score benchmark for evaluation

// --- Mathematical and Operator Calculations ---
$totalMarksObtained = $mathMarks + $physicsMarks + $computerMarks;
$averageMarks = $totalMarksObtained / 3;
$percentage = ($totalMarksObtained / 300) * 100;

// Determine absolute pass status across all subjects
$isPassed = ($mathMarks >= $passMarkPerSubject && $physicsMarks >= $passMarkPerSubject && $computerMarks >= $passMarkPerSubject);

// --- Comparison Operations ---
// Strict identity verification against the designated target benchmark
$hitExactTarget = ($percentage === $targetPercentage);

// Loose equality check for general equivalent value checking
$matchesTargetValue = ($percentage == $targetPercentage);

// --- Function Definition with Static Tracking ---
function displayCounter() {
    // Retains value across repetitive functional invocation executions
    static $displayInstances = 0;
    $displayInstances++;
    return $displayInstances;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Profile Performance Page</title>
    <style>
        body { 
            font-family: 'Segoe UI', Arial, sans-serif; 
            background-color: #f4f7f6; 
            margin: 40px; 
            color: #333; 
        }
        .container { 
            max-width: 600px; 
            background: white; 
            padding: 30px; 
            border-radius: 8px; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.05); 
            margin: 0 auto; 
        }
        h1 { 
            color: #2c3e50; 
            border-bottom: 2px solid #ecf0f1; 
            padding-bottom: 10px; 
            margin-top: 0; 
        }
        h2 { 
            color: #34495e; 
            font-size: 1.2em; 
            margin-top: 20px; 
        }
        .meta-info p { 
            margin: 6px 0; 
            font-size: 1.1em; 
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin: 15px 0; 
        }
        th, td { 
            padding: 10px; 
            text-align: left; 
            border-bottom: 1px solid #edf2f7; 
        }
        th { 
            background-color: #f8fafc; 
            color: #4a5568; 
        }
        .badge { 
            padding: 4px 8px; 
            border-radius: 4px; 
            font-weight: bold; 
            font-size: 0.9em; 
        }
        .pass { 
            background-color: #def7ec; 
            color: #03543f; 
        }
        .fail { 
            background-color: #fde8e8; 
            color: #9b1c1c; 
        }
        .footer-metric { 
            background: #f8fafc; 
            padding: 15px; 
            border-radius: 6px; 
            border-left: 4px solid #3182ce; 
            margin-top: 20px; 
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Student Report Card</h1>
    
    <!-- Core Academic Identification Fields -->
    <div class="meta-info">
        <p><strong>Name:</strong> <?php echo $studentName; ?></p>
        <p><strong>Roll Number:</strong> <?php echo $rollNumber; ?></p>
        <p><strong>Status:</strong> 
            <?php if ($isPassed): ?>
                <span class="badge pass">PASSED</span>
            <?php else: ?>
                <span class="badge fail">FAILED</span>
            <?php endif; ?>
        </p>
    </div>

    <h2>Subject Breakdown</h2>
    <table>
        <tr>
            <th>Subject</th>
            <th>Marks Obtained</th>
            <th>Min Required</th>
        </tr>
        <tr>
            <td>Mathematics</td>
            <td><?php echo $mathMarks; ?></td>
            <td><?php echo $passMarkPerSubject; ?></td>
        </tr>
        <tr>
            <td>Physics</td>
            <td><?php echo $physicsMarks; ?></td>
            <td><?php echo $passMarkPerSubject; ?></td>
        </tr>
        <tr>
            <td>Computer Science</td>
            <td><?php echo $computerMarks; ?></td>
            <td><?php echo $passMarkPerSubject; ?></td>
        </tr>
    </table>

    <h2>Performance Statistics</h2>
    <table>
        <tr>
            <td><strong>Total Marks:</strong></td>
            <td><?php echo $totalMarksObtained; ?> / 300</td>
        </tr>
        <tr>
            <td><strong>Average Score:</strong></td>
            <td><?php echo number_format($averageMarks, 2); ?></td>
        </tr>
        <tr>
            <td><strong>Percentage:</strong></td>
            <td><?php echo number_format($percentage, 2); ?>%</td>
        </tr>
    </table>

    <h2>Target Evaluation Benchmarks</h2>
    <ul>
        <!-- Display processing comparisons based on requested slide components -->
        <li>Is percentage loosely equal (==) to <?php echo $targetPercentage; ?>%? 
            <strong><?php echo $matchesTargetValue ? 'Yes' : 'No'; ?></strong>
        </li>
        <li>Is percentage strictly identical (===) to <?php echo $targetPercentage; ?>%? 
            <strong><?php echo $hitExactTarget ? 'Yes' : 'No'; ?></strong>
        </li>
    </ul>

    <!-- Triggering execution tracking functions -->
    <div class="footer-metric">
        <p><strong>Page Rendering Counter Tracker:</strong> This explicit statement calculation view profile template block execution has processed <strong><?php echo displayCounter(); ?></strong> time(s) inside this thread stack scope lifetime pipeline layout context wrapper block.</p>
    </div>
</div>

</body>
</html>
