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
        $seatId = $_COOKIE['selected'];

        if (isset($_POST['submit']))
        {
            if (isset($_COOKIE['selected']))
            {
                $this->sendEmail();
                $this->deleteCookie();
                $this->updateSeatStatus($seatId);
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

    private function deleteCookie(): void
    {
        setcookie('selected', "", time() - 3600);
    }

    private function updateSeatStatus(int $id): void
    {
        $this->model->updateStatusById($id, "occupied");
    }

}
