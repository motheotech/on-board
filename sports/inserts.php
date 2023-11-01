<?php

    $candidate_surname = $_POST["candidate_surname"];
    $full_name = $_POST["full_name"];
    $id_number = $_POST["id_number"];
    $gender = $_POST["gender"];
    $contact_numbers = $_POST["contact_numbers"];
    $alternative_numbers = $_POST["alternative_numbers"];
    $language = $_POST["language"];
    $email_address = $_POST["email_address"];
    $home_address = $_POST["home_address"];
    $drivers_license = $_POST["driver's_license"];
    $disability = $_POST["disability,_if_yes_type_of_disability"];

    // Enrolment Details
    $name_of_programme = $_POST["name_of_programme"];
    $duration = $_POST["start_date"] . ' - ' . $_POST["end_date"];

    // Education Background
    $name_of_high_school = $_POST["name_of_high_school"];
    $highest_grade_passed = $_POST["highest_grade_passed"];
    $year_of_completion = $_POST["year_of_completion"];

    // Post Matric Details
    $name_of_institution = $_POST["name_of_institution"];
    $name_of_course = $_POST["name_of_course"];
    $year_of_completion_post_matric = $_POST["year_of_completion_post_matric"];

    // Work Experience
    $company_name = $_POST["company_name"];
    $position = $_POST["position"];
    $duties = $_POST["duties"];
    $work_duration = $_POST["start_date"] . ' - ' . $_POST["end_date"];
    $reason_for_leaving = $_POST["reason_for_leaving"];


$host = "localhost";
$username = "root";
$password = "";
$database = "register_information";

$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    // SQL statement to insert data into the database
    $sql = "INSERT INTO registration_data (candidate_surname, full_name, id_number, gender, contact_numbers, alternative_numbers, language, email_address, home_address, drivers_license, disability, name_of_programme, duration, name_of_high_school, highest_grade_passed, year_of_completion, name_of_institution, name_of_course, year_of_completion_post_matric, company_name, position, duties, work_duration, reason_for_leaving) VALUES ('$candidate_surname', '$full_name', '$id_number', '$gender', '$contact_numbers', '$alternative_numbers', '$language', '$email_address', '$home_address', '$drivers_license', '$disability', '$name_of_programme', '$duration', '$name_of_high_school', '$highest_grade_passed', '$year_of_completion', '$name_of_institution', '$name_of_course', '$year_of_completion_post_matric', '$company_name', '$position', '$duties', '$work_duration', '$reason_for_leaving')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration data saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();

?>
