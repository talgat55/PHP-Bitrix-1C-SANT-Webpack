<?
define("NOT_CHECK_PERMISSIONS", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");


if(isset($_POST)){

    $EVENT = ($_POST['event']);


    if($EVENT == 'FEEDBACK_EVENT') {
        $USER_NAME = htmlspecialcharsbx($_POST['name']);
        $USER_EMAIL = htmlspecialcharsbx($_POST['email']);
        $USER_MESSAGE = htmlspecialcharsbx($_POST['comment']);

        $arEventFields = array (
            "USER_NAME" => $USER_NAME,
            "USER_EMAIL" => $USER_EMAIL,
            "USER_MESSAGE" => $USER_MESSAGE,
        );
    }else{
        $USER_NAME = htmlspecialcharsbx($_POST['name']);
        $USER_PHONE = htmlspecialcharsbx($_POST['phone']);
        $SERVICE_NAME = htmlspecialcharsbx($_POST['service_name']);


        $arEventFields = array (
            "USER_NAME" => $USER_NAME,
            "USER_PHONE" => $USER_PHONE,
            "SERVICE_NAME" => $SERVICE_NAME,
        );
    }


    CEvent::Send($EVENT,"s1", $arEventFields, "N", "", "");


}

?>