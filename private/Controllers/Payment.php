<?php

namespace Controllers;

use Core\Controller;

class Payment extends Controller
{
    public function index(): void
    {
        $this->view->render("payment", "");
        $this->pay();
    }

    private function pay(): void
    {
        $seatIDs = $this->getSeatIDs();

        if (isset($_POST['submit']))
        {
            if (count($seatIDs) > 0)
            {
                $this->sendEmail();
                array_map('deleteCookie', $seatIDs);
                array_map('updateSeatStatus', $seatIDs);
            }
            else
            {
                echo '<script type="text/javascript">alert("Lejárt a fizetési idő, válasszon ki egy széket!");</script>';
            }
        }
    }

    private function sendEmail(): void
    {
        $to = $_POST['email'];
        $name = $_POST['name'];
        $from = "Mozi";
        $message = "Sikeresen kifizette a foglalást";
        $subject = "Helyfoglalás";
        $headers = "From:" . $from;
        $result = mail($to, $subject, $message, $headers);

        if ($result)
        {
            echo '<script type="text/javascript">alert("Email elküldve!");</script>';

        }
        else
        {
            echo '<script type="text/javascript">alert("Sikertelen! Próbálja meg újra!");</script>';
        }
        echo '<script type="text/javascript">window.location.href = window.location.href;</script>';

    }

    private function deleteCookie(string $cookieName): void
    {
        setcookie($cookieName, "", time() - 3600);
    }

    private function updateSeatStatus(int $id): void
    {
        $this->model->updateStatusById($id, "occupied");
    }

    private function getSeatIDs(): array
    {
        $cookieName = '/\bseatID/';
        $seatIDs = array();

        foreach($_COOKIE as $key=>$val) {
            if (str_contains($key, $cookieName)) {
                array_push($seatIDs, $key);
            }

        }
        return $seatIDs;
    }

}
