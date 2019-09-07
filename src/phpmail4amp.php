<?php

  class PHPmail4AMP {
    
    private $charset    = 'utf-8';
    private $from       = 'root@localhost';
    private $to         = array();
    private $cc         = array();
    private $bcc        = array();
    private $replyto;
    
    public $subject     = '';
    public $mailText    = '';
    public $mailHML     = '';
    public $mailAMP     = '';
    
    public function __construct() {
      $this->boundary   = md5(uniqid(rand()));
    }
    
    private function mimeEncode($text) {
      return '=?'.$this->charset.'?Q?'.imap_8bit($text).'?=';
    }
    
    private function emailValidator($email, $name = '') {
      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return !empty($name) ? $this->mimeEncode($name).' <'.$email.'>' : $email;
      } else {
        return false;
      }
    }
    
    public function sendFrom($email, $name = '') {
      if($this->emailValidator($email, $name) !== false) $this->from = $this->emailValidator($email, $name);
    }
    
    public function replyTo($email, $name = '') {
      if($this->emailValidator($email, $name) !== false) $this->replyto = $this->emailValidator($email, $name);
    }
    
    public function sendTo($email, $name = '') {
      if($this->emailValidator($email, $name) !== false) $this->to[] = $this->emailValidator($email, $name);
    }
    
    public function sendCC($email, $name = '') {
      if($this->emailValidator($email, $name) !== false) $this->cc[] = $this->emailValidator($email, $name);
    }
    
    public function sendBCC($email, $name = '') {
      if($this->emailValidator($email, $name) !== false) $this->bcc[] = $this->emailValidator($email, $name);
    }
    
    private function headers() {
      $headers          = 'From: '.$this->from."\n";
      $headers         .= (!empty($this->replyto) ? 'Reply-To: '.$this->replyto."\n" : '');
      $headers         .= (!empty($this->cc) ? 'Cc: '.implode(', ', $this->cc)."\n" : '');
      $headers         .= (!empty($this->bcc) ? 'Bcc: '.implode(', ', $this->bcc)."\n" : '');
      $headers         .= 'X-Mailer: PHPmail4AMP'."\n";
      $headers         .= 'MIME-Version: 1.0'."\n";
      $headers         .= 'Content-type: multipart/alternative; boundary="'.$this->boundary.'"'."\n\n";
      
      return $headers;
    }

    private function content() {
      $content          = '--'.$this->boundary."\n";
      $content         .= 'Content-Type: text/plain; charset="'.$this->charset.'"; format=flowed; delsp=yes'."\n";
      $content         .= 'Content-Transfer-Encoding: 8bit'."\n\n";
      $content         .= $this->mailText."\n\n";
      
      if(!empty($this->mailAMP)) {
        $content       .= '--'.$this->boundary."\n";
        $content       .= 'Content-Type: text/x-amp-html; charset="'.$this->charset.'"'."\n";
        $content       .= 'Content-Transfer-Encoding: 8bit'."\n\n";
        $content       .= $this->mailAMP."\n";
      }
      
      if(!empty($this->mailHTML)) {
        $content       .= '--'.$this->boundary.''."\n";
        $content       .= 'Content-Type: text/html; charset="'.$this->charset.'"'."\n";
        $content       .= 'Content-Transfer-Encoding: 8bit'."\n\n";
        $content       .= $this->mailHTML."\n";
      }
      
      return $content;
    }
    
    public function send() {
      $headers          = $this->headers();
      $recipients       = implode(', ', $this->to);
      $body             = $this->content();
      $subject          = $this->mimeEncode(htmlspecialchars($this->subject));
      return mail($recipients, $subject, $body, $headers);
    }
    
  }

?>
