<?php

namespace App\Http\Controllers\From;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class BusinessFormController extends Controller
{
    public function show(){
        return view('froms.loan.busines-form');
    }

    public function composeEmail(Request $request) {

        $request->validate([
            'loanamount' => 'required|min:3|max:100',
            'income' => 'required|min:5|max:100',
            'purposeloan' => 'required|min:5|max:100',
            'loanmonths' => 'required|min:5|max:100',
            'name' => 'required|min:3|max:100',
            'fname' => 'required|min:3|max:100',
            'mname' => 'required|min:3|max:100',
            'email' => 'required|email',
            'birthdate' => 'required|min:3|max:100',
            'phone' => 'required|min:10|max:15',
            'panno' => 'required|min:3|max:100',
            'aadhno' => 'required|min:3|max:100',
            'voterno' => 'required|min:3|max:100',
            'bankacno' => 'required|min:3|max:100',
            'branchname' => 'required|min:3|max:100',
            'ifsccode' => 'required|min:3|max:100',
            'gender' => 'required|min:2|max:100',
            'category' => 'required|min:2|max:100',
            'qualif' => 'required|min:1|max:100',
            'martialstatus' => 'required|min:3|max:100',
            'spname' => 'required|min:3|max:100',
            'houseno' => 'required|min:3|max:100',
            'street' => 'required|min:3|max:100',
            'city' => 'required|min:3|max:100',
            'state' => 'required|min:3|max:100',
            'pincode' => 'required|min:3|max:100',
            'shopname' => 'required|min:3|max:100',
            'tlnumber' => 'required|min:3|max:100',
            'busitype' => 'required|min:3|max:100',
            'baddress' => 'required|min:3|max:100',
            'bmobilen' => 'required|min:3|max:100',
            'bemailid' => 'required|email',
        ]);

        if(isset($_POST['form_submit'])) {
            $loanamount = $_POST['loanamount'];
            $income = $_POST['income'];
            $purposeloan = $_POST['purposeloan'];
            $loanmonths = $_POST['loanmonths'];
            $name = $_POST['name'];
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $email = $_POST['email'];
            $birthdate = $_POST['birthdate'];
            $phone = $_POST['phone'];
            $panno = $_POST['panno'];
            $aadhno = $_POST['aadhno'];
            $voterno = $_POST['voterno'];
            $bankacno = $_POST['bankacno'];
            $branchname = $_POST['branchname'];
            $ifsccode = $_POST['ifsccode'];
            $gender = $_POST['gender'];
            $category = $_POST['category'];
            $qualif = $_POST['qualif'];
            $martialstatus = $_POST['martialstatus'];
            $spname = $_POST['spname'];
            $houseno = $_POST['houseno'];
            $street = $_POST['street'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $pincode = $_POST['pincode'];
            $shopname = $_POST['shopname'];
            $tlnumber = $_POST['tlnumber'];
            $busitype = $_POST['busitype'];
            $baddress = $_POST['baddress'];
            $bmobilen = $_POST['bmobilen'];
            $bemailid = $_POST['bemailid'];
        }

        $adminEmail = "nofinoruralfinance@gmail.com";

        $html = "
        <center style='background-color: #ebebeb !important;display: table;table-layout: fixed; width: 100%;min-width: 620px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;'>
                        <table style=' width: 302px; margin: 0 auto; width: 602px;' width='602' border='0' cellspacing='0' cellpadding='0'>
                            <tbody>
                                <tr>
                                    <td style='text-align: left;' width='300'>
                                        Nofino Rural Finance Private Limited
                                    </td>
                                    <td styel='width: 300px;padding: 8px 0;color: #616161;font-weight: 400;font-size: 12px;line-height: 14px;' width='300'>
                                        <a style='font-weight: 700; text-align: right;' href='https://nofinofinance.com' target='_blank'>
                                            https://nofinofinance.com
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style=' background-color: #e0e0e0;width: 1px;font-size: 1px;line-height: 1px;' colspan='2'>&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>

                        <div style='  width: 100%; line-height: 16px; width: 1px;font-size: 1px;line-height: 1px;'>&nbsp;</div>

                        <table style=' -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
                                -moz-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
                                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24); '
                                width='602' border='0' cellspacing='0'' cellpadding='0'>
                            <tbody>
                                <tr>
                                    <td style=' text-align: left;background-color: #ffffff;font-size: 14px;'>
                                        <div style='font-size: 24px;line-height: 24px;'>&nbsp;</div>
                                        <table style='width: 100%;' border='0' cellspacing='0' cellpadding='0'>
                                            <tbody>
                                                <tr>
                                                    <td style='padding: 0 24px;'>
                                                        <h1 style=text-align:center !important; margin-top: 0;font-weight: 800;font-size: 28px;'>
                                                        Hello, You have get an Enquiiry!</h1>
                                                        <hr>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Loan Amount: $loanamount
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Monthly Income: $income
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Purpose of Loan: $purposeloan
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Loan Months: $loanmonths
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Your Name: $name
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Father Name: $fname
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Mother Name: $mname
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Your Email Id: $email
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Date of Birth: $birthdate
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Mobile Number: $phone
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Pan Card Number: $panno
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Aadhaar Card Number: $aadhno
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Voter Card Number: $voterno
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                             Bank Account Number: $bankacno
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Bank Name & Branch: $branchname
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                IFSC Code: $ifsccode
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Gender : $gender
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Category: $category
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Qualification: $qualif
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Marital Status: $martialstatus
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Spose Name: $spname
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                House No/Name: $houseno, $street, $city, $state, $pincode
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Shop Name: $shopname
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Trade License Number: $tlnumber
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Business Type: $busitype
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Business Address: $baddress
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Business Mobile Number: $bmobilen
                                                            </p>
                                                            <p style='margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;
                                                            font-weight: 400; font-size: 16px;line-height: 24px;'>
                                                                Business Email Id: $bemailid
                                                            </p>

                                                            <hr>
                                                            <p style=' color: #616161; font-weight: 500; font-size: 16px;line-height: 20px;'>Declaration </p>
                                                            <p style=' color: #616161; font-size: 12px; line-height: 20px;'>
                                                                I hereby declare that all the information given above is true and correct to the best of my knowledge.
                                                                 All the information shared in the Loan request is correct,
                                                                 and I take full responsibility for its correctness. I solemnly declare that the information
                                                                  in this Loan request is true to the best of my knowledge and belief.
                                                            </p>

                                                        <p style='margin-top: 0;text-align:center;margin-top: 0;margin-bottom: 16px;color: #212121;font-weight: 400;
                                                        font-size: 16px;line-height: 24px;'>
                                                            <a href='https://nofinofinance.com' target='_blank' style='background-color: #2196F3;
                                                                        border: 1px solid #2196F3;border-radius: 2px;color: #ffffff;display: inline-block;
                                                                        font-size: 14px;font-weight: 400;line-height: 36px;text-align: center;text-decoration: none;
                                                                        text-transform: uppercase;width: 200px;
                                                                        height: 36px;padding: 0 8px;margin: 0;outline: 0;
                                                                        outline-offset: 0; font-family: Roboto, Helvetica, sans-serif; -webkit-text-size-adjust: none; mso-hide: all;'>
                                                                Nofino Rural Finance
                                                            </a>
                                                        </p>
                                                        <p styel=' color: #616161;font-size: 12px;line-height: 20px;'>Thanks,<br>
                                                            Nofino Rural Finance Private Limied
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div style='font-size: 8px;line-height: 8px;'>&nbsp;</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div style='font-size: 1px;line-height: 1px;width: 100%;'>&nbsp;</div>

                        <table style='width: 302px !important; margin: 0 auto;width: 602px;' width='602' border='0' cellspacing='0' cellpadding='0'>
                            <tbody>
                                <tr>
                                    <td style='font-size: 1px;line-height: 1px;background-color: #e0e0e0; width: 1px;' colspan='2'>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style='display: block;float: left; width: 300px !important;text-align: center !important;' width='300'>
                                        <p>
                                            Mandia Gaon, Mandia, Barpeta, Assam - 781308 India<br>
                                            +91 3665357493 / +91 7086788028 / +91 7002079156 <br>
                                        </p>
                                        <p>
                                            Support: <a style='font-weight: 700;' href='mailto:support@nofinofinance.com'
                                                target='_blank'>support@nofinofinance.com</a>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </center> ";

        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail-> Host = env('MAIL_HOST');             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');   //  sender username
            $mail->Password = env('MAIL_PASSWORD');       // sender password
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');                  // encryption - ssl/tls
            $mail->Port = env('MAIL_PORT');                          // port - 587/465

            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress($adminEmail);
            $mail->addCC($email, $name);

            $mail->addReplyTo($adminEmail);

            //////////////////image uplaoded file////////////////////////////
            if(isset($_FILES['pancardimage'])) {
                for ($i=0; $i < count($_FILES['pancardimage']['tmp_name']); $i++) {
                    $mail->addAttachment($_FILES['pancardimage']['tmp_name'][$i], $_FILES['pancardimage']['name'][$i]);
                }
            }
            if(isset($_FILES['aadhcardimage'])) {
                for ($i=0; $i < count($_FILES['aadhcardimage']['tmp_name']); $i++) {
                    $mail->addAttachment($_FILES['aadhcardimage']['tmp_name'][$i], $_FILES['aadhcardimage']['name'][$i]);
                }
            }
            if(isset($_FILES['voterimage'])) {
                for ($i=0; $i < count($_FILES['voterimage']['tmp_name']); $i++) {
                    $mail->addAttachment($_FILES['voterimage']['tmp_name'][$i], $_FILES['voterimage']['name'][$i]);
                }
            }
            if(isset($_FILES['bankpassimage'])) {
                for ($i=0; $i < count($_FILES['bankpassimage']['tmp_name']); $i++) {
                    $mail->addAttachment($_FILES['bankpassimage']['tmp_name'][$i], $_FILES['bankpassimage']['name'][$i]);
                }
            }
            if(isset($_FILES['tredlinceimage'])) {
                for ($i=0; $i < count($_FILES['tredlinceimage']['tmp_name']); $i++) {
                    $mail->addAttachment($_FILES['tredlinceimage']['tmp_name'][$i], $_FILES['tredlinceimage']['name'][$i]);
                }
            }
            if(isset($_FILES['spopwonerimage'])) {
                for ($i=0; $i < count($_FILES['spopwonerimage']['tmp_name']); $i++) {
                    $mail->addAttachment($_FILES['spopwonerimage']['tmp_name'][$i], $_FILES['spopwonerimage']['name'][$i]);
                }
            }
            if(isset($_FILES['yphotoimage'])) {
                for ($i=0; $i < count($_FILES['yphotoimage']['tmp_name']); $i++) {
                    $mail->addAttachment($_FILES['yphotoimage']['tmp_name'][$i], $_FILES['yphotoimage']['name'][$i]);
                }
            }
            if(isset($_FILES['signatimage'])) {
                for ($i=0; $i < count($_FILES['signatimage']['tmp_name']); $i++) {
                    $mail->addAttachment($_FILES['signatimage']['tmp_name'][$i], $_FILES['signatimage']['name'][$i]);
                }
            }


            $mail->isHTML(true);                // Set email content format to HTML

            $mail->Subject = 'Business Loan Request';
            $mail->Body    = $html;

            // $mail->AltBody = plain text version of email body;

            if( !$mail->send() ) {
                return back()->with("error", "Request Not Successfull ! Plaese try again")->withErrors($mail->ErrorInfo);
            }

            else {
                return back()->with("success", "Request has been Successfully ! Our team will contact with you very soon.");
            }

        } catch (Exception $e) {
             return back()->with('error','Message could not be sent.');
        }
    }
}
