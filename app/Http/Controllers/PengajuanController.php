<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule; 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use App\Pengajuan;
class PengajuanController extends Controller
{
    public function index(){
        $pengajuans = Pengajuan::all();
        return view('pegawai.Pengajuan',["pengajuans"=>$pengajuans]);
    }
    public function hapusPengajuan($id){
        
        Pengajuan::find($id)->delete();
        
        return redirect('Pengajuan');
    }

    function mailPengajuan($id_pengajuan){

        $data = Pengajuan::findOrFail($id_pengajuan);
        return view('Admin.contact-form',compact('data'));
    }

    function sendmail(Request $request, $id_pengajuan){
        
    //      $details = [
    //     'title' => 'Mail from ItSolutionStuff.com',
    //     'body' => 'This is for testing email using smtp'
    // ];
   
    // \Mail::to('permana4131@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
        $subject = "Konfirmasi Pengajuan Peminjaman";
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('message');

        $mail = new PHPMailer(true);                       // Passing `true` enables exceptions
        try {
            // Pengaturan Server
          // $mail->SMTPDebug = 2;                        // Enable verbose debug output
            // $mail->isSMTP();                               // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';           // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                        // Enable SMTP authentication
            $mail->Username = 'myemail@jtptapanuli.com';   // SMTP username
            $mail->Password = 'd9?tg?{C6N+r';            // SMTP password
           	$mail->SMTPSecure = "ssl";                 // Enable TLS encryption, `ssl` also accepted
            $mail->Subject =  $subject;
            $mail->Port = 465;
            // $mail->SMTPAutoTLS = false;                             // TCP port to connect 465
            // Siapa yang mengirim email
            $mail->setFrom('upkbonatualunasi@jtptapanuli.com');
            
            // Siapa yang akan menerima email
            $mail->addAddress($emailAddress);     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional

            // ke siapa akan kita balas emailnya
            $mail->addReplyTo($emailAddress, $name);
            
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
              $mail->Body = '<!doctype html>
        			<html lang="en">
        			<head>
        				<meta charset="UTF-8">
        				<meta name="viewport"
        					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        				<meta http-equiv="X-UA-Compatible" content="ie=edge">
        				<title>Document</title>
        			</head>
        			<body>
        			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
        				<div class="container">
        				<h4>Hallo <h2>'.$name.'</h2> Selamat Permintaan anda Telah diterima oleh kami </h4><br/>
                         '.$message.'<br/>
        				</div>
        			</body>
        			</html>';
            // $mail->Subject = $subject;
            // $mail->Body    = $message;
            // $mail->AltBody = $message;
            
            $mail->addAddress($emailAddress);
            
            if($mail->send()){
                 $data = Pengajuan::findOrFail($id_pengajuan);

                $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
                return view('Admin.contact-form',compact('data'));
            }else{
                 ?>
                   <script>
                        alert("Message could not be sent. Mailer Error: "<?php $mail->ErrorInfo ?>")
                        location.replace("https://upkbonatualunasi.jtptapanuli.com/pengajuan/mail/.<?php $id_pengajuan ?>")
                   </script>
                   <?php
            }
            
             $mail->smtpClose();
           

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
}
