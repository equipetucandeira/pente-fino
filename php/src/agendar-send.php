<?php
    session_start();

    include_once("config.php");

    if (isset($_POST['confirmSchedule']) && $_SERVER['REQUEST_METHOD'] == "POST") {

        $userId = $_SESSION['userId'];
        $selectedService = $_POST['serviceUserSchedule'];

        $serviceQuery = "SELECT SERVICE_VALUE FROM TB_SERVICES WHERE SERVICE_ID = :serviceId";

        $stmtService = $conn->prepare($serviceQuery);
        $stmtService->bindParam(":serviceId", $selectedService, PDO::PARAM_INT);
        $stmtService->execute();

        $serviceResult = $stmtService->fetch(PDO::FETCH_ASSOC); 

        if ($serviceResult) {
            $servicePrice = $serviceResult['SERVICE_VALUE'];

            $selectedAttendant = $_POST['attendantUserSchedule'];
            $selectedDate = $_POST['dateUserSchedule'];
            $dateFormat = new DateTime($selectedDate);
            $date = $dateFormat->format('Y-m-d');

            $selectedTime = $_POST['timeUserSchedule'];
            $userCli = $_SESSION['userName'];

            //echo $userId . "<br>";
            //echo $selectedAttendant. "<br>";
            //echo $selectedDate . "<br>";
            

            switch ($selectedTime) {
                case 1:
                    $selectedTime = "9:00";
                    break;
                case 2:
                    $selectedTime = "10:00";
                    break;
                case 3:
                    $selectedTime = "11:00";
                    break;
                case 4:
                    $selectedTime = "13:00";
                    break;
                case 5:
                    $selectedTime = "14:00";
                    break;
                case 6:
                    $selectedTime = "15:00";
                    break;
                case 7:
                    $selectedTime = "16:00";
                    break;
                case 8:
                    $selectedTime = "17:00";
                    break;
                case 9:
                    $selectedTime = "19:00";
                    break;
                case 10:
                    $selectedTime = "20:00";
                    break;
                case 11:
                    $selectedTime = "21:00";
                    break;
                default:
                    break;
            }

            //echo $selectedTime;

            $query = "INSERT INTO TB_SCHEDULES (SCHEDULE_SERVICES, SCHEDULE_CLIENT, SCHEDULE_ATTENDANT, SCHEDULE_DATE, SCHEDULE_VALUE, SCHEDULE_TIME) VALUES (:schService, :schCli, :schAtt, :schDate, :schValue, :schTime)";

            $stmt = $conn->prepare( $query );

            $stmt->bindParam(":schService", $selectedService, PDO::PARAM_STR);
            $stmt->bindParam(":schCli", $userId, PDO::PARAM_STR);
            $stmt->bindParam(":schAtt", $selectedAttendant, PDO::PARAM_STR);
            $stmt->bindParam(":schDate", $date, PDO::PARAM_STR);
            $stmt->bindParam(":schValue", $servicePrice, PDO::PARAM_STR);
            $stmt->bindParam(":schTime", $selectedTime, PDO::PARAM_STR); 

            $stmt->execute();

            header("Location: ./user-access.php");
        }
          
        
        
    }

    
    

?>