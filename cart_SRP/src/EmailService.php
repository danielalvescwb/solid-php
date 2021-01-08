<?php

namespace src;

class EmailService {
    
    private $to;
    private $for;
    private $subject;
    private $content;

    public function __construct(
        $to = 'contato@site.com.br',
        $for = '',
        $subject = '',
        $content = ''
    )
    {
        $this->to = $to;
        $this->for = $for;
        $this->subject = $subject;
        $this->content = $content;
    }

    public static function sendEmail()
    {
        return 'E-mail enviado!';
    }
}